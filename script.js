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
  
        // Verificar si el campo de nombre o apellido contiene números
        if ((input.name === "nombre" || input.name === "apellidos" || input.name === "correo") && /\d/.test(input.value)) {
          isValid = false;
          return; // Detener la iteración si se encuentra un nombre o apellido con números
        }
      }
    });

    return isValid;
}

nextBtn.addEventListener("click", () => {
    // Validar el formulario
    if (!validateForm()) {
        alert("Por favor, complete todos los campos del formulario y asegúrese de que sean válidos.");
        return; // Detener el flujo si la validación falla
    }

    // Si la validación es exitosa, avanzar al siguiente paso
    form.classList.add('secActive');
});

backBtn.addEventListener("click", () => form.classList.remove('secActive'));