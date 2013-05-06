<?php


namespace Components;


  /**
   * Validator
   *
   * @package net.evalcode.components
   * @subpackage validator
   *
   * @author evalcode.net
   */
  interface Validator extends Object
  {
    // ACCESSORS
    /**
     * @param mixed $value_
     *
     * @return boolean
     *
     * @throws \Components\Validator_Exception
     */
    function validate($value_, $quiet_=false);
    //--------------------------------------------------------------------------
  }
?>
