<?php

$nome = $_POST['NomeCliente'];
/* $sobrenome = $_POST['SobrenomeCliente']; */
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cid = $_POST['cid'];
$setor = $_POST['setor'];
$fortaleza = $_POST['fortaleza'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$sen1 = $_POST['sen1'];



$strcon = mysqli_connect('127.0.0.1','sistema','123456','banco_teste') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO cadastro_new VALUES ";
$sql .= "(null,'$nome', '$cpf', '$nascimento' ,'$sexo', '$email', '$telefone' , '$cid' , '$setor' , '$fortaleza', '$estado', '$cep' ,'$sen1')"; 

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);

echo "Cliente cadastrado com sucesso!";
echo "<a href='formulario.html'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";

?>