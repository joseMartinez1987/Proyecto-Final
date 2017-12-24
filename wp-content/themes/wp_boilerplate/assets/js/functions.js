$(".boton").on("click",function (){
	let people= prompt("Hola, cuantas personas van a reservar?");
	let available = 8
	if (people < available) {
		alert("Bienvenidos, disfruten de la estadia!");
	}else if (people == available ) {
		alert("Bienvenidos, suerte que son las ultimas reservas que me quedan");
	} else {
		alert("No me quedan reservas disponible, intente en otra ocasion!");
	}
}) 

$("#formulario").on("click",function(){
	alert("Su solicitud fue enviada, gracias");
})
