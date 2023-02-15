<?php

include "mahasiswa.php";

class Query{
    
private $nama = "";
private $NIM = "";
private $prodi = "";
private $fakultas= "";
private $gambar = "";
private $db = array();

function __construct($nama="",$NIM="",$prodi="",$fakultas="", $gambar="") {

$this->nama = $nama;
$this->NIM = $NIM;
$this->prodi = $prodi;
$this->fakultas = $fakultas;
$this->gambar = $gambar;
}

public function addData()
{
    $data = new Mahasiswa();

    $data->setNama($this->nama);
    $data->setNIM($this->NIM);
    $data->setProdi($this->prodi);
    $data->setFakultas($this->fakultas);
    $data->setGambar($this->gambar);

    $this->db[count($this->db)] = $data;
}

public function deleteData($hapus)
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

public function updateData($update)
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

public function show()
{
    for ($i = 0; $i < count($this->db); $i++)
    {
        echo "<img src = 'img/". $this->db[$i]->getGambar() . "' style = 'width:100px;height:100px'><br>";
        echo $this->db[$i]->getNama() . "<br>";
        echo $this->db[$i]->getNIM() . "<br>";
        echo $this->db[$i]->getProdi() . "<br>";
        echo $this->db[$i]->getFakultas() . "<br><br>";
    }
    echo "<hr>";
}

public function tampil()
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