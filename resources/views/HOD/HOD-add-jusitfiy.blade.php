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
              <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" ><i class="bi bi-clipboard2-plus-fill me-2" ></i>اضافة مادة</button>
             </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="navbar-brand" href="hod_a_j">
              <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="bi bi-clipboard2-check-fill me-2" ></i>  تنسيق المواد</button>
              </a>
            </li>
          </ul>
          <div class="container">
            <main>
              <div class="py-2 text-center">
                <h2>  تنسيق المواد بالهيئة التدريسية</h2>
              </div>
          
              <div class="row g-3" >
                <div class="col-md-7 col-lg-8 pt-4 order-md-last">
                <ul class="list-group mb-3">
                    <div class="table-responsive" style="height: 300px; overflow-y:auto; overflow-x:auto">
                  <table class="table table-bordered table-hover  caption-top text-center bg-white">
                    <!-- <caption>قائمة المقررات </caption> -->
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم الدكتور</th>
                        <th scope="col"> اسم المعيد</th>
                        <th scope="col">المادة</th>
                        <th scope="col">المستوي</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if (isset($posthodsubject_teacher) && $posthodsubject_teacher -> count() > 0)
                        @foreach ($posthodsubject_teacher as $posthodsubject_teache)
                          @if ($posthodsubject_teache->practical_box == 1)
                          
                            @foreach ($posthodsubject_teache->teachers as $item)
                          
                              @if (isset($item))
                          
                                <tr>
                                <td>{{++$d;}}</td>
                                @foreach ($posthodsubject_teache->teachers as $addteache)
                                  <td>{{$addteache->tea_name}}</td>
                                @endforeach
                                <td>---------</td>
                                <td>{{$posthodsubject_teache->sub_name}} </td>
                                <td>{{$posthodsubject_teache->level}}</td>
                                </tr>
                                @break
                         
                              @endif
                        
                            @endforeach
                          @else
                            @foreach ($posthodsubject_teache->teachers as $item)
                          
                              @if (isset($item))
                                @foreach ($posthod_checkk_subject_teacher as $table)
                                  @if ($item->id == $table->teacher_id && $table->subject_id == $posthodsubject_teache->id && $table->subject_type == 1)
                                  
                                    <tr>
                                    <td>{{++$d;}}</td>
                                    @foreach ($posthodsubject_teache->teachers as $addteache)
                                    
                                      <td>{{$addteache->tea_name}}</td>
                                      
                                    @endforeach
                                    @if (count($posthodsubject_teache->teachers) == 1)
                                        
                                    <td></td>
                                    @endif
                                    <td>{{$posthodsubject_teache->sub_name}} </td>
                                    <td>{{$posthodsubject_teache->level}}</td>
                                    </tr>
                                    @break
                                  @elseif($item->id == $table->teacher_id && $table->subject_id == $posthodsubject_teache->id && $table->subject_type == 2)
                                    
                                    <tr>
                                    <td>{{++$d;}}</td>
                                    
                                    @foreach ($posthodsubject_teache->teachers as $addteache)
                                      <td>{{$addteache->tea_name}}</td>
                                    @endforeach
                                    
                                    <td>{{$posthodsubject_teache->sub_name}} </td>
                                    <td>{{$posthodsubject_teache->level}}</td>
                                    </tr>
                                  @endif
                                @endforeach
                                    
                                    
                      
                                @break
                     
                          @endif
                    
                        @endforeach
                      @endif
                      {{-- @foreach ($posthod_checkk_subject_teacher as $posthod_checkk_subject_teache)
                          @if ($posthodsubject_teache->id)
                              
                          @endif
                      @endforeach --}}
                       @endforeach 
                       @endif
                      
                    </tbody>
                  </table>
                    </div>
                </ul>
          
                </div> 
                <!--  -->
                <div class="col-md-5 col-lg-4">
                  <form class="needs-validation" method="POST" action="{{route('addsubject_teacher')}}" novalidate>
                    @csrf
                    <div class="row g-3">
                      <div class="col-sm-12">
                        <label for="firstName" class="form-label"> اسم الدكتور  </label>
                        <input type="search" class="form-control" id="firstName" name="teacher_name"  value="" placeholder="الاسم الرباعي" required>
                        <div class="invalid-feedback">
                          يرجى إدخال الاسم الرباعي.
                        </div>
                      </div>
          
                      <div class="col-md-6">
                        <label for="state" class="form-label">نوع المادة</label>
                        <select class="form-select" name="type_sub" id="state" required>
                          <option selected disabled value="">اختر...</option>
                          <option value="1">نظري</option>
                          <option value="2">عملي</option>
                        </select>
                        <div class="invalid-feedback">
                          يرجى اختيار النوع .
                        </div>
                      </div>
          
                      <div class="col-sm-6">
                        <label for="firstName" class="form-label"> اسم المادة  </label>
                        <input type="search" class="form-control" name="subject_name" id="firstName"  value="" placeholder="اسم المادة" required>
                        <div class="invalid-feedback">
                          يرجى إدخال اسم المادة
                        </div>
                      </div>
          
                      <div class="col-sm-6">
                        <label for="firstName" class="form-label"> الدرجة   </label>
                        <input type="number" class="form-control" id="firstName" name="markes"  value="" placeholder=" الدرجة" required>
                        <div class="invalid-feedback">
                          يرجى إدخال الدرجة 
                        </div>
                      </div>
                    </div>
                    <hr class="my-3">
          
                    <button class="w-100 btn btn-primary btn-lg" onclick="saved()"  type="submit">حفظ</button>
                  </form>
                </div>
              </div>
            </main>
          </div>
            

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