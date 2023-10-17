<?php
/**
 * Group class
 */
namespace RelationBuilder\Entity;
use RelationBuilder\Entity;
use RelationBuilder\Entity\GroupInterface;
use RelationBuilder\Entity\Person;

class Group extends Entity implements GroupInterface {
  public $members = [];
  
  public function addMember(Entity $member) :bool {
    if (!in_array($member, $this->members, true)) {
      $this->members[] = $member;
      return true;
    }
    return false;
  }
  
  public function removeMember(Entity $member) :bool {
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

