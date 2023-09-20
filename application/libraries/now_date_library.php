<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class now_date_library {

    public function __construct() {
        // Load library atau helper yang diperlukan di sini, jika ada.
        $this->ci =& get_instance();
    }

    public function getCurrentDateFormat1() {
        return date('Y-m-d');
    }

    public function getCurrentDateFormat2() {
        return date('d M y');
    }
}
