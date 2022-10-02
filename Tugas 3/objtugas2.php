<?php
require 'tugas3.php';

//menciptakan sebuah objek
$pegawai1 = new Pegawai ('1122334451', 'Pegawai satu', 'Manager', 'Islam', 'Menikah');
$pegawai2 = new Pegawai ('1122334452', 'Pegawai dua', 'Asisten','Islam', 'Menikah');
$pegawai3 = new Pegawai ('1122334453', 'Pegawai tiga', 'Kepala bagian', 'Katholik', 'Belum menikah');
$pegawai4 = new Pegawai ('1122334454', 'Pegawai empat', 'Staff', 'Hindu', 'Belum menikah');
$pegawai5 = new Pegawai ('1122334455', 'Pegawai lima', 'Manager', 'Budha', 'Menikah');
$pegawai6 = new Pegawai ('1122334451', 'Pegawai enam', 'Asisten', 'Islam', 'Menikah');
$pegawai7 = new Pegawai ('1122334452', 'Pegawai tujuh', 'Kepala bagian','Islam', 'Menikah');
$pegawai8 = new Pegawai ('1122334453', 'Pegawai delapan', 'Kepala bagian', 'Islam', 'Belum menikah');
$pegawai9 = new Pegawai ('1122334454', 'Pegawai sembilan', 'Staff', 'Hindu', 'Belum menikah');
$pegawai10 = new Pegawai ('1122334455', 'Pegawai sepuluh', 'Staff', 'Budha', 'menikah');


echo '<h3 align="center">'.Pegawai::PT. '</h3>';
$pegawai1->mencetak();
$pegawai2->mencetak();
$pegawai3->mencetak();
$pegawai4->mencetak();
$pegawai5->mencetak();
$pegawai6->mencetak();
$pegawai7->mencetak();
$pegawai8->mencetak();
$pegawai9->mencetak();
$pegawai10->mencetak();


echo 'Jumlah Pegawai: '.Pegawai::$jml;
?>