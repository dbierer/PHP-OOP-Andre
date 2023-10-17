<?php
/**
 * RBException class
 */
namespace RelationBuilder;

class RBException extends \Exception {
    public function __construct(string $msg, ?int $en) {
        parent::__construct($msg, $en);
    }

    public function __toString() {
        return '[ERROR] ' . __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function getOutputHTML(): string {
        return '<output style="background: #ff0000;">' . $this . "</output><br>";
    }
}
