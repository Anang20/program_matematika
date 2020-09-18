<?php

$out=true;
while($out)
{
    echo "\nRumus Luas Lingkaran\n";
    echo "\n=======================\n";
     
    $phi=pi();
    $jari=readline("Masukkan jari jarinya:");

    // validasi
    if(!is_numeric($jari))
    {
       echo "Input hanya angka yang diijinkan, dan tidak boleh menggunakan spasi ...!";
       continue;
   }

//    hasil

$hasil=$phi*($jari**2);

    echo "Hasil luas lingkarannya adalah : ".$hasil."\n";



    $ulangi=readline("Ulangi lagi (yes/no) :");

    

    if($ulangi=="no" || $ulangi!=="yes")
    {
        $out=false;
    
    }

}



?>