<?php 
class Databasee {
    public $host = "localhost", $user = "root", $pass = 123, $db="biodata";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if($this->koneksi)
        {
            // echo "berhasil";
        } else {
            return "Koneksi Database Gagal";
        }
    }
}
class Biodata extends Databasee {
    // Menampilkan Semua Data
    public function index()
    {
        
        $datasiswa = mysqli_query($this->koneksi,"select * from formulir");
        // var_dump($datasiswa);
        return $datasiswa;
    }
    // Menambah Data
    public function create($nama, $alamat, $tanggal_lahir, $jenis_kelamin, $agama, $umur)
    {
        
        mysqli_query($this->koneksi,"insert into formulir values(null,'$nama','$alamat','$tanggal_lahir','$jenis_kelamin',
        '$agama','$umur')");
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from formulir where id='$id'");
        return $datasiswa;
    }
    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from formulir where id='$id'");
        return $datasiswa;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $alamat, $tanggal_lahir, $jenis_kelamin, $agama, $umur)
    {
        mysqli_query($this->koneksi,"update formulir set nama='$nama', alamat='$alamat', tanggal_lahir='$tanggal_lahir',
        jenis_kelamin='$jenis_kelamin', agama='$agama', umur='$umur' where id='$id'");
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from formulir where id='$id'");
    }
}
// koneksi DB
$db = new Databasee();
?>
