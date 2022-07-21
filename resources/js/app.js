import Swal from "sweetalert2";

window.addEventListener("swal:modal", (event) => {
    Swal.fire({
        title: event.detail.message,
        text: event.detail.text,
        icon: event.detail.type,
    });
});
