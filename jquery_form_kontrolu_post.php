<?php 
    $kadi = $_POST['kadi'];
    $sifre = $_POST['sifre1'];
    $email = $_POST['email'];

    $bilgiler = array($kadi, $sifre, $email);

    return print_r($bilgiler);
?>
