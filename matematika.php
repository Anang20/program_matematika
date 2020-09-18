<?php

// Master App



// user pilih menu

$menu=["pertambahan","pengurangan","perkalian","pembagian","luas lingkaran"];

$berhenti=true;

while($berhenti)
{

    echo "Aplikasi Operasi Hitung Matematika\n";

    $nomor=1;
    foreach($menu as $data)
    {
        echo "$nomor.$data \n";
        $nomor++;
    }
    $pilih_menu=readline("pilih sistem operasi :");

    if($pilih_menu==1)
    {
        include "pertambahan.php";


    }elseif($pilih_menu==2)
    {
        include "pengurangan.php";


    }elseif($pilih_menu==3)
    {
        include "Perkalian.php";

    }elseif($pilih_menu==4)
    {
        include "pembagian.php";

    }elseif($pilih_menu==5)
    {
        include "luas_lingkaran.php";
    
    }else{
        
        // jika tidak memilih menu yang tersedia

        echo "Anda tidak memilih operasi yang tersedia,pastikan anda memilih operasi dengan benar !!!";
    break;
    }

}