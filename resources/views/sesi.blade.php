  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sesi</title>

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

    <div class="">
      <div class="m-3 text-light">
        <h1 >Senin</h1>
      </div>

      @foreach ($senin as $hari)
      <div class="col-md-3 " style="float:left">
        <div class="card mb-5" >
          <div class="row mb-1 mt-1">
            <div class="col-s ml-5">
              <h2 class="text-right ">{{$hari->total}}</h2>
            </div>
            <div class="col">
              <h6 >{{ucwords($hari->status)}}
                <br>
                <span> Sesi {{ucwords($hari->nama_sesi)}}</span></h6>
              <span >{{ucwords($hari->hari)}}</span><br>
              <span >{{$hari->jam}}</span> <br>
              <a href="/order/{{ $hari->no_sesi }}" class="btn btn-xs btn-info pull-right">Order</a>
            </div>
          </div>

        </div>
      </div>
      @endforeach
      <br>
    </div>
    <br>
    <div class="">
      <div class="m-3 text-light">
        <h1 >Selasa</h1>
      </div>

      @foreach ($selasa as $hari)
      <div class="col-md-3 " style="float:left">
        <div class="card mb-5" >
          <div class="row mb-1 mt-1">
            <div class="col-s ml-5">
              <h2 class="text-right ">{{$hari->total}}</h2>
            </div>
            <div class="col">
              <h6 >{{ucwords($hari->status)}}
                <br>
                <span> Sesi {{ucwords($hari->nama_sesi)}}</span></h6>
              <span >{{ucwords($hari->hari)}}</span><br>
              <span >{{$hari->jam}}</span> <br>
              <a href="/order/{{ $hari->no_sesi }}" class="btn btn-xs btn-info pull-right">Order</a>
            </div>
          </div>

        </div>
      </div>
      @endforeach
      <br>
    </div>
    <br>
    <div class="">
      <div class="m-3 text-light">
        <h1 >Rabu</h1>
      </div>

      @foreach ($rabu as $hari)
      <div class="col-md-3 " style="float:left">
        <div class="card mb-5" >
          <div class="row mb-1 mt-1">
            <div class="col-s ml-5">
              <h2 class="text-right ">{{$hari->total}}</h2>
            </div>
            <div class="col">
              <h6 >{{ucwords($hari->status)}}
                <br>
                <span> Sesi {{ucwords($hari->nama_sesi)}}</span></h6>
              <span >{{ucwords($hari->hari)}}</span><br>
              <span >{{$hari->jam}}</span> <br>
              <a href="/order/{{ $hari->no_sesi }}" class="btn btn-xs btn-info pull-right">Order</a>
            </div>
          </div>

        </div>
      </div>
      @endforeach
      <br>
    </div>
    <br>
    <div class="">
      <div class="m-3 text-light">
        <h1 >Kamis</h1>
      </div>

      @foreach ($kamis as $hari)
      <div class="col-md-3 " style="float:left">
        <div class="card mb-5" >
          <div class="row mb-1 mt-1">
            <div class="col-s ml-5">
              <h2 class="text-right ">{{$hari->total}}</h2>
            </div>
            <div class="col">
              <h6 >{{ucwords($hari->status)}}
                <br>
                <span> Sesi {{ucwords($hari->nama_sesi)}}</span></h6>
              <span >{{ucwords($hari->hari)}}</span><br>
              <span >{{$hari->jam}}</span> <br>
              <a href="/order/{{ $hari->no_sesi }}" class="btn btn-xs btn-info pull-right">Order</a>
            </div>
          </div>

        </div>
      </div>
      @endforeach
      <br>
    </div>
    <br>
    <div class="">
      <div class="m-3 text-light">
        <h1 >Jumat</h1>
      </div>

      @foreach ($jumat as $hari)
      <div class="col-md-3 " style="float:left">
        <div class="card mb-5" >
          <div class="row mb-1 mt-1">
            <div class="col-s ml-5">
              <h2 class="text-right ">{{$hari->total}}</h2>
            </div>
            <div class="col">
              <h6 >{{ucwords($hari->status)}}
                <br>
                <span> Sesi {{ucwords($hari->nama_sesi)}}</span></h6>
              <span >{{ucwords($hari->hari)}}</span><br>
              <span >{{$hari->jam}}</span> <br>
              <a href="/order/{{ $hari->no_sesi }}" class="btn btn-xs btn-info pull-right">Order</a>
            </div>
          </div>

        </div>
      </div>
      @endforeach
      <br>
    </div>
    <br>
    <div class="">
      <div class="m-3 text-light">
        <h1 >Sabtu</h1>
      </div>

      @foreach ($sabtu as $hari)
      <div class="col-md-3 " style="float:left">
        <div class="card mb-5" >
          <div class="row mb-1 mt-1">
            <div class="col-s ml-5">
              <h2 class="text-right ">{{$hari->total}}</h2>
            </div>
            <div class="col">
              <h6 >{{ucwords($hari->status)}}
                <br>
                <span> Sesi {{ucwords($hari->nama_sesi)}}</span></h6>
              <span >{{ucwords($hari->hari)}}</span><br>
              <span >{{$hari->jam}}</span> <br>
              <a href="/order/{{ $hari->no_sesi }}" class="btn btn-xs btn-info pull-right">Order</a>
            </div>
          </div>

        </div>
      </div>
      @endforeach
      <br>
    </div>



  </body>
</html>
