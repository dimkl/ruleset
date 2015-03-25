<?php
namespace RuleSet\Rules;
class StartsWithRuleType extends ARuleType
{
    public function filter($input) {
        if (!is_string($this->data)) {
            throw new RuleTypeException("StartsWith rule type expects data to be of string format");
        }
        return strpos($this->data,$input)==0?$this->output:null;
    }
}