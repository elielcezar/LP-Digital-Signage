<?php 
 
include_once '../config.php'; 
 
$pdo = new PDO(
  "mysql:host=$host;dbname=$dbname;charset=$dbChar",
  $username, $password, [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
]);

header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"export.csv\"");
 
$out = fopen("php://output", "w");
$stmt = $pdo->prepare("SELECT * FROM `leads`");
$stmt->execute();

fputcsv($out, array('Nome', 'Email', 'Telefone', 'Mensagem'));

while ($row = $stmt->fetch()) { 
    fputcsv($out, $row); 
}
fclose($out);