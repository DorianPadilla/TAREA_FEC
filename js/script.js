document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll('a[href^="#"]');
    for (const link of links) {
        link.addEventListener("click", scrollToSection);
    }

    function scrollToSection(event) {
        event.preventDefault();
        const targetId = this.getAttribute("href");
        const targetSection = document.querySelector(targetId);
        if (targetSection) {
            window.scrollTo({
                top: targetSection.offsetTop,
                behavior: "smooth"
            });
        }
    }
});


document.addEventListener("DOMContentLoaded", function() {
    const modalButtons = document.querySelectorAll(".modal-button");
    const modal = document.getElementById("myModal");
    const closeBtn = document.querySelector(".close");
    const modalImage = document.querySelector(".modal-image");

    for (const button of modalButtons) {
        button.addEventListener("click", openModal);
    }

    closeBtn.addEventListener("click", closeModal);

    function openModal() {
        const imageSrc = this.getAttribute("data-image");
        modalImage.src = imageSrc;
        modal.style.display = "block";
        setTimeout(function() {
            modal.classList.add("active"); // Agregar la clase .active para activar la animación después de un breve retraso
        }, 50);
    }

    function closeModal() {
        modal.classList.remove("active"); // Remover la clase .active para ocultar el modal con la animación
        setTimeout(function() {
            modal.style.display = "none";
        }, 300); // Esperar a que finalice la animación y luego ocultar el modal
    }

    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });
});
// JavaScript
document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    const prevButton = document.querySelector(".prev-button");
    const nextButton = document.querySelector(".next-button");

    let currentIndex = 0;

    // Función para avanzar al siguiente slide
    function nextSlide() {
        currentIndex = (currentIndex + 1) % slider.children.length;
        updateSlider();
    }

    // Función para retroceder al slide anterior
    function prevSlide() {
        currentIndex = (currentIndex - 1 + slider.children.length) % slider.children.length;
        updateSlider();
    }

    // Función para actualizar la posición del slider
    function updateSlider() {
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    // Agregar listeners a los botones de navegación
    nextButton.addEventListener("click", nextSlide);
    prevButton.addEventListener("click", prevSlide);
});