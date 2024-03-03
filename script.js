const form = document.querySelector("form"),
    nextBtn = form.querySelector(".nextBtn"),
    backBtn = form.querySelector(".backBtn"),
    allInput = form.querySelectorAll(".first input");

nextBtn.addEventListener("click", () => {
    let allFilled = true;
    allInput.forEach(input => {
        if (input.value === "") {
            allFilled = false;
        }
    });
    if (allFilled) {
        form.classList.add('secActive');
    }
});

backBtn.addEventListener("click", () => form.classList.remove('secActive'));
