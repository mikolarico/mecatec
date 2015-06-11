

@extends('Theme/ViewParent')



@section('HomeCliente')
 @parent
  
  <!-- /////////////////////////////////////////////////CONTENIDO DEL HOME ///////////////////////////////////////-->

 <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  
                  
                                    <div class="row mt">
                                     <h1 class="tree"><center>Bienvenido al Sistema de Clientes de MECATEC </center></h1> 
                                    </div><!-- /row mt -->  
                                    <div class="row mt">

                      <!-- SERVER STATUS PANELS 
                                              <div class="col-md-4 col-sm-4 mb">
                                                    <div class="white-panel pn donut-chart">
                                                          <div class="white-header">
                                                                 <h5>SERVER LOAD</h5>
                                                          </div>
                                                          <div class="row">
                                                                 <div class="col-sm-6 col-xs-6 goleft">
                                                                    <p><i class="fa fa-database"></i> 70%</p>
                                                                  </div>
                                                           </div>
                                                           <canvas id="serverstatus01" height="120" width="120"></canvas>
                                                           <script>
                                                              var doughnutData = [
                                                                  {
                                                                    value: 70,
                                                                    color:"#68dff0"
                                                                  },
                                                                  {
                                                                    value : 30,
                                                                    color : "#fdfdfd"
                                                                  }
                                                                ];
                                                                var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                                                            </script>
                                                      </div><! --/grey-panel 
                                              </div><!-- /col-md-4-->
                                             <div class="col-md-3 col-sm-3 mb"></div>

                                              <div class="col-md-3 col-sm-3 mb">
                                                    <div class="white-panel pn">
                                                           <div class="white-header">
                                                               <h5>Cuenta</h5>
                                                           </div>
                                                          <div class="row">
                                                              <div class="col-sm-6 col-xs-6 goleft">
                                                              </div>
                                                              <div class="col-sm-6 col-xs-6"></div>
                                                          </div>
                                                          <div class="centered">
                                                              <img src="{{asset('assets/img/perfilIcono.png')}}" width="120">
                                                          </div>
                                                    </div>
                                               </div><!-- /col-md-4 -->
                        
                                               <div class="col-md-3 col-sm-3 mb">
                                                    <div class="white-panel pn">
                                                           <div class="white-header">
                                                               <h5>Cotizaciones</h5>
                                                           </div>
                                                          <div class="row">
                                                              <div class="col-sm-6 col-xs-6 goleft">
                                                              </div>
                                                              <div class="col-sm-6 col-xs-6"></div>
                                                          </div>
                                                          <div class="centered">
                                                              <img src="{{asset('assets/img/iconcotizador.png')}}" width="120">
                                                          </div>
                                                    </div>
                                               </div>


                                            <!-- /col-md-4 -->
                        

                    </div><!-- /row -->
                    
                            
          <div class="row">
            <!-- TWITTER PANEL -->
                                                <div class="col-md-3 col-sm-3 mb"></div>
                                                <div class="col-md-3 col-sm-3 mb">
                                                    <div class="white-panel pn">
                                                           <div class="white-header">
                                                               <h5>Estado de Servicio</h5>
                                                           </div>
                                                          <div class="row">
                                                              <div class="col-sm-6 col-xs-6 goleft">
                                                              </div>
                                                              <div class="col-sm-6 col-xs-6"></div>
                                                          </div>
                                                          <div class="centered">
                                                              <img src="{{asset('assets/img/icono-control-invetarios.png')}}" width="120">
                                                          </div>
                                                    </div>
                                               </div>
<!-- /col-md-4 -->
            
            
                                                <div class="col-md-3 col-sm-3 mb">
                                                    <div class="white-panel pn">
                                                           <div class="white-header">
                                                               <h5>Servicio Post Venta</h5>
                                                           </div>
                                                          <div class="row">
                                                              <div class="col-sm-6 col-xs-6 goleft">
                                                              </div>
                                                              <div class="col-sm-6 col-xs-6"></div>
                                                          </div>
                                                          <div class="centered">
                                                              <img src="{{asset('assets/img/after-service.png')}}" width="120">
                                                          </div>
                                                    </div>
                                               </div>
<!-- /col-md-4 -->
            
          </div><!-- /row -->
          <!--
          <div class="row mt">
                      <!--CUSTOM CHART START 
                      <div class="border-head">
                          <h3>VISITS</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                      </div>
                      <!--custom chart end
          </div><!-- /row --> 
          
                  <!-- /col-lg-9 END SECTION MIDDLE -->

  <!-- ////////////////////////////////////////////FIN DEL CONTENIDO DEL HOME ///////////////////////////////////////////-->



  <!-- ############################################################################################################-->

 <!--

  
  <footer class="site-footer">
          <div class="text-center">
              <h4>Taller de Ingeniería de Software</h4>
              <h4>UNI-2015</h4>

              <a href="Encabezado.html" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->

  -->

  <!-- ############################## LIBRERÍAS PARA QUE FUNCIONE EL MENÚ DESPLEGABLE #########################-->

  </section>



  <!-- #######################################################################################################################################-->
  
  <!-- <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: '{{asset('assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
  </script>
-->

@stop