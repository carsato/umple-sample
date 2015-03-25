<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

class Wheel
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Wheel Associations
  public $vehicle; //until PHP 5.3 (setAccessible)

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function getVehicle()
  {
    return $this->vehicle;
  }

  public function hasVehicle()
  {
    $has = $this->vehicle != null;
    return $has;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    if ($this->vehicle != null)
    {
      if ($this->vehicle->numberOfWheel() <= 2)
      {
        $this->vehicle->delete();
	$this->vehicle = null;
      }
      else
      {
        $this->vehicle = null;
	$this->vehicle->removeWheel($this);
      }
    }
  }

}
?>