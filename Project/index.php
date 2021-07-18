<!-- mysqli  -->
<?php
$insert = false;
    if(isset($_POST['name'])){
        //set connection variable
     $server = "localhost";
     $username = "root";
     $password = "";

    //create a DB Connection
     $conn = mysqli_connect($server,$username,$password);
     if(!$conn)
     {
         die("Failed ".mysqli_connect_errno());
     }
    //  echo "Successfully, Done!!!";

    //Collecting the Data
    $name = $_POST['name'] ;
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email= $_POST['email'];

    $sql = "INSERT INTO `delform`.`details_form` (`name`, `age`, `gender`, `phone`, `email`, `datetime`) VALUES ('$name', '$age', '$gender', '$phone', '$email',current_timestamp())";
    // echo $sql;

    if($conn->query($sql)==true)
    {
    //  echo "Successfully inserted";   
        $insert =true;
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }
    //exit the DB
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <video autoplay muted loop id="myVideo">
        <source src="video.mp4" type="video/mp4">
    </video>
    <div class="container">
        <h1>Welcome To My Form</h1>
        <p>Fill the all Details Carefully !!! </p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone"> <input type="email" name="email" id="email" placeholder="Enter your eamil ">
            <button type="submit" class=" btn ">Submit</button>
            <button type="reset " class="btn" onclick="reloadPage()">Reload</button>
        <?php
        if($insert == true){
            echo "<p class='msg'>Details are Submitted !!!!!</p> ";
        }
        ?>
        </form>
        <!-- <p class="msg">Details are Submitted !!!!!</p> -->
    </div>
    <script src=" index.js ">
         function reloadPage(){
             // window.location.reload();
            window.open("http://localhost/learning")
        }
    </script>
</body>

</html>