<?php
require 'config.php';
#isset() serve para verificar se a variavel foi declarada!
#empty() verifica se o campo não estar vazio!
if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "INSERT INTO usuarios SET nome = '$nome', email ='$email', senha = '$senha'";
    $pdo->query($sql);

    header("Location: index.php"); 
    # header() serve para redirecionar para a pagina inicial apos o cadastro!
}
?>

<form method="POST">
    Nome:<br/>
    <input type="text" name="nome" /><br/><br/>
    E-mail:<br/>
    <input type="text" name="email" /><br/><br/>
    Senha:<br/>
    <input type="password" name="senha" /><br/><br/>
    <input type="submit" value="Cadastrar" />
</form>