import React from "react";
import {
    BarChart,
    Bar,
    XAxis,
    YAxis,
    Tooltip,
    CartesianGrid,
    ResponsiveContainer,
    Cell,
    Legend,
} from "recharts";

export default function ChartProgreso({ asignaturaEstado }) {
    return (
        <div className="w-full h-[400px] sm:h-[600px]">
            <ResponsiveContainer width="100%" height="100%">
                <BarChart
                    layout="vertical"
                    data={asignaturaEstado}
                    margin={{ top: 20, right: 30, left: 60, bottom: 5 }}
                >
                    <CartesianGrid strokeDasharray="3 3" />
                    <XAxis
                        type="number"
                        domain={[0, 10]}
                        ticks={[0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]}
                    />
                    <YAxis
                        dataKey="nombre_asignatura"
                        type="category"
                        width={250}
                    />
                    <Tooltip />
                    <Legend />
                    <Bar dataKey="puntuacion">
                        {asignaturaEstado.map((entry, index) => (
                            <Cell
                                key={`cell-${index}`}
                                fill={
                                    entry.puntuacion <= 4
                                        ? "#85210b"
                                        : "#22c55e"
                                }
                            />
                        ))}
                    </Bar>
                </BarChart>
            </ResponsiveContainer>
        </div>
    );
}
