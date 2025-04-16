import React from "react";
import { useState } from "react";
import SelectFormacion from "@/Components/SelectFormacion";

export default function TablaProgreso({ asignaturasProgreso, formaciones }) {
    const [buscar, setBuscar] = useState("");
    const datosFiltrados = asignaturasProgreso.filter((item) =>
        `${item.nombre_asignatura} ${item.nombre_estado}`
            .toLowerCase()
            .includes(buscar.toLowerCase())
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
                        placeholder="Filtrar por Asignatura o Estado"
                        value={buscar}
                        onChange={(e) => setBuscar(e.target.value)}
                        className="border px-2 py-1 mb-2 w-1/3 text-center"
                    />
                    <table className="w-full border border-black shadow-md ">
                        <thead>
                            <tr className="bg-black text-white text-sm">
                                <th className="border border-black p-2">
                                    {titulo}
                                </th>
                                <th className="border border-black p-2">
                                    Estado
                                </th>
                                <th className="border border-black p-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            {datosFiltrados.map((item, index) => (
                                <tr key={index} className="text-center">
                                    <td className="border border-black p-2 text-sm">
                                        {item.nombre_asignatura && (
                                            <span className="text-gray-400">
                                                {item.nombre_asignatura}
                                            </span>
                                        )}
                                    </td>
                                    <td className="border border-black p-2 text-sm">
                                        {item.nombre_estado && (
                                            <span className="text-gray-400">
                                                {item.nombre_estado}
                                            </span>
                                        )}
                                    </td>
                                    <td className="border border-black p-2">
                                        {item.nombre_estado ? (
                                            <button
                                                className="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-700 text-xs sm:text-sm"
                                                onClick={() =>
                                                    cambiarElestadoItems(
                                                        item.nombre_estado
                                                    )
                                                }
                                            >
                                                Cambiar estado
                                            </button>
                                        ) : (
                                            <span className="text-gray-400 text-sm">
                                                Cambiar estado
                                            </span>
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
        <div className="p-4 sm:p-6">
            <h2 className="text-xl sm:text-2xl font-bold text-center mb-6">
                Mi Progreso
            </h2>
            <div className="w-1/2 mx-auto p-6">
                <SelectFormacion formaciones={formaciones} />
            </div>
            <div className="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
                {renderTabla("Asignaturas", datosFiltrados)}
            </div>
        </div>
    );
}
