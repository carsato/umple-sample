<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

class PersonProperties
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //PersonProperties Attributes
  private $firstName;
  private $lastName;
  private $address;
  private $email;

  //PersonProperties Associations
  private $person;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aFirstName = null, $aLastName = null, $aAddress = null, $aEmail = null, $aPerson = null)
  {
    if (func_num_args() == 0) { return; }

    $this->firstName = $aFirstName;
    $this->lastName = $aLastName;
    $this->address = $aAddress;
    $this->email = $aEmail;
    if ($aPerson == null || $aPerson->getProperties() != null)
    {
      throw new Exception("Unable to create PersonProperties due to aPerson");
    }
    $this->person = $aPerson;
  }
  public static function newInstance($aFirstName, $aLastName, $aAddress, $aEmail)
  {
    $thisInstance = new PersonProperties();
    $thisInstance->firstName = $aFirstName;
    $thisInstance->lastName = $aLastName;
    $thisInstance->fullName = firstName + " " + lastName;
    $thisInstance->address = $aAddress;
    $thisInstance->email = $aEmail;
    $thisInstance->person = new Person($thisInstance);
    return $thisInstance;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setFirstName($aFirstName)
  {
    $wasSet = false;
    $this->firstName = $aFirstName;
    $wasSet = true;
    return $wasSet;
  }

  public function setLastName($aLastName)
  {
    $wasSet = false;
    $this->lastName = $aLastName;
    $wasSet = true;
    return $wasSet;
  }

  public function setAddress($aAddress)
  {
    $wasSet = false;
    $this->address = $aAddress;
    $wasSet = true;
    return $wasSet;
  }

  public function setEmail($aEmail)
  {
    $wasSet = false;
    $this->email = $aEmail;
    $wasSet = true;
    return $wasSet;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  public function getFullName()
  {
    return firstName + " " + lastName;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getPerson()
  {
    return $this->person;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    $existingPerson = $this->person;
    $this->person = null;
    if ($existingPerson != null)
    {
      $existingPerson->delete();
    }
  }

  //------------------------
  // DEVELOPER CODE - PROVIDED AS-IS
  //------------------------
  
  


}
?>