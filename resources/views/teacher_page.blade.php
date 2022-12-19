<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob 49, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title>المدرس</title>
    <link href="{{ asset('css/bootstrap.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}"  rel="stylesheet" >
    <link href="{{ asset('css/main.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/style.css') }}"  rel="stylesheet" >

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
           <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-house-fill me-2" ></i>الريئسية</button>
         </li>
         <li class="nav-item" role="presentation">
           <button class="nav-link showactive" id="Add-Marks-tab" data-bs-toggle="tab" data-bs-target="#Add-Marks" type="button" role="tab" aria-controls="Add-Marks" aria-selected="false"><i class="bi bi-pencil-square me-2" ></i>رصد درجات</button>
         </li>
       </ul>
     </div>
   </div>
</nav> 

   <!-- content navbasr Tab panes  محتويات الشريط العلوي-->
<div class="container-fluid body-tab">
   <div class="tab-content">
     
     <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="card-group "> 
          <div class="row">
            <div class="col-md-9" style="width: 15rem;">
               <section class="card " >
                  <div class="card-header bg-info ">
                   <h4 class="card-title text-center"> السجل الجامعي الطلاب</h4>
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
                        <label for="validationCustom02" class="form-label">المستوي الدراسي</label>
                        <select class="form-select" id="validationCustom02" style="width: 10rem;" required>
                          <option selected disabled value="">المستوي ...</option>
                          <option>   الاول</option>
                          <option> الثاني</option>
                          <option> الثالث</option>
                          <option> الرابع</option>
                          <option> الخامس</option>
                        </select>
                        <div class="invalid-feedback">
                         الرجاء اختيار المستوي الدراسي
                        </div>
                        </div>
                        <div class="col-md-12" >
                          <label for="validationCustom02" class="form-label">المادة :  </label>
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
                         <table id="filltertabless" class="table  table-bordered table-hover  caption-top textcenter dataTable " style="width: 100%;" aria-describedby="exampleinfo">
                             <thead class="table-light">
                               <tr>
                                 <th style="width: 30px;">م</th>
                                 <th style="width: 140px;">رقم القيد</th>
                                 <th style="min-width: 100px;">الاسم</th>
                                 <th style="width: 100px;">اعمال الفصل</th>
                                 <th style="width: 10px;">تعديل </th>
                               </tr>
                             </thead>
                             <tbody>     
                                 <tr class="even">
                                     <td>1</td>
                                     <td class="sorting_1"> 17020304345 </td>
                                     <td>نوح سالم مبارك سعيد باخلعه</td>
                                     <td>46</td>
                                     <td><i class="dropdown_icon bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#staticBackdrop" ></i></td>
                                 </tr>
                                 <tr class="odd">
                                    <td>2</td>
                                    <td class="sorting_1"> </td>
                                    <td></td>
                                    <td></td>
                                    <td><i class="dropdown_icon bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i></td>
                                 </tr>
                                 <tr class="even">
                                   <td class="sorting_1">5</td>
                                   <td class="sorting_1"> </td>
                                   <td class="sorting_1"> </td>
                                   <td class="sorting_1"></td>
                                   <td class="sorting_1"><i class="dropdown_icon bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i></td>
                                 </tr>
                                 <tr class="odd">
                                   <td class="sorting_1">4</td>
                                   <td class="sorting_1"> </td>
                                   <td class="sorting_1"> </td>
                                   <td class="sorting_1"></td>
                                   <td class="sorting_1"><i class="dropdown_icon bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i></td>
                                 </tr>
                                 <tr class="even">
                                    <td >5</td>
                                    <td class="sorting_1"> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td><i class="dropdown_icon bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#staticBackdrop" ></i> </td>
                                 </tr>
                             </tbody>
                          </table>
                       </div>
                       <div class="justify-content-center text-center">    
                        <button class="align-items-center btn btn-outline-info w-50 " type="submit">نشر  </button>
                      </div>
                    </div>
                </div>
             </div>
          </div>  
        </div> 
        <!-- modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> تعديل</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group row">
                    <label for="staticName" class="col-sm-3 col-form-label">اسم الطالب :</label>
                    <div class="col-sm-8">
                      <input type="text" readonly class="form-control-plaintext " id="staticName" value="نوح سالم مبارك سعيد باخلعه">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="staticNumber" class="col-sm-3 col-form-label">رقم الفيد : </label>
                    <div class="col-sm-8">
                      <input type="number" readonly class="form-control-plaintext" id="staticNumber" value="17020304345">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputNumber" class="col-sm-3 col-form-label" >اعمال الفصل : </label>
                    <div class="col-sm-3">
                      <input type="number" class="form-control" id="inputNumber" value="46">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success">حفظ </button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
              </div>
            </div>
          </div>
        </div>
     </div>
     <div class="tab-pane showactive" id="Add-Marks" role="tabpanel" aria-labelledby="Add-Marks-tab">
      <div class="card-group "> 
        <div class="row">
          <div class="col-md-9" style="width: 15rem;">
             <section class="card " >
                <div class="card-header bg-info ">
                 <h4 class="card-title text-center"> السجل الجامعي الطلاب</h4>
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
                      <label for="validationCustom02" class="form-label">المستوي الدراسي</label>
                      <select class="form-select" id="validationCustom02" style="width: 10rem;" required>
                        <option selected disabled value="">المستوي ...</option>
                        <option>   الاول</option>
                        <option> الثاني</option>
                        <option> الثالث</option>
                        <option> الرابع</option>
                        <option> الخامس</option>
                      </select>
                      <div class="invalid-feedback">
                       الرجاء اختيار المستوي الدراسي
                      </div>
                      </div>
                      <div class="col-md-12" >
                        <label for="validationCustom02" class="form-label">المادة :  </label>
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
                       <table id="filltertabless" class="table table-bordered table-hover  caption-top textcenter dataTable" style="width: 100%; " aria-describedby="exampleinfo">
                           <thead class="table-light">
                            <tr>
                              <th style="width: 30px;">م</th>
                              <th style="width: 140px;">رقم القيد</th>
                              <th style="min-width: 100px;">الاسم</th>
                              <th style="width: 100px;">اعمال الفصل</th>
                            </tr>
                           </thead>
                           <tbody>     
                               <tr class="even">
                                   <td>1</td>
                                   <td class="sorting_1"> </td>
                                   <td> </td>
                                   <td><input type="number" class="form-control form-control-sm" id="floatingInputValue" placeholder="" value="number"></td>
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
                      <button class="align-items-center btn btn-outline-info w-50 " type="submit">حفظ  </button>
                    </div>
                  </div>
              </div>
           </div>
        </div>  
      </div> 

     </div>
   </div>
</div>


<script  src="{{asset('js/jquery.js')}}"></script>
<script  src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script  src="{{asset('js/datatable.js')}}"></script>
<script  src="{{asset('js/datatablebootstrap.js')}}"></script>
<script  src="{{asset('js/main.js')}}"></script>
<script  class="init">
       
   $(document).ready(function() {
       $('#example').DataTable();
   } );
   
       </script>
<script src="{{asset('js/form-validation.js')}}"></script>

</body>
</html>