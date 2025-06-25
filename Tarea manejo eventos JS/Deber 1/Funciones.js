function iniciarJuego() {
    // Número secreto entre 1 y 9
    const numeroSecreto = Math.floor(Math.random() * 9) + 1;

    // Obtener todos los botones (divs con clase .num)
    const botones = document.querySelectorAll('.num');
    const mensaje = document.getElementById('mensaje');

    // Función para cada clic de botón
    function manejarClick(evento) {
        const boton = evento.target;
        const numeroSeleccionado = parseInt(boton.getAttribute('data-num'));

        // Si ya está deshabilitado, no hacer nada
        if (boton.classList.contains('disabled')) return;

        // Comparar número
        if (numeroSeleccionado === numeroSecreto) {
            mensaje.textContent = '¡Número ganador! 🎉';
            botones.forEach(b => {
                b.classList.add('disabled');
                b.style.pointerEvents = 'none';
            });
        } else {
            mensaje.textContent = 'Número incorrecto';
            boton.classList.add('disabled');
            boton.style.pointerEvents = 'none';
        }
    }

    // Activar evento clic para todos los botones
    botones.forEach(boton => boton.addEventListener('click', manejarClick));
}

// Llamar la función para iniciar el juego al cargar la página
window.onload = iniciarJuego;
