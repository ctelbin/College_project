<?php
include 'connect.php';
$conn;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="register.php" method="post" class="sign-in-form">
            <img src="img/logo.jpg" class="logo" alt="" />
            <h2 class="title">Welcome Back</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass" required/>
            </div>
            <div class="forget">
              <label class="checkbox">
                <input type="checkbox">
                <span class="text">Remember Me</span>
                <span class="checkmark"></span>
               </label>
              <label class="Forgot"><a href ="#">Forget Password ? </a> </label>
            </div>
            <input type="submit" value="Login" name="loginsubmit" class="btn solid" />
          </form>
          <form id="form" action="register.php" method="post" class="sign-up-form">
            <img src="img/logo.jpg" class="logo" alt="" />
            <h2 class="title">Sign up</h2>
           <div class="input-field">
             <i class="fas fa-users"></i>
            <select name="users" id="users" class="select">
              <option value="" disabled selected hidden>Register as</option>
              <option value="Tour Company">Tour Company</option>
              <option value="Hotel">Hotel</option>
              <option value="Traveller">Traveller</option>
            </select>
          </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Name" name="fname"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass"/>
            </div>
            <input type="submit" name="regsubmit" class="btn" value="Sign up" />
            
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
            A traveler without observation is a bird without wings..Sign up in our website and be a part of Our Page
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
            Leave nothing but footprints, take nothing but photos, kill nothing but time.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
