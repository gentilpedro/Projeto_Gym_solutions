<?php

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Obter os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $cpf = $_POST['cpf'];


  // Enviar o e-mail
  $para = $email;
  $assunto = "Cadastro";
  $corpo = "Olá, $nome,

Seu cadastro como personal foi realizado com sucesso.

Seu login é:
Login $cpf
e sua senha é: 123456789

Atenciosamente,

Equipe Calendar Training";

  // Configurar o servidor de e-mail
  $smtp_host = "smtp.gmail.com";
  $smtp_port = 587;
  $smtp_user = "calendar.training.sup@gmail.com";
  $smtp_pass = "shaco123shaco";

  // Enviar o e-mail
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->Host = $smtp_host;
  $mail->Port = $smtp_port;
  $mail->SMTPAuth = true;
  $mail->Username = $smtp_user;
  $mail->Password = $smtp_pass;
  $mail->From = $smtp_user;
  $mail->FromName = "Suporte Calendar-Training";
  $mail->AddAddress($para);
  $mail->Subject = $assunto;
  $mail->Body = $corpo;
  $mail->Send();

  // Retornar uma mensagem de sucesso
  echo "<script>alert('E-mail enviado com sucesso!');</script>";

}

?>
