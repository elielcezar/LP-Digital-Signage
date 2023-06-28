<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['empresa'])   ||   
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$empresa = strip_tags(htmlspecialchars($_POST['empresa']));
$message = strip_tags(htmlspecialchars($_POST['message']));

include '../config.php';

$pdo = new PDO(
"mysql:host=".$host.";charset=utf8mb4;dbname=".$dbname,
$username, $password, [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

$stmt = $pdo->prepare("INSERT INTO `leads` (`email`, `name`, `phone`, `empresa`, `message`) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([ $email_address, $name, $phone, $empresa, $message ]);


$to = 'eliel@megamidia.com.br'; 
$email_subject = "Digital Signage | Contato pelo Site";
$email_body = "Você recebeu uma nova mensagem pelo formulário de contato do site.\n\n"."Nome: $name\n\n"."Email: $email_address\n\n"."Telefone: $phone\n\n"."Empresa:\n$empresa\n\n"."Mensagem: $message";
$headers = "From: noreply@yourdomain.com\n"; 
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
