<?php

include "mahasiswa.php";

class Query{
   // private atribut 
private $nama = "";
private $NIM = "";
private $prodi = "";
private $fakultas= "";
private $gambar = "";
private $db = array();

function __construct($nama="",$NIM="",$prodi="",$fakultas="", $gambar="") {/* constructor */

$this->nama = $nama;
$this->NIM = $NIM;
$this->prodi = $prodi;
$this->fakultas = $fakultas;
$this->gambar = $gambar;
}

public function addData()// METHOD menambahkan data
{
    $data = new Mahasiswa();

    $data->setNama($this->nama);
    $data->setNIM($this->NIM);
    $data->setProdi($this->prodi);
    $data->setFakultas($this->fakultas);
    $data->setGambar($this->gambar);

    $this->db[count($this->db)] = $data;
}

public function deleteData($hapus)// METHOD menghapus data
{
    $ketemu = false;
    for ($i = 0; $i < count($this->db); $i++)
    {
        if ($this->db[$i]->getNIM() == $hapus)
        {
            $ketemu = true;
        }
        if ($ketemu == true & $i < count($this->db) - 1)
        {
            $this->db[$i] = $this->db[$i + 1];
        }
    }
    if ($ketemu == true)
    {
        array_pop($this->db);
    }
}

public function updateData($update)// METHOD mengupdate data
{
    for ($i = 0; $i < count($this->db); $i++)
    {
        if ($this->db[$i]->getNIM() == $update)
        {
            $this->db[$i]->setNama($this->nama);
            $this->db[$i]->setNim($this->NIM);
            $this->db[$i]->setProdi($this->prodi);
            $this->db[$i]->setFakultas($this->fakultas);
            $this->db[$i]->setGambar($this->gambar);
        }
    }
}

public function tampil()// METHOD menampilkan data dengan tabel
{
    echo "<table border='3'>";
    echo "<tr>
        <th> Nama </th>
        <th> NIM </th>
        <th> Program Studi </th>
        <th> Fakultas </th>
        <th> Foto </th>
        </tr>";
    for($x = 0; $x < sizeof($this->db); $x++){
        echo "<tr><td>";
        echo $this->db[$x]->getNama();
        echo "</td><td>";
        echo $this->db[$x]->getNIM();
        echo "</td><td>";
        echo $this->db[$x]->getProdi();
        echo "</td><td>";
        echo $this->db[$x]->getFakultas();
        echo "</td><td>";
        echo "<img src='img/" . $this->db[$x]->getGambar(). "'style='width: 200px'>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
 # Getter and Setter
function setnama ($nama="") {
    $this->nama = $nama;
     
    }
    function setNIM ($NIM="") {
        $this->NIM = $NIM;
    }
    function setprodi ($prodi="")  {
        $this->prodi= $prodi;
         
    }
        function setfakultas($fakultas="") {
            $this->fakultas= $fakultas;
        }
        function setGambar($gambar = ""){
            $this->gambar= $gambar;
        }
        function getnama () {
        return $this->nama;
        }
        function getNIM() {
        
        return $this->NIM;
        }
        function getprodi () {
            return $this->prodi;
            }
        function getfakultas() {
            
            return $this->fakultas;
            }
        function getGambar()
        {
            return $this->gambar;
        }
}

?>