<?php //Sessao
session_start();

//Conexao

include '../UI_include.php';
include INC_DIR ."/conecta_mysqli.inc";

if (isset($_POST['btn-alterar-usuario'])) :
    
    $u_id = $_POST['id'];
    $u_usuario = $_POST['usuario'];
    $u_nome = $_POST['nome'];
    $u_sobrenome = $_POST['sobrenome'];
    $u_email = $_POST['email'];
    $u_cat = $_POST['categoria'];

    $sql ="UPDATE usuarios SET u_usuario = '$u_usuario', u_nome = '$u_nome', u_sobrenome = '$u_sobrenome', 
    u_email = '$u_email', u_cat = '$u_cat' WHERE u_id = '$u_id'";
    $resultado = mysqli_query($conexao, $sql);
    $linhasafetadas = mysqli_affected_rows($conexao);
    
    if ($linhasafetadas == 1) :
        mysqli_close($conexao);
        echo "<script> location.replace('../admin.php?altsucesso'); </script>";
        else :
        echo "<script> location.replace('../admin.php?erro'); </script>";
        endif;
    endif;
?>