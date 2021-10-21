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
$sql .= "(null,'$nome', '$cpf', '$nascimento' ,'$sexo', '$email', '$telefone' , 
            '$cid' , '$setor' , '$fortaleza', '$estado', '$cep' ,'$sen1')";

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);


function buscar_tarefas($strcon){
    $sqlBusca = 'SELECT * FROM armamento'; //Consulta SQL
    $resultado = mysqli_query($strcon,$sqlBusca); // Função que executa a requisição 

}

?>

<html style="background-color: black;">
    <header style="background-color: green;">
        <div style="font-size: 25px ;">
            <?php
            echo "Cliente cadastrado com sucesso!";
            echo "<a href='cadastro-ia.php'><br>Clique aqui para realizar um novo cadastro</a><br>";
            echo "<a href='index.php'>Clique aqui para ir para pagina principal. </a><br>";
            ?>
        </div>
    </header>


    <canvas id="c"></canvas>
    <script src="script.js"></script>
    <script src="script.js"></script>
    <script src="script.js"></script>
</html>