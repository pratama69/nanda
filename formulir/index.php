<?php
    include '../databasee.php';
    $db = new Databasee();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <title>Index CRUD BOOTSTRAP</title>
</head>
<body>
<br><br>
  <center><a href="create.php">INPUT BIODATA</a></center><br><br>
    <table class="table table-striped">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>TANGGAL LAHIR</th>
            <th>JENIS KELAMIN</th>
            <th>AGAMA</th>
            <th>UMUR</th>
            <th align="center" colspan="3">AKSI</th>
        </tr>
        <?php
            $siswa = new Biodata();
            $no = 1;
            foreach ($siswa->index() as $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tanggal_lahir']; ?></td>
            <td><?php echo $data['jeniskelamin']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td align="center"><?php echo $data['umur']; ?></td>
            <td><a class="btn btn-primary" href="show.php?id=<?php echo $data['id']; ?>&aksi=show">Show</a></td>
            <td><a class="btn btn-success" href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a></td>
            <td><a class="btn btn-danger" href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm"('Yakin Slur?...');>Delete</a></td>
        </tr>
        <?php 
            } 
        ?>
    </table>
</body>
</html>