function calcular_total() {
	var importe_total = 0;
	servicios_select=[];
	$(".importe_linea").each(
		function(index, value) {
			if (eval($(this).val())) {
				importe_total = importe_total + parseInt(servicio[eval($(this).val())][1]);
				servicios_select.push(servicio[eval($(this).val())][0]+ ' - S/.' + servicio[eval($(this).val())][1]);
			}
		}
	);
	document.getElementById("total_final").innerHTML='s/.'+importe_total;
	$("#total").val(parseInt(importe_total));
	return importe_total;
}

function refresh(objeto) {
	var id=objeto.id.substring(8);
	var op=document.getElementById("servicio"+id).value;
    document.getElementById("demo"+id).innerHTML = "s/. " + servicio[parseInt(op)][1];
    calcular_total();
}

$(document).ready(function() {
	document.getElementById("demo1").innerHTML = "s/. " + calcular_total().toString();
	$(".bt_plus").each(function (el){	
		$(this).bind("click",addField);
	});

	$( "#p1" ).click(function() {
		$("#asunto").val("SOLICITO PAQUETE");
  		$("#mensaje").val("QUIERO TOMAR EL PAQUETE BASICO");
	});
	$( "#p2" ).click(function() {
		$("#asunto").val("SOLICITO PAQUETE");
  		$("#mensaje").val("QUIERO TOMAR EL PAQUETE NEGOCIO");
	});
	$( "#p3" ).click(function() {
		$("#asunto").val("SOLICITO PAQUETE");
  		$("#mensaje").val("QUIERO TOMAR EL PAQUETE TIENDA VIRTUAL");
	});

	$(".cotizar_final" ).click(function() {
		var cotizacion="Quiero cotizar lo siguiente:\n";
  		for (var i=0; i<servicios_select.length; i++){
			cotizacion=cotizacion+servicios_select[i]+"\n";
		}
  		var t_coti = calcular_total();
  		$("#asunto").val("COTIZACIÓN ONLINE");
  		cotizacion=cotizacion+"Total: s/."+t_coti.toString();
		$("#mensaje").val(cotizacion);
	});

});


function addField(){
	var clickID = parseInt($(this).parent('div').attr('id').replace('div_',''));
	var newID = (clickID+1);
	//$("#total").val(newID);

	$newClone = $('#div_'+clickID).clone(true);
	$newClone.attr("id",'div_'+newID);
	$newClone.children("select").eq(0).attr("id",'servicio'+newID).attr("name",'servicio'+newID).val('0');
	$newClone.children("p").eq(0).attr("id",'demo'+newID).html("");
	$newClone.children("input").eq(0).attr("id",newID);
	$newClone.insertAfter($('#div_'+clickID));
	$("#"+clickID).val('-').unbind("click",addField);
	$("#"+clickID).bind("click",delRow);							   
}


function delRow() {
	$(this).parent('div').remove();
	//$("#total").val(parseInt($("#total").val())-1);
	calcular_total();
}