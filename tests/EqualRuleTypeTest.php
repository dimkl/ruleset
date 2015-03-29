<?php
use RuleSet\Rules\EqualRuleType;

class EqualRuleTypeTest extends PHPUnit_Framework_TestCase
{
    public function testFilterString() {
        $data = '1';
        $output = 'input is "1"';
        
        $rule = new EqualRuleType($data, $output);
        $this->assertTrue($rule->filter('1') == $output);
    }
    public function testFilterInt() {
        $data = '1';
        $output = 'input is "1"';
        
        $rule = new EqualRuleType($data, $output);
        $this->assertTrue($rule->filter(1) == $output);
    }
    public function testFilterObject() {
        $data = new \stdClass();
        $output = 'input is "1"';
        
        $rule = new EqualRuleType($data, $output);
        $this->assertTrue($rule->filter(new \stdClass()) == $output);
    }
    public function testFilterUnmatched() {
        $data = '1';
        $output = 'input is "1"';
        
        $rule = new EqualRuleType($data, $output);
        $this->assertTrue($rule->filter(2) == null);
    }
}
