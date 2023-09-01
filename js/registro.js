console.log("Holaaaaaaaaaa")
const validarCamposRegistro = () => {
    let nombre = document.getElementById('nombre').value;
    let apellido = document.getElementById('apellido').value;
    let direccion = document.getElementById('direccion').value;
    let fecha = document.getElementById('fecha-nacimiento').value;
    let telefono = document.getElementById('telefono').value;
    let correo = document.getElementById('correo').value;
    let pass = document.getElementById('pass').value;
    



    if (nombre.trim() === '') {
        Swal.fire({
            title: 'El campo nombre es obligatorio.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (nombre.trim().length < 4) {
        Swal.fire({
            title: 'El nombre debe ser mayor a 3 caracteres.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (!/^[A-Za-zÁ-Úá-úüÜ]+$/.test(nombre.trim())) {
        Swal.fire({
            title: 'El campo de nombre solo debe contener letras.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (apellido.trim() === '') {
        Swal.fire({
            title: 'El campo de apellido es obligatorio.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    } 
    
    if (apellido.trim().length < 3) {
        Swal.fire({
            title: 'el apellido debe ser mayor a 3 caracteres.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (!/^[A-Za-zÁ-Úá-úüÜ]+$/.test(apellido.trim())) {
        Swal.fire({
            title: 'El campo de apellido solo debe contener letras.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (direccion.trim() === '') {
        Swal.fire({
            title: 'El campo de direccion es obligatorio.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    
    if (direccion.trim().length < 3) {
        Swal.fire({
            title: 'La direccion debe ser mayor a 3 caracteres.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (fecha.trim() === '') {
        Swal.fire({
            title: 'El campo de fecha es obligatorio.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (telefono.trim() === '') {
        Swal.fire({
            title: 'El campo de telefono es obligatorio.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (!/^\d+$/.test(telefono.trim())) {
        Swal.fire({
            title: 'El campo de telefono solo debe contener números.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (telefono.trim().length < 10) {
        Swal.fire({
            title: 'El telefono debe ser igual a 10 digitos.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (telefono.trim().length > 10) {
        Swal.fire({
            title: 'El telefono no debe pasar de 10 caracteres numericos',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (correo.trim() === '') {
        Swal.fire({
            title: 'El campo de correo es obligatorio.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    
    if (correo.trim().length < 5) {
        Swal.fire({
            title: 'El correo debe ser mayor a 5 caracteres.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (!correo.trim().endsWith("@gmail.com")) {
        Swal.fire({
            title: 'Por favor, ingresa un correo electrónico de Gmail',
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

    if (pass.trim().length < 6) {
        Swal.fire({
            title: 'La contraseña debe ser mayor a 6 caracteres.',
            icon: 'warning',
            position: 'center',
            color: 'red',
            showConfirmButton: false,
            timer: 1500
        });        
        return false;
    }

    if (!/[!@#$%^&*(),.?":{}|<>]/.test(pass.trim()) ||
    !/[A-Z]/.test(pass.trim()) ||
    !/[a-z]/.test(pass.trim()) ||
    !/[0-9]/.test(pass.trim())
    ){
        Swal.fire({
            title: 'La contraseña debe contener 1 caracter especial, 1 letra mayuscula, 1 letra minuscula y un caracter numerico.',
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
