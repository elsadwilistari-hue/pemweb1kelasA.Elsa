<?php
$nilai = 79;

if ($nilai >= 90 && $nilai <= 100) {
    $grade = "A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    $grade = "B";
} elseif ($nilai >= 70 && $nilai <= 79) {
    $grade = "C";
} elseif ($nilai >= 60 && $nilai <= 69) {
    $grade = "D";
} elseif ($nilai >= 0 && $nilai < 60) {
    $grade = "E";
} else {
    $grade = "Tidak Valid";
}

switch ($grade) {
    case "A":
    case "B":
        $keterangan = "Sangat Memuaskan, Anda Lulus!";
        break;
    case "C":
        $keterangan = "Cukup Memuaskan, Anda Lulus dengan Syarat.";
        break;
    case "D":
    case "E":
        $keterangan = "Mohon Maaf, Anda Tidak Lulus.";
        break;
    default:
        $keterangan = "Grade Tidak Dikenali.";
        break;
}



$prioritas_bimbingan = ($grade == "D" || $grade == "E") 
                        ? "Wajib Bimbingan" 
                        : "Tidak Wajib Bimbingan";

echo "Nilai Anda adalah $nilai, Grade: $grade";
echo "Keterangan Kelulusan: $keterangan";
echo "Status Bimbingan: $prioritas_bimbingan";
?>
