<?php
/**
 * FUNGSI UNTUK MENGHITUNG NILAI AKHIR
 * @param float $nilai_uts Nilai UTS
 * @param float $nilai_uas Nilai UAS
 * @param float $nilai_tugas Nilai Tugas
 * @return float Nilai Akhir
 */
function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas){
    define("UTS",0.25);
    define("UAS",0.30);
    define("TUGAS",0.45);
    return ($nilai_uts * UTS) + ($nilai_uas * UAS) + ($nilai_tugas * TUGAS);
} 

/**
 * Fungsi untuk menentukkan kelulusan
 * @param float $nilai_akhir Nilai Akhir
 * @param float $batas_nilai Batas Nilai Kelulusan default 6o
 * @return string LULUS ATAU TIDAK LULUS
 */

function kelulusan($nilai_akhir, $batas_nilai =60){}
    if ($nilai_akhir >= $batas_nilai) {
        return "Lulus";
        } else {
            return "Tidak Lulus";
}