import { Link, Head, usePage } from "@inertiajs/react";
import { useEffect } from "react";
import Header from "../Components/Header";
import {
    FaServer,
    FaLaptopCode,
    FaCloud,
    FaShieldAlt,
    FaUsers,
    FaTools,
} from "react-icons/fa";

export default function DetallesFormacion() {
    const { nombreFormacion } = usePage().props;
    useEffect(() => {
        console.log(nombreFormacion);
    }, [nombreFormacion]);

    return (
        <>
            <Head title={nombreFormacion} Administración de redes />
            <Header />
            <div className="min-h-screen bg-gradient-to-br from-purple-600 to blue-500 flex flex-col items-center py-10 px-6 text-white">
                <h1 className="text-5xl font-extrabold mb-6 text-center animate-fade-in">
                    Administración de Sistemas Informáticos en Red{" "}
                    {nombreFormacion}
                </h1>
                <section className="bg-white text-gray-800 shadow-2xl rounded-2xl p-8 max-w-5xl w-full text-center animate-slide-up">
                    <h2 className="text-3xl font-semibold mb-4 text-purple-700">
                        ¿Qué es {nombreFormacion}?
                    </h2>
                    <p className="text-lg">
                        {nombreFormacion} es una formación profesional enfocada
                        en la administración de servidores, redes,
                        ciberseguridad y visualizaciónes...
                    </p>
                </section>
                <section className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8 max-w-5xl w-full">
                    {/*Tarjeta de contenido*/}
                    <div className="bg-white text-gray-800 shadow-xl rounded-xl p-6 flex items-center space-x-4 hover:scale-105 transition-transform">
                        <FaServer className="text-xl text-purple-600 text-5xl" />
                        <div>
                            <h3 className="text-xl font-bold text-purple-700">
                                Sistemas y Redes
                            </h3>
                            <p>
                                Gestión y mantenimiento de servidores y redes
                                informáticos.
                            </p>
                        </div>
                    </div>
                    {/*Tarjeta 2: Base de datos*/}
                    <div className="bg-white text-gray-800 shadow-xl rounded-xl p-6 flex items-center space-x-4 hover:scale-105 transition-transform">
                        <FaLaptopCode className="text-blue-600 text-5xl" />
                        <div>
                            <h3 className="text-xl font-bold text-blue-700">
                                Base de datos
                            </h3>
                            <p>Administración de base de datos SQL y NoSQL.</p>
                        </div>
                    </div>
                    {/*Tarjeta 3: Cloud Computing*/}
                    <div className="bg-white text-gray-800 shadow-xl rounded-xl p-6 flex items-center space-x-4 hover:scale-105 transition-transform">
                        <FaCloud className="text-indigo-600 text-5xl" />
                        <div>
                            <h3 className="text-xl font-bold text-indigo-700">
                                Cloud Computing
                            </h3>
                            <p>
                                Implementación de servidores en la nube y
                                virtualización.
                            </p>
                        </div>
                    </div>
                    {/*Tarjeta 4: Ciberseguridad*/}
                    <div className="bg-white text-gray-800 shadow-xl rounded-xl p-6 flex items-center space-x-4 hover:scale-105 transition-transform">
                        <FaShieldAlt className="text-red-600 text-5xl" />
                        <div>
                            <h3 className="text-xl font-bold text-red-700">
                                Ciberseguridad
                            </h3>
                            <p>
                                Preparación y respuesta a incidentes de
                                seguridad informática.
                            </p>
                        </div>
                    </div>
                    {/*Tarjeta 5: Gestión de equipos*/}
                    <div className="bg-white text-gray-800 shadow-xl rounded-xl p-6 flex items-center space-x-4 hover:scale-105 transition-transform">
                        <FaUsers className="text-green-600 text-5xl" />
                        <div>
                            <h3 className="text-xl font-bold text-green-700">
                                Gestión de equipos
                            </h3>
                            <p>
                                Administración y coordinación de equipos de
                                tranajos en IT.
                            </p>
                        </div>
                    </div>
                    {/*Tarjeta 6: Mantenimiento y sopporte*/}
                    <div className="bg-white text-gray-800 shadow-xl rounded-xl p-6 flex items-center space-x-4 hover:scale-105 transition-transform">
                        <FaTools className="text-yellow-600 text-5xl" />
                        <div>
                            <h3 className="text-xl font-bold text-yellow-700">
                                Mantenimiento y Soporte
                            </h3>
                            <p>
                                Resolución de problemas y mantenimiento
                                preventivo de equipos y sistemas.
                            </p>
                        </div>
                    </div>
                </section>
                {/*Sección de salidas profesionales*/}
                <section className="bg-white text-gray-800 shadow-2xl rounded-2xl p-8 mt-10 max-w-5xl w-full text-center animate-slide-up">
                    <h2 className="text-3xl font-semibold mb-4 text-purple-700">
                        Salidas profesionales
                    </h2>
                    {/*Lista de posibles salidas laborales para los graduados*/}
                    <ul className="text-lg text-left space-y-2">
                        <li>&#10004;Administrador de sistemas y redes.</li>
                        <li>&#10004;Técnico de ciberseguridad.</li>
                        <li>&#10004;Especialista en Cloud Computing.</li>
                        <li>&#10004;Soporte técnico y Help Desk.</li>
                        <li>&#10004;Consultor en infraestructura IT</li>
                    </ul>
                </section>
                <div className="mt-10">
                    <Link
                        href="/"
                        className="bg-yellow-400 text-gray-900 px-6 py-3 rounded-xl shadow-lg hover:bg-yellow-500 hover:scale-105 transition-transform font-semibold text-lg"
                    >
                        Volver Inicio
                    </Link>
                </div>
            </div>
        </>
    );
}
