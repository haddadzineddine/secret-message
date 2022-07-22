import Swal from "sweetalert2";

window.addEventListener("swal:modal", (event) => {
    Swal.fire("Here's your message !", event.detail.message, "info");
    Livewire.emit("message" + event.detail.id + "-is-read");
});

window.addEventListener("showUploadImage", () => {
    const inputUpload = document.querySelector("#upload-image");
    inputUpload.click();
});

window.addEventListener("copyToClipboard", (event) => {
    const link = event.detail.link;

    if (navigator.clipboard) {
        navigator.clipboard.writeText(link);
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Copied to clipboard",
            showConfirmButton: false,
            timer: 1500,
        });
    } else {
        Swal.fire({
            position: "top-end",
            icon: "error",
            title: "Your browser does not support clipboard",
            showConfirmButton: false,
            timer: 1500,
        });
    }
});

window.addEventListener("message-sent", (event) => {
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Message sent",
        showConfirmButton: false,
        timer: 1500,
    });
});
