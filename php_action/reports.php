<?php

include "../UI_include.php";
include INC_DIR . 'header.inc';
include INC_DIR . 'conecta_mysqli.inc';
?>

<body>
    <div class="selection no-pad-bot" id="index-banner">
        <div class="container">
            <br /><br />
            <div class="row center">
                <div style="text-align: center;">
                <img width="100px" src="../assets/images/logo_oldmotors_horiz_vert_0.png">
                <p></p>
            </div>
            <div class="col s12 m12 l12 xl12">

            <?php  
                if(isset($_POST['btn-pesquisar-descricao'])) :
                    $pesquisa = $_POST['pesquisa'];
            ?>
                <h3 style="text-align: center;">Resultado da pesquisa de descrição</h3>
                <h2 style="text-align: center;">Atributo pesquisado: <?php echo $pesquisa ?> </h2>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Descrição</th>
                            <th>Ano Mod/Fab</th>
                            <th>Cor</th>
                            <th>Placa</th>
                            <th>Preço</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php  
                        include INC_DIR . '/conecta_mysqli.inc';
                        $sql = "SELECT carros.id_carro, marcas.desc_marca, carros.modelo, carros.descricao, carros.mod_fab, carros.cor, carros.placa, 
                        carros.valor FROM marcas,carros WHERE carros.marca = marcas.id_marca AND carros.descricao LIKE '%$pesquisa%' ORDER BY carros.marca 
                        ASC, carros.modelo ASC, carros.mod_fab ASC;";
                        $resultado = mysqli_query($conexao, $sql);
                        while ($dados = mysqli_fetch_array($resultado)) :
                    ?>
                    <tr>
                        <td><?php echo $dados['desc_marca']; ?></td>
                        <td><?php echo $dados['modelo']; ?></td>
                        <td><?php echo $dados['descricao']; ?></td>
                        <td><?php echo $dados['mod_fab']; ?></td>
                        <td><?php echo $dados['cor']; ?></td>
                        <td><?php echo $dados['placa']; ?></td>
                        <td><?php echo "R$ ";
                            printf ("%.2f", $dados['valor']); ?></td>
                    </tr>
                    <?php 
                     endwhile;
                     endif; 
                     ?>




            <?php 
                if(isset($_POST['btn-pesquisar-ano'])) :
                    $pesquisaano = $_POST['pesquisaano'];
            ?>
                <h3 style="text-align:center ;">Resultado da pesquisa por Ano</h3>
                <h2 style="text-align:center ;"> Atributo pesquisado: <?php echo $pesquisaano ?></h2>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Descrição</th>
                            <th>Ano Mod/Fab</th>
                            <th>Cor</th>
                            <th>Placa</th>
                            <th>Preço</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php  
                        include INC_DIR . '/conecta_mysqli.inc';
                        $sql = "SELECT carros.id_carro, marcas.desc_marca, carros.modelo, carros.descricao, carros.mod_fab, carros.cor, carros.placa, 
                        carros.valor FROM marcas,carros WHERE carros.marca = marcas.id_marca AND carros.mod_fab LIKE '%$pesquisaano%' ORDER BY carros.marca 
                        ASC, carros.modelo ASC, carros.mod_fab ASC;";
                        $resultado = mysqli_query($conexao, $sql);
                        while ($dados = mysqli_fetch_array($resultado)) :
                    ?>
                    <tr>
                        <td><?php echo $dados['desc_marca']; ?></td>
                        <td><?php echo $dados['modelo']; ?></td>
                        <td><?php echo $dados['descricao']; ?></td>
                        <td><?php echo $dados['mod_fab']; ?></td>
                        <td><?php echo $dados['cor']; ?></td>
                        <td><?php echo $dados['placa']; ?></td>
                        <td><?php echo "R$ ";
                            printf ("%.2f", $dados['valor']); ?></td>
                    </tr>
                    <?php 
                     endwhile;
                     endif; 
                     ?>

              


            <?php 
                if(isset($_POST['btn-pesquisar-preco'])) :
                    $precomin = (int) $_POST['precomin'];
                    $precomax = (int) $_POST['precomax'];
            ?>
                <h3 style="text-align:center ;">Resultado da pesquisa</h3>
                <h2 style="text-align:center ;"> Faixa de preço da pesquisa: <?php echo 'R$ ' . $precomin . ' a R$ ' . $precomax; ?></h2>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Descrição</th>
                            <th>Ano Mod/Fab</th>
                            <th>Cor</th>
                            <th>Placa</th>
                            <th>Preço</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php  
                        include INC_DIR . '/conecta_mysqli.inc';
                        $sql = "SELECT carros.id_carro, marcas.desc_marca, carros.modelo, carros.descricao, carros.mod_fab, carros.cor, carros.placa, 
                        carros.valor FROM marcas,carros WHERE carros.marca = marcas.id_marca AND carros.valor >= $precomin AND carros.valor <= $precomax 
                        ORDER BY carros.valor ASC";
                        $resultado = mysqli_query($conexao, $sql);
                        while ($dados = mysqli_fetch_array($resultado)) :
                    ?>
                    <tr>
                        <td><?php echo $dados['desc_marca']; ?></td>
                        <td><?php echo $dados['modelo']; ?></td>
                        <td><?php echo $dados['descricao']; ?></td>
                        <td><?php echo $dados['mod_fab']; ?></td>
                        <td><?php echo $dados['cor']; ?></td>
                        <td><?php echo $dados['placa']; ?></td>
                        <td><?php echo "R$ ";
                            printf ("%.2f", $dados['valor']); ?></td>
                    </tr>
                    <?php 
                     endwhile;
                     endif; 
                     ?>
              


            <?php 
                if(isset($_POST['btn-relatorio'])) :
                    $marcaselecionada = $_POST['marca'];
                    include INC_DIR . 'conecta_mysqli.inc';
            ?>
                <h3 style="text-align:center ;">Resultado por marca</h3>
                <h4 style="text-align:center ;"> <?php echo $marcaselecionada; ?></h4>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Descrição</th>
                            <th>Ano Mod/Fab</th>
                            <th>Cor</th>
                            <th>Placa</th>
                            <th>Preço</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php  
                    if ($marcaselecionada == 'TODAS AS MARCAS') :
                        $sql = "SELECT carros.id_carro, marcas.desc_marca, carros.modelo, carros.descricao, carros.mod_fab, carros.cor, carros.placa, 
                        carros.valor FROM marcas,carros WHERE carros.marca = marcas.id_marca ORDER BY carros.marca ASC, 
                        carros.modelo ASC, carros.mod_fab ASC;";
                    else :
                        $sql = "SELECT carros.id_carro, marcas.desc_marca, carros.modelo, carros.descricao, carros.mod_fab, carros.cor, carros.placa, 
                        carros.valor FROM marcas,carros WHERE carros.marca = marcas.id_marca AND marcas.id_marca = $marcaselecionada 
                        ORDER BY carros.marca ASC, carros.modelo ASC, carros.mod_fab ASC;";
                    endif;

                        $resultado = mysqli_query($conexao, $sql);
                        while ($dados = mysqli_fetch_array($resultado)) :
                    ?>
                    <tr>
                        <td><?php echo $dados['desc_marca']; ?></td>
                        <td><?php echo $dados['modelo']; ?></td>
                        <td><?php echo $dados['descricao']; ?></td>
                        <td><?php echo $dados['mod_fab']; ?></td>
                        <td><?php echo $dados['cor']; ?></td>
                        <td><?php echo $dados['placa']; ?></td>
                        <td><?php echo "R$ ";
                            printf ("%.2f", $dados['valor']); ?></td>
                    </tr>
                    <?php 
                     endwhile;
                     endif; 
                     ?>
  
            </tbody>
                </table>

                <div style="text-align: center;" class="mt-3">
                     <button class="btn btn-primary" onclick="window.print()">Imprimir</button>
                </div>

            </div>
            </div>
            <br /><br />
        </div>
    </div>
</body>

</html>