<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
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
        <h3>Strings</h3>
    </div>
    <div class="text">

        <?php
            $str1="String";
            echo $str1."<br>";
            $len=strlen($str1);
            echo "The length of Str is ".$len.".<br>";

            echo "Number of Words ".str_word_count($str1).".<br>";
            
            $str2="Rama";
            echo "Reverse of ".$str2." is ".strrev($str2).".<br>";

            echo "Searching (in) :- ".strpos($str1,"in").".<br>";
            
            echo "Replace (in) to (is) :- ".str_replace("in","is","$str1").".<br>";

        ?>
    </div>
</body>

</html>