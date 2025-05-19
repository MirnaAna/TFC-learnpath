import React from "react";
import { useState } from "react";
import { Head } from "@inertiajs/react";
import Header from "../Components/Header";

export default function Recursos({ asignaturas }) {
    const [buscar, setBuscar] = useState("");
    const datosFiltrados = asignaturas.filter((item) =>
        `${item.nombre}`.toLowerCase().includes(buscar.toLowerCase())
    );

    const renderTabla = (titulo, data) => {
        const filas = [...data];
        while (filas.length < 10) {
            filas.push({ id: `vacio-${filas.length}`, nombre: "", estado: "" });
        }
        return (
            <div className="w-full md:w-1/1 p-2">
                <div className="overflow-x-auto">
                    <input
                        type="text"
                        placeholder="Filtrar por Asignatura"
                        value={buscar}
                        onChange={(e) => setBuscar(e.target.value)}
                        className="border px-2 py-1 mb-2 w-1/3 text-center"
                    />
                    <table className="w-full border border-black shadow-md ">
                        <thead>
                            <tr className="bg-black text-white text-sm">
                                <th className="border border-black p-2">#</th>
                                <th className="border border-black p-2">
                                    {titulo}
                                </th>
                                <th className="border border-black p-2">
                                    Documentacion
                                </th>
                                <th className="border border-black p-2">
                                    Tutorial
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {datosFiltrados.map((item, index) => (
                                <tr key={index} className="text-center">
                                    <td className="border border-black p-2">
                                        {index + 1}
                                    </td>
                                    <td className="border border-black p-2 text-sm">
                                        {item.nombre && (
                                            <span className="text-gray-900">
                                                {item.nombre}
                                            </span>
                                        )}
                                    </td>
                                    <td className="border border-black p-2 text-sm">
                                        {item.documentacion && (
                                            <a
                                                className="text-blue-600"
                                                href={item.documentacion}
                                                target="_blank"
                                            >
                                                {item.documentacion}
                                            </a>
                                        )}
                                    </td>
                                    <td className="border border-black p-2 text-sm">
                                        {item.tutorial && (
                                            <a
                                                className="text-blue-600"
                                                href={item.tutorial}
                                                target="_blank"
                                            >
                                                {item.tutorial}
                                            </a>
                                        )}
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            </div>
        );
    };
    return (
        <>
            <Head title="Recursos" />
            <Header />
            <div className="p-4 sm:p-6">
                <h2 className="text-xl sm:text-2xl font-bold text-center mb-6">
                    Recursos
                </h2>
                <div className="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
                    {renderTabla("Asignaturas", datosFiltrados)}
                </div>
            </div>
        </>
    );
}
