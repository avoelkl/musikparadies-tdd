<?php

require_once dirname(__FILE__) . '/../src/classes/Musikwunsch.php';
require_once dirname(__FILE__) . '/../src/classes/Db.php';

class MusikwunschTest extends PHPUnit_Framework_TestCase {

    private $_musikwunsch;

    function setUp() {
        $this->_musikwunsch = new Musikwunsch();
    }

    function testCanCreateMusikwunsch() {
        $this->assertEquals('Musikwunsch', get_class($this->_musikwunsch));
    }

    function testItReturnsEmptyMusikwunsch() {
        $this->assertEquals('', $this->_musikwunsch->getMusikwunsch());
    }

    function testItReturnsMusikwunsch() {
        $this->_musikwunsch->setMusikwunsch('Das Rote Pferd');
        $this->assertEquals('Das Rote Pferd', $this->_musikwunsch->getMusikwunsch());
    }

    function testItReturnsEmptyHoerername() {
        $this->assertEquals('', $this->_musikwunsch->getHoerername());
    }

    function testItReturnsHoerername() {
        $this->_musikwunsch->setHoerername('Anna Völkl');
        $this->assertEquals('Anna Völkl', $this->_musikwunsch->getHoerername());
    }

    function testItReturnsNotEmptyHoererIPAddress() {
        $this->_musikwunsch->setIpAddress("123.456.789.012");
        $ipAddress = $this->_musikwunsch->getIpAddress();
        $this->assertEquals(15,strlen($ipAddress));
    }

    function testDatabaseConnectionSuccessful() {
        $db = new Db();
        $this->assertNotEquals(false,$db->connect());
    }
}