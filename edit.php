<?php
//gunakan file config.php
  include_once("config.php");

function getCVData()
{
  global $conn;
  $query = "SELECT * FROM cv_data WHERE id = 1"; // Sesuaikan dengan id CV 
  $result = mysqli_query($conn, $query);
  return mysqli_fetch_array($result);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = htmlspecialchars($_POST['nama']);
  $alamat = htmlspecialchars($_POST['alamat']);
  $telepon = htmlspecialchars($_POST['telepon']);
  $email = htmlspecialchars($_POST['email']);
  $web = htmlspecialchars($_POST['web']);
  $pendidikan = htmlspecialchars($_POST['pendidikan']);
  $pengalaman_kerja = htmlspecialchars($_POST['pengalaman_kerja']);
  $keterampilan = htmlspecialchars($_POST['keterampilan']);
  $foto_path = htmlspecialchars($_POST['foto_path']);

  $query = "UPDATE cv_data SET 
        nama = ?, 
        alamat = ?, 
        telepon = ?, 
        email = ?, 
        web = ?, 
        pendidikan = ?, 
        pengalaman_kerja = ?, 
        keterampilan = ?, 
        foto_path = ? 
        WHERE id = 1"; // Sesuaikan dengan id CV 

  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "sssssssss", $nama, $alamat, $telepon, $email, $web, $pendidikan, $pengalaman_kerja, $keterampilan, $foto_path);

    if (mysqli_stmt_execute($stmt)) {
    echo 'Data berhasil diperbarui';
    print 'Data berhasil diperbarui';
  } else {
    echo 'Terjadi kesalahan saat memperbarui data';
    print'Data gagal diperbarui';
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

  header('Location: edit.php');
  exit();
}

$data = getCVData();
  
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>Update Your CV</title>
</head>

<body class="p-3">
    
<div class="container-fluid">
<a class="btn btn-primary" href="index.php">Kembali ke Index</a>
<h1>Update Your CV</h1>
    <div class="col-lg-5">
        <div class="mb-3">    
        <form id="frmSubmit" method="post">
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat'] ?>">
            </div>
            <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $data['telepon'] ?>">
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $data['email'] ?>">
            </div>
            <div class="form-group">
            <label for="web">Web</label>
            <input type="text" class="form-control" id="web" name="web" value="<?php echo $data['web'] ?>">
            </div>
            <div class="form-group">
            <label for="pendidikan">Pendidikan</label>
            <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?php echo $data['pendidikan'] ?>">
            </div>
            <div class="form-group">
            <label for="pengalaman_kerja">Pengalaman Kerja</label>
            <input type="text" class="form-control" id="pengalaman_kerja" name="pengalaman_kerja" value="<?php echo $data['pengalaman_kerja'] ?>">
            </div>
            <div class="form-group">
            <label for="keterampilan">Keterampilan</label>
            <input type="text" class="form-control" id="keterampilan" name="keterampilan" value="<?php echo $data['keterampilan'] ?>">
            </div>
            <div class="form-group">
            <label for="foto_path">Foto</label>
            <input type="file" class="form-control" id="foto_path" name="foto_path" value="<?php echo $data['foto_path'] ?>" required>
            </div>
            <button type="submit" class="btn btn-secondary">Update data</button>
        </form>
        </div>    
    </div>

</div>
        


</body>

</html>
