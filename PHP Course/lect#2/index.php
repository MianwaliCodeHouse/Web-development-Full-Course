<!-- ***Operators*** -->
<!-- a)Arithmetic operators(+,-,*,/,%,**) -->
<!-- b)Assignment operators(=,+=,*=,%=) -->
<!-- $variable+=5;
$variable=$variable+5; -->
<!-- c)Comparison operators(<,>,<=,>=,===,=,==) -->
<!-- 2==='2'------- false  -->
<!-- d)Increment/Decrement operators(++,--) -->
<!-- prefix
++$variable
--$variable
postfix
$variable++
$variable-- -->
<!-- e)Logical operators(||,&&,!) -->
<!-- condition1 && condition2
2==2 && 1==2---------- false -->
<!-- f)String operators(.,.=) -->
<!-- cancatination operator  -->
<!-- $fname="yasir";
$lname="hussain";
$fullname=$fname." ".lname; -->
<!-- g)Conditional assignment operators($variable=condition?value1:value2;) -->
<!-- $x=1;
$variable=x>2?true:false; -->

<!-- ***PHP Conditional Statements*** -->
<!-- Conditional statements are used to perform different actions based on different conditions. -->

<!-- In PHP we have the following conditional statements: -->

<!-- if statement - executes some code if one condition is true -->

<?php
// if(1==2){
//   echo "<h1>true</h1>"; // this block of code will be skipped when condition will be false
// }

?>

<!-- if...else statement - executes some code if a condition is true and another code if that condition is false -->

<?php
// if (2==2) {
//   # 1st block of code...
//   echo "<h1>1st block of code</h1>";
// } else {
//   #2nd block of code...
//   echo "<h1>2nd block of code</h1>";
// }

?>


<!-- if...elseif...else statement - executes different codes for more than two conditions -->


<?php
// if(1==2){
// # code...
// echo "1st block";
// }elseif(2==4){
//   # code...
//   echo "2nd block";
// }elseif (3==9) {
//   # code...
//   echo "3rd else block";
// }else{
//   # code... this will execute when all condions will be false.
//   echo "last else block";
// }
?>


<!-- switch statement - selects one of many blocks of code to be executed -->

<?php
// $variable="laheef";
// switch ($variable) {
//   case 'sajid':
//     # code1...
//     echo "1st case";
//     break;
//   case 'nasir':
//     # code2...
//     echo "2nd case";
//     break;
//   case 'yasir':
//     # code3...
//     echo "3rd case";
//     break;
  
//   default:
//     # code-last-default...
//     echo "Last case";
//     break;
// }

?>





<!-- php start and end concept  -->
<?php
$page=$_GET["page"];
if($page=="home"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <h1>Home page</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias explicabo facilis accusamus accusantium itaque nesciunt voluptas, reprehenderit expedita est illo error voluptate eligendi alias magnam recusandae sapiente. Aliquid, rerum adipisci.</p>
</body>
</html>
<?php
}elseif($page=='about') {
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
  </head>
  <body>
    <h1>About</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, ipsam fuga expedita maiores libero exercitationem adipisci aliquam repudiandae harum iusto tempore optio reiciendis corrupti laudantium cupiditate perspiciatis esse rem quaerat?</p>
    <h2>Skill</h2>
    <ol>
      <li>skill1</li>
      <li>skill2</li>
      <li>skill3</li>
      <li>skill4</li>
      <li>skill5</li>
    </ol>
  </body>
  </html>
  <?php
}

?>