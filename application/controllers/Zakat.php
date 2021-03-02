<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Zakat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('zakat_model');
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {

        $usdPerGram = $this->zakat_model->getGoldPrice();
        $IDR = $this->zakat_model->usdToIdr();

        $idrPerGram = $usdPerGram * $IDR;
        $nishab = $idrPerGram * 85;

        $data = [
            'harga' => intval($idrPerGram),
            'nishab' => intval($nishab),
            'nishabPerBulan' => intval($nishab / 12)
        ];

        $this->load->view('zakat/index', $data);
    }
}
