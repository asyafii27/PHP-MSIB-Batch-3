<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Datar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <?php
require_once 'lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'segitiga.php';

$linkaran = new lingkaran();
$persegipanjang = new persegiPanjang();
$segitiga = new segitiga();

$jenisBangun =[$linkaran, $persegipanjang, $segitiga];

$ar_judul = ['No','Nama Bidang', 'Keterangan', 'Luas bidang', 'Keliling bidang'];
?>
<h3 class="text-center my-5">Daftar Bangun Datar</h3>
    <table align="center" style="width: 60%" class="table">
        <thead>
            <tr>
                <?php 
                foreach ($ar_judul as $judul){
                ?>
                    <th><?= $judul ?> </th>
                <?php } ?>
            </tr>
        </thead>

        <tbody>
            <?php 
            $no =1;
            foreach ($jenisBangun  as $jb){
            ?>
            <tr >
                <td><?= $no ?></td>
                <td><?= 'Nama Bidang: '.$jb -> namaBidang() ?></td>
                <td><?= $jb -> sisi() ?></td>
                <td><?=  '<br>Keliling: '.$jb -> kelilingBidang() ?></td>
                <td><?= '<br>Luas: '.$jb -> luasBidang() ?></td>
                
                </tr>
            <?php $no++; }?>
        </tbody>
    </table>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>

</html>
