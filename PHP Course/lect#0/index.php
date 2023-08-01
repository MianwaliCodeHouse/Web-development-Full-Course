 
<!-- ***Introduction*** -->

<!-- ***What Can PHP Do?*** -->
<!-- PHP can generate dynamic page content means changes will be stored into DataBase -->
<!-- PHP can create, open, read, write, delete, and close files on the server -->
<!-- PHP can collect form data -->
<!-- PHP can send and receive cookies -->
<!-- PHP can add, delete, modify data in your database -->
<!-- PHP can encrypt data -->

<!-- ***Setup Evironment*** -->

<!-- ***Php Foldering and Extensions*** -->

<!-- ***Php Working*** -->

<!-- file.php------ ->Apache------ ->MySql(optional)----- -> Apache--------- ->HTML,CSS,JS---- ->Client-side) -->

<!-- Note:- "PHP files can contain text, HTML, CSS, JavaScript, and PHP code" -->

<!-- PHP Systax and echo , print , print_r -->


<!-- echo & print are almost same but print_r is only for arrays  -->
<!-- Muliple places for php in php  -->
<!-- PHP problem with CSS -->

<?php
echo "<h1>first PHP</h1>"
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    h1{
      color: purple;
    }
    h2{
      color: green;
    }
  </style>
</head>
<body>
  <h1>MianwaliCodeHOuse  </h1>
  <?php
echo "<h1>Second PHP</h1>"
?>
  <h2>PHP course has been started</h2>
</body>
</html>


<?php
echo "string";
echo "<br>";
echo '"Hello"';
echo "<br>";
echo "I'm a Programmer";
echo "<br>";
echo 12;


echo "<br>";
echo "<br>";
echo "<br>";

print("string");
echo "<br>";
print(13);

echo "<br>";
echo "<br>";
echo "<br>";

$arr=[1,2,3];
print_r($arr);
print($arr);
echo $arr;

?>
