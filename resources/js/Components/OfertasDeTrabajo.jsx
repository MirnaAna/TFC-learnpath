import { useEffect, useState } from "react";
import axios from "axios";

export default function OfertasDeTrabajo() {
    const [trabajos, setTrabajos] = useState([]);
    const [cargando, setCargando] = useState(true);

    useEffect(() => {
        async function obtenerTrabajos() {
            try {
                const respuesta = await axios.get("/api/api-trabajos");
                setTrabajos(respuesta.data);
            } catch (error) {
                console.error("error al mostrar trabajos", error);
            } finally {
                setCargando(false);
            }
        }

        obtenerTrabajos();
    });

    return (
        <section className=" bg-white text-gray-800 shadow-2xl rounded-2xl p-8 mt-10 max-w-5xl w-full text-center animate-slide-up">
            <h2 className="text-2xl font-bold text-center mb-8">
                Ofertas de trabajo
            </h2>
            {cargando ? (
                <p className="text-center text-gray-700 text-lg">
                    Cargando ofertas...
                </p>
            ) : trabajos.length > 0 ? (
                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    {trabajos.map((trabajo, index) => (
                        <div
                            key={index}
                            className="bg-gray-100 shadow-md p-6 rounded-xl flex-col items-center hover:scale-105 transition-transform"
                        >
                            <h3 className="text-xl font-bold text-purple-700 mb-2">
                                {trabajo.position}
                            </h3>
                            <p className="text-gray-600 font-medium mb-4">
                                {trabajo.company}
                            </p>
                            <a
                                href={trabajo.url}
                                target="_blank"
                                className="bg-yellow-400 text-gray-900 font-semibold px-4 py-2 rounded-xl hover:bg-yellow-500 transition-colors"
                            >
                                Ver oferta
                            </a>
                        </div>
                    ))}
                </div>
            ) : (
                <p className="text-center text-gray-500 text.lg">
                    No hay trabajos disponibles
                </p>
            )}
        </section>
    );
}
