<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob 49, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title>رئيس القسم</title>

    <link href="{{ asset('bootstrap/css/bootstrap.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}"  rel="stylesheet" >
    <link href="{{ asset('bootstrap/css/main.css') }}"  rel="stylesheet">
    <link href="{{ asset('bootstrap/style.css') }}"  rel="stylesheet" >

    {{-- <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.rtl.css">
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css"  >
    <link type="text/css" rel="stylesheet" href="bootstrap/css/main.css"  >
    <link type="text/css" rel="stylesheet" href="bootstrap/style.css"  > --}}

    
    <!-- <script type="text/javascript" src="bootstrap/js/helpers.js"></script>
    <script type="text/javascript" src="bootstrap/js/template-customizer.js"></script>
    <script type="text/javascript" src="bootstrap/js/config.js"></script> -->

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
            <a class="navbar-brand" href="hod">
            <button class="nav-link show active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-house-fill me-2" ></i>الريئسية</button>
          </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="navbar-brand" href="hod_a_t">
            <button class="nav-link " id="teacher-tab" data-bs-toggle="tab" data-bs-target="#teacher" type="button" role="tab" aria-controls="teacher" aria-selected="false"><i class="bi bi-person-square me-2" ></i>المعلم</button>
          </a>
          </li>

          <li class="nav-item" role="presentation">
            <a class="navbar-brand" href="hod_a_su">
                <button class="nav-link " id="subj-tab" data-bs-toggle="tab" data-bs-target="#subj" type="button" role="tab" aria-controls="subj" aria-selected="true"><i class="bi bi-book-fill me-2" ></i>المنهج</button>
          </a>
          </li>

        <li class="nav-item" role="presentation">
          <a class="navbar-brand" href="hod_r">
          <button class="nav-link" id="results-tab" data-bs-toggle="tab" data-bs-target="#results" type="button" role="tab" aria-controls="results" aria-selected="false"><i class="bi bi-table me-2" ></i>النتائج</button>
          </a>
        </li>  
          </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="البحث عن ..." aria-label="Search">
          <button class="btn btn-outline-success" type="submit">بحث</button>
        </form>
      </div>
    </div>
</nav> 


   <!-- Tab panes  محتويات الشريط العلوي-->
<div class="container-fluid body-tab">
        <div class="card-group">
          <!-- <canvas id="myChart" style="width:100%;max-width:700px; "></canvas> -->
        <!-- </div> -->
        <div class="row">
        
          <div class="col-md-6 ">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">التقرير بالقسم</h3>
                </div>
              </div>
              <div class="card-body">
               
  
                <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas id="bad" height="500" style="display: block; width: 600px; height: 200px;" width="900" class="chartjs-render-monitor"></canvas>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-6 ">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">تقرير المستويات</h3>
                </div>
              </div>
              <div class="card-body">
  
                <!-- <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div> -->
                  <canvas id="chBar" height="600" style="display: block; width: 600px; height: 200px;" width="1000" class="chartjs-render-monitor"></canvas>
                <!-- </div> -->
  
                
              </div>
            </div>
            <!-- /.card -->
          </div>


        </div>
      </div>
      
</div>

<script  src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
<script  src="{{asset('bootstrap/js/sweetalert2.all.min.js')}}"></script>
<script  src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
{{-- <script  src="{{asset('bootstrap/js/datatable.js')}}"></script> --}}
<script  src="{{asset('bootstrap/js/datatablebootstrap.js')}}"></script>
<script  src="{{asset('bootstrap/js/main.js')}}"></script>
<script  class="init">
       
   $(document).ready(function() {
       $('#example').DataTable();
   } );
   
       </script>
<script src="{{asset('bootstrap/js/form-validation.js')}}"></script>
<script src="{{asset('bootstrap/main_test.js')}}"></script>
<script src="{{asset('bootstrap/js/chart.js')}}"></script>

{{-- <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script type="text/javascript" src="bootstrap/js/datatable.js"></script> -->
<script type="text/javascript" src="bootstrap/js/datatablebootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/main.js"></script>
<script type="text/javascript" class="init">
       
   $(document).ready(function() {
       $('#example').DataTable();
   } );
   
       </script>
<script type="text/javascript" src="bootstrap/js/form-validation.js"></script>
<script type="text/javascript" src="bootstrap/main_test.js"></script>
<script type="text/javascript" src="bootstrap/js/chart.js"></script> --}}

  <script>
var chartData = {
  labels: ["مستوى أول", "مستوى ثاني", "مستوى ثالث", "مستوى رابع", "مستوى خامس"],
  datasets: [{
    backgroundColor: "green",
    label: 'نسبة النجاح',  
    data: [80, 70, 85, 78, 90]
  },
  {
    backgroundColor: "red",
    label: 'نسبة الرسوب',
    data: [20, 25, 15, 22, 10],
  }]
};
  var chBar = document.getElementById("chBar");
if (chBar) {
  new Chart(chBar, {
  type: 'bar',
  data: chartData,
  options: {
    scales: {
      xAxes: [{
        staced:true,
        barPercentage: 0.6,
        categoryPercentage: 0.5
      }],
      yAxes: [{
        // stacked:true,
        // max:100,
        ticks: {
           
          beginAtZero: true,
          // stacked:true
        }
      }]
    },
    legend: {
      // labels:["ggg","dd"],
      display: true
    }
  }
  });
}
  </script>

<script>
  var xValues = ["نسبة النجاح","نسبة الرسوب "];
  var yValues = [80,                20];
  var barColors = ["green", "red"];
  
new Chart("bad", {
 
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "التقرير النهائي بالقسم لسنة 2022 "
    }
  }
})
  </script>

</body>
</html>