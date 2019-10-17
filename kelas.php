<?php
class Siswa extends Database {
    // Menampilkan Semua Data
    public function index()
    {
        $datadiri = mysqli_query($this->koneksi,"select * from siswa");
        // var_dump($datadiri);
        return $datadiri;
    }
    // Menambah Data
    public function create($nama, $alamat, $tgl_lahir, $jns_kelamin, $agama, $umur)
    {
        mysqli_query($this->koneksi,"insert into siswa values(null,'$nama', '$alamat','$tgl_lahir','$jns_kelamin','$agama','$umur')");
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datadiri = mysqli_query($this->koneksi,"select * from siswa where id='$id'");
        return $datadiri;
    }
    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datadiri = mysqli_query($this->koneksi,"select * from siswa where id='$id'");
        return $datadiri;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $alamat, $tgl_lahir, $jns_kelamin, $agama, $umur)
    {
        mysqli_query($this->koneksi,"update siswa set $nama='$nama', alamat='$alamat', tanggal_lahir='$tgl_lahir',jenis_kelamin ='$jns_kelamin', agama='$agama', umur='$umur' where id='$id'");
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from formulir where id='$id'");
    }
}
?>