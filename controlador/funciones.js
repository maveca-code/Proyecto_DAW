/*Oculto el Id en los formularios*/
$(document).ready(function(){
    $('#oculto').hide();
});

/*Muestro el Id si pulso sobre el check de editar o borrar*/
$(document).ready(function(){
  $('.mostrarId').click(function(){
      var valor=$(this).val();
    if ((valor=='4') || (valor=='5')) {
     $("#oculto").show();
    }else{
     $("#oculto").hide();
    }  
  });
});

/*Funciones para validar los distintos formularios*/

//Validar formulario Usuario
function validarUsuario(){
    var id, usuario, pass, nivel;
    id=document.getElementById('id').value;
    usuario=document.getElementById('usuario').value;
    pass=document.getElementById('pass').value;
    nivel=document.getElementById('nivel').value;
    expresion=/^[1-4]$/;
    
    if(document.getElementById('añadir').checked){
        if(usuario === "" || pass === "" || nivel===""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }else if(isNaN(nivel)){
            alert("El nivel debe ser un numero");
            return false;
        }else if(!expresion.test(nivel)){
            alert("El nivel debe ser un numero entre 1 y 4");
            return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(usuario === "" && nivel===""){
          alert("Indica el usuario y el nivel");  
          return false;
        }else if(isNaN(nivel)){
            alert("El nivel debe ser un numero");
            return false;
        }else if(!expresion.test(nivel)){
            alert("El nivel debe ser un numero entre 1 y 4");
            return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }else if(!expresion.test(nivel)){
            alert("El nivel debe ser un numero entre 1 y 4");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar usuario

//Validar formulario agricultor
function validarAgricultor(){
    var id, apodo, zona;
    id=document.getElementById('id').value;
    apodo=document.getElementById('apodo').value;
    zona=document.getElementsByTagName('select')[0].value;
    
    if(document.getElementById('añadir').checked){
        if(apodo === "" || zona === ""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(apodo === "" && zona===""){
          alert("Indica el apodo y la zona");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar agricultor

//Validar formulario articulo
function validarArticulo(){
    var id, producto;
    id=document.getElementById('id').value;
    producto=document.getElementById('producto').value;
    
    if(document.getElementById('añadir').checked){
        if(producto === ""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(producto === ""){
          alert("Indica el producto a buscar");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar articulo

//Validar formulario comprador
function validarComprador(){
    var id, empresa;
    id=document.getElementById('id').value;
    empresa=document.getElementById('empresa').value;
    
    if(document.getElementById('añadir').checked){
        if(empresa === ""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(empresa === ""){
          alert("Indica la empresa a buscar");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar comprador

//Validar formulario cuaderno
function validarCuaderno(){
    var id, cuaderno, agricultor;
    id=document.getElementById('id').value;
    finca=document.getElementsByTagName('select')[0].value;
    agricultor=document.getElementsByTagName('select')[1].value;
    
    if(document.getElementById('añadir').checked){
        if(finca === "" || agricultor===""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(finca === "" && agricultor===""){
          alert("Indica la finca y el agricultor");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar cuaderno

//Validar formulario detalle salida
function validarDetsalida(){
    var id, loteentrada, fecha, lineaentrada, horaentrada;
    id=document.getElementById('id').value;
    loteentrada=document.getElementsByTagName('select')[0].value;
    lineaentrada=document.getElementsByTagName('select')[1].value;
    fecha=document.getElementById('detfecha').value;
    horaentrada=document.getElementById('horaentrada').value;
    
    if(document.getElementById('añadir').checked){
        if(loteentrada === "" || lineaentrada==="" || fecha==="" || horaentrada===""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(loteentrada === "" && lineaentrada==="" && fecha===""){
          alert("Indica el lote de entrada, la linea de envasado o la fecha");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar detalle salida

//Validar formulario finca
function validarFinca(){
    var id, paraje;
    id=document.getElementById('id').value;
    paraje=document.getElementById('paraje').value;
    
    if(document.getElementById('añadir').checked){
        if(paraje === ""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(paraje === ""){
          alert("Indica el paraje");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar finca

//Validar formulario formato
function validarFormato(){
    var id, envase;
    id=document.getElementById('id').value;
    envase=document.getElementById('envase').value;
    
    if(document.getElementById('añadir').checked){
        if(envase === ""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(envase === ""){
          alert("Indica el envase a buscar");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar formato

//Validar formulario linea
function validarLinea(){
    var id, linea;
    id=document.getElementById('id').value;
    linea=document.getElementById('linea').value;
    
    if(document.getElementById('añadir').checked){
        if(linea === ""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(linea === ""){
          alert("Indica la linea");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar linea

//Validar formulario lote entrada
function validarLoteEntrada(){
    var id, fechaEntrada, HoraEntrada, agricultor, articulo;
    id=document.getElementById('id').value;
    fechaEntrada=document.getElementById('fechaentrada').value;
    horaEntrada=document.getElementById('horaentrada').value;
    agricultor=document.getElementsByTagName('select')[0].value;
    articulo=document.getElementsByTagName('select')[1].value;
    
    if(document.getElementById('añadir').checked){
        if(fechaEntrada === "" || horaEntrada==="" || agricultor==="" || articulo===""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(fechaEntrada === "" && horaEntrada==="" && agricultor==="" && articulo===""){
          alert("Buscar por los campos con asteriscos");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar lote entrada

//Validar formulario lote salida
function validarLoteSalida(){
    var id, fechasalida, comprador, transportista, articulo;
    id=document.getElementById('id').value;
    fechasalida=document.getElementById('losafecha').value;
    comprador=document.getElementsByTagName('select')[0].value;
    articulo=document.getElementsByTagName('select')[1].value;
    transportista=document.getElementsByTagName('select')[2].value;
    
    if(document.getElementById('añadir').checked){
        if(fechasalida === "" || comprador==="" || articulo==="" || transportista===""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(fechasalida === "" && comprador==="" && articulo==="" && transportista===""){
          alert("Buscar por los campos con asteriscos");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar lote salida

//Validar formulario pale
function validarPale(){
    var id, lotesalida, bruto, tara, bultos, piezas, envase, lineaenvasado;
    id=document.getElementById('id').value;
    bruto=document.getElementById('bruto').value;
    tara=document.getElementById('tara').value;
    bultos=document.getElementById('bultos').value;
    piezas=document.getElementById('piezas').value;
    lotesalida=document.getElementsByTagName('select')[0].value;
    envase=document.getElementsByTagName('select')[1].value;
    lineaenvasado=document.getElementsByTagName('select')[2].value;
    
    if(document.getElementById('añadir').checked){
        if(bruto === "" || tara==="" || bultos==="" || piezas==="" || bruto==="" || lotesalida==="" || envase==="" || lineaenvasado===""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }else if(tara>bruto){
            alert("La tara no puede ser mayor o igual al peso bruto");
            return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(lotesalida===""){
          alert("Buscar por lote de salida");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar pale

//Validar formulario parte
function validarParte(){
    var id, fecha, incidencia;
    id=document.getElementById('id').value;
    fecha=document.getElementById('parfecha').value;
    incidencia=document.getElementById('incidencia').value;
    ;
    
    if(document.getElementById('añadir').checked){
        if(fecha === "" || incidencia===""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(fecha=="" && incidencia===""){
          alert("Buscar por fecha, incidencia o ambas");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar parte

//Validar formulario transportista
function validarTransportista(){
    var id, empresa;
    id=document.getElementById('id').value;
    empresa=document.getElementById('empresa').value;
    
    
    if(document.getElementById('añadir').checked){
        if(empresa === ""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(empresa==""){
          alert("Buscar por empresa");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar transportista

//Validar formulario tratamiento
function validarTratamiento(){
    var id, fecha, cuaderno, tratamiento;
    id=document.getElementById('id').value;
    fecha=document.getElementById('trafecha').value;
    cuaderno=document.getElementsByTagName('select')[0].value;
    tratamiento=document.getElementById('tratamiento').value;
    
    
    if(document.getElementById('añadir').checked){
        if(fecha === "" || cuaderno==="" || tratamiento===""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(fecha === "" && cuaderno==="" && tratamiento===""){
          alert("Buscar por fecha, cuaderno, tratamiento o ambas");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar tratamiento

//Validar formulario zona
function validarZona(){
    var id, zona;
    id=document.getElementById('id').value;
    zona=document.getElementById('zona').value;
 
    if(document.getElementById('añadir').checked){
        if(zona === ""){
          alert("Los campos con * son imprescindibles");  
          return false;
        }
        
    }else if(document.getElementById('buscar').checked){
        if(zona === ""){
          alert("Buscar por zona");  
          return false;
        }
    }else if(document.getElementById('ver').checked){
       
    }else if(document.getElementById('editar').checked){
        if(id===""){
            alert("Indique el id y los campos a actualizar");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else if(document.getElementById('borrar').checked){
        if(id===""){
            alert("Indique el id");
            return false;
        }else if(isNaN(id)){
            alert("El id debe ser un numero");
            return false;
        }
    }else{
        alert("Seleccione una opcion");
    }  
}//fin funcion validar zona