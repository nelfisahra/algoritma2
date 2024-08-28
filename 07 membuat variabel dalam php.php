<?php

$nama = "nelfi";
$harga = 1000;
$nama_barang = "sepatu sekolah";
$harga = 200;
$stok = 40;
// membuat variabel baru
$stok = 40;
//1)  awal dari nama variabel tidak boleh menggunakan angka dan simbol, kecuali underscore
// contoh: benar
$namakepanjangan = "nelfi sahra berutu";
$namapendek = "nelfi";
//2)   nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggukan style camalcase
//contoh:
$nama_barang = "sepatu sekolah";
$namapembeli ="nela"; // menggunakan camelcase

//3) variabel harus diisi pembuatannya. bila kita tidak ingin mengisi, cukup isi dengan nilai kosong 
// contoh 
$nama_barang = "sepatu sekolah";
$namapembei = "fika"; 
$harga = 200;

//4) nama variabel bersifat case sensitif, artinya huruf besar dan huruf kecil dibedakan 
// contoh tiga variabel ini akan dianggap berbeda.
$belajar = "seni budaya";
$belajar = "pjok";
$belajar = "b indonesia";
// =================== cara mencetak ===================
echo
"<p>nama nelfi :$nama,".
"<p>harga:$harga,".
$nama, "<p>".
$harga, "<p>".
$harga, "<p>".
$stok, "<p>".
$nama,"<p>".
$namakepanjangan, "<p>".
$nama_barang, "<p>".
$namapembeli, "<p>".
$nama_barang, "<p>".
$namapembeli, "<p>".
$harga, "<p>".
$belajar, "<p>".
$belajar, "<p>".
$belajar, "<p>".