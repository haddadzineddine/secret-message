import Swal from "sweetalert2";

window.addEventListener("swal:modal", (event) => {
    Swal.fire("Here's your message !", event.detail.message, "info");
    Livewire.emit("message" + event.detail.id + "-is-read");
});
