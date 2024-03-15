<?php
session_start();
?>

<html>
    <body>
        <form action="indexsection.php" method="post">
            <label>UserName:</label><br>
            <input type="text" name="username"><br>
            <label>Password:</label><br>
            <input type="password" name="password"><br>
            <input type="submit" value="login" name="login">
        </form>
    </body>
</html>

<?php
if(isset($_POST["login"])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];

header("Location: homesection.php");
    }
    else{
        echo "Missing username/password";
    }
}
?>