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
          <!-- <th scope="col">Tempat Lahir</th> -->
          <!-- <th scope="col">Tanggal Lahir</th> -->
          <!-- <th scope="col">Alamat</th> -->
          <!-- <th scope="col">Agama</th> -->
          <!-- <th scope="col">Pendidikan</th> -->
          <!-- <th scope="col">Status</th> -->
          <!-- <th scope="col">Bekerja</th> -->
          <!-- <th scope="col">Pekerjaan Pokok</th> -->
          <!-- <th scope="col">Pekerjaan sampingan</th> -->
          <!-- <th scope="col">Penghasilan</th> -->
          <!-- <th scope="col">Anggota Keluarga</th> -->
          <!-- <th scope="col">Aset Keluarga</th> -->
          <!-- <th scope="col">ADL</th> -->
          <!-- <th scope="col">Ekonomi</th> -->
          <!-- <th scope="col">Sosial</th> -->
          <!-- <th scope="col">NIK</th> -->
          <!-- <th scope="col">Asal Rujukan</th> -->
          <th scope="col">Tanggal Masuk</th>
          <th scope="col">Tanggal keluar</th>
          <th scope="col">Daycare / Undergoes</th>
          <th scope="col">Approval</th>
          <th scope="col">More</th>



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
            $admission=$row['tanggal_masuk'];
            $release=$row['tanggal_keluar'];
            $daycare=$row['daycare_undergoes'];


            
            echo '
            <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$gender.'</td>
            <td>'.$admission.'</td>
            <td>'.$release.'</td>
            <td>'.$daycare.'</td>
            <td><input class="checkbox" type="checkbox" role="switch"></td>
            
            
            
            
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
<style>
  input[type="checkbox"] {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    position: relative;
    height: 20px;
    width: 50px;
    background-color: white;
    border-radius: 5rem;
    transition: background-color .2s;
    box-shadow: 0 0 15px #0000001e;
  }
  input[type="checkbox"]::after {
    position: absolute;
    content: '';
    top: 50%;
    left: 30%;
    transform: translate(-50%, -50%);
    height: 18px;
    width: 18px;
    border-radius: 50%;
    background-color: rgb(47, 47, 68);
    transition: left .2s;
  }
  input[type="checkbox"]::checked {
    background-color: rgb(98, 249, 173);
  }
  input[type="checkbox"]::checked::after {
    left: 70%;
  }
</style>

</html>