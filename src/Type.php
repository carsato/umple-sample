<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

class Type
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Type Attributes
  private $types;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aTypes)
  {
    $this->types = $aTypes;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setTypes($aTypes)
  {
    $wasSet = false;
    $this->types = $aTypes;
    $wasSet = true;
    return $wasSet;
  }

  public function getTypes()
  {
    return $this->types;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}
?>