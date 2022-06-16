<?php
include 'UI_include.php';
include INC_DIR . "valida_sessao.inc";
include INC_DIR . 'header.inc';
?>

<body>
    <div class="container">
        <?php include INC_DIR . 'menu.inc';
        //select
        if (isset ($_GET['id'])) :
            include "conecta_mysqli.inc";
            $id = mysqli_escape_string($conexao, $_GET['id']);
            $sql = "SELECT carros.id_carro, marcas.desc_marca, marcas.id_marca, carros.modelo,
            carros.descricao, carros.mod.fab, carros.cor, carros.placa, carros.valor FROM marcas, carros WHERE carros.marca = marcas.id_marca AND carros.id_carro=$id";
            $resultado = mysqli_query($conexao, $sql);
            $dados = mysqli_fetch_array($resultado);
        endif;
            //Recuperar dados em variaveis
            $id_carro = $dados['id_carro'];
            $id_marca = $dados['id_marca'];
            $desc_marca = $dados['desc_marca'];
            $modelo = $dados['modelo'];
            $descricao = $dados['descricao'];
            $mod_fab = $dados['mod_fab'];
            $cor = $dados['cor'];
            $placa = $placa['placa'];
            $valor = $dados['valor'];
        ?>