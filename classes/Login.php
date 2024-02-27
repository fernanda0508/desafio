<?php

class Login
{
    private $email;
    private $senha;
    private $status = 1;


    function autenticarUsuario(){
    
        if(($this->email == "emailUser") && ($this->senha =="senhaUser")) {
            $this->status = 1;
            echo "Usuário logado com sucesso!";
        }
        else {
            echo "Dados de acesso incorretos!!";
        }
        
    }

    function recuperarSenha(){
        if($this->email == "emailUser") {
            //acionar comandos de envio de recuperar senha;
            
            echo "Um mensagem para recuperação de senha foi enviado ao seu email";
            //redirecionar página para página de login
        }
    }
}

?>