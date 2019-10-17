<?php
    include '../databasee.php';
    $siswa = new Biodata();
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edit Biodata</title>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        foreach ($siswa->edit($_GET['id']) as $data) {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tanggal_lahir = $data['tanggal_lahir'];
            $jeniskelamin = $data['jeniskelamin'];
            $agama = $data['agama'];
        }
    ?>
    <fieldset>
        <legend>Edit Biodata</legend>
        <form action="proses.php?aksi=update" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama </th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>"required></td>
                </tr>
                <tr>
                    <th>Alamat </th>
                    <td><textarea name="alamat" cols="40" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir </th>
                    <td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"required></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin </th>
                    <td><input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki</td><br>
                    <td><input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</td>
                </tr>
                <tr>
                    <th>Agama </th>
                    <td><select name="agama" class="form-control">
                    <option>PILIH</option>
                    <option>- Islam</option>
                    <option>- Kristen</option>
                    <option>- Hindu</option>
                    <option>- Budha</option>
                    <option>- Katolik</option>
                  </select></td>
                </tr>
                <tr>
                    <th><input type="submit" class="btn btn-danger" name="save" value="Simpan"</th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>