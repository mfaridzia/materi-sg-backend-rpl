<?php
    // variabel
    $nama = "Fulana";
    $umur = 20;
    echo "Nama Saya $nama dan umur $umur";

    // konstanta
    define("ALAMAT", "Buah Batu Bandung");
    echo "<br/>";
    echo ALAMAT;

    echo "<br/>";

    // operator
    $nilai1 = 10;
    $nilai2 = 20;
    $hasilTambah  = $nilai1 + $nilai2;
    $hasilKurang  = $nilai1 - $nilai2;
    $hasilKali    = $nilai1 * $nilai2;
    $hasilBagi    = $nilai1 / $nilai2;
    echo "Hasil penjumlahan : $hasilTambah Hasil Pengurangan $hasilKurang Hasil Kali $hasilKali Hasil Bagi $hasilBagi";

    echo "<br/>";

    // Percabangan
    if($nilai1 >= $nilai2) {
        echo "Hore kamu lebih besar!!!";
    } else {
        echo "lebih kecil!";
    }

    echo "<br/>";

    // elseif
    $nilai = "A";

    if($nilai != "A") {
        echo "Bukan A";
    } else if($nilai == "A") {
        echo "Nilainya A";
    } else {
        echo "ngk ada yng bener!";
    }

    echo "<br/>";
    
    // switch case
    switch($nilai) {
        case "B":
        echo "Nilainya B";
            break;

        case "A":
        echo "Nilainya A";
            break;

        default:
        echo "Ngk ketemu!";
            break;
    }

    echo "<br/>";

    // looping for
    for($i = 1; $i <= 10; $i++) {
        echo "saya huruf ke ". $i;
    }

    echo "<br/><br/>";    

    // looping while
    $b = 1;
    while($b <= 10) {
        echo "saya juga huruf ke ". $b;
        $b++;
    }

    echo "<br/> <br/>";

    $x = 1; 

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);

    // array foreach
    $nama = ['budy', 'fulana', 'andi'];

    foreach($nama as $n) {
        echo $n, "<br/>";
    }

    for($nm = 0; $nm < count($nama); $nm++) {
        echo $nama[$nm];
    }

    // array assoaitif 
    $biodata = [
        'nama'   => 'Fulana bin andi',
        'negara' => 'indonesia',
        'umur'  => 20
    ];
    echo $biodata['nama'];

    echo "<br/>";

    // deklarasi function 
    function penjumalahan() {
        echo 1 + 2;
    }

    function sayHello($nama, $umur) {
        echo "nama saya adalah ". $nama . ' dan umur saya '. $umur;
    }

    function contohAja($nama) {
        return "nama saya adalah ". $nama;
    }

    echo contohAja("contoh aja lah");

    echo "<br/>";

    // pemanggilan function
    penjumalahan();

    echo "<br/>";

    sayHello("Fedy","20");
        
?>