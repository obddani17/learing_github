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
    <link type="text/css" rel="stylesheet" href="bootstrap/style.css"  >

    
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
             <button class="nav-link active" id="home-tab" data-bs-toggle="tab" ><i class="bi bi-person-fill me-2" ></i>الاستاذ</button>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="navbar-brand" href="ss">
             <button class="nav-link" id="student-tab" data-bs-toggle="tab" ><i class="bi bi-person-workspace me-2" ></i>طلاب</button>
            </a>
          </li>
        
        </ul>
      </div>
    </div>
</nav> 


   <!-- Tab panes  محتويات الشريط العلوي-->
<div class="container-fluid body-tab">
  <div class="tab-content">
      <div class="tab-pane  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
         <!-- Nav tabs -->
          <ul class="nav nav-tabs navbar-fav bg-fav " id="myTab" role="tablist" style="margin-top:-40px ;">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="add-teacher-tab" data-bs-toggle="tab" data-bs-target="#add-teacher" type="button" role="tab" aria-controls="home" aria-selected="true"> عضو تدريس</button>
            </li>
            {{-- <li class="nav-item" role="presentation">
              <button class="nav-link" id="add-comittee-tab" data-bs-toggle="tab" data-bs-target="#add-comittee" type="button" role="tab" aria-controls="add-comittee" aria-selected="false">لجنة رصد</button>
            </li> --}}
          </ul>

<!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="add-teacher" role="tabpanel" aria-labelledby="add-teacher-tab">
            
            <div class="card-group "> 
              <div class="row mt-5">
                <div class="col-md-8" style="width: 18rem;">
                  <h4 class="mb-3"> بيانات عضو هئية التدريس ...</h4>
                  <form class="needs-validation" novalidate method="POST" action="{{route('addteacher')}}">
                    @csrf
                    <div class="row g-3">
                      <div class="col-md-12">
                        <label for="firstName" class="form-label"> الاسم </label>
                        <input type="text" class="form-control" name="teacher_name" id="firstName"  value="" placeholder="الاسم الرباعي" required>
                        <div class="invalid-feedback">
                          يرجى إدخال الاسم الرباعي.
                        </div>
                      </div>
          
                      <div class="col-md-6">
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
                      </div>
                      
                      
                      
                      <div class="col-md-6">
                        <label for="state" class="form-label">رقم التواصل </label>
                        <input type="number" class="form-control" name="tea_number" id="firstName"  value="" placeholder="رقم التواصل " required>
                        <div class="invalid-feedback">
                          يرجى ادخال رقم التواصل .
                        </div>
                      </div>
                      
                      <div class="col-md-4 ">
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
                      <div class="col-md-4 ">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="6" name="dep_id6" id="flexcheckDefa">
                          <label class="form-check-label" for="flexcheckDefa">  كيميائي</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="validationCustomUsername" class="form-label">الايميل</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="email" class="form-control" name="tea_email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                          <div class="invalid-feedback">
                            يرجى ادخال الايميل.
                          </div>
                        </div>
                      </div>

          
                      
                    </div>
                    
          
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
                           <div class="table-responsive" style="height: 300px; overflow-y:auto; overflow-x:auto">
                             <table id="filltertabless" class="table table-bordered table-hover  caption-top textcenter dataTable" style="width: 100%; " aria-describedby="exampleinfo">
                                 <thead class="table-light">
                                   <tr>
                                    <th style="width: 5px;">م</th>
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

          </div>

          {{-- <div class="tab-pane" id="add-comittee" role="tabpanel" aria-labelledby="add-comittee-tab">
            <div class="col-md-12 mt-5 " >
              <div class="col-md-12 main-datatable">
                  <div class="card-body" >
                     <div class="row d-flex mt-5" >
                         <div class="col-sm-4 createSegment">
                             <a class="btn dim_button creat_new" ><span class="bi bi-plus" data-bs-toggle="modal" data-bs-target="#exampleModal">اضافة عضو </span></a>
                         </div>
                         <div class="col-sm-8 d_flex">
                             <div class="form-group searchInput">
                                 <label for="email"> البحث</label>
                                 <input type="search" class="form-control" id="filterboxss" placeholder=""   aria-label="Search">
                             </div>
                         </div>
                     </div>
                     <div class="table-responsive">
                       <table id="filltertabless" class="table  table-bordered table-hover  caption-top textcenter dataTable " style="width: 100%;" aria-describedby="exampleinfo">
                           <thead class="table-light">
                             <tr>
                               <th style="width: 5px;">م</th>
                               <th style="min-width: 100px;">الاسم</th>
                               <th style="min-width: 10px;">الايميل</th>
                             </tr>
                           </thead>
                           <tbody>     
                               <tr class="even">
                                   <td>1</td>
                                   <td> </td>
                                   <td></td>
                                   <!-- <td><span class="progress progress-bar bg-success" style="height: 24px;">ناجح</span></td> -->
                               </tr>
                               <tr class="odd">
                                  <td>2</td>
                                  <td></td>
                                  <td></td>
                               </tr>
                               <tr class="even">
                                 <td class="sorting_1">3</td>
                                 <td class="sorting_1"> </td>
                                 <td class="sorting_1"></td>
                               </tr>
                               <tr class="odd">
                                 <td class="sorting_1">4</td>
                                 <td class="sorting_1"> </td>
                                 <td class="sorting_1"></td>
                               </tr>
                               <tr class="even">
                                  <td >5</td>
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
                         <h5 class="modal-title" id="exampleModalLabel">اضافة عضو رصد </h5>
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

                           <div class="col-md-12">
                            <label for="email" class="form-label"> الايميل </label>
                            <input type="email" class="form-control" id="email"  value="" placeholder="الايميل " required>
                            <div class="invalid-feedback">
                              يرجى إدخال الايميل .
                            </div>
                          </div>
                       </div>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الالغاء</button>
                         <button type="button" onclick="add()" class="btn btn-primary">اضافة </button>
                       </div>
                     </div>
                   </div>
                 </div> 
           </div>
          </div> --}}
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
<script type="text/javascript" src="bootstrap/main_test.js"></script>
 --}}

</body>
</html>