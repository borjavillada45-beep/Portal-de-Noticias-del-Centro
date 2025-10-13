document.addEventListener("DOMContentLoaded", () => {
    // Cambiar color del navbar al hacer scroll
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
    }

    // Inicializar Flatpickr si existe
    if (document.querySelector("#fecha")) {
        flatpickr("#fecha", {
            dateFormat: "Y-m-d",
            locale: "es"
        });
    }

    // Mostrar modal de éxito (si lo implementas)
    const params = new URLSearchParams(window.location.search);
    if (params.get('success') === '1') {
        const modalEl = document.getElementById('successModal');
        if (modalEl) {
            const modal = new bootstrap.Modal(modalEl);
            modal.show();
            // Limpiar query string
            window.history.replaceState(null, '', window.location.pathname);
        }
    }
});
