<?php
include "bdd.php";


$req = $bdd->prepare("
    SELECT * 
    FROM book 
    INNER JOIN team ON book.idPpl = team.id
");

$req->execute();
$book = $req->FetchAll();


// INNER JOIN team ON book.idPpl = team.id