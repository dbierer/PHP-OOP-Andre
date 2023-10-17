<?php
/**
 * Group Interface
 */
namespace RelationBuilder\Entity;
use RelationBuilder\Entity\Person;

interface GroupInterface {
  public function addMember(Person $member): bool;
  public function removeMember(Person $member): bool;
}

