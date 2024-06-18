<?php
// Define o tempo de expiração do cookie (30 segundos)
$bruno = time() + 30;

// Verifica se o formulário foi enviado e se o nome foi preenchido
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nome'])){
    // define o cookie com o nome do usuario
    setcookie('nome', $_POST['nome'],$bruno);
    $nome = $_POST['nome'];

}elseif

?>