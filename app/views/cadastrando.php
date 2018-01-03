<?php

$nome = $_POST['nome']
$cel = $_POST['cel']
$fixo = $_POST['pais']
$cep = $_POST['estado']
$rua = $_POST['email']
$numero = $_POST['numero']
$bairro = $_POST['bairro'] 
$cidade = $_POST['cidade']
$uf = = $_POST['uf']
$complemento = $_POST ['complemento']
$necesp = $_POST['necesp']
$quais = $_POST['quais']
$formpay = $_POST['formpay']
$valor = $_POST['valor']
$pass = $_POST['pass']
$card = $_POST['card']

$sql = mysql_query("INSERT INTO dados (nome, cel, fixo, cep, rua, numero, bairro, cidade, uf, complemento, necesp, quais, formapay, 	valor, passaporte, greencard)    VALUES ('$nome', '$cel', '$fixo', '$cep', '$rua', '$numero', '$bairro', '$cidade', '$uf', '$complemento','$necesp', '$quais', '$formpay', '$valor', '$pass', '$card')");


echo "Cadastro Efetuado";
?>