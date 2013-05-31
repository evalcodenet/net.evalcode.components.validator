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


    // OVERRIDES
    /**
     * (non-PHPdoc)
     * @see Components\Validator::validate()
     */
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

    /**
     * (non-PHPdoc)
     * @see Components\Object::hashCode()
     */
    public function hashCode()
    {
      return string_hash($object_->pattern);
    }

    /**
     * (non-PHPdoc)
     * @see Components\Object::equals()
     */
    public function equals($object_)
    {
      if($object_ instanceof self)
        return $this->pattern===$object_->pattern;

      return false;
    }

    /**
     * (non-PHPdoc)
     * @see Components\Object::__toString()
     */
    public function __toString()
    {
      return sprintf('%s@%s{pattern: %s}',
        __CLASS__,
        $this->hashCode(),
        $this->pattern
      );
    }
    //--------------------------------------------------------------------------
  }
?>
