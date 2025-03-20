<?php
class NilaiMahasiswa{
public $nama;
public $matakuliah;
public $nilai_tugas;
public $nilai_uts;
public $nilai_uas;
public const PRESENTASE_UTS = 0.25;
public const PRESENTASE_UAS = 0.3;
public const PRESENTASE_TUGAS = 0.45;
public const KKM = 60;
/**
 * konstanta untu nilai kriteria ketuntasan minimal (KKM)
 */
public function getNilaiAkhir(){
    $nilai = self::PRESENTASE_UTS * $this->nilai_uts
     + self::PRESENTASE_UAS * $this->nilai_uas
     + self::PRESENTASE_TUGAS * $this->nilai_tugas;
     return $nilai;
}

public function kellulusan(){
if($this->getNilaiAkhir()>= self::KKM){
    return "Lulus";
}else{
    return "Tidak Lulus";
}
}
    

}

?>