<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

class UserLogic
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UserLogic State Machines
  private static $FlowUserAnonimous = 1;
  private static $FlowUserRegistered = 2;
  private static $FlowNavigation = 3;
  private $flow;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {
    $this->setFlow(self::$FlowUserAnonimous);
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function getFlowFullName()
  {
    $answer = $this->getFlow();
    return $answer;
  }

  public function getFlow()
  {
    if ($this->flow == self::$FlowUserAnonimous) { return "FlowUserAnonimous"; }
    elseif ($this->flow == self::$FlowUserRegistered) { return "FlowUserRegistered"; }
    elseif ($this->flow == self::$FlowNavigation) { return "FlowNavigation"; }
    return null;
  }

  public function userRegisters()
  {
    $wasEventProcessed = false;
    
    $aFlow = $this->flow;
    if ($aFlow == self::$FlowUserAnonimous)
    {
      $this->setFlow(self::$FlowUserRegistered);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function navigates()
  {
    $wasEventProcessed = false;
    
    $aFlow = $this->flow;
    if ($aFlow == self::$FlowUserAnonimous)
    {
      $this->setFlow(self::$FlowNavigation);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function userNavigates()
  {
    $wasEventProcessed = false;
    
    $aFlow = $this->flow;
    if ($aFlow == self::$FlowUserRegistered)
    {
      $this->setFlow(self::$FlowNavigation);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  private function setFlow($aFlow)
  {
    $this->flow = $aFlow;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}
?>