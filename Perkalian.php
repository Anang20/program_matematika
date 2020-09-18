<?php

$keluar=true;

while($keluar)
{
  echo "aplikasi perhitungan !! \n";

  // terima input dari user

  $angka_pertama=readline("massukan angka pertama : ");
  $angka_kedua=readline("massukan angka kedua : ");

if(is_numeric($angka_pertama)==false || is_numeric($angka_kedua)==false)

{
  echo "punten salahh harus nomor!!!!!! \n";
  continue;
}
 
  //  validasi input

 if(!(int)$angka_pertama || !(int)$angka_kedua) // jika $angka_pertama & $angka_kedua bukan angka
 {
   echo "maaf input hanya bisa angka !!\n";
   continue;
 }

  // tampilkan hasil perhitungan

  echo "Hasil dari $angka_pertama * $angka_kedua adalah : ".($angka_pertama*$angka_kedua)."\n";

  // cek logika user untuk mengulangi

  $ulangi=readline("ulangi lagi (yes/no) :");

  if($ulangi=="no" || $ulangi!=="yes")
  {
    $keluar=false;
  }
}

