// Eventos en HTML directo 

// Se ejecuta cuando la página termina de cargar
function eventoOnload() {
    console.log("✅ Página cargada (onload)");
}

// Se ejecuta al hacer click en el botón con atributo onclick en HTML
function eventoOnClick() {
    console.log("✅ Click en botón (HTML)");
}

// Se ejecuta cuando cambia la selección del select con onchange en HTML
function eventoOnChange() {
    console.log("✅ Cambio en select (HTML)");
}

// Se ejecuta cuando el usuario escribe o modifica texto en el input con oninput en HTML
function eventoOnInput() {
    console.log("✅ Input detectado (HTML)");
}

// Se ejecuta cuando el mouse entra en el área del elemento con onmouseover en HTML
function eventoOnMouseOver() {
    console.log("✅ Mouse sobre el área (HTML)");
}

// Se ejecuta cuando el mouse sale del área del elemento con onmouseout en HTML
function eventoOnMouseOut() {
    console.log("✅ Mouse salió del área (HTML)");
}

// Se ejecuta al presionar una tecla mientras el input tiene foco, con onkeydown en HTML
function eventoOnKeyDown() {
    console.log("✅ Tecla presionada (keydown HTML)");
}

// Se ejecuta al soltar una tecla mientras el input tiene foco, con onkeyup en HTML
function eventoOnKeyUp() {
    console.log("✅ Tecla soltada (keyup HTML)");
}

// Se ejecuta cuando el input recibe foco, con onfocus en HTML
function eventoOnFocus() {
    console.log("✅ Focus en campo (HTML)");
}

// Se ejecuta cuando el input pierde foco, con onblur en HTML
function eventoOnBlur() {
    console.log("✅ Blur: saliste del campo (HTML)");
}


//  addEventListener 

// Se ejecuta cuando el DOM está completamente cargado y listo
document.addEventListener('DOMContentLoaded', function() {
    // Obtiene referencias a los elementos para agregarles eventos
    const btn = document.getElementById('btnJS');
    const select = document.getElementById('selectJS');
    const input = document.getElementById('inputJS');
    const areaMouse = document.getElementById('areaMouse');
    const teclas = document.getElementById('teclasJS');
    const focusBlur = document.getElementById('focusBlurJS');

    // Evento click para el botón
    btn.addEventListener('click', function() {
        console.log("✅ Click en botón (JS)");
    });

    // Evento change para el select
    select.addEventListener('change', function() {
        console.log("✅ Cambio en select (JS)");
    });

    // Evento input para el campo de texto
    input.addEventListener('input', function() {
        console.log("✅ Input detectado (JS)");
    });

    // Evento mouseover para el área que detecta el mouse
    areaMouse.addEventListener('mouseover', function() {
        console.log("✅ Mouse sobre (JS)");
    });

    // Evento mouseout para el área que detecta cuando el mouse sale
    areaMouse.addEventListener('mouseout', function() {
        console.log("✅ Mouse salió (JS)");
    });

    // Evento keydown cuando se presiona una tecla en el input
    teclas.addEventListener('keydown', function() {
        console.log("✅ Tecla presionada (keydown JS)");
    });

    // Evento keyup cuando se suelta una tecla en el input
    teclas.addEventListener('keyup', function() {
        console.log("✅ Tecla soltada (keyup JS)");
    });

    // Evento focus cuando el input recibe foco
    focusBlur.addEventListener('focus', function() {
        console.log("✅ Focus (JS)");
    });

    // Evento blur cuando el input pierde foco
    focusBlur.addEventListener('blur', function() {
        console.log("✅ Blur (JS)");
    });

    // Evento resize cuando se cambia el tamaño de la ventana
    window.addEventListener('resize', function() {
        console.log("✅ La ventana ha cambiado de tamaño (resize)");
    });

    // Evento scroll cuando se hace scroll en la ventana
    window.addEventListener('scroll', function() {
        console.log("✅ Scroll detectado en la ventana");
    });
});
