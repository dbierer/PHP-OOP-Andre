<?php
/**
 * Entity Superclass
 */
namespace RelationBuilder;

abstract class Entity {
  public string $displayName;
  public $customProperties = [];
  
  public function __construct(string $displayName) {
    $this->displayName = $displayName;
  }
  
  public function __get(mixed $property) {
    if (array_key_exists($property, $this->customProperties)) {
      return $this->customProperties[$property];
    }
  }
  
  public function __isset(mixed $property) {
    return array_key_exists($property, $this->customProperties) && isset($this->customProperties[$property]);
  }
  
  public function __tostring() {
    return $this->displayName ?? get_class($this);
  }
  
  abstract public function getShortVersion();
}

