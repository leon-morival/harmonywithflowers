import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    var alert = document.querySelector(".alert-success");
    if (alert) {
        console.log("test");
        setTimeout(function () {
            alert.style.display = "none";
        }, 3000); // 3000 milliseconds = 3 seconds
    }
});
