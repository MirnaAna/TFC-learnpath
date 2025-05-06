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
        <div style={{ width: "100%", height: 400 }}>
            <ResponsiveContainer width="100%" height={700}>
                <BarChart
                    layout="vertical"
                    data={asignaturaEstado}
                    margin={{ top: 20, right: 30, left: 100, bottom: 5 }}
                >
                    <CartesianGrid strokeDasharray="3 3" />
                    <XAxis
                        type="number"
                        domain={[0, 10]}
                        ticks={[0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]}
                        width={800}
                    />
                    <YAxis
                        dataKey="nombre_asignatura"
                        type="category"
                        width={500}
                    />
                    <Tooltip />
                    <Legend />
                    <Bar dataKey="puntuacion">
                        {asignaturaEstado.map((entry, index) => (
                            <Cell
                                key={`cell-${index}`}
                                fill={
                                    entry.puntuacion <= 4
                                        ? "#85210b" // color marron
                                        : "#22c55e" // color verde
                                }
                            />
                        ))}
                    </Bar>
                </BarChart>
            </ResponsiveContainer>
        </div>
    );
}
