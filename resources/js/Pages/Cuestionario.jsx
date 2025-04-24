import { Link, Head, usePage } from "@inertiajs/react";
import { useState, useEffect } from "react";
import Header from "../Components/Header";
import { Inertia } from "@inertiajs/inertia";
import { ToastContainer, toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

export default function Cuestionario({ asignatura, preguntas }) {
    const [respuestasMarcadas, setRespuestasMarcadas] = useState({});
    const { props } = usePage();
    const mensaje = props.success;
    console.log("bbb ", props);
    const gestionarRespuestaMarcada = (idPregunta, idRespuesta) => {
        setRespuestasMarcadas((prev) => ({
            ...prev,
            [idPregunta]: idRespuesta,
        }));
    };

    const enviarCuestionario = () => {
        console.log(respuestasMarcadas);
        // enviamos los resultados del cuestionario al backend
        Inertia.put("/enviar-cuestionario", {
            respuestas: respuestasMarcadas,
            id_asignatura: asignatura.id,
        });
    };

    useEffect(() => {
        if (mensaje) {
            toast.success(mensaje, {
                closeButton: true,
            });
        }
    }, [mensaje]);

    return (
        <>
            <ToastContainer position="top-right" autoClose={5000} closeButton />
            <Head title="cuestionario" />
            <Header />
            <div className="p-6">
                <h1 className="text-2xl font-bold mb-4">
                    Cuestionario de {asignatura.nombre}
                </h1>
                <ol className="list-decimal ml-6">
                    {preguntas.map((pregunta) => (
                        <li key={pregunta.id} className="mb-4">
                            <div className="font-semibold">
                                {pregunta.texto}
                            </div>
                            <ul className="list-none list-inside ml-4 ">
                                {pregunta.respuestas.map((respuesta) => (
                                    <li key={respuesta.id}>
                                        <input
                                            type="radio"
                                            name={`pregunta-${pregunta.id}`}
                                            value={respuesta.id}
                                            onChange={() =>
                                                gestionarRespuestaMarcada(
                                                    pregunta.id,
                                                    respuesta.id
                                                )
                                            }
                                            checked={
                                                respuestasMarcadas[
                                                    pregunta.id
                                                ] === respuesta.id
                                            }
                                        />
                                        {respuesta.texto}
                                    </li>
                                ))}
                            </ul>
                        </li>
                    ))}
                </ol>
                <button
                    onClick={() => enviarCuestionario(asignatura.id)}
                    className="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                >
                    Enviar cuestionario
                </button>
            </div>
        </>
    );
}
