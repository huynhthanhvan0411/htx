 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Register</title>
     {{--  BS CSS   --}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
         integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     {{--  CSS   --}}
     <link rel="stylesheet" href="{{ asset('source/assets/frontend/css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('source/assets/frontend/css/news.css') }}">
     <link rel="stylesheet" href="{{ asset('source/assets/frontend/css/intro.css') }}">
     <link rel="stylesheet" href="{{ asset('source/assets/frontend/css/product.css') }}">
     <link rel="stylesheet" href="{{ asset('source/assets/frontend/css/contact.css') }}">
     <link rel="stylesheet" href="{{ asset('source/assets/frontend/css/auth.css') }}">
     <link rel="stylesheet" href="{{ asset('source/assets/frontend/css/tipTravel.css') }}">
     <link rel="stylesheet" href="{{ asset('source/assets/frontend/css/cart.css') }}">
     <link rel="stylesheet" href="{{ asset('source/assets/frontend/css/order.css') }}">
     {{--  FONT AWESOME   --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
         integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
     {{--  FONT GG  --}}
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link
         href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
         rel="stylesheet">
     {{--  ANIMATION CDN  --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
     {{--  IMG FAVICON   --}}
     <link rel="icon" type="image/x-icon" href="{{ asset('source/assets/frontend/images/logo.png') }}">

 </head>

 <body>
     <div class="container d-flex justify-content-center">
         <form class="login" style="margin-top: 80px; margin-bottom: 80px; width: 50%; height: 50%;">
             <h1 class="text-center " style="margin-bottom: 50px;
            font-family: 'Inter'; font-weight: bold;">
                 WELCOME!</h1>
             <!-- user input -->
             <div class="form-outline mb-4">
                 <input type="email" id="form2Example1" class="form-control" />
                 <label class="form-label" for="form2Example1">*Tên người dùng </label>
             </div>
             <!-- Email input -->
             <div class="form-outline mb-4">
                 <input type="email" id="form2Example1" class="form-control" />
                 <label class="form-label" for="form2Example1">*Email hoặc số điện thoại</label>
             </div>

             <!-- Password input -->
             <div class="form-outline mb-4">
                 <input type="password" id="form2Example2" class="form-control" />
                 <label class="form-label" for="form2Example2">*Mật khẩu</label>
             </div>

             <div class="form-outline mb-4">
                 <input type="password" id="form2Example2" class="form-control" />
                 <label class="form-label" for="form2Example2">*Xác nhận mật khẩu</label>
             </div>

             <!-- 2 column grid layout for inline styling -->

             <!-- Submit button -->
             <div class="card-login d-flex justify-content-center">
                 <button type="button" class="btn-login  btn-block mb-4 ">Đăng ký</button>
             </div>


             <!-- Register buttons -->
             <div class="text-center">
                 <p>Bạn đã có tài khoản? <a style="text-decoration: none; font-weight: bold;" href="#!">Đăng nhập
                     </a>
                     ngay!</p>
                 <div class="social-or"><span>Hoặc</span></div>
                 <div class="card-social" style="display: flex; justify-content: center;">
                     <button type="button" class="btn-social">
                         <i class="fa-brands fa-google social-icon"></i>
                         <span class="signup-social-text">Đăng nhập bằng google</span>
                     </button>
                 </div>
                 <div class="card-social" style="display: flex; justify-content: center;">
                     <button type="button" class="btn-social">
                         <i class="fa-brands fa-facebook social-icon"></i>
                         <span class="signup-social-text">Đăng nhập bằng facebook</span>
                     </button>
                 </div>
             </div>
         </form>
     </div>

 </body>

 </html>