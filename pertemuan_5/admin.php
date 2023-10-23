<?php
session_start();
if (isset($_SESSION['$email']) || $_SESSION['$email'] !== 'admin@gmail.com') {
    header('Location: index.php');
}
echo "ini halaman admin";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>