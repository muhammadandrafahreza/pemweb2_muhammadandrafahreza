<?php
require_once './class_account.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::withdraw($uangTranfer, false);
        $destination->deposit($uangTranfer, false);

        echo "Transfer senilai " .  number_format($uangTranfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}

$ahmad = new AccountBank('C001', 'Ahmad', 6000000);
$budi = new AccountBank('C002', 'Budi', 5350000);
$kurniawan = new AccountBank('C003', 'Kurniawan', 2500000);

$ahmad->deposit(1000000);
$ahmad->cetak();

$ahmad->doTransfer($budi, 500000);
$ahmad->cetak();

$ahmad->doTransfer($kurniawan, 1500000);
$budi->withdraw(2500000);

$ahmad->cetak();
$budi->cetak();
$kurniawan->cetak();

