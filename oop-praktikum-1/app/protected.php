<?php 

class Mahasiswa {
    private string $nnim = "17021000";
    protected string $nama = "kiki";

    public function setNim(string $a) {
        $this->nim = $a;
    }
    class Nilai extends Mahasiswa {

    public function setNim(string $Nim) {
      return $this->nim;
    }
    public function getNama() {
        return $this->nama;
    }
}

$mhsw = new Nilai;


echo "<p>" . $mhsw->getNim() . "</p>";
echo "<p>" . $mhsw->getnama . "</p>";
}