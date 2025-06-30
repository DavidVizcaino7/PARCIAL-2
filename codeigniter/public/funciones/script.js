// Esperar que todo el DOM esté cargado antes de ejecutar
document.addEventListener('DOMContentLoaded', function() {

    // Obtenemos los elementos del DOM
    var btnMultiplicar = document.getElementById('btnMultiplicar');
    var numMultiplicar = document.getElementById('numMultiplicar');
    var resultadoMultiplicar = document.getElementById('resultadoMultiplicar');

    var btnPotencia = document.getElementById('btnPotencia');
    var basePotencia = document.getElementById('basePotencia');
    var exponentePotencia = document.getElementById('exponentePotencia');
    var resultadoPotencia = document.getElementById('resultadoPotencia');

    // Evento para generar la tabla de multiplicar
    btnMultiplicar.addEventListener('click', function() {
        // Limpiamos resultados anteriores
        resultadoMultiplicar.innerHTML = '';

        var numero = parseInt(numMultiplicar.value);

        // Validamos que sea un número válido
        if (!isNaN(numero)) {
            // Generamos la tabla del 1 al 12
            for (var i = 1; i <= 12; i++) {
                var linea = document.createElement('p');
                linea.textContent = numero + ' x ' + i + ' = ' + (numero * i);
                resultadoMultiplicar.appendChild(linea);
            }
        } else {
            resultadoMultiplicar.innerHTML = '<div class="alert alert-warning">Ingrese un número válido.</div>';
        }
    });

    // Evento para calcular potencias
    btnPotencia.addEventListener('click', function() {
        // Limpiamos resultados anteriores
        resultadoPotencia.innerHTML = '';

        var base = parseInt(basePotencia.value);
        var hasta = parseInt(exponentePotencia.value);

        // Validamos que sean números válidos y que el exponente sea mayor que 0
        if (!isNaN(base) && !isNaN(hasta) && hasta > 0) {
            for (var i = 1; i <= hasta; i++) {
                var linea = document.createElement('p');
                linea.textContent = base + ' ^ ' + i + ' = ' + Math.pow(base, i);
                resultadoPotencia.appendChild(linea);
            }
        } else {
            resultadoPotencia.innerHTML = '<div class="alert alert-warning">Ingrese valores válidos.</div>';
        }
    });

});
