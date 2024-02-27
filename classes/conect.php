<?php

//para corrigir a acentuação de palavras nos registros do banco incluir "header" e "myseqli_set_charset"
header("content-type:text/html;charset=utf-8");


//conexão do servidor

$servidor = 'localhost';
$usuario = 'root';
$senha = 'erik777';
$banco = 'dbHackthon';


$conect = mysqli_connect($servidor,$usuario,$senha,$banco);
if(mysqli_connect_errno($conect)){
    echo ''.mysqli_connect_error($conect).'';
}
/*
else{
    echo "Banco de dados, $banco, conectado com sucesso!";
}
*/
	
//inclui esse código no arquivo de conexão para resolver falta de acentação dos dados no banco, resolveu!
mysqli_set_charset($conect,"utf8");
			
	
?>
