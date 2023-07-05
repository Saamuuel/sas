<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php
require_once("contas.php");

// Recebendo os valores em forma de array
$formData = filter_input_array(INPUT_POST,FILTER_DEFAULT);
// Verificando se o botão de cadastro foi acionado
if(!empty($formData['addcontas'])){
    //Criando novo objeto e setando ao atributo formData o array
    $createcontas = new contas();
    $createcontas->formData = $formData;
    $result = $createcontas->create();

    if($result){
        echo "Login realizado";
    }
    else{
        echo "Não logou";
    }

}

?>
    <center>
    <h1>Login</h1>
    <form name="createcontas"  method="POST" action="">
      <label>Email</label><br>
      <input type="text" placeholdder="email" name="email" required><br>

      <label>Senha</label><br>
      <input type="text" placeholdder="senha" name="senha" required><br>

      <input type="submit" value="Voltar">
      <input type="submit" value="Cadastrar" name="addcontas">
    </form>
    </center>

</body>
</html>