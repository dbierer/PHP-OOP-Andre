<?php
/**
 * Organization class
 */
namespace RelationBuilder\Entity\Group;
use RelationBuilder\Entity\Group;

class Organization extends Group {
    public string $organizationType; // LLC, INC, etc.
}

