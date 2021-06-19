<?php
$names = $email = $message ='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = sanitizeInput($_POST['names']);
    $email = sanitizeInput($_POST['email']);
    $message = sanitizeInput($_POST['message']);
}
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// todo: Save the data to a database
