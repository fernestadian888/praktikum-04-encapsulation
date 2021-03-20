<?php
class Mahasiswa {
 protected $nim;
 protected $nama;
 protected $tanggal_lahir;
 protected $jenis_kelamin;
 
 function __construct($nidn,$ja,$mg,$mn){
   $this->nidn = $nidn;
   $this->jabatan_akademis = $ja;
   $this->mengajar = $mg;
   $this->meneliti = $mn;
 }
 
}
?>
