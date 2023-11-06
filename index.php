<?php
//gunakan file config.php
include_once("config.php");

//ambil data dan simpan kedalam variabel result
$result = mysqli_query($conn, "SELECT * FROM cv_data");
$data = mysqli_fetch_array($result);
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>CV</title>
</head>

< class="p-3">
  
  <nav class="navbar fixed-top navbar-expand-lg" style="background-color: #e3f2fd;">
      <div class="container">
        <a class="navbar-brand" href="">Curiculum Vitae</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pendidikan">Pendidikan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pengalaman_kerja">Pengalaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#keterampilan">Keterampilan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#alamat">Kontak</a>
            </li>
          </ul>
        </div>
        <div class="d-flex flex-row-reverse">
              <a class="nav-link" href="edit.php">Update</a>
        </div>
      </div>
    </nav>

<div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <br> <br>
          <img src=<?php echo $data['foto_path'] ?> class="rounded-circle img-thumbnail" width="200">
          <br>
          <h1 class="display-4"><?php echo $data['nama'] ?></h1>
          <br>
          <h3 class="lead">Gamer | Programmer | Student</h3>
          <br>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium et unde quaerat numquam asperiores quod neque quisquam distinctio molestiae molestias, soluta nobis dignissimos dicta quo iste, tempora incidunt, vel deserunt.</p>
        </div>
      </div>
      <br>
      <br>
      <br> <br> <br> <br> <br> <br> <br>
</div>

  <br> <br>
    <section class="pendidikan" id="pendidikan">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>Latar</h2>
            <br> <br> <br>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <p>Pendidikan</p>
          </div>
          <div class="col-md-5">
            <p><?php echo $data['pendidikan']; ?></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium et unde quaerat numquam asperiores quod neque quisquam distinctio molestiae molestias, soluta nobis dignissimos dicta quo iste, tempora incidunt, vel deserunt.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium et unde quaerat numquam asperiores quod neque quisquam distinctio molestiae molestias, soluta nobis dignissimos dicta quo iste, tempora incidunt, vel deserunt.</p>
          </div>
        </div>
        <br> <br> <br> <br> <br> <br> <br>
      </div>
      
    </section>


    <br> <br>
    <section class="pengalaman_kerja" id="pengalaman_kerja">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>Pengalaman</h2>
            <br> <br> <br>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <p>Bekerja</p>
          </div>
          <div class="col-md-5">
            <p><?php echo $data['pengalaman_kerja']; ?></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium et unde quaerat numquam asperiores quod neque quisquam distinctio molestiae molestias, soluta nobis dignissimos dicta quo iste, tempora incidunt, vel deserunt.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium et unde quaerat numquam asperiores quod neque quisquam distinctio molestiae molestias, soluta nobis dignissimos dicta quo iste, tempora incidunt, vel deserunt.</p>
          </div>
        </div>
        <br> <br> <br> <br> <br> <br> <br>
      </div>

    </section>
    

    <!-- Keterampilan -->
    <section class="keterampilan bg-light" id="keterampilan">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Keterampilan</h2>
          </div>
        </div>
        <div class="row" id="row1">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/6.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><?php echo $data['keterampilan']; ?> Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/3.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><?php echo $data['keterampilan']; ?> Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/5.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><?php echo $data['keterampilan']; ?> Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>  
        </div>
        <br> <br> <br> <br> <br> <br> <br> 
    </section>


  

    <div class="row" id="row1">
      <div class="col-md mb-4">
        <div class="card">
          
          <div class="card-body">
            <p class="card-text"><?php echo $data['pendidikan']?></p>
          </div>
        </div>
      </div>

      <div class="col-md mb-4">
        <div class="card">
          
          <div class="card-body">
            <p class="card-text"><?php echo $data['pengalaman_kerja']?></p>
          </div>
        </div>
      </div>

      <div class="col-md mb-4">
        <div class="card">
          
          <div class="card-body">
            <p class="card-text"><?php echo $data['keterampilan']?></p>
          </div>
        </div>
      </div>   
    </div>
    <br> <br>

<section class"alamat" id="alamat">
  <div class="row justify-content-center" id="#alamat">
    <div class="col-lg-4">
    <div class="card bg-secondary text-white mb-4 text-center">
      <div class="card-body">
        <h5 class="card-title">Contact Me</h5>
        <p class="card-text"><?php echo $data['email'] ?>, <?php echo $data['telepon']?></p>
      </div>
    </div>

    <ul class="list-group mb-4">
      <li class="list-group-item"><h3>Location</h3></li>
      <li class="list-group-item">My Office</li>
      <li class="list-group-item"><?php echo $data['alamat'] ?></li>
      <li class="list-group-item">Banten, Indonesia</li>
    </ul>
    </div>
  </div>
</section> 

<footer class="bg-dark text-white mt-5">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <p>Created By Adi &copy; 2023.</p>
        <p><?php echo $data['web']?></p>
      </div>
    </div>
  </div>
</footer

</body>
</html>
