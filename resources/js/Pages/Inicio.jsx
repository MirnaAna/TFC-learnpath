import { useState } from "react";
import { Link, Head } from "@inertiajs/react";
import { Inertia } from "@inertiajs/inertia";
import Header from "../Components/Header";

export default function Inicio(props) {
    const [formacionSeleccionada, setFormacionSeleccionada] = useState("");

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
        <>
            <Head title="Inicio" />
            <Header></Header>
            {/* Contenedor para centrar el label y el select */}
            <div className="flex items-center justify-center min-h-screen bg-gray-50 p-6">
                <div className="flex items-center">
                    <label className=" border-2 bg-fuchsia-500 text-white font-semibold py-2 px-4 rounded">
                        Selecciona tu formación
                    </label>
                    <select
                        id="formation-select"
                        className="border-2 border-gray-500 p-2 rounded w-64 text-left bg-slate-300"
                        value={formacionSeleccionada}
                        onChange={(e) =>
                            setFormacionSeleccionada(e.target.value)
                        }
                    >
                        <option value="" disabled hidden>
                            --selecciona una formacion--
                        </option>
                        <option value="ASIR">ASIR</option>
                        <option value="DAM">DAM</option>
                        <option value="DAW">DAW</option>
                    </select>
                    {/*añadims un boton*/}
                    <button
                        className=" border-2 bg-purple-500 hover:bg-blue-700 text-white font-semibold py-2 px-4"
                        onClick={gestionarRedireccionFormacion}
                    >
                        Ok
                    </button>
                </div>
                <div className="column small-12">
                    <div className=" row mt-10">
                        <Link
                            href="/register"
                            className="bg-yellow-400 text-gray-900 px-6 py-3 rounded-xl shadow-lg hover:bg-yellow-500 hover:scale-105 transition-transform font-semibold text-lg"
                        >
                            registrar
                        </Link>
                    </div>
                    <div className="row mt-10">
                        <Link
                            href="/login"
                            className="bg-yellow-400 text-gray-900 px-6 py-3 rounded-xl shadow-lg hover:bg-yellow-500 hover:scale-105 transition-transform font-semibold text-lg"
                        >
                            Iniciar sesion
                        </Link>
                    </div>
                </div>
            </div>
        </>
    );
}
