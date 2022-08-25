<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Gu-Docs - Gumugu">
      <meta name="author" content="Gumugu">
      <title>Gu-docs - Gumugu</title>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700&display=swap" rel="stylesheet">
      <link href="<?php echo base_url(); ?>assets/css/theme-08.css" rel="stylesheet">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/favicon/favicon-32x32.png">
   </head>
   <body>
      <img src="<?php echo base_url(); ?>assets/images/gallery/wave-01.png" class="wave">
      <div class="container">
          <div class="img">
              <img src="<?php echo base_url(); ?>assets/images/gallery/background.png">
          </div>
          <div class="login-content">
              <form action="index.html" class="form-login">
                  <!-- <img src="https://i.ibb.co/H4f3Hkv/profile.png"> -->
                  <img src="<?php echo base_url(); ?>assets/images/logo/logotdmrc.png">
                  <h2 class="title">Login into your account</h2>
                  <div class="input-div one">
                  <div class="i">
                      <i class="fas fa-user"></i>
                  </div>
                  <div class="div">
                      <h5>Username</h5>
                      <input type="text" class="input">
                  </div>
                  </div>
                  <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input">
                    </div>
                    </div>
                    <input type="submit" class="btn" value="Login">
                    <!-- <a href="#">Forgot Password?</a> -->
              </form>
          </div>
      </div>
   <!-- BEGIN JS-->
  <?php $this->load->view('layouts/_js.php'); ?>
  <!-- END JS-->
</html>