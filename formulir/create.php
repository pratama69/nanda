<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Nanda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="proses.php">Formulir</a>
      </li>
      </li>
    </ul>
  </div>
</nav>
    <fieldset>
        <legend>Input Data Siswa</legend>
            <table>
                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" required></textarea></td>
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
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>