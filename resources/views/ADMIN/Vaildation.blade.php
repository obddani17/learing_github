<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>  الصلاحيات </title>
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
    <!-- my style -->
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <!-- Date Range Picker CSS -->
    {{-- <link rel="stylesheet" href="css/daterangepicker.css"> --}}
    {{-- <link rel="stylesheet" href="css/simplebar.css"> --}}
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
                <span class="ml-3 item-text">الصلاحيات</span>
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
              <!-- widgets -->
              <div class="row my-4">
                <div class="col-12">
                      <div class="card shadow mb-4">
                        <!-- <div class="card-header">
                          <strong class="card-title">  فتح الصلاحية  </strong>
                        </div> -->
                        <div class="card-body">
                          <div class="card-body">
                            <!-- table -->
                          <div id="dataTable-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <!-- <div class="row">
                              <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="dataTable-1_length">
                                  <label>Show 
                                    <select name="dataTable-1_length" aria-controls="dataTable-1" class="custom-select custom-select-sm form-control form-control-sm">
                                      <option value="16">16</option>
                                      <option value="32">32</option>
                                      <option value="64">64</option>
                                      <option value="-1">All</option>
                                    </select> entries
                                  </label>
                                </div>
                              </div>-->
                              <div class="col-12 col-m-6">
                                <div id="dataTable-1_filter" class="dataTables_filter">
                                  <label>بحث :
                                    <input type="search" class="form-control form-control-sm"   placeholder="" aria-controls="dataTable-1">
                                  </label>
                                </div>
                              </div>
                            </div> 
                            <!-- <div class="row"> -->
                                <!-- <div class="col-2 "> -->
                                  <table class=" table datatables table-bordered table-hover  no-footer"  id="dataTable1" role="grid" aria-describedby="dataTable-1_info">
                              <thead class="">
                                <tr role="row">
                                  <th class="sorting" tabindex="0" aria-controls="dataTable-1"  aria-sort="ascending" aria-label=": activate to sort column descending" style="width: 5px;">م</th>
                                  <th class="sorting" tabindex="0" aria-controls="dataTable-1"  aria-label="#: activate to sort column ascending"  >الاسم</th>
                                  <th class="sorting" tabindex="0" aria-controls="dataTable-1"  aria-label="Name: activate to sort column ascending" >القسم </th>
                                  <th class="sorting" tabindex="0" aria-controls="dataTable-1"  aria-label="Department: activate to sort column ascending" >الايميل</th>
                                  <th class="sorting" tabindex="0" aria-controls="dataTable-1"  aria-label="Company: activate to sort column ascending" style="width: 0.5rem;">الصلاحية</th>
                              </thead>
                              <tbody>
                                <tr role="row" class="odd">
                                  <td class="sorting_1">1</td>
                                  <td>نوح سالم مبارك سعيد باخلعه</td>
                                  <td>هندسة حاسوب </td>
                                  <td>no0oh.sa0lm@gmail.com </td>
                                  <td>   
                                    <div class="custom-control custom-switch">
                                      <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                      <label class="custom-control-label" for="customSwitch1"></label>
                                    </div>
                                </td>
                                </tr>
                              </tbody>
                            </table>
                          <!-- </div> -->
                        <!-- </div> -->
                        <!-- <div class="row">
                          <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dataTable-1_info" role="status" aria-live="polite">Showing 1 to 16 of 63 entries</div>
                          </div>
                          <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable-1_paginate">
                              <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="dataTable-1_previous">
                                  <a href="#" aria-controls="dataTable-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item active">
                                  <a href="#" aria-controls="dataTable-1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item ">
                                  <a href="#" aria-controls="dataTable-1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                </li>
                                <li class="paginate_button page-item ">
                                  <a href="#" aria-controls="dataTable-1" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                </li><li class="paginate_button page-item ">
                                  <a href="#" aria-controls="dataTable-1" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                </li>
                                <li class="paginate_button page-item next" id="dataTable-1_next">
                                  <a href="#" aria-controls="dataTable-1" data-dt-idx="5" tabindex="0" class="page-link">Next</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div> -->
                          </div>
                        </div> <!-- /.card-body -->
                      </div>
                </div> <!-- /. col -->
               </div> <!--end section -->
             


        <div class="col-md-4 mb-4">
          <div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="varyModalLabel"> تعديل</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                      <div class="col-md-7 mb-3">
                        <label for="validationCustom01">الاسم</label>
                        <input type="text" class="form-control" id="validationCustom01"  >
                      </div>
                      <div class="col-md-5 mb-3">
                        <label for="validationCustom01">رقم القيد</label>
                        <input type="number" class="form-control" id="validationCustom01"  >
                      </div>
                      <div class="col-md-7 mb-3">
                        <label for="validationCustom04">التخصص</label>
                        <select class="custom-select" id="validationCustom04" required="">
                          <option selected disabled value=""> اختر... </option>
                          <option>هندسة حاسوب </option>
                          <option>هندسة الالكترونية </option>
                          <option>هندسة معمارية </option>
                          <option>هندسة مدنية </option>
                          <option>هندسة كيميائية </option>
                          <option>هندسة بترولية </option>
                        </select>
                        <div class="invalid-feedback">يرجى اختيار التخصص    </div>
                      </div>
                      <div class="col-md-5 mb-3">
                        <label for="validationCustom04">المستوى</label>
                        <select class="custom-select" id="validationCustom04" required="">
                          <option selected disabled value=""> اختر... </option>
                          <option>اول  </option>
                          <option>ثاني  </option>
                          <option>ثالث  </option>
                          <option>رابع  </option>
                          <option>خامس  </option>
                        </select>
                        <div class="invalid-feedback">يرجى اختيار المستوى    </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="validationCustomUsername">الايميل</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                          </div>
                          <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" >
                        </div>
                      </div>
                    </div>
                   
                    
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">اغلاق</button>
                  <button type="button" class="btn mb-2 btn-primary"> حفظ</button>
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="card-body">
      <p class="mb-3"><strong>لجنة الرصد</strong></p>
      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="customSwitch2" checked>
        <label class="custom-control-label" for="customSwitch2">فتح الصلاحية لـ لجنة الرصد    </label>
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
    <script  src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script  src="{{asset('js/select2.min.js')}}"></script>
    <script  src="{{asset('js/jquery.steps.min.js')}}"></script>
    <script  src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script  src="{{asset('js/jquery.timepicker.js')}}"></script>
    <script  src="{{asset('js/dropzone.min.js')}}"></script>
    <script  src="{{asset('js/uppy.min.js')}}"></script>
    <script  src="{{asset('js/quill.min.js')}}"></script>


    {{-- <script src="js/jquery.min.js"></script> --}}
    {{-- <script src="js/popper.min.js"></script> --}}
    {{-- <script src="js/moment.min.js"></script> --}}
    {{-- <script src="js/bootstrap.min.js"></script> --}}
    {{-- <script src="js/simplebar.min.js"></script> --}}
    {{-- <script src='js/daterangepicker.js'></script> --}}
    {{-- <script src='js/jquery.stickOnScroll.js'></script> --}}
    {{-- <script src="js/tinycolor-min.js"></script> --}}
    {{-- <script src="js/config.js"></script> --}}
    {{-- <script src='js/jquery.mask.min.js'></script> --}}
    {{-- <script src='js/select2.min.js'></script> --}}
    {{-- <script src='js/jquery.steps.min.js'></script> --}}
    {{-- <script src='js/jquery.validate.min.js'></script> --}}
    {{-- <script src='js/jquery.timepicker.js'></script> --}}
    {{-- <script src='js/dropzone.min.js'></script> --}}
    {{-- <script src='js/uppy.min.js'></script> --}}
    {{-- <script src='js/quill.min.js'></script> --}}
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
  </body>
</html>