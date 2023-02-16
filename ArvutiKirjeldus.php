<?php
require_once("konf.php");
if(isSet($_REQUEST["sisestusnupp"])) {
    global $yhendus;
    $kask = $yhendus->prepare(
        "INSERT INTO arvutitellimused(kirjeldus) values (?)");
    $kask->bind_param("s", $_REQUEST["kirjeldus"]);
    $kask->execute();
    $yhendus->close();
    exit();
}
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
<form action="?">
    <form>
        <dt>Kirjeldus:</dt>
        <dd><input type="text" name="Kirjeldus"></dd>
        <dt><form method="post" action="LisaArvuti.php">
            <input type="submit" name="Kirje" value="sisesta"></dt></form>
    </dl>
</form>
</body>
</html>