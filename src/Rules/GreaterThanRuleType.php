<?php
namespace RuleSet\Rules;

class GreaterThanRuleType extends ARuleType
{
    public function filter($input) {
        
        //string compare
        if (is_string($this->data)) {
            return strcmp($input, $this->data) > 0 ? $this->output : null;
        }
        
        //numeric compare
        if (is_numeric($this->data)) {
            return $input > $this->data ? $this->output : null;
        }
        return null;
    }
}