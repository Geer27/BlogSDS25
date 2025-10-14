/**
 * JavaScript principal del Blog Semana de Sistemas 2025
 * Interactividad y animaciones
 */

// ========================================
// ANIMACIONES AL HACER SCROLL
// ========================================
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observar elementos para animarlos
document.addEventListener('DOMContentLoaded', () => {
    const elementsToAnimate = document.querySelectorAll('.card, .day-card, .gallery-item');
    elementsToAnimate.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

// ========================================
// MODAL PARA GALERÍA DE IMÁGENES
// ========================================
let currentImageIndex = 0;
let galleryImages = [];

// Crear modal dinámicamente
function createImageModal() {
    const modalHTML = `
        <div id="imageModal" class="modal">
            <span class="modal-close">&times;</span>
            <span class="modal-prev">&#10094;</span>
            <span class="modal-next">&#10095;</span>
            <img class="modal-content" id="modalImage">
            <div class="modal-caption" id="modalCaption"></div>
        </div>
    `;
    document.body.insertAdjacentHTML('beforeend', modalHTML);

    // Estilos del modal
    const style = document.createElement('style');
    style.textContent = `
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            padding: 50px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            margin: auto;
            display: block;
            max-width: 90%;
            max-height: 85vh;
            object-fit: contain;
            animation: zoomIn 0.3s ease;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        @keyframes zoomIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .modal-close {
            position: absolute;
            top: 30px;
            right: 45px;
            color: #fff;
            font-size: 50px;
            font-weight: 300;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10000;
        }

        .modal-close:hover {
            color: #f093fb;
            transform: scale(1.2);
        }

        .modal-prev, .modal-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 40px;
            font-weight: bold;
            padding: 20px;
            cursor: pointer;
            user-select: none;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-prev:hover, .modal-next:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-50%) scale(1.1);
        }

        .modal-prev { left: 30px; }
        .modal-next { right: 30px; }

        .modal-caption {
            margin: 20px auto;
            text-align: center;
            color: #fff;
            font-size: 18px;
            max-width: 80%;
            padding: 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            backdrop-filter: blur(10px);
        }

        @media (max-width: 768px) {
            .modal { padding: 20px; }
            .modal-content { max-width: 95%; }
            .modal-close { top: 20px; right: 20px; font-size: 40px; }
            .modal-prev, .modal-next { font-size: 30px; width: 50px; height: 50px; }
        }
    `;
    document.head.appendChild(style);
}

// Inicializar galería
function initGallery() {
    createImageModal();

    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const captionText = document.getElementById('modalCaption');
    const closeBtn = document.querySelector('.modal-close');
    const prevBtn = document.querySelector('.modal-prev');
    const nextBtn = document.querySelector('.modal-next');

    // Obtener todas las imágenes de la galería
    const galleryItems = document.querySelectorAll('.gallery-item img');
    galleryImages = Array.from(galleryItems);

    // Click en imagen
    galleryItems.forEach((img, index) => {
        img.parentElement.addEventListener('click', () => {
            currentImageIndex = index;
            openModal(img);
        });
    });

    // Cerrar modal
    closeBtn.onclick = () => modal.style.display = 'none';
    modal.onclick = (e) => {
        if (e.target === modal) modal.style.display = 'none';
    };

    // Navegación
    prevBtn.onclick = () => navigateGallery(-1);
    nextBtn.onclick = () => navigateGallery(1);

    // Navegación con teclado
    document.addEventListener('keydown', (e) => {
        if (modal.style.display === 'block') {
            if (e.key === 'Escape') modal.style.display = 'none';
            if (e.key === 'ArrowLeft') navigateGallery(-1);
            if (e.key === 'ArrowRight') navigateGallery(1);
        }
    });

    function openModal(img) {
        modal.style.display = 'block';
        modalImg.src = img.src;
        captionText.innerHTML = img.alt || 'Semana de Sistemas 2025';
    }

    function navigateGallery(direction) {
        currentImageIndex += direction;

        if (currentImageIndex < 0) {
            currentImageIndex = galleryImages.length - 1;
        } else if (currentImageIndex >= galleryImages.length) {
            currentImageIndex = 0;
        }

        openModal(galleryImages[currentImageIndex]);
    }
}

// ========================================
// VALIDACIÓN DE FORMULARIO
// ========================================
function initFormValidation() {
    const form = document.querySelector('.visita-form');
    if (!form) return;

    const inputs = form.querySelectorAll('input, textarea');

    inputs.forEach(input => {
        // Validación en tiempo real
        input.addEventListener('blur', () => validateField(input));
        input.addEventListener('input', () => {
            if (input.classList.contains('error')) {
                validateField(input);
            }
        });
    });

    form.addEventListener('submit', (e) => {
        let isValid = true;

        inputs.forEach(input => {
            if (!validateField(input)) {
                isValid = false;
            }
        });

        if (!isValid) {
            e.preventDefault();
            showNotification('Por favor, completa todos los campos correctamente', 'error');
        }
    });

    function validateField(field) {
        const value = field.value.trim();
        let isValid = true;

        if (field.required && value === '') {
            isValid = false;
            showFieldError(field, 'Este campo es obligatorio');
        } else if (field.type === 'email' && !isValidEmail(value)) {
            isValid = false;
            showFieldError(field, 'Ingresa un email válido');
        } else {
            removeFieldError(field);
        }

        return isValid;
    }

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function showFieldError(field, message) {
        field.classList.add('error');
        field.style.borderColor = '#ef4444';

        let errorMsg = field.nextElementSibling;
        if (!errorMsg || !errorMsg.classList.contains('error-message')) {
            errorMsg = document.createElement('span');
            errorMsg.classList.add('error-message');
            errorMsg.style.cssText = 'color: #ef4444; font-size: 0.9rem; margin-top: -0.5rem;';
            field.parentNode.insertBefore(errorMsg, field.nextSibling);
        }
        errorMsg.textContent = message;
    }

    function removeFieldError(field) {
        field.classList.remove('error');
        field.style.borderColor = '';

        const errorMsg = field.nextElementSibling;
        if (errorMsg && errorMsg.classList.contains('error-message')) {
            errorMsg.remove();
        }
    }
}

// ========================================
// NOTIFICACIONES
// ========================================
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;

    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        padding: 1rem 1.5rem;
        border-radius: 12px;
        color: white;
        font-weight: 600;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        z-index: 10000;
        animation: slideInRight 0.4s ease;
        max-width: 400px;
    `;

    if (type === 'error') {
        notification.style.background = 'linear-gradient(135deg, #ef4444 0%, #dc2626 100%)';
    } else if (type === 'success') {
        notification.style.background = 'linear-gradient(135deg, #10b981 0%, #059669 100%)';
    } else {
        notification.style.background = 'linear-gradient(135deg, #3b82f6 0%, #2563eb 100%)';
    }

    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideInRight {
            from { transform: translateX(400px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
    `;
    document.head.appendChild(style);

    document.body.appendChild(notification);

    setTimeout(() => {
        notification.style.animation = 'slideInRight 0.4s ease reverse';
        setTimeout(() => notification.remove(), 400);
    }, 3000);
}

// ========================================
// SMOOTH SCROLL MEJORADO
// ========================================
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// ========================================
// BOTÓN SCROLL TO TOP
// ========================================
function initScrollToTop() {
    const scrollBtn = document.createElement('button');
    scrollBtn.innerHTML = '↑';
    scrollBtn.className = 'scroll-to-top';
    scrollBtn.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        font-size: 24px;
        cursor: pointer;
        opacity: 0;
        transform: scale(0);
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        z-index: 1000;
    `;

    document.body.appendChild(scrollBtn);

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollBtn.style.opacity = '1';
            scrollBtn.style.transform = 'scale(1)';
        } else {
            scrollBtn.style.opacity = '0';
            scrollBtn.style.transform = 'scale(0)';
        }
    });

    scrollBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    scrollBtn.addEventListener('mouseenter', () => {
        scrollBtn.style.transform = 'scale(1.1)';
        scrollBtn.style.boxShadow = '0 6px 20px rgba(102, 126, 234, 0.5)';
    });

    scrollBtn.addEventListener('mouseleave', () => {
        scrollBtn.style.transform = 'scale(1)';
        scrollBtn.style.boxShadow = '0 4px 15px rgba(102, 126, 234, 0.4)';
    });
}

// ========================================
// INICIALIZACIÓN
// ========================================
document.addEventListener('DOMContentLoaded', () => {
    initGallery();
    initFormValidation();
    initSmoothScroll();
    initScrollToTop();

    console.log('🚀 Blog Semana de Sistemas 2025 cargado exitosamente');
});
