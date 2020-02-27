<?php
include "bdd.php";

$req = $bdd->prepare("
SELECT * FROM team 

");

$req->execute();
$team = $req->FetchAll();
