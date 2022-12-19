<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      
    ></script>
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/style1.css" /> --}}
    <title>Restart password</title>
  </head>
  <body >
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form" method="POST" action="{{route('check')}}">
            @csrf
            <h2 class="title">: تأكيد الحساب</h2>
            <div class="input-field" dir="rtl">
                    <i class="fas fa-envelope"></i>
                    {{-- <input type="hidden" name="check_email" value="{{$check}}"> --}}
                    <input type="number" name="number" placeholder="ادخل رقم التأكيد" required=""/>
                  </div>
                  @if (isset($ddd))
                    <p>{{$ddd}}</p>
                  @endif
            <input type="submit" value="ارسال" class="btn solid" />
            
    
         
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          
        
          <img src="img/undraw_data_processing_yrrv.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script  src="{{asset('js/app.js')}}"></script>

    {{-- <script src="js/app.js"></script> --}}



    
  </body>
</html>