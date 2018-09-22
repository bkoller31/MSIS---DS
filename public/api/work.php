<?php

echo '<pre>';
echo "foo\n";
echo 'bar\n';

$name = 'Phil';

echo "\n";
echo "My name is {$name}\n";
echo "My name is" . $name . "\n";


class Animal
{
  public $type = 'Pig';
}

$wilbur = new Animal();
echo $wilbur->type;


if (true) {
  //This
} else {
  //That
}

for ($i = 0; $i < 10; $i++) {
  //stuff
}


$id = 0;
if (isser ($_GET['id'])) {
  $id = $_GET ['id'];
}

$id = isset ($_GET['id']) ? $_GET ['id'] : 0;

$id = $_GET['id'] ?? 0;


$arr1 = [
  'first' => 'Tom'
  'last' => 'Gregory'
];

echo '[0]:' . $arr1[0]; // Won't Work
echo '[first]:' . $arr1['first']; //Will Work

$arr2 = ['one','two','three'];
//Or you can write it like...
$arr2 = [
  0 => 'one',
  1 => 'two',
  2 => 'three'];

  foreach ($arr2 as $key => $val){
    echo $key . ':' . $val;
  }
