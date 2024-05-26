<?php

// Fungsi untuk mencari bilangan ganjil antara dua angka
function bilanganGanjil($angka1, $angka2) {
  
  $bilanganGanjil = [];

  // Loop dari angka1 hingga angka2
  for ($i = $angka1; $i <= $angka2; $i++) {
    // Periksa apakah i ganjil
    if ($i % 2 != 0) {
      // Tambahkan i ke array bilanganGanjil
      $bilanganGanjil[] = $i;
    }
  }

  // Kembalikan array bilanganGanjil
  return $bilanganGanjil;
}

// Definisikan nilai angka1 dan angka2
$angka1 = 2;
$angka2 = 5;

// Panggil fungsi bilanganGanjil dan simpan hasilnya dalam variabel $bilanganGanjil
$bilanganGanjil = bilanganGanjil($angka1, $angka2);

// Cetak bilangan ganjil antara angka1 dan angka2
echo "Bilangan ganjil antara $angka1 dan $angka2: " . implode(", ", $bilanganGanjil);
 ?>