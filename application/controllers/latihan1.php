<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "<b><h2>Selamat datang... Selamat belajar web programming</b></h2>";
    }

    public function penjumlahan($n1, $n2)
    {
        /*$this->load->model('ModelLatihan1');
        $hasil = $this->ModelLatihan1->jumlah($n1, $n2);
        echo "Hasil Penjumlahan Dari " . $n1 . " + " . $n2 . " = " . $hasil;
        */

        $this->load->model('ModelLatihan1');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->ModelLatihan1->jumlah($n1, $n2);

        $this->load->view('view-latihan1', $data);
    }
}
