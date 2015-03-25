<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

// use person.comp;
class User extends Person
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //User Attributes
  private $role2;
  private $number;
  private $completa;
  private $via;
  private $tipoDeVia;
  private $numero;
  private $email;
  private $longitude;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aFirstName, $aLastName, $aAddress, $aPhoneNumber, $aLatitude, $aLongitude, $aRole2, $aNumber, $aCompleta, $aEmail, $aLongitude)
  {
    parent::__construct($aFirstName, $aLastName, $aAddress, $aPhoneNumber, $aLatitude, $aLongitude);
    $this->role2 = $aRole2;
    $this->number = $aNumber;
    $this->completa = $aCompleta;
    $this->via = null;
    $this->tipoDeVia = null;
    $this->numero = null;
    $this->email = $aEmail;
    $this->longitude = $aLongitude;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setRole2($aRole2)
  {
    $wasSet = false;
    $this->role2 = $aRole2;
    $wasSet = true;
    return $wasSet;
  }

  public function setNumber($aNumber)
  {
    $wasSet = false;
    $this->number = $aNumber;
    $wasSet = true;
    return $wasSet;
  }

  public function setCompleta($aCompleta)
  {
    $wasSet = false;
    $this->completa = $aCompleta;
    $wasSet = true;
    return $wasSet;
  }

  public function setVia($aVia)
  {
    $wasSet = false;
    $this->via = $aVia;
    $wasSet = true;
    return $wasSet;
  }

  public function setTipoDeVia($aTipoDeVia)
  {
    $wasSet = false;
    $this->tipoDeVia = $aTipoDeVia;
    $wasSet = true;
    return $wasSet;
  }

  public function setNumero($aNumero)
  {
    $wasSet = false;
    $this->numero = $aNumero;
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

  public function setLongitude($aLongitude)
  {
    $wasSet = false;
    $this->longitude = $aLongitude;
    $wasSet = true;
    return $wasSet;
  }

  public function getRole2()
  {
    return $this->role2;
  }

  public function getNumber()
  {
    return $this->number;
  }

  public function getCompleta()
  {
    return $this->completa;
  }

  public function getVia()
  {
    return $this->via;
  }

  public function getTipoDeVia()
  {
    return $this->tipoDeVia;
  }

  public function getNumero()
  {
    return $this->numero;
  }

  public function getEmail()
  {
    return $this->email;
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
  {
    parent::delete();
  }

  //------------------------
  // DEVELOPER CODE - PROVIDED AS-IS
  //------------------------
  
  

}
?>