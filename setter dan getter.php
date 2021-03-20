<?php
 
class mahasiswa2 {
 
	// property
	public $nama;
    public $nim;
    public $tanggal_lahir;
    public $jenis_kelamin;
 
	// method set
	public function setmahasiswa2($nim,$nama,$tgl,$jk){
 
		$this->nama = $nama;
        $this->nim = $nim;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
 
	}
 
	// method get
	public function getmahasiswa2(){
 
		return $this->nama;
        return $this->nim;
        return $this->tanggal_lahir;
        return $this->jenis_kelamin;
	}
}
 
 
// object
$cetak = new mahasiswa2;
 
$cetakmahsiswa2->setmahasiswa2; 
echo '<b>' . $cetakmahsiswa2->getmahasiswa2() . '</b>';