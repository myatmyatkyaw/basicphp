
<html>
    <body>
        <!-- <form action="index.php" method="post">
            <label>Name:</label>
            <input type="text" name="username"><br><br>
            <label>Password:</label>
            <input type="password" name="password"><br>
            <br><input type="submit" value="Log in">
        </form> -->

        <form action="index.php" method="post">
            <label>Quantity:</label>
            <input type="number" name="quantity"><br><br>
            <label>Y:</label>
            <input type="number" name="quanti"><br><br>
           
            <br><input type="submit" value="submit">
        </form>

        
    </body>
</html>

<?php 
    echo"I love orange <br>";
    echo"I like watermelon<br>";


    $name = "MMK";
    $nameone = "Myat Myat Kyaw";
    $price = 4.18;
    $percent = 50;
    //$total = null;
    $total = $price * $percent;


    echo $name;
    echo "<br>My name is {$nameone}<br>";
    echo "The price is \${$price}";
    echo "<br>The percentage is {$percent}%";
    echo "<br> The total is \${$total}";

    // echo "<br><br>The username is {$_POST["username"]}";
    // echo "<br>The password is {$_POST["password"]}";
$quantity = $_POST["quantity"];
$y = $_POST["quanti"];
if($y >= 5 && $y<10){
    echo"You can buy this";
}
elseif($y < 5){
    echo"You can't";
}
else{
    echo"You can't buy this";
}
$total = $quantity * $price;
// $final = abs($total);
// $final = round($total);
// $final = floor($total);
// $final = ceil($total);
$final = pow($total,$y);

    echo "<br><br>The total is {$total}";
    echo "<br><br>The final math is {$final}";

    switch($name){
        case "MMK":
            echo "<br>hello<br>";
            break;
    }

    for($i = 4; $i <10; $i++){
        echo "{$i} hello<br>";
    }

    $foods = array("grape","mango","melon");
    $foods[0]= "banana";
    array_push($foods,"kiwi","berry");
    array_pop($foods);
    array_shift($foods);
    foreach($foods as $food){
        echo $food . "<br>";
    }
    $revers = array_reverse($foods);
    foreach($revers as $r){
        echo $r ."<br>";
    }

    $capitals = array("japan"=>"tokyo",
                        "korea"=>"seoul",
                        "china"=>"beijing");
    foreach($capitals as $key=>$value){
        echo "{$key},{$value}<br>";
    }
    echo $capitals["japan"];
    
    
?>