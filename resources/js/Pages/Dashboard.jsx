import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Link, Head } from "@inertiajs/react";

export default function Dashboard(props) {
    return (
        /*<AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
        >*/
        <>
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                            Tienes la sesion iniciada!
                        </div>
                    </div>
                </div>
            </div>
            <div className="row mt-10">
                <Link
                    href="/logout"
                    className="bg-yellow-400 text-gray-900 px-6 py-3 rounded-xl shadow-lg hover:bg-yellow-500 hover:scale-105 transition-transform font-semibold text-lg"
                >
                    Cerrar sesion
                </Link>
            </div>
        </>
        //</AuthenticatedLayout>
    );
}
