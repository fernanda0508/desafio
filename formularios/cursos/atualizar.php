<?php
include('/var/www/html/semestre/classes/conect.php');
//include('./conect.php'); // Se estiver na mesma pasta html

if(isset($_POST['submit'])) {
    // Supondo que 'idCurso' é o identificador único do curso
    $idCurso = $_POST['idCurso'];
    $nomeCurso = $_POST['nomeCurso'];
    $Modalidade = $_POST['Modalidade'];
    $Area = $_POST['Area'];
    $Sigla = $_POST['Sigla'];  

    // Comando SQL para atualizar os dados no banco de dados
    $result = mysqli_query($conect, "UPDATE Curso SET 
        nomeCurso = '$nomeCurso',
        Modalidade = '$Modalidade',
        Area = '$Area',
        Sigla = '$Sigla'
        WHERE id = $idCurso");

    if($result) {
        echo "<p> Dados atualizados com sucesso!</p> <br>";
        //header('Location:index.php');
    } else {
        echo "<p style='color:red;background:white;text-align:center'> Dados não atualizados, motivo do erro: <br>" . mysqli_error($conect) . "</p><br>";
    }   
}

//print_r ($conect);
?>

<Html>
    <a href="https://191.217.158.179:4443/semestre/formularios/turma">Turma</a>  
</Html>
