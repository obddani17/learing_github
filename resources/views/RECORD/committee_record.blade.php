<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob 49, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title>لجنة الرصد</title>

    <link href="{{ asset('bootstrap/css/bootstrap.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}"  rel="stylesheet" >
    <link href="{{ asset('bootstrap/css/main.css') }}"  rel="stylesheet">
    <link href="{{ asset('bootstrap/css/carousel.rtl.css') }}"  rel="stylesheet" >
    <link href="{{ asset('bootstrap/style.css') }}"  rel="stylesheet" >

    {{-- <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.rtl.css"> --}}
    {{-- <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css"> --}}
    {{-- <link type="text/css" rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css"  > --}}
    {{-- <link type="text/css" rel="stylesheet" href="bootstrap/css/main.css"  > --}}
    {{-- <link type="text/css" rel="stylesheet" href="bootstrap/css/carousel.rtl.css"  > --}}
    {{-- <link type="text/css" rel="stylesheet" href="bootstrap/style.css"  > --}}

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
            <a class="navbar-brand" href="rec_c_r">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-house-fill me-2" ></i>الريئسية</button>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="navbar-brand" href="rec_c_m">
            <button class="nav-link " id="committee-tab" data-bs-toggle="tab" data-bs-target="#committee" type="button" role="tab" aria-controls="committee" aria-selected="false"><i class="bi bi-pencil-fill me-2" ></i>الرصد</button>
            </a>
          </li>
        </ul>
      </div>
    </div>
</nav> 
   <!-- Tab panes  محتويات الشريط العلوي-->
<div class="container-fluid body-tab">
  <div class="tab-content">
      <div class="tab-pane show active " id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="container marketing">
          <!-- Three columns of text below the carousel -->
          <div class="row mt-10">
            <div class="col-lg-4">
              <span class="badges pt bg-success">11</span>
              <img src="img/CE.png" class="bd-placeholder-img rounded-circle" width="150" height="150" xmlns="http://www.w3.org/2000/svg"  role="img" aria-label="Placeholder: " preserveAspectRatio="xMidYMid slice" focusable="false">
      
              <h2>هندسة حاسوب </h2>
              <a class="btn btn-success" href="rec_c_com">عرض التفاصيل </a>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <span class="badges pt bg-info">20</span><img src="img/HU.jpg" class="bd-placeholder-img rounded-circle" width="150" height="150" xmlns="http://www.w3.org/2000/svg"  role="img" aria-label="Placeholder: " preserveAspectRatio="xMidYMid slice" focusable="false">
              <h2>هندسة الالكترونية</h2>
              <a class="btn btn-info" href="rec_c_elc">عرض التفاصيل</a>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <span class="badges pt bg-dark">16</span><img src="img/UHDR!.jpg" class="bd-placeholder-img rounded-circle" width="150" height="150" xmlns="http://www.w3.org/2000/svg"  role="img" aria-label="Placeholder: " preserveAspectRatio="xMidYMid slice" focusable="false">
      
              <h2>هندسة معمارية </h2>
              <a class="btn btn-dark" href="rec_c_arc">عرض التفاصيل</a>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <span class="badges pt bg-dark">28</span><img src="img/HDU.png" class="bd-placeholder-img rounded-circle" width="150" height="150" xmlns="http://www.w3.org/2000/svg"  role="img" aria-label="Placeholder: " preserveAspectRatio="xMidYMid slice" focusable="false">
      
              <h2>هندسة بترولية</h2>
              <a class="btn btn-dark" href="rec_c_ptl">عرض التفاصيل</a>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <span class="badges pt bg-danger">12</span><img src="img/UHDR2.jpg" class="bd-placeholder-img rounded-circle" width="150" height="150" xmlns="http://www.w3.org/2000/svg"  role="img" aria-label="Placeholder: " preserveAspectRatio="xMidYMid slice" focusable="false">
      
              <h2>هندسة مدنية </h2>
              <a class="btn btn-danger" href="rec_c_cvl">عرض التفاصيل</a>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <span class="badges pt bg-secondary">8</span><img src="img/CE.png" class="bd-placeholder-img rounded-circle" width="150" height="150" xmlns="http://www.w3.org/2000/svg"  role="img" aria-label="Placeholder: " preserveAspectRatio="xMidYMid slice" focusable="false">
      
              <h2>هندسة كيميائية</h2>
              <a class="btn btn-secondary" href="rec_c_chm">عرض التفاصيل</a>
            </div><!-- /.col-lg-4 --> 
          </div><!-- /.row -->
      
      
        </div>
      </div>
  </div>
</div>

<script  src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
<script  src="{{asset('bootstrap/js/sweetalert2.all.min.js')}}"></script>
<script  src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script  src="{{asset('bootstrap/js/datatable.js')}}"></script>
<script  src="{{asset('bootstrap/js/datatablebootstrap.js')}}"></script>
<script  src="{{asset('bootstrap/js/main.js')}}"></script>
<script  class="init">
       
   $(document).ready(function() {
       $('#example').DataTable();
   } );
   
       </script>
<script src="{{asset('bootstrap/js/form-validation.js')}}"></script>
<script src="{{asset('bootstrap/main_test.js')}}"></script>

{{-- <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="bootstrap/js/datatable.js"></script>
<script type="text/javascript" src="bootstrap/js/datatablebootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/main.js"></script>
<script type="text/javascript" class="init">
       
   $(document).ready(function() {
       $('#example').DataTable();
   } );
   
       </script>
<script type="text/javascript" src="bootstrap/js/form-validation.js"></script>
<script type="text/javascript" src="bootstrap/main_test.js"></script> --}}

</body>
</html>