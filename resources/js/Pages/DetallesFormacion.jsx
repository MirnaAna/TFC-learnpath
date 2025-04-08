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
    const { formacion, asignaturas } = usePage().props;
    useEffect(() => {
        console.log(asignaturas);
    }, [formacion, asignaturas]);

    return (
        <>
            <Head title={formacion.nombre} />
            <Header />
            <div className="min-h-screen bg-gradient-to-br from-purple-600 to blue-500 flex flex-col items-center py-10 px-6 text-white">
                <h1 className="text-5xl font-extrabold mb-6 text-center animate-fade-in">
                    {formacion.nombre} {formacion.abreviatura}
                </h1>
                <section className="bg-white text-gray-800 shadow-2xl rounded-2xl p-8 max-w-5xl w-full text-center animate-slide-up">
                    <h2 className="text-3xl font-semibold mb-4 text-purple-700">
                        ¿Qué es {formacion.abreviatura}?
                    </h2>
                    <p className="text-lg mb-8">
                        {formacion.abreviatura} {formacion.texto_introducion}
                    </p>
                    <Link
                        href="/login"
                        title="Con Sesion Requerida"
                        className="bg-yellow-400 text-gray-900 px-4 py-3 rounded-xl shadow-lg hover:bg-purple-400 hover:scale-105 transition-transform"
                    >
                        Mi progreso
                    </Link>
                </section>
                <section className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8 max-w-5xl w-full">
                    {/*Tarjeta de contenido*/}
                    {asignaturas.map((asignatura) => (
                        <div
                            key={asignatura.id}
                            className="bg-white text-gray-800 shadow-xl rounded-xl p-6 flex items-center space-x-4 hover:scale-105 transition-transform"
                        >
                            <FaServer className="text-xl text-purple-600 text-5xl" />
                            <div>
                                <h3 className="text-xl font-bold text-purple-700">
                                    {asignatura.nombre}
                                </h3>
                                <p>{asignatura.descripcion}</p>
                            </div>
                        </div>
                    ))}
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
