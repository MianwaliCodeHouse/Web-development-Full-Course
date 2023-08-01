<?php

$result="NO Result";

if(isset($_GET["exp"])){
  $exp=$_GET["exp"];

  $result=eval("return $exp;");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcualtor</title>
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
box-shadow: inset 0 0 5px 2px #1382c3;
padding: 1rem 2rem;
min-width: 350px;
    }
    img{
      display: block;
      max-width: 200px;
      margin: 1rem auto;
      margin-bottom: 1rem;
    }
    input{
      width: 100%;
      display: block;
      padding: 0.4rem 1rem;
font-size: 1.5rem;
border-color: #1382c3;
text-align: center;
border-radius: 5px;
outline: none;
    }
    input:focus{
      outline: none;
    }
    button{
      display: block;
      margin: 1rem auto;
      background-color: #1382c3;
      color: white;
      padding: 0.8rem 1.4rem;
      border-radius: 1.2rem;
      font-size: 2rem;
      border: none;
      cursor: pointer;;
    }
    .result{
      border: 1px solid #1382c3;
      min-height: 100px;
      display: grid;
      place-content: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="assets/cal.png" alt="">
    <form action="" method="get">
      <input type="text" name="exp" placeholder="Enter the Math expersion">
      <button>Calculate</button>
    </form>
    <h2>PHP OUTPUT</h2>
    <div class="result">

    <h1>
      <?=$result?>
    </h1>

    </div>
  </div>
</body>
</html>