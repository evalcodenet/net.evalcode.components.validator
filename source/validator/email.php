<?php


namespace Components;


  /**
   * Validator_Email
   *
   * @api
   * @package net.evalcode.components.validator
   *
   * @author evalcode.net
   */
  class Validator_Email extends Validator_Regex
  {
    // PREDEFINED PROPERTIES
    const PATTERN_REGEX='/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/';
    //--------------------------------------------------------------------------


    // CONSTRUCTION
    public function __construct()
    {
      parent::__construct(self::PATTERN_REGEX);
    }
    //--------------------------------------------------------------------------


    // OVERRIDES
    /**
     * @see Components\Validator::validate() Components\Validator::validate()
     */
    public function validate($value_, $quiet_=false)
    {
      try
      {
        return parent::validate($value_, $quiet_);
      }
      catch(Validator_Exception $e_)
      {
        throw new Validator_Exception('validator/email', 'Invalid email address.');
      }
    }
    //--------------------------------------------------------------------------
  }
?>
