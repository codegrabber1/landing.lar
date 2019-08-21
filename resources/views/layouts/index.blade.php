<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Font Awesome Icons -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name') }}</title>
</head>
<body id="page-top">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 " id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">{{ config('app.name') }}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                @foreach($menu as $item)
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#{{ $item['slug'] }}">{{ $item['link'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

@if($pages)
    @foreach($pages as $k=>$item)
        @if($k%2 == 0)
            <!-- Masthead -->
            <header class="masthead">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center text-center">

                        <div class="col-lg-10 align-self-end">
                            <h1 class="text-uppercase text-white font-weight-bold">{{ $item->title }}</h1>
                            <hr class="divider my-4">
                        </div>
                        <div class="col-lg-8 align-self-baseline">
                            <p class="text-white-75 font-weight-light mb-5">{{ $item->description }}</p>
                            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                        </div>

                    </div>
                </div>
            </header>
            @else
            <!-- About Section -->
            <section class="page-section bg-primary" id="about">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2 class="text-white mt-0">{{ $item->title }}</h2>
                            <hr class="divider light my-4">
                            <p class="text-white-50 mb-4">{{ $item->description }}</p>

                            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
@endif
<!-- Services Section -->
@if($services)
<section class="page-section" id="services">
    <div class="container">
        <h2 class="text-center mt-0">At Your Service</h2>
        <hr class="divider my-4">
        <div class="row">
            @foreach($services as $item)
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <i class="{{ $item->images }}"></i>
                    <h3 class="h4 mb-2">{{ $item->heading }}</h3>
                    <p class="text-muted mb-0">{{ $item->excerpt }}</p>
                </div>
            </div>
           @endforeach
        </div>
    </div>
</section>
@endif
@if($portfolio)
<!-- Portfolio Section -->
<section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        @foreach($portfolio as $item)
          <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/{{ $item->images }}">
            <img class="img-fluid" src="img/portfolio/thumbnails/{{ $item->images }}" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                {{ $item->category->title }}
              </div>
              <div class="project-name">
                {{ $item->title }}
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
  </div>
</section>
@endif
@if($contact)
<!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
        </div>
      </div>
      <div class="row">
        @foreach($contact as $k => $item)
            @if($k%2 == 0)
            <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                <i class="{{ $item->images }}"></i>
              <div>{{ $item->info }}</div>
            </div>
            @else
            <div class="col-lg-4 mr-auto text-center">

              <i class="{{ $item->images }}"></i>
              <div><a class="d-block" href="mailto:contact@yourwebsite.com">{{ $item->info }}</a></div>
            </div>
            @endif
        @endforeach
      </div>
    </div>
  </section>
@endif
<!-- Footer -->
<footer class="bg-light py-5">
    <div class="container">
        <div class="small text-center text-muted">Copyright &copy; <?php echo date('Y')?> - {{ config('app.name') }}</div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('js/creative.min.js') }}"></script>
</body>
</html>