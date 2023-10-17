<?php
define('BASE', realpath(__DIR__ . '/../'));

spl_autoload_register(
  function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    require BASE . '/src/' . $file;
  }
);

use RelationBuilder\RBException;
use RelationBuilder\Entity\Person;
use RelationBuilder\Entity\Group\Organization;
use RelationBuilder\Entity\Group\Team;

$group1 = new Organization("Rydian Paving LLC");
$team1 = new Team("Marketing", $group1);
$person1 = new Person("Steven","Magnus",null);

$group1->debug_print();
$team1->debug_print();
$person1->debug_export();

echo '<br>';

echo "Adding $person1 to Team $team1 of Organization $group1 ..." . '<br>';
$team1->addMember($person1);
$team1->debug_printMembers();
$group1->debug_printMembers();

echo '<br>';

echo "Removing $person1 from $group1 ..." . '<br>';
$team1->removeMember($person1);
$group1->removeMember($person1);
echo var_export($team1) . '<br>';
echo var_export($group1) . '<br>';

echo '<br>';

echo 'Adding customProperty ...' . '<br>';
$person1->customProperties["MyProperty"] = 132;
echo '__get(): ' . $person1->MyProperty . '<br>';
echo '__isset(): ' . isset($person1->MyProperty) . '<br>';

echo '<br>';

echo 'Short version:' . '<br>';
echo var_export($person1->getShortVersion());

echo '<br><br>';

echo 'Attempting to throw an Exception ... <br>';
try {
  throw new RBException('Something happened.', 139);
  throw new InvalidArgumentException('Invalid argument passed!', 1184);
} catch (RBException $e) {
  echo $e->getOutputHTML();
} catch (Exception $e) {
  echo "[{$e->getCode()}]: {$e->getMessage()} \n<br>";
} finally {
  echo 'Made an attempt! <br>';
}
?>

