<?php
// Define o tempo de expiração do cookie (30 segundos)
$bruno = time() + 30;

// Verifica se o formulário foi enviado e se o nome foi preenchido
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nome'])){
    // define o cookie com o nome do usuario
    setcookie('nome', $_POST['nome'],$bruno);
    $nome = $_POST['nome'];

}elseif(isset($_COOKIE['nome'])) {
    // Se o cookie já estiver definido, utiliza o valor do cookie
    $name = $_COOKIE['nome'];
}else {
    // Se o cookie não estiver definido e o formulário não foi enviado, redireciona para o formulário
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRUNOOO</title>
</head>
<body>
    
</body>
</html>