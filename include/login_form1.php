
<style>
    

#flag img {
    height: 7.7rem !important;
    margin-top: 0 !important;
    width: 100%;
}
.form-close svg:hover{
cursor:pointer;
color:#23bb66 !important;
}
</style>

  <div class="login-form-container">
 <div class="form-close">
  <i class="fas fa-times"></i>
    </div>
       <div class="flex">
    <div class="form-container">
      <form action="" id="form" method="POST">
        <div class="logo-images">

          <div class="main-logo" id="main-logo">
          <div class="images">
              <div class="logo logo1" id="logo">
                <img src="./Assets/Home_Images/Nepal_logo.png" alt="" style="width:53rem">
              </div>
              <div class="flag flag1" id="flag">
                <img src="./Assets/Home_Images/flag.gif" alt="flag">
              </div>

            </div>
          </div>
        </div>
        <h3>login</h3>
        <div class="email-div">
          <span class=""><i class="fas fa-user"></i></span>

          <input name="email" type="text" class="form-control " placeholder="Email" required>
        </div>
        <div class="password-div">

          <span class="input-group-text"><i class="fas fa-lock"></i></span>

          <input name="password" type="password" class="form-control " placeholder="Password" required>
        </div>
        <div class="row">
          <div class="row1">
            <div class="login-div">

              <button>Submit</button>
            </div>
            <div class="check-box">
              <input type="checkbox" id="remember">
              <label for="remember" style="font-size: 1.4rem; color: black;">Remember me</label>
            </div>
          </div>


          <div class="forget-div">
            <a style="font-size: 14px; color: blue !important;" class="" href="../include/reset-password.php">
              Forgot your password?
            </a>
          </div>
        </div>

      </form>
      </div>
    </div>
  </div>