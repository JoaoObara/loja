<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" >
    <title>Formulário de login</title>
    <?php 
include './includes/head.inc'; 
?>
  </head>
  <body>
  
  <div class='container'>
        <?php include './includes/nav3.inc'; ?>
    </div>
    <div class='box'>
    <div class='card'>
    <form method="POST" action="validalog.php">
      <p>Nome de usuário:<br /><input type="text" name="username" size="20" /></p>
      <p>Senha:<br /> <input type="password" name="senha" size="20" /></p>
      <p><input type="submit" value="Enviar" name="enviar" /></p>
    </form>
  </div></div>
  </body>
</html>
