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
    <title>Sign in & Sign up Form</title>
  </head>
  <body >
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form" method="POST" action="">
            @csrf
            <h2 class="title">: اعاده ضبط كلمة المرور </h2>
            <div class="input-field" dir="rtl">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="الايميل" required=""/>
                  </div>
                  @if (isset($ddd))
                    <p>{{$ddd}}</p>
                  @endif
            <input type="submit" value="ارسال" class="btn solid" />
            
    
          </form>
        
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          
          <img src="img/undraw_secure_login_pdn4 (3).svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          
            
          
      </div>
    </div>
    <script  src="{{asset('js/app.js')}}"></script>

    {{-- <script src="js/app.js"></script> --}}



    
  </body>
</html>