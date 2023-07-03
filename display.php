<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Satunama</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <button class="btn btn-primary m-5 ">
      <a href="form_assesment.php" class="text-light link-underline link-underline-opacity-0">
        Tambahkan WD
      </a>
    </button>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID WD</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Alamat</th>
          <th scope="col">Agama</th>
          <th scope="col">Pendidikan</th>
          <th scope="col">Status</th>
          <th scope="col">Bekerja</th>
          <th scope="col">Pekerjaan Pokok</th>
          <th scope="col">Pekerjaan sampingan</th>
          <th scope="col">Penghasilan</th>
          <th scope="col">Anggota Keluarga</th>
          <th scope="col">Aset Keluarga</th>
          <th scope="col">ADL</th>
          <th scope="col">Ekonomi</th>
          <th scope="col">Sosial</th>
          <th scope="col">NIK</th>
          <th scope="col">Asal Rujukan</th>
          <th scope="col">Tanggal Masuk</th>
          <th scope="col">Tanggal keluar</th>
          <th scope="col">Daycare / Undergoes</th>



        </tr>
      </thead>
      <tbody>
        <?php
        include 'connection.php';

        $sql = "Select * from 'warga_dampingan";
        $result = pg_query($conn, $sql);
        if ($result) {
          $row = pg_fetch_assoc($result);
          echo $row['nama_lengkap'];
          $row = pg_fetch_assoc($result);
          echo $row['nama_lengkap'];
        }
        ?>

        <!-- <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr> -->
      </tbody>
    </table>
  </div>

</body>

</html>