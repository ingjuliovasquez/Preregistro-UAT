
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

	body{
	background-color: #E1E2E1;
	font-family: 'neosanspro-regular';
  	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

	#collapseOne{
		margin-bottom:0px;
		background-color: #424242;
	}
	#headingOne{
		background-color: #424242;
	}	
	#collapseTwo{
		margin-bottom:0px;
		background-color: #424242;
	}
	#headingTwo{
		background-color: #424242;
	}	
	#collapseThree{
		margin-bottom:0px;
		background-color: #424242;
	}
	#headingThree{
		background-color: #424242;
	}	
	#collapseFour{
		margin-bottom:0px;
		background-color: #424242;
	}
	#headingFour{
		margin-bottom:0px;
		background-color: #424242;
	}	
	#collapseFive{
		margin-bottom:0px;
		background-color: #424242;
	}
	#headingFive{
		margin-bottom:0px;
		background-color: #424242;
	}	
	
    .body {
	   width: 100%;
	   /* height:100vh; */
       background: red;
	    position:absolute ;
	    top: 0;
	   left: 0; 
	    display: flex;  
}
		.modal-body {
	   /* width: 100%; */
	   /* height:100vh; */
	   background-color: #1b1b1b;
       /* background: rgba(0, 0, 0,0.8); */
	    position:absolute ;
	    top: 0;
	   left: 0; 
	    display: flex;  

}

.mb-0{
	color: #ffffff;
}
.h2-responsive{
	color: #ffffff;
}
.h4-responsive{
	color: #ffffff;
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
				 </div>
					<div class="text-xs-center">
						<br>
						<div class="g-recaptcha" id="recaptcha" required data-toggle="tooltip" data-placement="right" title="Debe seleccionar el campo no soy un robot" data-sitekey="6LetiWkUAAAAALWahmssFmAqYKMLdZvKHiCGE2kz"></div>
						{{-- <div class="g-recaptcha" data-sitekey="{{ env("6Ld1x2gUAAAAAC7oBRctVblxzQsQ99ucG09R3gAR") }}"></div> --}}
					</div>
					<div class="text-xs-center">
							<br>
					<input type="checkbox" id="c1" name="terms" required value="1">
                    <label for="c1"><span class="thrv-inline-text" data-css="tve-u-165b45ca8792212">Acepto y he leido la <a href="http://fiscaliaveracruz.gob.mx:2021/WEB%20FGE/Avisos%20De%20Privacidad%20Integrales%20Fge%202017/AI-51-DTRANSP-ASESORIAS.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="Debe seleccionar el campo de aceptar las políticas de privacidad">Política de Privacidad </a></span></label>
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
								{!!Form::submit('Guardar',array('class' => 'btn btn-primary ', 'id'=>'guardar','data-toggle="tooltip" data-placement="right" title="Para crear el registro debe seleccionar el campo no soy un robot y el campo de aceptar las políticas de privacidad."' ))!!} <i id="icon" class="fa fa-spinner fa-spin text-white" style="display: none"></i>
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

		//funcionalidad persona tipo acta, contancia de extravio y especifique
		$(".showPer").hide();
			$(".otross").hide();

			$("#idRazon2").change(function(){												
				if($("#idRazon2").val()==4){									
					$(".showPer").show();					
					if($( "#tipoActa").val() =="OTRO DOCUMENTO"){						
						$(".otross").show();
					}										            
				}
				else if($("#idRazon2").val()==2){					
					$(".showPer").hide();
					$(".otross").hide();
				}else{
					$(".showPer").hide();
					$(".otross").hide();
				}
			});

			$("#tipoActa").change(function(){									
				if($("#tipoActa").val()=="OTRO DOCUMENTO"){					
					$(".otross").show();
				}else{
					$(".otross").hide();
				}
			});
			//fin persona

			//funcionalidad empresa tipo acta, contancia de extravio y especifique
			$(".shows").hide();
			$(".tipActa").hide();

			$("#idRazon1").change(function(){												
				if($("#idRazon1").val()==4){									
					$(".shows").show();	
					if($("#tipoActaEmpresa").val()=="OTRO DOCUMENTO"){						
						$(".tipActa").show();
				}									            
				}
				else if($("#idRazon1").val()==2){					
					$(".shows").hide();
					$(".tipActa").hide();
				}else{
					$(".shows").hide();
					$(".tipActa").hide();
				}
			});

			$("#tipoActaEmpresa").change(function(){									
				if($("#tipoActaEmpresa").val()=="OTRO DOCUMENTO"){
					$(".tipActa").show();
				}else{
					$(".tipActa").hide();
				}
			});
			//fin empresa


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
	});


});

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