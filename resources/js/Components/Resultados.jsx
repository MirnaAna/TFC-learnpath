import * as React from "react";
import { useState } from "react";
import { Inertia } from "@inertiajs/inertia";

export default function Resultados() {
    return (
        <div>
            <h1>Resultado del Test</h1>
            <p>
                <strong>Tu puntuación es:</strong> {score}
            </p>
            <p>
                <strong>Tu respuesta a la primera pregunta fue:</strong>{" "}
                {respuesta1}
            </p>
        </div>
    );
}
