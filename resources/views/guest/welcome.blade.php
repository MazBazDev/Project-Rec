@extends('layouts.guest')

@section('title', "Accueil")

@section('content')

@if(setting("sec1.enable"))
<section class="se1" id="section1">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>{{ setting("sec1.title") }}<span class="dot"></span></h1>
        <p class="mb-5">{!! setting("sec1.content") !!}</p>
        <div class="links">
            <a href="{{ setting("sec1.link1.url") }}" class="btn">{{ setting("sec1.link1.title") }}</a>
            <a href="{{ setting("sec1.link2.url") }}" class="btn">{{ setting("sec1.link2.title") }}</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endif

@if(setting("sec2.enable"))
<section class="se2" id="section2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center mb-3">
          <h1>{{ setting("sec2.title") }} <span class="dot"></span></h1>
        </div>
        <div class="d-flex justify-center">
          <div class="carousel-wrap">
            <div id="owl-spotlight" class="owl-carousel text-center">
              @foreach ($posters as $item)
                <a href="{{ route('posters.show', $item) }}" target="blank" class="item">
                  <div class="card">
                    <img src="{{ $item->imgUrl() }}">
                    <p>{{ $item->name }}</p>
                  </div>
                </a>
              @endforeach
            </div>
          </div>
        </div>
        <div class="d-flex justify-center mt-5">
          <a href="" class="btn">{{ setting("sec2.link1.title") }}</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endif

@if(setting("sec3.enable"))
<section class="se3" id="section3" style="position: relative;">
  <div class="container">
  <canvas id="confettis_canvas"></canvas>
    <div class="row">
      <div class="col-md-7 mb-3">
        <h1>{{ setting("sec3.title") }} <span class="dot"></span></h1>
        <p class="mb-5">{!! setting("sec3.content") !!}</p>
      </div>
      <div class="col-md-12">
          <div class="progress">
            <div class="progress-bar" style="width: {{ $ulule->percent }}%;">{{ $ulule->percent }}%</div>
          </div>
          <div class="amounts">
            <span>0 {{ $ulule->currency }}</span>
            <span>{{ $ulule->goal . " " . $ulule->currency }}</span>
          </div>
          <div class="d-flex justify-center">
            <a href="{{ $ulule->absolute_url }}" target="blank" class="btn">{{ setting("sec3.link1.title") }}</a>
          </div>
      </div>
    </div>
  </div>
</section>
@endif

@if(setting("sec4.enable"))
<section class="se4" id="section4">
  <div class="container">
    <div class="row flex-row-reverse">
      <div class="col-md-6 px-3">
        <h1>{{ setting("sec4.title") }} <span class="dot"></span></h1>
        <p>{!! setting("sec4.content") !!}</p>
      </div>
      <div class="col-md-6 px-3">
        <div class="video-container">
          <iframe class="video" src="{{ setting("sec4.youtube.link") }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
@endif

@if(setting("sec5.enable"))
<section class="se5" id="section5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>{{ setting("sec5.title") }} <span class="dot"></span></h1>
        <div class="mt-3 d-flex flex-wrap" style="padding: 10px">
          <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
          <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
          <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
          <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
          <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
          <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
        </div>
        <div class="d-flex justify-center mt-5">
          <a href="" class="btn">{{ setting("sec5.link1.title") }}</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endif

@if(setting("modal.enable"))
<div id="selectModal" class="modal">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>{{ setting("modal.title") }}</h1>
        <h3>{!! setting("modal.content") !!}</h3>
      </div>
      <div class="col">
        <div class="modal-content">
          <div class="close scaleup" >
            <img src="{{ asset("assets/img/logo_white.svg") }}" alt="My Awesome Website" />
          </div>
          <a href="/" class="scaleup">
            <img src="{{ asset("assets/img/logo_white.svg") }}" alt="My Awesome Website" />
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

@endsection

@push('footer-scripts')
<script>
    const links = document.querySelectorAll('nav a');
    const sections = document.querySelectorAll('section');
    const goalCompleted = {{ $ulule->goal_raised }}

    const canvas = document.getElementById('confettis_canvas')
    const jsConfetti = new JSConfetti({ canvas })

    const options = {
    threshold: 0.5
    };

    const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      
        if (entry.isIntersecting) {
          const id = entry.target.id;
          const activeLink = document.querySelector(`nav a[href="#${id}"]`);
          links.forEach(link => {
              link.classList.remove('active');
          });
          activeLink.classList.add('active');
          if (id == "section3") {
            startConffetis() 
          }
        }
    });
    }, options);

    sections.forEach(section => {
      observer.observe(section);
    });
</script>

@if(setting("sec3"))
  <script>
    $('#owl-spotlight').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      autoplay:true,
      autoplayTimeout:1800,
      autoplayHoverPause:true,
      autoWidth:true,
      lazyLoad: true,

      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  </script>
@endif

@if(setting("sec3"))
  <script>
    function startConffetis() {
        setTimeout(() => {
          jsConfetti.addConfetti({
            emojis: ['🍿','🍿','🍿', '🎬', '❤️', '🔥'],
            emojiSize: 50,
            confettiNumber: 35,
          })
        }, 500)   
      }
  </script>
@endif

@if(setting('modal.enable'))
  <script>
     var modal = document.getElementById("selectModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
@endif

@endpush
