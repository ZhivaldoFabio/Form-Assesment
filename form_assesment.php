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
            <hr width="100%">
        </div>
        <!-- ============================== FORM NYA DISINI ============================== -->
        <form class="form_assesment1" method="post">
            <div id="content1">
                <!-- ==================================================================================================== -->
                <div class="mb-3">
                    <label class="form-label">NIK</label>
                    <input type="text" name="nik" placeholder="Masukkan NIK" class="form-control" required>
                </div>


                <!-- ==================================================================================================== -->
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" placeholder="Masukkan Nama Lengkap" class="form-control" required>
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="option">
                        <div class="select-box">
                            <select class="form-select" name="gender" id="jenis_kelamin" required>
                                <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                                <option value="Laki-laki">Pria</option>
                                <option value="Perempuan">Wanita</option>
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
                        <input type="text" name="pob" placeholder="Masukkan Tempat Lahir" class="form-control" required>
                        <span class="input-group-text">Tanggal lahir</span>
                        <input type="date" name="dob" placeholder="Masukkan Tanggal Lahir" class="form-control" required>
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
                                <option value="SLTP">SLTP</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="">Tidak Sekolah</option>
                            </select>
                        </div>
                    </div>
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Status Relasi</label>
                    <div class="option">
                        <div class="select-box">
                            <select name="relation" id="relation" class="form-select">
                                <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Asal Rujukan</label>
                    <input type="text" name="asal_rujukan" placeholder="Masukkan asal rujukan" class="form-control">
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Apakah anda memiliki kesulitan MELIHAT meskipun sudah menggunakan kacamata?</label>
                    <div class="option">
                        <div class="select-box">
                            <select class="form-select" name="Asses melihat" id="Asses_melihat">
                                <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                                <option value="tidak kesulitan">Tidak,tidak Kesulitan</option>
                                <option value="sedikit kesulitan">Ya,sedikit kesulitan</option>
                                <option value="banyak kesulitan">Ya,banyak kesulitan</option>
                                <option value="tidak bisa">Tidak bisa sama sekali</option>
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
                                <option value="tidak kesulitan">Tidak,tidak Kesulitan</option>
                                <option value="sedikit kesulitan">Ya,sedikit kesulitan</option>
                                <option value="banyak kesulitan">Ya,banyak kesulitan</option>
                                <option value="tidak bisa">Tidak bisa sama sekali</option>
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
                                <option value="tidak kesulitan">Tidak,tidak Kesulitan</option>
                                <option value="sedikit kesulitan">Ya,sedikit kesulitan</option>
                                <option value="banyak kesulitan">Ya,banyak kesulitan</option>
                                <option value="tidak bisa">Tidak bisa sama sekali</option>
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
                                <option value="tidak kesulitan">Tidak,tidak Kesulitan</option>
                                <option value="sedikit kesulitan">Ya,sedikit kesulitan</option>
                                <option value="banyak kesulitan">Ya,banyak kesulitan</option>
                                <option value="tidak bisa">Tidak bisa sama sekali</option>
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
                                <option value="tidak kesulitan">Tidak,tidak Kesulitan</option>
                                <option value="sedikit kesulitan">Ya,sedikit kesulitan</option>
                                <option value="banyak kesulitan">Ya,banyak kesulitan</option>
                                <option value="tidak bisa">Tidak bisa sama sekali</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Diagnosis yang diketahui</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">F</span>
                        <input type="text" name="diagnose" placeholder="Masukkan Diagnosis" class="form-control">
                    </div>


                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Ada riwayat perilaku menyakiti diri sendiri / orang lain?</label>
                    <div class="form-check">
                        <input type="radio" name="menyakiti" class="form-check-input" value="">
                        <label class="form-check-label">
                            Ya
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="radio" name="menyakiti" class="form-check-input" value="">
                        <label class="form-check-label">
                            Tidak
                        </label>
                    </div>
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Ada riwayat menyendiri?</label>
                    <div class="form-check">
                        <input type="radio" name="menyendiri" class="form-check-input">
                        <label class="form-check-label">
                            Ya
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="radio" name="menyendiri" class="form-check-input">
                        <label class="form-check-label">
                            Tidak
                        </label>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Ada riwayat melarikan diri?</label>
                    <div class="form-check">
                        <input type="radio" name="melarikan" class="form-check-input">
                        <label class="form-check-label">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="melarikan" class="form-check-input">
                        <label class="form-check-label">
                            Tidak
                        </label>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Ada riwayat kecenderungan bunuh diri?</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Ucapan/Tulisan</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                        <label class="input-group-text" for="inputGroupSelect01">Perilaku</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Frekuensi kemunculan gejala</label>
                    <div class="option">
                        <div class="select-box">
                            <select class="form-select" name="Asses gejala" id="Asses_gejala">
                                <option class="pilihan" value="" disabled selected hidden>Pilihan</option>
                                <option value="Lebih dari 1 bulan">Lebih dari 1 bulan</option>
                                <option value="1-5 kali dalam sebulan">1-5 kali dalam sebulan</option>
                                <option value="Hampir setiap hari">Hampir setiap hari</option>
                                <option value="Tidak ada">Tidak ada</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Apakah mengkonsumsi obat?</label>
                    <div class="form-check">
                        <input type="radio" name="obat" class="form-check-input" value="1">
                        <label class="form-check-label">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="obat" class="form-check-input" value="0">
                        <label class="form-check-label">
                            Tidak
                        </label>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Frekuensi minum obat?</label>
                    <div class="form-check">
                        <input type="radio" name="frekuensi" class="form-check-input" value="Teratur">
                        <label class="form-check-label">
                            Teratur
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="frekuensi" class="form-check-input" value="Tidak teratur">
                        <label class="form-check-label">
                            Tidak teratur
                        </label>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label id="head2">Pengobatan dimana saja?</label>
                    <div id="content2">
                        <div class="form-check">
                            <input type="checkbox" name="pengobatan" class="form-check-input" value="Alternatif/orang pintar">
                            <label for="pengobatan" class="form-check-label">Alternatif/orang pintar</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="pengobatan" class="form-check-input" value="Puskesmas">
                            <label for="pengobatan" class="form-check-label">Puskesmas</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="pengobatan" class="form-check-input" value="Rumah Sakit">
                            <label for="pengobatan" class="form-check-label">Rumah Sakit</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="pengobatan" class="form-check-input" value="Belum pernah berobat">
                            <label for="pengobatan" class="form-check-label">Belum pernah berobat</label>
                        </div>
                    </div>
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Berapa kali masuk Rumah Sakit?</label>
                    <input type="number" name="rumahsakit" placeholder="0" class="form-control">
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Permasalahan/Kesulitan saat ini</label>
                    <input type="text" name="permasalahan" placeholder="Masukkan Permasalahan / Kesulitan" class="form-control">
                </div>


                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Apakah bekerja?</label>
                    <div class="form-check">
                        <input type="radio" name="bekerja" class="form-check-input" value="1">
                        <label class="form-check-label">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="bekerja" class="form-check-input" value="0">
                        <label class="form-check-label">
                            Tidak
                        </label>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Apa Pekerjaan Pokoknya?</label>
                    <input type="text" name="pekerjaan_pokok" placeholder="Masukkan Pekerjaan" class="form-control">
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Apakah memiliki pekerjaan sampingan?</label>
                    <div class="form-check">
                        <input type="radio" name="sampingan" class="form-check-input" value="1">
                        <label class="form-check-label">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="sampingan" class="form-check-input" value="0">
                        <label class="form-check-label">
                            Tidak
                        </label>
                    </div>
                </div>

                <!-- ==================================================================================================== -->

                <div class="mb-3">
                    <label class="form-label">Penghasilan perbulan?</label>
                    <div class="form-check">
                        <input type="radio" name="penghasilan" class="form-check-input" value="Lebih dari 1 juta">
                        <label class="form-check-label"> ≤ 1 juta </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="penghasilan" class="form-check-input" value="Kurang dari 1 juta">
                        <label class="form-check-label"> > 1 juta </label>
                    </div>

                    <!-- ==================================================================================================== -->

                    <div class="mb-3">
                        <label class="form-label">Berapa jumlah anggota di rumah?</label>
                        <input type="text" name="jumlah_anggota" placeholder="Masukkan Jumlah Anggota" class="form-control">
                    </div>


                    <!-- ==================================================================================================== -->

                    <div class="mb-3">
                        <p>Apa saja aset yang dimiliki keluarga? </p>
                        <div class="form-check">
                            <input type="checkbox" name="aset" class="form-check-input" value="Kendaraan">
                            <label for="aset">Motor/mobil/sepeda</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="aset" class="form-check-input" value="Ternak">
                            <label for="aset">Ternak</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="aset" class="form-check-input" value="Tanah, Toko">
                            <label for="aset">Warung/Toko/Tabungan</label>
                        </div>
                    </div>

                    <!-- ==================================================================================================== -->

                    <div class="mb-3">
                        <p>Apakah mendapat bantuan? </p>
                        <div class="form-check">
                            <input type="checkbox" name="bantuan" class="form-check-input" value="Pemerintah"><label for="bantuan">Pemerintah</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="bantuan" class="form-check-input" value="Swasta"><label for="bantuan">Swasta</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="bantuan" class="form-check-input" value="Orang Lain"><label for="bantuan">Orang lain</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="bantuan" class="form-check-input" value="Tidak dapat"><label for="bantuan" class="form-check-label">Tidak dapat</label>
                        </div>
                    </div>

                    <!-- ==================================================================================================== -->

                    <div class="mb-3">
                        <p>Apakah memiliki asuransi? </p>
                        <div class="form-check">
                            <input type="checkbox" name="asuransi" class="form-check-input" value="KIS"><label for="asuransi">KIS</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="asuransi" class="form-check-input" value="BPJS MANDIRI"><label for="asuransi">BPJS MANDIRI</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="asuransi" class="form-check-input" value="Asuransi Lainnya"><label for="asuransi">Asuransi lainnya</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="asuransi" class="form-check-input" value="Tidak memiliki"><label for="asuransi" class="form-check-label">Tidak memiliki</label>
                        </div>
                    </div>

                    <!-- ==================================================================================================== -->

                    <div class="mb-3">
                        <p>Apakah tergabung dalam komunitas/ kelompok kerja? </p>
                        <div class="form-check">
                            <input type="checkbox" name="komunitas" class="form-check-input" value="Kelompok tani"><label for="komunitas">Kelompok Tani</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="komunitas" class="form-check-input" value="Arisan"><label for="komunitas">Arisan</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="komunitas" class="form-check-input" value="Koperasi"><label for="komunitas">Koperasi</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="komunitas" class="form-check-input" value="Komunitas Lainnya"><label for="komunitas">Komunitas lainnya</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="komunitas" class="form-check-input" value="Tidak tergabung"><label for="komunitas" class="form-check-label">Tidak tergabung</label>
                        </div>
                    </div>

                    <!-- ==================================================================================================== -->

                    <div class="mb-3">
                        <label class="form-label">Dukungan yang sudah diberikan pada warga dampingan</label>
                        <input type="text" name="dukungan" placeholder="Jenis Dukungan" class="form-control">
                    </div>


                    <!-- ==================================================================================================== -->

                    <div class="mb-3">
                        <p>Apakah warga dampingan memiliki KTP? </p>
                        <div class="form-check">
                            <input type="radio" name="ktp" class="form-check-input" value="1">
                            <label class="form-check-label">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="ktp" class="form-check-input" value="0">
                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
                    </div>

                    <!-- ==================================================================================================== -->

                    <div class="mb-3">
                        <p>Apakah tercantum di Kartu Keluarga? </p>
                        <div class="form-check">
                            <input type="radio" name="kk" class="form-check-input" value="1">
                            <label class="form-check-label">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="kk" class="form-check-input" value="0">
                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
                    </div>

                    <!-- ==================================================================================================== -->

                    <div class="mb-3">
                        <p>Apakah warga dampingan pernah bekerja? </p>
                        <div class="form-check">
                            <input type="radio" name="pernahwork" class="form-check-input" value="Pernah">
                            <label class="form-check-label">
                                Pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="pernahwork" class="form-check-input" value="Belum">
                            <label class="form-check-label">
                                Belum
                            </label>
                        </div>
                    </div>

                    <!-- ==================================================================================================== -->

                    <div class="mb-3">
                        <p>Apakah pernah mendapatkan gaji? </p>
                        <div class="form-check">
                            <input type="radio" name="gaji" class="form-check-input" value="Pernah">
                            <label class="form-check-label">
                                Pernah
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="gaji" class="form-check-input" value="Belum">
                            <label class="form-check-label">
                                Belum
                            </label>
                        </div>
                    </div>

                    <!-- ==================================================================================================== -->

                    <div class="mb-3">
                        <label class="form-label">Rencana keluarga untuk warga dampingan kedepannya:</label>
                        <div class="mb-3">
                            <label class="form-label">Medis</label>
                            <input type="text" name="medis" placeholder="Masukkan Rencana Medis" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ADL</label>
                            <input type="text" name="adl" placeholder="Masukkan Rencana ADL" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ekonomi</label>
                            <input type="text" name="ekonomi" placeholder="Masukkan Rencana Ekonomi" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sosial</label>
                            <input type="text" name="sosial" placeholder="Masukkan Rencana Sosial" class="form-control">
                        </div>
                    </div>
                    <p>Catatan:</p>
                    <p>Medis: rutin minum obat, rutin kontrol, terapi, konsultasi/konseling</p>
                    <p>Activity Daily Living: dilatih mandi, makan minum, kebersihan diri/lingkungan agar mandiri</p>
                    <p>Ekonomi: dilibatkan kegiatan produktif, melakukan pekerjaan yang menghasilkan uang/tidak</p>
                    <p>Sosial: dilibatkan kegiatan sosial, kerja bakti, kegiatan refreshing</p>

                    <!-- ==================================================================================================== -->

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" name="submit">Submit</button>
                    </div>


                </div>
        </form>

    </div>
    <?php
    include 'connection.php';
    if (isset($_POST['submit'])) {
        // $ = $_POST[''];
        $name = $_POST['name'] ?? null;
        $gender = $_POST['gender'] ?? null;
        $pob = $_POST['pob'] ?? null;
        $dob = $_POST['dob'] ?? null;
        $address = $_POST['address'] ?? null;
        $religion = $_POST['agama'] ?? null;
        $education = $_POST['Pendidikan'] ?? null;
        $status = $_POST['relation'] ?? null;
        // $melihat = $_POST['Asses melihat'];
        // $mendengar = $_POST['Asses mendengar'];
        // $berjalan = $_POST['Asses berjalan'];
        // $rawat = $_POST['Asses rawat'];
        // $komunikasi = $_POST['Asses komunikasi'];
        $diagnose = $_POST['diagnose'] ?? null;
        $menyakiti = $_POST['menyakiti'] ?? null;
        $menyendiri = $_POST['menyendiri'] ?? null;
        $melarikan = $_POST['melarikan'] ?? null;
        // $gejala = $_POST['Asses gejala'];
        $obat = $_POST['obat'] ?? null;
        // $frekuensi = $_POST['frekuensi'];
        $pengobatan = $_POST['pengobatan'] ?? null;
        $rumahsakit = $_POST['rumahsakit'] ?? null;
        $permasalahan = $_POST['permasalahan'] ?? null;
        $does_work = $_POST['bekerja'] ?? null;
        $main_job = $_POST['pekerjaan_pokok'] ?? null;
        $alt_job = $_POST['sampingan'] ?? null;
        $income = $_POST['penghasilan'] ?? null;
        $fam_member = $_POST['jumlah_anggota'] ?? null;
        $assets = $_POST['aset'] ?? null;
        $bantuan = $_POST['bantuan'] ?? null;
        $asuransi = $_POST['asuransi'] ?? null;
        $komunitas = $_POST['komunitas'] ?? null;
        $dukungan = $_POST['dukungan'] ?? null;
        $ktp = $_POST['ktp'] ?? null;
        $kk = $_POST['kk'] ?? null;
        $pernahwork = $_POST['pernahwork'] ?? null;
        $gaji = $_POST['gaji'] ?? null;
        $medis = $_POST['medis'] ?? null;
        $adl = $_POST['adl'] ?? null;
        $economy = $_POST['ekonomi'] ?? null;
        $social = $_POST['sosial'] ?? null;
        $nik = $_POST['nik'] ?? null;
        $source = $_POST['asal_rujukan'] ?? null;
        $admission = date('Y-M-D');
        $release = null;
        $daycare = $_POST['daycare'] ?? null;
        $main_after = $_POST['pokok_sesudah'] ?? null;
        $alt_after = $_POST['sampingan_sesudah'] ?? null;

        $sql = "INSERT INTO warga_dampingan
        (nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, agama, pendidikan, status, bekerja, perkerjaan_pokok, perkerjaan_sampingan, penghasilan, anggota_keluarga, aset_keluarga, adl, ekonomi, sosial, nik, asal_rujukan, tanggal_masuk, tanggal_keluar, daycare_undergoes, pekerjaan_pokok_sesudah, pekerjaan_sampingan_sesudah)
        VALUES ('$name', '$gender', '$pob', '$dob', '$address', '$religion', '$education', 'Belum Kawin', NULL, '-', NULL, '$income', '$fam_member', '$assets', '$adl', '$economy', '$social', '$nik', '$source', NULL, NULL, 'Daycare', NULL, NULL);";

        $result = pg_query($conn, $sql);
        if ($result) {
            echo "<script> location.href='HomePage.html'; </script>";
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