//  Función para cambiar el fondo de la página 

// Espera a que todo el contenido del documento cargue
document.addEventListener('DOMContentLoaded', function() {

    // Selecciona el encabezado principal usando el selector de etiqueta
    const titulo = document.querySelector('h1');

    // Agrega un evento al hacer clic en el h1
    titulo.addEventListener('click', function() {
        // Cambia el color de fondo del body
        document.body.style.backgroundColor = '#800000';  // Amarillo claro
    });

});
