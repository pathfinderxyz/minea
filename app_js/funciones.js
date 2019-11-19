function peticion_ajax(opciones) {
	$.ajax({
		url: 'app_server/funciones.php',
		dataType: 'json',
		type: 'POST',	
		data: opciones.datos,
	}).done(function(data) {
		setTimeout(function(){
			opciones.funccion(data);
		},200);
	});
}

function historial(id) {
	var fn_success_h = function(data) {
		if (data.status == 1) {
			var log = data.log;
			$("#modal_historial .modal-body").html('<div class="col-md-12 text-center">'
				+'<table id="table_log" class="table table-condensed table-bordered table-hover table-striped">'
					+'<thead>'
						+'<tr>'
						    +'<td>Estado</td>'
							+'<td>Unidad Responsable</td>'
							+'<td>Fecha y Hora</td>'
						+'</tr>'
					+'<thead>'
				+'</table>'
			+'</div>');
			for (var i = 0; i < log.length; i++) {
				$("#modal_historial #table_log").append('<tr>'
					+'<td>'+log[i].estado+'</td>'
					+'<td>'+log[i].unidad_responsable+'</td>'
					+'<td>'+log[i].fecha+'</td>'
				+'</tr>');
			};
		}else if(data.status == 0){
			$("#modal_historial .modal-body").html('<div class="col-md-12 text-center">'
				+'<h4>No hay Información</h4>'
			+'</div>');
		}
	}
	$("#modal_historial").remove();
	$('<div class="modal fade in" id="modal_historial" aria-hidden="false" style="display: block;">'
		+'<div class="modal-dialog"> '
			+'<div class="modal-content">'
				+'<div class="modal-header">'
					+'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>'
					+'<h4 class="modal-title">Historial</h4>'
				+'</div>'

				+'<div class="modal-body">'
					+'<div class="col-md-12  text-center">'
						+'<i class="fa fa-spinner fa-pulse fa-3x margin-bottom"></i>'
					+'</div>'
				+'</div>'
				+'<div class="modal-footer">'
					+'<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>'
				+'</div>'
			+'</div>'
		+'</div>'
	+'</div>').modal('show');


	var opciones = {
		funccion: fn_success_h,
		datos: {
			historial:1,
			id:id,
		}
	};
	peticion_ajax(opciones);
}

function enviar(id) {
	$("#modal_enviar").remove();
	$('<div class="modal fade in" id="modal_enviar" aria-hidden="false" style="display: block;">'
		+'<div class="modal-dialog"> '
			+'<div class="modal-content">'
				+'<div class="modal-header">'
					+'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>'
					+'<h4 class="modal-title">Enviar a</h4>'
				+'</div>'

				+'<div class="modal-body">'
					+'<div class="col-md-12  text-center">'
						+'<i class="fa fa-spinner fa-pulse fa-3x margin-bottom"></i>'
					+'</div>'
				+'</div>'
				+'<div class="modal-footer">'
					+'<button type="button"  onclick="guardar_enviar(\''+id+'\')" class="btn btn-info" data-dismiss="modal">Guardar</button>'
				+'</div>'
			+'</div>'
		+'</div>'
	+'</div>').modal('show');

	var fn_succes_e = function(data) {
		if (data.status == 1) {
			$("#modal_enviar .modal-body").html('<div id="result_error"></div><select class="form-control" id="selec_new_dpto"></select>');

			var lst_opt = "";
			var lst_dpto = data.info;
			for (var i = 0; i < lst_dpto.length; i++) {
				lst_opt += '<option value="'+lst_dpto[i]+'">'+lst_dpto[i]+'</option>';
			};
			
			$("#modal_enviar #selec_new_dpto").append(lst_opt);
		}else if(data.status == 0){

		}
	}

	var opciones = {
		funccion: fn_succes_e,
		datos: {
			obtene_mi_departamento:1,
			id:id,
		}
	};
	peticion_ajax(opciones);
}

function guardar_enviar (id) {
	var fn_succes_ge = function(data) {
		if (data.status == 1) {
			$("#modal_enviar #result_error").html('<div class="alert alert-success">Se actualizo el departamento.</div>');
		}else if (data.status == 0) {
			$("#modal_enviar #result_error").html('<div class="alert alert-danger">Error</div>');
		}
	}
	// 
	var departamento = $("#modal_enviar #selec_new_dpto").val();

	var opciones = {
		funccion: fn_succes_ge,
		datos: {
			cambiar_dpto:1,
			id:id,
			dpto:departamento,
		}
	};
	peticion_ajax(opciones);

}

function estado(id) {
	$("#modal_estado").remove();
	$('<div class="modal fade in" id="modal_estado" aria-hidden="false" style="display: block;">'
		+'<div class="modal-dialog"> '
			+'<div class="modal-content">'
				+'<div class="modal-header">'
					+'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>'
					+'<h4 class="modal-title">Cambiar Estado</h4>'
				+'</div>'

				+'<div class="modal-body">'
					+'<div class="col-md-12  text-center">'
						+'<i class="fa fa-spinner fa-pulse fa-3x margin-bottom"></i>'
					+'</div>'
				+'</div>'
				+'<div class="modal-footer">'
					+'<button type="button"  onclick="guardar_estado(\''+id+'\')" class="btn btn-info" data-dismiss="modal">Guardar</button>'
				+'</div>'
			+'</div>'
		+'</div>'
	+'</div>').modal('show');

	var fn_succes_ce = function(data) {
		if (data.status == 1) {
			$("#modal_estado .modal-body").html('Actual<input class="form-control" readonly value="'+data.me+'"><hr><div id="result_error"></div>Nuevo Estado<select class="form-control" id="select_new_estado"></select>');

			var lst_opt = "";
			var lst_estados = data.info;
			for (var i = 0; i < lst_estados.length; i++) {
				lst_opt += '<option value="'+lst_estados[i]+'">'+lst_estados[i]+'</option>';
			};
			
			$("#modal_estado #select_new_estado").append(lst_opt);
		}else if(data.status == 0){

		}
	}

	var opciones = {
		funccion: fn_succes_ce,
		datos: {
			obtene_mi_estado:1,
			id:id,
		}
	};
	peticion_ajax(opciones);
}

function guardar_estado (id) {
	var fn_succes_gce = function(data) {
		if (data.status == 1) {
			$("#modal_estado #result_error").html('<div class="alert alert-success">Se cambio el estado</div>');
		}else if (data.status == 0) {
			$("#modal_estado #result_error").html('<div class="alert alert-danger">Error</div>');
		}
	}
	// 
	var std = $("#modal_estado #select_new_estado").val();

	var opciones = {
		funccion: fn_succes_gce,
		datos: {
			cambiar_estado:1,
			id:id,
			estado:std,
		}
	};
	peticion_ajax(opciones);
}