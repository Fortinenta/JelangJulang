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
        @foreach ($sesi as $detail_sesi)
        <span>{{ucwords($detail_sesi->status)}}</span><br>
        <span>{{ucwords($detail_sesi->hari)}}</span><br>
        <span>{{ucwords($detail_sesi->jam)}}</span><br><br>
        @endforeach
        @foreach ($user as $pelanggan)
        <span>Nama</span><br>
        <span>{{ucwords($pelanggan->nama)}}</span><br>
        <span>Email</span><br>
        <span>{{$pelanggan->email}}</span><br>
        <span>Nomor</span><br>
        <span>{{ucwords($pelanggan->nomor)}}</span><br>
        <span>No Pendaftaran</span><br>
        <span>{{ucwords(($pelanggan->no_pendaftaran)+20210320)}}</span><br>
        <br>
        @endforeach
      </div>



  </body>
</html>
