<?php
include 'conecta_mysql.inc';
//tabela exibida no index

//sql
$reso = mysqli_query($conexao,'select * from cadastroCRUD');

echo '
<table>
<thead>
<tr>
<th>ID</th>
<th>Nomes</th>
<th>Telefones</th>

</tr>
</thead>';

//retorno do sql em forma de lista
while ($row = mysqli_fetch_array($reso)) {
    echo '<tr><td>'.$row['id_cadastro'].'</td><td>'.$row['nm_cadastro'].'</td><td>'.$row['tel_cadastro'].'</td></tr>';
}

echo '</table>';

?>
<!-- botões de atualizar e excluir-->
<div class="container">
	<table>
		<tr>
			<td>	
				<form action="atualiza.php">
					<button type="submit" >Atualizar Registros</button>
				</form>
			</td>
			<td>
				<form action="deletar.php">
					<button type="submit" >Deletar Registros</button>
				</form>
			</td>
		</tr>
	</table>
</div>
