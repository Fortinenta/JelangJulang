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
    <div class="col-md-3 " style="float:center">
      <div class="card mb-5" >
        <div class="row mb-1 mt-1">
          <form class="data m-3" action="/order_input" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="sesi" nama="sesi" value="<?= session()->get('id')?>">
            <span>Nama</span>
            <input type="text" id="nama" name="" placeholder="Nama"><br>
            <span>Email</span>
            <input type="text" id="email" name="" placeholder="example@gmail.com"><br>
            <span>Nomor</span>
            <input type="text" id="nomor" name="" placeholder="08xxxxxxxxxxx"><br>
            <span>Bukti Pendaftaran</span>
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
