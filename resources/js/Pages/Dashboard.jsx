import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import TablaProgreso from "@/Components/TablaProgreso";
import ChartProgreso from "@/Components/ChartProgreso";
import Header from "../Components/Header";
import { useEffect } from "react";
import { ToastContainer, toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";
import { Link, Head, usePage } from "@inertiajs/react";

export default function Dashboard() {
    //obtiene el nombre del usuario autenticado desde las props globales de Inertia
    const nombreUsuario = usePage().props.auth.user.name;
    const { formaciones, asignaturasProgreso, estados, asignaturaEstado } =
        usePage().props;
    //muestra el toast si hay un mensaje de éxito
    const mensaje = usePage().props.success;
    useEffect(() => {
        if (mensaje) {
            toast.success(mensaje);
        }
    }, [mensaje]);
    return (
        <>
            <Head title="Dashboard" />
            <Header></Header>
            {/* notificacion que se ha enviado el mensaje */}
            <ToastContainer
                position="top-center"
                autoClose={3000}
                closeOnClick={false}
                draggable={false}
                pauseOnHover={true}
                newestOnTop={true}
                theme="colored"
                style={{ fontSize: "1.2rem", padding: "1rem" }}
            />
            {/* Mensaje de bienvenida con el nombre del usuario */}
            <div className="py-4">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                            {nombreUsuario} tienes la sesion iniciada!
                        </div>
                    </div>
                </div>
            </div>
            {/* Muestra la tabla con el progreso de las asignaturas */}
            <div className=" justify-center px-8 py-4">
                <TablaProgreso
                    asignaturasProgreso={asignaturasProgreso}
                    formaciones={formaciones}
                    estados={estados}
                />
            </div>
            {/* Muestra el gráfico de barras*/}
            <div className="justify-center px-8 py-4">
                <ChartProgreso asignaturaEstado={asignaturaEstado} />
            </div>
        </>
    );
}
