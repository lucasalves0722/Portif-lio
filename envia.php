<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    
    $para = "lucasalves098messias@gemail.com";
    $assunto = "Formulário de Contato - Portifólio";

    $corpo = "Nome: $nome."\n"."E-mail: $email."\n"."Celular: $celular."\n"."Mensagem: $mensagem;

    $cabeca = "From: 149004587+lucasalves0722@users.noreply.github.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".pgpversion();

    if (mail($para, $assunto, $corpo, $cabeca)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
?>