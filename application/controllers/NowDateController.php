<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NowDateController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('now_date_library'); // Memuat helper convert_rom_helper
    }

    public function index() {
        $data['tanggalSekarangFormat1'] = $this->now_date_library->getCurrentDateFormat1();
		$data['tanggalSekarangFormat2'] = $this->now_date_library->getCurrentDateFormat2();
        $this->load->view('Tanggal', $data);
    }
}
