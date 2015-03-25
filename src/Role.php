<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

class Role
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Role Attributes
  private $role1;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aRole1)
  {
    $this->role1 = $aRole1;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setRole1($aRole1)
  {
    $wasSet = false;
    $this->role1 = $aRole1;
    $wasSet = true;
    return $wasSet;
  }

  public function getRole1()
  {
    return $this->role1;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}
?>