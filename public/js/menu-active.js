document.addEventListener('DOMContentLoaded', function() {
    // Función para actualizar el estado active del menú
    function updateActiveMenu() {
        // Eliminar la clase active de todos los elementos
        document.querySelectorAll('.nav-menu li').forEach(function(item) {
            item.classList.remove('active');
        });

        // Obtener la sección actual basada en la URL
        const path = window.location.pathname;
        const hash = window.location.hash;

        // Determinar qué elemento debe tener la clase active
        let activeItem = null;

        // Si hay un hash (por ejemplo, #about, #services)
        if (hash) {
            const section = hash.substring(1); // Eliminar el #
            activeItem = document.querySelector(`.nav-menu a[href*="#${section}"]`).parentElement;
        } else if (path === '/') {
            activeItem = document.querySelector('.nav-menu .home-link').parentElement;
        }

        // Si encontramos el elemento activo, agregar la clase active
        if (activeItem) {
            activeItem.classList.add('active');
        }
    }

    // Actualizar cuando se hace clic en los enlaces del menú
    document.querySelectorAll('.nav-menu a').forEach(function(link) {
        link.addEventListener('click', function(e) {
            // Evitar el comportamiento por defecto si el enlace tiene un hash
            if (this.hash) {
                e.preventDefault();
                // Simular el scroll suave
                const target = document.querySelector(this.hash);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
            // Actualizar el estado active
            updateActiveMenu();
        });
    });

    // Actualizar cuando se cambia la URL
    window.addEventListener('hashchange', updateActiveMenu);

    // Actualizar cuando se carga la página
    updateActiveMenu();
});
