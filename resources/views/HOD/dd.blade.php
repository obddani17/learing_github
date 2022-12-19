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
    <div class="card-group "> 
      <div class="row mt-5">
        <div class="col-md-8" style="width: 18rem;">
          <h4 class="mb-3"> بيانات عضو هئية التدريس ...</h4>
          <form class="needs-validation" novalidate method="POST" action="{{route('addsubject')}}">
            @csrf
            <div class="row g-3">
              <div class="col-sm-6  ">
                <label for="firstName" class="form-label">بداية العام الجامعي</label>
                <input type="date" class="form-control" name="start_year" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال بداية العام الجامعي.
                </div>
              </div>
              {{-- <div class="col-md-12">
                <label for="firstName" class="form-label"> الاسم </label>
                <input type="text" class="form-control" name="teacher_name" id="firstName"  value="" placeholder="الاسم الرباعي" required>
                <div class="invalid-feedback">
                  يرجى إدخال الاسم الرباعي.
                </div>
              </div> --}}
              <div class="col-sm-6 ">
                <label for="lastName" class="form-label">نهاية العام  الجامعي</label>
                <input type="date" class="form-control" name="finsh_year" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  يرجى إدخال نهاية العام الجامعي.
                </div>
              </div>
  
              {{-- <div class="col-md-6">
                <label for="state" class="form-label">المؤهل التعليمي</label>
                <select class="form-select" name="tea_qualification" id="state" required>
                  <option selected disabled value="">المؤهل ...</option>
                    <option value="بروفيسور">بروفيسور </option>
                    <option value="دكتوراه">دكتوراه </option>
                    <option value="ماجستير">ماجستير </option>
                    <option value="بكالوريوس">بكالوريوس </option>
                </select>
                <div class="invalid-feedback">
                  يرجى اختيار المؤهل.
                </div>
              </div> --}}
              
              {{-- <div class="col-md-6">
                <label for="state" class="form-label">الوظيفة الفرعية</label>
                <select class="form-select" id="state" required>
                  <option selected disabled value="">الوظيفة ...</option>
                    <option>عميد الكلية</option>
                    <option>رئيس قسم</option>
                    <option>عضو رصد</option>
                </select>
                <div class="invalid-feedback">
                  يرجى اختيار الوظيفة.
                </div>
              </div> --}}
              <div class="col-sm-6">
                <label for="firstName" class="form-label">اسم المادة </label>
                <input type="text" class="form-control" name="subject_name" id="firstName"  value="" placeholder="اسم المادة" required>
                <div class="invalid-feedback">
                  يرجى إدخال الاسم المادة
                </div>
              </div>
              
              {{-- <div class="col-md-6">
                <label for="state" class="form-label">رقم التواصل </label>
                <input type="number" class="form-control" name="tea_number" id="firstName"  value="" placeholder="رقم التواصل " required>
                <div class="invalid-feedback">
                  يرجى ادخال رقم التواصل .
                </div>
              </div> --}}
              <div class="col-md-6">
                <label for="state" class="form-label">المستوي</label>
                <select class="form-select" name="level" id="state" required>
                  <option selected disabled value="">اختر...</option>
                  <option value="اول">اول</option>
                  <option value="الثاني">الثاني</option>
                  <option value="الثالث">الثالث</option>
                  <option value="الرابع">الرابع</option>
                  <option value="الخامس">الخامس</option>
                </select>
                <div class="invalid-feedback">
                  يرجى اختيار المستوي .
                </div>
              </div>
              
              {{-- <div class="col-md-4 ">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" name="dep_id1" id="flexcheckDefault">
                  <label class="form-check-label" for="flexcheckDefault">  حاسوب</label>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="2" name="dep_id2" id="flexcheckce">
                  <label class="form-check-label" for="flexcheckce">  الكتروني</label>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="3" name="dep_id3" id="flexcheckDe">
                  <label class="form-check-label" for="flexcheckDe">  مدني</label>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="4" name="dep_id4" id="flexcheckDc">
                  <label class="form-check-label" for="flexcheckDc">  معماري</label>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="5" name="dep_id5" id="flexcheckDef">
                  <label class="form-check-label" for="flexcheckDef">  بترولي</label>
                </div>
              </div>
              <div class="col-md-4 "> --}}
                {{-- <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="6" name="dep_id6" id="flexcheckDefa">
                  <label class="form-check-label" for="flexcheckDefa">  كيميائي</label>
                </div>
              </div> --}}
              <div class="col-md-6">
                <label for="state" class="form-label">الدرجة الكلية</label>
                <input type="number" class="form-control" name="total_result" id="firstName"  value="" placeholder=" الدرجة الكلية " required>
                <div class="invalid-feedback">
                  يرجى ادخال الدرجة الكلية .
                </div>
              </div>

              {{-- <div class="col-md-12">
                <label for="validationCustomUsername" class="form-label">الايميل</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="email" class="form-control" name="tea_email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    يرجى ادخال الايميل.
                  </div>
                </div>
              </div> --}}
              <div class="col-md-6">
                <label for="state" class="form-label">الفصل</label>
                <select class="form-select" name="term" id="state" required>
                  <option selected disabled value="">اختر...</option>
                  <option value="1">اول</option>
                  <option value="2">الثاني</option>
                </select>
                <div class="invalid-feedback">
                  يرجى اختيار الفصل .
                </div>
              </div>


              <div class="col-md-6">
                <label for="state" class="form-label">درجة الامتحان النهائي</label>
                <input type="number" class="form-control" name="final_result" id="firstName"  value="" placeholder=" درجة الامتحان النهائي " required>
                <div class="invalid-feedback">
                  يرجى ادخال رقم القيد .
                </div>
              </div>


              <div class="col-md-6">
                <label for="state" class="form-label">عدد الساعات </label>
                <input type="number" class="form-control" name="times" id="firstName"  value="" placeholder="  عدد الساعات " required>
                <div class="invalid-feedback">
                  يرجى ادخال عدد الساعات .
                </div>
              </div>


              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check_boxs" value="2" id="flexCheckChecked" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" >
                <label class="form-check-label" for="flexCheckChecked">
                   الجانب العملي
                </label>
              </div>
  
              
            </div>
            {{-- @if ($errors->any())
            <div class="alert">
              <ul>
                @foreach ($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
              </ul>
          </div>                      
          @endif --}}
  
            <hr class="my-3">
  
            <button class="w-100 btn btn-primary btn-lg" onclick="saved()" type="submit">حفظ</button>
          </form>
          
        </div>
         <div class="col-md-12  " style="width: 58rem;">
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
                     <table id="filltertabless" class="table table-bordered table-hover  caption-top textcenter dataTable" style="width: 100%; " aria-describedby="exampleinfo">
                         <thead class="table-light">
                           <tr>
                            <th style="width: 5px;">م</th>
                            <!-- <th style="min-width: 100px;">الاسم</th> -->
                            <th style="width: 200px;">الاسم</th>
                            <th style="width: 120px;">المؤهل التعليمي</th>
                            {{-- <th style="width: 120px;"> القسم </th> --}}
                            <th style="width: 120px;">  الايميل</th>
                            <th style="width: 90px;">  رقم التواصل</th>
                           </tr>
                         </thead>
                         <tbody>
                           @if (isset($addteachers) && $addteachers -> count() > 0)
                           
                           
                               
                           @foreach ($addteachers as $addteacher)
                           
                           <tr class="even">
                             <td>{{++$d;}}</td>
                             <td class="sorting_1">{{$addteacher->tea_name}} </td>
                             <td> {{$addteacher->qualification}}</td>
                             <!-- <td></td> -->
                             {{-- @foreach ($addteacher->departments as $addteache)
                                 {{-- {{$d++;}} --}}
                             {{-- @endforeach --}} 
                             {{-- @foreach ($addteacher->departments as $addteache)
                             
                             <td rowspan="" >{{$addteache->id}}</td>
                             <td rowspan="" >{{$addteache->dep_name}}</td>
                             @endforeach --}}
                             <td>{{$addteacher->email}}</td>
                             <td>{{$addteacher->number}}</td>
                             <!-- <td><span class="progress progress-bar bg-success" style="height: 24px;">ناجح</span></td> -->
                            </tr>
                            @endforeach      
                            @endif
                         </tbody>
                      </table>
                   </div>
                     {{-- <div class="justify-content-center text-center">    
                       <button class="align-items-center btn btn-outline-info w-50 " onclick="saved()" type="submit">حفظ </button>
                     </div> --}}
                </div>
            </div>
         </div>
      </div>  
    </div>
   <!-- Tab panes  محتويات الشريط العلوي-->
{{-- <div class="container-fluid body-tab">
  
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
                        <option value="اول">اول</option>
                        <option value="ثاني">الثاني</option>
                        <option value="ثالث">الثالث</option>
                        <option value="رابع">الرابع</option>
                        <option value="خامس">الخامس</option>
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
                       <div class="table-responsive">
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

</div> --}}

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