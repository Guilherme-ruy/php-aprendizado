<?php

$host = "localhost";
$dbname = 'crudCSV';
$username = 'root';
$password = '';

// Conexão com o banco de dados usando PDO (ou outro método)
try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo 'Erro de banco: ' . $e->getMessage();
    die();

} catch (Exception $e) {
    echo 'Erro genérico' . $e->getMessage();
    die();
}

?>