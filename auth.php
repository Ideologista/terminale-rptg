<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'];
$password = $data['password'];

// ESEMPIO STATICO: sostituisci con verifica DB reale
$validUsername = "admin";
$validPassword = "1234";

if ($username === $validUsername && $password === $validPassword) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
?>
