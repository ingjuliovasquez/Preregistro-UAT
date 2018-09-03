
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
                <h3 class="h2-responsive product-name" >
                  <strong>Bienvenidos a PRE-REGISTRO UAT</strong>
                </h3>
                <h6 class="h4-responsive" >
                  <span class="green-text">
                    <strong>Unidad de Orientación, Análisis y Resolución Inmediata</strong>
                  </span>
                
                </h6>
    
                <!--Accordion wrapper-->
                <div class="accordion" id="accordion" role="" aria-multiselectable="true">
    
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
                            <div class="card-body" style="color:white;">
                                La Fiscalía General del Estado de Veracruz, mediante su Unidad de Orientación, Atención y Resolución Inmediata, ofrece esta moderna plataforma para ayudarle en su orientación/asesoría o en el trámite de constancia de extravío .
                                    <br>
                                   
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
                                    Servicios  <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
    
                        <!-- Card body -->
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                            <div class="card-body" style="color:white;">
                                <stronge>1. Orientación/Asesoría </stronge>

                              <div class="card-body">
                                El servicio de Asesoría Jurídica se proporciona a las víctimas del delito y a la población que lo solicite, con el fin de orientar en las diversas gestiones o procedimientos jurídicos que requieran.<br>
                                <br>
                                <strong>Opciones para realizar el trámite</strong> <br>
                                Presencial
                                <br><br>
                                <strong>Información complementaria</strong> <br>
                                En caso de que la problemática no sea competencia de esta Unidad Administrativa, se canaliza a la instancia correspondiente.
                                <br><br>
                                <strong>Costo</strong> <br>
                                Gratuito.
                         
                              </div>

                                <stronge>2. Trámite de constancia de extravío</stronge>
                                <div class="card-body">
                                   
                                    Obtención de la Constancia de Hechos con la finalidad de hacer del conocimiento el extravío de documentos o para hacer valido algún seguro como es el caso de robo de celular, robo de autopartes o robo a repartidores en cuantías menores, sin prejuzgar la veracidad de los hechos asentados, es decir no se abrirá una línea de investigación. 
                                    <br><br>
                                    <strong>Costo</strong> <br>
                                    Gratuito.
                                    <br><br>
                                    <strong>Opciones para realizar el trámite </strong> <br>
                                    Presencial. 
                             
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
                    </div>
                    <!-- Accordion card -->
                    <div class="card">
    
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingFour">
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
                            <div class="card-header" role="tab" id="headingFive">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <h5 class="mb-0">
                                            Requisitos para solicitar acta de Hechos por extravío/robo <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                </a>
                            </div>
        
                            <!-- Card body -->
                            <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingfive" data-parent="#accordion">
                                <div class="card-body" style="color:white;">
                                    
                                    <table class="table table-bordered" style="color:white;">
                                        <thead>
                                        <tr><th>Documento/bien extraviado o robado</th><th>Requisitos (deberá presentar original y una fotocopia de cada documento anotado)</th></tr>
                                        </thead>
                                        <tbody>
                                        <tr><td>Pasaporte</td><td>Acta de nacimiento, identificación oficial.</td></tr>
                                        <tr><td>Credencial de trabajo/gafete</td><td>Nombramiento, oficio de acreditación como trabajador o credencial de trabajo, identificación oficial.</td></tr>
                                        <tr><td>Tarjeta de crédito/débito</td><td>Estado de cuenta, impresión de últimos movimientos, identificación oficial.</td></tr>
                                        <tr><td>Teléfono celular</td><td>Documento que contenga IMEI y descripción del teléfono, factura o nota de compra, identificación oficial. </td></tr>
                                        <tr><td>Equipo de trabajo(teléfonos celulares, tabletas electrónicas, radios de intercomunicación, etc.)</td><td>Documento de resguardo de equipo, identificación oficial. </td></tr>
                                        <tr><td>Permiso de tránsito para emplacamiento taxis</td><td>Factura del vehículo, concesión, tarjeta de circulación, identificación oficial. </td></tr>
                                        <tr><td>Factura de vehículo, motocicleta</td><td>Tarjeta de circulación, último pago de tenencia o derechos, identificación oficial. </td></tr>
                                        <tr><td>Tarjeta de circulación</td><td>Factura último pago de tenencia o derechos, identificación oficial.</td></tr>
                                        <tr><td>Placas de circulación</td><td>Factura último pago de tenencia o derechos, identificación oficial.</td></tr>
                                        <tr><td>Licencia de conducir estatal</td><td>Base de datos emitida por la dirección general de tránsito y vialidad, identificación oficial.</td></tr>
                                        <tr><td>Licencia de conducir federal</td><td>Datos de la licencia, identificación oficial.</td></tr>
                                        <tr><td>Otros documentos</td><td>Oficio dirigido al fiscal orientador en turno con la descripción del documento, identificación oficial.</td></tr>
                                        <tr><td>Certificado de alumbramiento</td><td>Deberá acudir la madre personalmente a realizar el trámite con identificación oficial y documento expedido por el hospital o lugar de atención medica-alta, nota de pago, identificación oficial.</td></tr>

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
		
				
	