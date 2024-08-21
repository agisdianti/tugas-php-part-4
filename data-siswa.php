<?php
// Membuat array asosiatif dengan nama siswa sebagai key dan nilai mereka sebagai value
$siswa = array(
    "Alice" => 85,
    "Bob" => 72,
    "Charlie" => 90,
    "David" => 65,
    "Eva" => 78
);

// Menggunakan foreach untuk mencetak nama, nilai, dan keterangan lulus atau tidak
foreach ($siswa as $nama => $nilai) {
    // Menentukan keterangan berdasarkan nilai
    $keterangan = ($nilai > 75) ? "Lulus" : "Tidak Lulus";

    // Mencetak nama, nilai, dan keterangan
    echo "Nama: $nama, Nilai: $nilai, Keterangan: $keterangan<br>";
}
