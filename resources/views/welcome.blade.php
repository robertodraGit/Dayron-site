<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dayron Srl</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <div class="container mt-3">

                <sidebar>
                
                </sidebar>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active" style="background-image: url('storage/assets/homepage/001.jpg');">
                      </div>
                      <div class="carousel-item" style="background-image: url('storage/assets/homepage/002.png');">
                      </div>
                      <div class="carousel-item" style="background-image: url('storage/assets/homepage/003.jpg');">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <vs-button gradient size="large">
                            <i class="fas fa-arrow-left"></i>
                        </vs-button>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <vs-button gradient size="large">
                            <i class="fas fa-arrow-right"></i>
                        </vs-button>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

            </div>

        </div>
        {{-- JS --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
