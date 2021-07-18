<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
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
        background-color: rgb(65, 212, 223);
        margin: auto;
        padding: 23px;
    }
</style>

<body>
    <div class="container">
        <h1>Learn About PHP </h1>
        <?php
            echo "<br>";

            echo "<b>Foreach Loops:- </b>";
            echo "<br>";
            $arr = array("Rayne","Coder","Youtuber");   
            foreach ($arr as $val)
            {
                echo "<br>The value of Arrary is :- ";
                echo $val;
            }
            echo "<br>";
            echo "<br>";


            echo "<b>For Loops:- </b>";
            echo "<br>";
            $arr = array("Rayne","Coder","Youtuber");
            for ($i=0; $i < 3; $i++) { 
                echo "Array :- ";
                echo $arr[$i];
                echo "<br>";
            }
            echo "<br>";
            
            echo "<b>While Loops:- </b>";
            echo "<br>";
            $a=0;
            while ($a <= 10) {
                echo $a;
                echo " ";
                $a++;
            }
            echo "<br>";
            echo "<br>";
            
            echo "<b>Do-While Loops:- </b>";
            echo "<br>";
            $a=200;
            do{
                echo $a;
                echo " ";
                $a++;
            }while ($a <= 10);
        ?>
    </div>
</body>

</html>