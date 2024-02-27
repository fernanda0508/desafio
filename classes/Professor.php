<?php

class Professor
{
    private $matricula;    
    private $nome;
    private $email;
    private $senha;
    private $dataIngresso;
    private $nivelFormacao;
    private $areaEspecializacao;
    private $areaAtuacao;
    //função atribuída
    private $funcoes; //array de funções
    private $administrador = false;
    private $professor = true;
    private $coordenador = false;
    private $cargaHorariaSemanalProfesssor=0;   
    //Opções de disciplinas semestral do professor
    private $ano;
    private $semestre;
    private $op1;
    private $op2;
    private $op3;
    private $op4;
    private $op5;
    private $op6;
    private $op7;
      

    //denindo a carga horária semanal de professores
    function definirCargaHorariaSemanal(){
        if((($this->coordenador)==true) && (($this->professor)==true)) {
            $this->cargaHorariaSemanalProfesssor = 10;
        }

        elseif (($this->professor)==true) {
            $this->cargaHorariaSemanalProfesssor = 16;
        }
    }    



    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     */
    public function setSenha($senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of dataIngresso
     */
    public function getDataIngresso()
    {
        return $this->dataIngresso;
    }

    /**
     * Set the value of dataIngresso
     */
    public function setDataIngresso($dataIngresso): self
    {
        $this->dataIngresso = $dataIngresso;

        return $this;
    }

    /**
     * Get the value of nivelFormacao
     */
    public function getNivelFormacao()
    {
        return $this->nivelFormacao;
    }

    /**
     * Set the value of nivelFormacao
     */
    public function setNivelFormacao($nivelFormacao): self
    {
        $this->nivelFormacao = $nivelFormacao;

        return $this;
    }

    /**
     * Get the value of areaEspecializacao
     */
    public function getAreaEspecializacao()
    {
        return $this->areaEspecializacao;
    }

    /**
     * Set the value of areaEspecializacao
     */
    public function setAreaEspecializacao($areaEspecializacao): self
    {
        $this->areaEspecializacao = $areaEspecializacao;

        return $this;
    }

    /**
     * Get the value of areaAtuacao
     */
    public function getAreaAtuacao()
    {
        return $this->areaAtuacao;
    }

    /**
     * Set the value of areaAtuacao
     */
    public function setAreaAtuacao($areaAtuacao): self
    {
        $this->areaAtuacao = $areaAtuacao;

        return $this;
    }

    /**
     * Get the value of funcao
     */
    public function getfuncoes()
    {
        return $this->funcoes;
    }

    /**
     * Set the value of funcao
     */
    public function setCoordenador($funcao): self
    {
        $this->coordenador = true;

        return $this;
    }

    /**
     * Get the value of administrador
     */
    public function getAdministrador()
    {
        return $this->administrador;
    }

    /**
     * Set the value of administrador
     */
    public function setAdministrador($administrador): self
    {
        $this->administrador = $administrador;

        return $this;
    }

    /**
     * Get the value of professor
     */
    public function getProfessor()
    {
        return $this->professor;
    }

    /**
     * Set the value of professor
     */
    public function setProfessor($professor): self
    {
        $this->professor = $professor;

        return $this;
    }

    /**
     * Get the value of coordenador
     */
    public function getCorProfessor()
    {
        return $this->coordenador;
    }

    /**
     * Set the value of corProfessor
     */
    public function setCorProfessor($corProfessor): self
    {
        $this->coordenador = $corProfessor;

        return $this;
    }
}


?>