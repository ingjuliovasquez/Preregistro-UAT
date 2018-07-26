$("#nombres2").focusout(function() {
	obtenerRFC();
});

$("#fechaAltaEmpresa").change(function() {
	obtenerRFC();
});

$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

function obtenerRFC(){
	toastr.clear();

	console.log('entra ajax');

	nombre = $("#nombres2").val();
	fecha = $("#fechaAltaEmpresa").val();
		
	
    dia = fecha.substr(8, 2);
    mes = fecha.substr(5, 2);
    ano = fecha.substr(2, 2);
    
	// dia = fecha.substr(0, 2);
	// mes = fecha.substr(3, 2);
	// ano = fecha.substr(8, 2);

	console.log(fecha);
	console.log(dia);
	console.log(mes);
	console.log(ano);

	ruta= route('rfc.moral');
	$.ajax({
		type: "POST",
		url:ruta,
		data: {nombre,dia,mes,ano},
		dataType:"json",
		success: function(data){

			rfc=data.res;
			console.log(rfc);
			rfcOriginal=rfc;
			var array= rfc.split("");
			var rfcSH=[];
			var homoC=[];

			array.forEach( function(valor, indice, array) {
				if(indice<9){
					rfcSH.push(valor);
				} if(indice>=9){
					homoC.push(valor);
				}
			});

			rfc=rfcSH.join("");
            homo=homoC.join("");
            $("#rfc2").val(rfc);
            $("#homo2").val(homo);

			// if($("#rfc1").val() == "" || $("#homo1").val() == ""){
			// 	if($("#fechaAltaEmpresa").val() != "" ){
					
			// 			// $('#rfcAux').val(rfcOriginal);
			// 	//	toastr.success('Se ha modificado el RFC', '¡Atención!');
			// 		}
			// }else{
			// 	if($("#rfc1").val() != rfc || $("#homo1").val() != homo){
			// 		toastr.options ={
			// 			"closeButton": true,
			// 			"newestOnTop": true,
			// 			"preventDuplicates": true,
			// 			"timeOut": 0,
	  		// 			"extendedTimeOut": 10000,
	  		// 			"positionClass": "toast-bottom-right",
			// 		}
			// 		toastr.info('Se ha detectado un cambio ¿Desea actualizar el RFC?<br /><button type="button" id="btn-ok" class="btn btn-light" onclick="actualizarMoral(rfcOriginal, rfc, homo)">Sí</button>');
			// 	}
				
			// }

	 	},error:function(data){
	 		// console.log(data);
	 	}
 	});
}
    // function actualizarMoral(rfcOriginal, rfc, homo){
    // 	$("#rfc2").val(rfc);
    // 	$("#homo2").val(homo);
    // 	$('#rfcAux').val(rfcOriginal);
    // 	toastr.options = {
    // 		"closeButton": true,
    // 		"debug": false,
    // 		"newestOnTop": true,
    // 		"progressBar": true,
    // 		"positionClass": "toast-bottom-right",
    // 		"preventDuplicates": true,
    // 		"onclick": null,
    // 		"showDuration": "300",
    // 		"hideDuration": "1000",
    // 		"timeOut": "3000",
    // 		"extendedTimeOut": "1000",
    // 		"showEasing": "swing",
    // 		"hideEasing": "linear",
    // 		"showMethod": "fadeIn",
    // 		"hideMethod": "fadeOut"
    // 	}
    // 	toastr.success('Se ha modificado el RFC', '¡Atención!');
    // }

