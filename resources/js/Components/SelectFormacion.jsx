import * as React from "react";
import { useState } from "react";
import { Inertia } from "@inertiajs/inertia";

export default function SelectFormacion({ formaciones }) {
    const [formacionSeleccionada, setFormacionSeleccionada] = useState("");
    console.log(formaciones);
    function gestionarRedireccionFormacion() {
        console.log("hoaaaaaaaaaaa", typeof formacionSeleccionada);
        if (formacionSeleccionada != "") {
            Inertia.visit(
                `/detalles-formacion/${formacionSeleccionada.toLocaleUpperCase()}`
            );
        } else {
            alert("Debes seleccionar una formación");
        }
    }
    return (
        <div className="flex items-center">
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
