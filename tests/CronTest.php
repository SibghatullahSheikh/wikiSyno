<?php

require_once 'config/config.php';
require_once PHPU_PATH.'/Framework/TestCase.php';
require_once dirname(dirname(__FILE__)) . '/lib/cron.php';

class CronTest extends PHPUnit_Framework_TestCase
{

  var $Cron;

  function setUp()
  {
    parent::setUp();
    $this->Cron = new Cron();
  }

  /**
   *  @expectedRefreshOdeskSkills Return 1 file;
   */
  function testRefreshOdeskSkills()
  {
    $assert = FALSE;
    try {
      $this->Cron->refreshOdeskSkills(true, 2);
      $assert = TRUE;
    } catch (Exception $exc) {
    }
    $this->assertEquals(TRUE, $assert);
  }
  
}