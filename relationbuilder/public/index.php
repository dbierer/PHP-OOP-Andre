<?php
define('BASE', realpath(__DIR__ . '/../'));

spl_autoload_register(
  function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    require BASE . '/src/' . $file;
  }
);

use RelationBuilder\Entity\Person;
use RelationBuilder\Entity\Group;

$group1 = new Group("Rydian Paving LLC");
$person1 = new Person("Steven","Magnus",null);

echo var_export($group1) . '<br>';
echo var_export($person1) . '<br>';

echo '<br>';

echo "Adding $person1 to $group1 ..." . '<br>';
$group1->addMember($person1);
echo var_export($group1) . '<br>';

echo '<br>';

echo "Removing $person1 from $group1 ..." . '<br>';
$group1->removeMember($person1);
echo var_export($group1) . '<br>';

echo '<br>';

echo 'Adding customProperty ...' . '<br>';
$person1->customProperties["MyProperty"] = 132;
echo '__get(): ' . $person1->MyProperty . '<br>';
echo '__isset(): ' . isset($person1->MyProperty) . '<br>';

echo '<br>';

echo 'Short version:' . '<br>';
echo var_export($person1->getShortVersion());
?>

