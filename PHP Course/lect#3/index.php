<!-- ***Array*** -->
<!-- An array stores multiple values in one single variable: -->
<!-- $Variable=array("value1","value2","value3"); -->

<!-- ---Types of Array---  -->
<!-- a)Indexed Array -->
<?php

// $simple_Array=array("Yasir",22); //First method
// $simple_Array=["Yasir",22]; //Second method
// print_r($simple_Array);

// echo "<br>",$simple_Array[1];

?>
<!-- b)Associative Array -->

<?php
// $AssociativeArray=array("name"=>"Yasir","age"=>22);
// $AssociativeArray=["name"=>"Yasir","age"=>22];
// print_r($AssociativeArray);

// echo "<br>",$AssociativeArray["age"];


?>
<!-- c)Multi-Dimensional Arrays(2D , 3D , ...) -->
<?php

// $second_D_array=[
//   ["yasir","son",22] , ["sajid","father",44] ,["laheef","unknown",25]
// ];
// echo "<pre>";
// print_r($second_D_array);

// echo "</pre><br>";
// echo "<h1>",$second_D_array[1][0];

// $third_D_array=[
//   [
//     ["name","relation","age"],["yasir","son",22],["sajid","father",44]
//   ] ,
//    [
//     ["name","relation","age"],["nasir","son",12],["sajid","father",44]
//    ]
//    ];

// echo "<pre>";
// print_r($third_D_array);

// echo "<h1>",$third_D_array[0][1][0];



?>


<!-- ***PHP Include Files*** -->
<!-- if loading file error occurs then rest of below code will execute -->

<!-- ***PHP Require Files*** -->
<!-- if loading file error occurs then rest of below code will not execute -->
