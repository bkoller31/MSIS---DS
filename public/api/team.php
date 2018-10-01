<?php

require '../../app/common.php';

//What will happen here is team is our model object, and we will write a method
//called getAll, and it will return all the teams
$teams = Team::getAll();

//2. Convert to JSON
$json = json_encode($teams, JSON_PRETTY_PRINT);

//3. Print
header('Content-Type: application/json');
echo $json;
