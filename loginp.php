<?php
// obtém os valores digitados
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$senhaencriptada = md5($senha);
// acesso ao banco de dados
include "UI_include.php";
include INC_DIR . 'conecta_mysqli.inc';
$resultado = mysqli_query($conexao, "SELECT u_senha, u_cat, u_avatar FROM usuarios where u_usuario='$usuario'");
$linhas = mysqli_num_rows($resultado);
if ($linhas == 0) // testa se a consulta retornou algum registro
{
    echo "<html><body>";
    // echo $linhas['user_pass'];
    echo "<p>Usuário $usuario não encontrado!</p>";
    echo "<p><a href=\"login.php\">Voltar</a></p>";
    echo "</body></html>";
} else {
    $linha = mysqli_fetch_array($resultado);
    $categoria = $linha['u_cat'];
    $avatar = $linha['u_avatar'];
    if ($senhaencriptada !== $linha['u_senha']) // confere senha
    {
/*         echo "<html><body>";
        echo "<p>A senha está incorreta!</p>";
        echo $senhaencriptada;
        echo "<br/>";
        echo $linha['u_senha'];
        echo "<p><a href=\"login.php\">Voltar</a></p>";
        echo "</body></html>"; */
        mysqli_close($conexao);
        echo "<script> location.replace('login.php?erro'); </script>";
    } else // usuário e senha corretos. Vamos criar as variáveis da sessão
    {
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senhaencriptada;
        $_SESSION['categoria'] = $categoria;
        $_SESSION['avatar'] = $avatar;
        // direciona para a página inicial dos usuários cadastrados
        echo "<script> location.replace('pagina_inicial.php'); </script>";
        exit();
    }
}
mysqli_close($conexao);
