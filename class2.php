<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Basic - Class 2</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php 
            $price = $_GET["price"];
            echo "The price received is $". number_format($price,2);
            echo "<br/> Adding 10% ...";
            $price += $price * 10/100;
            echo "<br/> New price: $". number_format($price,2);

            $price_discount = $_GET["price"];
            echo "<br/><br/> The price received is $". number_format($price_discount,2);
            echo "<br/> 10% off ...";
            $price_discount -= $price_discount * 10/100;
            echo "<br/> New price: $". number_format($price_discount,2);

            /*Increment and Decrement*/
            $value_pos = $_GET["price"];
            echo "<br/><br/> Pos increment ". $value_pos++;
            echo "<br/> Result: $value_pos";

            $value_pre = $_GET["price"];
            echo "<br/><br/> Pre increment ". ++$value_pre;
            echo "<br/> Result: $value_pre";

            /*Variable by reference*/
            echo "<br/><br/> <h2>B received A</h2>";
            $a = 3;
            $b = $a;
            $b += 5;

            echo "<br/> A: $a <br/> B: $b";

            /*Variable by reference*/
            echo "<br/><br/> <h2>A referenced by B</h2>";
            $a = 3;
            $b = &$a;
            $b += 5;

            echo "<br/> A: $a <br/> B: $b";

            /*Var $ and Var $$*/
            echo "<br/><br/> <h2>Var $ and Var $$</h2>";

            $var_one = "test";
            $$var_one = "test2";

            echo "<br/>Variavel one: $var_one";
            echo "<br/>Variavel two: $test"
        ?>
    </div>
</body>
</html>