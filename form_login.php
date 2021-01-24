<?php session_start();?>
<?php
include('h.php');
?>

<body>
<div>
    <h4>
        <section class="forms-section">
            <h1 class="section-title">LOGIN</h1>
            <div class="forms">
              <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                  Login
                  <span class="underline"></span>
                </button>
                <form class="form form-login" method="POST" name="formlogin" action ="checklogin.php">
                  <fieldset>
                    <legend>Please, enter your email and password for login.</legend>
                    <div class="input-block">
                      <label for="login-username">Username</label>
                      <input id="login-username" type="username" name="username"  required>
                    </div>
                    <div class="input-block">
                      <label for="login-password">Password</label>
                      <input id="login-password" type="password" name="password"  required>
                    </div>
                  </fieldset>
                  <button type="submit" class="btn-login">Login</button>
                </form>
              </div>




              <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                  Sign Up
                  <span class="underline"></span>
                </button>
                <form class="form form-signup"  method = "POST" name="formregister" action ="register.php">
                  <fieldset>
                    <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                    <div class="input-block">
                      <label for="signup-username">Username</label>
                      <input id="signup-uaername" type="username" name="username" required>
                    </div>
                    <div class="input-block">
                      <label for="signup-password">Password</label>
                      <input id="signup-password" type="password" name="password" required>
                    </div>
                    <div class="input-block">
                      <label for="signup-password-confirm">Confirm password</label>
                      <input id="signup-password-confirm" type="password" name="password" required>
                    </div>
                  </fieldset>
                  <button type="submit" name="submit" class="btn-signup">Continue</button>
                </form>
              </div>
            </div>
          </section> 
    </h4>
</div>
<script src="js/switcherlogin.js"></script>
</body>