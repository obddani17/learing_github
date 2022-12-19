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
                    <button class="nav-link active" id="subj-tab" data-bs-toggle="tab" data-bs-target="#subj" type="button" role="tab" aria-controls="subj" aria-selected="true"><i class="bi bi-book-fill me-2" ></i>المنهج</button>
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
  <div class="tab-content">

    <div class="tab-pane fade show active" id="subj" role="tabpanel" aria-labelledby="subj-tab">

        <ul class="nav nav-tabs navbar-fav bg-fav fixed-top" id="myTab" role="tablist" style="margin-top:60px ;">
            <li class="nav-item" role="presentation">
                <a class="navbar-brand" href="hod_a_su">
              <button class="nav-link show active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" ><i class="bi bi-clipboard2-plus-fill me-2" ></i>اضافة مادة</button>
             </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="navbar-brand" href="hod_a_j">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="bi bi-clipboard2-check-fill me-2" ></i>  تنسيق المواد</button>
              </a>
            </li>
          </ul>
                {{-- <div class="container mt-4">
                    <main> --}}
                      <div class="row g-1">
                        <div class="col-lg-7 col-lg-9 order-md-last">
                          <h4 class="d-flex justify-content-between align-items-center mb-2">
                          </h4>
                        <ul class="list-group mb-3">
                            <div class="table-responsive" style="height: 300px; overflow-y:auto; overflow-x:auto">
                          <table class="table table-bordered table-hover  caption-top text-center bg-white mb-1">
                            <caption>قائمة المواد التعليمية </caption>
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">اسم المادة</th>
                                <th scope="col">  المستوي</th>
                                <th scope="col">درجة الكلية</th>
                                <th scope="col" colspan="2"> السنة الدراسية</th>
                                <!-- <th scope="col">درجة العملي</th> -->
                                <th scope="col">درجة الامتحان النهائي</th>
                                <th scope="col">عدد الساعات </th>
                                <th scope="col"  style="width: 42px">ممم </th>
                              </tr>
                            </thead>
                            <tbody>
                              
                              <tr>
                                <th scope="row">#</th>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                                <td>من</td>
                                <td>الي</td>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                              </tr>
                              @if (isset($posthodsubjects) && $posthodsubjects -> count() > 0)
                                   @foreach ($posthodsubjects as $posthodsubject)
                                   <tr>
                                     <td>{{++$d;}}</td>
                                     <td>{{$posthodsubject->sub_name}} </td>
                                     <td>{{$posthodsubject->level}}</td>
                                     <td>{{$posthodsubject->sub_total}}</td>
                                     <td>{{$posthodsubject->start_year}}</td>
                                     <td>{{$posthodsubject->end_year}}</td>
                                     <td>{{$posthodsubject->final}}</td>
                                     <td>{{$posthodsubject->sub_time}}</td>
                                     @if ($posthodsubject->practical_box==1)
                                     <th>نظري</th>
                                     @else
                                     <th>نظري+عملي</th>
                                     @endif
                                     
                                    </tr>
                                    @endforeach 
                                    @endif
                                <tr>
                                           
                              <th scope="row">1</th>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              </tr>
                              <tr>
                              <th scope="row">2</th>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              </tr>
                              <th scope="row">3</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <th scope="row">4</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                              <th scope="row">5</th>
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
                        </ul>
                  
                        </div> 
                        <!--  -->
                        <div class="col-md-4 col-lg-3">
                          <div class="card-group ">
                          <form class="needs-validation pt-3" method="post" action="{{route('addsubject')}}" novalidate>
                            @csrf
                            <div class="row g3">
          
                              <!-- <div class="row mt-3"> -->
                                <!-- <div class="row g-3"> -->
                                    <!-- <span class="mt">السنة التعليمية</span> -->
                                    <div class="col-sm-6  ">
                                      <label for="firstName" class="form-label">بداية العام الجامعي</label>
                                      <input type="date" class="form-control" name="start_year" id="firstName" placeholder="" value="" required>
                                      <div class="invalid-feedback">
                                        يرجى إدخال بداية العام الجامعي.
                                      </div>
                                    </div>
                        
                                    <div class="col-sm-6 ">
                                      <label for="lastName" class="form-label">نهاية العام  الجامعي</label>
                                      <input type="date" class="form-control" name="finsh_year" id="lastName" placeholder="" value="" required>
                                      <div class="invalid-feedback">
                                        يرجى إدخال نهاية العام الجامعي.
                                      </div>
                                    </div>
                                <!-- </div> -->
                                <!-- <div class="col-sm-8">
                                     <h4>السنة التعليمية</h4>
                                        <label for="year-tech" class="form-label">من  </label>
                                        <input type="date" class="form-control" id="year-tech"  value="" placeholder="" required>
                                        <label for="year-tech" class="form-label">الي  </label>
                                        <input type="date" class="form-control" id="year-tech"  value="" placeholder="" required>
                                     <div class="invalid-feedback">
                                       يرجى إدخال الاسم المادة
                                     </div>
                                 </div> -->
                              <!-- </div> -->
          
                              <div class="col-sm-6">
                                <label for="firstName" class="form-label">اسم المادة </label>
                                <input type="text" class="form-control" name="subject_name" id="firstName"  value="" placeholder="اسم المادة" required>
                                <div class="invalid-feedback">
                                  يرجى إدخال الاسم المادة
                                </div>
                              </div>
                              
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
          
                              <div class="col-md-6">
                                <label for="state" class="form-label">الدرجة الكلية</label>
                                <input type="number" class="form-control" name="total_result" id="firstName"  value="" placeholder=" الدرجة الكلية " required>
                                <div class="invalid-feedback">
                                  يرجى ادخال الدرجة الكلية .
                                </div>
                              </div>
          
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
          
                              <!-- <div class="collapse" id="collapseExample">
                                  <div class="col-md-6">
                                    <label for="state" class="form-label">درجة العملي </label>
                                    <input type="number" class="form-control" id="firstName"  value="" placeholder="  درجة العملي " >
                                  </div>
                              </div> -->
          
          
                            {{-- <hr class="my-3"> --}}
                  
                            <button class="w-100 btn btn-primary btn-lg" onclick="saved()" type="submit">حفظ</button>
                          </form>
                          </div>
                        </div>
                      </div>
                    {{-- </main>
                  </div> --}}
            

      </div>
  </div>
</div>

<script  src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
<script  src="{{asset('bootstrap/js/sweetalert2.all.min.js')}}"></script>
<script  src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
{{-- <script  src="{{asset('bootstrap/js/datatable.js')}}"></script> --}}
<script  src="{{asset('bootstrap/js/datatablebootstrap.js')}}"></script>
<script  src="{{asset('bootstrap/js/bootstrap-datepicker.js')}}"></script>
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
<script type="text/javascript" src="bootstrap/js/bootstrap-datepicker.js"></script>
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