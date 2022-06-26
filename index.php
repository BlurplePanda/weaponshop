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
    <h3 class='center'> PONS </h3>
    <nav>
        <a href='index.php' class='button' id='current'> Home </a>
        <a href='weapons.php' class='button'> Weapons </a>
        <a href='orders.php' class='button'> Make an order </a>

    </nav>
</header>

<main>
    <h1>We are PONS (say it out loud)</h1>
    <p> We sell weapons :)</p>
    <p> PONS stands for Positively Outstanding (ammu)Nitions SHOP </p>
</main>

</body>

</html>