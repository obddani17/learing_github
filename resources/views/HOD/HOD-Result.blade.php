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
                <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-house-fill me-2" ></i>الريئسية</button>
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
              <button class="nav-link active" id="results-tab" data-bs-toggle="tab" data-bs-target="#results" type="button" role="tab" aria-controls="results" aria-selected="false"><i class="bi bi-table me-2" ></i>النتائج</button>
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
        <div class="col-md-12  " >
          <div class="col-md-12 main-datatable">
              <div class="card-body" >
                 <div class="row d-flex" >
                     
                     <div class="col-sm-8 d_flex">
                         <div class="form-group searchInput">
                             <label for="email"> البحث</label>
                             <input type="search" class="form-control" id="filterboxss" placeholder=""   aria-label="Search">
                         </div>
                     </div>
                 </div>
                 <div class="table-responsive-lg pe-6"  style="height: 300px; overflow-y:auto; overflow-x:auto">
                  <table class="table  table-bordered table-hover  caption-top pe-3 "  id="example">
                   <caption class="fontmonospace">
                     <div class="row">
                       <form action="">
                         <div class="col-md-3">
                           <label for="validationCustom05" class="form-label">المستوي</label>
                           <div class="input-group has-validation">
                                <select class="form-select" id="validationCustom05" required>
                                     <option value="" selected disabled >اختر المستوي الدراسي...</option>
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
                     </div>
                   </caption>
                 <thead class="table-light"  >
                          <tr >
                            <!-- <th > م</th>
                            <th >رقم القيد</th>
                            <th >اسم الطالب </th> -->
                            <th  class=" text-center" style="min-width: 5px;"> م</th>
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
                               <!-- <td class="text-center">#</td> -->
                               <!-- <td class="text-center">#</td> -->
                               <td class="text-center">#</td>
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
                               <td>1</td>
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
                               <td>2</td>
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
                              <td>3</td>
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
                              <td>5</td>
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
                            <td>6</td>
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
                            <td>7</td>
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
          </div>

             <!-- Modal -->
             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">اضافة  معلم </h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">
                       <div class="col-md-12">
                         <label for="firstName" class="form-label"> الاسم </label>
                         <input type="text" class="form-control" id="firstName"  value="" placeholder="الاسم الرباعي" required>
                         <div class="invalid-feedback">
                           يرجى إدخال الاسم الرباعي.
                         </div>
                       </div>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الالغاء</button>
                     <button type="button" class="btn btn-primary">حفظ </button>
                   </div>
                 </div>
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
<script type="text/javascript" src="bootstrap/main_test.js"></script> --}}

</body>
</html>