<?php
/**
 * Person class
 */
namespace RelationBuilder\Entity;
use RelationBuilder\Entity;

class Person extends Entity {
  public string $firstName;
  public string $lastName;
  
  public function __construct(string $firstName, string $lastName, ?string $displayName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->displayName = $displayName ?? ($firstName . ' ' . ($lastName ?? ''));
  }
  
  public function getFullName() :string {
    return trim(($this->firstName . ' ' ?? '') . ($this->lastName ?? ''));
  }
  
  public function getShortVersion() {
   return new class($this->firstName, $this->lastName, $this->displayName) {
     public function __construct(public string $firstName, public string $lastName, public string $displayName) {}
   };
  }
}

