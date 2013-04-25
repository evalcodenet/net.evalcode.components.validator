<?php


namespace Components;


  /**
   * Validator_Regex
   *
   * @package net.evalcode.components
   * @subpackage validator
   *
   * @author evalcode.net
   */
  class Validator_Regex implements Validator
  {
    // PROEPRTIES
    public $pattern;
    //--------------------------------------------------------------------------


    // CONSTRUCTION
    public function __construct($pattern_)
    {
      $this->pattern=$pattern_;
    }
    //--------------------------------------------------------------------------


    // OVERRIDES/IMPLEMENTS
    public function validate($value_, $quiet_=false)
    {
      if(!preg_match($this->pattern, $value_))
      {
        if(false===$quiet_)
          throw new Validator_Exception('validator/regex', 'Value does not match expression.');

        return false;
      }

      return true;
    }
    //--------------------------------------------------------------------------
  }
?>
