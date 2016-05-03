<?php

include 'conecta_mysql.inc';

$ID = $_POST['ID'];
$user = $_POST['nome'];
$telefone = $_POST['telefone'];

//verifica se o ID esta vazio
if (isset($_POST['ID'])) {

    //atualização e script para voltar ao index
    mysqli_query($conexao,"UPDATE `cadastroCRUD` SET `nm_cadastro` = '$user', `tel_cadastro` = '$telefone' WHERE `cadastroCRUD`.`id_cadastro` = $ID");
    echo"
	<script>
	alert('Atualizado com sucesso');
	window.location='index.php'; 
	</script>
	";
    echo "$ID";
} else {

    //erro e script para voltar ao index
    echo"
	<script>
	alert('ERRO DURANTE ATUALIZAÇÃO');
	window.location='index.php'; 
	</script>
	";
}
