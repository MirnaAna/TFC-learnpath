import http from "k6/http";
import { sleep } from "k6";

export const options = {
    vus: 50, // usuarios virtuales
    duration: "30s", // duración total del test
};

export default function () {
    http.get("http://localhost:8000/formaciones");
    sleep(1); // espera entre cada solicitud
}
