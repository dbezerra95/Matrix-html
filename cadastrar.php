<?php

/* Dados pessoais */
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$sexo = $_POST ['sexo'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];

/* Endereço pessoal */
$endereco = $_POST ['endereco'];
$endnumero = $_POST ['end_numero'];
$bairro = $_POST ['cidade'];
$estado = $_POST ['estado'];
$cep = $_POST ['cep'];

/* Senha */
$senha = $_POST ['senha'];

/* Conexão com Banco de Dados Matrix */

$bdServidor = '127.0.0.1'; //Pode ser localhost
$bdUsuario = 'sistema'; //Usuário criado no BD
$bdSenha = '123456'; //Senha totalmente exposta do BD
$bdBanco = 'matrix'; //Nome do BD dentro do Servidor

$conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco) or die ('Erro ao conectar ao banco de dados');
/* $conexao = mysqli_connect('127.0.0.1','sistema','123456','matrix') or die ('Erro ao conectar ao banco de dados');*/

/* $SQL_INSERT_END = "INSERT INTO matrix.enderecos VALUES "; 
$SQL_INSERT_END .= "(
    NULL,
    '$endereco',
    '$endnumero',
    '$bairro', 
    '$estado',
    '$cep' 
    )";

$SQL_INSERT_SLD = "INSERT INTO matrix.cadastro_sld VALUES"; 
$SQL_INSERT_SLD .= "(
    NULL,
    '$nome', 
    '$cpf', 
    '$nascimento',
    '$sexo', 
    '$email', 
    '$telefone',
    '$senha'
    )"; */


$SQL_INSERT = "INSERT INTO matrix.cadastro VALUES";
$SQL_INSERT .= "(
    NULL,
    '$nome', 
    '$cpf', 
    '$nascimento',
    '$sexo', 
    '$email', 
    '$telefone',
    '$senha',
    '$endereco',
    '$endnumero',
    '$bairro', 
    '$estado',
    '$cep'
)";

/* mysqli_query($conexao, $SQL_INSERT_END) or die ("Erro ao tentar cadastrar!!");

mysqli_query($conexao, $SQL_INSERT_SLD) or die ("Erro ao tentar cadastrar!!"); */

mysqli_query($conexao, $SQL_INSERT) or die ("Erro ao tentar cadastrar!!");

mysqli_close($conexao);

echo "Cliente cadastrado com sucesso!";

?>