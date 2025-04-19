import React from "react";
import { usePage } from "@inertiajs/react";
import { Link } from "@inertiajs/react";

const Navbar = () => {
    const { auth } = usePage().props;

    return (
        <nav>
            <ul>
                <li className="float-left mr-8">
                    <Link
                        href="/"
                        className=" text-gray-900 py-3 px-4 ml-4 hover:bg-yellow-100 hover:scale-105 transition-transform font-semibold"
                    >
                        Inicio
                    </Link>
                </li>
                <li className="float-left mr-8">
                    <Link
                        href="/formaciones"
                        className=" text-gray-900 py-3 px-4 ml-4 hover:bg-yellow-100 hover:scale-105 transition-transform font-semibold"
                    >
                        Formaciones
                    </Link>
                </li>
                <li className="float-left mr-8">
                    <Link
                        href="/login"
                        title="Con Sesion Requerida"
                        className=" text-gray-900 py-3 px-4 ml-4 hover:bg-yellow-100 hover:scale-105 transition-transform font-semibold"
                    >
                        Progreso
                    </Link>
                </li>
                <li className="float-left mr-8">
                    <Link
                        href="/recursos"
                        className=" text-gray-900 py-3 px-4 ml-4 hover:bg-yellow-100 hover:scale-105 transition-transform font-semibold"
                    >
                        Recursos
                    </Link>
                </li>
                {auth.user ? (
                    <>
                        <li className="float-left">
                            Bienvenid@, {auth.user.name}
                        </li>
                        <li className="float-left">
                            <Link
                                href="/logout"
                                className="bg-purple-400  text-gray-900 py-3 px-4 ml-4 rounded-xl shadow-lg hover:bg-yellow-100 hover:scale-105 transition-transform font-semibold"
                            >
                                Cerrar sesion
                            </Link>
                        </li>
                    </>
                ) : (
                    <>
                        {/* <div className="row small-12"> */}
                        <li className="float-left">
                            <Link
                                href="/register"
                                className=" bg-purple-400 mr-8 text-gray-900 px-6 py-3 rounded-xl shadow-lg hover:bg-yellow-500 hover:scale-105 transition-transform"
                            >
                                registrar
                            </Link>
                        </li>
                        <li className="float-left">
                            <Link
                                href="/login"
                                className="bg-purple-400 text-gray-900 px-6 py-3 rounded-xl shadow-lg hover:bg-yellow-500 hover:scale-105 transition-transform"
                            >
                                Iniciar sesion
                            </Link>
                        </li>
                        {/* </div> */}
                    </>
                )}
            </ul>
        </nav>
    );
};

export default Navbar;
