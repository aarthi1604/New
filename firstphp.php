<?php
session_start();
error_reporting(0);
$databaseHost='localhost';
$databaseName='venkatdinesh';
$datbaseUserName='root';
$databasePassword='';
$mysqli=mysqli_connect($databaseHost,$datbaseUserName,$databasePassword,$databaseName);
?>