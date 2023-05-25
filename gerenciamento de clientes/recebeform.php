<?php

include ("conexaomysql.php");

// Recebendo as variáveis da Conta
$nome = $_POST['nome'];
@$sobrenome = $_POST['sobrenome'];
@$email = $_POST['email'];
@$senha = $_POST['senha'];
@$senha2 = $_POST['senha2'];

// Recebendo as variáveis do Endereço
@$rua = $_POST['rua'];
@$cidade = $_POST['cidade'];
@$estado = $_POST['estado'];
@$cep = $_POST['cep'];

// Recebendo as variáveis do Perfil Público
@$apelido = $_POST['apelido'];
@$web_site = $_POST['web_site'];
@$bio = $_POST['bio'];
@$genero = $_POST['genero'];

//imprimindo as variáveis da Conta

echo "$nome<br>";
echo "$sobrenome<br>";
echo "$email<br>";
echo "$senha<br>";
echo "$senha2<br>";

//Imprimindo as variáveis do endereço

echo "$rua<br>";
echo "$cidade<br>";
echo "$estado<br>";
echo "$cep<br>";

//Imprimindo as variáveis do Perfil Público

echo "$apelido<br>";
echo "$web_site<br>";
echo "$bio<br>";
echo "$genero<br>";

//=====================================================================
$sql = "INSERT INTO conta (nome, sobrenome, email, senha, senha2, rua, cidade, estado, cep, apelido, web_site, bio, genero) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$senha2', '$rua', '$cidade', '$estado', '$cep', '$apelido', '$web_site', '$bio', '$genero')";

if (mysqli_query($conexao, $sql)) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);



?>