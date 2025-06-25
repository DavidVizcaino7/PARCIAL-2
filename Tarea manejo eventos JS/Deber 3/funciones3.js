// Acceder a los elementos necesarios
let input1 = document.getElementById("num1");
let input2 = document.getElementById("num2");
let operacion = document.getElementById("operacion");
let campoResultado = document.getElementById("resultado");

// Ejecutar cálculo al hacer focus en el campo resultado
campoResultado.addEventListener("focus", function() {
    let n1 = parseFloat(input1.value);
    let n2 = parseFloat(input2.value);
    let signo = operacion.value;
    let total;

    // Validar que sean números válidos
    if (isNaN(n1) || isNaN(n2) || signo === "") {
        campoResultado.value = "Revisa los datos";
        return;
    }

    // Realizar la operación seleccionada
    if (signo === "+") {
        total = n1 + n2;
    } else if (signo === "-") {
        total = n1 - n2;
    } else if (signo === "*") {
        total = n1 * n2;
    } else if (signo === "/") {
        if (n2 === 0) {
            campoResultado.value = "Error: división por 0";
            return;
        }
        total = n1 / n2;
    }

    // Mostrar resultado
    campoResultado.value = total;

    // Estilos según el tipo de resultado
    campoResultado.classList.remove("positivo-par", "otro");

    if (total >= 0 && total % 2 === 0) {
        campoResultado.classList.add("positivo-par");
    } else {
        campoResultado.classList.add("otro");
    }
});
