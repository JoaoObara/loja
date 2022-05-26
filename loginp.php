<?php
// obtém os valores digitados
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$senhaencriptada = md5($senha);
// acesso ao banco de dados
include "UI_include.php";
include INC_DIR . 'conecta_mysqli.inc';
$resultado = mysqli_query($conexao, "SELECT u_senha FROM usuarios where u_usuario='$usuario'");
$linhas = mysqli_num_rows($resultado);
if ($linhas == 0) // testa se a consulta retornou algum registro
{
    echo "<html><body>";
    // echo $linhas['user_pass'];
    echo "<p>Usuário $usuario não encontrado!</p>";
    echo "<p><a href=\"login.html\">Voltar</a></p>";
    echo "</body></html>";
} else {
    $linha = mysqli_fetch_array($resultado);
    if ($senhaencriptada !== $linha['u_senha']) // confere senha
    {
        echo "<html><body>";
        echo "<p>A senha está incorreta!</p>";
        echo $senhaencriptada;
        echo "<br/>";
        echo $linha['u_senha'];
        echo "<p><a href=\"login.html\">Voltar</a></p>";
        echo "</body></html>";
    } else // usuário e senha corretos. Vamos criar as variáveis da sessão
    {
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senhaencriptada;
        // direciona para a página inicial dos usuários cadastrados
        header("Location: pagina_inicial.php");
        exit();
    }
}
mysqli_close($conexao);
