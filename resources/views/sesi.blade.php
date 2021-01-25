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
  <!-- ......................................................................................................................... -->


  <style>
  .owl-carousel .item {
    height: 10rem;
    background: #4DC7A0;
    padding: 1rem;
  }
  .owl-carousel .item h4 {
    color: #FFF;
    font-weight: 400;
    margin-top: 0rem;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
<script>
jQuery(document).ready(function($){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
  })
})
</script>



<!-- .................................................................................................................................... -->
<!-- //Senin -->
<div class="">
  <div class="m-3 text-light text-center">
    <h1 >Senin</h1>
  </div>
  <!-- ........................................................................................................................... -->
  <div class="owl-carousel owl-theme mt-5">
    @foreach ($senin as $hari)
    <div class="item">
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
              <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info pull-right">Order</a>
            </div>
          </div>

        </div>
      </div>
      @endforeach
    </div>
    <br>
  </div>


  <!-- //selasa -->
  <div class="">
    <div class="m-3 text-light text-center">
      <h1 >Selasa</h1>
    </div>
    <!-- ........................................................................................................................... -->
    <div class="owl-carousel owl-theme mt-5">
      @foreach ($selasa as $hari)
      <div class="item">
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
                <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info pull-right">Order</a>
              </div>
            </div>

          </div>
        </div>
        @endforeach
      </div>
      <br>
    </div>




    <!-- //rabu -->
    <div class="">
      <div class="m-3 text-light text-center">
        <h1 >Rabu</h1>
      </div>
      <!-- ........................................................................................................................... -->
      <div class="owl-carousel owl-theme mt-5">
        @foreach ($rabu as $hari)
        <div class="item">
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
                  <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info pull-right">Order</a>
                </div>
              </div>

            </div>
          </div>
          @endforeach
        </div>
        <br>
      </div>



      <!-- //kamis -->
      <div class="">
        <div class="m-3 text-light text-center">
          <h1 >Kamis</h1>
        </div>
        <!-- ........................................................................................................................... -->
        <div class="owl-carousel owl-theme mt-5">
          @foreach ($kamis as $hari)
          <div class="item">
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
                    <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info pull-right">Order</a>
                  </div>
                </div>

              </div>
            </div>
            @endforeach
          </div>
          <br>
        </div>



        <!-- //jumat -->
        <div class="">
          <div class="m-3 text-light text-center">
            <h1 >Jumat</h1>
          </div>
          <!-- ........................................................................................................................... -->
          <div class="owl-carousel owl-theme mt-5">
            @foreach ($jumat as $hari)
            <div class="item">
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
                      <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info pull-right">Order</a>
                    </div>
                  </div>

                </div>
              </div>
              @endforeach
            </div>
            <br>
          </div>



          <!-- //Sabtu -->
          <div class="">
            <div class="m-3 text-light text-center">
              <h1 >Sabtu</h1>
            </div>
            <!-- ........................................................................................................................... -->
            <div class="owl-carousel owl-theme mt-5">
              @foreach ($sabtu as $hari)
              <div class="item">
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
                        <a href="{{route('post.show',['id'=>$hari->no_sesi, 'total'=>$hari->total])}}" class="btn btn-xs btn-info pull-right">Order</a>
                      </div>
                    </div>

                  </div>
                </div>
                @endforeach
              </div>
              <br>
            </div>



          </body>
          </html>
