<?php
//koneksi
session_start();
include("koneksi1.php");

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SPK TOPSIS</title>
  <!--bootstrap-->
  <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">

  <!--icon-->
  <link href="tampilan/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <style>
    body {
      background-image: url(img/bro.jpg);

    }
  </style>

</head>

<body>

  <!--menu-->
  <nav class="navbar navbar-default navbar-custom">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Sistem Pendukung Keputusan Pemilihan Pembangunan Sekolah (Metode Topsis)</a>
      </div>

      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="kriteria.php">Kriteria</a>
          </li>
          <li>
            <a href="alternatif.php">Alternatif</a>
          </li>
          <li>
            <a href="poin.php">Nilai</a>
          </li>
          <li>
            <a href="nilmat.php">Nilai Matriks</a>
          </li>
          <li>
            <a href="hastop.php">Hasil Topsis</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading text-center">
            Nilai
          </div>

          <ul class="nav nav-tabs">
            <li class="active">
              <a href="poin.php" data-toggle="tab">Tabel Nilai</a>
            </li>
            <li>
              <a href="pointambah.php" data-toggle="tab">Tambah Nilai</a>
            </li>
          </ul>

          <div class="panel-body">
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="">
                <!--tabel poin-->
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nilai</th>
                      <th colspan="2">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $sql = $koneksi->query('SELECT * FROM tab_poin');
                    while ($row = $sql->fetch_array()) {
                    ?>
                      <tr>
                        <td align="center"><?php echo $no ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td align="center"><a href="editpoin.php?id_poin=<?php echo $row['id_poin'] ?>"><i class="fa fa-edit fa-fw"></i> </td>
                        <td align="center"><a href="hapuspoin.php?id_poin=<?php echo $row['id_poin'] ?>"><i class="fa fa-trash fa-fw"></i> </td>

                      </tr>

                    <?php $no++;
                    } ?>

                  </tbody>
                </table>
                <!--tabel poin-->
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!--footer-->
  <footer class="text-center">
    <div class="footer-below">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <em>SPK &copy; Kelompok 4</em>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!--plugin-->
  <script src="tampilan/js/bootstrap.min.js"></script>

</body>

</html>