<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>  التقارير </title>
   <!-- <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
    <!-- Icons CSS -->
    <link href="{{ asset('css/feather.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('css/uppy.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.steps.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.timepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simplebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app-light.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/feather.css"> --}}
    {{-- <link rel="stylesheet" href="css/select2.css"> --}}
    {{-- <link rel="stylesheet" href="css/dropzone.css"> --}}
    {{-- <link rel="stylesheet" href="css/uppy.min.css"> --}}
    {{-- <link rel="stylesheet" href="css/jquery.steps.css"> --}}
    {{-- <link rel="stylesheet" href="css/jquery.timepicker.css"> --}}
    {{-- <link rel="stylesheet" href="css/quill.snow.css"> --}}
    {{-- <link rel="stylesheet" href="css/simplebar.css"> --}}
    <!-- my style -->
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    {{-- <link rel="stylesheet" href="css/simplebar.css"> --}}
    <!-- Date Range Picker CSS -->
    {{-- <link rel="stylesheet" href="css/daterangepicker.css">  --}}
    {{-- <link rel="stylesheet" href="css/daterangepicker.css"> --}}
    <!-- App CSS -->
    {{-- <link rel="stylesheet" href="css/app-light.css" id="lightTheme"> --}}
  </head>
  <body class="vertical  light rtl ">
    <div class="wrapper">
      <nav class="topnav navbar navbar-fav bg-fav">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <!-- <form class="form-inline mr-auto searchform text-muted">
          <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder=" بحث عن..." aria-label="Search">
        </form> -->
        <form class="form-inline mr-auto  d-flex">
          <input class="form-control mr-sm-2 me-2" type="search" placeholder="البحث عن ..." aria-label="Search">
          <button class="btn btn-outline-success" type="submit">بحث</button>
        </form>
        <ul class="nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="profile.html">Profile</a>
              <a class="dropdown-item" href="profile-settings.html">Settings</a>
              <a class="dropdown-item" href="profile-security.html">Activities</a>
            </div>
          </li>
        </ul>
      </nav>
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="#">
                <strong class="">SRRS</strong>
            </a>
          </div>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">الرئيسية</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
                <li class="nav-item active">
                  <a class="nav-link pl-3" href="./admin_h"><span class="ml-1 item-text">التقرير الجامعي</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./admin_t"><span class="ml-1 item-text">الكادر التعليمي</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./admin_r"><span class="ml-1 item-text">النتائج</span></a>
                </li>
              </ul>
            </li>
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>الادخالات</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text"> اضافة</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./admin_i_h"><span class="ml-1 item-text">رئيس قسم</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./admin_i_t"><span class="ml-1 item-text">كادر تعليمي</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./admin_i_t_r"><span class="ml-1 item-text">لجنة رصد</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./admin_i_s"><span class="ml-1 item-text">طالب/ـة</span></a>
                </li>
              </ul>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="admin_v">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">الصلاحية</span>
                <!-- <span class="badge badge-pill badge-primary"></span> -->
              </a>
            </li>

          </ul>
          <!-- <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="../docs/index.html">
                <i class="fe fe-help-circle fe-16"></i>
                <span class="ml-3 item-text">Getting Start</span>
              </a>
            </li>
          </ul> -->
          <!-- <div class="btn-box w-100 mt-4 mb-1">
            <a href="https://themeforest.net/item/tinydash-bootstrap-html-admin-dashboard-template/27511269" target="_blank" class="btn mb-2 btn-primary btn-lg btn-block">
              <i class="fe fe-shopping-cart fe-12 mr-2"></i><span class="small">Buy now</span>
            </a>
          </div> -->
        </nav>
      </aside>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              
              <div class="mb-2 align-items-center">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row mt-1 align-items-center">
                      <div class="col-12 col-lg-7 text-left pl-4">
                        <div class="row mt-1 align-items-center">
                        <span class="h3 mb-1"> التقرير الجامعي للنتائج السنوية للعام الجامعي</span>
                        <span class="fe fe-arrow-uptext-success fe12 mb-1 mx-3">
                            <select class="form-control " id="example-select">
                              <option>2022-2021</option>
                              <option>2021-2020</option>
                              <option>2020-2019</option>
                              <option>2019-2018</option>
                              <option>2018-2017</option>
                            </select>
                        </span>
                      </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <canvas id="chCircul" height="200" style="display: block; width: 600px; height: 200px;" width="400" class="chartjs-render-monitor"></canvas>
                      </div>
                      <div class="col-lg-6">
                        <canvas id="chBar6" leight="100" style="display: block; width: 600px; height: 200px;" width="300" class="chartjs-render-monitor"></canvas>
                      </div>
                    </div>
                    
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
              </div>
              <!-- الكبيرة -->
              <div class="row items-align-baseline">
                
                <div class="col-lg-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-body">
                      <div class="chart-widget mb-2">
                        <p class="mb-0 h3"><strong class="mb-0 text-uppercase text-muted">هندسة حاسوب</strong></p>
                        <canvas id="chBar" height="600" style="display: block; width: 600px; height: 200px;" width="1000" class="chartjs-render-monitor"></canvas>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-lg-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-body">
                      <div class="chart-widget mb-2">
                        <p class="mb-0 h3"><strong class="mb-0 text-uppercase text-muted">هندسة إلكترونية</strong></p>
                        <canvas id="chBar1" height="600" style="display: block; width: 600px; height: 200px;" width="1000" class="chartjs-render-monitor"></canvas>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-lg-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-body">
                      <div class="chart-widget mb-2">
                        <p class="mb-0 h3"><strong class="mb-0 text-uppercase text-muted">هندسة معمارية</strong></p>
                        <canvas id="chBar2" height="600" style="display: block; width: 600px; height: 200px;" width="1000" class="chartjs-render-monitor"></canvas>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-lg-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-body">
                      <div class="chart-widget mb-2">
                        <p class="mb-0 h3"><strong class="mb-0 text-uppercase text-muted">هندسة مدنية</strong></p>
                        <canvas id="chBar3" height="600" style="display: block; width: 600px; height: 200px;" width="1000" class="chartjs-render-monitor"></canvas>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-lg-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-body">
                      <div class="chart-widget mb-2">
                        <p class="mb-0 h3"><strong class="mb-0 text-uppercase text-muted">هندسة كيميائية</strong></p>
                        <canvas id="chBar4" height="600" style="display: block; width: 600px; height: 200px;" width="1000" class="chartjs-render-monitor"></canvas>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-lg-4 col-lg-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-body">
                      <div class="chart-widget mb-2">
                        <p class="mb-0 h3"><strong class="mb-0 text-uppercase text-muted">هندسة بترولية</strong></p>
                        <canvas id="chBar5" height="600" style="display: block; width: 600px; height: 200px;" width="1000" class="chartjs-render-monitor"></canvas>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                
              </div> <!-- .row -->
              <!-- الصغير -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="list-group list-group-flush my-n3">
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-box fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Package has uploaded successfull</strong></small>
                        <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-download fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Widgets are updated successfull</strong></small>
                        <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                        <small class="badge badge-pill badge-light text-muted">2m ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-inbox fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Notifications have been sent</strong></small>
                        <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                        <small class="badge badge-pill badge-light text-muted">30m ago</small>
                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-link fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Link was attached to menu</strong></small>
                        <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                        <small class="badge badge-pill badge-light text-muted">1h ago</small>
                      </div>
                    </div>
                  </div> <!-- / .row -->
                </div> <!-- / .list-group -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body px-5">
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-success justify-content-center">
                      <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Control area</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Activity</p>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Droplet</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Upload</p>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-users fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Users</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Settings</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script  src="{{asset('js/jquery.min.js')}}"></script>
    <script  src="{{asset('js/popper.min.js')}}"></script>
    <script  src="{{asset('js/moment.min.js')}}"></script>
    <script  src="{{asset('js/bootstrap.min.js')}}"></script>
    <script  src="{{asset('js/simplebar.min.js')}}"></script>
    <script  src="{{asset('js/daterangepicker.js')}}"></script>
    <script  src="{{asset('js/jquery.stickOnScroll.js')}}"></script>
    <script  src="{{asset('js/tinycolor-min.js')}}"></script>
    <script  src="{{asset('js/config.js')}}"></script>
    <script  src="{{asset('js/d3.min.js')}}"></script>
    <script  src="{{asset('js/topojson.min.js')}}"></script>
    <script  src="{{asset('js/datamaps.all.min.js')}}"></script>
    <script  src="{{asset('js/datamaps-zoomto.js')}}"></script>
    <script  src="{{asset('js/datamaps.custom.js')}}"></script>
    <script  src="{{asset('js/Chart.min.js')}}"></script>
    {{-- <script src="js/jquery.min.js"></script> --}}
    {{-- <script src="js/jquery.min.js"></script> --}}
    {{-- <script src="js/popper.min.js"></script> --}}
    {{-- <script src="js/moment.min.js"></script> --}}
    {{-- <script src="js/bootstrap.min.js"></script> --}}
    {{-- <script src="js/simplebar.min.js"></script> --}}
    {{-- <script src='js/daterangepicker.js'></script> --}}
    {{-- <script src='js/jquery.stickOnScroll.js'></script> --}}
    {{-- <script src="js/tinycolor-min.js"></script> --}}
    {{-- <script src="js/config.js"></script> --}}
    {{-- <script src="js/d3.min.js"></script> --}}
    {{-- <script src="js/topojson.min.js"></script> --}}
    {{-- <script src="js/datamaps.all.min.js"></script> --}}
    {{-- <script src="js/datamaps-zoomto.js"></script> --}}
    {{-- <script src="js/datamaps.custom.js"></script> --}}
    {{-- <script src="js/Chart.min.js"></script> --}}
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script  src="{{asset('js/gauge.min.js')}}"></script>
    <script  src="{{asset('js/jquery.sparkline.min.js')}}"></script>
    <script  src="{{asset('js/apexcharts.min.js')}}"></script>
    <script  src="{{asset('js/apexcharts.custom.js')}}"></script>
    <script  src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script  src="{{asset('js/select2.min.js')}}"></script>
    <script  src="{{asset('js/jquery.steps.min.js')}}"></script>
    <script  src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script  src="{{asset('js/jquery.timepicker.js')}}"></script>
    <script  src="{{asset('js/dropzone.min.js')}}"></script>
    <script  src="{{asset('js/uppy.min.js')}}"></script>
    <script  src="{{asset('js/quill.min.js')}}"></script>
    <script  src="{{asset('js/style.js')}}"></script>
    {{-- <script src="js/gauge.min.js"></script> --}}
    {{-- <script src="js/jquery.sparkline.min.js"></script> --}}
    {{-- <script src="js/apexcharts.min.js"></script> --}}
    {{-- <script src="js/apexcharts.custom.js"></script> --}}
    {{-- <script src='js/jquery.mask.min.js'></script> --}}
    {{-- <script src='js/select2.min.js'></script> --}}
    {{-- <script src='js/jquery.steps.min.js'></script> --}}
    {{-- <script src='js/jquery.validate.min.js'></script> --}}
    {{-- <script src='js/jquery.timepicker.js'></script> --}}
    {{-- <script src='js/dropzone.min.js'></script> --}}
    {{-- <script src='js/uppy.min.js'></script> --}}
    {{-- <script src='js/quill.min.js'></script> --}}
    {{-- <script src='js/style.js'></script> --}}
    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>
    <script  src="{{asset('js/apps.js')}}"></script>
    {{-- <script src="js/apps.js"></script> --}}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
    <!-- <script  src='js/chart.js'></script> -->

  </body>
</html>