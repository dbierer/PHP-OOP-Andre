<?php
/**
 * Person class
 */
namespace RelationBuilder\Entity;
use RelationBuilder\Entity;

class Person extends Entity {
  public string $firstName;
  public string $lastName;
  
  public function __construct($firstName, $lastName, $displayName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->displayName = $displayName ?? ($firstName . ' ' . ($lastName ?? ''));
  }
  
  public function getFullName() :string {
    return trim(($this->firstName . ' ' ?? '') . ($this->lastName ?? ''));
  }
}

