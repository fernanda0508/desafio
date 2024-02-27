<?php

class EscolherDisciplina //tabela preferência_professor por disciplinas
{
    private $disciplinas;
    
    # adiciona disciplina
    function adicionarDisciplina(Disciplina $disciplina) //agregação classe Disciplina
    {
        $this->disciplinas[] = $disciplina;
    }

    # exibe a lista de Disciplinas escolhidas
    function exibeLista() 
    {
        foreach($this->disciplinas as $disciplina) 
        {
            echo $disciplina;            
        }
    }   

    #Calcular horas-aulas semanal somando-se as disciplinas escolhidas e deferidas do professor
    function somarHorasDisciplinasSemanal()
    {
        $total = 0;
        foreach($this->disciplinas as $disciplina){
            $total += $disciplina->horaSemanalDisciplina; //criar
        }
        return 'Total horas-aulas semanal' . $total;
    }

}
