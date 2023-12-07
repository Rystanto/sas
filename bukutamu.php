<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="home.php">Home</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
  <li class="nav-item active">
    <a class="nav-link" href="sejarah.php">Sejarah <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="tokoh.php">Tokoh</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="bukutamu.php">Buku Tamu</a>
  </li>
</ul>
</div>
</nav>
<div class="container">
    <h1>Buku Tamu</h1>

    <form action ="" method="POST" name ="penjualan">
        
  <div class="form-group">
    <label for="nm">Nama </label>
    <input type="text" class="form-control" id="nm" name="nm" Required>
  </div>
  <div class="form-group">
    <label for="kelas">kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas" Required>
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan" Required>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Sumbit</button>
  
</form>

<hr>
    <?php
    if(isset($_POST['submit'])){
      $nama =$_POST['nm'];
      $kelas =$_POST['kelas'];
      $jurusan =$_POST['jurusan'];

    
    
    ?>
     <div class="container">

            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th scope='col'>No</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>Kelas</th>
                        <th scope='col'>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>1</th>
                        <td><?php echo $nama ?></td>
                        <td><?php echo $kelas ?></td>
                        <td><?php echo $jurusan ?></td>
                        
                    </tr>

                </tbody>
            </table>

    </div>
    <?php } ?>
    </div>
</body>
</html>