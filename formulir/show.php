<?php
    include '../databasee.php';
    $siswa = new Biodata();
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Show Biodata</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        foreach ($siswa->show($_GET['id']) as $data) {  
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tgl_lahir = $data['tanggal_lahir'];
            $jk = $data['jeniskelamin'];
            $agama = $data['agama'];
        }      
    ?>
    <fieldset>
        <legend><b>SHOW BIODATA</b></legend><br>
            <table>
                <tr>
                    <th>Nama </th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Alamat </th>
                    <td><textarea name="alamat" cols="21" value="<?php echo $alamat; ?>" readonly></textarea></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir </th>
                    <td><input type="text" name="tanggal_lahir" value="<?php echo $tgl_lahir; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin </th>
                    <td><input type="text" name="jeniskelamin" value="<?php echo $jeniskelamin; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Agama </th>
                    <td><input type="text" name="agama" value="<?php echo $agama; ?>" readonly></td>
                </tr>
            </table><br>
    </fieldset>
</body>
</html>