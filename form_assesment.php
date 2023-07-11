<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Assesment 1</title>
    <!-- <link rel="stylesheet" href="stylesheet.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- ============================== JUDULNYA DISINI ============================== -->
        <div class="heading">
            <h1 class="title display-3">Form Assesment</h1>
        </div>
        <!-- ============================== FORM NYA DISINI ============================== -->
        <form class="form_assesment1" method="post">
            <div id="content1">
                <!-- ==================================================================================================== -->
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" placeholder="Masukkan Nama Lengkap" class="form-control">
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="option">
                        <div class="select-box">
                            <select class="form-select" name="gender" id="jenis_kelamin">
                                <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Tempat, Tanggal Lahir</label>
                    <div class="input-group">
                        <span class="input-group-text">Tempat</span>
                        <input type="text" name="pob" placeholder="Masukkan Tempat Lahir" class="form-control">
                        <span class="input-group-text">Tanggal lahir</span>
                        <input type="date" name="dob" placeholder="Masukkan Tanggal Lahir" class="form-control">
                    </div>

                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="address" placeholder="Masukkan Alamat" class="form-control">
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <div class="option">
                        <div class="select-box">
                            <select class="form-select" name="agama" id="agama">
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
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Pendidikan</label>
                    <div class="option">
                        <div class="select-box">
                            <select class="form-select" name="Pendidikan" id="pendidikan">
                                <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA/SMK</option>
                                <option value="Kuliah">Kuliah</option>
                                <option value="">Tidak Sekolah</option>
                            </select>
                        </div>
                    </div>
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Status Relasi</label>
                    <input type="text" name="relation" placeholder="Masukkan Status Relasi" class="form-control">
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Apakah anda memiliki kesulitan MELIHAT meskipun sudah menggunakan kacamata?</label>
                    <div class="option">
                        <div class="select-box">
                            <select class="form-select" name="Asses melihat" id="Asses_melihat">
                                <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                                <option value="Bisa">Tidak,tidak Kesulitan</option>
                                <option value="Sulit">Ya,sedikit kesulitan</option>
                                <option value="Banget">Ya,banyak kesulitan</option>
                                <option value="Blas gabisa">Tidak bisa sama sekali</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Apakah anda memiliki kesulitan MENDENGAR meskipun sudah menggunakan alat bantu dengar?</label>
                    <div class="option">
                        <div class="select-box">
                            <select class="form-select" name="Asses mendengar" id="Asses_mendengar">
                                <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                                <option value="Bisa">Tidak,tidak Kesulitan</option>
                                <option value="Sulit">Ya,sedikit kesulitan</option>
                                <option value="Banget">Ya,banyak kesulitan</option>
                                <option value="Blas gabisa">Tidak bisa sama sekali</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Apakah anda memiliki kesulitan BERJALAN atau naik turun tangga?</label>
                    <div class="option">
                        <div class="select-box">
                            <select class="form-select" name="Asses berjalan" id="Asses_berjalan">
                                <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                                <option value="Bisa">Tidak,tidak Kesulitan</option>
                                <option value="Sulit">Ya,sedikit kesulitan</option>
                                <option value="Banget">Ya,banyak kesulitan</option>
                                <option value="Blas gabisa">Tidak bisa sama sekali</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Apakah anda memiliki kesulitan dengan RAWAT DIRI seperti mencuci atau berpakaian?</label>
                    <div class="option">
                        <div class="select-box">
                            <select class="form-select" name="Asses rawat" id="Asses_rawat">
                                <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                                <option value="Bisa">Tidak,tidak Kesulitan</option>
                                <option value="Sulit">Ya,sedikit kesulitan</option>
                                <option value="Banget">Ya,banyak kesulitan</option>
                                <option value="Blas gabisa">Tidak bisa sama sekali</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Memakai bahasa keseharian apakah anda memiliki kesulitan BERKOMUNIKASI, paham atau dipahami lawan bicara?</label>
                    <div class="option">
                        <div class="select-box">
                            <select class="form-select" name="Asses komunikasi" id="Asses_komunikasi">
                                <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                                <option value="Bisa">Tidak,tidak Kesulitan</option>
                                <option value="Sulit">Ya,sedikit kesulitan</option>
                                <option value="Banget">Ya,banyak kesulitan</option>
                                <option value="Blas gabisa">Tidak bisa sama sekali</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Diagnosis yang diketahui</label>
                    <input type="text" name="relation" placeholder="Masukkan Diagnosis" class="form-control">
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Ada riwayat perilaku menyakiti diri sendiri / orang lain?</label>
                    <div class="form-check">
                        <input type="radio" name="menyakiti" class="form-check-input">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Ya
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="radio" name="menyakiti" class="form-check-input">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Tidak
                        </label>
                    </div>
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Ada riwayat menyendiri?</label>
                    <input type="radio" name="menyendiri" class="larger">&nbsp&nbsp&nbspYa
                    <input type="radio" name="menyendiri" class="larger">&nbsp&nbsp&nbspTidak
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Ada riwayat melarikan diri?</label>
                    <input type="radio" name="melarikan" class="larger">&nbsp&nbsp&nbspYa
                    <input type="radio" name="melarikan" class="larger">&nbsp&nbsp&nbspTidak
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Ada riwayat kecenderungan bunuh diri?</label>
                    <div class="option">
                        <div class="select-box">
                            <select class="form-select" name="Asses bunuhdiri" id="Asses_bunuhdiri">
                                <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                                <option value="ucap">Dalam ucapan/tulisan</option>
                                <option value="perilaku">Dalam perilaku</option>
                                <option value="both">Keduanya</option>
                                <option value="no">Tidak ada</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Frekuensi kemunculan gejala</label>
                    <div class="option">
                        <div class="select-box">
                            <select class="form-select" name="Asses gejala" id="Asses_gejala">
                                <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                                <option value="ucap">Lebih dari 1 bulan</option>
                                <option value="perilaku">1-5 kali dalam sebulan</option>
                                <option value="both">Hampir setiap hari</option>
                                <option value="no">Tidak ada</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Apakah mengkonsumsi obat?</label>
                    <input type="radio" name="obat" class="larger">&nbsp&nbsp&nbspYa
                    <input type="radio" name="obat" class="larger">&nbsp&nbsp&nbspTidak
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Frekuensi minum obat?</label>
                    <input type="radio" name="frekuensi" class="larger">&nbsp&nbsp&nbspTeratur
                    <input type="radio" name="frekuensi" class="larger">&nbsp&nbsp&nbspTidak teratur
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label id="head2">Pengobatan dimana saja?</label>
                    <div id="content2">
                        <input type="checkbox" name="pengobatan" class="larger"><label for="pengobatan_1">&nbsp&nbsp&nbspAlternatif/orang pintar</label>
                        <input type="checkbox" name="pengobatan" class="larger"><label for="pengobatan_2">&nbsp&nbsp&nbspPuskesmas</label>
                        <input type="checkbox" name="pengobatan" class="larger"><label for="pengobatan_3">&nbsp&nbsp&nbspRummah Sakit</label>
                        <input type="checkbox" name="pengobatan" class="larger"><label for="pengobatan_4">&nbsp&nbsp&nbspBelum pernah berobat</label>
                    </div>
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Berapa kali masuk Rumah Sakit?</label>
                    <input type="text" name="rumahsakit" placeholder="Masukkan Jawaban" class="form-control">
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Permasalahan/Kesulitan saat ini</label>
                    <input type="text" name="permasalahan" placeholder="Masukkan Permasalahan" class="form-control">
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Apakah bekerja?</label>
                    <input type="radio" name="bekerja_1" class="larger">&nbsp&nbsp&nbspYa
                    <input type="radio" name="bekerja_2" class="larger">&nbsp&nbsp&nbspTidak
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Apa Pekerjaan Pokoknya?</label>
                    <input type="text" name="pekerjaan_pokok" placeholder="Masukkan Pekerjaan" class="form-control">
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Apakah memiliki pekerjaan sampingan?</label>
                    <input type="radio" name="sampingan_1" class="larger">&nbsp&nbsp&nbspYa
                    <input type="radio" name="sampingan_2" class="larger">&nbsp&nbsp&nbspTidak
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Penghasilan perbulan?</label>
                    <input type="radio" name="penghasilan_1" class="larger">&nbsp&nbsp&nbsp≤ 1 juta
                    <input type="radio" name="penghasilan_2" class="larger">&nbsp&nbsp&nbsp> 1 juta
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Berapa jumlah anggota di rumah? Siapa saja yang bekerja?</label>
                    <input type="text" name="jumlah_anggota" placeholder="Masukkan Jumlah Anggota" class="form-control">
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <p>Apa saja aset yang dimiliki keluarga? </p>
                    <input type="checkbox" name="aset_1" class="larger"><label for="aset_1">&nbsp&nbsp&nbspMotor/mobil/sepeda</label>
                    <input type="checkbox" name="aset_2" class="larger"><label for="aset_2">&nbsp&nbsp&nbspTernak</label>
                    <input type="checkbox" name="aset_3" class="larger"><label for="aset_3">&nbsp&nbsp&nbspWarung/Toko/Tabungan</label>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <p>Apakah mendapat bantuan? </p>
                    <input type="checkbox" name="bantuan_1" class="larger"><label for="bantuan_1">&nbsp&nbsp&nbspPemerintah</label>
                    <input type="checkbox" name="bantuan_2" class="larger"><label for="bantuan_2">&nbsp&nbsp&nbspSwasta</label>
                    <input type="checkbox" name="bantuan_3" class="larger"><label for="bantuan_3">&nbsp&nbsp&nbspOrang lain</label>
                    <input type="checkbox" name="bantuan_4" class="larger"><label for="bantuan_4">&nbsp&nbsp&nbspTidak dapat</label>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <p>Apakah memiliki asuransi? </p>
                    <input type="checkbox" name="asuransi_1" class="larger"><label for="asuransi_1">&nbsp&nbsp&nbspKIS</label>
                    <input type="checkbox" name="asuransi_2" class="larger"><label for="asuransi_2">&nbsp&nbsp&nbspBPJS MANDIRI</label>
                    <input type="checkbox" name="asuransi_3" class="larger"><label for="asuransi_3">&nbsp&nbsp&nbspAsuransi lainnya</label>
                    <input type="checkbox" name="asuransi_4" class="larger"><label for="asuransi_4">&nbsp&nbsp&nbspTidak memiliki</label>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <p>Apakah tergabung dalam komunitas/ kelompok kerja? </p>
                    <input type="checkbox" name="komunitas_1" class="larger"><label for="komunitas_1">&nbsp&nbsp&nbspKelompok Tani</label>
                    <input type="checkbox" name="komunitas_2" class="larger"><label for="komunitas_2">&nbsp&nbsp&nbspArisan</label>
                    <input type="checkbox" name="komunitas_3" class="larger"><label for="komunitas_3">&nbsp&nbsp&nbspKoperasi</label>
                    <input type="checkbox" name="komunitas_4" class="larger"><label for="komunitas_4">&nbsp&nbsp&nbspKomunitas lainnya</label>
                    <input type="checkbox" name="komunitas_5" class="larger"><label for="komunitas_5">&nbsp&nbsp&nbspTidak tergabung</label>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Dukungan yang sudah diberikan pada warga dampingan</label>
                    <input type="text" name="dukungan" placeholder="Jenis Dukungan" class="form-control">
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <p>Apakah warga dampingan memiliki KTP? </p>
                    <input type="radio" name="ktp_1" class="larger">&nbsp&nbsp&nbspYa
                    <input type="radio" name="ktp_2" class="larger">&nbsp&nbsp&nbspTidak
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <p>Apakah tercantum di Kartu Keluarga? </p>
                    <input type="radio" name="kk_1" class="larger">&nbsp&nbsp&nbspYa
                    <input type="radio" name="kk_2" class="larger">&nbsp&nbsp&nbspTidak
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <p>Apakah warga dampingan pernah bekerja? </p>
                    <input type="radio" name="pernahwork_1" class="larger">&nbsp&nbsp&nbspPernah
                    <input type="radio" name="pernahwork_2" class="larger">&nbsp&nbsp&nbspBelum
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <p>Apakah pernah mendapatkan gaji? </p>
                    <input type="radio" name="gaji_1" class="larger">&nbsp&nbsp&nbspPernah
                    <input type="radio" name="gaji_2" class="larger">&nbsp&nbsp&nbspBelum
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Rencana keluarga untuk warga dampingan kedepannya:</label>
                    <label class="form-label">Medis</label>
                    <input type="text" name="medis" placeholder="Masukkan Rencana Medis" class="form-control">
                    <label class="form-label">ADL</label>
                    <input type="text" name="adl" placeholder="Masukkan Rencana ADL" class="form-control">
                    <label class="form-label">Ekonomi</label>
                    <input type="text" name="ekonomi" placeholder="Masukkan Rencana Ekonomi" class="form-control">
                    <label class="form-label">Sosial</label>
                    <input type="text" name="sosial" placeholder="Masukkan Rencana Sosial" class="form-control">
                </div>


                <!-- ==================================================================================================== -->

                <div class="d-grid gap-2">
                    <button class="btn btn-primary" name="submit">Submit</button>
                </div>

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
        // $ = $_POST[''];
        $name = $_POST['name'];
        $gender = $_POST['Jenis Kelamin'];
        $pob = $_POST[''];
        $dob = $_POST[''];
        $address = $_POST[''];
        $religion = $_POST[''];
        $education = $_POST[''];
        $status = $_POST[''];
        $does_work = $_POST[''];
        $main_job = $_POST[''];
        $alt_job = $_POST[''];
        $income = $_POST[''];
        $fam_member = $_POST[''];
        $assets = $_POST[''];
        $adl = $_POST[''];
        $economy = $_POST[''];
        $social = $_POST[''];
        $nik = $_POST[''];
        $source = $_POST[''];
        $admission = $_POST[''];
        $release = $_POST[''];
        $daycare = $_POST[''];
        $job_before = $_POST[''];
        $job_after = $_POST[''];

        $sql = "INSERT INTO warga_dampingan
        (nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, agama, pendidikan, status, bekerja, perkerjaan_pokok, perkerjaan_sampingan, penghasilan, anggota_keluarga, aset_keluarga, adl, ekonomi, sosial, nik, asal_rujukan, tanggal_masuk, tanggal_keluar, daycare_undergoes, pekerjaan_pokok_sesudah, pekerjaan_sampingan_sesudah)
        VALUES('$name', '$gender', 'Godean', '$dob', 'address', '-', 'SMA', 'Belum Kawin', NULL, '-', NULL, '-', '-', '-', '-', '-', '-', '3175071004940002', 'RSJ GRHASIA', '2022-05-21', NULL, 'Daycare', NULL, NULL);
        ";
        $result = pg_query($conn, $sql);
        if ($result) {
            echo "Data Inserted Successfully";
        } else {
            die(pg_last_error($conn));
        }
    }
    ?>
    <!-- 
INSERT INTO public.warga_dampingan
(id_wd, nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, agama, pendidikan, "status", bekerja, perkerjaan_pokok, perkerjaan_sampingan, penghasilan, anggota_keluarga, aset_keluarga, adl, ekonomi, sosial, nik, asal_rujukan, tanggal_masuk, tanggal_keluar, daycare_undergoes, pekerjaan_pokok_sesudah, pekerjaan_sampingan_sesudah)
VALUES(29, 'Sulistyo', 'Laki-laki', 'Yogyakarta', '1972-11-10', 'Sudagaran; Cilacap; Jawa Tengah; Indonesia', '-', '-', 'Belum Kawin', false, '-', false, '-', '-', '-', '-', '-', '-', '3471011611720001', 'RSJ GRHASIA', '2022-09-01', NULL, 'Daycare', NULL, NULL);
 -->

</body>

</html>