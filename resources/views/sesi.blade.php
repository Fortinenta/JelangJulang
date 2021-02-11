<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sesi</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    body {
      font-family: "Montserrat", sans-serif;
    }
  </style>

</head>


<body class="body bg-white">
  <!-- ......................................................................................................................... -->


  <style>
    .owl-carousel .item {
      background: #4DC7A0;
      padding: 1rem;
      position: relative;

    }

    .owl-carousel .item h4 {
      color: #FFF;
      font-weight: 400;
      margin-top: 0rem;

    }

    .shadow {
      box-shadow: 0 .15rem 1.75rem 0 rgba(58, 59, 69, .15) !important;
      position: relative;
      width: 100%;
      padding-right: .75rem;
      padding-left: .75rem;
    }

    .row {
      padding-left: .75rem;
      position: relative;
    }

    .vl {
      border-left: thin solid #D3D3D3;
      margin-left: .75rem;
    }

    .all {
      background-image: url(/images/head.png);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .masthead {
      padding: 2rem;
    }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />

  <script>
    jQuery(document).ready(function($) {
      $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 25,
        nav: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 2,
          }
        }
      })
    })
  </script>
  @if(\Session::has('error'))
  <div class="alert alert-success">
    {!!\Session::get('error')!!}
  </div>
  @endif
  <div class="all">

    <header class="masthead">
      <h1 class="font-weight-light"> Pemilihan Sesi </h1>
      <p class="lead">Silihkan Pilih Sesi Dibawah ini </p>
    </header>


    <!-- .................................................................................................................................... -->

    <div class="row">
      <!-- ------------------------------------------------------------------------------------------------------- -->
      <!-- sabtu,20 Maret -->
      <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
          <div class="m-3 text-dark text-center">
            <h1>Sabtu, 20 Maret 2021</h1>
          </div>
          <!-- ........................................................................................................................... -->
          <div class="owl-carousel owl-theme mt-5">
            @foreach ($sabtu1 as $hari)
            <div class="item">
              <div class="card">
                <div class="row mb-1 mt-1">
                  <div class="col-s ml-3">
                    <small> Sisa Kuota : </small>
                    <h2 class="text-left" style="color:red;">{{$hari->total}}</h2>
                  </div>
                  <div class="vl"></div>
                  <div class="col ml-1">
                    <h6>{{ucwords($hari->status)}}
                      <br>
                      <span> Sesi {{ucwords($hari->nama_sesi)}}</span>
                    </h6>
                    <span>{{ucwords($hari->hari)}}</span><br>
                    <span>{{$hari->jam}}</span> <br>
                    <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info float-right">Order</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <br>
        </div>
      </div>


      <!-- end -->
      <!-- ------------------------------------------------------------------------------------------------------- -->
      <!-- minggu,21 Maret -->
      <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
          <div class="m-3 text-dark text-center">
            <h1>Minggu, 21 Maret 2021</h1>
          </div>
          <!-- ........................................................................................................................... -->
          <div class="owl-carousel owl-theme mt-5">
            @foreach ($minggu1 as $hari)
            <div class="item">
              <div class="card">
                <div class="row mb-1 mt-1">
                  <div class="col-s ml-3">
                    <small> Sisa Kuota : </small>
                    <h2 class="text-left" style="color:red;">{{$hari->total}}</h2>
                  </div>
                  <div class="vl"></div>
                  <div class="col ml-1">
                    <h6>{{ucwords($hari->status)}}
                      <br>
                      <span> Sesi {{ucwords($hari->nama_sesi)}}</span>
                    </h6>
                    <span>{{ucwords($hari->hari)}}</span><br>
                    <span>{{$hari->jam}}</span> <br>
                    <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info float-right">Order</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <br>
        </div>
      </div>


      <!-- end -->
      <!-- ------------------------------------------------------------------------------------------------------- -->
      <!-- senin,22 Maret -->
      <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
          <div class="m-3 text-dark text-center">
            <h1>Senin, 22 Maret 2021</h1>
          </div>
          <!-- ........................................................................................................................... -->
          <div class="owl-carousel owl-theme mt-5">
            @foreach ($senin as $hari)
            <div class="item">
              <div class="card">
                <div class="row mb-1 mt-1">
                  <div class="col-s ml-3">
                    <small> Sisa Kuota : </small>
                    <h2 class="text-left" style="color:red;">{{$hari->total}}</h2>
                  </div>
                  <div class="vl"></div>
                  <div class="col ml-1">
                    <h6>{{ucwords($hari->status)}}
                      <br>
                      <span> Sesi {{ucwords($hari->nama_sesi)}}</span>
                    </h6>
                    <span>{{ucwords($hari->hari)}}</span><br>
                    <span>{{$hari->jam}}</span> <br>
                    <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info float-right">Order</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <br>
        </div>
      </div>


      <!-- end -->
      <!-- ------------------------------------------------------------------------------------------------------- -->
      <!-- selasa,23 Maret -->
      <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
          <div class="m-3 text-dark text-center">
            <h1>Selasa, 23 Maret 2021</h1>
          </div>
          <!-- ........................................................................................................................... -->
          <div class="owl-carousel owl-theme mt-5">
            @foreach ($selasa as $hari)
            <div class="item">
              <div class="card">
                <div class="row mb-1 mt-1">
                  <div class="col-s ml-3">
                    <small> Sisa Kuota : </small>
                    <h2 class="text-left " style="color:red;">{{$hari->total}}</h2>
                  </div>
                  <div class="vl"></div>
                  <div class="col ml-1">
                    <h6>{{ucwords($hari->status)}}
                      <br>
                      <span> Sesi {{ucwords($hari->nama_sesi)}}</span>
                    </h6>
                    <span>{{ucwords($hari->hari)}}</span><br>
                    <span>{{$hari->jam}}</span> <br>
                    <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info float-right">Order</a>
                  </div>
                </div>

              </div>
            </div>
            @endforeach
          </div>
          <br>
        </div>
      </div>


      <!-- end -->
      <!-- ------------------------------------------------------------------------------------------------------- -->
      <!-- Rabu, 24 maret -->
      <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
          <div class="m-3 text-dark text-center">
            <h1>Rabu, 24 Maret 2021</h1>
          </div>
          <!-- ........................................................................................................................... -->
          <div class="owl-carousel owl-theme mt-5">
            @foreach ($rabu as $hari)
            <div class="item">
              <div class="card">
                <div class="row mb-1 mt-1">
                  <div class="col-s ml-3">
                    <small> Sisa Kuota : </small>
                    <h2 class="text-left " style="color:red;">{{$hari->total}}</h2>
                  </div>
                  <div class="vl"></div>
                  <div class="col ml-1">
                    <h6>{{ucwords($hari->status)}}
                      <br>
                      <span> Sesi {{ucwords($hari->nama_sesi)}}</span>
                    </h6>
                    <span>{{ucwords($hari->hari)}}</span><br>
                    <span>{{$hari->jam}}</span> <br>
                    <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info float-right">Order</a>
                  </div>
                </div>

              </div>
            </div>
            @endforeach
          </div>
          <br>
        </div>
      </div>


      <!-- end -->
      <!-- ------------------------------------------------------------------------------------------------------- -->
      <!-- Kamis, 25 Maret -->
      <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
          <div class="m-3 text-dark text-center">
            <h1>Kamis, 25 Maret 2021</h1>
          </div>
          <!-- ........................................................................................................................... -->
          <div class="owl-carousel owl-theme mt-5">
            @foreach ($kamis as $hari)
            <div class="item">
              <div class="card">
                <div class="row mb-1 mt-1">
                  <div class="col-s ml-3">
                    <small> Sisa Kuota : </small>
                    <h2 class="text-left " style="color:red;">{{$hari->total}}</h2>
                  </div>
                  <div class="vl"></div>
                  <div class="col ml-1">
                    <h6>{{ucwords($hari->status)}}
                      <br>
                      <span> Sesi {{ucwords($hari->nama_sesi)}}</span>
                    </h6>
                    <span>{{ucwords($hari->hari)}}</span><br>
                    <span>{{$hari->jam}}</span> <br>
                    <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info float-right">Order</a>
                  </div>
                </div>

              </div>
            </div>
            @endforeach
          </div>
          <br>
        </div>
      </div>


      <!-- end -->
      <!-- ------------------------------------------------------------------------------------------------------- -->
      <!-- Jumat, 26 Maret -->
      <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
          <div class="m-3 text-dark text-center">
            <h1>Jumat, 26 Maret 2021</h1>
          </div>
          <!-- ........................................................................................................................... -->
          <div class="owl-carousel owl-theme mt-5">
            @foreach ($jumat as $hari)
            <div class="item">
              <div class="card">
                <div class="row mb-1 mt-1">
                  <div class="col-s ml-3">
                    <small> Sisa Kuota : </small>
                    <h2 class="text-left " style="color:red;">{{$hari->total}}</h2>
                  </div>
                  <div class="vl"></div>
                  <div class="col ml-1">
                    <h6>{{ucwords($hari->status)}}
                      <br>
                      <span> Sesi {{ucwords($hari->nama_sesi)}}</span>
                    </h6>
                    <span>{{ucwords($hari->hari)}}</span><br>
                    <span>{{$hari->jam}}</span> <br>
                    <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info float-right">Order</a>
                  </div>
                </div>

              </div>
            </div>
            @endforeach
          </div>
          <br>
        </div>
      </div>


      <!-- end -->
      <!-- ------------------------------------------------------------------------------------------------------- -->
      <!-- Sabtu, 27 Maret -->
      <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
          <div class="m-3 text-dark text-center">
            <h1>Sabtu, 27 Maret 2021</h1>
          </div>
          <!-- ........................................................................................................................... -->
          <div class="owl-carousel owl-theme mt-5">
            @foreach ($sabtu2 as $hari)
            <div class="item">
              <div class="card">
                <div class="row mb-1 mt-1">
                  <div class="col-s ml-3">
                    <small> Sisa Kuota : </small>
                    <h2 class="text-left " style="color:red;">{{$hari->total}}</h2>
                  </div>
                  <div class="vl"></div>
                  <div class="col ml-1">
                    <h6>{{ucwords($hari->status)}}
                      <br>
                      <span> Sesi {{ucwords($hari->nama_sesi)}}</span>
                    </h6>
                    <span>{{ucwords($hari->hari)}}</span><br>
                    <span>{{$hari->jam}}</span> <br>
                    <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info float-right">Order</a>
                  </div>
                </div>

              </div>
            </div>
            @endforeach
          </div>
          <br>
        </div>
      </div>


      <!-- end -->
      <!-- ------------------------------------------------------------------------------------------------------- -->
      <!-- Minggu, 28 Maret -->
      <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
          <div class="m-3 text-dark text-center">
            <h1>Minggu, 28 Maret 2021</h1>
          </div>
          <!-- ........................................................................................................................... -->
          <div class="owl-carousel owl-theme mt-5">
            @foreach ($minggu2 as $hari)
            <div class="item">
              <div class="card">
                <div class="row mb-1 mt-1">
                  <div class="col-s ml-3">
                    <small> Sisa Kuota : </small>
                    <h2 class="text-left" style="color:red;">{{$hari->total}}</h2>
                  </div>
                  <div class="vl"></div>
                  <div class="col ml-1">
                    <h6>{{ucwords($hari->status)}}
                      <br>
                      <span> Sesi {{ucwords($hari->nama_sesi)}}</span>
                    </h6>
                    <span>{{ucwords($hari->hari)}}</span><br>
                    <span>{{$hari->jam}}</span> <br>
                    <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info float-right">Order</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <br>
        </div>
      </div>


      <!-- end -->
      <!-- ------------------------------------------------------------------------------------------------------- -->

    </div>
    <div class="m-3 text-grey text-center">
      <p>&copy; JelangJulang 2021</p>
    </div>
  </div>



</body>

</html>