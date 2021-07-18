<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    .container {
        text-align: center;
        max-width: 80%;
        background-color: rgb(226, 50, 212);
        color: rgb(255, 255, 255);
        margin: auto;
        padding: 23px;
    }
    
    .text {
        margin: auto;
        text-align: center;
        font-size: xx-large;
    }
</style>

<body>
    <div class="container">
        <h1>Learn About PHP </h1>
        <h5>Functions of PHP </h5>
    </div>
    <div class="text">

        <?php
            function sumTwo($num1,$num2)
            {
                echo "<br>Sum of Two Numbers is ";
                echo $num1 + $num2;
            }
            function sumThree($num1,$num2,$num3)
            {
                echo "<br>Sum of three Numbers is ";
                echo $num1 + $num2 +$num3;
            }
            sumTwo(12,23);
            sumThree(23,45,56);
            ?>
    </div>
</body>

</html>