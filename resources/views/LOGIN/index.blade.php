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
          <form action="#" class="sign-in-form" method="POST" action="{{route('login')}}">
            @csrf
            <h2 class="title">: تسجيل الدخول </h2>
            <div class="input-field" dir="rtl">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="الايميل" required=""/>
            </div>
            <div class="input-field" dir="rtl">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="كلمة المرور" required=""/>
            </div>
            @if (isset($ddd))
                <p>{{$ddd}}</p>
            @endif
            <input type="submit" value="الدخول" class="btn solid" />
            
            <a href="forget">نسيت كلمه المرور</a>
            
          </form>
          <form class="sign-up-form" method="POST" action="{{route('register')}}">
            @csrf
            <h2 class="title"> : انشاء حساب</h2>
            <div class="input-field" dir="rtl">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email_reg" placeholder="الايميل" required=""/>
            </div>
            <div class="input-field" dir="rtl">
              <i class="fas fa-user"></i>
              <input type="password" name="pass_reg" placeholder="كلمة المرور" required=""/>
            </div>
            {{-- <div class="input-field" dir="rtl">
              <i class="fas fa-lock" dir="rtl"></i>
              <input type="password" name="pass2" required placeholder="تأكيد كلمة المرور">
            </div> --}}
           
        
            <input type="submit" class="btn" value="انشاء" />
           
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>انشاء حساب جديد</h3>
            <p>
              انضم الان الينا من خلال انشاء حساب جديد
            </p>
            <button class="btn transparent" id="sign-up-btn">
              انشاء حساب
            </button>
          </div>
          <img src="img/undraw_access_account_re_8spm (3).svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>تسجيل الدخول</h3>
            <p>
              سجل دخولك في حال كنت منضم الينا
            </p>
            <button class="btn transparent" id="sign-in-btn">
           الدخول
            </button>
          </div>
          <img src="img/undraw_secure_login_pdn4 (3).svg" class="image" alt="" />
        </div>
      </div>
    </div>
    
  </div>
</div>

    
<script  src="{{asset('js/app.js')}}"></script>
    {{-- <script src="js/app.js"></script> --}}



    <!--أنا أوافق على شروط الخدمة و سياسة الخصوصية-->
  </body>
</html>