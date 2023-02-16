<?php
require_once("konf.php");
if(isSet($_REQUEST["sisestusnupp"])) {
    global $yhendus;
    $kask = $yhendus->prepare(
        "SELECT kirjeldus FROM arvutitellimused;");
    $kask->bind_result($kirjeldus);
    $kask->execute();
}
?>
<!doctype html>
<html>
<head>
    <title>LisaArvuti</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>LisaArvuti</h1>
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
    <dl>
    <?php
            echo "$kirjeldus";?>
            <dt>Korpus:</dt>
            <dd><input type='radio' name='Korp'></dd>
            <dt>Kuvar:</dt>
            <dd><input type='radio' name='Kuv'></dd>
            <dt></dt>
    </dl>

</form>
</body>
</html>