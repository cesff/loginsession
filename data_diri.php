<?php
class Data_diri extends Database
{
    //Menamapilkan Semua Data
    public function index()
    {
        $data_diri = mysqli_query(
            $this->koneksi,
            "select * from data_diri"
        );
        return $data_diri;
    }

    //Menambah Data
    // public function create($karyawan_nama1)
    // {
    //     mysqli_query($this->koneksi, "insert into karyawan values
    //     (null,'$karyawan_nama1')");
    // }
    // public function edit($karyawan_id1)
    // {
    //     $data_karyawan = mysqli_query($this->koneksi, "select * from karyawan where karyawan_id='$karyawan_id1'");
    //     return    $data_karyawan;
    // }
    // public function update($karyawan_id1, $karyawan_nama1)
    // {
    //     mysqli_query($this->koneksi, "update karyawan set 
    //     karyawan_nama ='$karyawan_nama1'
    //     where karyawan_id ='$karyawan_id1'");
    // }
    // public function delete($karyawan_id1)
    // {
    //     mysqli_query($this->koneksi, "delete from karyawan where karyawan_id=' $karyawan_id1'");
    // }
}
