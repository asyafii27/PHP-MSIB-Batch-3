<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Memproses Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <h3 align="center" class="mt-4">Form Input Pegawai</h3>
    <div class="container px-5 my-5" style="boder: 2px solid black">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label" for="namaPegawai">Nama Pegawai</label>
                <input class="form-control" name="namaPegawai" type="text" placeholder="Nama Pegawai"
                    data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="agama">Agama</label>
                <select class="form-select" name="agama" aria-label="Agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindhu">Hindhu</option>
                    <option value="Budha">Budha</option>
                    <option value="Khong Hou Chou">Khong Hou Chou</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Jabatan</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="manager" type="radio" name="jabatan"
                        data-sb-validations="required" />
                    <label class="form-check-label" for="manager">Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="asisten" type="radio" name="jabatan"
                        data-sb-validations="required" />
                    <label class="form-check-label" for="asisten">Asisten</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="kepalaBagian" type="radio" name="jabatan"
                        data-sb-validations="required" />
                    <label class="form-check-label" for="kepalaBagian">Kepala Bagian</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="staff" type="radio" name="jabatan"
                        data-sb-validations="required" />
                    <label class="form-check-label" for="staff">Staff</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="jabatan:required">One option is required.</div>
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Status</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="Menikah" type="radio" name="status"
                        data-sb-validations="required" />
                    <label class="form-check-label" for="menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="Belum Menikah" type="radio" name="status"
                        data-sb-validations="required" />
                    <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="status:required">One option is required.</div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="jumlahAnak">Jumlah Anak</label>
                <input class="form-control" name="jumlahAnak" type="text" placeholder="Jumlah Anak"
                    data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary btn-lg" name="simpan" type="submit">Simpan</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <?php 
        //tangkap request
        $nama = $_POST['namaPegawai'];
        $agama = $_POST['agama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $jumlahAnak = $_POST['jumlahAnak'];
        
        $simpan = $_POST['simpan'];

        //tentukan gapok berdaasarkan jabatan
        /*
        if($jabatan == "manager") $gapok = 20000000;
        else if ($jabatan == "asisten") $gapok = 15000000;
        else if ($jabatan == "kepalaBagian") $gapok = 10000000;
        else if ($jabatan == "staff") $gapok = 4000000;
        else $gapok = 'None';
        */

        //Tentuan gapok berdasarkan jabatan
        switch($jabatan)
        {
            case 'manager': $gapok = 20000000; break;
            case 'asisten': $gapok = 15000000; break;
            case 'kepalaBagian': $gapok = 10000000; break;
            case 'staff': $gapok = 4000000;
        }

        //Tentukan Tunjangan jabatan berdasarkan gaji pokok
        switch($jabatan)
        {
            case 'manager': $tunjab = 20000000 * (1/5); break;
            case 'asisten': $tunjab = 15000000 * (1/5); break;
            case 'kepalaBagian': $tunjab = 10000000 * (1/5); break;
            case 'staff': $tunjab = 4000000 * (1/5);
        }

        //Tentukan Tunjangan keluarga berdasarkan menikah dan anak
        if($status == "Menikah")
        {
            if($jumlahAnak >= 1 && $jumlahAnak <=2)
            {
                $tunkel = (5/100) * $gapok;
            }
        }
        else if ($status == "Menikah") 
        {
            if($jumlahAnak >= 3 && $jumlahAnak <=5)
            {
                $tunkel = (10/100) * $gapok;
            }
           
        }
        else if ($status == "Menikah") 
        {
            if($jumlahAnak >= 5)
            {
                $tunkel = (15/100) * $gapok;
            }
            
        }
        else $tunkel = '';

        //tentukan gakot
        $gakot = $gapok + $tunjab;

        //tentukan zakat profesi
        $zakat = ($agama == 'Islam' && $gakot >= 6000000)? (25/1000) * $gakot: 0;

        //Tentukan take a home
        $takeahome = $gakot - $zakat;
        
        if(isset($simpan)){ ?>
    <div class="kotak mx-6 my-6">
        <table class="table" width="80%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Status</th>
                    <th scope="col">Jumlah Anak</th>
                    <th scope="col">Tunjangan jabatan</th>
                    <th scope="col">Gaji Kotor</th>
                    <th scope="col">Zakat</th>
                    <th scope="col">Take A Home</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><?= $nama ?></td>
                    <td><?= $agama ?></td>
                    <td><?= $jabatan ?></td>
                    <td><?= number_format($gapok, 2, ',', '.'); ?></td>
                    <td><?= $status ?></td>
                    <td><?= $jumlahAnak ?></td>
                    <td><?= number_format($tunjab, 2, ',', '.'); ?></td>
                    <td><?= number_format($gakot, 2, ',', '.'); ?></td>
                    <td><?= number_format($zakat, 2, ',', '.'); ?></td>
                    <td><?= number_format($takeahome, 2, ',', '.'); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php } ?>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
