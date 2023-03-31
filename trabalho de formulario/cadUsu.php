<?php
require_once 'conexao.php';

$sql = "INSERT INTO cadastro (nome,cpf,celular,email,login,senha) VALUES (:nome,:cpf,:celular,:email,:login,:senha)";
$stmt = $pdo->prepare($sql);

$dados = [
    ':nome' => $_POST['nome'],
    ':cpf' => $_POST['cpf'],
    ':celular' => $_POST['celular'],
    ':email' => $_POST['email'],
    ':login' => $_POST['login'],
    ':senha' => md5($_POST['senha']),
];

if ($stmt->execute($dados)) {
    echo "Usuário cadastrado com sucesso";
    header("refresh:3;url=index.html");
} else {
    echo "Erro ao cadastrar usuário";
}
?>
