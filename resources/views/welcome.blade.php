<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dayron Srl</title>

          {{-- favicon --}}
        <link rel="apple-touch-icon" sizes="180x180" href="storage/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="storage/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="storage/favicon/favicon-16x16.png">
        <link rel="manifest" href="storage/favicon/site.webmanifest">
          {{-- end favicon --}}

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <div class="container mt-3">

              <div class="sidebar">
                <sidebar>
                
                </sidebar>
              </div>

                <div id="carousel-homepage" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-homepage" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-homepage" data-slide-to="1"></li>
                      <li data-target="#carousel-homepage" data-slide-to="2"></li>
                      <li data-target="#carousel-homepage" data-slide-to="3"></li>
                      <li data-target="#carousel-homepage" data-slide-to="4"></li>
                      <li data-target="#carousel-homepage" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active" style="background-image: url('storage/assets/homepage/001.jpg');">
                      </div>
                      <div class="carousel-item" style="background-image: url('storage/assets/homepage/002.png');">
                      </div>
                      <div class="carousel-item" style="background-image: url('storage/assets/homepage/003.jpg');">
                      </div>
                      <div class="carousel-item" style="background-image: url('storage/assets/homepage/004.jpg');">
                      </div>
                      <div class="carousel-item" style="background-image: url('storage/assets/homepage/005.jpg');">
                      </div>
                      <div class="carousel-item" style="background-image: url('storage/assets/homepage/006.JPG');">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-homepage" role="button" data-slide="prev">
                        <vs-button gradient size="large">
                            <i class="fas fa-arrow-left"></i>
                        </vs-button>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-homepage" role="button" data-slide="next">
                        <vs-button gradient size="large">
                            <i class="fas fa-arrow-right"></i>
                        </vs-button>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

                  <div class="container mt-5">
                    <div class='row justify-content-center'>
                      <h1>
                        Dayron
                      </h1>
                    </div>
                    <div class='row justify-content-center mt-3'>
                      <h4 class="col-md-8 col-sm-12 text-justify">
                        Da tre generazioni la famiglia Amato ha sempre lavorato nel settore meccanico, tramandando il mestiere da padre in figlio. Diverse officine in differenti paesi della Sicilia orientale e delle Isole Eolie hanno portato e portano il nome della famiglia.
                      </h4>
                    </div>
                    <div class="row justify-content-center mt-3">
                      <h1>
                        Noleggio
                      </h1>
                    </div>
                    <div class="row justify-content-center mt-3 mb-3">
                      <div class="col-sm-12 col-lg-4">
                        <vs-card>
                          <template #title>
                            <h3>Barche e gommoni</h3>
                          </template>
                          <template #img>
                            <img src="storage/assets/cardshome/barca.png" alt="">
                          </template>
                          <template #text>
                            <p>
                              A partire da 30,00 euro
                            </p>
                          </template>
                        </vs-card>
                      </div>
                      <div class="col-sm-12 col-lg-4">
                        <vs-card>
                          <template #title>
                            <h3>Pedalò</h3>
                          </template>
                          <template #img>
                            <img src="storage/assets/cardshome/pedalo.jpg" alt="">
                          </template>
                          <template #text>
                            <p>
                              A partire da 10,00 euro
                            </p>
                          </template>
                        </vs-card>
                      </div>
                      <div class="col-sm-12 col-lg-4">
                        <vs-card>
                          <template #title>
                            <h3>Canoe</h3>
                          </template>
                          <template #img>
                            <img src="storage/assets/cardshome/canoe.jpg" alt="">
                          </template>
                          <template #text>
                            <p>
                              A partire da 5,00 euro
                            </p>
                          </template>
                        </vs-card>
                      </div>
                    </div>
                  </div>

            </div>

        </div>
        {{-- JS --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
