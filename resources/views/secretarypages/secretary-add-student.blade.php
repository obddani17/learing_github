<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob 49, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title> سكرتير</title>

    <link href="{{ asset('bootstrap/css/bootstrap.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}"  rel="stylesheet" >
    <link href="{{ asset('bootstrap/css/main.css') }}"  rel="stylesheet">
    <link href="{{ asset('bootstrap/style.css') }}"  rel="stylesheet" >

    <script src="{{asset('bootstrap/js/helpers.js')}}"></script>
    <script src="{{asset('bootstrap/js/template-customizer.js')}}"></script>
    <script src="{{asset('bootstrap/js/config.js')}}"></script>


    {{-- <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.rtl.css">
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css"  >
    <link type="text/css" rel="stylesheet" href="bootstrap/css/main.css"  >
    <link type="text/css" rel="stylesheet" href="bootstrap/style.css"  > --}}

{{-- 
    <script type="text/javascript" src="bootstrap/js/helpers.js"></script>
    <script type="text/javascript" src="bootstrap/js/template-customizer.js"></script>
    <script type="text/javascript" src="bootstrap/js/config.js"></script> --}}

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
                <a class="navbar-brand" href="s">
                 <button class="nav-link " id="home-tab" data-bs-toggle="tab" ><i class="bi bi-person-fill me-2" ></i>الاستاذ</button>
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="navbar-brand" href="ss">
                 <button class="nav-link active" id="student-tab" data-bs-toggle="tab" ><i class="bi bi-person-workspace me-2" ></i>طلاب</button>
                </a>
              </li>
            </ul>
          </div>
        </div>
    </nav> 


   <!-- Tab panes  محتويات الشريط العلوي-->
<div class="container-fluid body-tab">
  
      <div class="tab-pane" id="student" role="tabpanel" aria-labelledby="student-tab">

        <div class="card-group "> 
          <div class="row">
            <div class="col-md-8 ms-1" style="width: 20rem;">
                <h4 class="mb-3">بيانات الطالب ...</h4>
                <form class="needs-validation" novalidate method="POST" action="{{route('addstudent')}}">
                  @csrf
                  <div class="row g-3">
                    <div class="col-md-12">
                      <label for="firstName" class="form-label"> اسم الطالب </label>
                      <input type="text" class="form-control" name="stud_name" id="firstName"  value="" placeholder="الاسم الرباعي" required>
                      <div class="invalid-feedback">
                        يرجى إدخال الاسم الرباعي.
                      </div>
                    </div>

                    <div class="col-md-12">
                      <label for="state" class="form-label">رقم القيد</label>
                      <input type="number" class="form-control" name="stud_id" id="firstName"  value="" placeholder="رقم القيد " required>
                      <div class="invalid-feedback">
                        يرجى ادخال رقم القيد .
                      </div>
                    </div>
        
                    <div class="col-md-6">
                      <label for="state" class="form-label">التخصص</label>
                      <select class="form-select" name="department_stud" id="state" required>
                        <option selected disabled value="">التخصص ...</option>
                          <option value="1" >هندسة حاسوب</option>
                          <option value="2" >هندسة الالكترونية</option>
                          <option value="3" >هندسة مدنية</option>
                          <option value="4" >هندسة معمارية</option>
                          <option value="5" >هندسة بترولية</option>
                          <option value="6" >هندسة كيميائية</option>
                      </select>
                      <div class="invalid-feedback">
                        يرجى اختيار التخصص.
                      </div>
                    </div>
        
                    <div class="col-md-6">
                      <label for="state" class="form-label">المستوى</label>
                      <select class="form-select" name="level_stud" id="state" required>
                        <option selected disabled value="">اختر...</option>
                        <option value="1">اول</option>
                        <option value="2">الثاني</option>
                        <option value="3">الثالث</option>
                        <option value="4">الرابع</option>
                        <option value="5">الخامس</option>
                      </select>
                      <div class="invalid-feedback">
                        يرجى اختيار المستوي .
                      </div>
                    </div>

                    <div class="col-md-12">
                      <label for="validationCustomUsername" class="form-label">الايميل</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" class="form-control" name="email_stud" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                          يرجى ادخال الايميل.
                        </div>
                      </div>
                    </div>
        
        
                   <hr class="my-3">
        
                    <button class="w-100 btn btn-primary btn-lg" name="addstudent" type="submit">اضافة</button>
                  </div>
                </form>
             </div>
             <div class="col-md-12  " style="width: 55rem;">
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
                       <div class="table-responsive" style="height: 300px; overflow-y:auto; overflow-x:auto">
                         <table id="filltertabless" class="table table-bordered table-hover  caption-top text-center dataTable" style="width: 100%; " aria-describedby="exampleinfo">
                             <thead class="table-light">
                               <tr>
                                <th style="min-width: 20px;">م</th>
                                <th style="min-width: 100px;">رقم القيد</th>
                                <th style="min-width: 100px;">الاسم</th>
                                <!-- <th style="min-width: 10x;"> رقم التلفون</th> -->
                                <th style="min-width: 10x;">  الايميل</th>
                                <th style="min-width: 10x;">  التخصص</th>
                                <th style="min-width: 10x;">  المستوي</th>
                               </tr>
                             </thead>
                             <tbody> 
                              @if (isset($addstudents) && $addstudents -> count() > 0)
                               @foreach ($addstudents as $addstudent)
                                   
                               <tr class="even">
                                   <td>{{++$d;}}</td>
                                   <td class="sorting_1">{{$addstudent->id}} </td>
                                   <td> {{$addstudent->stud_name}}</td>
                                   <td>{{$addstudent->email}}</td>
                                   <!-- <td></td> -->
                                   <td>{{$addstudent->departments->dep_name}}</td>
                                   <td>{{$addstudent->level}}</td>
                                   <!-- <td><span class="progress progress-bar bg-success" style="height: 24px;">ناجح</span></td> -->
                               </tr>
                               @endforeach 
                               @endif   
                             </tbody>
                          </table>
                       </div>
                          <!-- <hr class="my-4"> -->
                         {{-- <div class="justify-content-center text-center">    
                           <button class="align-items-center btn btn-outline-info w-50 " onclick="saved()" type="submit">حفظ </button>
                         </div> --}}
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