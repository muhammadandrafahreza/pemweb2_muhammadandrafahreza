<?php
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('MahasiswaModel', 'mhs1');
        $mhs1 = new MahasiswaModel();
        $mhs1->nim = "010001";
        $mhs1->nama = "Faiz Fikri";
        $mhs1->gender = "L";
        $mhs1->ipk = 3.85;

        $this->load->model('MahasiswaModel', 'mhs2');
        $mhs2 = new MahasiswaModel();
        $mhs2->nim = "020001";
        $mhs2->nama = "Pandan Wangi";
        $mhs2->gender = "P";
        $mhs2->ipk = 2.8;

        $this->load->model('MahasiswaModel', 'mhs3');
        $mhs3 = new MahasiswaModel();
        $mhs3->nim = "090001";
        $mhs3->nama = "Budi";
        $mhs3->gender = "L";
        $mhs3->ipk = 2.8;

        $data = array(
            'title' => "Mahasiswa",
            'list_mhs' => [$mhs1, $mhs2, $mhs3]
        );


        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('mahasiswa/index');
        $this->load->view('layout/footer');
    }
}