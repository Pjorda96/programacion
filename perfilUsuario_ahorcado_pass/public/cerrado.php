<?php
require_once __DIR__.'/../vendor/autoload.php';

session_start();
$_SESSION=[]; //borrar todos los datos
session_destroy();
header('Location: index.php');