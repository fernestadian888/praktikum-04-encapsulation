<?php
class Mahasiswa {
 protected $nim;
 protected $nama;
 protected $tanggal_lahir;
 protected $jenis_kelamin;
 
 function __construct($nim,$nama,$tgl,$jk){
   $this->nim = $nim;
   $this->nama = $nama;
   $this->tanggal_lahir = $tgl;
   $this->jenis_kelamin = $jk;
 }
 
 function tampilkanAngkatan(){
  
 }
 
 function tampilkanUmur(){
   echo date_diff(date_create($this->tanggal_lahir), date_create('today'))->y;
 }
 
 function tampilkanNama($nama){
   echo $this->nama;
 }
 
}
?>
