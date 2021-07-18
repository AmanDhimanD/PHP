<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
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
            echo "<br>";
            
            $arr = array("Rayne","Coder","Youtuber");
            echo "Count :- ";
            echo count($arr);
            echo "<br>";
            echo "<br>";
            echo "<br>";
            
            echo "1.Array :- ";
            echo $arr[0];
            echo "<br>";

            echo "2.Array :- ";
            echo $arr[1];
            echo "<br>";

            echo "3.Array :- ";
            echo $arr[2];
            echo "<br>";
        ?>
    </div>
</body>

</html>