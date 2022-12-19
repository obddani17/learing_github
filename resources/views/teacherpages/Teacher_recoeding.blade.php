<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob 49, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title>رصد درجات</title>

    <link href="{{ asset('bootstrap/css/bootstrap.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}"  rel="stylesheet" >
    <link href="{{ asset('bootstrap/css/main.css') }}"  rel="stylesheet">
    <link href="{{ asset('bootstrap/style.css') }}"  rel="stylesheet" >
    
    {{-- <script src="{{asset('bootstrap/js/helpers.js')}}"></script>
    <script src="{{asset('bootstrap/js/template-customizer.js')}}"></script>
    <script src="{{asset('bootstrap/js/config.js')}}"></script> --}}

    {{-- <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.rtl.css">
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css"  >
    <link type="text/css" rel="stylesheet" href="bootstrap/css/main.css"  >
    <link type="text/css" rel="stylesheet" href="bootstrap/style.css"  > --}}

</head>

<body class="bg-light">
      
<nav class="navbar navbar-expand-lg fixed-top navbar-fav bg-fav  p-1 ">
   <div class="container-fluid">
     <a class="navbar-brand" href="#"></a>
     <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav nav-tabs nav-fill " id="myTab" role="tablist">
         <li class="nav-item" role="presentation">
            <a class="navbar-brand" href="t">
              <button class="nav-link " id="home-tab" data-bs-toggle="tab"  aria-selected="true"><i class="bi bi-house-fill me-2" ></i>الريئسية</button>
           </a>
         </li>
         <li class="nav-item" role="presentation">
            <a class="navbar-brand" href="tr">
              <button class="nav-link active" id="Add-Marks-tab" data-bs-toggle="tab"  aria-selected="false"><i class="bi bi-pencil-square me-2" ></i>رصد درجات</button>
           </a>
         </li>
       </ul>
     </div>
   </div>
</nav> 

   <!-- content navbasr Tab panes  محتويات الشريط العلوي-->
<div class="container-fluid body-tab">
   <div class="tab-content">
     
     
     <div class="tab-pane show active" id="Add-Marks" role="tabpanel" aria-labelledby="Add-Marks-tab">
      <div class="card-group "> 
        <div class="row">
          <div class="col-md-9" style="width: 20rem;">
             <section class="card " >
                <div class="card-header bg-info ">
                 <h4 class="card-title text-center"> السجل الجامعي للطلاب</h4>
                </div>
                  <div class="card-body " >
                    
                   <form class="row  needs-validation" novalidate method="POST" action="{{route('getstudent')}}">
                     @csrf
                    <div class="row justify-content-center align-center">
                      <div class="col-md-12">
                      <label for="validationCustom01" class="form-label">القسم</label>
                      <select class="form-select" id="validationCustom01" name="dep_id" style="width: 10rem;" required>
                        <option selected disabled value="">قسم ...</option>
                        <option value="1">هندسة حاسوب</option>
                        <option value="2">هندسة الكترونية</option>
                        <option value="3">هندسة مدنية</option>
                        <option value="4">هندسة معمارية</option>
                        <option value="5">هندسة بترولية</option>
                        <option value="6">هندسة كيميائية</option>
                      </select>
                      <div class="invalid-feedback">
                       الرجاء اختيار القسم
                      </div>
                      </div>
                      <div class="col-md-12" >
                      <label for="validationCustom02" class="form-label">المستوى الدراسي</label>
                      <select class="form-select" id="validationCustom02" name="neme_level" style="width: 10rem;" required>
                        <option selected disabled value="">المستوى ...</option>
                        <option value="1">   الاول</option>
                        <option value="2"> الثاني</option>
                        <option value="3"> الثالث</option>
                        <option value="4"> الرابع</option>
                        <option value="5 "> الخامس</option>
                      </select>
                      <div class="invalid-feedback">
                       الرجاء اختيار المستوي الدراسي
                      </div>
                      </div>
                      {{-- <div class="col-sm-12">
                        <label for="firstName" class="form-label">اسم المادة </label>
                        <input type="search" class="form-control" name="subject_name" id="firstName"  value="" placeholder="اسم المادة" required>
                        <div class="invalid-feedback">
                          يرجى إدخال الاسم المادة
                        </div>
                      </div> --}}
                    </div>
                      <hr class="my-4">
                          <div class="justify-content-center align-center">    
                            <button class="align-items-center btn btn-outline-info w-100 " type="submit">عرص </button>
                          </div>
                  </form> 
                   </div>
                   
              </section>
           </div>
           <div class="col-md-12  " style="width: 60rem;">
              <div class="col-md-12 main-datatable">
                <form method="POST" action="{{route('postresult')}}">
                  @csrf
                  <div class="card-body" >
                     <div class="row d-flex" >
                      <div class="col-md-6 mb-4">
                        <label for="firstName" class="form-label">اسم المادة </label>
                        <input type="search" class="form-control" name="subject_name" id="firstName"  value="" placeholder="اسم المادة" required>
                        <div class="invalid-feedback">
                          يرجى إدخال الاسم المادة
                        </div>
                      </div>
                     </div>
                     <div class="table-responsive" >
                       <table id="filltertabless" class="table table-bordered table-hover  caption-top textcenter dataTable" style="width: 100%; " aria-describedby="exampleinfo">
                           <thead class="table-light">
                            <tr>
                              <th style="width: 30px;">م</th>
                              <th style="width: 140px;">رقم القيد</th>
                              <th style="min-width: 100px;">الاسم</th>
                              <th style="width: 150px;">اعمال الفصل</th>
                            </tr>
                           </thead>
                           <tbody>
                            @if (isset($get_teacher_to_suddent_controllers) && $get_teacher_to_suddent_controllers -> count() > 0)
                            @foreach ($get_teacher_to_suddent_controllers as $get_teacher_to_suddent_controller)
                                
                            <tr class="even">
                                <td>{{++$d;}}</td>
                                <input type="hidden" name="vv{{$d}}" value="{{$get_teacher_to_suddent_controller->id}}">
                                <td name='stud_id'>{{$get_teacher_to_suddent_controller->id}} </td>
                                <td> {{$get_teacher_to_suddent_controller->stud_name}}</td>
                                <td><input type="number" name="kk{{$d}}" class="form-control form-control-sm " id="floatingInputValue" placeholder="" value="number"></td>
                            </tr>
                            @endforeach 
                            @endif     
                               <tr class="even">
                                   <td>1</td>
                                   <td class="sorting_1"> </td>
                                   <td> </td>
                                   <td><input type="number"  class="form-control form-control-sm" id="floatingInputValue" placeholder="" ></td>
                                   {{-- <td><input type="number" name="kk[]" class="form-control form-control-sm" id="floatingInputValue" placeholder="" ></td> --}}
                                   <!-- <td><span class="progress progress-bar bg-success" style="height: 24px;">ناجح</span></td> -->
                               </tr>
                               <tr class="odd">
                                  <td>2</td>
                                  <td class="sorting_1"> </td>
                                  <td> </td>
                                  <td><input type="number" class="form-control form-control-sm " id="floatingInputValue" placeholder="" value="number"></td>
                               </tr>
                               <tr class="even">
                                 <td class="sorting_1">3</td>
                                 <td class="sorting_1"> </td>
                                 <td class="sorting_1"> </td>
                                 <td class="sorting_1"><input type="number" class="form-control form-control-sm " id="floatingInputValue" placeholder="" value="number"></td>
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
                                  <td> </td>
                                  <td><input type="number" class="form-control form-control-sm " id="floatingInputValue" placeholder="" value="number"></td>
                               </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="justify-content-center text-center">    
                      <button class="align-items-center btn btn-outline-info w-50 " onclick="saved()" type="submit">حفظ  </button>
                    </div>
                  </div>
                </form>
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