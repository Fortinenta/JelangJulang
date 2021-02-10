<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <title>ADMIN JELANG JULANG</title>
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
   margin-top: 50%;
   margin-bottom: 38%;
   transform: translate(-50%, -50%); 
   }

   button[type="button"] {
   background:#5cb582;
   border: 1px solid #5cb582;
   color: #fff;
   cursor: pointer;
   }
</style>

<body>
<div class="container">
   <section id="formHolder">
      <div class="row">

         <!-- Brand Box -->
         <div class="col-sm-6 brand">
            @foreach ($user as $pelanggan)
               <a href="#" class="logo">ADMIN JELANG JULANG <span>.</span></a></br></br>
               <img id="myImg" src="/images/bukti_transfer/{{$pelanggan->bukti}}" alt="Image"  >
            @endforeach
         </div>
<!-- The Modal -->
<div id="myModal" class="modal">
   <img class="modal-content" id="img01">
<div id="caption"></div>
</div>
        <!-- Form Box -->
      <div class="col-sm-6 form">
               
         <!-- Login Form -->
         <div class="login form-peice">
            @foreach ($user as $pelanggan)
            
            <form class="login-form" action="/pelanggan" method="post" >
               <p class="p3">Nama<br>
                  <input type="text" id="nama" name="nama"  value="{{ucwords($pelanggan->nama)}}" readonly>
               </p>
               <p class="p3">Nomor Telepon<br>
               <input type="text" id="notelp" name="notelp" value="{{ucwords($pelanggan->nomor)}}" readonly>
               </p>
               <p class="p3">Nomor Pendaftaran<br>
                  <input type="text" id="nopendaftaran" name="nopendaftaran" value="{{ucwords(($pelanggan->no_pendaftaran)+20210320)}}" readonly>
               </p>
               <p class="p3">Password<br>
                  <input type="text" id="pass" value="{{$pelanggan->password}}" readonly>
               </p>
               <button type="button" onclick="copy_text()">Copy Password</button>
            </form>
            @endforeach
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
<script type="text/javascript">
    function copy_text() {
        document.getElementById("pass").select();
        document.execCommand("copy");
        alert("Text berhasil dicopy");
    }
   // Get the modal
   var modal = document.getElementById('myModal');
 
   // Get the image and insert it inside the modal - use its "alt" text as a caption
   var img = document.getElementById('myImg');
   var modalImg = document.getElementById("img01");
   var captionText = document.getElementById("caption");
   img.onclick = function(){
     modal.style.display = "block";
     modalImg.src = this.src;
     modalImg.alt = this.alt;
     captionText.innerHTML = this.alt;
   }
    
   // When the user clicks on <span> (x), close the modal
   modal.onclick = function() {
     img01.className += " out";
     setTimeout(function() {
        modal.style.display = "none";
        img01.className = "modal-content";
      }, 400);
   }  
</script>

</body>

</html>