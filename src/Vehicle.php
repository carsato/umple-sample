<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5146 modeling language!*/

class Vehicle
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Vehicle Associations
  private $wheel;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($allWheel)
  {
    $this->wheel = array();
    $didAddWheel = $this->setWheel($allWheel);
    if (!$didAddWheel)
    {
      throw new Exception("Unable to create Vehicle, must have 2 to 4 wheel");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function getWheel_index($index)
  {
    $aWheel = $this->wheel[$index];
    return $aWheel;
  }

  public function getWheel()
  {
    $newWheel = $this->wheel;
    return $newWheel;
  }

  public function numberOfWheel()
  {
    $number = count($this->wheel);
    return $number;
  }

  public function hasWheel()
  {
    $has = $this->numberOfWheel() > 0;
    return $has;
  }

  public function indexOfWheel($aWheel)
  {
    $wasFound = false;
    $index = 0;
    foreach($this->wheel as $wheel)
    {
      if ($wheel->equals($aWheel))
      {
        $wasFound = true;
        break;
      }
      $index += 1;
    }
    $index = $wasFound ? $index : -1;
    return $index;
  }

  public static function minimumNumberOfWheel()
  {
    return 2;
  }

  public static function maximumNumberOfWheel()
  {
    return 4;
  }

  public function addWheel($aWheel)
  {
    $wasAdded = false;
    if ($this->indexOfWheel($aWheel) !== -1) { return false; }
    if ($this->numberOfWheel() >= self::maximumNumberOfWheel())
    {
      return $wasAdded;
    }
    $existingVehicle = $aWheel->getVehicle();
    if ($existingVehicle != null && $existingVehicle->numberOfWheel() <= self::minimumNumberOfWheel())
    {
      return $wasAdded;
    }
    else if ($existingVehicle != null)
    {
      unset($existingVehicle->wheel[$existingVehicle->indexOfWheel($aWheel)]);
      $existingVehicle->wheel = array_values($existingVehicle->wheel);
    }
    $this->wheel[] = $aWheel;
    $this->setVehicle($aWheel,$this);
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeWheel($aWheel)
  {
    $wasRemoved = false;
    if ($this->indexOfWheel($aWheel) != -1 && $this->numberOfWheel() > self::minimumNumberOfWheel())
    {
      unset($this->wheel[$this->indexOfWheel($aWheel)]);
      $this->wheel = array_values($this->wheel);
      $this->setVehicle($aWheel,null);
      $wasRemoved = true;
    }
    return $wasRemoved;
  }

  public function setWheel($newWheel)
  {
    $wasSet = false;
    if (count($newWheel) < self::minimumNumberOfWheel() || count($newWheel) > self::maximumNumberOfWheel())
    {
      return $wasSet;
    }

    $checkNewWheel = array();
    $vehicleToNewWheel = array();
    foreach ($newWheel as $aWheel)
    {
      if (array_search($aWheel,$checkNewWheel) !== false)
      {
        return $wasSet;
      }
      else if ($aWheel->getVehicle() != null && $this !== $aWheel->getVehicle())
      {
        $existingVehicle = $aWheel->getVehicle();
        $existingSerializedVehicle = serialize($existingVehicle);
        if (!array_key_exists($existingSerializedVehicle, $vehicleToNewWheel))
        {
          $vehicleToNewWheel[$existingSerializedVehicle] = $existingVehicle->numberOfWheel();
        }
        $nextCount = $vehicleToNewWheel[$existingSerializedVehicle] - 1;
        if ($nextCount < self::minimumnumberOfWheel())
        {
          return $wasSet;
        }
        $vehicleToNewWheel[$existingSerializedVehicle] = $nextCount;
      }
      $checkNewWheel[] = $aWheel;
    }

    foreach ($this->wheel as $orphan) 
    {
      $wasFound = false;
      foreach ($checkNewWheel as $fosterCare)
      {
        if ($orphan == $fosterCare)
        {
          $wasFound = true;
          break;
        }
      }
      
      if (!$wasFound)
      {
        $this->setVehicle($orphan, null);
      }
    }

    $this->wheel = array();
    foreach ($newWheel as $aWheel)
    {
      if ($aWheel->getVehicle() != null)
      {
        unset($aWheel->getVehicle()->wheel[$aWheel->getVehicle()->indexOfWheel($aWheel)]);
        $aWheel->getVehicle()->wheel = array_values($aWheel->getVehicle()->wheel);
      }
      $this->setVehicle($aWheel, $this);
      $this->wheel[] = $aWheel;
    }
    $wasSet = true;
    return $wasSet;
  }

  private function setVehicle($aWheel, $aVehicle)
  {
    $aWheel->mentor = $aVehicle;
    //$prop = new ReflectionProperty($aWheel, 'vehicle');
    //$prop->setAccessible(true);
    //$prop->setValue($aWheel,$aVehicle);
    //$prop->setAccessible(false);
  }

  public function addWheelAt($aWheel, $index)
  {  
    $wasAdded = false;
    if($this->addWheel($aWheel))
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfWheel()) { $index = $this->numberOfWheel() - 1; }
      array_splice($this->wheel, $this->indexOfWheel($aWheel), 1);
      array_splice($this->wheel, $index, 0, array($aWheel));
      $wasAdded = true;
    }
    return $wasAdded;
  }

  public function addOrMoveWheelAt($aWheel, $index)
  {
    $wasAdded = false;
    if($this->indexOfWheel($aWheel) !== -1)
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfWheel()) { $index = $this->numberOfWheel() - 1; }
      array_splice($this->wheel, $this->indexOfWheel($aWheel), 1);
      array_splice($this->wheel, $index, 0, array($aWheel));
      $wasAdded = true;
    } 
    else 
    {
      $wasAdded = $this->addWheelAt($aWheel, $index);
    }
    return $wasAdded;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    while (count($this->wheel) > 0)
    {
      $aWheel = $this->wheel[count($this->wheel) - 1];
      $aWheel->delete();
      unset($this->wheel[$this->indexOfWheel($aWheel)]);
      $this->wheel = array_values($this->wheel);
    }
    
      
  }

}
?>