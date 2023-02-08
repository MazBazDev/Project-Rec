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
              <a href="" class="btn">Accèder à la billeterie</a>
              <a href="" class="btn">Proposer un court-métrages</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="se2" id="section2">
    <div class="container ">
      <div class="row flex-row-reverse">
        <div class="col-md-6">
          <h1>à l'affiche <span class="dot"></span></h1>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum omnis ducimus facilis ipsa deserunt quis magnam, delectus modi iste! A tempore nam et itaque fugiat accusamus beatae aliquid mollitia magnam!</p>
        </div>
        <div class="col-md-6">
          hello
        </div>
      </div>
    </div>
  </section>
  <section class="se3" id="section3" style="position: relative;">
    <canvas id="confettis_canvas"></canvas>
    <div class="container" style="z-index: 1;">
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
        <div class="col-md-6">
          <h1>Lieux & dates <span class="dot"></span></h1>
          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.272480634269!2d4.835404815530096!3d45.74568307910521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea47ef557179%3A0x9c043d6c0f43647f!2sLyon%20Ynov%20Campus!5e0!3m2!1sfr!2sfr!4v1675243769622!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="col-md-6">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dignissimos dolore rem fuga omnis enim eligendi expedita hic, velit, suscipit officiis itaque inventore explicabo obcaecati fugit molestiae praesentium maiores exercitationem!</p>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container mb-3">
      <div class="row gap-3">
        <div class="col-md-4">
          <img class="mb-3" src="https://wweb.dev/resources/navigation-generator/logo-placeholder.png" alt="My Awesome Website" />
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore excepturi nobis quidem labore a. Nulla exercitationem adipisci nihil, perspiciatis, saepe quos quidem harum, modi sapiente labore quibusdam rerum officiis consectetur!</p>
        </div>
        <div class="col-md-4">
          <h3>Liens utiles</h3>
          <ul>
            <li><a href="#onDisplay">A l'affiche</a></li>
            <li><a href="#supportUs">Nous soutenir</a></li>
            <li><a href="">Réserver</a></li>
            <li><a href="">Proposer un court métrage</a></li>
            <li><a href="">Devenir partenaire</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3>Contacts</h3>
          <ul class="social-links">
            <li><a href="mailto:rec.festival@gmail.com"><i class="bi bi-envelope"></i> rec.festival@gmail.com</a></li>
            <li><a href="https://www.instagram.com/festival.rec/"><i class="bi bi-instagram"></i> @festival.rec</a></li>
            <li><a href=""><i class="bi bi-facebook"></i> Rec.Festival</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container my-3">
      <div class="row">
        <div class="col-md-12">
          <hr>
          <div class="d-flex justify-center" style="width: 100%">
            <p>{{ date("Y") }} | Rec © Tous droits réservés</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
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
        if (id == "section3" && goalCompleted) {
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
</script>
</html>