<html>
<head>
<title>Crud PHP</title>
</head>
<body>
	<!--form que envia os dados para novo cadastro no cadastrar.php-->
	<form method= "POST" action="cadastrar.php">
		<input type="text" class="form-control"name="nome" placeholder="Nome real"value=""><br/>
		<input type="text" class="form-control"name="telefone" placeholder="Telefone"value=""><br/>
		<button type="submit" name="enviar">Cadastrar</button>
	</form>
	<div class="container">
		<!-- Include exibe a tabela-->
		<?php include 'tabela.php';?>
	</div>
</body>
</html>
