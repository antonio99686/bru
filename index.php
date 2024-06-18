<?php

//Um formulário para o usuário inserir seu nome.
//Um script PHP que salva o nome do usuário em um cookie e exibe uma mensagem de boas-vindas com base no valor do cookie.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form  action="bruno.php" method="POST">
        Nome
    <input type="text" name="nome" placeholder="Seu nome" >
<input type="submit" value="Enviar">
</form>
</body>
</html>