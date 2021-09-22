<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Latihan1 extends BaseController
{
    public function index()
    {
        echo 'nama saya ferdy, saya berumur 19 tahun, saya tinggal di jakarta, saya anak kedua dari 4 bersaudara';
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        echo 'hasil penjumlahan dari' . $n1 . " + " . $n2 . " = "  . $hasil;
    }
}
