<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob 49, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title> اضافة درجات</title>

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
            <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-house-fill me-2" ></i>الريئسية</button>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="navbar-brand" href="rec_c_m">
            <button class="nav-link active" id="committee-tab" data-bs-toggle="tab" data-bs-target="#committee" type="button" role="tab" aria-controls="committee" aria-selected="false"><i class="bi bi-pencil-fill me-2" ></i>الرصد</button>
            </a>
          </li>
        </ul>
      </div>
    </div>
</nav> 


   <!-- Tab panes  محتويات الشريط العلوي-->
<div class="container-fluid body-tab">
        <div class="card-group "> 
          <div class="row">
            <div class="col-md-9" style="width: 15rem;">
               <section class="card " >
                  <div class="card-header bg-info ">
                   <h4 class="card-title text-center"> السجل الجامعي للطلاب</h4>
                  </div>
                    <div class="card-body " >
                      
                     <form class="row  needs-validation" novalidate>
                      <div class="row justify-content-center align-center">
                        <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">القسم</label>
                        <select class="form-select" id="validationCustom01" style="width: 10rem;" required>
                          <option selected disabled value="">قسم ...</option>
                          <option>هندسة حاسوب</option>
                          <option>هندسة الالكترونية</option>
                          <option>هندسة معمارية</option>
                          <option>هندسة مدنية</option>
                          <option>هندسة بترولية</option>
                          <option>هندسة كيميائية</option>
                        </select>
                        <div class="invalid-feedback">
                         الرجاء اختيار القسم
                        </div>
                        </div>
                        <div class="col-md-12" >
                        <label for="validationCustom02" class="form-label">المستوى الدراسي</label>
                        <select class="form-select" id="validationCustom02" style="width: 10rem;" required>
                          <option selected disabled value="">المستوى ...</option>
                          <option>   الاول</option>
                          <option> الثاني</option>
                          <option> الثالث</option>
                          <option> الرابع</option>
                          <option> الخامس</option>
                        </select>
                        <div class="invalid-feedback">
                         الرجاء اختيار المستوى الدراسي
                        </div>
                        </div>
                        <div class="col-md-12" >
                          <label for="validationCustom02" class="form-label">المواد </label>
                          <select class="form-select" id="validationCustom02" style="width: 10rem;" required>
                            <option selected disabled value="">المادة...</option>
                            <option>1</option>
                            <option> 2</option>
                            <option> 3</option>
                            <option> 4</option>
                            <option> 5</option>
                            <option> 6</option>
                            <option> 7</option>
                          </select>
                          <div class="invalid-feedback">
                           الرجاء اختيار المادة 
                          </div>
                          </div>
                        
                      </div>
                        <hr class="my-4">
                            <div class="justify-content-center align-center">    
                              <button class="align-items-center btn btn-outline-info w-100 " type="submit">عرص </button>
                            </div>
                    </form> 
                     </div>
                     
                </section>
             </div>
             <div class="col-md-12  " style="width: 63rem;">
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
                       <div class="table-responsive">
                         <table id="filltertabless" class="table table-bordered table-hover  caption-top text-center dataTable" style="width: 100%; " aria-describedby="exampleinfo">
                             <thead class="table-light">
                               <tr>
                                <th style="width: 5px;">م</th>
                                <th style="width: 140px;">رقم القيد</th>
                                <th style="min-width: 100px;">الاسم</th>
                                <th style="width: 130px;">الامتحان النهائي</th>
                               </tr>
                             </thead>
                             <tbody>     
                                 <tr class="even">
                                     <td>1</td>
                                     <td class="sorting_1"> </td>
                                     <td></td>
                                     <td><input type="number" class="form-control  form-control-sm" id="floatingInputValue" placeholder="" value="number"></td>
                                     <!-- <td><span class="progress progress-bar bg-success" style="height: 24px;">ناجح</span></td> -->
                                 </tr>
                                 <tr class="odd">
                                    <td>2</td>
                                    <td class="sorting_1"> </td>
                                    <td></td>
                                    <td><input type="number" class="form-control form-control-sm" id="floatingInputValue" placeholder="" value="number"></td>
                                 </tr>
                                 <tr class="even">
                                   <td class="sorting_1">3</td>
                                   <td class="sorting_1"> </td>
                                   <td class="sorting_1"></td>
                                   <td class="sorting_1"><input type="number" class="form-control form-control-sm" id="floatingInputValue" placeholder="" value="number"></td>
                                 </tr>
                                 <tr class="odd">
                                   <td class="sorting_1">4</td>
                                   <td class="sorting_1"> </td>
                                   <td class="sorting_1"> </td>
                                   <td class="sorting_1"><input type="number" class="form-control form-control-sm" id="floatingInputValue" placeholder="" value="number"></td>
                                 </tr>
                                 <tr class="even">
                                    <td >5</td>
                                    <td class="sorting_1"> </td>
                                    <td></td>
                                    <td><input type="number" class="form-control form-control-sm" id="floatingInputValue" placeholder="" value="number"></td>
                                 </tr>
                             </tbody>
                          </table>
                       </div>
                          <!-- <hr class="my-4"> -->
                         <div class="justify-content-center text-center">    
                           <button class="align-items-center btn btn-outline-info w-50 " type="submit">حفظ </button>
                         </div>
                    </div>
                </div>
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

{{-- <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script> --}}
{{-- <script type="text/javascript" src="bootstrap/js/sweetalert2.all.min.js"></script> --}}
{{-- <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script> --}}
{{-- <script type="text/javascript" src="bootstrap/js/datatable.js"></script>
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