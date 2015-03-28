<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

class UserProperties
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //UserProperties Attributes
  private $address;
  private $latitude;
  private $longitude;
  private $email;

  //UserProperties Associations
  private $user;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aAddress = null, $aLatitude = null, $aLongitude = null, $aEmail = null, $aUser = null)
  {
    if (func_num_args() == 0) { return; }

    $this->address = $aAddress;
    $this->latitude = $aLatitude;
    $this->longitude = $aLongitude;
    $this->email = $aEmail;
    if ($aUser == null || $aUser->getProperties() != null)
    {
      throw new Exception("Unable to create UserProperties due to aUser");
    }
    $this->user = $aUser;
  }
  public static function newInstance($aAddress, $aLatitude, $aLongitude, $aEmail)
  {
    $thisInstance = new UserProperties();
    $thisInstance->address = $aAddress;
    $thisInstance->latitude = $aLatitude;
    $thisInstance->longitude = $aLongitude;
    $thisInstance->email = $aEmail;
    $thisInstance->user = new User($thisInstance);
    return $thisInstance;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setAddress($aAddress)
  {
    $wasSet = false;
    $this->address = $aAddress;
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

  public function setEmail($aEmail)
  {
    $wasSet = false;
    $this->email = $aEmail;
    $wasSet = true;
    return $wasSet;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function getLatitude()
  {
    return $this->latitude;
  }

  public function getLongitude()
  {
    return $this->longitude;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getUser()
  {
    return $this->user;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    $existingUser = $this->user;
    $this->user = null;
    if ($existingUser != null)
    {
      $existingUser->delete();
    }
  }

  //------------------------
  // DEVELOPER CODE - PROVIDED AS-IS
  //------------------------
  
  


}
?>