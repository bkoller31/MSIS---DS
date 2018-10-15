<?php

require '../../app/common.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  require 'commentPost.php';
  exit;
}
//What will happen here is team is our model object, and we will write a method
//called getAll, and it will return all the teams
$comment = Comments::fetchAll();

//2. Convert to JSON
$json = json_encode($comment, JSON_PRETTY_PRINT);

//3. Print
header('Content-Type: application/json');
echo $json;
