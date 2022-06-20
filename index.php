<?php
$con = mysqli_connect("localhost", "bootham", "richpatch76", "bootham_weapons");
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:".mysqli_connect_error(); die();}
else{
    echo "connected to database";
}
?><!DOCTYPE html>

<html lang='en'>

<head>
    <title> Weapon shop </title>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body>
<header>
    <nav>
        <a href='index.php'> Home </a>
        <a href='weapons.php'> Weapons </a>
        <a href='orders.php'> Make an order </a>

    </nav>
</header>

<main>
    <h1>Welcome to the weapon shop!</h1>
    <p> We sell weapons :)</p>
    <p> or do we</p>
</main>

</body>

</html>