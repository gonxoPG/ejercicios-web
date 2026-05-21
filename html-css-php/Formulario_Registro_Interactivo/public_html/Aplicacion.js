function mostrarContrasena() {
        // Obtenemos variables que guardan el contenido de diferentes campos
    let pass = document.getElementById("password");
    let confpass = document.getElementById("confirmedpass");
    let botonMostrar = document.getElementById("showpass");

        // Una condición que indica que si el tipo de ese campo es password, lo pase a texto y viceversa.
    if (pass.type === "password") {
        pass.type = "text";
        confpass.type = "text";
        botonMostrar.textContent = "Ocultar";
    }else{
        pass.type = "password";
        confpass.type = "password";
        botonMostrar.textContent = "Mostrar";
    }
}

    // La función que valida los campos antes de enviar el formulario. Han servido como base los ejercicios de clase
function validateForm () {
    const usernameInput = document.getElementById("nombre");
    const emailInput = document.getElementById("correo");
    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirmedpass")

    const usernameError = document.getElementById("nombre-error");
    const emailError = document.getElementById("correo-error");
    const passwordError = document.getElementById("password-error");
    const confirmPasswordError = document.getElementById("confirmedpass-error");

    usernameError.textContent = "";
    emailError.textContent = "";
    passwordError.textContent = "";
    confirmPasswordError.textContent = "";

    // Sirve para interrumpir el envío del formulario si los campos no son correctos
    let isValid = true;

        // Comprueba si el campo del nombre de usuario está vacío y muestra un mensaje de error si es así
    if (usernameInput.value === "") {
        usernameError.textContent = "Ingrese un nombre de usuario";
        isValid = false;
    }

    if (emailInput.value === "") {
        emailError.textContent = "Ingrese un correo electrónico";
        isValid = false;
    }else if (!isValidEmail(emailInput.value)) {
        emailError.textContent = "Ingrese un correo electrónico válido";
        isValid = false;
    }

    if (passwordInput.value === "") {
        passwordError.textContent = "Ingrese una contraseña";
        isValid = false;
    }

    if (confirmPasswordInput === "") {
        confirmPasswordError.textContent = "Confirme su contraseña";
    }else if (confirmPasswordInput.value !== passwordInput.value) {
        confirmPasswordError.textContent = "Las contraseñas no coinciden";
        isValid = false;
    }

    if (isValid) {
        alert("¡Formulario enviado correctamente!");
    }

    function isValidEmail(email){
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        return emailRegex.test(email);
    }
}

    // Declaramos una variable fuera de la función porque es necesario para concatenar correctamente el valor 'value'
var campoSeleccionado = null;

function addCharacter(value){
        // Esta variable servirá para guardar el contenido de cada 'input'
    var campos = document.querySelectorAll("input");
    
        // Recorre todas la entradas para agregar un 'EventListener' al elemento enfocado
    campos.forEach(function(campo) {
        campo.addEventListener('focus', function() {
                // Almacena el campo actual como el último campo enfocado
            campoSeleccionado = campo;
        });
    });

    if (campoSeleccionado) {
            // Es la variable que va almacenando el texto (como un String) en el último campo seleccionado
        campoSeleccionado.value += value;
    }
}

    function removeCharacter() {
        if (campoSeleccionado) {
                // Si hay un campo seleccionado, elimina su último caracter (como una String)
            campoSeleccionado.value = campoSeleccionado.value.slice(0, -1);
            
        }
    }

