<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class romConvert extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('convert_rom_helper'); // Memuat helper convert_rom_helper
    }

    public function index() {
		$inputanAngka1 = 10;
		$inputanAngka2 = 7;
		$konversiNumToRom1 = NumToRomawi($inputanAngka1);
		$konversiNumToRom2 = NumToRomawi($inputanAngka2);

		// output angka ke romawi
		$data['input1'] = $inputanAngka1;
		$data['input2'] = $inputanAngka2;
		$data['output1'] = $konversiNumToRom1;
		$data['output2'] = $konversiNumToRom2;
		
		$inputanRomawi1 = 'X';
		$inputanRomawi2 = 'VII';
		$konversiRomToNum1 = RomToNum($inputanRomawi1);
		$konversiRomToNum2 = RomToNum($inputanRomawi2);

		// output romawi ke angka
		$data['input3'] = $inputanRomawi1;
		$data['input4'] = $inputanRomawi2;
		$data['output3'] = $konversiRomToNum1;
		$data['output4'] = $konversiRomToNum2;
        
        $this->load->view('RomawiKonversi', $data);
    }
}
