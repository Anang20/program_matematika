<?php 

$keluar=true;

while($keluar)
{
    // terima input dari user

    $angka_pertama=readline("Masukkan Angka Pertama :");
    $angka_kedua=readline("Masukkan Angka Kedua :");

    // validasi input angka 

    if(!is_numeric($angka_pertama) || !is_numeric($angka_kedua)){
        echo "Maaf input hanya bisa angka !! \n";
    continue;
    }

     // Tampilkan hasil perhitungan

     echo "hasil dari $angka_pertama : $angka_kedua adalah :".($angka_pertama/$angka_kedua)."\n";

     // cek logika user untuk mengulangi

    $ulangi=readline("Ulangi Lagi (yes/no) :");

    if($ulangi=="no" || $ulangi!=="yes"){
       $keluar=false;
    }
}