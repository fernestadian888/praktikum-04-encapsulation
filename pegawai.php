<?php
class pegawai {
 protected $nip;
 protected $nama;
 protected $no_hp;
 protected $gaji_pokok;
 
 function __construct($nip,$nama,$nohp,$gp){
   $this->nip = $nip;
   $this->nama = $nama;
   $this->no_hp = $nohp;
   $this->gaji_pokok = $gp;
 }
 
 function tampilkanGaji(){
   echo date_diff(date_create($this->tanggal_lahir), date_create('today'))->y;
 }
 
}
?>
