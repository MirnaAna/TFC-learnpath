import { Link, Head, usePage } from "@inertiajs/react";
import Header from "../Components/Header";

export default function Formaciones() {
    const { formaciones } = usePage().props;

    return (
        <>
            <Head title="formaciones" />
            <Header />
            <div className="min-h-screen bg-gradient-to-br from-purple-600 to blue-500 flex flex-col items-center py-10 px-6 text-white">
                <section className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8 max-w-5xl w-full">
                    {/*Tarjeta de contenido*/}
                    {formaciones.map((formacion) => {
                        return (
                            <Link
                                href={`/detalles-formacion/${formacion.abreviatura.toLocaleUpperCase()}`}
                                key={formacion.id}
                                className="bg-white text-gray-800 shadow-xl rounded-xl p-6 flex items-center space-x-4 hover:scale-105 transition-transform"
                            >
                                <div>
                                    <h3 className="text-xl font-bold text-purple-700">
                                        {formacion.abreviatura}
                                    </h3>
                                    <h3 className="font-bold mb-2">
                                        {formacion.nombre}
                                    </h3>
                                    <h3>{formacion.texto_introduccion}</h3>
                                </div>
                            </Link>
                        );
                    })}
                </section>
            </div>
        </>
    );
}
