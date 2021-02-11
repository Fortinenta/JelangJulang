<!DOCTYPE html>
<html>


<head>
  <link rel="icon" href="{{ URL::asset('images/logo.png') }}">
  <title>RINCIAN ORDER</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ URL::asset('css/order.css') }}">

</head>


<body>
  <div class="container1">
    <div class="container">
      <div class="myCard">
        <div class="row">
          <div class="col-md-6">
            <div class="myLeftCtn">
              <form class="myForm text-center" action="/order_input" method="post" enctype="multipart/form-data">
                @csrf
                <header>Rincian Order</header>
                @foreach ($user as $pelanggan)
                <div class="form-group">
                  <i class="fas fa-user"></i>
                  <input class="myInput" placeholder="{{ucwords($pelanggan->nama)}}" readonly value="">
                </div>

                <div class="form-group">
                  <i class="fas fa-envelope"></i>
                  <input class="myInput" placeholder="{{$pelanggan->email}}" readonly value="">
                </div>

                <div class="form-group">
                  <i class="fas fa-phone"></i>
                  <input class="myInput" placeholder="{{ucwords($pelanggan->nomor)}}" readonly value="">
                </div>

                <p>Nomor pendaftaran Anda</p>
                <div class="form-group">
                  <i class="fas fa-book"></i>
                  <input class="myInput" placeholder="{{ucwords(($pelanggan->no_pendaftaran)+20210320)}}" readonly value="">
                  <?php $nomor = (($pelanggan->no_pendaftaran) + 20210320); ?>
                </div>
                @endforeach
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="myRightCtn">
              <div class="image2">
                <img src="{{ URL::asset('images/logo.png') }}" height="120" width="130">
              </div>
              <div class="box text-right">
                <br><br>
                <header>
                  @foreach ($sesi as $detail_sesi)
                  <span>{{ucwords($detail_sesi->status)}}</span><br>
                  <span>{{ucwords($detail_sesi->hari)}}</span><br>
                  <span>{{ucwords($detail_sesi->jam)}}</span><br><br>
                  @endforeach
                </header><br><br><br>

              </div>
              <div class="container">
                <div class="coba text-center">

                  <br><br><br><br>
                  <p>Selanjutnya untuk mendapatkan tiket silahkan klik disini!</p>
                  @foreach ($sesi as $detail_sesi)
                  @if($detail_sesi->status=='workshop a' || $detail_sesi->status=='workshop b' || $detail_sesi->status=='workshop c' || $detail_sesi->status=='workshop d' || $detail_sesi->status=='workshop e')
                  <a href="https://api.whatsapp.com/send?phone=6282332914329&text=hai%20saya%20ingin%20mendapatkan%20tiket%20jelangjulang%20dengan%20nomor%20pendaftaran%20{{$nomor}}">
                    <input type="button" class="button" value="TIKET">
                  </a>
                  @else
                  <a href="https://api.whatsapp.com/send?phone=6285100636145&text=hai%20saya%20ingin%20mendapatkan%20tiket%20jelangjulang%20dengan%20nomor%20pendaftaran%20{{$nomor}}">
                    <input type="button" class="button" value="TIKET">
                  </a>
                  @endif
                  @endforeach


                </div>
              </div>



            </div>


          </div>

        </div>

      </div>
    </div>
  </div>
  <!-- <footer>
    <p>
      <a target=" _blank">&copy; Jelang Julang 2021</a>
                  </p>
                  </footer> -->
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>