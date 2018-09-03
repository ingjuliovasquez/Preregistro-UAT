<div class="row" >
	<!--nombre-->
	{{-- <div class="col-4">
		<div class="form-group">
			{!! Form::label('nombre1', 'Nombre', ['class' => 'col-form-label-sm','valid-tooltip']) !!}
			{!! Form::text('nombre1', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-ZÁÉÑÍÓÚ][\s]*){2,100}$','data-validation-ignore'=>'.', 'data-validation-error-msg'=>'Nombre invalido','required']) !!}
			<div class="help-block with-errors"></div> 
		</div>
	</div> --}}
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('nombres2', 'Nombre de la empresa', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('nombres2',null, ['class' => 'turnoempresa form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','data-validation'=>'required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('repLegal', 'Nombre del representante', ['class' => 'col-form-label-sm','valid-tooltip']) !!}
			{!! Form::text('repLegal', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','data-toggle="tooltip" data-placement="top" title="Ingrese nombre del asesor jurídico"','data-validation'=>'required']) !!}
			<div class="help-block with-errors"></div> 
		</div>
	</div>
	
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('primerAp2', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('primerAp2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido','data-validation'=>'required']) !!}
			<div class="help-block with-errors"></div>
		</div>
	</div>
	
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('segundoAp2', 'Segundo apellido', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('segundoAp2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el segundo apellido','data-validation'=>'custom','data-validation-optional'=>'true']) !!}
		</div>
	</div>


	<div class="col-4">
			<div class="form-group">
				{!! Form::label('fechaAltaEmpresa', 'Fecha de alta de la empresa', ['class' => 'col-form-label-sm']) !!}
				<input type="date" id="fechaAltaEmpresa" name="fechaAltaEmpresa" class="form-control form-control-sm " data-toggle="tooltip" data-placement="top" title="Ingrese la fecha de adscripción de la empresa ante el notario" required>
					{{-- {!! Form::text('fechaNacimiento', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechanac','data-validation'=>'birthdate', 'data-validation-format'=>'dd/mm/yyyy', 'data-validation'=>'required', 'placeholder' => 'DD/MM/AAAA']) !!} --}}
				<div class="help-block with-errors"></div>	
			</div>
		</div>
	
	<!--RFC-->
	<div class="col-4">
			<div class="form-group">
					<div class="row">
				<div class="col">
			{!! Form::label('rfc1', 'R.F.C.', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('rfc1', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el R.F.C.','data-validation'=>'required' ,'data-validation-length'=>'8','data-validation-error-msg'=>'RFC inválido' ,'data-toggle="tooltip" data-placement="top" title="El campo RFC se genera automáticamente. ¡Verifique si esta correcto!"','required']) !!}
				</div>
			<div class="col">
					{!! Form::label('homo1', 'Homoclave', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('homo1', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la homoclave','data-validation'=>'required' ,'data-validation-length'=>'8','data-validation-error-msg'=>'RFC inválido' ,'data-toggle="tooltip" data-placement="top" title="El campo HOMO clave se genera automáticamente. ¡verifique si esta correcto!"','required']) !!}
			</div>
		</div>
	</div>
	</div>
	<!--Representante legal-->
	{{-- <div class="col-4">
		<div class="form-group">
			{!! Form::label('repLegal', 'Representante legal', ['class' => 'col-form-label-sm','valid-tooltip']) !!}
			{!! Form::text('repLegal', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','data-validation'=>'required','required','data-validation-length'=>'4']) !!}
			<div class="help-block with-errors"></div> 
		</div>
	</div> --}}
	{{--  telefono  --}}
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('telefono1', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('telefono1', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono', 'data-validation'=>'number']) !!}
			<div class="help-block with-errors"></div>
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idEstado', 'Entidad federativa', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstado', $estados, 30, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa','data-validation'=>'required','required']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idMunicipio', 'Municipio', ['class' => 'col-form-label-sm']) !!}
			@if(isset($form['catMunicipios'], $form['idMunicipio']))
			{!! Form::select('idMunicipio', $form['catMunicipios'], $form['idMunicipio'], ['class' => 'form-control form-control-sm','data-validation'=>'required','required']) !!}
			@else
			{!! Form::select('idMunicipio',$municipios, null, ['class' => 'form-control form-control-sm','placeholder' => 'Seleccione un municipio','data-validation'=>'required','required']) !!}
			@endif
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idLocalidad', 'Localidad', ['class' => 'col-form-label-sm']) !!}
			@if(isset($form['catLocalidades'],$form['idLocalidad']))
			{!! Form::select('idLocalidad', $form['catLocalidades'], $form['idLocalidad'], ['class' => 'form-control form-control-sm','data-validation'=>'required','required']) !!}
			@else
			{!! Form::select('idLocalidad', [ '' => 'Seleccione una localidad'], null, ['class' => 'form-control form-control-sm','data-validation'=>'required','required']) !!}
			@endif
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('idColonia', 'Colonia', ['class' => 'col-form-label-sm']) !!}
			@if(isset($form['catColonias'],$form['idColonia']))
			{!! Form::select('idColonia', $form['catColonias'], $form['idColonia'], ['class' => 'form-control form-control-sm', 'data-validation'=>'required','required']) !!}
			@else
			{!! Form::select('idColonia', ['' => 'Colonia'], null, ['class' => 'form-control form-control-sm', 'data-validation'=>'required','required']) !!}
			@endif
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('cp', 'Código postal', ['class' => 'col-form-label-sm']) !!}
			@if(isset($form['catCodigoPostal'],$form['cp']))
			{!! Form::select('cp', $form['catCodigoPostal'], $form['cp'], ['class' => 'form-control form-control-sm','data-validation'=>'required','required']) !!}
			@else
			{!! Form::select('cp', ['' => 'Seleccione un CP'], null, ['class' => 'form-control form-control-sm','data-validation'=>'required','required']) !!}
			@endif
		</div>
	</div>
	<div class="col-4">
        <div class="form-group">
            {!! Form::label('calle1', 'Calle', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('calle1', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la calle', 'data-validation'=>'required','required']) !!}
        </div>
    </div>
    <div class="col-2">
        <div class="form-group">
            {!! Form::label('numExterno1', 'Número exterior', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('numExterno1', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el n. Exterior', 'data-validation'=>'required','required']) !!}
        </div>
    </div>
    <div class="col-2">
        <div class="form-group">
            {!! Form::label('numInterno1', 'Número interior', ['class' => 'col-form-label-sm']) !!}
            {!! Form::text('numInterno1', 'S/N', ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el n. Interior', 'data-validation'=>'custom','data-validation-optional'=>'true']) !!}
        </div>
	</div>


	<div class="col-4">
			<div class="form-group">
				{!! Form::label('docIdentificacionEmpresa', 'Documento de identificación', ['class' => 'col-form-label-sm']) !!}
				{!! Form::select('docIdentificacionEmpresa',$identificaciones, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el docto. de identificación','data-validation'=>'required']) !!}
				<div class="help-block with-errors"></div>
			</div>
		</div>
	
		<div class="col-4">
			<div class="form-group">
				{!! Form::label('numDocIdentificacionEmpresa', 'Núm. de documento de identificación', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('numDocIdentificacionEmpresa', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el núm. del docto. de identificación','data-validation-optional'=>'true']) !!}
				<div class="help-block with-errors"></div>
			</div>
		</div>


	<div class="col-4">
		<div class="form-group">
			{!! Form::label('correo', 'Correo', ['class' => 'col-form-label-sm']) !!}
			{!! Form::email('correo', null, ['class' => 'form-control form-control-sm emailc', 'placeholder' => 'Si desea recibir su folio por email','data-validation'=>'custom','data-validation-optional'=>'true','data-validation'=>'email','data-validation-error-msg'=>'Proporcione un correo válido. Ejemplo: algo@gmail.com','data-toggle="tooltip" data-placement="top" title="Se recomienda ingresar una cuenta de correo para que reciba su número de folio, el cual se le solicitara al momento de presentarse en alguna de las Unidades de Atención Temprana."']) !!}
		</div>
	</div>
	<div class="col-4">
		<div class="form-group">
			{!! Form::label('idRazon1', 'Razón', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idRazon1', $razones, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una razón', 'data-validation'=>'required','required']) !!}
		</div>
	</div>
		
	<!--solo si es solicitud de hechos-->
	<div class="col-4 shows">
		<div class="form-group" >
				{!! Form::label('tipoActaEmpresa', 'Tipo de constancia de extravío que requiere', ['class' => 'col-form-label-sm']) !!}
				{!! Form::select('tipoActaEmpresa', array('PASAPORTE' => 'PASAPORTE', 
				'CARTERA' => 'CARTERA' , 
				'CREDENCIAL DE TRABAJO/GAFFETE'=>'CREDENCIAL DE TRABAJO/GAFFETE',
				'TARJETA DE CRÉDITO/DÉBITO'=>'TARJETA DE CRÉDITO/DÉBITO'     ,
				'TELEFONO CELULAR'=>'TELEFONO CELULAR', 
				'EQUIPO DE TRABAJO(CELULARES,RADIOS,ETC)'=> 'EQUIPO DE TRABAJO(CELULARES,RADIOS,ETC)',
				'PERMISO DE TRANSITO PARA EMPLACAMIENTO DE TAXIS'=> 'PERMISO DE TRANSITO PARA EMPLACAMIENTO DE TAXIS',
				'FACTURA DE VEHÍCULO/MOTOCICLETA'  => 'FACTURA DE VEHÍCULO/MOTOCICLETA',
				'TARJETA DE CIRCULACION' =>  'TARJETA DE CIRCULACION' ,
				'PLACAS DE CIRCULACIÓN' => 'PLACAS DE CIRCULACIÓN',
				'LICENCIA DE CONDUCIR ESTATAL' => 'LICENCIA DE CONDUCIR ESTATAL',
				'LICENCIA DE CONDUCIR FEDERAL' => 'LICENCIA DE CONDUCIR FEDERAL' ,
				'DOCUMENTO/BIEN EXTRAVIADO O ROBADO' => 'DOCUMENTO/BIEN EXTRAVIADO O ROBADO',
				'CERTIFICADO DE ALUMBRAMIENTO' => 'CERTIFICADO DE ALUMBRAMIENTO' ,
				'OTRO DOCUMENTO' => 'OTRO DOCUMENTO'), null, ['class' => 'form-control form-control-sm','data-validation'=>'required']) !!}
		</div>
	</div>

<div class="col-4 tipActa">
		<div class="form-group">
			{!! Form::label('otroEmpresa', 'Especifique', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('otroEmpresa', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Especifique','data-validation-error-msg'=>'Campo requerido', 'data-validation'=>'required']) !!}
			<div class="help-block with-errors"></div>
		</div>
</div>
</div>


