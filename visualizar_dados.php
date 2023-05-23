<?php

$servername = "localhost";
$username = "root";
$password = "zaccolon";
$dbname = "bancodeteste";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}


$sql = "SELECT * FROM cadastro";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
   
    echo "<table>";
    echo "<tr><th>ID</th><th>Nome</th><th>CEP</th><th>Local</th><th>Endereço</th><th>E-mail</th><th>Telefone</th><th>Idade</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["cep"] . "</td>";
        echo "<td>" . $row["local"] . "</td>";
        echo "<td>" . $row["endereco"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["telefone"] . "</td>";
        echo "<td>" . $row["idade"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum dado encontrado.";
}


$conn->close();
?>
