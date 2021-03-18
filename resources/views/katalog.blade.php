<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Order</title>

  <!-- carousel -->
  

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

  <style>
  body {
    font-family: 'Nunito';
  }
  

  </style>

</head>


<body class="body bg-white">


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
            items: 1,
          },
          1000: {
            items: 1,
          }
        }
      })
    })


    $(document).ready(function() {
      $(".close").click(function() {
        $("#myAlert").alert('close');
      });
    });
  </script>




  
<div>
@foreach($pengrajin as $desk)
   <p>{{$desk->nama}}</p>
   <p>{{$desk->brand}}</p>
   <p>{{$desk->alamat}}</p>
   <p>{{$desk->workshop}}</p>
   <br><br>
  @endforeach

</div>

<div>Ke1</div>

<div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
          <!-- ........................................................................................................................... -->
          <div class="owl-carousel owl-theme mt-5">
            @foreach ($ke1 as $slider)
            <div class="item">
              <div class="card">
                <div class="row mb-1 mt-1">
                  
                <img src="{{url('images/pengrajin', $slider->image)}}" class="d-block w-100"  alt="image"> 
                  
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <br>
        </div>
      </div>
</body>
</html>
