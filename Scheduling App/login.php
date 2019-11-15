<!DOCTYPE html>
<html>
<head>

  <title>Exam Scheduling Assitant</title>

  <meta charset='utf-8' />
  <meta name="author" content="Arukh Sediq Shkur">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#0B4F6C">

  <link rel="manifest" href="manifest.json">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">

  <link href='packages/core/main.css' rel='stylesheet' />
  <link href='packages/daygrid/main.css' rel='stylesheet' />
  <link href='packages/timegrid/main.css' rel='stylesheet' />
  <link href='packages/list/main.css' rel='stylesheet' />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/9a4452a1e7.js" crossorigin="anonymous"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LdYF8EUAAAAAJV7aseBxpewnGI_E4msSgvIDX0k" async defer></script>
  <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LfTGMEUAAAAADaIFJKXKLU6ze6eRM6v3Xi46THQ'
        });
      };    
  </script>

  <?php

   if(isset($_GET['signout'])){
    session_start();
    session_destroy();
    header("Location: index.php");
  }  


  ?>
  
  <!-- The following code has been retrived from https://startbootstrap.com/snippets/login/ -->
  <style type="text/css">

  :root {
    --input-padding-x: 1.5rem;
    --input-padding-y: .75rem;
  }

  body {
    background: #002855;
    /*background: linear-gradient(to right, #0062E6, #33AEFF);*/
  }

  .card-signin {
    border: 0;
    border-radius: 1rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  }

  .card-signin .card-title {
    margin-bottom: 2rem;
    font-weight: 300;
    font-size: 1.5rem;
  }

  .card-signin .card-body {
    padding: 2rem;
  }

  .form-signin {
    width: 100%;
  }

  .form-signin .btn {
    font-size: 80%;
    border-radius: 5rem;
    letter-spacing: .1rem;
    font-weight: bold;
    padding: 1rem;
    transition: all 0.2s;
  }

  .btn-primary{
    background: #c99700 !important;
    border: none;
  }

  .form-label-group {
    position: relative;
    margin-bottom: 1rem;
  }

  .form-label-group input {
    height: auto;
    border-radius: 2rem;
  }

  .form-label-group>input,
  .form-label-group>label {
    padding: var(--input-padding-y) var(--input-padding-x);
  }

  .form-label-group>label {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    margin-bottom: 0;
    /* Override default `<label>` margin */
    line-height: 1.5;
    color: #495057;
    border: 1px solid transparent;
    border-radius: .25rem;
    transition: all .1s ease-in-out;
  }

  .form-label-group input::-webkit-input-placeholder {
    color: transparent;
  }

  .form-label-group input:-ms-input-placeholder {
    color: transparent;
  }

  .form-label-group input::-ms-input-placeholder {
    color: transparent;
  }

  .form-label-group input::-moz-placeholder {
    color: transparent;
  }

  .form-label-group input::placeholder {
    color: transparent;
  }

  .form-label-group input:not(:placeholder-shown) {
    padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
    padding-bottom: calc(var(--input-padding-y) / 3);
  }

  .form-label-group input:not(:placeholder-shown)~label {
    padding-top: calc(var(--input-padding-y) / 3);
    padding-bottom: calc(var(--input-padding-y) / 3);
    font-size: 12px;
    color: #777;
  }

  .btn-google {
    color: white;
    background-color: #ea4335;
  }

  .btn-facebook {
    color: white;
    background-color: #3b5998;
  }

  /* Fallback for Edge
  -------------------------------------------------- */

  @supports (-ms-ime-align: auto) {
    .form-label-group>label {
      display: none;
    }
    .form-label-group input::-ms-input-placeholder {
      color: #777;
    }
  }

  /* Fallback for IE
  -------------------------------------------------- */

  @media all and (-ms-high-contrast: none),
  (-ms-high-contrast: active) {
    .form-label-group>label {
      display: none;
    }
    .form-label-group input:-ms-input-placeholder {
      color: #777;
    }
  }
  </style>
</head>
<body>


<?php include('navbar.php'); ?>

<div class="container">
  <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="POST" action="authentication.php">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="form-label-group" style="padding: 10%;">
                 <div id="html_element"></div>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
              <div class="col-12" style="text-align: center;"><p class="text-danger"><?php if(isset($_GET['error'])) echo $_GET['error']; ?></p></div>
            </form>


          </div>
        </div>

</div> 
 <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>

</body>
</html>