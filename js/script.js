
const validarCampos = () => {
    let correo = document.getElementById('correo').value;
    let pass = document.getElementById('pass').value;


    if (correo.trim() === '') {
        Swal.fire({
            title: 'El campo usuario es obligatorio.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (correo.trim().length < 4) {
        Swal.fire({
            title: 'El usuario debe ser mayor a 3 caracteres.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (pass.trim() === '') {
        Swal.fire({
            title: 'El campo de contraseña es obligatorio.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    
    if (pass.trim().length < 5) {
        Swal.fire({
            title: 'La contraseña debe ser mayor a 5 caracteres.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    return true
}

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


