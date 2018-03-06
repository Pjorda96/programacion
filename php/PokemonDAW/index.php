<?php
require_once "lib/fauna/JoanGrowlithe.php";
require_once "lib/fauna/JosepMagikarp.php";
require_once "lib/fauna/JulioWobbuffet.php";
require_once "lib/fauna/PabloRayquaza.php";
require_once "lib/fauna/RegiSteel.php";
require_once "lib/fauna/SergioHoothoot.php";

$joan= new JoanGrowlithe();
echo "Características de Joan:<br>";
echo "Tiene ".$joan-> getVida()." de vida.<br>";
echo "Su cola es de ".$joan-> getLongitudCola()."<br>";
echo "Su poder agilidad es de ".$joan->getAgilidad()."<br><br>";

$josep= new JosepMagikarp();
echo "Características de Josep:<br>";
echo "Tiene ".$josep-> getVida()." de vida.<br>";
echo "Su cola es de ".$josep-> getLongitudCola()."<br>";
echo "Su habilidad es '".$josep->getUtilidad()."'.<br><br>";

$julio= new JulioWobbuffet();
echo "Características de Julio:<br>";
echo "Tiene ".$julio-> getVida()." de vida.<br>";
echo "Su cola es de ".$julio-> getLongitudCola()."<br>";
echo "Juegos jugados a la vez: '".$julio->getJuegos()."'.<br><br>";

$pablo= new PabloRayquaza();
echo "Características de Pablo:<br>";
echo "Tiene ".$pablo-> getVida()." de vida.<br>";
echo "Su cola es de ".$pablo-> getLongitudCola()."<br>";
echo $pablo-> nivelar()."<br>";

$regi= new RegiSteel();
echo "Características de Regi:<br>";
echo "Tiene ".$regi-> getVida()." de vida.<br>";
echo "Su cola es de ".$regi-> getLongitudCola()."<br>";
echo $regi-> tardeDeGYM()."<br>";

$sergio= new SergioHoothoot();
echo "Características de Julio:<br>";
echo "Tiene ".$sergio-> getVida()." de vida.<br>";
echo "Su cola es de ".$sergio-> getLongitudCola()."<br>";
echo "Número de patas disponibles: '".$sergio->getPatas()."'.<br><br>";
