<?php
/**
 * Team class
 */
namespace RelationBuilder\Entity\Group;
use RelationBuilder\Entity;
use RelationBuilder\Entity\Group;
use RelationBuilder\Entity\GroupInterface;

class Team extends Group {
    public function __construct (public string $displayName, public ?GroupInterface $parentGroup) {}

    public function addMember(Entity $member): bool {
        $success = parent::addMember($member);
        if($success && $this->parentGroup !== NULL) {
          $this->parentGroup->addMember($member);
        }

        return $success;
    }
}

