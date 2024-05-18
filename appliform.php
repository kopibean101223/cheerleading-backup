<?php
require 'database.php';

$stmt = $conn->prepare("SELECT * FROM application_form")
$stmt->execute();
$result =$stmt->setFetchMode(PDO::FETCH_ASSOC);
var_dump($stmt->fetchAll());
die;    


?>