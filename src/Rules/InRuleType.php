<?php
namespace RuleSet\Rules;

class InRuleType extends ARuleType
{
    public function filter($input) {
        $this->data = !is_array($this->data)?explode(',', $this->data):$this->data;
        if (count($this->data) == 0) {
            throw new RuleTypeException("In rule type expects data to be string in comma separated format!");
        }
        return in_array($input, $this->data) ? $this->output : null;
    }
}
