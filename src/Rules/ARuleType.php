<?php
namespace RuleSet\Rules;

use \RuleSet\Rules\RuleTypeException;

abstract class ARuleType
{
    protected $data;
    protected $output;
    
    public function __construct($data, $output) {
        $this->data = $data;
        $this->output = $output;
    }
    
    abstract function filter($input);
    
    public function getName() {
        return strtolower(str_replace('RuleType', '', __CLASS__));
    }
}
