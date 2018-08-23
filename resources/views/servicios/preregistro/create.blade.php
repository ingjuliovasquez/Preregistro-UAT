
<style type="text/css">
	.loadPage{
		display: block;
		background: #333;
		color: white;
		width: 100%;
		height:100%;
		position: fixed;
		top: 0;
		left: 0;
		z-index: 1000;
		
	}
		
    .modal-body {
	   width: 100%;
	   height:100vh;
       background: rgba(0, 0, 0,0.5);
	   position:absolute ;
	   top: 0;
	   left: 0; 
	    display: flex; 

	   
	   /* visibility: hidden;
	   opacity: 0; */

}


		.oculto{
			display: none;
		}
		.logo{
		position:fixed;
		}
		p {
		font-family: "Arial", serif;
		}
		/* estilo para el re captcha */
		.text-xs-center {
        text-align: center;
    }

    .g-recaptcha {
        display: inline-block;
    }
		
	</style>
	
@extends('servicios.preregistro.templates.form2')

@section('content')
@if ($errors->any())
	<div class="alert alert-danger">
		@php
		// $form = oldForm();
		@endphp
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

	

{!!Form::open(['route' => 'preregistro.store', 'id'=>'form.registro'])!!}

<br>
	<p class="lead" align="center">
		PRE-REGISTRO
	</p>
	<div id="pantalla" class="oculto" >
		<div style="font-size: 30px;text-align: center;margin-top:300px; display:block;margin-bottom: auto;">
			<p>
				<img width="100px" height="100px" src="{{asset('img/Cargando.gif')}}" > 
				<br>
				Espere un momento
			</p>
		</div>	
	</div>
	<div>
		@include('servicios.preregistro.fields.tipo-persona')
	</div>
	<div class="card" id="datosPer">
		<div class="card-header lead" align="center">
				Datos personales
		</div>
		<div id="collapsePersonales1">
			<div class="boxtwo">
				<div class="col">
					@include('servicios.preregistro.fields.datos-personales')
				</div>
			</div>
		</div>

		<div id="collapsePersonales2">
			<div class="boxtwo">
				<div class="col">
					@include('servicios.preregistro.fields.datos-empresa')
				</div>
			</div>
		</div>
	</div>	

	<div class="card" id="datosPer">
		<div class="form-group">
			<div class="col-12">
				<div class="col" id="divNarracion">
					<label for="narracion" class="col-form-label-sm">Narración</label>
					{{-- @if(isset($form['narracion']))
						{{ Form::textarea('narracion', $form['narracion'], ['class' => 'form-control form-control-sm', 'size' => '30x10', 'data-validation'=>'length', 'data-validation-length'=>'20-5000' ,'required']) }}
					@else --}}
					{{ Form::textarea('narracion', old('narracion'), ['class' => 'form-control form-control-sm', 'size' => '30x10', 'data-validation'=>'length', 'data-validation-length'=>'20-5000','required']) }}
					{{-- @endif --}}
					<div class="text-xs-center">
						<br>
						<div class="g-recaptcha" id="recaptcha" required data-toggle="tooltip" data-placement="right" title="debe seleccionar el campo captcha!" data-sitekey="6LetiWkUAAAAALWahmssFmAqYKMLdZvKHiCGE2kz"></div>
						{{-- <div class="g-recaptcha" data-sitekey="{{ env("6Ld1x2gUAAAAAC7oBRctVblxzQsQ99ucG09R3gAR") }}"></div> --}}
					</div>
					<div class="text-xs-center">
							<br>
					<input type="checkbox" id="c1" name="terms" required value="1">
                    <label for="c1"><span class="thrv-inline-text" data-css="tve-u-165b45ca8792212">Acepto y he leido la <a href="http://fiscaliaveracruz.gob.mx:2021/WEB%20FGE/Avisos%20De%20Privacidad%20Integrales%20Fge%202017/AI-51-DTRANSP-ASESORIAS.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="debe seleccionar  aceptar!">Política de Privacidad </a></span></label>
				    </div>
				</div>
			</div>
			<div class="boxtwo">
				<div class="row">
					
					<div class="col">   
						<div class="text-center">
							<br>
								<a href="http://fiscaliaveracruz.gob.mx/"id="btnCancel" class="btn btn-primary">Cancelar</a>
								{{-- <button  type="submit" id="guardar" class="btn  btn-primary"><i id="icon" class="fa fa-spinner fa-spin text-white" style="display: none"></i> Guardar</button> --}}
								{{-- <button  type="button" id="guardar1"  class="btn  btn-primary"><i id="icon2" class="fa fa-spinner fa-spin text-white" style="display: none"></i> Guardar</button> --}}
								{!!Form::submit('Guardar',array('class' => 'btn btn-primary ', 'id'=>'guardar' ))!!} <i id="icon" class="fa fa-spinner fa-spin text-white" style="display: none"></i>
								{{-- {!!Form::submit('Prueba',array('class' => 'btn btn-primary ', 'id'=>'prueba'))  'id'=>'cargando'!!} --}}
								{{-- <button id="prueba" type="button" class="btn btn-primary">prueba</button> --}}
							<br>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	

	</div>
 {!!Form::close()!!}
@endsection

@push('scripts')

	<script src="{{asset('js/preregistro.js')}}"></script> 
	<script src="{{ asset('js/curp.js') }}"></script> 
	<script src="{{ asset('js/rfcFisico.js') }}"></script>
	<script src="{{ asset('js/rfcMoral.js') }}"></script>
	<script src="{{ asset('js/validar-pre.js') }}"></script>
	<script src="{{ asset('js/jquery.disableAutoFill.min.js')}}" ></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
	{{-- <script src="{{ asset('js/rfcMoral.js') }}"></script> --}}
	<script>

			$("#curp").change(function() {
				toastr.info("C.U.R.P modificado", "", {
					"closeButton": true,
					"debug": false,
					"newestOnTop": false,
					"progressBar": true,
					"positionClass": "toast-top-right",
					"preventDuplicates": true,
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "3000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
        	});
		});



	</script>
<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
		});
		</script>


<script>
$(document).ready(function(){
  $('#modalQuickView').modal('show')
});


</script>

	<script>
			
	
$(document).ready(function(){

	$('#guardar1').click(function (e) {
    	// Si deseas seguir haciendo el submit, ignora la siguiente línea

		$('#guardar1').prop('disabled', true);
		$('#icon2').show();
		// $("form.registro").submit();
		// $('#form.registro').submit(function (e, params) {
			// $('#icon').show();
			var localParams = $('#form.registro').params || {};
	
			if (!localParams.send) {
				e.preventDefault();
	
			}

		// });
		console.log("Golaksd");
	});
});
// 	$('#form.registro').submit(function (e, params) {
// 		   // $('#icon').show();
// 		   var localParams = params || {};
   
// 		   if (!localParams.send) {
// 			   e.preventDefault();
   
// 		   }
   
// 	   swal({
// 				   title: "Confirmación de guardado",
// 				   text: "¿Seguro que los datos son correctos?",
// 				   type: "info",
// 				   showCancelButton: true,
// 				   confirmButtonText: "Si",
// 				   confirmButtonColor:"#424242",
// 				   cancelButtonText: "No",
// 				   closeOnConfirm: true
// 			   }, function (isContinuar) {
// 				   if (isContinuar) {
// 					   $('#icon').show();
// 					   $('#guardar').attr('disabled','true');
// 					   $('#btnCancel').attr('disabled','true');
// 					   $('#btnCancel').removeAttr('href');
// 					   $(e.currentTarget).trigger(e.type, { 'send': true });
// 				   } else {              
// 					   $('#icon').hide();
// 					   $('#guardar').removeAttr('disabled');
// 					   $('#btnCancel').attr('href','{{url('/solicitudes')}}');
// 			   }
// 		   });
//    });
   </script>

<script>
   $(function() {
	$('#form.registro').submit(function (event) { 
		var verified = grecaptcha.getResponse();
		if (verified.lenght === 0){
            event.preventDefault();
		} 
   });

});


 </script>
		
@endpush