console.log("Holaaaaaaaaaa")
const validarCamposRegistro = () => {
    let nombre = document.getElementById('nombre').value;
    let apellido = document.getElementById('apellido').value;
    let direccion = document.getElementById('direccion').value;
    let fecha = document.getElementById('fecha-nacimiento').value;
    let telefono = document.getElementById('telefono').value;
    let correo = document.getElementById('usuario').value;
    let pass = document.getElementById('password').value;



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

    
    if (telefono.trim().length < 10) {
        Swal.fire({
            title: 'La telefono debe ser mayor a 10 digitos.',
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
