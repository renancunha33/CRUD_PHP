<html>
<head>
	<title>Deletar</title>
	
</head>
<body>
	<!-- form que envia dados para este php procurar o registro-->
	<form method= "POST" action="deletar.php">
		<input type="text" class="form-control"name="ID" placeholder="Pesquise por ID"value=""><br/>
		<button type="submit" name="enviar">Pesquisar</button>
	</form>
	<div class="container">
		<!-- PHP que procura o registro e exibe campos para exclusão-->
		<?php
        error_reporting(0);
        ini_set('display_errors', 0);
        include 'conecta_mysql.inc';

        $ID = $_POST['ID'];
        //comando sql
        $reso = mysqli_query($conexao,"select * from cadastroCRUD WHERE id_cadastro = '$ID' ");

        //retorno do comando sql no registro procurado em forma de tabela(while opcional)
        while ($row = mysqli_fetch_array($reso)) {
            echo '
			<table>
			<thead>
			<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Telefones</th>

			</tr>
			</thead>';

            echo '<tr><td>'.$row['id_cadastro'].'</td><td>'.$row['nm_cadastro'].'</td><td>'.$row['tel_cadastro'].'</td></tr>';

            //form criadoo em php que envia o ID para o exclusao.php processar a ação
            echo "</table><table><tr><td>
			DELETAR esse id?
			<form method= 'POST' action='exclusao.php'>
			<input type='text' id='valor' value='".$ID."' name='valor' readonly/>
			<input type='submit' value='Submit' name='submit'>
			</form>
			</td><td>
			</table>";
        }

        ?>
	</div>
</body>
</html>
