<?php 
    //conexão usando PDO           dbname = nome do banco
    $dsn = 'mysql:host=localhost;dbname=cadastrousuarios';
    $username = 'root';
    $password = '';
    
    try {      //comando responsavel pela conexão
        $pdo = new PDO($dsn, $username, $password); 
    } catch (PDOException $e) {
        echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
    }
    
?>
