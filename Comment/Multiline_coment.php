<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
    }

    .title {
    color: grey;
    font-size: 18px;
    }

    button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
    }

    a {
    text-decoration: none; 
    font-size: 22px;
    color: black;
    }

    button:hover, a:hover {
    opacity: 0.7;
    }
    </style>
    </head>
<body>
<h2 style="text-align:center">User</h2>

<div class="card">
  <img src="fotodiri.jpg" alt="Nurull Fazriah" style="width:50%">
  <h1>Nurull Fazriah</h1>
  <p class="title">2223609</p>
  <p>06-Februari-2024</p>
  <p><button>Enjoy!!</button></p>
</div>

</body>
 <!-- Multi-line comment as an explanation: -->
<?php
/*
The next statement will
print a welcome message
*/
echo "Welcome Home!";
?>

<!-- Multi-line comment to ignore code: -->
<?php
/*
echo "Welcome to my home!";
echo "Mi casa su casa!";
*/
echo "Hello!";
?>

<!-- The  + 15 part will be ignored in the calculation: -->
<p>Using comments to ignore parts of a code line:</p>
 
<?php
$x = 5 /* + 15 */ + 5;
echo $x;
?>
</html>