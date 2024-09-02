<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    // E-mail de destino
    $to = "ouvidoria@educacao.guarulhos.sp.gov.br";

    // Assunto do e-mail
    $subject = "Nova mensagem";

    // Corpo do e-mail
    $body = "Você recebeu uma nova mensagem:\n\n";
    $body .= "Nome: $nome\n";
    $body .= "E-mail: $email\n";
    $body .= "Telefone: $telefone\n";
    $body .= "Mensagem:\n$mensagem\n";

    // Cabeçalhos do e-mail
    $headers = "From: $email";

    // Enviar o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Houve um erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Método de envio inválido.";
}
?>
