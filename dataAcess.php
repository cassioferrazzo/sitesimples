<?php

$dbInfo = include './fixture/db_data.php';
$host = (isset($dbInfo['db']['host'])) ? $dbInfo['db']['host'] : null;
$dbname = (isset($dbInfo['db']['dbname'])) ? $dbInfo['db']['dbname'] : null;
$user = (isset($dbInfo['db']['user'])) ? $dbInfo['db']['user'] : null;
$pass = (isset($dbInfo['db']['pass'])) ? $dbInfo['db']['pass'] : null;

return new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);