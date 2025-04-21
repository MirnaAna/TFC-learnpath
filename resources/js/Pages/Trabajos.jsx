import OfertasDeTrabajo from "../Components/OfertasDeTrabajo";
import { Head } from "@inertiajs/react";
import Header from "../Components/Header";

export default function Trabajos() {
    return (
        <>
            <Head title="formaciones" />
            <Header />
            <OfertasDeTrabajo />
        </>
    );
}
