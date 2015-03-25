<?php
namespace RuleSet;

class RuleSet
{
    protected $rules = array();
    
    public function filter($input) {
        foreach ($this->rules as $rule) {
            $output = $rule->filter($input);
            if ($output != null) return $output;
        }
    }
    
    public function clear() {
        $this->rules = array();
        return $this;
    }
    
    public function load($ruleSetType, $data, $output) {
    	// fix RuleType class naming
        $ruleRulesetChars = str_split($ruleSetType);
        $camelized = strtoupper(array_shift($ruleRulesetChars)).implode('', $ruleRulesetChars);
        
        $ruleClass = 'RuleSet\\Rules\\' . $camelized . "RuleType";
        
        // check if class exists
        if (!class_exists($ruleClass)) {
            throw new RuleSetException("Rule type '$ruleClass' does not exist!");
        }
     	// add rule
        $this->rules[] = new $ruleClass($data, $output);
        return $this;
    }
}

class RuleSetException extends \Exception
{
}
