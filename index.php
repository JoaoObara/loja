<?php
// include './includes/head.inc'; 
session_start();
include 'UI_include.php';
include INC_DIR . 'header.inc';
?>

<body>
  <div class='container'>
    <?php include INC_DIR . 'menu.inc'; ?>

    
  <main>
    <div id="mycarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>

      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
          aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <img src="./assets/images/slide1_azul.png">
          <rect width="100%" height="100%" fill="#777" /> 
          </svg>

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Seu sonho. Aqui.</h1>
              <p>
                Seu carro dos sonhos é acessível.
              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="registre.php">Registre-se</a>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <img src="./assets/images/slide2_cinza.png">
          <rect width="100%" height="100%" fill="#777" />
          </svg>

          <div class="container"> 
            <div class="carousel-caption text-start">
              <h1>Preços imbatíveis.</h1>
              <p>
                Aproveite as taxas de 0,4% ao mês
              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="registre-se.php">Registre-se</a>
              </p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http:www.w3.org/2000/svg"
          aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

          <img src="./assets/images/slide3_verde.png">
          <rect width="100%" height="100%" fill="#777" />
          </svg>

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Liberdade sem limites.</h1>
              <p>
                Viva aventuras incríveis.
              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="login.php">Saiba mais </a>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http:www.w3.org/2000/svg"
          aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

          <img src="./assets/images/slide4_amarelo.png">
          <rect width="100%" height="100%" fill="#777" />
          </svg>

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Seu novo carro!</h1>
              <p>
                Condições de pagamento como você nunca viu.
              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="login.php">Saiba mais</a>
              </p>
            </div>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


</div>

  </main>

  <?php
  include INC_DIR . 'foot.inc';
  ?>
  </div>
</body>

</html>