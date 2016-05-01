<?php
include 'conecta_mysql.inc';

$user = $_POST['nome'    ];
$telefone = $_POST['telefone'   ];

//verifica se campos estao vazios
if (empty($user) || empty($telefone)) {
    //cadastro em sql
    mysql_query("INSERT INTO cadastroCRUD(nm_cadastro,tel_cadastro) VALUES('$user','$telefone')");
    echo 'Cadastrado com sucesso!';
} else {
    //erro
    echo 'Preencha todos os campos!';
}

?>
<!-- voltar ao index -->
<form method= "POST" action="index.php">
	<button type="submit" name="voltar">Voltar</button>
</form>
