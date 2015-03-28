<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

// use person.comp;
class User
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //User Associations
  private $properties;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aProperties = null)
  {
    if (func_num_args() == 0) { return; }

    if ($aProperties == null || $aProperties->getUser() != null)
    {
      throw new Exception("Unable to create User due to aProperties");
    }
    $this->properties = $aProperties;
  }
  public static function newInstance($aAddressForProperties, $aLatitudeForProperties, $aLongitudeForProperties, $aEmailForProperties)
  {
    $thisInstance = new User();
    $thisInstance->properties = new UserProperties($aAddressForProperties, $aLatitudeForProperties, $aLongitudeForProperties, $aEmailForProperties, $thisInstance);
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

}
?>