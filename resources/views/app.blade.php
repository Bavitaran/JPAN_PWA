<!DOCTYPE html>
<html lang="en">
<head>
<title>JPAN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom styles for this template -->
   <!-- Custom CSS -->
   <link href="assets/css/chartist.min.css" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/chartist-plugin-tooltip.css">
   <!-- Custom CSS -->
   <link href="assets/css/style.min.css" rel="stylesheet">
    <!-- All Jquery -->
    <!-- ============================================================== -->
   
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/js/jquery.sparkline.min.js"></script>
     <!--Custom JavaScript -->
    <script src="assets/js/custom.js"></script>

    <!-- PWA -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset( 'images/logo.png' ) }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>
<body>
@auth
<!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
      data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      <!-- ============================================================== -->
      <!-- Topbar header -->
      <!-- ============================================================== -->
      <x-header/>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
          <!-- Sidebar scroll-->
          <x-leftmenu/>
          <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
          <!-- ============================================================== -->
          <!-- Container fluid  -->
          <!-- ============================================================== -->
          <div class="container-fluid">
              <!-- ============================================================== -->
              <!-- Three charts -->
              <!-- ============================================================== -->
              <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-12">
                      <div class="white-box analytics-info">
                          <h3 class="box-title">{{ __("language.card1") }}</h3>
                          <ul class="list-inline two-part d-flex align-items-center mb-0">
                              <li>
                                  <div id="sparklinedash"><canvas width="67" height="30"
                                          style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                  </div>
                              </li>
                              <li class="ms-auto"><span class="counter text-success">659</span></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-12">
                      <div class="white-box analytics-info">
                          <h3 class="box-title">{{ __("language.card2") }}</h3>
                          <ul class="list-inline two-part d-flex align-items-center mb-0">
                              <li>
                                  <div id="sparklinedash2"><canvas width="67" height="30"
                                          style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                  </div>
                              </li>
                              <li class="ms-auto"><span class="counter text-purple">869</span></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-12">
                      <div class="white-box analytics-info">
                          <h3 class="box-title">{{ __("language.card3") }}</h3>
                          <ul class="list-inline two-part d-flex align-items-center mb-0">
                              <li>
                                  <div id="sparklinedash3"><canvas width="67" height="30"
                                          style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                  </div>
                              </li>
                              <li class="ms-auto"><span class="counter text-info">911</span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              
              <!-- ============================================================== -->
              <!-- Chart panel -->
              <!-- ============================================================== -->
              <div id="app">
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-7 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-body">
                                <h3 class="box-title mb-0">{{ __("language.panel1") }}</h3>
                            </div>
                            <div class="comment-widgets">
                                <!-- Multi Bar Chart -->
                                    <multi-bar-chart class="p-3"/> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-heading">
                                <h3 class="box-title mb-0">{{ __("language.panel2") }}</h3>
                            </div>
                            <div class="card-body">
                                <pie-chart class="p-3"/>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-7 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-body">
                                <h3 class="box-title mb-0">{{ __("language.panel3") }}</h3>
                            </div>
                            <div class="comment-widgets">
                                <!-- Comment Row -->
                                <div id="app">
                                    <line-chart class="p-3"/> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-heading">
                                <h3 class="box-title mb-0">{{ __("language.panel4") }}</h3>
                            </div>
                            <div class="card-body">
                                <bar-chart class="p-3"/>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
              </div>
          </div>

          <!-- ============================================================== -->
          <!-- End Container fluid  -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- footer -->
          <!-- ============================================================== -->
          <x-footer/>
          <!-- ============================================================== -->
          <!-- End footer -->
          <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->

  <script src="{{ mix('js/app.js') }}"></script>

  <!-- PWA -->
  <script src="{{ asset('/sw.js') }}" ></script>
    <script>
        if(!navigator.serviceWorker.controller){
            navigator.serviceWorker.register("/sw.js").then( function(reg)
            {
                console.log("Service worker has been registered for scope: " + reg.scope );
            });
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name=language]').change(function() {
                var lang = $(this).val();
                window.location.href = "{{ route('changeLanguage') }}?language="+lang;
            });
        });
    </script>
@else
            <a class="text-center" href="{{ route('login') }}"><h1 class="nav-link" >{{ __('Login') }}</h1></a>
@endauth
</body>
</html>