<?php
session_start();
$datauser = [
    [
        'email' => 'admin@gmail.com',
        'password' => 123456,
        'role' => 'admin'
    ],
    [
        'email' => 'member@gmail.com',
        'password' => 123456,
        'role' => 'member'
    ],
    [
        'email' => 'amndan@gmail.com',
        'password' => 123456,
        'role' => 'amndan'
    ]

];
$nama = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$emailToFind = $email;
$foundUser = null;

foreach ($datauser as $user) {
    if ($user['email'] === $emailToFind) {
        $foundUser = $user;
        $_SESSION['$email'] = $user['email'];
        if ($user['role'] == 'admin') {
            header('Location: admin.php');
        } else {
            header('Location: member.php');
        }
        break;
    }
}
if ($foundUser = null) {
    $_SESSION['messageauth'] = "user tidak ada";
    header('Location: login.php');
}
