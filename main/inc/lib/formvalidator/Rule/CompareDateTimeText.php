<?php

require_once 'HTML/QuickForm/Rule/Compare.php';
/**
 * QuickForm rule to compare 2 dates
 */
class HTML_QuickForm_Rule_CompareDateTimeText extends HTML_QuickForm_Rule_Compare
{
    /**
     * Validate 2 dates          
     * @param string $operator The operator to use (default '==')
     * @return boolean True if the 2 given dates match the operator
     */
    function validate($values, $operator = null) {
    	$datetime1 = api_strtotime($values[0]);
    	$datetime2 = api_strtotime($values[1]);        
		$result =  parent::validate(array($datetime1, $datetime2), $operator);        
        return $result;
    }
}