<?php
namespace RuleSet\Rules;

class EqualRuleType extends ARuleType
{
    public function filter($input) {
        return $input == $this->data ? $this->output : null;
    }
}