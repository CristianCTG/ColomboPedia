document.getElementById('imagen').addEventListener('change', function(event) {
    const archivo = event.target.files[0]; 

    if (archivo) {
        const lector = new FileReader(); 

        lector.onload = function(e) {
            const vistaPrevia = document.getElementById('vistaPrevia');
            vistaPrevia.src = e.target.result; 
        };

        lector.readAsDataURL(archivo); 
    }
});