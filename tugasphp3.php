<?php
//array satu dimensi atau array skalar
$m1 = ['nim' => 'D176511', 'nama' => 'Andi', 'nilai' => 87];
$m2 = ['nim' => 'D176512', 'nama' => 'Anda', 'nilai' => 45];
$m3 = ['nim' => 'D176513', 'nama' => 'Anda', 'nilai' => 89];
$m4 = ['nim' => 'D176514', 'nama' => 'Andu', 'nilai' => 75];
$m5 = ['nim' => 'D176515', 'nama' => 'Ande', 'nilai' => 69];
$m6 = ['nim' => 'D176516', 'nama' => 'Beno', 'nilai' => 79];
$m7 = ['nim' => 'D176517', 'nama' => 'Beni', 'nilai' => 89];
$m8 = ['nim' => 'D176518', 'nama' => 'Bena', 'nilai' => 98];
$m9 = ['nim' => 'D176519', 'nama' => 'Bene', 'nilai' => 48];
$m10 = ['nim' => 'D176520', 'nama' => 'Benu', 'nilai' => 66];

$ar_judul = ['No', 'NIM', 'Nama', 'Nilai','Keterangan',
 'Grade', 'Predikat'];

//Array asosiatif (> 1 dimensi)
$siswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

//Agregat functions in Array
$jumlah_siswa = count($siswa);
$lihat_nilai = array_column($siswa, 'nilai');
$total_nilai = array_sum($lihat_nilai);

$nilai_tertinggi = max($lihat_nilai);
$nilai_terendah = min($lihat_nilai);
$nilai_rata = $total_nilai / $jumlah_siswa;


//keterangan baguan bawahnya
$keterangan = [
    'Jumlah Siswa' => $jumlah_siswa,
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Nilai Rata-rata' => $nilai_rata,
];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar array asosiatif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="contaner">
        <h3 align="center" class="my-4">Daftar Siswa</h3>
        <table align="center" style="width: 80%;" class="table table-striped">
            <thead>
                <tr>
                    <?php
                foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>

            <tbody>
                <?php 
            $no = 1;
            foreach($siswa as $swa)
            {
                //Menentukan tingkat kelulusan menggunakan ternary
                $ket = ($swa['nilai'] >= 60) ? "Lulus" : "Gagal";

                //Menentukan grade siswa menggunakan if else multikondisi
                if ($swa['nilai'] >= 86 && $swa['nilai'] <= 100) {
                    $grade = 'A';
                }
                else if ($swa['nilai'] >= 76 && $swa['nilai'] <= 85) {
                    $grade = 'B';
                }
                else if ($swa['nilai'] >= 66 && $swa['nilai'] <= 75) {
                    $grade = 'C';
                }
                else if ($swa['nilai'] >= 56 && $swa['nilai'] <= 65) {
                    $grade = 'D';
                }
                else if ($swa['nilai'] <= 55) {
                    $grade = 'E';
                }

                //Menentukan switch else dari grade
                switch($grade)
                {
                    case 'A': $setgrade = 'Memuaskan';break;
                    case 'B': $setgrade = 'Bagus'; break;
                    case 'C': $setgrade = 'Cukup'; break;
                    case 'D': $setgrade = 'Kurang'; break;
                    case 'E': $setgrade = 'Buruk';
                }

                //Pencetaknya
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $swa['nim'] ?></td>
                    <td><?= $swa['nama'] ?></td>
                    <td><?= $swa['nilai'] ?></td>
                    <td><?= $ket ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $setgrade ?></td>
                <tr>
                    <?php $no++; }?>

            </tbody>

            <tfoot>
                <?php 
                foreach ($keterangan as $terang => $hasil){
                    ?>
                <tr>
                    <th colspan= "7" > <?= $terang ?> </th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>

        </table>

        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>
