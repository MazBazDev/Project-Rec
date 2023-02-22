<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset("assets/css/styles.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/css/bootstrap/system.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/css/bootstrap/icons.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/css/navbar.css") }}">
  <link rel="stylesheet" href="https://use.typekit.net/dnb0epn.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/js-confetti@0.9.0/dist/js-confetti.browser.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.2.min.js"  crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="{{ asset("assets/css/owl/owl.carousel.min.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/css/owl/owl.theme.default.min.css") }}">
  <script src="{{ asset("assets/js/owl/owl.carousel.min.js") }}"></script>

</head>

<body>
 @include('components.navbar')

  <section class="se1" id="section1">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>LE 22 AVRIL 2023 <span class="dot"></span></h1>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum omnis ducimus facilis ipsa deserunt quis magnam, delectus modi iste! A tempore nam et itaque fugiat accusamus beatae aliquid mollitia magnam!</p>
          <div class="links">
              <a href="" class="btn">🎟️ Accèder à la billeterie</a>
              <a href="" class="btn">🎥 Inscrivez votre film</a>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <section class="se2" id="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center mb-3">
            <h1>La selection <span class="dot"></span></h1>
          </div>
          <div class="d-flex justify-center">
            <div class="carousel-wrap">
              <div id="owl-spotlight" class="owl-carousel text-center">
                <a href="#" target="blank" class="item">
                  <div class="card">
                    <img src="http://placehold.it/300x400">
                    <p>Lorem</p>
                  </div>
                </a>

                <a href="#" target="blank" class="item">
                  <div class="card">
                    <img src="http://placehold.it/300x400">
                    <p>Lorem</p>
                  </div>
                </a>
                <a href="#" target="blank" class="item">
                  <div class="card">
                    <img src="http://placehold.it/300x400">
                    <p>Lorem</p>
                  </div>
                </a>
                <a href="#" target="blank" class="item">
                  <div class="card">
                    <img src="http://placehold.it/300x400">
                    <p>Lorem</p>
                  </div>
                </a>
                <a href="#" target="blank" class="item">
                  <div class="card">
                    <img src="http://placehold.it/300x400">
                    <p>Lorem</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="d-flex justify-center mt-5">
            <a href="" class="btn"> Voir la selection complete</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="se3" id="section3" style="position: relative;">
    <div class="container">
    <canvas id="confettis_canvas"></canvas>
      <div class="row">
        <div class="col-md-7 mb-3">
          <h1>NOUS SOUTENIR <span class="dot"></span></h1>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum omnis ducimus facilis ipsa deserunt quis magnam, delectus modi iste! A tempore nam et itaque fugiat accusamus beatae aliquid mollitia magnam!</p>
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
              <a href="{{ $ulule->absolute_url }}" target="blank" class="btn">Contribuer au projet ❤️</a>
            </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="se4" id="section4">
    <div class="container">
      <div class="row flex-row-reverse">
        <div class="col-md-6 px-3">
          <h1>Le festival <span class="dot"></span></h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo facilis corrupti ex hic, voluptas nulla aliquam facere fugiat nam doloribus vero placeat. Omnis quis nobis veniam libero pariatur ipsam earum!</p>
        </div>
        <div class="col-md-6 px-3">
          <div class="video-container">
            <iframe class="video" src="https://www.youtube.com/embed/msizPweg3kE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="se5" id="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Partenaires <span class="dot"></span></h1>
          <div class="mt-3 d-flex flex-wrap" style="padding: 10px">
            <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
            <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
            <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
            <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
            <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
            <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
          </div>
          <div class="d-flex justify-center mt-5">
            <a href="" class="btn">Rejoindre l'aventure !</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="se5" id="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Découvez MakeIt</h1>
          <div class="mt-3 d-flex flex-wrap" style="padding: 10px">
            <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
            <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
            <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
            <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
            <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
            <div class="partenaire"><a href=""><img src="http://via.placeholder.com/640x360" alt=""></a></div>
          </div>
          <div class="d-flex justify-center mt-5">
            <a href="" class="btn">Rejoindre l'aventure !</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="selectModal" class="modal">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>hello</h1>
          <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel reiciendis dolor, earum impedit quod assumenda similique, architecto fugit sapiente, nobis porro tenetur magnam harum! Beatae necessitatibus commodi totam explicabo soluta.</h3>
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
  
  @include("components.footer")
</body>

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

  
  function startConffetis() {
    setTimeout(() => {
      jsConfetti.addConfetti({
        emojis: ['🍿','🍿','🍿', '🎬', '❤️', '🔥'],
        emojiSize: 50,
        confettiNumber: 35,
      })
    }, 500)   
  }

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

  var modal = document.getElementById("selectModal");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
</script>
</html>