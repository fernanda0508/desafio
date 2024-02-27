<?php

class Disciplina
{
    private $nomeDisciplina;
    private $cargaHorariaSemestre;
    private $cargaHorariaSemana;
        

    //cadastrar disciplina
    function cadastrarDisciplina ($nomeDisciplina, $cargaHorariaSemestre, $cargaHorariaSemana ){
        $this->nomeDisciplina = $nomeDisciplina;
        $this->cargaHorariaSemestre = $cargaHorariaSemestre;
        $this->cargaHorariaSemana = $cargaHorariaSemana;

        //$dados[] = array($this->nomeDisciplina, $this->cargaHorariaSemestre, $this->cargaHorariaSemana);
    }

    //listar dados da disciplina
    function listarDadosDisciplina() {
        foreach($this->nomeDisciplina as $disc)
        echo $disc;
    }

    /**
     * Get the value of nomeDisciplina
     */
    public function getNomeDisciplina()
    {
        return $this->nomeDisciplina;
    }

    /**
     * Set the value of nomeDisciplina
     */
    public function setNomeDisciplina($nomeDisciplina): self
    {
        $this->nomeDisciplina = $nomeDisciplina;

        return $this;
    }

    /**
     * Get the value of cargaHorariaSemestre
     */
    public function getCargaHorariaSemestre()
    {
        return $this->cargaHorariaSemestre;
    }

    /**
     * Set the value of cargaHorariaSemestre
     */
    public function setCargaHorariaSemestre($cargaHorariaSemestre): self
    {
        $this->cargaHorariaSemestre = $cargaHorariaSemestre;

        return $this;
    }

    /**
     * Get the value of cargaHorariaSemana
     */
    public function getCargaHorariaSemana()
    {
        return $this->cargaHorariaSemana;
    }

    /**
     * Set the value of cargaHorariaSemana
     */
    public function setCargaHorariaSemana($cargaHorariaSemana): self
    {
        $this->cargaHorariaSemana = $cargaHorariaSemana;

        return $this;
    }
}

