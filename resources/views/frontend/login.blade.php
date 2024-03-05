   <div class="container d-flex justify-content-center">
       <form class="login" style="margin-top: 80px; margin-bottom: 80px; width: 50%; height: 50%;">
           <h1 class="text-center " style="margin-bottom: 50px;
            font-family: 'Inter'; font-weight: bold;">
               WELCOME!</h1>
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

           <!-- 2 column grid layout for inline styling -->
           <div class="row mb-4">
               <div class="col d-flex justify-content-center">
                   <!-- Checkbox -->
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                       <label class="form-check-label" for="form2Example31"> Nhớ mật khẩu </label>
                   </div>
               </div>

               <div class="col">
                   <!-- Simple link -->
                   <a href="#!">Quên mật khẩu?</a>
               </div>
           </div>

           <!-- Submit button -->
           <div class="card-login d-flex justify-content-center">
               <button type="button" class="btn-login  btn-block mb-4 ">Đăng nhập</button>
           </div>


           <!-- Register buttons -->
           <div class="text-center">
               <p>Bạn chưa có tài khoản? <a style="text-decoration: none; font-weight: bold;" href="#!">Đăng ký</a>
                   ngay!</p>
               <div class="social-or"><span>Hoặc</span></div>
               <div class="card-social" style="display: flex; justify-content: center;">
                   <button type="button" class="btn-social">
                       <i class="fa-brands fa-google social-icon"></i>
                       <span class="social-text">Đăng nhập bằng google</span>
                   </button>
               </div>
               <div class="card-social" style="display: flex; justify-content: center;">
                   <button type="button" class="btn-social">
                       <i class="fa-brands fa-facebook social-icon"></i>
                       <span class="social-text">Đăng nhập bằng facebook</span>
                   </button>
               </div>
           </div>
       </form>
   </div>
