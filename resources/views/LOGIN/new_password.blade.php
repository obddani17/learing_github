<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/style1.css" /> --}}
    <title>Sign in & Sign up Form</title>
  </head>
  <body >
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form" method="POST" action="{{route('new_register')}}">
            @csrf
            <h2 class="title">: تغيير كلمةالمرور</h2>
            {{-- <div class="input-field" dir="rtl"> --}}
              {{-- <i class="fas fa-envelope"></i> --}}
              <p>{{Session::get('email')}}</p>
              {{-- <input type="hidden" name="email" value="{{$check2}}"> --}}
              {{-- <input type="email" placeholder="الايميل" required=""/> --}}
            {{-- </div> --}}
            <div class="input-field" dir="rtl">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="كلمة المرور" required=""/>
            </div>
            {{-- <div class="input-field" dir="rtl">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="تأكيد كلمةالمرور" />
            </div> --}}
            <input type="submit" value="الدخول" class="btn solid" />
            
           
          </form>
         
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
       
          <img src="img/undraw_authentication_re_svpt.svg" class="image" alt="" />
        </div>
        
      </div>
    </div>
    
  </div>
</div>

<script  src="{{asset('js/app.js')}}"></script>

    {{-- <script src="js/app.js"></script> --}}

  </body>
</html>