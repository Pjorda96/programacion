<?php
require_once "lib/fauna/JoanGrowlithe.php";
require_once "lib/fauna/JosepMagikarp.php";
require_once "lib/fauna/JulioWobbuffet.php";
require_once "lib/fauna/PabloRayquaza.php";
require_once "lib/fauna/RegiSteel.php";
require_once "lib/fauna/SergioHoothoot.php";

$joan= new JoanGrowlithe();
$josep= new JosepMagikarp();
$julio= new JulioWobbuffet();
$pablo= new PabloRayquaza();
$pablo-> nivelar();
$regi= new RegiSteel();
$regi-> tardeDeGYM();
$sergio= new SergioHoothoot();

echo "Características de Joan:<br>";
echo "Tiene ".$joan-> getVida()." de vida.<br>";
echo "Su cola es de ".$joan-> getLongitudCola()."<br>";
echo "Su poder agilidad es de ".$joan->getAgilidad();
