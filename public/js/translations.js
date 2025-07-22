const translations = {
    es: {
        // Header
        home: 'Inicio',
        about: '¿Quienes Somos?',
        services: 'Servicios',
        portfolio: 'Portafolio',
        contact: 'Contacto',
        transformamos: 'Transformamos',
        arte: 'Arte',
        profesional: 'Profesional',
        drywall: 'Drywall',
        pintura: 'Pintura',
        lavado: 'Lavado a Presión',
        texturizado: 'Texturizado',
        duchas: 'Duchas',
        senalizacion: 'Señalización',
        vinculacion: 'Vinculación',
        read_more: 'Leer Más',
        get_started: 'Comenzar',
        send_message: 'Enviar Mensaje',
        name: 'Nombre',
        email: 'Email',
        subject: 'Asunto',
        message: 'Mensaje',
        send: 'Enviar',
        back_to_top: 'Volver Arriba',
        
        // Slider
        welcome_title: 'TRANSFORMAMOS SUPERFICIES, <br>INSPIRAMOS ESPACIOS',
        welcome_description: 'Brindamos servicios profesionales de pintura, reparación de drywall y lavado a presión en Sarasota y Bradenton, garantizando confiabilidad y acabados duraderos con compromiso ambiental.',
        start_renovation: 'Atrévete',
        
        who_we_are: 'TRANSFORMANDO ESPACIOS<br> CON PROFESIONALISMO',
        more_info: 'Averigua',
        
        transformamos: 'DE LO COMÚN<br> A LO EXTRAORDINARIO',
        professional_description: 'Transformamos tus espacios con alta calidad profesional.',
        get_started: 'Sorpréndete',
        
        // Services
        drywall_services: 'Servicios de Drywall',
        painting_services: 'Servicios de Pintura',
        pressure_washing: 'Lavado a Presión',
        texturing: 'Texturizado',
        showers: 'Duchas',
        signage: 'Señalización',
        networking: 'Vinculación',
        
        // About
        about_title: '¿Quienes Somos?',
        about_description: 'Somos profesionales dedicados a la pintura y remodelación',
        
        // Contact
        contact_title: 'Contáctenos',
        contact_description: 'Estamos aquí para ayudarlo con sus proyectos de pintura',
        
        // Portfolio
        portfolio_title: 'Nuestro Trabajo',
        portfolio_description: 'Proyectos recientes de pintura y remodelación'
    },
    en: {
        // Header
        home: 'Home',
        about: 'About',
        services: 'Services',
        portfolio: 'Portfolio',
        contact: 'Contact',
        transformamos: 'We Transform',
        arte: 'Art',
        profesional: 'Professional',
        drywall: 'Drywall',
        pintura: 'Painting',
        lavado: 'Washing',
        texturizado: 'Texturing',
        duchas: 'Showers',
        senalizacion: 'Signage',
        vinculacion: 'Networking',
        read_more: 'Read More',
        get_started: 'Get Started',
        send_message: 'Send Message',
        name: 'Name',
        email: 'Email',
        subject: 'Subject',
        message: 'Message',
        send: 'Send',
        back_to_top: 'Back to Top',
        
        // Slider
        welcome_title: 'WE TRANSFORM SURFACES, WE INSPIRE SPACES',
        welcome_description: 'We provide professional painting, drywall repair, and pressure washing services in Sarasota and Bradenton, ensuring reliable, long-lasting finishes with an environmental commitment.',
        start_renovation: 'Dare',
        
        who_we_are: 'TRANSFORMING SPACES<br> WITH PROFESSIONALISM',
        more_info: 'Discover',
        
        transformamos: 'FROM COMMON<br> TO EXTRAORDINARY',
        professional_description: 'Transform your spaces with high-quality professional finishes.',
        get_started: 'Amazing',
        
        // Services
        drywall_services: 'Drywall Services',
        painting_services: 'Painting Services',
        pressure_washing: 'Pressure Washing',
        texturing: 'Texturing',
        showers: 'Showers',
        signage: 'Signage',
        networking: 'Networking',
        
        // About
        about_title: 'About Us',
        about_description: 'Dedicated professionals in painting and renovation',
        
        // Contact
        contact_title: 'Contact Us',
        contact_description: 'We are here to help with your painting projects',
        
        // Portfolio
        portfolio_title: 'Our Work',
        portfolio_description: 'Recent painting and renovation projects'
    }
};

let currentLanguage = 'es';

// Función para inicializar el dropdown de idiomas
function initializeLanguageDropdown() {
    const dropdown = document.querySelector('.language-selector .dropdown-toggle');
    if (dropdown) {
        // Inicializar el dropdown solo una vez
        if (!dropdown._dropdown) {
            dropdown._dropdown = new bootstrap.Dropdown(dropdown);
        }
    }
}

// Función para cerrar el dropdown de idiomas
function closeLanguageDropdown() {
    const dropdown = document.querySelector('.language-selector .dropdown-toggle');
    if (dropdown && dropdown._dropdown) {
        dropdown._dropdown.hide();
    }
}

// Función principal para actualizar las traducciones
function updateTranslations() {
    // Actualizar el menú
    document.querySelector('.home-link').textContent = translations[currentLanguage].home;
    document.querySelector('.about-link').textContent = translations[currentLanguage].about;
    document.querySelector('.portfolio-link').textContent = translations[currentLanguage].portfolio;
    document.querySelector('.contact-link').textContent = translations[currentLanguage].contact;
    
    // Actualizar los elementos del dropdown
    document.querySelectorAll('.nav-menu .dropdown-menu a').forEach(link => {
        const key = link.getAttribute('data-key');
        if (key) {
            link.textContent = translations[currentLanguage][key];
        }
    });

    // Validar si existen los elementos carousel antes de actualizar
    const carouselItems = document.querySelectorAll('.carousel-item');
    if (carouselItems.length > 0) {
        // Slide 1
        const activeItem = document.querySelector('.carousel-item.active');
        if (activeItem) {
            const h2 = activeItem.querySelector('h2');
            const p = activeItem.querySelector('p');
            const btn = activeItem.querySelector('.btn-get-started');
            if (h2) h2.innerHTML = translations[currentLanguage].welcome_title;
            if (p) p.innerHTML = translations[currentLanguage].welcome_description;
            if (btn) btn.innerHTML = translations[currentLanguage].start_renovation;
        }

        // Slide 2
        if (carouselItems[1]) {
            const h2 = carouselItems[1].querySelector('h2');
            const btn = carouselItems[1].querySelector('.btn-get-started');
            if (h2) h2.innerHTML = translations[currentLanguage].who_we_are;
            if (btn) btn.innerHTML = translations[currentLanguage].more_info;
        }

        // Slide 3
        if (carouselItems[2]) {
            const h2 = carouselItems[2].querySelector('h2');
            const p = carouselItems[2].querySelector('p');
            const btn = carouselItems[2].querySelector('.btn-get-started');
            if (h2) h2.innerHTML = translations[currentLanguage].transformamos;
            if (p) p.innerHTML = translations[currentLanguage].professional_description;
            if (btn) btn.innerHTML = translations[currentLanguage].get_started;
        }
    }
}

// Función para cambiar el idioma
function switchLanguage(lang) {
    currentLanguage = lang;
    updateTranslations();
    closeLanguageDropdown();
}

function updateTranslations() {
    // Actualizar el menú
    document.querySelector('.home-link').textContent = translations[currentLanguage].home;
    document.querySelector('.about-link').textContent = translations[currentLanguage].about;
    document.querySelector('.portfolio-link').textContent = translations[currentLanguage].portfolio;
    document.querySelector('.contact-link').textContent = translations[currentLanguage].contact;
    
    // Actualizar los elementos del dropdown
    document.querySelectorAll('.nav-menu .dropdown-menu a').forEach(link => {
        const key = link.getAttribute('data-key');
        if (key) {
            link.textContent = translations[currentLanguage][key];
        }
    });

    // Actualizar el contenido de home2.blade.php
    // Slide 1
    document.querySelector('.carousel-item.active h2').innerHTML = translations[currentLanguage].welcome_title;
    document.querySelector('.carousel-item.active p').innerHTML = translations[currentLanguage].welcome_description;
    document.querySelector('.carousel-item.active .btn-get-started').innerHTML = translations[currentLanguage].start_renovation;

    // Slide 2
    document.querySelectorAll('.carousel-item')[1].querySelector('h2').innerHTML = translations[currentLanguage].who_we_are;
    document.querySelectorAll('.carousel-item')[1].querySelector('.btn-get-started').innerHTML = translations[currentLanguage].more_info;

    // Slide 3
    document.querySelectorAll('.carousel-item')[2].querySelector('h2').innerHTML = translations[currentLanguage].transformamos;
    document.querySelectorAll('.carousel-item')[2].querySelector('p').innerHTML = translations[currentLanguage].professional_description;
    document.querySelectorAll('.carousel-item')[2].querySelector('.btn-get-started').innerHTML = translations[currentLanguage].get_started;
}

// Función para inicializar el dropdown de idiomas
function initializeLanguageDropdown() {
    const dropdown = document.querySelector('.language-selector .dropdown-toggle');
    if (dropdown) {
        // Inicializar el dropdown solo una vez
        if (!dropdown._dropdown) {
            dropdown._dropdown = new bootstrap.Dropdown(dropdown);
        }
    }
}

// Función para cerrar el dropdown de idiomas
function closeLanguageDropdown() {
    const dropdown = document.querySelector('.language-selector .dropdown-toggle');
    if (dropdown && dropdown._dropdown) {
        dropdown._dropdown.hide();
    }
}

function switchLanguage(lang) {
    currentLanguage = lang;
    updateTranslations();
    closeLanguageDropdown();
    if (dropdownMenu) {
        dropdownMenu.style.display = 'none';
    }
    
    // Guardar el idioma en localStorage
    localStorage.setItem('language', lang);
}

// Cargar el idioma guardado al inicio
const savedLanguage = localStorage.getItem('language');
if (savedLanguage) {
    currentLanguage = savedLanguage;
    updateTranslations();
}
