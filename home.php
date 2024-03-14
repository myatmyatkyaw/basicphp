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

    </body>
</html>
<?php 
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
?>