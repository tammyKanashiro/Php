<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Basic - Class 3</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            echo "<h2>Relational Operator</h2>";
            $num1 = $_GET["a"];
            $num2 = $_GET["b"];
            $type = $_GET["op"];

            echo "<br/>Value num 1: $num1 <br/>Value num 1: $num2 <br/>Operator choose: ". ($type == "sum"?"Sum":"Multi");

            $resul = ($type == "sum")?$num1+$num2:$num1*$num2;
            echo "<br/><br/>Result is $resul";

            /*Equal / Identical*/
            echo "<br/><br/><h2>Equal / Identical</h2>";
            $a = 3;
            $b = "3";

            echo "<br/>A equal B? ". ($a == $b?"Yes":"No");
            echo "<br/>A identical B?  ". ($a === $b?"Yes":"No");
        ?>
    </div>
</body>
</html>