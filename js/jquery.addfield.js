$(document).ready(function() {
	
		$(".bt_plus").each(function (el){	
			$(this).bind("click",addField);
	});
});


function addField(){
var clickID = parseInt($(this).parent('div').attr('id').replace('div_',''));
var newID = (clickID+1);
$("#total").val(newID);

// Creo un clon del elemento div que contiene los campos de texto
$newClone = $('#div_'+clickID).clone(true);

//Le asigno el nuevo numero id
$newClone.attr("id",'div_'+newID);

//Asigno nuevo id al primer campo input dentro del div y le borro cualquier valor que tenga asi no copia lo ultimo que hayas escrito.(igual que antes no es necesario tener un id)
$newClone.children("input").eq(0).attr("id",'servicio'+newID).attr("name",'servicio'+newID).val('');

//Borro el valor del segundo campo input(este caso es el campo de cantidad)
$newClone.children("input").eq(1).attr("id",'costo'+newID).attr("name",'costo'+newID).val('');

//Asigno nuevo id al boton
$newClone.children("input").eq(2).attr("id",newID)

//Inserto el div clonado y modificado despues del div original
$newClone.insertAfter($('#div_'+clickID));

//Cambio el signo "+" por el signo "-" y le quito el evento addfield
$("#"+clickID).val('-').unbind("click",addField);


//Ahora le asigno el evento delRow para que borre la fial en caso de hacer click
$("#"+clickID).bind("click",delRow);					

			   
}


function delRow() {
// Funcion que destruye el elemento actual una vez echo el click
$(this).parent('div').remove();
$("#total").val(parseInt($("#total").val())-1);

}