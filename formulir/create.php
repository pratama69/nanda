<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Create Biodata</title>
</head>
<body><br><br>
<center>I N P U T</center>
<center>B I O D A T A</center><br>
<div class="container">
  <div class="row" style="padding: 20px;">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><b></b>
          <div class="card-body">
            
            <form action="proses.php?aksi=tambah" method="POST">
              <div class="form-group">
                <label for="">Nama :</label>
                  <input type="text" class="form-control" name="nama">
              </div>
              <div class="form-group">
                <label for="">Alamat :</label>
                  <textarea class="form-control" name="alamat" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="">Tanggal Lahir :</label>
                  <input type="date" class="form-control" name="tanggal_lahir">
              </div>
              <div class="form-group">
                <label for="">Jenis Kelamin :</label><br>
                  <input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki<br>
                  <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
              </div>
              <div class="form-group">
                <label for="">Agama :</label><br>
                  <select name="agama" class="form-control">
                    <option>P I L I H</option>
                    <option>- Islam</option>
                    <option>- Kristen</option>
                    <option>- Hindu</option>
                    <option>- Budha</option>
                    <option>- Katolik</option>
                  </select>
              </div><br>
              <div class="form-group">
                <button type="submit" name="save" class="btn btn-primary">SIMPAN</button>
              </div>
            </form>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
