<?php
/**
 * Group class
 */
namespace RelationBuilder\Entity;
use RelationBuilder\Entity;
use RelationBuilder\Entity\Person;

class Group extends Entity {
  public $members = [];
  
  public function addMember(Person $member) :bool {
    if (!in_array($member, $this->members, true)) {
      $this->members[] = $member;
      return true;
    }
    return false;
  }
  
  public function removeMember(Person $member) :bool {
    $match = array_search($member, $this->members, true);
    if ($match !== NULL) {
      unset($this->members[$match]);
      return true;
    }
    return false;
  }
  
  public function getShortVersion() {
   return new class($this->displayName, count($this->members)) {
     public function __construct(public string $displayName, public int $memberCount) {}
   };
  }
}

