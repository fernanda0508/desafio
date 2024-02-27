<?php

$sql = "SELECT 
    Disciplina_Turma.ID_Disciplina_Turma,
    Turma.ID_Turma,
    Turma.nomeCurso,
    Turma.Periodo_Atual,
    Turma.Turno,
    Disciplina.Nome AS Nome_Disciplina,
    Disciplina.Ch_Semanal_Disc,
    Professor.Nome AS Nome_Professor,
    Professor.ID_Professor,
    Curso.Modalidade,
    Curso.nomeCurso AS curso			
FROM 
    Turma
    INNER JOIN 
    Disciplina_Turma ON Turma.ID_Turma = Disciplina_Turma.FK_Turma
    INNER JOIN 
    Disciplina ON Disciplina_Turma.FK_Disciplina = Disciplina.ID_Disciplina
    INNER JOIN 
    Professor ON Disciplina_Turma.FK_Professor = Professor.ID_Professor
    INNER JOIN 
    Curso ON Turma.FK_Curso = Curso.ID_Curso		
    ORDER BY 
    Turma.nomeCurso DESC";


$result = mysqli_query($conect,$sql);