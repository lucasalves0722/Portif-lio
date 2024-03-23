<?php

    $nome = addslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $celular = addcslashes($_POST['celulcar']);

    $para = "lucasdeveloperalves@gmail.com";
    $assunto = "Empresas - Portifólio";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular; 

    $cabeca = "From: lucasalves098messias@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!")
    }
?>