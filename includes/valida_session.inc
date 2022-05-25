<?php
session_start();
if(IsSet($_SESSION["nome_usuario"]))
$nome_usuario = $_SESSION["nome_usuario"];
if(IsSet($_SESSION["senha_usuario"]))
$senha_usuario = $_SESSION["senha_usuario"];

if(!(empty($nome_usuario) OR empty($senha_usuario)))
{
    include "conecta_mysqli.inc";
	$resultado = mysqli_query($conexao,"SELECT * FROM usuarios WHERE username='$nome_usuario'");
	if(mysqli_num_rows($resultado)==1)
	{
		$linha = mysqli_fetch_array($resultado);
		if($senha_usuario != $linha["senha"])
		{
            unset($_SESSION['nome_usuario']);
            unset($_SESSION['senha_usuario']);
            echo "Você não efetuou o LOGIN!";
            exit;
        }
    }
    else
    {
        unset($_SESSION['senha_usuario']);
        unset($_SESSION['nome_usuario']);
        echo "Você não efetuou o LOGIN!";
        exit;
    }
}
else
{
    echo "Você não efetuou o LOGIN!";
    exit;
}

mysqli_close($conexao);
?>
