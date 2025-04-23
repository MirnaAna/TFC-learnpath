import React from "react";
import {
    BarChart,
    Bar,
    XAxis,
    YAxis,
    Tooltip,
    CartesianGrid,
    ResponsiveContainer,
} from "recharts";

export default function ChartProgreso({ asignaturaEstado }) {
    const totalEstados = asignaturaEstado.reduce((acc, asignatura) => {
        const estado = asignatura.nombre_estado;
        acc[estado] = (acc[estado] || 0) + 1;
        return acc;
    }, {});

    // Convertir a formato para chart
    const chartData = Object.entries(totalEstados).map(
        ([estado, contador]) => ({
            estado,
            contador,
        })
    );
    return (
        <div style={{ width: "100%", height: 400 }}>
            <ResponsiveContainer>
                <BarChart data={chartData}>
                    <CartesianGrid strokeDasharray="3 3" />
                    <XAxis dataKey="estado" />
                    <YAxis allowDecimals={false} />
                    <Tooltip />
                    <Bar dataKey="contador" fill="#8884d8" />
                </BarChart>
            </ResponsiveContainer>
        </div>
    );
}
