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
  </style>

</head>


<body class="body bg-dark">
  <div class="text-white">

    @foreach ($user as $pelanggan)
    <span>{{ucwords($pelanggan->nama)}}</span><br>
    <span>{{ucwords(($pelanggan->no_pendaftaran)+20210320)}}</span><br>
    <span>{{ucwords($pelanggan->password)}}</span><br>
    <img src="/images/bukti_transfer/{{$pelanggan->bukti}}" alt="">
    @endforeach
  </div>



</body>
</html>
