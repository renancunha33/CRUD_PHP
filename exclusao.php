<?php
include "conecta_mysql.inc";

$ID = $_POST["valor"]; 
	//verifica se o ID esta vazio
if (isset($_POST["valor"])){
	//delete e script para voltar ao index
	mysql_query("DELETE FROM `cadastroCRUD` WHERE `cadastroCRUD`.`id_cadastro` = $ID ");
	echo"
	<script>
	alert('Excluído com sucesso');
	window.location='index.php'; 
	</script>
	";
}else{
	//erro e script para voltar ao index
	echo"
	<script>
	alert('ERRO DURANTE EXCLUSÃO');
	window.location='index.php'; 
	</script>
	";

}

?>
