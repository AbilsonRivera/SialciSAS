document.addEventListener("DOMContentLoaded", function() {
    console.log("El DOM ha sido cargado.");

    const form = document.querySelector('.formulario');
    console.log("El formulario ha sido seleccionado:", form);

    const nextBtn = form.querySelector(".nextBtn");
    console.log("El botón 'Next' ha sido seleccionado:", nextBtn);

    const backBtn = form.querySelector(".backBtn");
    console.log("El botón 'Back' ha sido seleccionado:", backBtn);

    const firstForm = document.querySelector('.form.first');
    console.log("El primer formulario ha sido seleccionado:", firstForm);

    const secondForm = document.querySelector('.form.second');
    console.log("El segundo formulario ha sido seleccionado:", secondForm);

    nextBtn.addEventListener("click", () => {
        console.log("Se hizo clic en el botón 'Next'.");

        let isValid = true;
        const allInputs = firstForm.querySelectorAll("input");

        allInputs.forEach(input => {
            if (input.value === "") {
                isValid = false;
            }
        });

        if (isValid) {
            console.log("El formulario es válido. Cambiando al segundo formulario.");
            firstForm.classList.remove('secActive'); // Remove secActive from first form container
            secondForm.classList.add('secActive'); // Add secActive to second form container
        } else {
            console.log("El formulario no es válido. Se muestra una alerta.");
            alert("Por favor, complete todos los campos del formulario.");
        }
    });

    backBtn.addEventListener("click", () => {
        console.log("Se hizo clic en el botón 'Back'.");
        firstForm.classList.add('secActive'); // Add secActive to first form container
        secondForm.classList.remove('secActive'); // Remove secActive from second form container
    });
});
