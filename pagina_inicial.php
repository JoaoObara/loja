<?php
include "UI_include.php";
include INC_DIR . "valida_sessao.inc";
include INC_DIR . 'header.inc';
?>
<body>
<div class="container">
<?php
include INC_DIR . 'menu.inc'; ?>
<h3>Seja bem-vindo ao sistema!!!</h3>

<main>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item active">
<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" 
focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

<div class="container">
  <div class="carousel-caption text-start">
    <h1>Examplo de headline.</h1>
    <p>Algum conteúdo de espaço reservado representativo para o primeiro slide do carrossel.</p>
    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
  </div>
</div>
</div>
<div class="carousel-item">
<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" 
focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

<div class="container">
  <div class="carousel-caption">
    <h1>Outro exemplo headline.</h1>
    <p>Algum conteúdo de espaço reservado representativo para o segundo slide do carrossel.</p>
    <p><a class="btn btn-lg btn-primary" href="#">Saiba Mais</a></p>
  </div>
</div>
</div>
<div class="carousel-item">
<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" 
focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

<div class="container">
  <div class="carousel-caption text-end">
    <h1>Mais um para uma boa medida.</h1>
    <p>Algum conteúdo de espaço reservado representativo para o terceiro slide deste carrossel.</p>
    <p><a class="btn btn-lg btn-primary" href="#">Procurar galeria</a></p>
  </div>
</div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Anterior</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Próximo</span>
</button>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row">
<div class="col-lg-4">
<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" 
aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" 
fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

<h2>Heading</h2>
<p>Algum conteúdo de espaço reservado representativo para as três colunas de texto abaixo do carrossel. Esta é a primeira coluna.</p>
<p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
</div><!-- /.col-lg-4 -->
<div class="col-lg-4">
<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" 
aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" 
fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

<h2>Heading</h2>
<p>Outro conteúdo de espaço reservado representativo. Desta vez, passamos para a segunda coluna.</p>
<p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
</div><!-- /.col-lg-4 -->
<div class="col-lg-4">
<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" 
aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" 
fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

<h2>Heading</h2>
<p>E por último, a terceira coluna de conteúdo de espaço reservado representativo.</p>
<p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
</div><!-- /.col-lg-4 -->
</div><!-- /.row -->


<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
<div class="col-md-7">
<h2 class="featurette-heading">Primeiro título featurette. <span class="text-muted">Vai explodir sua mente.</span></h2>
<p class="lead">Alguns ótimos conteúdos de espaço reservado para o primeiro featurette aqui. Imagine uma prosa excitante aqui.</p>
</div>
<div class="col-md-5">
<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" 
xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" 
focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

</div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
<div class="col-md-7 order-md-2">
<h2 class="featurette-heading">Sim, é tão bom. <span class="text-muted">Veja você mesmo.</span></h2>
<p class="lead">Outro featurette? É claro. Mais conteúdo reservado aqui para lhe dar uma ideia de como esse layout funcionaria com algum conteúdo real no lugar.</p>
</div>
<div class="col-md-5 order-md-1">
<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" 
width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" 
preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" 
fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

</div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
<div class="col-md-7">
<h2 class="featurette-heading">E por último, este. <span class="text-muted">Xeque-mate.</span></h2>
<p class="lead">E sim, este é o último bloco de conteúdo de espaço reservado representativo. Mais uma vez, 
    não pretendo realmente ser lido, simplesmente aqui para dar-lhe uma melhor visão de como isso seria com algum conteúdo real. Seu conteúdo.</p>
</div>
<div class="col-md-5">
<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" 
width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" 
preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" 
fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

</div>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

</div><!-- /.container -->
</main>

<?php
include INC_DIR . 'foot.inc'; ?>
</div>
</body>
</html>
