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
          <th scope="col">No</th>
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

      <!-- Nama,Jenis Kelamin, tanggal Masuk, Tanggal keluar, Approved/not, (Detail) -->
      <tbody>
        <?php
        include 'connection.php';

        $sql = "Select * from warga_dampingan ORDER BY id_wd ASC";
        $result = pg_query($conn, $sql);
        if ($result) {
        
          while($row=pg_fetch_assoc($result)){
            $id=$row['id_wd'];
            $name=$row['nama_lengkap'];
            $gender=$row['jenis_kelamin'];
            $pob=$row['tempat_lahir'];
            $dob=$row['tanggal_lahir'];
            $address=$row['alamat'];
            $religion=$row['agama'];
            $education=$row['pendidikan'];
            $status=$row['status'];
            $work=$row['status'];
            
            echo '
            <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$gender.'</td>
            <td>'.$pob.'</td>
            <td>'.$dob.'</td>
            <td>'.$address.'</td>
            <td>'.$religion.'</td>
            <td>'.$education.'</td>
            <td>'.$status.'</td>
            <td>'.$work.'</td>
            </tr>';

          }
        }
        ?>

        <!-- 
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