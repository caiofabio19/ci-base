<!doctype html>
<?php include("conexao.php");

$consulta = "SELECT * from clientes";
$con = $mysqli->query($consulta) or die($mysqli->error);	

?>
<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
       
        <title>Vale Silicio 2018</title>
         <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style> 

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
	<div class="table-responsive">
	<table class="table table-striped table-condensed">
		<tr>
			<td>NOME</td>
			<td>RG</td>
			<td>CPF</td>
			<td>CELULAR</td>
			<td>TEL.FIXO</td>
			<td>CEP</td>
			<td>RUA/AV</td>
			<td>NUMERO</td>
			<td>BAIRRO</td>
			<td>CIDADE</td>
			<td>UF</td>
			<td>COMPLEMENTO</td>
			<td>NEC-ESP</td>
			<td>QUAIS?</td>
			<td>FORMA-PAG</td>
			<td>VALOR</td>
			<td>PASSAPORTE</td>
			<td>VISTO EUA</td>
		</tr>
		<?php while($dado = $con->fetch_array()){ ?>
		<tr>
			<td><?php echo $dado["nome"]; ?></td>
			<td><?php echo $dado["rg"]; ?></td>
			<td><?php echo $dado["cpf"]; ?></td>
			<td><?php echo $dado["cel"]; ?></td>
			<td><?php echo $dado["fixo"]; ?></td>
			<td><?php echo $dado["cep"]; ?></td>
			<td><?php echo $dado["rua"]; ?></td>
			<td><?php echo $dado["numero"]; ?></td>
			<td><?php echo $dado["bairro"]; ?></td>
			<td><?php echo $dado["cidade"]; ?></td>
			<td><?php echo $dado["uf"]; ?></td>
			<td><?php echo $dado["complemento"]; ?></td>
			<td><?php echo $dado["necesp"]; ?></td>
			<td><?php echo $dado["quais"]; ?></td>
			<td><?php echo $dado["formapay"]; ?></td>
			<td><?php echo $dado["valor"]; ?></td>
			<td><?php echo $dado["passaporte"]; ?></td>
			<td><?php echo $dado["greencard"]; ?></td>
		
		
		
		
		
		
		
		
		
		
		
		</tr>
		<?php }?>
	
	
	</table>
	</div>
	</body>
	
	
	</html>	