<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Basic - Class 1 </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <h1>First file PHP</h1>
        
        <?php 

            /*Variables*/
            echo '<h2>Variables and concatenate</h2>';

            $number = 4;
            $name = "Tammy";

            //echo "Concat variables: ". $name. " -  ". $number;
            #      or
            echo "$name - $number";

            /*Operators*/
            echo '<h2>Arithmetic operator</h2>';

            $num1 = 3;
            $num2 = 2;

            echo "<strong>Number 1:</strong> $num1 <strong>Number 2:</strong> $num2 <br/>";
            echo "<br /> <strong>Addition:</strong> ". ($num1 + $num2);
            echo "<br /> <strong>Subtraction:</strong> ". ($num1 - $num2);
            echo "<br /> <strong>Multiplication:</strong> ". ($num1 * $num2);
            echo "<br /> <strong>Div:</strong> ". ($num1 / $num2);
            echo "<br /> <strong>Division:</strong>  ". ($num1 % $num2);

            /*Get parameters*/
            echo '<h2>Get parameters</h2>';

            //url/?a=3&b=8
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];

            echo "Num 1: $n1 <br/> Num 2: $n2 <br/>";
            echo "<br /> <strong>Addition:</strong> ". ($n1 + $n2);
            echo "<br /> <strong>Subtraction:</strong> ". ($n1 - $n2);
            echo "<br /> <strong>Multiplication:</strong> ". ($n1 * $n2);
            echo "<br /> <strong>Div:</strong> ". ($n1 / $n2);
            echo "<br /> <strong>Division:</strong>  ". ($n1 % $n2);
        ?>
    </div>
    
</body>
</html>