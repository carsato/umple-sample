<?php

include dirname(__file__).'/../src/Application.php';

Class GeneralTest extends PHPUnit_Framework_TestCase{
  public function testApplicationRuns(){
    $app = New Application();
    $app->run();
  }
}
