document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    const nextBtn = form.querySelector(".nextBtn");
    const backBtn = form.querySelector(".backBtn");
    const allInputs = form.querySelectorAll("input");
    const correoInput = form.querySelector('[name="correo"]');

    // Función para validar el formulario y mostrar una alerta con los errores si es necesario
    function validateAndNotify(event) {
        event.preventDefault(); // Evitar el comportamiento predeterminado del botón "Siguiente"
        event.stopPropagation(); // Detener la propagación del evento
        let isValid = true;
        const errors = [];

        allInputs.forEach(input => {
            // Si el campo no es el de "Nombre de la empresa", validarlo
            if (input.name !== "empresa") {
                // Verificar si el campo está vacío
                if (input.value === "") {
                    isValid = false;
                    errors.push("Por favor, complete todos los campos del formulario.");
                }

                // Verificar si el campo de nombre, apellidos o correo contiene números
                if ((input.name === "nombre" || input.name === "apellidos") && /\d/.test(input.value)) {
                    isValid = false;
                    errors.push("El nombre y el apellido no deben contener números.");
                }
            }

            // Validar el correo electrónico
            if (input.name === "correo" && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value)) {
                isValid = false;
                errors.push("El correo electrónico no es válido.");
            }
        });

        // Mostrar una alerta con los errores si es necesario
        if (!isValid) {
            alert(errors.join("\n"));
        } else {
            form.classList.add('secActive'); // Avanzar al siguiente paso si no hay errores de validación
        }
    }

    // Evento para el botón "Siguiente"
    nextBtn.addEventListener("click", validateAndNotify);

    // Evento para el botón "Atrás"
    backBtn.addEventListener("click", () => form.classList.remove('secActive'));
});
