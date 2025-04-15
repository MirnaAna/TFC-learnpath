import { Head, usePage } from "@inertiajs/react";
import Header from "../Components/Header";
import SelectFormacion from "@/Components/SelectFormacion";

export default function Inicio() {
    const { formaciones } = usePage().props;
    return (
        <>
            <Head title="Inicio" />
            <Header></Header>
            {/* Contenedor para centrar el label y el select */}
            <SelectFormacion formaciones={formaciones} />
        </>
    );
}
