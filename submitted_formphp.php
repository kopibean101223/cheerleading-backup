<?php
require 'database.php';
require 'PHPMailer/PHPMailerAutoload.php';
require 'submitted_forms.php';

$textContent = $_POST['textContent'];
echo '<script>alert($textContent);</script>';






?>