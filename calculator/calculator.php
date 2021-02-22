<html></html>
<head>
    <title>Calculator</title>
</head>
<body>
    <form action="calculator.php" method="post">
        <label for="a">First Number</label>
            <input type="number" name="num1" placeholder="First Number">
        <br>
        <label for="b">Operator</label>
            <input type="text" name="op" placeholder="Operator">
        <br>
        <label for="c">Second Number</label>
            <input type="number" name="num2" placeholder="Second Number">
        <br>
        <input type="submit">
    </form>

    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];
 
    if($op == "+"){
        echo $num1 + $num2;
    }elseif($op == "-"){
        echo $num1 - $num2;
    }elseif($op == "/"){
        echo $num1 / $num2;
    }elseif($op == "*"){
        echo $num1 * $num2;
    }
    else{
        echo "Invalid operator";
    }
    ?>
</body>
</html>