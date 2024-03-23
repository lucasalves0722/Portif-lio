<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    // Aqui você pode adicionar o código para enviar um e-mail com os dados ou armazená-los em um banco de dados

    // Exemplo de envio de e-mail
    $destino = "lucasalves098messias@gemail.com";
    $assunto = "Formulário de Contato";
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "E-mail: $email\n";
    $corpo_email .= "Celular: $celular\n";
    $corpo_email .= "Mensagem: $mensagem\n";
    $headers = "From: 149004587+lucasalves0722@users.noreply.github.com.\n";

    // Envia o e-mail
    if (mail($destino, $assunto, $corpo_email, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
}
?>