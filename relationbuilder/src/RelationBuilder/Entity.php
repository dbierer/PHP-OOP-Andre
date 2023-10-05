<?php
/**
 * Entity Superclass
 */
namespace RelationBuilder;

class Entity {
  public string $displayName;
  
  public function __construct($displayName) {
    $this->displayName = $displayName;
  }
}

