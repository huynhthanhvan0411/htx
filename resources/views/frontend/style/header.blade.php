 <header>
     <div class="header--info py-2">
         <div class="header--infoLeft pl-4">
             <div class="info-item">
                 <i class="fa fa-map-marker-alt"></i> Mường Hoa,Sa Pa,Lào Cai
             </div>
             <div class="info-item pl-3">
                 <i class="fa-solid fa-phone"></i> 094 345 2345
             </div>
         </div>
         <div class="header--infoRight pr-4">
             {{--  if no login   --}}
             {{--  <div class="info-item">
                 <button type="button" style="border: none; background-color: #fff; cursor: pointer;" data-toggle="modal"
                     data-target="#loginModal">
                     <i class="fa-solid fa-right-to-bracket"></i>Đăng nhập
                 </button>
             </div>
             <div class="info--item pl-4">
                 <button type="button" style="border: none; background-color: #fff; cursor: pointer;"
                     data-toggle="modal" data-target="#signUpModal">
                     <i class="fa fa-user"></i>Tạo tài khoản
                 </button>
             </div>  --}}
             {{--  if login have account  admin --}}
             {{--  <div class="info--item d-flex">
                 <a href="#"><i class="fa fa-user-edit mr-1"></i>Chào bạn Thanh Vân </a>
                 <a href="#"><i class="fa fa-shopping-cart"></i> Cart</a>
                 <a href="#"><i class="fa fa-user-secret mr-1"></i>Go admin</a>
                 <a href="#"><i class="fa-solid fa-right-to-bracket mr-1"></i>Đăng xuất</a>
             </div>  --}}
             {{--  if login have user  --}}
             <div class="info--item d-flex">
                 <a href="#"><i class="fa fa-user-edit mr-1"></i>Chào bạn Thanh Vân </a>
                 <a href="#"><i class="fa fa-shopping-cart"></i> Cart</a>
                 <a href="#"><i class="fa-solid fa-right-to-bracket mr-1"></i>Đăng xuất</a>
             </div>
         </div>
     </div>
     <div class="header">
         <nav class="navbar navbar-expand-lg  header">
             <div class="container-fluid">
                 <a class="navbar-brand" href="#">
                     <img src="{{ asset('source/assets/frontend/images/logo.png') }}" alt="Your Logo">
                 </a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                     aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarNav" style="display: flex; justify-content: right;">
                     <ul class="navbar-nav ">
                         <li class="nav-item">
                             <a class="nav-link " href="{{ route('index') }}">Trang chủ</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('intro') }}">Giới thiệu</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('news') }}">Tin tức</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link " href="{{ route('product') }}">Sản phẩm </a>
                         </li>
                         {{--  <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href=""
                                 id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
                                 aria-expanded="false">
                                 Sản phẩm
                             </a>
                             <div class="dropdown-menu" style="color: black" aria-labelledby="navbarDropdownMenuLink">

                             </div>
                         </li>  --}}
                         <li class="nav-item">
                             <a class="nav-link " href="service.php">Dịch vụ</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link " href="{{ route('tipTravel') }}">Cẩm nang du lịch</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link " href="{{ route('contact') }}">Liên hệ</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </nav>
     </div>
 </header>
 {{-- MODAL LOGIN --}}
 <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-body">
                 <div class="d-flex justify-content-center">
                     <form class="login" action="{{ route('login') }}" method="POST"
                         style="height: 50%;padding: 10px 0">
                         @csrf
                         <h1 class="text-center" style="font-family: 'Inter'; font-weight: bold;">WELCOME!</h1>
                         <!-- Email input -->
                         <div class="form-outline">
                             <label class="form-label" for="form2Example1">Email </label>
                             <input type="email" name="email" id="form2Example1" class="form-control" />
                         </div>
                         <!-- Password input -->
                         <div class="form-outline">
                             <label class="form-label" for="form2Example2">Mật khẩu</label>
                             <input type="password" name="password" id="form2Example2" class="form-control" />
                         </div>
                         <!-- Submit button -->
                         <div class="card-login d-flex justify-content-center">
                             <button type="submit" class="btn-login">Đăng nhập</button>
                         </div>
                         <!-- Register buttons -->
                         <div class="text-center">
                             <p>Bạn chưa có tài khoản? <a
                                     style="text-decoration: none; font-weight: bold; margin: 5px 0;"
                                     href="#!">Đăng ký</a> ngay!</p>
                             <div class="social-or"><span>Hoặc</span></div>
                             <!-- Buttons for social login -->
                             <!-- You can keep these buttons if you want -->
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-body">
                 <div class="d-flex justify-content-center">
                     <form class="login" action="{{ route('register') }}" method="POST"
                         style="height: 50%;padding: 10px 0">
                         @csrf
                         <h1 class="text-center" style="font-family: 'Inter'; font-weight: bold;">WELCOME!</h1>
                         <!-- user input -->
                         <div class="form-outline">
                             <label class="form-label" for="form2Example1">Tên người dùng </label>
                             <input type="text" name="name" id="form2Example1" class="form-control" />
                         </div>
                         <!-- Email input -->
                         <div class="form-outline">
                             <label class="form-label" for="form2Example1">Email </label>
                             <input type="email" name="email" id="form2Example1" class="form-control" />
                         </div>
                         <!-- Password input -->
                         <div class="form-outline">
                             <label class="form-label" for="form2Example2">Mật khẩu</label>
                             <input type="password" name="password" id="form2Example2" class="form-control" />
                         </div>
                         <!-- Confirm Password input -->
                         <div class="form-outline">
                             <label class="form-label" for="form2Example2">Xác nhận mật khẩu</label>
                             <input type="password" name="password_confirmation" id="form2Example2"
                                 class="form-control" />
                         </div>
                         <!-- Submit button -->
                         <div class="card-login d-flex justify-content-center">
                             <button type="submit" class="btn-login my-3">Đăng ký</button>
                         </div>
                         <!-- Login buttons -->
                         <div class="text-center">
                             <p>Bạn đã có tài khoản? <a style="text-decoration: none; font-weight: bold;"
                                     href="#!">Đăng nhập</a> ngay!</p>
                             <div class="social-or"><span>Hoặc</span></div>
                             <!-- Buttons for social login -->
                             <!-- You can keep these buttons if you want -->
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
