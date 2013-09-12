<?php


namespace Components;


  /**
   * Validator
   *
   * @api
   * @package net.evalcode.components.validator
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
