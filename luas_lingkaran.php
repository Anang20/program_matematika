<?php

$out=true;
while($out)
{
    echo "\nRumus Luas Lingkaran\n";
    echo "\n=======================\n";
     
    $phi=22/7;
    $jari=readline("Masukkan jari jarinya:");

    // validasi
    if(!is_numeric($phi)|| !is_numeric($jari))
    {
       echo "Input hanya angka yang diijinkan, dan tidak boleh menggunakan spasi ...!";
       continue;
   }

//    hasil

    echo "Hasil luas lingkarannya adalah : ".($phi*$jari^2)."\n";



    $ulangi=readline("Ulangi lagi (yes/no) :");

    

    if($ulangi=="no" || $ulangi!=="yes")
    {
        $out=false;
    
    }

}



?>