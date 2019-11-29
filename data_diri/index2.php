<html>
<title>Data Diri</title>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<body>
    
    <center>
    <nav class="center navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand"><font color="white"><h1>DATA DIRI</h1></font></a>
</nav>
<center>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="#"><font color="white">Home</font></a>
      <a class="nav-item nav-link" href="#"><font color="white">Kategori</font></a>
      <a class="nav-item nav-link" href="#"><font color="white">Pricing</font></a>
    </div>
  </div>
</nav>

            <table class="table table-light">
            <tr>
            <thead class="thead-dark">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Harapan</th>
      <th scope="col"><center>Aksi</center></th>
      </thead> 
        </tr>
                

                <?php
                include '../koneksi.php';
                $data_diri = new Data_diri();
                $no = 1;
                foreach ($data_diri->index() as $data) {
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['harapan']; ?></td>
                        <td><button type="button" class="btn btn-success"><a href="show.php?karyawan_id=<?php echo $data['karyawan_id']; ?>"><font color="white">Show</font></a></button>
                            <button type="button" class="btn btn-danger"><a href="edit.php?karyawan_id=<?php echo $data['karyawan_id']; ?>"><font color="white">Edit</font></a></button>
                            <button type="button" class="btn btn-warning"><a href="proses.php?karyawan_id=<?php echo $data['karyawan_id']; ?>
                    & aksi=delete" onclick="return confirm('Apakah Anda 
                    Yakin Mau Menghapus Data Ini?')"><font color="white">Delete</font></a></button> 
    
                        </td>
                    </tr>
                <?php
                }
                ?>
                
            </table>
            <button type="button" class="btn btn-primary btn-lg btn-block"><a href="tambah.php"><font color="white">Create</font></a></button><br><br> 

</body>
</html>