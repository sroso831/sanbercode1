<?php

class Hewan{
  //property
  public $nama        = "nama",
         $darah       = 50,
         $jumlahKaki  = "jumlahKaki",
         $keahlian    = "keahlian";

  //method
  public function atraksi(){
    return "$this->nama, $this->$keahlian";
  }
}

class Fight{
  //property
  public $attackPower  = "attackPower",
         $defencePower = "defencePower";

  //method
  public function serang(){
    return "$this->nama, $this->$keahlian";
  }
  public function diserang(){
    return "$this->nama, $this->$keahlian";
  }
}


class Elang{
  //inisiasi
  $hewan = new Hewan();
  $hewan->jumlahKaki    = 2;
  $hewan->keahlian      = "Terbang Tinggi";
  $hewan->attackPower   = 10 ;
  $hewan->defencePower  = 5 ;

  public function getInfoHewan(){
    return "$this->nama, $this->darah, $this->jumlahKaki, $this->$keahlian";
  }
}

class Harimau{
  //inisiasi
  $hewan = new Hewan();
  $hewan->jumlahKaki    = 4;
  $hewan->keahlian      = "Lari Cepat";
  $hewan->attackPower   = 7 ;
  $hewan->defencePower  = 8 ;

  public function getInfoHewan(){
    return "$this->nama, $this->darah, $this->jumlahKaki, $this->$keahlian";
  }
}

 ?>
