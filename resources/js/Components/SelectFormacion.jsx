import * as React from "react";
import { useState } from "react";
import { Inertia } from "@inertiajs/inertia";

export default function SelectFormacion({ formaciones }) {
    const [formacionSeleccionada, setFormacionSeleccionada] = useState("");
    function gestionarRedireccionFormacion() {
        if (formacionSeleccionada != "") {
            Inertia.visit(
                // Si hay una formación seleccionada, redirigimos a su página de detalles con Inertia
                `/detalles-formacion/${formacionSeleccionada.toLocaleUpperCase()}`
            );
        } else {
            alert("Debes seleccionar una formación");
        }
    }
    return (
        <div className="flex flex-col md:flex-row gap-4 items-center w-full max-w-xl p-4 bg-white rounded shadow-md">
            <label className=" border-2 bg-fuchsia-500 text-white font-semibold py-2 px-4 rounded">
                Selecciona tu formación
            </label>
            <select
                id="formation-select"
                className="border-2 border-gray-500 p-2 rounded w-64 text-left bg-slate-300"
                value={formacionSeleccionada}
                onChange={(e) => setFormacionSeleccionada(e.target.value)}
            >
                <option value="" disabled hidden>
                    --selecciona una formacion--
                </option>
                {/* Recorre las formaciones pasadas por props y crea una opción por cada una */}
                {formaciones.map((formacion, index) => (
                    <option key={index} value={formacion.abreviatura}>
                        {formacion.abreviatura}
                    </option>
                ))}
            </select>
            {/*añadims un boton*/}
            <button
                className=" border-2 bg-purple-500 hover:bg-blue-700 text-white font-semibold py-2 px-4"
                onClick={gestionarRedireccionFormacion}
            >
                Ok
            </button>
        </div>
    );
}
