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
    FaDatabase,
    FaCode,
    FaDesktop,
    FaGlobe,
    FaCloudUploadAlt,
    FaPaintBrush,
    FaMobileAlt,
    FaCogs,
    FaPalette,
    FaProjectDiagram,
} from "react-icons/fa";

const iconMap = {
    FaServer: FaServer,
    FaLaptopCode: FaLaptopCode,
    FaCloud: FaCloud,
    FaShieldAlt: FaShieldAlt,
    FaUsers: FaUsers,
    FaTools: FaTools,
    FaDatabase: FaDatabase,
    FaCode: FaCode,
    FaDesktop: FaDesktop,
    FaGlobe: FaGlobe,
    FaCloudUploadAlt: FaCloudUploadAlt,
    FaPaintBrush: FaPaintBrush,
    FaMobileAlt: FaMobileAlt,
    FaCogs: FaCogs,
    FaPalette: FaPalette,
    FaProjectDiagram: FaProjectDiagram,
};

export default function DetallesFormacion() {
    const { formacion, asignaturas, salidasProfesionales } = usePage().props;
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
                    {asignaturas.map((asignatura) => {
                        const Icon = iconMap[asignatura.icono] || FaServer;
                        return (
                            <div
                                key={asignatura.id}
                                className="bg-white text-gray-800 shadow-xl rounded-xl p-6 flex items-center space-x-4 hover:scale-105 transition-transform"
                            >
                                <Icon className="w-9 h-9 text-purple-700" />
                                <div>
                                    <h3 className="text-xl font-bold text-purple-700">
                                        {asignatura.nombre}
                                    </h3>
                                    <p>{asignatura.descripcion}</p>
                                </div>
                            </div>
                        );
                    })}
                </section>
                {/*Sección de salidas profesionales*/}
                <section className="bg-white text-gray-800 shadow-2xl rounded-2xl p-8 mt-10 max-w-5xl w-full text-center animate-slide-up">
                    <h2 className="text-3xl font-semibold mb-4 text-purple-700">
                        Salidas profesionales
                    </h2>
                    {/*Lista de posibles salidas laborales para los graduados*/}
                    <ul className="text-lg text-left space-y-2">
                        {salidasProfesionales.map((salidasProfesionales) => (
                            <li key={salidasProfesionales.id}>
                                &#10004; {salidasProfesionales.nombre}
                            </li>
                        ))}
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
