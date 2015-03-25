<?php
namespace RuleSet\Rules;

class RuleTypes
{
    const IN = 'in';
    const BETWEEN = 'between';
    const EQUAL = 'equal';
    const GREATERTHAN = 'greaterThan';
    const LESSTHAN = 'lessThan';
    const GREATEREQUALTHAN = 'greaterEqualThan';
    const LESSEQUALTHAN = 'lessEqualThan';
    const STARTSWITH = 'startsWith';
    
    public static function getAll() {
        return array(
			array('description' => "In rule expects paramaters to be in '`value1`,`value2`,...' format, with value1,value2,... as integers!", 'text' => RuleTypes::IN),
         	array('description' => "Between rule expects paramters to be in '`valuemin`,`valuemax`' format, with valuemin and valuemax as integers!", 'text' => RuleTypes::BETWEEN),
        	array('description' => "Equal type expects parameters to be of type string, integer or float!", 'text' => RuleTypes::EQUAL),
         	array('description' => "Greater than type expects parameters to be of type string, integer or float!", 'text' => RuleTypes::GREATERTHAN),
         	array('description' => "Less than type expects parameters to be of type string, integer or float!", 'text' => RuleTypes::LESSTHAN),
         	array('description' => "Greater or equal than type expects parameters to be of type string, integer or float!", 'text' => RuleTypes::GREATEREQUALTHAN),
         	array('description' => "Less or equal than type expects parameters to be of type string, integer or float!", 'text' => RuleTypes::LESSEQUALTHAN),
            array('description' => "Starts with type expects parameters to be of type string", 'text' => RuleTypes::STARTSWITH)
        );
    }
}
