function AgregarPersona()
{ 
	
	var pagina= "./nexo.php";
	var nombre=$("#Nombre").val();
	var apellido=$("#Apellido").val();
	var dni=$("#dni").val();

	var persona={};

	persona.nombre= nombre;
	persona.apellido=apellido;
	persona.dni=dni;


   $.ajax({url:pagina,type:"post",data:{queHacer:"Agregar",persona:persona}})
   .then(function(exito){
   
   	alert(exito);
	   	$("#principal").html(exito);
   },function(error){

   });
   

}