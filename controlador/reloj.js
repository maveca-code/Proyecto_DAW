function damehora(nomform,nomcampo){
    hora = new Date();	
    horas = hora.getHours();
    minutos = hora.getMinutes();
    segundos = hora.getSeconds();
	if (horas<10){
            horas = "0" + horas;
	}
	if (minutos<10){
            minutos = "0" + minutos;
	}
	if (segundos<10){
            segundos = "0" + segundos;
	}
        
	mihora = horas+":"+minutos+":"+segundos;
	eval ("document." + nomform + "." + nomcampo + ".value = mihora");	
}

function fechahoy(nomform,nomcampo){
    fecha = new Date();
    dia = fecha.getDate();
    mesmal = fecha.getMonth();
    mesbien = mesmal+1;
    //prueba
    anho = fecha.getFullYear();
    mifecha = dia+"/"+mesbien+"/"+anho;
    eval ("document." + nomform + "." + nomcampo + ".value = mifecha");
}


