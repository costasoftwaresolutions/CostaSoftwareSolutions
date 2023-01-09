<?php

    if(isset($_POST['email']) && !empty('email')){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['mensagem']);

        $to = "costa.carlos.dev@gmail.com";
        $subject = "Contato Site - Costa Software Solutions";
        $body = "Nome: ".$nome. "\n".
                "Email: ".$email. "\n".
                "Mensagem: ".$mensagem;
        $header = "From:contato@costasoftwaresolutions.com"."\r\n"
                    ."Reply-To:".$email."\r\n"
                    ."X=Mailer:PHP/".phpversion();

        if(mail($to,$subject,$body,$header)){
            echo("Email enviado com sucesso");
            
        }else{
            echo("Erro");
        }


    }

     
?>