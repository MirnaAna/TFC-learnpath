import { React, useState } from "react";
import Logo from "../../images/logo.png";
import { usePage, Link } from "@inertiajs/react";
import { Menu, X } from "lucide-react";

const Navbar = () => {
    const { auth } = usePage().props;
    const [menuOpen, setMenuOpen] = useState(false);

    return (
        <nav className="bg-slate-300 shadow-md border-t-4 border-purple-400">
            <div className="container mx-auto px-4 py-3 flex items-center justify-between">
                {/* Logo */}
                <Link href="/" className="flex items-center space-x-2">
                    <img src={Logo} alt="LearnPath Logo" className="w-12" />
                    <span className="text-xl font-bold text-gray-700"></span>
                </Link>

                {/* Hamburger */}
                <button
                    className="md:hidden text-gray-700"
                    onClick={() => setMenuOpen(!menuOpen)}
                >
                    {menuOpen ? <X size={28} /> : <Menu size={28} />}
                </button>
                <ul
                    className={`${
                        menuOpen ? "block" : "hidden"
                    } md:flex md:space-x-4 md:items-center w-full md:w-auto mt-4 md:mt-0`}
                >
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
                    <li className="float-left mr-8">
                        <Link
                            href="/mostrar-trabajos"
                            className=" text-gray-900 py-3 px-4 ml-4 hover:bg-yellow-100 hover:scale-105 transition-transform font-semibold"
                        >
                            Ofertas de Trabajo
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
            </div>
        </nav>
    );
};

export default Navbar;
