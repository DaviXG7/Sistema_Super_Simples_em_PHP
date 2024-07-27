<?php


$nome = $_POST['nome'];
$senha = $_POST['senha'];

if ($nome != "admin" || $senha != "123456") {
    echo "Você não tem permissão para nesse site :DDDDDDDDDDDD";
    return;
}

echo "Você entrou com o nome $nome e senha $senha";

?>

<html>
<head></head>
<body>
<h1>Conteúdo do site</h1>
</body>
</html>
