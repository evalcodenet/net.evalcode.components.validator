<?php


  /**
   * Validator
   *
   * @package net.evalcode.components
   * @subpackage validator
   *
   * @author evalcode.net
   */
  interface Validator
  {
    // ACCESSORS/MUTATORS
    /**
     * @param mixed $value_
     *
     * @throws Validator_Exception
     *
     * @return boolean
     */
    function validate($value_, $quiet_=false);
    //--------------------------------------------------------------------------
  }
?>
