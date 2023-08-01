<?php
//! Verables
// $container=12;
// echo $container,"<br>";

// $container="string with duoble quotes";
// echo $container,"<br>";

// $container='string with single quotes';
// echo $container,"<br>";

// $container=67.98;
// echo $container,"<br>";


//! GET method 

// echo $_GET; //!wrong

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// $name=$_GET["name"];
// $email=$_GET["email"];
// $pwd=$_GET["password"];

//! POST method 

// print_r($_POST);
// $name=$_POST["name"];
// $email=$_POST["email"];
// $pwd=$_POST["password"];

//! URl Data 

// print_r($_GET);
// $msg=$_GET["message"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
</head>
<body>
  <h2>
    <?php echo $msg?><br>
    <!--both are same -->
    <?=$msg?>
  </h2>
  
</body>
</html>