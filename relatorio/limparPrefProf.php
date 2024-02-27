<?php

session_start();

//echo "Sua escolha foi enviado com sucesso!!";
include('/var/www/html/semestre/classes/conect.php');

//consulta ao banco
$IdEscolha = $_GET['id'];
$idProf = $_SESSION['user_id'];
//echo "a ecolha foi Turma $IdEscolha e Prof $idProf <br> ";

$escolha =
"UPDATE Disciplina_Turma 
SET FK_Professor=NULL; 

/*WHERE ID_Disciplina_Turma = '$IdEscolha' /* AND FK_Professor=NULL*/";

//atualizar registro da tababela Disciplina_Turma (Relatório geral professor, disciplina, turma)

$update = mysqli_query($conect, $escolha);

if($update) {
    //echo "Disciplina cadastrada para o professor!";
    header('Location: /semestre/relatorio/');    

}else {
    echo "Não foi possível cadastrar, escolha outra Disciplina!";
    echo "<p style='color:red;background:white;text-align:center'> Dados não cadastrados, motivo do erro: <br>" .mysqli_error($conect). "</p><br>";
    header('Location: /semestre/relatorio/');
}


