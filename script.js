window.onload = function () {
    var formularioContainer = document.getElementById('formularioContainer');
    window.scrollTo(0, formularioContainer.offsetTop);
};

$(document).ready(function() {
    // Manejar el clic en el enlace "Agregar más"
    $('.add-more').click(function(e) {
        e.preventDefault(); // Evitar el comportamiento predeterminado del enlace
        var fields = $(this).prev('.fields'); // Obtener el contenedor de campos
        var clone = fields.clone(); // Clonar los campos
        fields.after(clone); // Agregar el clon después del contenedor original
    });
});

