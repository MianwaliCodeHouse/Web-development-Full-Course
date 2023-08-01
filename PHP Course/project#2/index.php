<?php

$result="No Result";

if(isset($_GET['num'])){
  $num=$_GET["num"];
  if($num>0){
    $result=$num." is a (+ve)positive";
  }elseif($num<0){
    $result=$num." is a (-ve)negative";
  }else{
    $result=$num." is a Nuteral number";
  }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Number Classification</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: system-ui;
    }
    body{
      display: grid;
      place-content: center;
      height: 100vh;
    }
    .container{
      box-shadow: inset 0 0 5px 1px #2d65cc;
      padding: 2rem 1.5rem;
      border-radius: 10px;
    }
    h1{
      text-align: center;
      font-size: 2.2rem;
      margin-bottom: 2rem;
      color: #2d65cc;
    }
    button{
      display: block;
      background-color: #2d65cc;
      color: white;
      padding: 1rem 2rem;
      font-size: 1.5rem;
      border: none;
      cursor: pointer;
      border-radius: 2rem;
      margin: 1rem auto;
    }
    form{
      margin: 1rem auto;
    }
    b,input{
      font-size: 1.3rem;
      text-align: center;
    }
    h2{
      color: #2d65cc;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Number Classification</h1>
    <form action="index.php" method="get">
      <b>Enter Number:</b>
      <input type="number" name="num" placeholder="Must Enter the Number">
      <button>Classify Number</button>
    </form>
    <hr>
    <br>
    <h2>
    <?=$result?>
    </h2>
  </div>
</body>
</html>