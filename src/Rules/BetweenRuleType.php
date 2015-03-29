<?php
namespace RuleSet\Rules;

class BetweenRuleType extends ARuleType
{
    
    /**
     * data should be a string comma separated string where first value is valuemin and second is valuemax
     * [filter description]
     * @param  [type] $input [description]
     * @return null or output
     */
    public function filter($input) {
        $this->data = !is_array($this->data) ? explode(',', $this->data) : $this->data;
        if (count($this->data) != 2) {
            throw new RuleTypeException("Between rule type expects data to have 'valuemin,valuemax' format!");
        }
        return $input <= $this->data[1] && $input >= $this->data[0] ? $this->output : null;
    }
}
