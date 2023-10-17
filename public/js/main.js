(function ($) {

	"use strict";

	var fullHeight = function () {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function () {
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
	});

})(jQuery);


//Boten link//
var btns = document.getElementsByClassName("btn-lnk");


for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function () {
		var current = document.getElementsByClassName("active");
		if (current.length > 0) {
			current[0].className = current[0].className.replace("active", "");

		}
		this.className += " active";

	});
}

//Secciones//

var partes = document.getElementsByClassName("parte");
var favoritos = document.getElementsByClassName("pfavoritos");
var libros = document.getElementsByClassName("plibros");
var buscar = document.getElementsByClassName("navbar");
var btnLibros = document.getElementById("btn-biblioteca");
var btnFavoritos = document.getElementById("btn-favoritos");
var btnSubirlibro= document.getElementById("btn-subirlibro");
var subirlibro = document.getElementsByClassName("psubirlibro");
var adminlibro = document.getElementsByClassName("padminlibro");
var btnadminlibro= document.getElementById("btn-adminlibro");

btnLibros.addEventListener("click", function () {
	removeactivo();
	libros[0].className += " activo";
	buscar[0].style.display = "flex";
});

btnadminlibro.addEventListener("click", function(){
	removeactivo();
	buscar[0].style.display = "flex";
	adminlibro[0].className+=" activo";
});

btnSubirlibro.addEventListener("click",function(){
	removeactivo();
	subirlibro[0].className+=" activo";
	//buscar[0].style.display = "flex";
});

btnFavoritos.addEventListener("click", function () {
	removeactivo();
	favoritos[0].className += " activo";
});

function removeactivo(){
	buscar[0].style.display = "none";
	for (var i = 0; i < partes.length; i++) {
		partes[i].className = partes[i].className.replace("activo", "");
	}
}
