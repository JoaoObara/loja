<?php //Sessao
session_start();

//Conexao

include '../UI_include.php';
include INC_DIR ."/conecta_mysqli.inc";
if (isset($_POST['btn-deletar-usuario'])) :
    $usuario = $_POST['usuario'];
    $sql = "DELETE FROM usuarios WHERE u_usuario = '$usuario'";
    $resultado = mysqli_query($conexao, $sql);
    $linhasafetadas = mysqli_affected_rows($conexao);
    if ($linhasafetadas ==1) :
        mysqli_close($conexao);
        echo "<script> location.replace('../admin.php?delsucesso'); </script>";
    else: 
        echo "<script> location.replace('../admin.php?erro'); </script>";
endif;
endif;
?>