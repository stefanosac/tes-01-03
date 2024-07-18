<?php
require_once "autoload.php";

/* PROVO AD AGGIUNGERE */
use App01\Rootto; // as Rootto;

echo 'io sono entry.php su porta ' . $_SERVER['SERVER_PORT'];

$rot = new Rootto();
echo $rot->getId();
/* ho aggiunto un commento */
/* altro commento */
?>
