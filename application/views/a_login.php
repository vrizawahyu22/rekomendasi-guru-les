<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>
    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
  }
  body {
       background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
       background-repeat: no-repeat;
  }
  #card-content {
      padding: 12px 44px;
  }
  #card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
  }
  .underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
  }
  a {
    text-decoration: none;
  }
  label {
      font-family: "Raleway", sans-serif;
      font-size: 11pt;
      margin-left: 10px;
  }
  #forgot-pass {
      color: #2dbd6e;
      font-family: "Raleway", sans-serif;
      font-size: 10pt;
      margin-top: 3px;
      text-align: right;
  }
  .form {
      align-items: left;
      display: flex;
      flex-direction: column;
      margin: 20px;
  }
  .form-border {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 1px;
      width: 100%;
  }
  .form-content {
      background: #fbfbfb;
      border: none;
      outline: none;
      padding-top: 14px;
  }
  </style>
 </head>
  <body>
    <div id="card">
      <div id="card-content">
        <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      </div>
      <form action="<?php echo base_url(); ?>index.php/brainy_les/login" method="post" class="form">
        <label for="user-email" style="padding-top:13px">&nbsp;Email</label>
        <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
        <input id="user-password"class="form-content" type="password" name="password" required />
        <div class="form-border"></div><br>
        <button class="btn" type="submit" style="height: 35px;background-color: #85b86b; color: white">Login</button>
        <a href="#"><legend id="forgot-pass">Forgot password?</legend></a>
      </form>
   </div>
 </body>
</html>