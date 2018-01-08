<?php
header("Content-type: text/html; charset=utf-8");
require( __DIR__. "\conexao.php");
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
$fixo = filter_input(INPUT_POST, 'fixo', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero= filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$necesp = filter_input(INPUT_POST, 'necesp', FILTER_SANITIZE_STRING);
$quais = filter_input(INPUT_POST, 'quais', FILTER_SANITIZE_STRING);
$formapay = filter_input(INPUT_POST, 'formapay', FILTER_SANITIZE_STRING);
$qtdParc = filter_input(INPUT_POST, 'qtdParc', FILTER_SANITIZE_STRING);
$pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
$card = filter_input(INPUT_POST, 'card', FILTER_SANITIZE_STRING);

$cadastro = "INSERT INTO clientes (nome, rg, cpf, cel, fixo, cep, rua, numero, bairro, cidade, uf, complemento, necesp, quais, formapay, 	valor, passaporte, greencard)    VALUES ('$nome', '$rg', '$cpf', '$tel', '$fixo', '$cep', '$rua', '$numero', '$bairro', '$cidade', '$uf', '$complemento','$necesp', '$quais', '$formapay', '$qtdParc', '$pass', '$card')";


try{
	$conn  = $mysqli->query($cadastro);
    $id = mysqli_insert_id($mysqli);
	if( !$conn)
		  throw new \Exception( "Não conseguimos realizar o cadastro : código ".mysqli_errno($mysqli));
     
}catch(\Exception $e){
   $messageErro = $e->getMessage();
   compact('messageErro');
   return include_once('error.php');
}
compact('id');
return include_once('success.php');