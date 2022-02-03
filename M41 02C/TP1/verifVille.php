<?php

    $bdd = "roose";
    $host = "lakartxela.iutbayonne.univ-pau.fr";
    $user = "roose";
    $pass = "roose";

    $connPDO = new PDO('mysql:host=' . $host . ';dbname=' . $bdd, $user, $pass);

    $request = $_REQUEST['q'];

    $rep = $connPDO->query("SELECT ville FROM bourse WHERE ville='$request'");

    if ($rep->fetch()) {
        echo "$request existe";
    }
    else {
        echo "$request n'existe pas";
    }
?>