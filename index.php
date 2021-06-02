  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>tugas basisdata - innerjoin</title>
  </head>
  <body>
  <div class="container">
  <div class="row">
  <h4>Table Konsumen</h4>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">KODE KONSUMEN</th>
      <th scope="col">NAMA KONSUMEN</th>
      <th scope="col">NO TELEPON</th>
      <th scope="col">TYPE KENDARAAN</th>
      <th scope="col">NO PLAT</th>
    </tr>
  </thead>
  <?php
  include 'koneksi.php';
  $sql = 'select * from konsumen';
  $query = mysqli_query($tersambung,$sql);
  while($row = mysqli_fetch_array($query)){

  ?>
  <tbody>
    <tr>
      <td><?php echo $row['KODE_KONSUMEN']?></td>
      <td><?php echo $row['NAMA_KONSUMEN']?></td>
      <td><?php echo $row['NOMER_TELFON']?></td>
      <td><?php echo $row['TYPE_KENDARAAN']?></td>
      <td><?php echo $row['NO_PLAT']?></td>
                  

  
    </tr>
 
  </tbody>
  <?php
  }
  ?>
</table>
  </div></div>
  <div class="container">
  <div class="row">
  <h4>Table Service</h4>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">KODE SERVICE</th>
      <th scope="col">KODE KONSUMEN</th>
      <th scope="col">SERVICE</th>
      <th scope="col">TINDAKAM</th>
      <th scope="col">TANGGAL SERVICE</th>

    </tr>
  </thead>
  <?php
  include 'koneksi.php';
  $sql = 'select * from service';
  $query = mysqli_query($tersambung,$sql);
  while($row = mysqli_fetch_array($query)){

  ?>
  <tbody>
    <tr>
      <td><?php echo $row['KODE_SERVICE']?></td>
      <td><?php echo $row['KODE_KONSUMEN']?></td>
      <td><?php echo $row['SERVICE']?></td>
      <td><?php echo $row['TINDAKAN']?></td>
      <td><?php echo $row['TGL_SERVICE']?></td>
                  

  
    </tr>
 
  </tbody>
  <?php
  }
  ?>
</table>
  </div></div>
  <div class="container">
  <div class="row">
  <h4>Table Sparepart</h4>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">KODE SPAREPART</th>
      <th scope="col">KODE_SERVICE</th>
      <th scope="col">NO PART</th>
      <th scope="col">NAMA PART</th>
      <th scope="col">QTY</th>
      <th scope="col">HARGA</th>

    </tr>
  </thead>
  <?php
  include 'koneksi.php';
  $sql = 'select * from sperpart';
  $query = mysqli_query($tersambung,$sql);
  while($row = mysqli_fetch_array($query)){

  ?>
  <tbody>
    <tr>
      <td><?php echo $row['KODE_SPERPART']?></td>
      <td><?php echo $row['KODE_SERVICE']?></td>
      <td><?php echo $row['NO_PART']?></td>
      <td><?php echo $row['NAMA_PART']?></td>
      <td><?php echo $row['QTY']?></td>
      <td><?php echo $row['HARGA']?></td>
                  

  
    </tr>
 
  </tbody>
  <?php
  }
  ?>
</table>
  </div></div>
  <div class="container">
  <div class="row">
  <h4>Table Pembayaran</h4>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">KODE KONSUMEN</th>
      <th scope="col">KODE SPERPART</th>
      <th scope="col">KODE SERVICE</th>
      <th scope="col">MEKANIK</th>
      <th scope="col">TANGGAL BAYAR</th>

    </tr>
  </thead>
  <?php
  include 'koneksi.php';
  $sql = 'select * from pembayaran';
  $query = mysqli_query($tersambung,$sql);
  while($row = mysqli_fetch_array($query)){

  ?>
  <tbody>
    <tr>
      <td><?php echo $row['KODE_KONSUMEN']?></td>
      <td><?php echo $row['KODE_SPERPART']?></td>
      <td><?php echo $row['KODE_SERVICE']?></td>
      <td><?php echo $row['MEKANIK']?></td>
      <td><?php echo $row['TGL_BAYAR']?></td>
                  

  
    </tr>
 
  </tbody>
  <?php
  }
  ?>
</table>
  </div>
</div>
  <div class="container">
  <div class="row">
  <h4>Table Inner Join</h4>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">KODE_KONSUMEN</th>
      <th scope="col">NAMA KONSUMEN</th>
      <th scope="col">NOMER TELFON</th>
      <th scope="col">TYPE KENDARAAN</th>
      <th scope="col">NO PLAT</th>
      <th scope="col">KODE SPERPART</th>
      <th scope="col">KODE_SERVICE</th>
      <th scope="col">MEKANIK</th>
      <th scope="col">TANGGAL BAYAR</th>

    </tr>
  </thead>
  <?php
  include 'koneksi.php';
  $sql = 'select    ks.ID_KONSUMEN, ks.NAMA_KONSUMEN, ks.NOMER_TELFON, ks.TYPE_KENDARAAN, ks.NO_PLAT,
                    pb.KODE_KONSUMEN, pb.ID_PEMBAYARAN, pb.KODE_SPERPART, pb.MEKANIK, pb.KODE_SERVICE, pb.TGL_BAYAR
  from konsumen ks
  inner join pembayaran pb
  on ks.ID_KONSUMEN = pb.ID_PEMBAYARAN';
  $query = mysqli_query($tersambung,$sql);
  while($row = mysqli_fetch_array($query)){

  ?>
  <tbody>
    <tr>
      <td><?php echo $row['KODE_KONSUMEN']?></td>
      <td><?php echo $row['NAMA_KONSUMEN']?></td>
      <td><?php echo $row['NOMER_TELFON']?></td>
      <td><?php echo $row['TYPE_KENDARAAN']?></td>
      <td><?php echo $row['NO_PLAT']?></td>
      <td><?php echo $row['KODE_SPERPART']?></td>
      <td><?php echo $row['KODE_SERVICE']?></td>
      <td><?php echo $row['MEKANIK']?></td>
      <td><?php echo $row['TGL_BAYAR']?></td>
                  

  
    </tr>
 
  </tbody>
  <?php
  }
  ?>
</table>
  </div>
  </div>
  <div class="container">
  <div class="row">
  <h4>Table Inner Join</h4>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">KODE_KONSUMEN</th>
      <th scope="col">NAMA KONSUMEN</th>
      <th scope="col">NOMER TELFON</th>
      <th scope="col">TYPE KENDARAAN</th>
      <th scope="col">NO PLAT</th>
      <th scope="col">KODE SPERPART</th>
      <th scope="col">KODE_SERVICE</th>
      <th scope="col">MEKANIK</th>
      <th scope="col">TANGGAL BAYAR</th>

    </tr>
  </thead>
  <?php
  include 'koneksi.php';
  $sql = 'select    ks.ID_KONSUMEN, ks.NAMA_KONSUMEN, ks.NOMER_TELFON, ks.TYPE_KENDARAAN, ks.NO_PLAT,
                    pb.KODE_KONSUMEN, pb.ID_PEMBAYARAN, pb.KODE_SPERPART, pb.MEKANIK, pb.KODE_SERVICE, pb.TGL_BAYAR
  from konsumen ks
  left join pembayaran pb
  on ks.ID_KONSUMEN = pb.ID_PEMBAYARAN';
  $query = mysqli_query($tersambung,$sql);
  while($row = mysqli_fetch_array($query)){

  ?>
  <tbody>
    <tr>
      <td><?php echo $row['KODE_KONSUMEN']?></td>
      <td><?php echo $row['NAMA_KONSUMEN']?></td>
      <td><?php echo $row['NOMER_TELFON']?></td>
      <td><?php echo $row['TYPE_KENDARAAN']?></td>
      <td><?php echo $row['NO_PLAT']?></td>
      <td><?php echo $row['KODE_SPERPART']?></td>
      <td><?php echo $row['KODE_SERVICE']?></td>
      <td><?php echo $row['MEKANIK']?></td>
      <td><?php echo $row['TGL_BAYAR']?></td>
                  

  
    </tr>
 
  </tbody>
  <?php
  }
  ?>
</table>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>