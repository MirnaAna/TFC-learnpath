import { useEffect, useState } from "react";
import axios from "axios"; // cliente http para hacer peticiones a APIS
import { FaBriefcase, FaSpinner } from "react-icons/fa";

export default function OfertasDeTrabajo() {
    const [trabajos, setTrabajos] = useState([]);
    const [cargando, setCargando] = useState(true);

    useEffect(() => {
        // Función asincrónica para obtener trabajos desde la API
        async function obtenerTrabajos() {
            try {
                const respuesta = await axios.get("/api/api-trabajos");
                setTrabajos(respuesta.data);
            } catch (error) {
                console.error("Error al mostrar trabajos", error);
            } finally {
                setCargando(false);
            }
        }

        obtenerTrabajos();
    }, []);

    return (
        <section className="min-h-screen bg-gradient-to-br from-purple-400 to-blue-100 py-12 px-4 flex flex-col items-center">
            <h2 className="text-4xl font-bold text-white mb-10 text-center">
                Ofertas de Trabajo
            </h2>
            <div className="max-w-6xl w-full">
                {cargando ? (
                    <div className="flex justify-center items-center text-white text-lg font-semibold animate-pulse">
                        <FaSpinner className="animate-spin mr-2" />
                        Cargando ofertas...
                    </div>
                ) : trabajos.length > 0 ? (
                    <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        {trabajos.map((trabajo, index) => (
                            <div
                                key={index}
                                className="bg-white text-gray-800 shadow-lg rounded-xl p-6 flex flex-col justify-between hover:shadow-xl hover:scale-[1.03] transition-transform"
                            >
                                <div>
                                    <h3 className="text-xl font-bold text-purple-700 mb-1">
                                        {trabajo.position}
                                    </h3>
                                    <p className="text-gray-600 font-medium mb-4">
                                        {trabajo.company}
                                    </p>
                                </div>
                                <a
                                    href={trabajo.url}
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    className="mt-auto bg-yellow-400 text-gray-900 font-semibold px-4 py-2 rounded-xl text-center hover:bg-yellow-500 transition-colors"
                                >
                                    Ver oferta
                                </a>
                            </div>
                        ))}
                    </div>
                ) : (
                    <p className="text-center text-white text-lg mt-4">
                        No hay trabajos disponibles en este momento.
                    </p>
                )}
            </div>
        </section>
    );
}
