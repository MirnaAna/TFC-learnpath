import { Link, Head, usePage } from "@inertiajs/react";
import { useState } from "react";
import Header from "../Components/Header";

export default function Cuestionario({ asignatura, preguntas }) {
    const [respuestasMarcadas, setRespuestasMarcadas] = useState({});

    const gestionarRespuestaMarcada = (idPregunta, idRespuesta) => {
        setRespuestasMarcadas((prev) => ({
            ...prev,
            [idPregunta]: idRespuesta,
        }));
    };

    const enviarCuestionario = () => {
        console.log(respuestasMarcadas);
        // Aquí haces un fetch/axios o inertia.post para enviar al backend
        Inertia.put("/enviar-cuestionario");
    };
    return (
        <>
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
                    onClick={enviarCuestionario}
                    className="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                >
                    Enviar cuestionario
                </button>
            </div>
        </>
    );
}
