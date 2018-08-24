<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro</title>
        <link rel="icon" href="{{ asset('img/FGE-icon3.png') }}">
        {{-- <link rel="stylesheet" href="{{asset('css/cssfonts.css')}} "> --}}
        {!! Html::style('assets/css/cssfonts.css') !!}
        <style> 
            *{
                font-family: 'neosanspro-regular';
            }
            label {
                font-size: 11px;
            }
            .folio{
                font-size: 24pt;
            }
            .item {
                display:block;
                width: 150px;
                height:150px;
            }
            
            .bordediv{
                border: #424242 solid;
            }

            .fondotitulo{
                width: 100%;
                background: #424242;
                color: white;
            }
            .fondoheader{
                background: rgb(230, 230, 230);
            }
            /* .izquierda{
                margin-top: 15px;
                margin-left: 75px;
                font-size: 14px;
            }

            .nombre{
                margin-top: 15px;
                background: #767676; color: #ffffff; margin-top: 18px; width: 730px; height:40px;
                font-size: 14px;
            }

            .folio{
                text-align: center;
                font-size: 14px;
                margin-top: 12px;
            }
            
            .nom{
                float: left;
                margin-top: -36px;   
            
                font-size: 14px;
                color: white;
            }

            .nota{
                text-align:left;
                font-size: 8px;
                margin-left: 560px;

            } */
        </style>
    </head>
    <body>
        <div class="bordediv">
            <table class="fondotitulo">
                <tbody>
                    <tr>
                        <td rowspan="2" style="text-align:center;">
                            <img src="{{ asset('img/logolight.png') }}" class="item">
                        </td>
                        <td colspan="2" >
                            Sistema de Unidad de Ateción Temprana SUAT
                         </td>
                    </tr>
                    <tr>
                        {{-- <td colspan="2" >
                            Aquí colocar una breve instrucción de ¿qué hacer con éste documento? asu fhqeifjiaeufeijwfai ewbfpwebfpab ewflakjwebnf ksjewbfakjewfb alkwejbfalkwebfalkewfb alkejfbakewb jfalwkejfbaef 
                        </td> --}}
                        <td colspan="2" >
                             
                            Presentar este documento o en su defecto el folio en una la unidad correspondiente para la orientación y/o asesoria sobre un asunto
                        </td>
                    </tr>
                </tbody>
            </table>
            <table style="width: 100%;">
                <thead class="fondoheader">
                    <tr class="fondoheader">
                        <th class="fondoheader">DESCRIPCIÓN</th>
                        <th class="fondoheader">CÓDIGO DE REGISTRO</th>
                        <th class="fondoheader">CÓDIGO QR</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($DatosRegistros->esEmpresa==1)
                    <tr>
                        <td>Nombre de la Empresa:{{$DatosRegistros->nombre}}</td>
                        <td rowspan="4" class="folio">{{ $DatosRegistros->folio}}</td>
                        <td rowspan="4"><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->margin(0)->size(150)->generate(url('FormatoRegistro/'.$DatosRegistros->id))) !!}"></td>
                        {{-- <td>{!! QrCode::format('png')->margin(0)->size(100)->generate(url('/')) !!}</td> --}}
                    </tr>
                    <tr>
                        <td>RFC: {{$DatosRegistros->rfc}}</td>
                    </tr>
                    <tr>
                        <td>Representante legal: {{$DatosRegistros->representanteLegal." ".$DatosRegistros->primerAp." ".$DatosRegistros->segundoAp}}</td>
                
                    </tr>
                    <tr>
                        <td>Asunto: {{$DatosRegistros->razon}} </td>
                    </tr>
                    
                    @else
                    <tr>
                        <td>Nombre:{{$DatosRegistros->nombre." ".$DatosRegistros->primerAp." ".$DatosRegistros->segundoAp}}</td>
                        <td rowspan="5" class="folio">{{ $DatosRegistros->folio}}</td>
                        <td rowspan="5"><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->margin(0)->size(150)->generate(url('FormatoRegistro/'.$DatosRegistros->id))) !!}"></td>
                        {{-- <td>{!! QrCode::format('png')->margin(0)->size(100)->generate(url('/')) !!}</td> --}}
                    </tr>
                    <tr>
                        <td>Municipio: {{$DatosRegistros->municipio}}</td>
                    </tr>
                    <tr>
                        <td>Documento de Identificacion: {{$DatosRegistros->docIdentificacion}}</td>
                    </tr>
                    <tr>
                        <td>Ocupación: {{$DatosRegistros->ocupacion}}</td>
                    </tr>
                    <tr>
                        <td>Asunto: {{$DatosRegistros->razon}}</td>
                    </tr>    
                    @endif
                    <tr>
                        <td><hr></td>
                        <td><hr></td>
                        <td><hr></td>
                    </tr>

                    <tr class="text-muted">
                        <td>
                            UAT XALAPA
                           <br> Circuito Rafael Guízar y Valencia No. 707, Colonia Reserva Territorial C.P. 91096 Xalapa, Veracruz.
                            Horario. 9:00 - 15:00 hrs y 16:00 - 18:00 hrs.  
                        </td>
                        {{-- <td>
                            <p>UIPJ XALAPA</p>
                            Circuito Rafael Guízar y Valencia No. 707, Colonia Reserva Territorial C.P. 91096 Xalapa, Veracruz.
                            <br>
                            Horario. 9:00 - 15:00 hrs y 16:00 - 18:00 hrs. 
                            de Lunes a Viernes
                        </td>
                        <td>
                            <p>UIPJ XALAPA</p>
                            Circuito Rafael Guízar y Valencia No. 707, Colonia Reserva Territorial C.P. 91096 Xalapa, Veracruz.
                            <br>
                            Horario. 9:00 - 15:00 hrs y 16:00 - 18:00 hrs. 
                            de Lunes a Viernes
                        </td> --}}
                        
                    </tr>
                    <tr>
                        <td><hr></td>
                        <td><hr></td>
                        <td><hr></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <small class="text-muted">La Fiscalía General del Estado de Veracruz, es la responsable del tratamiento de los datos personales que nos proporcione.
                                Los datos personales que recabamos a Usted, los utilizaremos para las siguientes finalidades: 
                               <br> •	Alimentar la base de datos del sistema electrónico generado de Citas para Atención en las Unidades de Atención Temprana de la Fiscalía General del Estado.
                               <br> •	Registrar la solicitud de cita para atención en cualquiera de las Unidades de Atención Temprana. 
                               <br> •	Para generar el código de registro único y alfanumérico asignado a la cita solicitada.
                               <br> •	Para generar el código QR el cual almacenara información de lo registrado en la plataforma.
                              <br>  •	Para generar el comprobante de cita correspondiente.
                                De manera adicional, utilizaremos su información personal para la siguiente finalidad que nos permite y facilita brindarle una mejor atención: 
                                •	Generación de informes estadísticos.
                                En caso de que no desee que sus datos personales sean tratados para las finalidades  adicionales, Usted puede manifestarlo al correo electrónico direcciondetransparencia@fiscaliaveracruz.gob.mx   
                                Le informamos que sus datos personales  NO son compartidos con personas, empresas, organizaciones y autoridades distintas al sujeto obligado, salvo que sean necesarias para atender requerimientos de información de una autoridad competente, debidamente fundados y motivados.
                                Para mayor información acerca del tratamiento y de los derechos que puede hacer valer, usted puede acceder al aviso de privacidad integral a través de la dirección electrónica: http://fiscaliaveracruz.gob.mx/.
                                </small>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>


{{-- 
    
    Salmos 1:1-3
    La persona que lee regularmente la Palabra de Dios es
     “como un árbol plantado al lado de corrientes de agua, que da su propio fruto en su estación y cuyo follaje no se marchita, y todo lo que haga tendrá éxito
    --}}