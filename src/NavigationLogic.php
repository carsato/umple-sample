<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

class NavigationLogic
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //NavigationLogic State Machines
  private static $FlowAnonimousNavigation = 1;
  private static $FlowCheckUserAnonimous = 2;
  private static $FlowResponsePage = 3;
  private $flow;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {
    $this->setFlow(self::$FlowAnonimousNavigation);
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
    if ($this->flow == self::$FlowAnonimousNavigation) { return "FlowAnonimousNavigation"; }
    elseif ($this->flow == self::$FlowCheckUserAnonimous) { return "FlowCheckUserAnonimous"; }
    elseif ($this->flow == self::$FlowResponsePage) { return "FlowResponsePage"; }
    return null;
  }

  public function userRequestPage()
  {
    $wasEventProcessed = false;
    
    $aFlow = $this->flow;
    if ($aFlow == self::$FlowAnonimousNavigation)
    {
      $this->setFlow(self::$FlowCheckUserAnonimous);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function userIsAnonimous()
  {
    $wasEventProcessed = false;
    
    $aFlow = $this->flow;
    if ($aFlow == self::$FlowCheckUserAnonimous)
    {
      $this->setFlow(self::$FlowResponsePage);
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