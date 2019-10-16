<?php 
include '../database.php';
$siswa = new Siswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>
<body>
    <?php 
        foreach($siswa->edit($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tgl_lahir = $_POST['tanggal_lahir'];
            $jns_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $umur = $_POST['umur'];
        }
    ?>
    <fieldset>
        <legend>Edit Data Siswa</legend>
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th><A>Alamat</A></th>
                    <td><textarea name="alamat" cols="40" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                <td>Tanggal Lahir</td>
                <td><input type="Date"></td>
                </tr>
                <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio"/>Laki-Laki
                <input type="radio"/>Perempuan</td>
                </tr>
                <tr>
                <td valign="top">Agama</td>
               <td>        
                <select name="agamaid" class="required" title="harus diisi">
                <option value="">- Pilih Agama -</option>
                <option value="islam">ISLAM</option></option>
                <option value="kristen">KRISTEN</option>
                <option value="budha">BUDHA</option>
                </td>
                </tr>
                <tr>
                <th>Umur</th>
                <td><input type="number" name="umur" required></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>