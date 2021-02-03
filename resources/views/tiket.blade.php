<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Order</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
  body {
    font-family: 'Nunito';
  }
  .shadow {
    box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
	position: relative;
    width: 100%;
    padding-right: .75rem;
    padding-left: .75rem;
  }
  .text {
	text-align: center;
   }

  </style>

</head>


<body class="body bg-white">

<div class="content">
<div class="col mb-2">
<div class="card shadow mt-4">
<div class="col-s ml-2 mt-4">
  <div class="text mb-2">
  Simpan QR code dibawah ini untuk presensi anda
  </div>
  <div class="text">
    @foreach ($sesi as $detail_sesi)
    <span>{{ucwords($detail_sesi->status)}}</span><br>
    <span>{{ucwords($detail_sesi->hari)}}</span><br>
    <span>{{ucwords($detail_sesi->jam)}}</span><br><br>
    @endforeach
    {{ Session::get('qr')}}
  </div>
</div>

    <br>
	</div>
  </div>
</div>






</body>
</html>
