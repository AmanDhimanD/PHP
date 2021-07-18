<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else</title>
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
        $age=18;
        if ($age>=18){    
            echo "You can Vote !!!!";
        }
        else if ($age==17)
        {
            echo "Wait for complete 18. Now your age  ";
            echo  $age; 
        }
        else
        {
            echo "You can not vote";
        }

        ?>
    </div>
</body>

</html>