<?php

trait fakultas {

    // Boleh juga ada property

    public function setFakultas(string $a) {

    }
}

trait prodi {
    // Boleh juga adaa property 

    public function setProdi(string $b) {
        return $b;
    }
}
class Mahasiswa {

    use Fakultas, Prodi;
    public string $nama;

    public function setNama(string $c) {

        $this->nama = $c;

    }
}

$mhsw = new Mahasiswa();
$mhsw->setNama("Faiza");
echo $mhsw->setFakultas("FST") . " "
. $mhsw->setProdi("Sistem Informasi") . " "
. $mhsw->nama;