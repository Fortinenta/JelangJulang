<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <title>LOGIN JELANG JULANG</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
      .form form {
  padding: 0 20px;
  margin: 0;
  width: 300px;
  position: absolute;
  left: 45%;
  margin-top: 35%;
  margin-bottom: 50%;
  transform: translate(-50%, -50%);
}
</style>
<body>
<div class="container">
   <section id="formHolder">
      <div class="row">

         <!-- Brand Box -->
         <div class="col-sm-6 brand">
         <a href="#" class="logo">JELANG JULANG <span>.</span></a>
         <img src="images/icon2.png" alt="Image" class="img-fluid">
         </div>

        <!-- Form Box -->
      <div class="col-sm-6 form">
               
         <!-- Login Form -->
         <div class="login form-peice" >
            <div class="brand-wrapper">
               <img src="images/logo.png" alt="logo" class="logo">
            </div>
            <form class="login-form" action="/login" method="post" enctype="multipart/form-data">
            @csrf
               <div class="form-group">
                <label for="nomor">No. Pendaftaran</label>
                <input type="text" name="id" id="id"  required>
                
                <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" name="password" id="password"  required>
               
               <div class="CTA">
                <input type="submit" value="Login">
               </div>
               <br>
            <span class="text-danger">@error('password'){{$message}}@enderror</span><br>
            {!! Session::has('msg') ? Session::get("msg") : '' !!}
            </form>
         </div><!-- End Login Form -->

      </div>
      </div>
</section>

   <footer>
      <p>
         <a target="_blank">&copy; Jelang Julang 2021</a>
      </p>
   </footer>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>


</html>