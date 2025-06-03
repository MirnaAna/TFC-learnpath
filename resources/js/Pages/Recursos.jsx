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
            <div className="w-full ">
                <input
                    type="text"
                    placeholder="Filtrar por Asignatura"
                    value={buscar}
                    onChange={(e) => setBuscar(e.target.value)}
                    className="border border-gray-300 px-4 py-2 mb-4 w-full max-w-md mx-auto block rounded shadow-sm focus:outline-none focus:ring focus:border-blue-400"
                />
                <div className="overflow-x-auto rounded shadow-lg">
                    <table className="min-w-full border text-sm sm:text-base text-center ">
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
                                    <td className="border border-black p-2 text-sm max-w-xs truncate">
                                        {item.documentacion && (
                                            <a
                                                className="text-blue-600 underline hover:text-blue-800"
                                                href={item.documentacion}
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                title={item.documentacion} // muestra url completa al pasar el mouse
                                            >
                                                Ver doc
                                            </a>
                                        )}
                                    </td>
                                    <td className="border border-black p-2 text-sm max-w-xs truncate">
                                        {item.tutorial && (
                                            <a
                                                className="text-blue-600 underline hover:text-blue-800"
                                                href={item.tutorial}
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                title={item.tutorial}
                                            >
                                                Tutorial
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
            <div className="px-4 py-8 max-w-7xl mx-auto">
                <h2 className="text-3xl font-bold text-center text-gray-800 mb-8">
                    Recursos
                </h2>
                <div className="flex flex-col space-y-6">
                    {renderTabla("Asignaturas", datosFiltrados)}
                </div>
            </div>
        </>
    );
}
