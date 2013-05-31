<?php


namespace Components;


  /**
   * Validator_Util
   *
   * @package net.evalcode.components
   * @subpackage validator
   *
   * @author evalcode.net
   */
  class Validator_Util
  {
    // STATIC ACCESSORS
    /**
     * @return boolean
     *
     * @throws \Components\Validator_Exception
     */
    public static function matches($value_, $pattern_, $quiet_=false)
    {
      if(null===self::$m_validatorRegex)
        self::$m_validatorRegex=new Validator_Regex('');

      self::$m_validatorRegex->pattern=$pattern_;

      return self::$m_validatorRegex->validate($value_, $quiet_);
    }

    /**
     * @return boolean
     *
     * @throws \Components\Validator_Exception
     */
    public static function validateEmail($value_, $quiet_=false)
    {
      if(null===self::$m_validatorEmail)
        self::$m_validatorEmail=new Validator_Email();

      return self::$m_validatorEmail->validate($value_, $quiet_);
    }
    //--------------------------------------------------------------------------


    // IMPLEMENTATION
    private static $m_validatorEmail;
    private static $m_validatorRegex;
    //--------------------------------------------------------------------------
  }
?>
