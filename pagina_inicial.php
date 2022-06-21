<?php
include "UI_include.php";
include INC_DIR . "valida_sessao.inc";
include INC_DIR . 'header.inc';
?>

<body>
    <div class="container">
        <?php
        include INC_DIR . 'menu.inc'; ?>
        <h3>Seja bem-vindo ao sistema para amantes de carros antigos</h3>

        <main>
            <section class="py-1 text-center container">
                <div class="row py-lg-3">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light titprincipal">OFERTAS DO DIA</h1>
                        <p class="lead text-muted">
                            Bem-vindos à Old Motors Multimarcas!
                        </p>
                    </div>
                </div>
            </section>

        <div class="album py-1 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php
                    include INC_DIR . 'conecta_mysqli.inc';
                    $sql = "SELECT carros.id_carro, marcas.desc_marca, carros.modelo, carros.descricao, carros.mod_fab, carros.cor,
                    carros.placa, carros.valor, fotos.f_imagem FROM marcas,carros,fotos WHERE carros.marca = marcas.id_marca AND carros.id_carro = fotos.f_carro AND fotos.f_destaque;";
                    $resultado = mysqli_query($conexao, $sql);
                    while ($dados = mysqli_fetch_array($resultado)) :
                ?>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./assets/images/carros/<?php echo $dados['f_imagem']; ?>">
                        <rect width="100%" height="100%" fill="#55595c" />
                        <div class="card-body">
                            <p class="card-text">
                            <p><?php echo $dados['desc_marca']; ?> - <?php echo $dados['modelo']; ?> - <?php echo $dados['mod_fab']; ?> <br />
                            <?php echo $dados['descricao']; ?> <br />
                            <?php echo $dados['cor']; ?> <?php echo $dados['placa']; ?> <br />
                            </p>
                            <h3> <?php echo "R$ " . $dados['valor']; ?></h3>
                            </p>

                        </div>
                    </div>
                </div>

                <?php endwhile; ?>

                </div>
            </div>
        </div>
        </main>

        <?php
        include INC_DIR . 'foot.inc'; ?>
        
    </div>
</body>

</html>