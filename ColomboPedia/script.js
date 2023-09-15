const desplega = document.querySelectorAll('.desplega');
const buttons = document.querySelectorAll('.lnk');
const secciones = document.querySelectorAll('.seccion');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    // elimina la clase 'active' de todos los botones
    buttons.forEach(btn => {
      btn.classList.remove('activo');
    });
    // agrega la clase 'active' al botón que se ha hecho clic
    button.classList.add('activo');
    
    // muestra la sección correspondiente y oculta las demás
    secciones.forEach(seccion => {
      if (button.dataset.target === `#${seccion.id}`) {
        seccion.classList.add('visible');
        if(button.dataset.target === `#contactanos`){
            document.body.classList.remove('main-b');
            document.body.classList.remove('conocenos-b');
            document.body.classList.add('contactanos-b');
        }
        if(button.dataset.target === `#main`){
            document.body.classList.add('main-b');
            document.body.classList.remove('conocenos-b');
            document.body.classList.remove('contactanos-b');
        }

        if(button.dataset.target === `#conocenos`){
          document.body.classList.remove('mainb');
          document.body.classList.add('conocenos-b');
          document.body.classList.remove('contactanos-b');
        }
      } else {
        seccion.classList.remove('visible');
      }
    });
  });
});


var i = 0;

function mostrarImagen() {
    desplega[i].classList.remove('activo');
    i = (i + 1) % desplega.length;
    desplega[i].classList.add('activo');
}

setInterval(mostrarImagen, 3000);


