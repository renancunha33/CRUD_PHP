<?php
include 'conecta_mysql.inc';

$user = $_POST['nome'    ];
$telefone = $_POST['telefone'   ];

//verifica se campos estao vazios
if ($user!="" || $telefone!="") {
    //cadastro em sql
    $sql = mysqli_query($conexao,"INSERT INTO cadastroCRUD(nm_cadastro,tel_cadastro) VALUES('$user','$telefone')");
    if($sql){
    	echo 'Cadastrado com sucesso!';	
    }else{
    	echo 'Erro no cadasatro!!';	
    }
    
} else {
    //erro
    echo 'Preencha todos os campos!';
}

?>
<!-- voltar ao index -->
<form method= "POST" action="index.php">
	<button type="submit" name="voltar">Voltar</button>
</form>
