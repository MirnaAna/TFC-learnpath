import { useEffect } from "react";
import Checkbox from "@/Components/Checkbox";
import GuestLayout from "@/Layouts/GuestLayout";
import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import PrimaryButton from "@/Components/PrimaryButton";
import TextInput from "@/Components/TextInput";
import { Head, Link, useForm } from "@inertiajs/react";
import Logo from "../../../images/logo.png";

export default function Login({ status, canResetPassword }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: "",
        password: "",
        remember: "",
    });

    useEffect(() => {
        return () => {
            reset("password");
        };
    }, []);

    const handleOnChange = (event) => {
        setData(
            event.target.name,
            event.target.type === "checkbox"
                ? event.target.checked
                : event.target.value
        );
    };

    const submit = (e) => {
        e.preventDefault();

        post(route("login"));
    };

    return (
        <>
            <Head title="Iniciar Sesión" />
            {/*Contenedor principal*/}
            <div className="min-h-screen flex items-center justify bg-gradient-to-br from-blue-50 to-ble flex">
                {/*logo*/}
                <div className=" flex items-center justify-center ">
                    <img
                        src={Logo}
                        alt="LearnPath Logo"
                        className="w-80 h-auto"
                    />
                </div>
                {/*contenedor del formulario*/}
                <div className="flex items-center justify-center bg-blue-100 shadow-lg rounded-lg p-10 w-full max-w-lg mr-4">
                    <div className="w-full max-w-md">
                        <h2 className="text-3xl font-bold text-gray-700 mb-6 text-center">
                            Iniciar Sesión
                        </h2>
                        {status && (
                            <div className="mb-4 font-medium text-green-400">
                                {status}
                            </div>
                        )}

                        <form onSubmit={submit} className="space-y-5">
                            <div>
                                <InputLabel
                                    htmlFor="email"
                                    value="Correp Electrónico"
                                />

                                <TextInput
                                    id="email"
                                    type="email"
                                    name="email"
                                    value={data.email}
                                    className="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500"
                                    autoComplete="username"
                                    isFocused={true}
                                    onChange={handleOnChange}
                                />

                                <InputError
                                    message={errors.email}
                                    className="mt-2 text-red-400"
                                />
                            </div>
                            {/*campo de contraseña*/}
                            <div>
                                <InputLabel
                                    htmlFor="password"
                                    value="Contraseña"
                                />

                                <TextInput
                                    id="password"
                                    type="password"
                                    name="password"
                                    value={data.password}
                                    className="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500"
                                    autoComplete="current-password"
                                    onChange={handleOnChange}
                                />

                                <InputError
                                    message={errors.password}
                                    className="mt-2 text-red-400"
                                />
                            </div>
                            {/*Recordar sesion */}
                            <div className="flex items-center">
                                <Checkbox
                                    name="remember"
                                    value={data.remember}
                                    onChange={handleOnChange}
                                />
                                <span className="ml-2 text-sm text-gray-600">
                                    Recuérdame
                                </span>
                            </div>
                            {/*botón de inicio de sesion y enlace de recuperacion*/}
                            <div className="flex items-center justify-between">
                                {canResetPassword && (
                                    <Link
                                        href={route("password.request")}
                                        className="text-sm text-gray-600 hover:text-gray-900"
                                    >
                                        ¿Olvidadeste tu contraseña?
                                    </Link>
                                )}

                                <PrimaryButton
                                    className="ml-4 bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-4 py-2 rounded-xl shadow-md transition duration-200"
                                    disabled={processing}
                                >
                                    Iniciar Sesión
                                </PrimaryButton>
                            </div>
                            <div className="flex items-center justify-between">
                                <Link
                                    href="/register"
                                    className="text-sm text-gray-600 hover:text-gray-900"
                                >
                                    ¿No tienes cuenta? Registrate
                                </Link>
                                <Link
                                    href="/"
                                    className=" text-gray-900 px-6 py-3 hover:bg-yellow-400 hover:scale-105 transition-transform font-semibold"
                                >
                                    Volver a inicio
                                </Link>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </>
    );
}
