<?php

$db_user = "ias20";
$db_pass = "ecell123"; // pwd change for localhost : ecell123
$db_name = "flagship21";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

