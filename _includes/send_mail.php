<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $cnpj = htmlspecialchars($_POST['cnpj']);
    $estado = htmlspecialchars($_POST['estado']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $assistencia_tecnica = htmlspecialchars($_POST['assistencia_tecnica']);
    $interesse = htmlspecialchars($_POST['interesse']);
    $comentarios = htmlspecialchars($_POST['comentarios']);

    // Enviar o email
    $to = "filipesilva.dev@gmail.com";
    $subject = "Nova solicitação de contato";
    $message = "
    Nome: $nome\n
    CNPJ: $cnpj\n
    Estado: $estado\n
    Telefone: $telefone\n
    Assistência Técnica: $assistencia_tecnica\n
    Interesse: $interesse\n
    Comentários: $comentarios\n
    ";
    $headers = "From: no-reply@seusite.com\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Formulário enviado com sucesso!</p>";
    } else {
        echo "<p>Ocorreu um erro ao enviar o formulário. Tente novamente mais tarde.</p>";
    }
}
?>
