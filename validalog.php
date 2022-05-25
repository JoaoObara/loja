<?php
// obtém os valores digitados
$username = $_POST["username"];
$senha = $_POST["senha"];

// acesso ao banco de dados
include "./includes/conecta_mysqli.inc";
$resultado = mysqli_query($conexao, "SELECT * FROM usuarios where username='$username'");
$linhas = mysqli_num_rows($resultado);
if ($linhas == 0)  // testa se a consulta retornou algum registro
{
	echo "<html><body>";
	echo "<p>Usuário não encontrado!</p>";
	echo "<p><a href=\"./index.php\">Voltar</a></p>";
	echo "</body></html>";
} else {
	$linha = mysqli_fetch_array($resultado);
	if ($senha != $linha["senha"]) // confere senha
	{
		echo "<html><body>";
		echo "<p>A senha está incorreta!</p>";
		echo "<p><a href=\"./index.php\">Voltar</a></p>";
		echo "</body></html>";
	} else   // usuário e senha corretos. Vamos criar os cookies
	{
		session_start();
		$_SESSION['nome_usuario'] = $username;
		$_SESSION['senha_usuario'] = $senha;
		// direciona para a página inicial dos usuários cadastrados
		header("Location: ./index.php");
	}
}
mysqli_close($conexao);
