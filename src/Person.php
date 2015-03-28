<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

// A class with a method that uses 'public'.
class Person
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Person Associations
  private $properties;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aProperties = null)
  {
    if (func_num_args() == 0) { return; }

    if ($aProperties == null || $aProperties->getPerson() != null)
    {
      throw new Exception("Unable to create Person due to aProperties");
    }
    $this->properties = $aProperties;
  }
  public static function newInstance($aFirstNameForProperties, $aLastNameForProperties, $aAddressForProperties, $aEmailForProperties)
  {
    $thisInstance = new Person();
    $thisInstance->properties = new PersonProperties($aFirstNameForProperties, $aLastNameForProperties, $aAddressForProperties, $aEmailForProperties, $thisInstance);
    return $thisInstance;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function getProperties()
  {
    return $this->properties;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    $existingProperties = $this->properties;
    $this->properties = null;
    if ($existingProperties != null)
    {
      $existingProperties->delete();
    }
  }

   public function displayName()
  {
    return("Hello, my name is " + getName());
  }

}
?>