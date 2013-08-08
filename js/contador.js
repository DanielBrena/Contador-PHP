var x = $(document);
x.ready(inicio);


var s ;
var m;
var h;
//||  $("#minuto").val() != "" ||  $("#segundo").val()

function inicio(){
	var x = $("#enviar");
	x.click(enviar);

	x = $("#ascendente");
	x.click(ascendente);

	x=$("#descendente");
	x.click(descendente);

	x=$("#parar");
	x.click(parar);

	$.get("segundo.php",segundo_mostrar);
	$.get("minuto.php",minuto_mostrar);
	$.get("hora.php",hora_mostrar);
	
}


function segundo_mostrar(seg){
	s = parseInt(seg);
	
}
function minuto_mostrar(min){
	m = parseInt(min);
	
}
function hora_mostrar(hor){
	h = parseInt(hor);
	
}


function enviar(){

	s = parseInt($("#segundo").val());
	m = parseInt($("#minuto").val());
	h = parseInt($("#hora").val());
	if($("#segundo").val() !="" && h < 25 && $("#minuto").val()  !="" && m <60  && $("#hora").val() != "" && s < 60){

	enviar_segundos(s);
	enviar_minutos(m);
	enviar_horas(h);
	}
	
}


function recibir_segundo(seg){
	$("#s_").html(seg);
}

function recibir_minuto(min){
	$("#m_").html(min);
}

function recibir_hora(hor){
	$("#h_").html(hor);
}
function enviar_segundos(s){

	$.get("segundo.php",{segundo:s},recibir_segundo);
    

}
function enviar_minutos(m){

	$.get("minuto.php",{minuto:m},recibir_minuto);
    

}
function enviar_horas(h){

	$.get("hora.php",{hora:h},recibir_hora);
    

}


function ascendente(){

	s++;
	
	if(s > 59){
		m++
		
		if(m > 59){
			m = 0;
			h++;
			enviar_horas(h);
			
		}
		
		s = 0;
		enviar_minutos(m);

	}
	
	c = setTimeout(ascendente, 1000);
	enviar_segundos(s);
	
	$("#ascendente").unbind('click');
	$("#descendente").unbind('click');

}

function descendente(){
	s--;
	
	if(s < 0){
		m--
		
		if(m < 0){
			m = 59;
			h--;
			enviar_horas(h);
			
		}
		
		s = 59;
		enviar_minutos(m);

	}
	
	c = setTimeout(descendente, 1000);
	enviar_segundos(s);
	
	$("#descendente").unbind('click');
	$("#ascendente").unbind('click');
}

function parar(){
	clearTimeout(c);
	
	$("#ascendente").bind('click',ascendente);
	$("#descendente").bind('click',descendente);

}

