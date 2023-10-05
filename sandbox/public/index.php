<?php
define('BASE', realpath(__DIR__ . '/../'));

spl_autoload_register(
  function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    require BASE . '/src/' . $file;
  }
);

use RelationBuilder\Entity;
use RelationBuilder\Entity\Person;

$item1 = new Entity("Rydian Paving LLC");
$item2 = new Person("Steven","Magnus",null);

echo var_export($item1) . PHP_EOL;
echo var_export($item2) . PHP_EOL;

echo $item1->displayName . PHP_EOL;
echo $item2->getFullName();
?>

