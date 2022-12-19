<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob 49, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title>تظلمات</title>

    <link href="{{ asset('bootstrap/css/bootstrap.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}"  rel="stylesheet" >
    {{-- <link href="{{ asset('bootstrap/css/main.css') }}"  rel="stylesheet"> --}}
    <link href="{{ asset('bootstrap/style.css') }}"  rel="stylesheet" >
    
    {{-- <script src="{{asset('bootstrap/js/helpers.js')}}"></script>
    <script src="{{asset('bootstrap/js/template-customizer.js')}}"></script>
    <script src="{{asset('bootstrap/js/config.js')}}"></script> --}}
{{-- 
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.rtl.css">
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css">
    <!-- <link type="text/css" rel="stylesheet" href="bootstrap/css/adminlte.min.css"> -->
    <!-- <link type="text/css" rel="stylesheet" href="bootstrap/css/all.min.css"> -->
    <link type="text/css" rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css"  >
    <link type="text/css" rel="stylesheet" href="bootstrap/style.css"  > --}}
    <!-- كود الصور <i class="bi bi-pencil-square" ></i>  -->

</head>

<body class="bg-light">

 <nav class="navbar navbar-expand-lg fixed-top  fixed-top navbar-fav bg-fav p-1"> 
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav nav-tabs " id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="navbar-brand" href="sr">
            <button class="nav-link "  data-bs-toggle="tab"  aria-selected="true"><i class="bi bi-layout-text-window-reverse me-2" ></i>الننئايج</button>
          </a>
          </li>
          
          <li class="nav-item  " role="presentation">
            <a class="navbar-brand" href="sc">
            <button class="nav-link active"  data-bs-toggle="tab"><i   class="bi bi-info-square-fill me-2" ></i> التظلمات</button>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 

   <!-- Tab panes  محتويات الشريط العلوي-->
<div class="container-fluid body-tab">

        <div class="container " >

           <div class="row">
            <div class="col-md-8 mx-auto">
              <div class="card ">
                <div class="card-header">
                  <h3 class="card-title text-center">طلب تظلم</h3>
                </div>
                <div class="card-body">
                  <form class="row  needs-validation" novalidate>
                  <div id="actions" class="row">

                  <div class="col-md-12">

                    <div class="row gy-3">
                       <div class="col-md-6 ">
                         <label for="cc-name" class="form-label">اسم المادة </label>
                         <input type="text" class="form-control" id="cc-name" placeholder="" required>
                         <small class="text-muted"> </small>
                         <div class="invalid-feedback">
                           اسم المادة مطلوب
                         </div>
                       </div>
                     <h4 class="mb-1">نوع التظلم</h4>
  
                     <div class="my-2 ">
                       <div class="form-check">
                         <input id="credit" name="paymentMethod" type="radio" class="form-check-input" required>
                         <label class="form-check-label" for="credit">جمع درجات</label>
                       </div>
                       <div class="form-check">
                         <input id="cash" name="paymentMethod" type="radio" class="form-check-input" required>
                         <label class="form-check-label" for="cash">فتح دفتر</label>
                       </div>
                     </div>
                    </div>
                 </div>

                    <div class="col-lg-6">
                      <div class="form-check">
                         <div class="btn-group w-100">
                           <span class="btn btn-success col fileinput-button" >
                             <i class="fas fa-plus"></i>
                             <span> اضافة سند</span >
                           </span>
                         </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="table table-striped files" id="previews">
                    <div id="template" class="row mt-2">
                      <div class="col-auto">
                          <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                      </div>
                  
                      <div class="col-auto d-flex align-items-center">
                        <div class="btn-group">
                          <button data-dz-remove class="btn btn-primary start">
                            <i class="fas fa-upload"></i>
                            <span>تعديل</span>
                          </button>
                          
                          <button data-dz-remove class="btn btn-danger delete">
                            <i class="fas fa-trash"></i>
                            <span>الغاء</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="justify-content-center align-center">    
                    <button class="align-items-center btn btn-outline-info w-100 " type="submit"> ارسال </button>
                  </div>
                </form>
                </div>
                <div class="card-footer">
                 سند التامين عند شركة العمقي في حساب الكلية رقم الحساب <strong> 254028786</strong>
                </div>
              </div>
            </div>
           </div>
         
        </div>
      
</div>


<script  src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
{{-- <script  src="{{asset('bootstrap/js/sweetalert2.all.min.js')}}"></script> --}}
<script  src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script  src="{{asset('bootstrap/js/dropzone.min.js')}}"></script>
{{-- <script  src="{{asset('bootstrap/js/datatable.js')}}"></script> --}}
{{-- <script  src="{{asset('bootstrap/js/datatablebootstrap.js')}}"></script> --}}
{{-- <script  src="{{asset('bootstrap/js/main.js')}}"></script> --}}
<script  class="init">
       
   $(document).ready(function() {
       $('#example').DataTable();
   } );
   
       </script>
<script src="{{asset('bootstrap/js/form-validation.js')}}"></script>
{{-- <script src="{{asset('bootstrap/main_test.js')}}"></script> --}}

{{-- 
<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="bootstrap/js/jquery.js"></script> -->
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="bootstrap/js/form-validation.js"></script>
<script type="text/javascript" src="bootstrap/js/dropzone.min.js"></script> --}}
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

</body>
</html>