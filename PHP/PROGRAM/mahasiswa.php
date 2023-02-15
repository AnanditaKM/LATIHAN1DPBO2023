<?php

class mahasiswa{
// private atribut
private $nama = "";
private $NIM = "";
private $prodi = "";
private $fakultas= "";
private $gambar = "";
function __construct($nama="",$NIM="",$prodi="",$fakultas="", $gambar="") { // CONSTRUCTOR

$this->nama = $nama;
$this->NIM = $NIM;
$this->prodi = $prodi;
$this->fakultas = $fakultas;
$this->gambar = $gambar;
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
        $this->gambar = $gambar;
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
    function getGambar(){
        return $this->gambar;
    }
}
?>