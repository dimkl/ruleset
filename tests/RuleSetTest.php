<?php
use RuleSet\RuleSet;
use RuleSet\RuleTypes;

class RuleSetTest extends PHPUnit_Framework_TestCase 
{
	public function testLoad_CaseExistingRule(){
		$ruleSet=new RuleSet();

		$ruleSet->load(RuleTypes::EQUAL,'1','input is "1"');
		$this->assertTrue(count($ruleSet->getRules())==1);
	}
    /**
     * @expectedException    RuleSet\Exceptions\RuleSetException    
     * @expectedExceptionMessage  Rule type 'RuleSet\Rules\HelloRuleType' does not exist!
     */
	public function testLoad_CaseNotExistingRule(){
		$ruleSet=new RuleSet();
		$ruleSet->load('hello','1','input is "1"');
	}

}