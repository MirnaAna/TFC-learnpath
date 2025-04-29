import React from "react";
import { useState } from "react";
import SelectFormacion from "@/Components/SelectFormacion";
import { Inertia } from "@inertiajs/inertia";
import { usePage } from "@inertiajs/react";
import { Link } from "@inertiajs/react";

export default function TablaProgreso({
    asignaturasProgreso,
    formaciones,
    estados,
}) {
    const { url } = usePage();
    const [buscar, setBuscar] = useState("");
    const datosFiltrados = asignaturasProgreso.filter((item) =>
        `${item.nombre_asignatura} ${item.nombre_estado}`
            .toLowerCase()
            .includes(buscar.toLowerCase())
    );

    const [formacionSeleccionada, setFormacionSeleccionada] = useState("");
    const [asignaturas, setAsignaturas] = useState(datosFiltrados || []);
    const gestionarFormacionSelecionada = (valorSeleccionado) => {
        const idFormacion = valorSeleccionado;
        setFormacionSeleccionada(idFormacion);
        if (idFormacion) {
            Inertia.get(
                `${route().t.url}${url}`,
                { nuevaFormacionSeleccionada: idFormacion },
                {
                    preserveState: true,
                    replace: true,
                }
            );
        } else {
            setAsignaturas(datosFiltrados);
        }
    };

    //para gestionar el cambio de estado
    const [abrirDropdown, setAbrirDropdown] = useState(null); // para saber el estado actual
    const gestionarCambiarEstado = (idAsignatura, nuevoEstado) => {
        Inertia.put(`/asignaturas/${idAsignatura}/cambiar-estado`, {
            estado: nuevoEstado,
        });
        setAbrirDropdown(null); // cerramos el dropdown despues del cambio
    };

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
                                <th className="border border-black p-2">#</th>
                                <th className="border border-black p-2">
                                    {titulo}
                                </th>
                                <th className="border border-black p-2">
                                    Estado
                                </th>
                                <th className="border border-black p-2">
                                    Accion
                                </th>
                                <th className="border border-black p-2">
                                    Cuestionarios
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
                                        <button
                                            className="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-700 text-xs sm:text-sm"
                                            onClick={() =>
                                                setAbrirDropdown((anterior) =>
                                                    anterior ===
                                                    item.id_asignatura
                                                        ? null
                                                        : item.id_asignatura
                                                )
                                            }
                                        >
                                            Cambiar estado
                                        </button>
                                        {abrirDropdown ===
                                            item.id_asignatura && (
                                            <div className="absolute mt-2 bg-white border shadow-md rounded z-10">
                                                {estados.map((estado) => (
                                                    <button
                                                        key={estado.id}
                                                        onClick={() =>
                                                            gestionarCambiarEstado(
                                                                item.id_asignatura,
                                                                estado.nombre
                                                            )
                                                        }
                                                        className="block w-full px-4 py-2 text-left hover:bg-gray-100"
                                                    >
                                                        {estado.nombre}
                                                    </button>
                                                ))}
                                            </div>
                                        )}
                                    </td>
                                    {/* formato de la fecha */}
                                    <td className="border border-black p-2 text-sm text-blue-700">
                                        <a
                                            href={`/cuestionario/${item.id_asignatura}`}
                                        >
                                            Realizar Test
                                        </a>
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
                {/* <SelectFormacion formaciones={formaciones} /> */}

                <select
                    id="formation-select"
                    className="border-2 border-gray-500 p-2 rounded w-64 text-left bg-slate-300"
                    value={formacionSeleccionada}
                    onChange={(e) =>
                        gestionarFormacionSelecionada(e.target.value)
                    }
                >
                    <option value="" disabled hidden>
                        --selecciona una formacion--
                    </option>
                    {formaciones.map((formacion, index) => (
                        <option key={index} value={formacion.abreviatura}>
                            {formacion.abreviatura}
                        </option>
                    ))}
                </select>
            </div>
            <div className="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
                {renderTabla("Asignaturas", datosFiltrados)}
            </div>
        </div>
    );
}
