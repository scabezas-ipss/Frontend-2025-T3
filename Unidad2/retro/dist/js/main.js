// cambiarModoDiaNoche();

function cambiarModoDiaNoche() {

    ///console.log('Cambiar Modo: Dia/Noche');

    diaNoche = localStorage.getItem("modoDiaNoche");

    if (diaNoche == null) {
        //console.log('No tiene un modo definido en Storage');
        localStorage.setItem("modoDiaNoche", "noche");
        aplicarModoNoche();
    } else {
        if (diaNoche == 'dia') {
            // console.log('es de dia, cambia a modo noche');
            localStorage.setItem("modoDiaNoche", "noche");
            aplicarModoNoche();
        } else {
            // console.log('es de noche, cambia a modo dia');
            localStorage.setItem("modoDiaNoche", "dia");
            aplicarModoDia();
        }
    }
}

function aplicarModoDia() {
    const secHome = document.getElementById('home');
    const linkModo = document.getElementById('linkModoDiaNoche');
    secHome.classList.remove('bg-body-tertiary-noche');
    secHome.classList.add('bg-body-tertiary-dia');
    // console.log('cambios de modo dia aplicados');
    linkModo.classList.remove('text-white');
    linkModo.classList.add('text-black');
}

function aplicarModoNoche() {
    const secHome = document.getElementById('home');
    const linkModo = document.getElementById('linkModoDiaNoche');
    secHome.classList.remove('bg-body-tertiary-dia');
    secHome.classList.add('bg-body-tertiary-noche');
    // console.log('cambios de modo noche aplicados');
    linkModo.classList.remove('text-black');
    linkModo.classList.add('text-white');
}
//cambiarTextoHero();
function cambiarTextoHero() {
    const textoGigante = document.getElementById('boda_nombre');
    textoGigante.innerText = 'Ana & Seba';
}

function enviarMensajeFormulario(_btn) {
    const nombre = document.getElementById('formNombre');
    const email = document.getElementById('formEmail');
    const comentario = document.getElementById('formComentario');

    let todoOk = 3;

    if (nombre.value.length == 0) {
        nombre.classList.remove('is-valid');
        nombre.classList.add('is-invalid');
    } else {
        nombre.classList.remove('is-invalid');
        nombre.classList.add('is-valid');
        nombre.setAttribute('disabled', 'disabled');
        todoOk--;
    }

    if (email.value.length == 0) {
        email.classList.remove('is-valid');
        email.classList.add('is-invalid');
    } else {
        email.classList.remove('is-invalid');
        email.classList.add('is-valid');
        email.setAttribute('disabled', 'disabled');
        todoOk--;
    }

    if (comentario.value.length == 0) {
        comentario.classList.remove('is-valid');
        comentario.classList.add('is-invalid');
    } else {
        comentario.classList.remove('is-invalid');
        comentario.classList.add('is-valid');
        comentario.setAttribute('disabled', 'disabled');
        todoOk--;
    }

    // console.log(nombre.value.length);
    // console.log(email.value);
    // console.log(comentario.value);
    if (todoOk == 0) {
        console.log('Está listo para ser enviado');
        _btn.setAttribute('disabled', 'disabled');
        _btn.innerText = 'Revisa la App de Whatsapp';
        abrirWhatsapp(nombre.value, comentario.value);
    } else {
        console.log('Aún hay errores que corregir');
    }
}

function abrirWhatsapp(_nombre, _comentario) {
    const telefono = '56956185618';
    // 1. Construimos el mensaje usando Template Strings
    const mensaje = `¡Hola soy ${_nombre}! tengo el siguiente mensaje: "${_comentario}"`;

    // 2. Codificamos el mensaje para URL (convierte espacios a %20, etc.)
    const mensajeCodificado = encodeURIComponent(mensaje);

    // 3. Construimos la URL base
    // Si hay teléfono, usa wa.me/numero, si no, usa wa.me/?text= (pedirá seleccionar contacto en móviles)
    const url = telefono ?
        `https://wa.me/${telefono}?text=${mensajeCodificado}` :
        `https://wa.me/?text=${mensajeCodificado}`;

    // 4. Abrir en una nueva pestaña
    window.open(url, '_blank');
}