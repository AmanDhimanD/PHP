<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <?php
    //Arithmetic Operator
    echo "<h1>Arithmetic Operator</h1>";
    echo "The Sum of two numbers are ";
    $var1=20;
    $var2=10;
    echo $var1 + $var2;
    echo "<br>";
    echo "The Product of two numbers are ";
    $var1=20;
    $var2=10;
    echo $var1 * $var2;
    echo "<br>";
    echo "The Subtraction of two numbers are ";
    $var1=20;
    $var2=10;
    echo $var1 - $var2;
    echo "<br>";
    echo "The Division of two numbers are ";
    $var1=20;
    $var2=10;
    echo $var1 / $var2;
    echo "<br>";
    echo "<br>";
    


    echo "<h1>Assignment Operator</h1>";
    $var3=$var2;
    $var3+=2;
    echo "~Var 2 is ";
    echo $var2;
    echo "<br>";
    echo "~Var 3 is ";
    echo $var3;
    echo "<br>";
    echo "<br>";
    
    echo "<h1>Comparison Operator</h1>";
    echo "Check :- 1 = = 4 -> ";
    echo var_dump(1==4);
    echo "<br>";
    echo "Check :- 1 ! = 4 -> ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "Check :- 1 < 4 -> ";
    echo var_dump(1<4);
    echo "<br>";
    echo "<br>";
    
    
    echo "<h1>Increment / Decrement Operator</h1>";
    $a =5;
    echo "a = ";
    echo $a;
    echo "<br>";
    
    $a++;
    echo "a++ = ";
    echo $a;
    echo "<br>";
    $a--;
    echo "a-- = ";
    echo $a;
    echo "<br>";

    echo "<br>";
    echo "<br>";
    echo "<h1>Logical Operator</h1>";
    $myVar = (true and false);
    echo "true and false :-> ";
    echo var_dump($myVar);

    echo "<br>";
    $myVar = (false and false);
    echo "false and false :-> ";
    echo var_dump($myVar);

    echo "<br>";
    $myVar = (false or false);
    echo "false or false :-> ";
    echo var_dump($myVar);

    echo "<br>";
    $myVar = (True or false);
    echo "true or false :-> ";
    echo var_dump($myVar);
    

    echo "<br>";
    $myVar = (True xor false);
    echo "true xor false :-> ";
    echo var_dump($myVar);

    ?>
</body>
</html>