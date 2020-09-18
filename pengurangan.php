<?php

$keluar=true;

while($keluar)
{
    // Banner Aplikasi

    echo "Aplikasi Perhitungan Pengurangan!!!\n";

    // Terima input dari user

    $angka_pertama=readline("Masukkan Angka Pertama \t :");
    $angka_kedua=readline("Masukkan Angka Kedua :");


    //Validasi Input

    if(!is_numeric($angka_pertama) || !is_numeric($angka_kedua)){
        echo "Maaf anda hanya bisa menginput angka !!!\n";
        continue;
    }

    // Tampilkan hasil perhitungan

    echo "hasil dari $angka_pertama - $angka_kedua adalah : ".($angka_pertama-$angka_kedua)."\n";

    // Cek logika user untuk mengulangi

    $ulangi=readline("Ulangi Lagi (yes/no) :");

    if($ulangi=="no" || $ulangi!=="yes")
    {
        $keluar=false;
    }
}

?>