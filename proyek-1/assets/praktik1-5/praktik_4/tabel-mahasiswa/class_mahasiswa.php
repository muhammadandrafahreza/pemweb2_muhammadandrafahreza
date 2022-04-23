<?php

class Mahasiswa
{
    public $nama;
    public $nim;
    public $thn_angkatan;
    public $prodi;
    public $ipk;

    public function __construct($nim, $nama, $thn_angkatan, $prodi, $ipk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->thn_angkatan = $thn_angkatan;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    public function predikat_ipk()
    {
        if ($this->ipk < 2.0) {
            return 'Cukup';
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) {
            return 'Baik';
        } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75) {
            return 'Memuaskan';
        } elseif ($this->ipk >= 3.75 && $this->ipk <= 4.0) {
            return 'Cum Laude';
        } else {
            return 'Bilangan yang anda masukkan salah';
        }
    }
}

$mhs1 = [
    'nim' => '02011',
    'nama' => 'Faiz Fikri',
    'prodi' => 'TI',
    'thnAngkatan' => 2012,
    'ipk' => 3.8,
];
$mhs2 = [
    'nim' => '02012',
    'nama' => 'Alissa Khairunnisa',
    'prodi' => 'TI',
    'thnAngkatan' => 2012,
    'ipk' => 3.9,
];
$mhs3 = [
    'nim' => '01011',
    'nama' => 'Rosalie Naurah',
    'prodi' => 'SI',
    'thnAngkatan' => 2010,
    'ipk' => 3.46,
];
$mhs4 = [
    'nim' => '01012',
    'nama' => 'Defghi Muhammad',
    'prodi' => 'SI',
    'thnAngkatan' => 2010,
    'ipk' => 3.2,
];