<html>
<head>
	<title>Atualizar</title>
</head>
<body>
	<!-- form que envia dados para este php procurar o registro-->
	<form method= "POST" action="atualiza.php">
		<input type="text" name="ID" placeholder="Pesquise o ID" value=""><br/>
		<button type="submit" name="enviar">Pesquisar</button>
	</form>
	<div class="container">
		<!-- PHP que procura o registro e exibe campos para alterações-->
		<?php
		error_reporting(0);
		ini_set('display_errors', 0);
		include 'conecta_mysql.inc';

		$ID = $_POST['ID'];
        //comando sql
		$reso = mysqli_query($conexao, "select * from cadastroCRUD WHERE id_cadastro = '$ID' ");
        //retorno do comando sql no registro procurado
		//$row = mysqli_fetch_array($reso);
		while ($row = mysqli_fetch_array($reso)) {
        //form criadoo em php que envia os dados para o atualizacao.php processar a atualização
			echo'REGISTRO ID: '.$ID."<br/>	
			<form method='POST' action='atualizacao.php'>

			<input type='text'name='ID' value='".$row['id_cadastro']."' readonly><br/>
			<input type='text' name='nome' placeholder='Nome'value='".$row['nm_cadastro']."'><br/>
			<input type='text' name='telefone' placeholder='Telefone'value='".$row['tel_cadastro']."'><br/>
			<input type='submit' value='Atualizar' name='submit'>

			</form>
			";
		}
		?>
	</div>
</body>
</html>
