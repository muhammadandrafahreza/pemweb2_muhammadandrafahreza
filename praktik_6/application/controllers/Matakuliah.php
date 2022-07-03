<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model("MataKuliahModel", 'matkul1');
        $matkul1 = new MataKuliahModel();
        $matkul1->nama = "Pemrograman Web";
        $matkul1->sks = 4;
        $matkul1->kode = "2003";

        $this->load->model("MataKuliahModel", 'matkul2');
        $matkul2 = new MataKuliahModel();
        $matkul2->nama = "Statistika";
        $matkul2->sks = 4;
        $matkul2->kode = "1007";

        $this->load->model("MataKuliahModel", 'matkul3');
        $matkul3 = new MataKuliahModel();
        $matkul3->nama = "UI/UX";
        $matkul3->sks = 4;
        $matkul3->kode = "3001";

        $data = array(
            'title' => "Matakuliah",
            'list_matkul' => [$matkul1, $matkul2, $matkul3],
        );
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('matakuliah/index');
        $this->load->view('layout/footer');
    }
}