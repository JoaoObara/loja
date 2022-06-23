<?php
session_start();
include "UI_include.php";
include INC_DIR . 'header.inc';
?>

<body>
  <div class='container'>
    <?php include INC_DIR . 'menu.inc'; ?>

    <main>
        <h3 style="text-align:center"> Relatórios</h3>
        <p></p>

        <div class="row row-cols-sm-1 row-cols-md-4 ">

        <div class="col mb-3">
            <form action="php_action/reports.php" target="_blank" method="POST">
                <div class="mb-3">
                    <h4>Por marca</h4>
                    <label for="marca" class="form-label">Selecione a marca</label>
                    <select name="marca" class="form-select form-select-sm" aria-label=".form-select-lg example">
                        <option>--selecione--</option>
                        <option>TODAS AS MARCAS</option>
                        <?php 
                            include INC_DIR . "conecta_mysqli.inc";
                            $sql = "SELECT id_marca, desc_marca FROM marcas ORDER BY desc_marca ASC";
                            $resultado = mysqli_query($conexao, $sql);
                            while ($dados = mysqli_fetch_array($resultado)) :
                        ?>
                        <option value="<?php echo $dados['id_marca']; ?>"><?php echo $dados['desc_marca']; ?> </option>
                        <?php endwhile;
                        mysqli_close($conexao); ?>
                    </select>
                </div>
                <div class="mb-3">
                <buttom type="submit" name="btn-relatorio" class="btn btn-primary">Gerar relatorio </buttom>
            </div>
            </form>
        </div>

        <div class="col mb-3">
            <form action="php_action/reports.php" target="_blank" method="POST">
                <div class="mb-3">
                    <h4>Descrição</h4>
                    <label for="descricao" class="form-label">Pesquisar descrição dos carros</label>
                    <input type="text" class="form-control" id="descricao" name="pesquisa">
                </div>
                <div class="mb-3">
                    <button type="submit" name="btn-pesquisar-descricao" class="btn btn-primary">Gerar relatorio</button>
                </div>
            </form>
        </div>
        
        <div class="col mb-3">
            <form action="php_action/reports.php" target="_blank" method="POST">
                <div class="mb-3">
                    <h4>Ano/Modelo</h4>
                    <label for="descricao" class="form-label">Pesquisar ano dos carros</label>
                    <input type="text" class="form-control" id="descricao" name="pesquisaano">
                </div>
                <div class="mb-3">
                    <button type="submit" name="btn-pesquisar-ano" class="btn btn-primary">Gerar relatorio</button>
                </div>
            </form>
        </div>
                
        <div class="col mb-3">
            <form action="php_action/reports.php" target="_blank" method="POST">
                <div class="mb-3">
                    <h4>Faixa de preço</h4>
                    <label for="preco" class="form-label">Preço mínimo</label>
                    <input type="text" class="form-control" id="preco" name="precomin">
                </div>
                <div class="mb-3">
                    <label for="precom" class="form-label">Preço mínimo</label>
                    <input type="text" class="form-control" id="precom" name="precomax">
                </div>
                <div class="mb-3">
                    <button type="submit" name="btn-pesquisar-preco" class="btn btn-primary">Gerar relatorio</button>
                </div>
            </form>
        </div>
        
        </div>
        <br /><br />
    </main>
    <?php include INC_DIR . 'foot.inc'; ?>
  </div>
</body>

</html>