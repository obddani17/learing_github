<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob 49, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title>النتائج</title>

    <link href="{{ asset('bootstrap/css/bootstrap.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}"  rel="stylesheet" >
    {{-- <link href="{{ asset('bootstrap/css/main.css') }}"  rel="stylesheet"> --}}
    <link href="{{ asset('bootstrap/style.css') }}"  rel="stylesheet" >
    
    {{-- <script src="{{asset('bootstrap/js/helpers.js')}}"></script>
    <script src="{{asset('bootstrap/js/template-customizer.js')}}"></script>
    <script src="{{asset('bootstrap/js/config.js')}}"></script> --}}

    {{-- <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.rtl.css">
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
      <a class="navbar-brand" href=""></a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav nav-tabs " id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="navbar-brand" href="sr">
            <button class="nav-link active"  data-bs-toggle="tab"  aria-selected="true"><i class="bi bi-layout-text-window-reverse me-2" ></i>الننئايج</button>
            </a>
          </li>
          
          <li class="nav-item  " role="presentation">
            <a class="navbar-brand" href="sc">
            <button class="nav-link"  data-bs-toggle="tab"><i class="bi bi-info-square-fill me-2" ></i> التظلمات</button>
             </a>
          </li>
        </ul>
      </div>
    </div>
</nav> 


   <!-- Tab panes  محتويات الشريط العلوي-->
<div class="container-fluid body-tab">
      <div class="row ps-1pe-2">
          <div class="col-md-12 ">
            <section class="card">
               <header class="card-header">
               <h2 class="card-title text-center"> النتائج النهائية </h2>
               </header>
                 <div class="card-body pe-3 ">
                   
                   <div class="table-responsive-lg pe-6"  >
                     <table class="table  table-bordered table-hover  caption-top pe-3 "  id="example">
                      <caption class="fontmonospace">
                        <label for="#" class="form-label">الاسم: </label>
                        <label for="#" class="form-label ps-5 ">رقم القيد :  </label>
                        <div class="row">
                          <form action="">
                            <div class="col-md-3">
                              <label for="validationCustom05" class="form-label">المستوى</label>
                              <div class="input-group has-validation">
                                   <select class="form-select" id="validationCustom05" required>
                                        <option value="" selected disabled >اختر المستوى الدراسي...</option>
                                        <option> الاول </option>
                                        <option> الثاني</option>
                                        <option> الثالث</option>
                                        <option> الرابع</option>
                                        <option> الخامس</option>
                                        <option>  خريج</option>
                                   </select>
                                  <div class="invalid-feedback">
                                  الرجاءاختيار المستوي
                                  </div>
                                  <div class="ps-3">
                                       <button type="submit" class=" btn btn-danger" >عرض </button>
                                  </div>
                             </div>
                            </div>
                         </form>
                         <p>الترم الاول</p>
                        </div>
                      </caption>
                    <thead class="table-light"  >
                             <tr >
                               <th colspan="5" class=" text-center">المادة 1</th>
                               <th colspan="5" class=" text-center">المادة 2</th>
                               <th colspan="5" class=" text-center">المادة 3</th>
                               <th colspan="5" class=" text-center">المادة 4</th>
                               <th colspan="5" class=" text-center">المادة 5</th>
                               <th colspan="5" class=" text-center">المادة 6</th>
                               <th colspan="5" class=" text-center">المادة 7</th>
                               <th>المجموع </th>
                               <th>النسبة </th>
                               <th>التقدير </th>
                             </tr>
                    </thead>
                    <tbody >
                               <tr >
                                  <td class="text-center">ع</td>
                                  <td class="text-center">ف</td>
                                  <td class="text-center">م</td>
                                  <td class="text-center">د</td>
                                  <td class="text-center">مج</td>
                                  <td class="text-center">ع</td>
                                  <td class="text-center">ف</td>
                                  <td class="text-center">م</td>
                                  <td class="text-center">د</td>
                                  <td class="text-center">مج</td>
                                  <td class="text-center">ع</td>
                                  <td class="text-center">ف</td>
                                  <td class="text-center">م</td>
                                  <td class="text-center">د</td>
                                  <td class="text-center">مج</td>
                                  <td class="text-center">ع</td>
                                  <td class="text-center">ف</td>
                                  <td class="text-center">م</td>
                                  <td class="text-center">د</td>
                                  <td class="text-center">مج</td>
                                  <td class="text-center">ع</td>
                                  <td class="text-center">ف</td>
                                  <td class="text-center">م</td>
                                  <td class="text-center">د</td>
                                  <td class="text-center">مج</td>
                                  <td class="text-center">ع</td>
                                  <td class="text-center">ف</td>
                                  <td class="text-center">م</td>
                                  <td class="text-center">د</td>
                                  <td class="text-center">مج</td>
                                  <td class="text-center">ع</td>
                                  <td class="text-center">ف</td>
                                  <td class="text-center">م</td>
                                  <td class="text-center">د</td>
                                  <td class="text-center">مج</td>
                                  <td class="text-center">الكلي</td>
                                  <td class="text-center">%100</td>
                                  <td class="text-center">#</td>
                                  
                               </tr>
                               <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                               </tr>
                               <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                               </tr>  
                    </tbody>
                     </table>
                   </div>
                   <p>الترم الثاني</p>
                   <div class="table-responsive-lg pe-6"  >
                    <table class="table  table-bordered table-hover  caption-top pe-3 "  id="example">
                   <thead class="table-light"  >
                            <tr >
                              <th colspan="5" class=" text-center">المادة 1</th>
                              <th colspan="5" class=" text-center">المادة 2</th>
                              <th colspan="5" class=" text-center">المادة 3</th>
                              <th colspan="5" class=" text-center">المادة 4</th>
                              <th colspan="5" class=" text-center">المادة 5</th>
                              <th colspan="5" class=" text-center">المادة 6</th>
                              <th colspan="5" class=" text-center">المادة 7</th>
                              <th>المجموع </th>
                              <th>النسبة </th>
                              <th>التقدير </th>
                            </tr>
                   </thead>
                   <tbody >
                              <tr >
                                 <td class="text-center">ع</td>
                                 <td class="text-center">ف</td>
                                 <td class="text-center">م</td>
                                 <td class="text-center">د</td>
                                 <td class="text-center">مج</td>
                                 <td class="text-center">ع</td>
                                 <td class="text-center">ف</td>
                                 <td class="text-center">م</td>
                                 <td class="text-center">د</td>
                                 <td class="text-center">مج</td>
                                 <td class="text-center">ع</td>
                                 <td class="text-center">ف</td>
                                 <td class="text-center">م</td>
                                 <td class="text-center">د</td>
                                 <td class="text-center">مج</td>
                                 <td class="text-center">ع</td>
                                 <td class="text-center">ف</td>
                                 <td class="text-center">م</td>
                                 <td class="text-center">د</td>
                                 <td class="text-center">مج</td>
                                 <td class="text-center">ع</td>
                                 <td class="text-center">ف</td>
                                 <td class="text-center">م</td>
                                 <td class="text-center">د</td>
                                 <td class="text-center">مج</td>
                                 <td class="text-center">ع</td>
                                 <td class="text-center">ف</td>
                                 <td class="text-center">م</td>
                                 <td class="text-center">د</td>
                                 <td class="text-center">مج</td>
                                 <td class="text-center">ع</td>
                                 <td class="text-center">ف</td>
                                 <td class="text-center">م</td>
                                 <td class="text-center">د</td>
                                 <td class="text-center">مج</td>
                                 <td class="text-center">الكلي</td>
                                 <td class="text-center">%100</td>
                                 <td class="text-center">#</td>
                                 
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>  
                   </tbody>
                    </table>
                  </div>
                  </div>
             </section>
          </div>
        </div>

  <!-- </div> -->
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