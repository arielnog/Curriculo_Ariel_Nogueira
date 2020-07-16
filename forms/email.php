<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$assunto = $_POST['assunto']
$mensagem = $_POST['mensagem'];
$email_remetente = "arielnnogueira@hotmail.com.br";

$email_destinatario = "arielnnogueira2@gmail.com.br";
$email_reply = "$email";
$email_assunto = "$assunto - Cliente $nome";

$email_conteudo = "Nome = $nome \n";
$email_conteudo .= "Email = $email \n";
$email_conteudo .= "Telefone = $telefone \n";
$email_conteudo .= "Mensagem = $mensagem \n";

$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );

if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
 echo "<script>
            alert('Mensagem Enviada com Sucesso!');
            location.href = 'index.html';
            </script>";
 }else{
 echo "</b>Falha no envio do E-Mail!</b>"; }
}
 ?>
