<?php
/**
 * GroupDebugTrait Trait
 */
namespace RelationBuilder\Entity\Group;

trait GroupDebugTrait {
    public function debug_print(): void {
        echo '<pre style="background: lightblue;">' . print_r($this, true) . '</pre>';
    }
    
    public function debug_printMembers(): void {
        echo '<pre style="background: lightblue;">' . ($this->displayName ?? __CLASS__) . ' Members: ' . var_export($this->members, true) . '</pre>';
    }
}
