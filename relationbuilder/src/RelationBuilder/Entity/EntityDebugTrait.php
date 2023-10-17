<?php
/**
 * EntityDebugTrait Trait
 */
namespace RelationBuilder\Entity;

trait EntityDebugTrait {
    public function debug_print(): void {
        echo '<pre style="background: lightgrey;">' . print_r($this, true) . '</pre>';
    }
    
    public function debug_export(): void {
        echo '<pre style="background: lightgrey;">' . var_export($this, true) . '</pre>';
    }
}
