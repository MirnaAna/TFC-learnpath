import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import TablaProgreso from "@/Components/TablaProgreso";
import Header from "../Components/Header";
import { Link, Head, usePage } from "@inertiajs/react";
import SelectFormacion from "@/Components/SelectFormacion";

export default function Dashboard() {
    const nombreUsuario = usePage().props.auth.user.name;
    const { asignaturas, formaciones } = usePage().props;
    return (
        /*<AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
            These credentials do not match our records.
        >*/
        <>
            <Head title="Dashboard" />
            <Header></Header>
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                            {nombreUsuario} tienes la sesion iniciada!
                        </div>
                    </div>
                </div>
                <SelectFormacion formaciones={formaciones} />
            </div>
            <div className=" justify-center px-8 py-4">
                <TablaProgreso asignaturas={asignaturas} />
            </div>
        </>
        //</AuthenticatedLayout>
    );
}
