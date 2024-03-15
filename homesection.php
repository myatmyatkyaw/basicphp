<?php
session_start();
?>
<html>
    <body>
        <form action="homesection.php" method="post">
            <input type="submit" value="logout" name="logout">
        </form>
    </body>
</html>

<?php
echo $_SESSION["username"];
echo $_SESSION["password"];

if(isset($_POST["logout"])){
session_destroy();
header("Location: indexsection.php");
}
?>