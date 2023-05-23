<?php

$servername = "localhost";
$username = "root";
$password = "zaccolon";
$dbname = "bancodeteste";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}


$nome = $_POST['nome'];
$cep = $_POST['cep'];
$local = $_POST['local'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];


$sql = "INSERT INTO cadastro (nome, cep, local, endereco, email, telefone, idade)
        VALUES ('$nome', '$cep', '$local', '$endereco', '$email', '$telefone', '$idade')";


if ($conn->query($sql) === TRUE) {
    
    echo "Dados recebidos e salvos com sucesso.";
} else {
    
    echo "Erro ao salvar os dados: " . $conn->error;
}


$conn->close();
?>
