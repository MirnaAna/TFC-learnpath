import { useEffect } from "react";
import Checkbox from "@/Components/Checkbox";
import GuestLayout from "@/Layouts/GuestLayout";
import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import PrimaryButton from "@/Components/PrimaryButton";
import TextInput from "@/Components/TextInput";
import { Head, Link, useForm } from "@inertiajs/react";

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
            <div className="min-h-screen bg-gray-200 flex-col items-center justify-center">
                {/*logo*/}
                <div className="absolute top-5 left-10">
                    <img src="/logo.png" alt="Logo" className="w-32 h-auto" />
                </div>
                {/*contenedoe del formulario*/}
                <div className="bg-white shadow-x1 rounded-2x1 p-8 w-full max-w-md">
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
                                className="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                autoComplete="username"
                                isFocused={true}
                                onChange={handleOnChange}
                            />

                            <InputError
                                message={errors.email}
                                className="mt-2"
                            />
                        </div>

                        <div className="mt-4">
                            <InputLabel htmlFor="password" value="Password" />

                            <TextInput
                                id="password"
                                type="password"
                                name="password"
                                value={data.password}
                                className="mt-1 block w-full"
                                autoComplete="current-password"
                                onChange={handleOnChange}
                            />

                            <InputError
                                message={errors.password}
                                className="mt-2"
                            />
                        </div>

                        <div className="block mt-4">
                            <label className="flex items-center">
                                <Checkbox
                                    name="remember"
                                    value={data.remember}
                                    onChange={handleOnChange}
                                />
                                <span className="ml-2 text-sm text-gray-600">
                                    Remember me
                                </span>
                            </label>
                        </div>

                        <div className="flex items-center justify-end mt-4">
                            {canResetPassword && (
                                <Link
                                    href={route("password.request")}
                                    className="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                >
                                    Forgot your password?
                                </Link>
                            )}

                            <PrimaryButton
                                className="ml-4"
                                disabled={processing}
                            >
                                Log in
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </>
    );
}
