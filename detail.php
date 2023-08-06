<!DOCTYPE html>
<html lang="en">
<?php
include 'connection.php';
$id_wd = $_GET['detailid'];


$sql = "SELECT id_wd, nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, agama, pendidikan, status, bekerja, perkerjaan_pokok, perkerjaan_sampingan, penghasilan, anggota_keluarga, aset_keluarga, adl, ekonomi, sosial, nik, asal_rujukan, tanggal_masuk, tanggal_keluar, daycare_undergoes, pekerjaan_pokok_sesudah, pekerjaan_sampingan_sesudah
FROM public.warga_dampingan
WHERE id_wd=$id_wd;
";
$result = pg_query($conn, $sql);
if ($result) {

  while ($row = pg_fetch_assoc($result)) {
    $id = $row['id_wd'];
    $name = $row['nama_lengkap'];
    $gender = $row['jenis_kelamin'];
    $pob = $row['tempat_lahir'];
    $dob = $row['tanggal_lahir'];
    $address = $row['alamat'];
    $religion = $row['agama'];
    $education = $row['pendidikan'];
    $status = $row['status'];
    $work = $row['status'];
    $admission = $row['tanggal_masuk'];
    $release = $row['tanggal_keluar'];
    $daycare = $row['daycare_undergoes'];

  }
}
?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail WD</title>
  <!-- <link rel="stylesheet" href="stylesheet.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <!-- ============================== JUDULNYA DISINI ============================== -->
    <div class="heading">
      <h1 class="title display-3">Detail Warga Dampingan</h1>
      <hr width="100%">
    </div>
    <!-- ==================================================================================================== -->

    <table class="table">
      <tr>
        <td>[Data Diri Warga Dampingan] </td>

      </tr>
      <tr>
        <td>Nama Lengkap </td>
        <td>:</td>
        <?php echo "<td> $name </td>" ?>

      </tr>
      <tr>
        <td>Jenis Kelamin </td>
        <td>:</td>
        <?php echo "<td> $gender </td>" ?>

      </tr>
      <tr>
        <td>Tempat, Tanggal Lahir </td>
        <td>:</td>
        <?php echo "<td> $pob, $dob </td>" ?>

      </tr>
      <tr>
        <td>Alamat </td>
        <td>:</td>
        <?php echo "<td> $address </td>" ?>

      </tr>
      <tr>
        <td>Agama </td>
        <td>:</td>
        <?php echo "<td> $religion </td>" ?>

      </tr>
      <tr>
        <td>Pendidikan </td>
        <td>:</td>
        <?php echo "<td> $education </td>" ?>

      </tr>
      <tr>
        <td> Status </td>
        <td>:</td>
        <?php echo "<td> $status </td>" ?>

      </tr>
      <tr>
        <td>[Washington Group Questions] </td>

      </tr>
      <tr>
        <td>Apakah anda memiliki kesulitan MELIHAT meskipun sudah menggunakan kacamata? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Apakah anda memiliki kesulitan MENDENGAR meskipun sudah menggunakan alat bantu dengar? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Apakah anda memiliki kesulitan BERJALAN atau naik turun tangga? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Apakah anda memiliki kesulitan dengan RAWAT DIRI seperti mencuci atau berpakaian? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Memakai bahasa keseharian apakah anda memiliki kesulitan BERKOMUNIKASI, paham atau dipahami lawan
          bicara? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>[Riwayat Kesehatan] </td>
      </tr>
      <tr>
        <td>Diagnosis yang diketahui </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Ada riwayat perilaku menyakiti diri sendiri / orang lain?</td>
        <td>:</td>

      </tr>
      <tr>
        <td>Ada riwayat menyendiri? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Ada riwayat melarikan diri? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Ada riwayat kecenderungan bunuh diri? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Frekuensi kemunculan gejala </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Apakah mengkonsumsi obat? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Frekuensi minum obat? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Pengobatan dimana saja?</td>
        <td>:</td>

      </tr>
      <tr>
        <td>Berapa kali masuk Rumah Sakit?</td>
        <td>:</td>

      </tr>
      <tr>
        <td>Permasalahan/Kesulitan saat ini</td>
        <td>:</td>

      </tr>
      <tr>
        <td>[Dukungan Keluarga] </td>

      </tr>
      <tr>
        <td>Apakah bekerja? </td>
        <td>:</td>
        <?php echo "<td> $work </td>" ?>

      </tr>
      <tr>
        <td>Apa Pekerjaan Pokoknya?</td>
        <td>:</td>

      </tr>
      <tr>
        <td>Apakah memiliki pekerjaan sampingan? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Penghasilan perbulan? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Berapa jumlah anggota di rumah? Siapa saja yang bekerja? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Apa saja aset yang dimiliki keluarga? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Apakah mendapat bantuan? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Apakah memiliki asuransi?</td>
        <td>:</td>

      </tr>
      <tr>
        <td>Apakah tergabung dalam komunitas/ kelompok kerja? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Dukungan yang sudah diberikan pada warga dampingan </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Apakah warga dampingan memiliki KTP? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Apakah tercantum di Kartu Keluarga?</td>
        <td>:</td>

      </tr>
      <tr>
        <td>Apakah warga dampingan pernah bekerja? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Apakah pernah mendapatkan gaji? </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Rencana keluarga untuk warga dampingan kedepannya </td>

      </tr>
      <tr>
        <td>Medis </td>
        <td>:</td>

      </tr>
      <tr>
        <td>ADL </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Ekonomi </td>
        <td>:</td>

      </tr>
      <tr>
        <td>Sosial </td>
        <td>:</td>

      </tr>


</body>

