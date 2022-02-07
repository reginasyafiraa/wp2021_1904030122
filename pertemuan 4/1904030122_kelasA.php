<!DOCTYPE html>
<html>
<head>
	 <title>pertemuan 4</title>
</head>
<body>
	<h1>membuat array</h1>
	<?php
	$values = array(1,2,3,4,5.60);
	var_dump($values);
	echo"<br>";
	echo($values[4]);

	echo"<br>";

	$prodi = ["T.Informatika","T.Elektro","T.Kimia","T.sipil"];
	var_dump($prodi);
	echo"<br>";
	echo "$prodi[3]";

	echo"<br>";
	// mengganti isi value
	$prodi[0] = "T.Pertambangan";
	var_dump($prodi);
	echo"<br>";

	// menambahkan value
	$prodi[] = "T.Mesin";
	var_dump($prodi);
	echo"<br>";

	// menghapus salah satu value
	unset($prodi[0]);
	var_dump($prodi);

	// menghitung total array
	echo"<br>";
	var_dump(count($prodi));

	?>
	<hr>
	  <h1>map dengan array</h1>
	<?php

	$regina = array(
		            "id" => "gina", 
		            "nama" => "Regina Syafira",
		            "umur" => 22
		            );
var_dump($regina);
echo"<br>";
$rana =[
            "id" => "bolang",
            "nama" => "Ade Rana Direksa",
            "umur" => 19,
            "alamat" => [
                 "kota" => "DKI JAKARTA",
                 "kab" => "KEPULAUAN SERIBU SELATAN"
              ]
           ];
var_dump($rana);
// echo"<br>";
// echo ("nama id :" . $rana["id"]);
// echo"<br>";
// echo("nama lengkap :" . $rana["nama"]);
// echo"<br>";
// echo("umur : " . $rana["umur"]);


?>

<hr>
<h1>Operator Matematika</h1>

<?php
$tambah = 50 + 20;
$kurang = 200 - 10;
$kali = 8*8;
$bagi = 60 / 10;
$modular = 100 % 3;
$pangkat = 9**2;
echo " tambah : " . $tambah . "<br>";
echo " kurang : " . $kurang . "<br>";
echo " kali : " . $kali . "<br>";
echo " bagi : " . $bagi . "<br>";
echo " modular : " . $modular . "<br>";
echo " pangkat : " . $pangkat. "<br>";

?>

<hr>
<h2>increment</h2>
<?php  
$a = 60;
$a++;
// $a = $a + 1;
$a++;
$a--;

echo($a);

?>	

<hr>
<h1>daftar nama keluarga</h1>
<?php
    $nama1= "regina syafira";
    $nama2= "ahmad fauzi";
    $nama3= "ade rana direksa";
    $nama4= "siti sulaeni";
    $nama5= "milan ramadhan";

?>

<?php echo "$nama1";?><br>
<?php echo "$nama2";?><br>
<?php echo "$nama3";?><br>
<?php echo "$nama4";?><br>
<?php echo "$nama5";?><br>


<?php

// membuat array kosong
$array1 = array("elemen","elemen");//cara dibawah php 5
$array2 = ["elemen","elemen"];//diatas php 5

//membuat array sekaligus mengisinya
$minuman = array("air putih", "pop ice", "jus apel");
$makanan =array("ayam", "ikan", "nasi uduk");

?>


<?php
var_dump($minuman);
 ?>

 <?php
 print_r($makanan);
 ?>

<?php
echo "$makanan[0]";
?>


<?php
// membuat array mhs
   $nama= ["regina syafira","ahmad fauzi","ade rana direksa","siti sulaeni","milan ramadhan"];
   ?>
   <?php
   // menampilkan isi array perulangan for
   for($i=0; $i < count($nama); $i++){
   	  echo $nama[$i]."<br>";
   	}

    ?>

    <?php
    //membuat array kumpulan buku
     $books= ["belajar web programing","desain grafis dengan vektor","kurus 2 jam HTML"];

     // menampilkan isi array dengan perulangan foreach
     foreach($books as $book){
     	echo $book."<br>";
     }

        ?>

     }

     <?php
     // membuat array
     $hobi = [
     	"melukis",
     	"push up",
     	"menulis"
        ];

        // mengganti isi pada indeks ke-2
        $hobi[2] = "menggambar";
        // menambahkan isi pada indeks ke-3
        $hobi [3] = "olahraga";
        // menambahkan isi pada indeks terakhir
        $hobi[] = "kaligrafi";

        // cetak array dengan perulangan
        foreach ($hobi as $hobiku){
        	echo $hobiku."<br>";
        }


        ?>

    <?php
    // membuat array asosiatif
    $mhs = [
           "nim" => "1904030122",
           "nama" => "regina syafira",
           "fakultas" => "Teknik",
           "jurusan" => "Teknik Informatika",
    ];
        
// mencetak isi array assosiatif
echo "<h2>data mahasiswa</h2>";
echo "<p>nim: ".$mhs["nim"]."</br>";
echo "<p>nama: ".$mhs["nama"]."</br>";
echo "<p>fakultas: ".$mhs["fakultas"]."</br>";
echo "<p>jurusan: ".$mhs["jurusan"]."</br>";

?>


<?php
// ini adalah array dua dimensi
$matrik = [ 
     [2,3,4],
     [7,5,0],
     [4,3,8],
 ];

 // cara mengakses isinya
 echo $matrik[1][0]; //-> output: 7

?>

<?php

// membuat array 2 dimensi yang berisi array asosiatif
$gurus = [
   [ 
       "nama" => "ibu krisnandari",
       "mapel" => "seni budaya"
    ],
   [
       "nama" => "ibu kristanti",
       "mapel" => "matematika"
   ],
   [ 
       "nama" => "pak yudi",
       "mapel" => "bahasa indonesia"
   ]
];

// menampilkan array
foreach($gurus as $guru){
	echo "<h2>".$guru["nama"]."</h2>";
	echo "<p>".$guru["mapel"]."<p>";
	echo "<hr>";
}
 ?>

</body>
</html>