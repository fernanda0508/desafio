
<?php 

include_once 'Professor.php';
include_once 'EscolherDisciplina.php';

//$prof = new Professor();
//$prof->nome = "Erik Sanchez";
//$prof->setNome("Sanchez Nogueira");
//echo "meu nome é: {$prof->nome} <br>\n";
//echo "meu nome é: {$prof->getNome()} <br>\n";

/*
$esc1 = new EscolherDisciplina();
$esc1->adicionarDisciplina("Matematica");
$esc2 = new EscolherDisciplina();
$esc2->adicionarDisciplina("Portugues");
echo $esc1->exibeLista();
echo $esc2->exibeLista();
*/
//instancia
include_once 'Disciplina.php';
$dis1 = new Disciplina();
$dis2 = new Disciplina();
$dis3 = new Disciplina();

//iserindo dados objeto da classe Disciplina
$dis1->nome = 'Banco de dados';
$dis2->nome = 'Sistemas Operacionais'; 
$dis3->nome = 'Análise de Sistemas';
$dis1->cargaHorariaSemestre = 60;
$dis2->cargaHorariaSemestre = 50;
$dis3->cargaHorariaSemestre = 40;
$dis1->$cargaHorariaSemana = 2;
$dis2->$cargaHorariaSemana = 4;
$dis3->$cargaHorariaSemana = 5;

$escolha = new EscolherDisciplina();

$escolha->cadastrarDisciplina();


?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
   <!-- <link href="./css/main.css" rel="stylesheet" /> -->
    <link rel="stylesheet" type="text/css" href="/css/main.css"/>
    <title>Document</title>

</head>

<body>
    <div class="v1_7">
        <div class="v1_5"></div>
        <div class="v4_34">
            <div class="v4_35"></div><span class="v4_36">CADASTRAR PROFESSOR</span>
        </div>
        <div class="v1_33">
            <div class="v1_31"></div><span class="v1_32">Eu concordo com os Termos</span>
        </div>
        <div class="v1_9">
            <div class="v1_6"></div><span class="v1_8">Nome:</span>
        </div>
        <div class="v102_3">
            <div class="v102_4"></div><span class="v102_5">Matrícula:</span>
        </div>
        <div class="v102_6">
            <div class="v102_7"></div><span class="v102_8">Ingresso:</span>
        </div>
        <div class="v102_10">
            <div class="v102_11"></div><span class="v102_12">Formação:</span>
        </div>
        <div class="v102_13">
            <div class="v102_14"></div><span class="v102_15">Área de atuação:</span>
        </div>
        <div class="v102_16">
            <div class="v102_17"></div><span class="v102_18">Área de especialização:</span>
        </div>
    </div>
</body>

</html>