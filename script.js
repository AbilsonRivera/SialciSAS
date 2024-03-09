const form = document.querySelector("form");
const nextBtn = form.querySelector(".nextBtn");
const backBtn = form.querySelector(".backBtn");
const allInputs = form.querySelectorAll(".first input");

// Función para validar todos los campos del formulario
function validateForm() {
    let isValid = true;
  
    allInputs.forEach(input => {
        // Si el campo no es el de "Nombre de la empresa", validarlo
        if (input.name !== "empresa") {
            // Verificar si el campo está vacío
            if (input.value === "") {
                isValid = false;
                return; // Detener la iteración si se encuentra un campo vacío
            }
  
            // Verificar si el campo de nombre, apellidos o correo contiene números
            if ((input.name === "nombre" || input.name === "apellidos") && /\d/.test(input.value)) {
                isValid = false;
                return; // Detener la iteración si se encuentra un nombre, apellido o correo con números
            }
        }
    });

    return isValid;
}

// Validar el formulario al cargar la página
window.addEventListener('load', () => {
    validateAndNotify();
});

// Función para validar el formulario y mostrar una alerta si es necesario
function validateAndNotify() {
    if (!validateForm()) {
        alert("Por favor, complete todos los campos del formulario y asegúrese de que sean válidos.");
    }
}

nextBtn.addEventListener("click", () => {
    // Validar el formulario al hacer clic en el botón "Siguiente"
    validateAndNotify();

    // Si la validación es exitosa, avanzar al siguiente paso
    form.classList.add('secActive');
});

backBtn.addEventListener("click", () => form.classList.remove('secActive'));
