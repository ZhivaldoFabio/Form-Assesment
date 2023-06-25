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
        <div class="heading">
            <h1 class="title">Form Assesment</h1>
        </div>
        <form class="form_assesment1" action="" method="POST">
            <div id="content1">
                <label>Nama Lengkap</label><br>
                <input type="text" name="name" placeholder="Masukkan Nama Lengkap" class="input-text"><br>
                <br>

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
                <label>Tempat, Tanggal Lahir</label><br>
                <input type="text" name="dob" placeholder="Masukkan Tempat, Tanggal Lahir" class="input-text"><br>
                <br>

                <label>Alamat</label><br>
                <input type="text" name="address" placeholder="Masukkan Alamat" class="input-text"><br>
                <br>

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
                <label>Diagnosis yang diketahui</label><br>
                <input type="text" name="relation" placeholder="Masukkan Diagnosis" class="input-text"><br>
                <br>
                <label>Ada riwayat perilaku menyakiti diri sendiri / orang lain?</label><br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspTidak<br><br>
                <label>Ada riwayat menyendiri?</label><br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspTidak<br><br>
                <label>Ada riwayat melarikan diri?</label><br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspTidak<br><br>

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
                <label>Apakah mengkonsumsi obat?</label><br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspTidak<br><br>
                <label>Frekuensi minum obat?</label><br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspTeratur<br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspTidak teratur<br><br>
                <label id="head2">Pengobatan dimana saja?</label><br>
                <div id="content2">
                    <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspAlternatif/orang pintar</label><br><br>
                    <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspPuskesmas</label><br><br>
                    <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspRummah Sakit</label><br><br>
                    <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspBelum pernah berobat</label><br><br>
                </div>


                <label>Berapa kali masuk Rumah Sakit?</label><br>
                <input type="text" name="address" placeholder="Masukkan hasil" class="input-text"><br>
                <br>

                <label>Permasalahan/Kesulitan saat ini</label><br>
                <input type="text" name="address" placeholder="Masukkan hasil" class="input-text"><br>
                <br>
                <label>Apakah bekerja?</label><br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspTidak<br><br>

                <label>Apa Pekerjaan Pokoknya?</label><br>
                <input type="text" name="address" placeholder="Masukkan hasil" class="input-text"><br>
                <br>
                <label>Apakah memiliki pekerjaan sampingan?</label><br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspTidak<br><br>
                <label>Penghasilan perbulan?</label><br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbsp≤ 1 juta<br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbsp> 1 juta<br><br>
                <label>Berapa jumlah anggota di rumah? Siapa saja yang bekerja?</label><br>
                <input type="text" name="address" placeholder="Masukkan hasil" class="input-text">
                <br>
                <p>Apa saja aset yang dimiliki keluarga? </p>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspMotor/mobil/sepeda</label><br><br>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspTernak</label><br><br>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspWarung/Toko/Tabungan</label><br>

                <p>Apakah mendapat bantuan? </p>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspPemerintah</label><br><br>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspSwasta</label><br><br>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspOrang lain</label><br><br>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspTidak dapat</label><br>

                <p>Apakah memiliki asuransi? </p>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspKIS</label><br><br>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspBPJS MANDIRI</label><br><br>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspAsuransi lainnya</label><br><br>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspTidak memiliki</label><br>

                <p>Apakah tergabung dalam komunitas/ kelompok kerja? </p>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspKelompok Tani</label><br><br>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspArisan</label><br><br>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspKoperasi</label><br><br>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspKomunitas lainnya</label><br><br>
                <input type="checkbox" name="checkbox" class="larger"><label>&nbsp&nbsp&nbspTidak tergabung</label><br><br>

                <label>Dukungan yang sudah diberikan pada warga dampingan</label><br>
                <input type="text" name="address" placeholder="Masukkan hasil" class="input-text">
                <br>
                <p>Apakah warga dampingan memiliki KTP? </p>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspTidak<br>
                <p>Apakah tercantum di Kartu Keluarga? </p>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspYa<br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspTidak<br>
                <p>Apakah warga dampingan pernah bekerja? </p>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspPernah<br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspBelum<br><br>
                <p>Apakah pernah mendapatkan gaji? </p>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspPernah<br>
                <input type="radio" name="radio" class="larger">&nbsp&nbsp&nbspBelum<br><br>
                <label>Rencana keluarga untuk warga dampingan kedepannya:</label><br>
                <label>Medis</label><br>
                <input type="text" name="address" placeholder="Masukkan hasil" class="input-text"><br>

                <label>ADL</label><br>
                <input type="text" name="address" placeholder="Masukkan hasil" class="input-text">
                <label>Ekonomi</label><br>
                <input type="text" name="address" placeholder="Masukkan hasil" class="input-text">
                <label>Sosial</label><br>
                <input type="text" name="address" placeholder="Masukkan hasil" class="input-text">
                <br>
                <input type="submit" value="Submit">
                <p>Catatan:</p>
                <p>Medis: rutin minum obat, rutin kontrol, terapi, konsultasi/konseling</p>
                <p>Activity Daily Living: dilatih mandi, makan minum, kebersihan diri/lingkungan agar mandiri</p>
                <p>Ekonomi: dilibatkan kegiatan produktif, melakukan pekerjaan yang menghasilkan uang/tidak</p>
                <p>Sosial: dilibatkan kegiatan sosial, kerja bakti, kegiatan refreshing</p>

        </form>

    </div>
    <?php

    ?>


</body>

</html>