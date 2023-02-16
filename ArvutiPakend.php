<?php
require_once ("konf.php");
global $yhendus;
$kask=$yhendus->prepare(
    "SELECT * FROM arvutitellimused;");
$kask->bind_result($id, $kirjeldus, $korpus, $kuvar, $pakitud);
$kask->execute();
$yhendus->close();
?>
<!doctype html>
<html>
<head>
    <title>arvutitellimused</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Arvutitellimused</h1>
</header>
<nav class="nav">
    <ul>
        <li><a href="ArvutiKirjeldus.php">Kirjeldus</a></li>
        <li><a href="LisaArvuti.php">UueTellimus</a></li>
        <li><a href="arvutitellimused.php">Arvutitellimused</a></li>
        <li><a href="ArvutiPakend.php">ArvutiPakend</a></li>
    </ul>
</nav>
