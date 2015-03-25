<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

class Person
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Person Attributes
  private $firstName;
  private $lastName;
  private $address;
  private $phoneNumber;
  private $latitude;
  private $longitude;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aFirstName, $aLastName, $aAddress, $aPhoneNumber, $aLatitude, $aLongitude)
  {
    $this->firstName = $aFirstName;
    $this->lastName = $aLastName;
    $this->address = $aAddress;
    $this->phoneNumber = $aPhoneNumber;
    $this->latitude = $aLatitude;
    $this->longitude = $aLongitude;
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

  public function setPhoneNumber($aPhoneNumber)
  {
    $wasSet = false;
    $this->phoneNumber = $aPhoneNumber;
    $wasSet = true;
    return $wasSet;
  }

  public function setLatitude($aLatitude)
  {
    $wasSet = false;
    $this->latitude = $aLatitude;
    $wasSet = true;
    return $wasSet;
  }

  public function setLongitude($aLongitude)
  {
    $wasSet = false;
    $this->longitude = $aLongitude;
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

  public function getAddress()
  {
    return $this->address;
  }

  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }

  public function getFullName()
  {
    return firstName + " " + lastName;
  }

  public function getLatitude()
  {
    return $this->latitude;
  }

  public function getLongitude()
  {
    return $this->longitude;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

  //------------------------
  // DEVELOPER CODE - PROVIDED AS-IS
  //------------------------
  
  

}
?>