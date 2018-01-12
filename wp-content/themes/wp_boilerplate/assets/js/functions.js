$(".boton").on("click",function (){
	let people= prompt("Hola, cuantas personas van a reservar?");
	let available = 8
	if (people < available) {
		alert("Bienvenidos, disfruten de la estadia!");
	}else if (people == available ) {
		alert("Bienvenidos, suerte que son las ultimas reservas que me quedan");
	} else if (people > available) {
		alert("No me quedan reservas disponible, intente en otra ocasion!");
	} else {
		alert("No ha introducido una opcion valida, intente de nuevo");
	}
}) 

function pregunta(){
	if (confirm("Esta seguro que desea enviar esta informacion?")){
	}
	
}
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
h=checkTime(h);
m=checkTime(m);
s=checkTime(s);
document.getElementById('hora').innerHTML =h+":"+m+":"+s;
t=setTimeout(startTime(), 500);
}