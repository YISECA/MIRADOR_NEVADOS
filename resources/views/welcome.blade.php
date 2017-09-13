@extends('master')                              

@section('content')         

<link rel="stylesheet" type="text/css" href="public/Css/form.css">

<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">

<section id="page1">

    <div class="panel panel-default">

        <div class="panel-heading">Inicio</div>

        <div class="panel-body">

            <div class="freebirdFormviewerViewFormContent ">

                <div class="freebirdFormviewerViewHeaderHeader">

                    <div class="freebirdFormviewerViewHeaderTitleRow">

                        <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"><h3>CAMINATA FAMILIAR</h3> <h4>AULA AMBIENTAL PARQUE MIRADOR DE LOS NEVADOS (Domingo 17 de septiembre 2017)</h4></div>

                    </div>
<br>
                    <div class="stage">

                        <div id="SLDR-ONE" class="sldr">

                            <ul class="wrp animate">

                                <li class="elmnt-one">                                 

                                        <div class="wrap"><img src="public/Img/mirador.jpg"  height="400">

                                        </div>                                   
                                </li>

                               <li class="elmnt-two">
                                    
                                        <div class="wrap"><img src="public/Img/mirador1.jpg"  height="400">

                                        </div>                                 
                                </li>

                                 <li class="elmnt-three">
                                    
                                        <div class="wrap"><img src="public/Img/mirador2.jpg"  height="400">

                                        </div>                                 
                                </li>
                                 

                            </ul>

                        </div>

                        <div class="clear"></div>

                        <ul class="selectors">

                            <li class="focalPoint"><a href="">•</a></li>

                            <li><a href="">•</a></li>

                            <li><a href="">•</a></li>            
                         
                        </ul>

                    </div>

                    <script src="public/Js/jquery.sldr.js"></script>

                    <div class="freebirdFormviewerViewHeaderDescription" dir="auto">

                        <h3>Ubicación</h3>

                        <p align="justify" style="font-size: 11pt; line-height: 25px">El aula ambiental Parque Mirador de Los Nevados queda en la localidad de Suba, en la  carrera 87ª No. 145-50, allí aprenderás sobre todo lo que tiene que ver con el tema de Cambio Climático, este terreno, en un primer momento fue una cantera que luego quisieron convertir en escombrera, pero felizmente se construyó un parque de recreación pasiva, por lo que se vive la cultura muisca, en sus plazas, caminos plazoletas y obeliscos con nombres escritos en esta lengua.</p>
                       
                        <h3>Descripción del recorrido </h3>

                        <p align="justify" style="font-size: 11pt; line-height: 25px">El recorrido da inicia en la plaza principal de suba, donde se realizará un calentamiento de aproximadamente 15 minutos, el guía de caminatas del IDRD dará las recomendaciones de la actividad y se iniciará con un desplazamiento hasta la entrada principal del parque, desde allí se realizaran varias estaciones para contar la historia y generalidades del parque. Se tomaran caminos en adoquín, ingresaremos a la parte administrativa, visitaremos las plazoletas y los obeliscos, donde conoceremos más sobre la cosmogonía muisca, luego tomaremos un  descanso en la plazoleta ancestral generando reflexión de nuestra relación con la naturaleza y nuestra cultura, terminaremos en la entrada principal del parque.</p>

                        <!--<h3>Durante el recorrido se visitaran los siguientes atractivos:</h3>
                        <ul class="ul_inicio">
                            <font style="font-size: 11pt; line-height: 25px;">
                            <li>Administración, Aulas y espacios de interpretación ambiental</li>
                            <li>Miradores </li>
                            <li>Diferentes senderos </li>
                            </font>
                        </ul>-->
                        <br>

                        <font size="3"><center><table width="1000">

                            <col width="281">

                                <col width="282">

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Punto de encuentro</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>PLAZA CENTRAL SUBA-CLL146C BIS 90-57<br>
                                            <strong>Barrio:</strong> TUNA ALTA</p>

                                        </td>

                                    </tr>
                              
                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Fecha</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Domingo 17 de Septiembre de 2017</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Hora de encuentro</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>8:00 a.m</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Cupo Máximo</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>40 Personsa</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Rango de Edad</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>2 - 60 años</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Nivel</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>BAJO</p>

                                        </td>

                                    </tr>   
                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Temperatura</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>12°</p>

                                        </td>

                                    </tr> 
                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Altitud</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>2.700. a 2.750 m.s.n.m</p>

                                        </td>

                                    </tr> 
                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Duración</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>3 Horas</p>

                                        </td>

                                    </tr>                         

                        </table></center></font>

                        <h3>Recomendaciones</h3>

                        <ul class="ul_inicio">

                            <font  style="font-size: 11pt; line-height: 25px">

                                <li>Llevar ropa cómoda.</li>
                            
                                <li>Llevar bloqueador solar.</li>

                                <li>Hidratación y Refrigerio.</li>

                                <li>Calzado cómodo.</li>

                                <li>Llevar carné de la eps.</li>

                                <li>Medicamentos personales .</li>

                                <li>No llevar mascotas .</li>

                                <li>Caminata apta para mayores de 2 años.</li>

                                <li><ins>Abstenerse de asistir si no se encuentra inscrito</ins>.</li>

                                <li><strong>Llevar impermeable en caso de lluvia</li>
                            </font>

                            <br>

                        </ul> <a class="btn btn-info" href="registro">Registrarse</a> </div>

                </div>

            </div>

        </div>

</section>

@stop