<html>
    <body>
        <form action="home.php" method="post">
           <input type="checkbox" name="foods[]" value="a" >A<br>
           <input type="checkbox" name="foods[]" value="b" >B<br>
           <input type="checkbox" name="foods[]" value="c" >C<br>
            <input type="submit" name="Save" value="use">
        </form>

        <form action="home.php" method="post">
           <input type="radio" name="visa" value="Visa">Visa <br>
           <input type="radio" name="visa" value="Passport">Passport <br>
           <input type="radio" name="visa" value="Nrc">NRC <br>
           <input type="submit" name="Login" value="Login">
        </form>

        <form action="home.php" method="post">
            <label>Username:</label>
            <input type="text" name="username"><br>
            <label>Age:</label>
            <input type="text" name="age"><br>
            <input type="submit" name="login" value="Log In"><br>
        </form>

    </body>
</html>
<?php 
if(isset($_POST["login"])){
    $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    echo "hello {$username} <br>";

    $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    if(empty($age)){
        echo "not valid";
    }
    else{
        echo "You are {$age} years old.";
    }
    
}


if(isset($_POST["Save"])){
    $foods = $_POST["foods"];
    if($foods){
        foreach($foods as $food){
            // $food = $_POST["foods"];
            echo $food;
        }
    }
    else{
        echo"Pls select";
    }
    
    
}

if(isset($_POST["Login"])){
    if(isset($_POST["visa"])){
        $type = $_POST["visa"];
        echo"{$type}";
    }
    else{
        echo"Please select";
    } 
}
function birth($name){
    echo "happy birthday {$name}";
}
birth("mmk");

$name = "mmh";
// $namer = strtoupper($name);
// $namer = str_replace("m","",$name);
$namer = strrev($name);
echo "<br> {$namer}";
?>