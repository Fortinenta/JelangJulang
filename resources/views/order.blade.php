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
    <div class="d-flex justify-content-center " >
      <div class="card mb-5" >
        <div class="row mb-1 mt-1 ">
          <form class="data m-3 " action="/order_input" method="post" enctype="multipart/form-data">
            @csrf
            <span>Nama</span><br>
            <input type="text" id="nama" name="nama" placeholder="Nama"><br>
            <span class="text-danger">@error('nama'){{$message}}@enderror</span><br>
            <span>Email</span><br>
            <input type="text" id="email" name="email" placeholder="example@gmail.com"><br>
            <span class="text-danger">@error('email'){{$message}}@enderror</span><br>
            <span>Nomor</span><br>
            <input type="text" id="nomor" name="nomor" placeholder="08xxxxxxxxxxx"><br>
            <span class="text-danger">@error('nomor'){{$message}}@enderror</span><br>
            <span>Bukti Pendaftaran</span><br>
            <div class="form-group">
              <input type="file" id="bukti" name="bukti" required>
            </div>
            <input type="submit" name="" value="Submit">
          </form>
        </div>

      </div>
    </div>

  </body>
</html>
