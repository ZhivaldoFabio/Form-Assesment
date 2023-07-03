<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Assesment 1</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <div class="form-center">
        <!-- ============================== JUDULNYA DISINI ============================== -->
        <div class="heading">
            <h1 class="title">Form Assesment</h1>
        </div>
        <!-- ============================== FORM NYA DISINI ============================== -->
        <form class="form_assesment1" method="post">
            <div id="content1">
                <!-- ==================================================================================================== -->
                <label>Nama Lengkap</label><br>
                <input type="text" name="name" placeholder="Masukkan Nama Lengkap" class="input-text"><br>
                <br>
                <!-- ==================================================================================================== -->
                <label>Jenis Kelamin</label><br>
                <div class="option">
                    <div class="select-box">
                        <select name="Jenis Kelamin" id="jenis_kelamin">
                            <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div><br>
                <!-- ==================================================================================================== -->

                <label>Tempat, Tanggal Lahir</label><br>
                <input type="text" name="dob" placeholder="Masukkan Tanggal LAhir" class="input-text"><br>
                <br>
                <!-- ==================================================================================================== -->

                <label>Alamat</label><br>
                <input type="text" name="address" placeholder="Masukkan Alamat" class="input-text"><br>
                <br>
                <!-- ==================================================================================================== -->

                <label>Agama</label><br>
                <div class="option">
                    <div class="select-box">
                        <select name="Agama" id="agama">
                            <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Islam">Islam</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <br>
                <!-- ==================================================================================================== -->

                <label>Pendidikan</label><br>
                <div class="option">
                    <div class="select-box">
                        <select name="Pendidikan" id="pendidikan">
                            <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="Kuliah">Kuliah</option>
                        </select>
                    </div>
                </div>
                <br>
                <!-- ==================================================================================================== -->

                <label>Status Relasi</label>
                <input type="text" name="relation" placeholder="Masukkan Status Relasi" class="input-text"><br>
                <br>
                <label>Apakah anda memiliki kesulitan MELIHAT meskipun sudah menggunakan kacamata?</label><br>
                <div class="option">
                    <div class="select-box">
                        <select name="Asses melihat" id="Asses_melihat">
                            <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                            <option value="Bisa">Tidak,tidak Kesulitan</option>
                            <option value="Sulit">Ya,sedikit kesulitan</option>
                            <option value="Banget">Ya,banyak kesulitan</option>
                            <option value="Blas gabisa">Tidak bisa sama sekali</option>
                        </select>
                    </div>
                    <!-- ==================================================================================================== -->

                </div><br>
                <label>Apakah anda memiliki kesulitan MENDENGAR meskipun sudah menggunakan alat bantu dengar?</label><br>
                <div class="option">
                    <div class="select-box">
                        <select name="Asses mendengar" id="Asses_mendengar">
                            <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                            <option value="Bisa">Tidak,tidak Kesulitan</option>
                            <option value="Sulit">Ya,sedikit kesulitan</option>
                            <option value="Banget">Ya,banyak kesulitan</option>
                            <option value="Blas gabisa">Tidak bisa sama sekali</option>
                        </select>
                    </div>
                </div><br>
                <!-- ==================================================================================================== -->

                <label>Apakah anda memiliki kesulitan BERJALAN atau naik turun tangga?</label><br>
                <div class="option">
                    <div class="select-box">
                        <select name="Asses berjalan" id="Asses_berjalan">
                            <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                            <option value="Bisa">Tidak,tidak Kesulitan</option>
                            <option value="Sulit">Ya,sedikit kesulitan</option>
                            <option value="Banget">Ya,banyak kesulitan</option>
                            <option value="Blas gabisa">Tidak bisa sama sekali</option>
                        </select>
                    </div>
                </div><br>
                <!-- ==================================================================================================== -->

                <label>Apakah anda memiliki kesulitan dengan RAWAT DIRI seperti mencuci atau berpakaian?</label><br>
                <div class="option">
                    <div class="select-box">
                        <select name="Asses rawat" id="Asses_rawat">
                            <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                            <option value="Bisa">Tidak,tidak Kesulitan</option>
                            <option value="Sulit">Ya,sedikit kesulitan</option>
                            <option value="Banget">Ya,banyak kesulitan</option>
                            <option value="Blas gabisa">Tidak bisa sama sekali</option>
                        </select>
                    </div>
                </div><br>
                <!-- ==================================================================================================== -->

                <label>Memakai bahasa keseharian apakah anda memiliki kesulitan BERKOMUNIKASI, paham atau dipahami lawan
                    bicara?</label><br>
                <div class="option">
                    <div class="select-box">
                        <select name="Asses komunikasi" id="Asses_komunikasi">
                            <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                            <option value="Bisa">Tidak,tidak Kesulitan</option>
                            <option value="Sulit">Ya,sedikit kesulitan</option>
                            <option value="Banget">Ya,banyak kesulitan</option>
                            <option value="Blas gabisa">Tidak bisa sama sekali</option>
                        </select>
                    </div>
                </div><br>
                <!-- ==================================================================================================== -->

                <label>Diagnosis yang diketahui</label><br>
                <input type="text" name="relation" placeholder="Masukkan Diagnosis" class="input-text"><br>
                <br>
                <!-- ==================================================================================================== -->

                <label>Ada riwayat perilaku menyakiti diri sendiri / orang lain?</label><br>
                <input type="radio" name="menyakiti_1" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="menyakiti_2" class="larger">&nbsp&nbsp&nbspTidak<br><br>
                <!-- ==================================================================================================== -->

                <label>Ada riwayat menyendiri?</label><br>
                <input type="radio" name="menyendiri_1" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="menyendiri_2" class="larger">&nbsp&nbsp&nbspTidak<br><br>
                <!-- ==================================================================================================== -->

                <label>Ada riwayat melarikan diri?</label><br>
                <input type="radio" name="melarikan_1" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="melarikan_2" class="larger">&nbsp&nbsp&nbspTidak<br><br>
                <!-- ==================================================================================================== -->

                <label>Ada riwayat kecenderungan bunuh diri?</label><br>
                <div class="option">
                    <div class="select-box">
                        <select name="Asses bunuhdiri" id="Asses_bunuhdiri">
                            <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                            <option value="ucap">Dalam ucapan/tulisan</option>
                            <option value="perilaku">Dalam perilaku</option>
                            <option value="both">Keduanya</option>
                            <option value="no">Tidak ada</option>
                        </select>
                    </div><br>
                </div>
                <!-- ==================================================================================================== -->

                <label>Frekuensi kemunculan gejala</label><br>
                <div class="option">
                    <div class="select-box">
                        <select name="Asses gejala" id="Asses_gejala">
                            <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                            <option value="ucap">Lebih dari 1 bulan</option>
                            <option value="perilaku">1-5 kali dalam sebulan</option>
                            <option value="both">Hampir setiap hari</option>
                            <option value="no">Tidak ada</option>
                        </select>
                    </div>
                </div><br>
                <!-- ==================================================================================================== -->

                <label>Apakah mengkonsumsi obat?</label><br>
                <input type="radio" name="obat_1" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="obat_2" class="larger">&nbsp&nbsp&nbspTidak<br><br>
                <!-- ==================================================================================================== -->

                <label>Frekuensi minum obat?</label><br>
                <input type="radio" name="frekuensi_1" class="larger">&nbsp&nbsp&nbspTeratur<br>
                <input type="radio" name="frekuensi_2" class="larger">&nbsp&nbsp&nbspTidak teratur<br><br>
                <!-- ==================================================================================================== -->

                <label id="head2">Pengobatan dimana saja?</label><br>
                <div id="content2">
                    <input type="checkbox" name="pengobatan_1" class="larger"><label for="pengobatan_1">&nbsp&nbsp&nbspAlternatif/orang pintar</label><br><br>
                    <input type="checkbox" name="pengobatan_2" class="larger"><label for="pengobatan_2">&nbsp&nbsp&nbspPuskesmas</label><br><br>
                    <input type="checkbox" name="pengobatan_3" class="larger"><label for="pengobatan_3">&nbsp&nbsp&nbspRummah Sakit</label><br><br>
                    <input type="checkbox" name="pengobatan_4" class="larger"><label for="pengobatan_4">&nbsp&nbsp&nbspBelum pernah berobat</label><br><br>
                </div>

                <!-- ==================================================================================================== -->

                <label>Berapa kali masuk Rumah Sakit?</label><br>
                <input type="text" name="rumahsakit" placeholder="Masukkan Jawaban" class="input-text"><br>
                <br>
                <!-- ==================================================================================================== -->

                <label>Permasalahan/Kesulitan saat ini</label><br>
                <input type="text" name="permasalahan" placeholder="Masukkan Permasalahan" class="input-text"><br>
                <br>
                <!-- ==================================================================================================== -->

                <label>Apakah bekerja?</label><br>
                <input type="radio" name="bekerja_1" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="bekerja_2" class="larger">&nbsp&nbsp&nbspTidak<br><br>
                <!-- ==================================================================================================== -->

                <label>Apa Pekerjaan Pokoknya?</label><br>
                <input type="text" name="pekerjaan_pokok" placeholder="Masukkan Pekerjaan" class="input-text"><br>
                <br>
                <!-- ==================================================================================================== -->

                <label>Apakah memiliki pekerjaan sampingan?</label><br>
                <input type="radio" name="sampingan_1" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="sampingan_2" class="larger">&nbsp&nbsp&nbspTidak<br><br>
                <!-- ==================================================================================================== -->

                <label>Penghasilan perbulan?</label><br>
                <input type="radio" name="penghasilan_1" class="larger">&nbsp&nbsp&nbsp≤ 1 juta<br>
                <input type="radio" name="penghasilan_2" class="larger">&nbsp&nbsp&nbsp> 1 juta<br><br>
                <!-- ==================================================================================================== -->

                <label>Berapa jumlah anggota di rumah? Siapa saja yang bekerja?</label><br>
                <input type="text" name="jumlah_anggota" placeholder="Masukkan Jumlah Anggota" class="input-text">
                <br>
                <!-- ==================================================================================================== -->

                <p>Apa saja aset yang dimiliki keluarga? </p>
                <input type="checkbox" name="aset_1" class="larger"><label for="aset_1">&nbsp&nbsp&nbspMotor/mobil/sepeda</label><br><br>
                <input type="checkbox" name="aset_2" class="larger"><label for="aset_2">&nbsp&nbsp&nbspTernak</label><br><br>
                <input type="checkbox" name="aset_3" class="larger"><label for="aset_3">&nbsp&nbsp&nbspWarung/Toko/Tabungan</label><br>
                <!-- ==================================================================================================== -->

                <p>Apakah mendapat bantuan? </p>
                <input type="checkbox" name="bantuan_1" class="larger"><label for="bantuan_1">&nbsp&nbsp&nbspPemerintah</label><br><br>
                <input type="checkbox" name="bantuan_2" class="larger"><label for="bantuan_2">&nbsp&nbsp&nbspSwasta</label><br><br>
                <input type="checkbox" name="bantuan_3" class="larger"><label for="bantuan_3">&nbsp&nbsp&nbspOrang lain</label><br><br>
                <input type="checkbox" name="bantuan_4" class="larger"><label for="bantuan_4">&nbsp&nbsp&nbspTidak dapat</label><br>
                <!-- ==================================================================================================== -->

                <p>Apakah memiliki asuransi? </p>
                <input type="checkbox" name="asuransi_1" class="larger"><label for="asuransi_1">&nbsp&nbsp&nbspKIS</label><br><br>
                <input type="checkbox" name="asuransi_2" class="larger"><label for="asuransi_2">&nbsp&nbsp&nbspBPJS MANDIRI</label><br><br>
                <input type="checkbox" name="asuransi_3" class="larger"><label for="asuransi_3">&nbsp&nbsp&nbspAsuransi lainnya</label><br><br>
                <input type="checkbox" name="asuransi_4" class="larger"><label for="asuransi_4">&nbsp&nbsp&nbspTidak memiliki</label><br>
                <!-- ==================================================================================================== -->

                <p>Apakah tergabung dalam komunitas/ kelompok kerja? </p>
                <input type="checkbox" name="komunitas_1" class="larger"><label for="komunitas_1">&nbsp&nbsp&nbspKelompok Tani</label><br><br>
                <input type="checkbox" name="komunitas_2" class="larger"><label for="komunitas_2">&nbsp&nbsp&nbspArisan</label><br><br>
                <input type="checkbox" name="komunitas_3" class="larger"><label for="komunitas_3">&nbsp&nbsp&nbspKoperasi</label><br><br>
                <input type="checkbox" name="komunitas_4" class="larger"><label for="komunitas_4">&nbsp&nbsp&nbspKomunitas lainnya</label><br><br>
                <input type="checkbox" name="komunitas_5" class="larger"><label for="komunitas_5">&nbsp&nbsp&nbspTidak tergabung</label><br><br>
                <!-- ==================================================================================================== -->

                <label>Dukungan yang sudah diberikan pada warga dampingan</label><br>
                <input type="text" name="dukungan" placeholder="Jenis Dukungan" class="input-text">
                <br>
                <!-- ==================================================================================================== -->

                <p>Apakah warga dampingan memiliki KTP? </p>
                <input type="radio" name="ktp_1" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="ktp_2" class="larger">&nbsp&nbsp&nbspTidak<br>
                <!-- ==================================================================================================== -->

                <p>Apakah tercantum di Kartu Keluarga? </p>
                <input type="radio" name="kk_1" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="kk_2" class="larger">&nbsp&nbsp&nbspTidak<br>
                <!-- ==================================================================================================== -->

                <p>Apakah warga dampingan pernah bekerja? </p>
                <input type="radio" name="pernahwork_1" class="larger">&nbsp&nbsp&nbspPernah<br>
                <input type="radio" name="pernahwork_2" class="larger">&nbsp&nbsp&nbspBelum<br><br>
                <!-- ==================================================================================================== -->

                <p>Apakah pernah mendapatkan gaji? </p>
                <input type="radio" name="gaji_1" class="larger">&nbsp&nbsp&nbspPernah<br>
                <input type="radio" name="gaji_2" class="larger">&nbsp&nbsp&nbspBelum<br><br>
                <!-- ==================================================================================================== -->

                <label>Rencana keluarga untuk warga dampingan kedepannya:</label><br>
                <label>Medis</label><br>
                <input type="text" name="medis" placeholder="Masukkan Rencana Medis" class="input-text"><br>
                <label>ADL</label><br>
                <input type="text" name="adl" placeholder="Masukkan Rencana ADL" class="input-text">
                <label>Ekonomi</label><br>
                <input type="text" name="ekonomi" placeholder="Masukkan Rencana Ekonomi" class="input-text">
                <label>Sosial</label><br>
                <input type="text" name="sosial" placeholder="Masukkan Rencana Sosial" class="input-text">
                <br>
                <!-- ==================================================================================================== -->

                <input type="submit" value="Submit" name="submit">
                <p>Catatan:</p>
                <p>Medis: rutin minum obat, rutin kontrol, terapi, konsultasi/konseling</p>
                <p>Activity Daily Living: dilatih mandi, makan minum, kebersihan diri/lingkungan agar mandiri</p>
                <p>Ekonomi: dilibatkan kegiatan produktif, melakukan pekerjaan yang menghasilkan uang/tidak</p>
                <p>Sosial: dilibatkan kegiatan sosial, kerja bakti, kegiatan refreshing</p>
            </div>
        </form>

    </div>

    <!-- ==================================================================================================== -->

    <?php
    include 'connection.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];

        $sql = "insert into 'warga_dampingan' (nama_lengkap) values('$name')";
        $result = pg_query($conn, $sql);
        if ($result) {
            echo "Data Inserted Successfully";
        } else {
            die(pg_last_error($conn));
        }
    }
    ?>


</body>

</html>