<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="images/logo.png">
   <title>JELANG JULANG</title>
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
      margin-top: 53%;
      margin-bottom: 38%;
      transform: translate(-50%, -50%);
   }
</style>

<body>
   <div class="container">
      <section id="formHolder">
         <div class="row">

            <!-- Brand Box -->
            <div class="col-sm-6 brand">
               <div class="brand-img">
                  @foreach ($user as $pelanggan)
                  <a href="#" class="logo">JELANG JULANG <span>.</span></a>
                  <div class="brand-text">
                     <p class="p1">Nama</p>
                     <p class="p2">{{ucwords($pelanggan->nama)}}</p><br>
                     <p class="p1">Email</p>
                     <p class="p2">{{$pelanggan->email}}</p><br>
                     <p class="p1">Nomor</p>
                     <p class="p2">{{ucwords($pelanggan->nomor)}}</p><br>
                     <p class="p1">No Pendaftaran</p>
                     <p class="p2">{{ucwords(($pelanggan->no_pendaftaran)+20210320)}}</p>
                  </div>
                  @endforeach

               </div>
            </div>

            <!-- Form Box -->
            <div class="col-sm-6 form">

               <!-- Login Form -->
               <div class="login form-peice">
                  <form class="login-form" action="/update" method="post">
                     @csrf
                     <p class="p3">Foto KTP / KTM / Kartu Pelajar
                        <input type="file" id="bukti" name="bukti" required>
                     </p>
                     <p class="p3">Pekerjaan
                        <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
                     </p>
                     <p class="p3">Usia
                        <input type="text" id="usia" name="usia" placeholder="20" required>
                     </p>
                     <p class="p3">Jenis Kelamin
                        <input type="text" id="jeniskelamin" name="jeniskelamin" placeholder="Laki-laki / Perempuan" required>
                     </p>
                     <p class="p3">Pendidikann
                        <input type="text" id="pendidikan" name="pendidikan" placeholder="S1 xxxxx" required>
                     </p>
                     <p class="p3">Pendidikann
                        <input type="text" id="komunitas" name="komunitas" placeholder="Komunitas" required>
                     </p>
                     <div class="CTA">
                        <input type="submit" value="Submit">
                     </div>
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