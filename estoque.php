<?php
include 'UI_include.php';
include INC_DIR . "valida_sessao.inc";
include INC_DIR . 'header.inc';
?>


<body>
    <div class="container">
        <?php include INC_DIR . 'menu.inc'; ?>

        <?php
        if (isset($_GET['incsucesso'])) :
            echo "<div class='alert alert-success' role='alert'>";
            echo "NOVO CARRO INCLUÍDO COM SUCESSO";
            echo "</div>";
        endif;

        if (isset($_GET['altsucesso'])) :
            echo "<div class='alert alert-success' role='alert'>";
            echo "CARRO ALTERADO COM SUCESSO";
            echo "</div>";
        endif;

        if (isset($_GET['delsucesso'])) :
            echo "<div class='alert alert-success' role='alert'>";
            echo "CARRO EXCLUÍDO COM SUCESSO";
            echo "</div>";
        endif;

        if (isset($_GET['erro'])) :
            echo "<div class='alert alert-danger' role='alert'>";
            echo "ERRO DETECTADO";
            echo "</div>";
        endif;
        ?>
    </div>

    <h3 style="text-align:center;">Estoque de carros</h3>
    <table class="container table">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Descrição</th>
                <th>Mod/Fab</th>
                <th>Cor</th>
                <th>Placa</th>
                <th class="text-right">Preço</th>
                <th class="text-right">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include INC_DIR . "conecta_mysqli.inc";
            $sql = "SELECT carros.id_carro, marcas.desc_marca, carros.modelo, carros.descricao,
carros.mod_fab, carros.cor, carros.placa, carros.valor FROM marcas,carros WHERE carros.marca =
marcas.id_marca ORDER BY carros.marca ASC, carros.modelo ASC,carros.mod_fab ASC;";
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
                    <td><?php echo $dados['valor']; ?></td>
                    <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn-sm btn-secondary">
                            <i class="material-icons">person</i>
                        </button>

                        <a href="editar.php?id=<?php echo $dados['id_carro']; ?>">
                            <button alt="editar" type="button" rel="tooltip" class="btn-sm btn-success">
                                <i class="material-icons">edit</i>
                            </button></a>

                        <a href="#modal<?php echo $dados['id_carro']; ?>">
                            <button alt="excluir" type="button" rel="tooltip" class="btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $dados['id_carro']; ?>">
                                <i class="material-icons">close</i>
                            </button></a>
                        <!-- MODAL -->
                        <div class="modal fade" id="exampleModal<?php echo $dados['id_carro']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tem certeza que quer excluir esse carro?</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><?php echo $dados['desc_marca']; ?> - <?php echo $dados['modelo']; ?> - <?php echo $dados['descricao']; ?>
                                            - <?php echo $dados['mod_fab']; ?> - <?php echo $dados['cor']; ?> - <?php echo $dados['placa']; ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="php_action/delete.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $dados['id_carro']; ?>">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não excluir</button>
                                            <button type="submit" name="btn-deletar" class="btn btn-primary">Confirmar exclusão</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FIM MODAL -->

                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <?php
    include INC_DIR . 'foot.inc';
    ?>
</body>

</html>