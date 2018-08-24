
		<div class="col-md-4 mb-3">
		<label class="col-form-labe "  for="formGroupExampleInput" >Tipo de persona</label>
		<div class="clearfix"></div>
		<div class="form-check form-check-inline">
			<label class="form-check-label">
				{{-- @if(isset($form['esEmpresa1']))
				<input class="form-check-input" type="radio" id="esEmpresa1" name="esEmpresa" value="1" {{$form['esEmpresa1']}}> Persona moral
				@else --}}
				<input class="form-check-input" type="radio" id="esEmpresa1" name="esEmpresa" value="1"> Persona moral
				{{-- @endif --}}
			</label>
		</div>
		<div class="form-check form-check-inline">
			<label class="form-check-label">
				{{-- @if(isset($form['esEmpresa2']))
				<input class="form-check-input" type="radio" id="esEmpresa2" name="esEmpresa" value="0" {{$form['esEmpresa2']}}> Persona física
				@else --}}
				<input class="form-check-input" type="radio" id="esEmpresa2" name="esEmpresa" value="0"> Persona física
				{{-- @endif --}}
			</label>
			
		</div>

		{{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-placement="right" data-target="#myModal">Open Modal</button> --}}
		
		
		

				{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> --}}
	<!-- Central Modal Medium Success -->
 
	 {{-- <div class="modal fade Scrolling long content"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
				<h4 class="modal-title w-100" id="myModalLabel">Bienvenidos a PRE-REGISTRO UAT</h4>
				<strong> Estimado Ciudadano: <strong>  <br>
La Fiscalía General del Estado de veracruz, mediante su Unidad de Orientación, Atención y Resolución Inmediata, ofrece esta moderna plataforma para ayudarle en su orientacion/asesoria	o en el tramite de constncia de extravio.
<br>
Es importante que leas detenidamente la lista de los delitos que presentamos a continuación, si el hecho que deseas denunciar no se encuentra listado, será necesario acudir directamente a alguna de nuestras Agencias del Ministerio Público a realizar la denuncia correspondiente, ya que por este medio no podrá ser atendida.
Delitos que puedes denunciar por este medio:
<ul>
	<li>
Abuso de confianza
Acoso sexual
Allanamiento de morada
Amenazas
Ataques al pudor
Daño en propiedad ajena
Delitos Electorales
Despojo sin violencia
Discriminación
Estupro
Fraude
Hostigamiento
Lesiones
Lesiones que no ponen en peligro la vida
Robo a casa habitación sin violencia
Robo a comercio sin violencia
Robo de vehículo estacionado
Robo sin violencia
Violación
Violación por el cónyuge
Violencia familiar
Violencia familiar equiparada
</li>
</ul>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				  </div>
		</div>
		
	  </div>
	</div>  --}}
	

	
			
	{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalQuickView">Launch modal</button> --}}
<!-- Modal: modalQuickView -->
<div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-5">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://rawcdn.githack.com/Romaincks/assets/master/img/logo-fge-svg.svg" alt="First slide">
                    </div>
                    {{-- <div class="carousel-item">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(24).jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(25).jpg" alt="Third slide">
                    </div> --}}
                </div>
                <!--/.Slides-->
                <!--Controls-->
                {{-- <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> --}}
                <!--/.Controls-->
                {{-- <ol class="carousel-indicators">
                    <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(23).jpg" class="img-fluid"></li>
                    <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(24).jpg" class="img-fluid"></li>
                    <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(25).jpg" class="img-fluid"></li>
                </ol> --}}
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-lg-7">
            <h2 class="h2-responsive product-name">
              <strong>Bienvenidos a PRE-REGISTRO UAT</strong>
            </h2>
            <h6 class="h4-responsive">
              <span class="green-text">
                <strong>Unidad de Orientación, Analisis y Resolución Inmediata</strong>
              </span>
            
            </h6>

            <!--Accordion wrapper-->
            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0">
									Estimado Ciudadano <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                        <div class="card-body">
								La Fiscalía General del Estado de veracruz, mediante su Unidad de Orientación, Atención y Resolución Inmediata, ofrece esta moderna plataforma para ayudarle en su orientacion/asesoria	o en el tramite de constncia de extravio.
								<br>
								{{-- Es importante que leas detenidamente la lista de los delitos que presentamos a continuación, si el hecho que deseas denunciar no se encuentra listado, será necesario acudir directamente a alguna de nuestras Agencias del Ministerio Público a realizar la denuncia correspondiente, ya que por este medio no podrá ser atendida. --}}
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h5 class="mb-0">
                                servicios  <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                        <div class="card-body">
                            {{-- <option value="1">orientacion/asesoria</option> --}}
                            <div class="card-body">
                                    <strong>orientacion/asesoria</strong><br>
                                El servicio de Asesoría Jurídica se proporciona a las víctimas del delito y a la población que lo solicite, con el fin de orientar en las diversas gestiones o procedimientos jurídicos que requieran.<br>
                                <br>
                                <strong>Opciones para realizar el trámite</strong> <br>
                                presencial
                                <br>
                                <strong>Información complementaria</strong> <br>
                                En caso de que la problemática no sea competencia de esta Unidad Administrativa, se canaliza a la instancia correspondiente mediante oficio.
                                <br>
                                <strong>Costo</strong> <br>
                                Gratuito.
                         
                            </div>
                            {{-- <option value="2">tramite de constancia de extravio</option> --}}
                           
                                    <div class="card-body">
                                        <strong>Constancia de Hechos por Extravío</strong> <br>
                                        Obtención de la Constancia de Hechos con la finalidad de hacer del conocimiento el extravío de documentos, o para hacer valido algún seguro como es el caso de robo de celular, robo de autopartes o robo a repartidores en cuantías menores, sin prejuzgar la veracidad de los hechos asentados, es decir no se abrirá una línea de investigación. 
                                        <br>
                                        <strong>Costo</strong> <br>
                                        Gratuito.
                                        <br>
                                        <strong>Opciones para realizar el trámite </strong> <br>
                                        Presencial. 
                                 
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                {{-- <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h5 class="mb-0">
                                Asesoría Jurídica <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            El servicio de Asesoría Jurídica se proporciona a las víctimas del delito y a la población que lo solicite, con el fin de orientar en las diversas gestiones o procedimientos jurídicos que requieran.<br>
							<br>
                            <strong>Opciones para realizar el trámite</strong> <br>
                            presencial
                            <br>
                            <strong>Información complementaria</strong> <br>
                            En caso de que la problemática no sea competencia de esta Unidad Administrativa, se canaliza a la instancia correspondiente mediante oficio.
                            <br>
                            <strong>Costo</strong> <br>
                            Gratuito.
                     
                        </div>
                    </div>
                </div> --}}
                <!-- Accordion card -->
                {{-- <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="heading">
                        <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h5 class="mb-0">
                                Constancia de Hechos por Extravío <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion">
                        <div class="card-body">
                            <strong>Descripción del Trámite</strong> <br>
                            Obtención de la Constancia de Hechos con la finalidad de hacer del conocimiento el extravío de documentos, o para hacer valido algún seguro como es el caso de robo de celular, robo de autopartes o robo a repartidores en cuantías menores, sin prejuzgar la veracidad de los hechos asentados, es decir no se abrirá una línea de investigación. 
                            <br>
                            <strong>Costo</strong> <br>
							Gratuito.
                            <br>
                            <strong>Opciones para realizar el trámite </strong> <br>
                            Presencial. 
                     
                        </div>
                    </div>
				</div> --}}
				 <!-- Accordion card -->
				 <div class="card">

						<!-- Card header -->
						<div class="card-header" role="tab" id="heading">
							<a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								<h5 class="mb-0">
										Requisitos para solicitar acta de Hechos por extravío/robo <i class="fa fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>
	
						<!-- Card body -->
						<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingfive" data-parent="#accordion">
							<div class="card-body">
								
								<table class="table table-bordered">
                                    <thead>
                                    <tr><th>documento/bien extraviado o robado</th><th>Requisitos (debera presentar original y una fotocopia de cada documento anotado )</th></tr>
                                    </thead>
                                    <tbody>
                                    <tr><td>psaporte</td><td>acta de nacimiento, identificacion oficial</td></tr>
                                    <tr><td>Credencial de trabajo/gaffete</td><td>nombramiento,oficio de acreditacion como trabajador o credencial de trabajo,identificacion oficial</td></tr>
                                    <tr><td>tarjeta de credito/debito</td><td>estado de cuenta,impresion de ultimos movimientos,identificacion oficial</td></tr>
                                    <tr><td>Telefono celular</td><td>documento que contenga imei y descripcion del telefono, factura o nota de compra, identificacion oficial </td></tr>
                                    <tr><td>equipo de trabajo(telefonos celulares,tabletas electronicas,rdios de intercomunicacion,etc)</td><td>documento de resguardo de equipo, identificacion oficial </td></tr>
                                    <tr><td>permiso de transito para emplacamiento taxis</td><td>factura del vehiculo, consesion, tarjeta de circulacion, identificacion oficial </td></tr>
                                    <tr><td>factura de vehiculo,motocicleta</td><td>tarjeta de circulacion, ultimo pago de tenencia o derechos, identificacion oficial </td></tr>
                                    <tr><td>tarjeta de circulacion</td><td>fctura ultimo pago de tenencia o derechos</td></tr>
                                    <tr><td>placas de circulacion</td><td>fctura ultimo pago de tenencia o derechos</td></tr>
                                    <tr><td>licencia de conducir estatal</td><td>base de datos emitida por la direccion general de transito y vialidad</td></tr>
                                    <tr><td>licencia de conducir federal</td><td>datos de la licencia</td></tr>
                                    <tr><td>otros documentos</td><td>oficio dirigido al fiscal orientador en turno con la descripcion del documento</td></tr>
                                    <tr><td>Certificado de alumbramiento</td><td>debera acudir la madre personalmente a realiar el tramite con identificacion oficial y documento expedido por el hospital o lugar de atencion medica-alta, nota de pago</td></tr>
                                    </tbody>
                                    </table>
								
						 
							</div>
						</div>
					</div>
            </div>
            <!--/.Accordion wrapper-->

            <!-- Add to Cart -->
            {{-- <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="md-form">
                    <select class="mdb-select colorful-select dropdown-primary">
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">White</option>
                      <option value="2">Black</option>
                      <option value="3">Pink</option>
                    </select>
                    <label>Select color</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="md-form">
                    <select class="mdb-select colorful-select dropdown-primary">
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">XS</option>
                      <option value="2">S</option>
                      <option value="3">L</option>
                    </select>
                    <label>Select size</label>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="text-center">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary">Add to cart
                  <i class="fa fa-cart-plus ml-2" aria-hidden="true"></i>
                </button>
              </div> --}}
            </div>
            <!-- /.Add to Cart -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalQuickView -->
		
				
	