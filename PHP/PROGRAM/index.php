
<?php

include "query.php";

$masukan = "";
$input = new Query();
$cek = true;

echo "<h1>Data awal<h1><br>";
$input->setNama("Do ");
$input->setNIM("2101114");
$input->setProdi("Ilmu Komputer");
$input->setFakultas("FPMIPA");
$input->setGambar("dks.jpg");
$input->addData();

$input->setNama("Park Chanyoel");
$input->setNIM("2108061");
$input->setProdi("Ilmu Komputer");
$input->setFakultas("FPMIPA");
$input->setGambar("ceye.jpg");
$input->addData();

$input->setNama("suho");
$input->setNIM("123456");
$input->setProdi("Ilmu Kutub Selatan");
$input->setFakultas("IKEA");
$input->setGambar("suho.jpg");
$input->addData();

$input->setNama("osh");
$input->setNIM("78654");
$input->setProdi("Ilmu menghilang");
$input->setFakultas("GHOSTING");
$input->setGambar("osh.jpg");
$input->addData();
$input->tampil();
echo "Data setelah dihapus <br>";
$input->deleteData("78654");

$input->tampil();
echo "Data setelah update<br>";
$input->setNama("Do Kyungsoo");
$input->setNIM("2101114");
$input->setProdi("Ilmu Komputer");
$input->setFakultas("FPMIPA");
$input->setGambar("dks.jpg");
$input->updateData("2101114");

$input->tampil();

?>