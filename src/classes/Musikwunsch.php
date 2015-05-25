<?php

/**
 * A certain music wish from a guest listening to the radio
 *
 * @category   Musikparadies
 * @package    Wunschbox
 * @author     Anna Völkl <anna@voelkl.at>
 * @copyright  2015 Anna Völkl
 * @version    0.1
 * @since      Class available since Release 1.2.0
 */

class Musikwunsch {
    private $_musikwunsch;
    private $_hoerername;
    private $_ipAddress;

    public function getMusikwunsch() {
        return $this->_musikwunsch;
    }

    public function setMusikwunsch($musikwunsch) {
        $this->_musikwunsch = $musikwunsch;
        return $musikwunsch;
    }

    public function getHoerername() {
        return $this->_hoerername;
    }

    public function setHoerername($hoerername) {
        $this->_hoerername = $hoerername;
        return $this->_hoerername;
    }

    public function getIpAddress() {
        return $this->_ipAddress;
    }

    public function setIpAddress($ipAddress) {
        $this->_ipAddress = $ipAddress;
    }


}