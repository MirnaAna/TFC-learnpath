import { Link } from "@inertiajs/react";
import Logo from "../../images/logo.png";
import Navbar from "./NavBar";

export default function Explorador() {
    return (
        <>
            <div className="bg-slate-300 shadow-md border-purple-400 border-4">
                <div className="container mx-auto flex justify-between items-center px-6">
                    {/* Logo */}
                    <div className="flex items-center space-x-3">
                        <Link href="/">
                            <img
                                src={Logo}
                                alt="LearnPath Logo"
                                className="w-20"
                            />
                            <span className="text-xl font-semibold text-gray-700"></span>
                        </Link>
                    </div>
                    {/* Navigation */}
                    <div className="flex items-center space-x-3">
                        <Navbar></Navbar>
                    </div>
                </div>
            </div>
        </>
    );
}
