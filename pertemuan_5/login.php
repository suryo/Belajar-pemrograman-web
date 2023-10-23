<?php
session_start();
?>
<html>
<head>
<body>
    <div class="m-3">
    <form action="auth.php" method="post">
        <div class="form=group">
        Name: <input class="form-control" type="text" name="name"><br>
        E-mail: <input class="form-control" type="text" name="email"><br>
        password: <input class="form-control" type="password" name="password"><br>
        <input type="submit" value="login" class="btn btn-primary">
        </div>
    <?php
    if (isset($_SESSION['messageauth']))
    {
        echo "<br>".$_SESSION['messageauth'];
    }
    ?>
    </form>
    </div>
</body>
</html>