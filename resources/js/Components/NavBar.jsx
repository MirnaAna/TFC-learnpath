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
                <Link href="/" className="flex items-center">
                    <img src={Logo} alt="LearnPath Logo" className="w-12" />
                </Link>

                {/* Botón hamburger (solo visible en móvil) */}
                <button
                    className="md:hidden text-gray-700"
                    onClick={() => setMenuOpen(!menuOpen)}
                >
                    {menuOpen ? <X size={28} /> : <Menu size={28} />}
                </button>

                {/* Menú */}
                <ul
                    className={`${
                        menuOpen ? "block" : "hidden"
                    } md:flex md:flex-row md:justify-center md:items-center md:space-x-6 px-4 md:px-0 space-y-2 md:space-y-0`}
                >
                    <li>
                        <Link
                            href="/"
                            className="block text-gray-900 py-3 px-4 hover:bg-yellow-100 hover:scale-105 transition-transform font-semibold"
                        >
                            Inicio
                        </Link>
                    </li>
                    <li>
                        <Link
                            href="/formaciones"
                            className="block text-gray-900 py-3 px-4 hover:bg-yellow-100 hover:scale-105 transition-transform font-semibold"
                        >
                            Formaciones
                        </Link>
                    </li>
                    <li>
                        <Link
                            href="/login"
                            title="Con Sesion Requerida"
                            className="block text-gray-900 py-3 px-4 hover:bg-yellow-100 hover:scale-105 transition-transform font-semibold"
                        >
                            Progreso
                        </Link>
                    </li>
                    <li>
                        <Link
                            href="/recursos"
                            className="block text-gray-900 py-3 px-4 hover:bg-yellow-100 hover:scale-105 transition-transform font-semibold"
                        >
                            Recursos
                        </Link>
                    </li>
                    <li>
                        <Link
                            href="/mostrar-trabajos"
                            className="block text-gray-900 py-3 px-4 hover:bg-yellow-100 hover:scale-105 transition-transform font-semibold"
                        >
                            Ofertas de Trabajo
                        </Link>
                    </li>
                    {auth.user ? (
                        <>
                            <li className="px-4 text-gray-700">
                                Bienvenid@, {auth.user.name}
                            </li>
                            <li>
                                <Link
                                    href="/logout"
                                    className="block bg-purple-400 text-gray-900 py-3 px-4 rounded-xl shadow-lg hover:bg-yellow-100 hover:scale-105 transition-transform font-semibold"
                                >
                                    Cerrar sesión
                                </Link>
                            </li>
                        </>
                    ) : (
                        <>
                            <li>
                                <Link
                                    href="/register"
                                    className="block bg-purple-400 text-gray-900 px-6 py-3 rounded-xl shadow-lg hover:bg-yellow-500 hover:scale-105 transition-transform"
                                >
                                    Registrar
                                </Link>
                            </li>
                            <li>
                                <Link
                                    href="/login"
                                    className="block bg-purple-400 text-gray-900 px-6 py-3 rounded-xl shadow-lg hover:bg-yellow-500 hover:scale-105 transition-transform"
                                >
                                    Iniciar sesión
                                </Link>
                            </li>
                        </>
                    )}
                </ul>
            </div>
        </nav>
    );
};

export default Navbar;
