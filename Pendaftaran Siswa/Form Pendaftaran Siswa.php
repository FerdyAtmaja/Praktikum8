<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Form Pendaftaran Siswa Baru</title>
    <style>
    .warning {color: #FF0000;};
    </style>
</head>
<body>

<div class="row">
<div class="d-flex justify-content-center">
<div class="col-md-10">
    <h1 class="text-center">Form Pendaftaran Siswa</h1>
<div class="card">
<form action="insertDaftarAct.php" method="post">
    <div class="card-header">
    <div class="form-group row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-10">
            <input type="date" name="tanggal" class="form-control" id="tanggal"><br>
        </div>
    </div>

    <div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            1. REGISTRASI PESERTA DIDIK
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
            
            <div class="form-group row">
                <label for="jenisPendaftaran" class="col-sm-2 col-form-label" style="font-size: 18px;">Jenis
                    Pendaftaran</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_pendaftaran"
                            id="inlineRadio1" value="Siswa Baru">
                        <label class="form-check-label" for="inlineRadio1">Siswa Baru</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_pendaftaran"
                            id="inlineRadio2" value="Pindahan">
                        <label class="form-check-label" for="inlineRadio2">Pindahan</label>
                    </div>
                </div>
            </div>

        <div class="form-group row">
            <label for="tanggal_masuk_sekolah" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
        <div class="col-sm-10">
            <input type="date" name="tanggal_masuk_sekolah" class="form-control" id="tanggal_masuk_sekolah"><br>
        </div>
        </div>

            <div class="form-group row">
            <label for="nis" class="col-sm-2 col-form-label"
                style="font-size: 18px;">NIS</label>
            <div class="col-sm-10">
                <input type="text" name="nis" class="form-control" id="nis" placeholder="Masukan NIS">
            </div>
        </div>

        <div class="form-group row">
            <label for="no_peserta_ujian" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Nomor Peserta Ujian</label>
            <div class="col-sm-10">
                <input type="text" name="no_peserta_ujian" class="form-control" id="no_peserta_ujian" placeholder="Nomor Peserta Ujian">
            </div>
        </div>

        <div class="form-group row">
            <label for="no_skhun" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Nomor Seri SKHUN</label>
            <div class="col-sm-10">
                <input type="text" name="no_skhun" class="form-control" id="no_skhun" placeholder="No. SKHUN">
            </div>
        </div>

        <div class="form-group row">
            <label for="no_ijazah" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Nomor Seri Ijazah</label>
            <div class="col-sm-10">
                <input type="text" name="no_ijazah" class="form-control" id="no_ijazah" placeholder="No. Ijazah">
            </div>
        </div>

        <div class="form-group row">
            <label for="hobi" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Hobi</label>
            <div class="col-sm-10">
                <input type="text" name="hobi" class="form-control" id="hobi" placeholder="Hobi">
            </div>
        </div>

            <div class="form-group row">
                <label for="cita2" class="col-sm-2 col-form-label"
                    style="font-size: 18px;">Cita-Cita</label>
                <div class="col-sm-10">
                    <select class="form-control" name="cita2">
                        <option>Pilih Cita-Cita Anda</option>
                        <option value="PNS">PNS</option>
                        <option value="TNI / POLRI">TNI/ POLRI</option>
                        <option value="Guru / Dosen">Guru/ Dosen</option>
                        <option value="Dokter">Dokter</option>
                        <option value="Politikus">Politikus</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Seni / Lukis / Artis / Sejenisnya">Seni/ Lukis/ Artis/ Sejenisnya
                        </option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>

            </form>
        </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            2. DATA PRIBADI
        </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            
        <div class="form-group row">
            <label for="nama_siswa" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" placeholder="Nama Lengkap">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="jenisPendaftaran" class="col-sm-2 col-form-label" style="font-size: 18px;">Jenis
                Kelamin</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1"
                            value="Laki-laki">
                            <label class="form-check-label" for="inlineRadio1"><i class="fa fa-male" aria-hidden="true"></i> Laki-laki </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2"
                            value="Perempuan">
                            <label class="form-check-label" for="inlineRadio2"><i class="fa fa-female" aria-hidden="true"></i> Perempuan</label>
                        </div>
            <label for="staticEmail" class="col-sm-2 col-form-label"> &nbsp;</label>
            </div>
        </div>

        <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label"
                style="font-size: 18px;">NISN</label>
            <div class="col-sm-10">
                <input type="text" name="nisn" class="form-control" id="nis" placeholder="Masukkan NISN">
            </div>
        </div>
    
        <div class="form-group row">
            <label for="nik" class="col-sm-2 col-form-label"
                style="font-size: 18px;">NIK</label>
            <div class="col-sm-10">
                <input type="text" name="nik" class="form-control" id="nis" placeholder="Masukkan NIK">
            </div>
        </div>

        <div class="form-group row">
            <label for="tempat_lahir" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Tempat Lahir</label>
            <div class="col-sm-10">
                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat lahir">
            </div>
        </div>

        <div class="form-group row">
            <label for="tanggal_lahir" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" >
            </div>
        </div>

        <div class="form-group row">
            <label for="agama" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Agama</label>
            <div class="col-sm-3">
                <select class="form-control" name="agama">
                    <option>Pilih...</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen/ Protestan">Kristen / Protestan</option>
                    <option value="Khatolik">Khatolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Khong Hu Chu">Khong Hu Chu</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label"
            style="font-size: 18px;">Alamat</label>
        <div class="col-sm-10">
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda">
        </div>
        </div>
        
        <div class="form-group row">
        <label for="no_hp" class="col-sm-2 col-form-label"
            style="font-size: 18px;">Nomor HP</label>
        <div class="col-sm-10">
            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Masukkan No. HP">
        </div>
        </div>

        <div class="form-group row">
            <label for="no_telepon" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Nomor Telepon</label>
            <div class="col-sm-10">
                <input type="text" name="no_telepon" class="form-control" id="no_telepon" placeholder="Masukkan No. Telepon">
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Email</label>
            <div class="col-sm-10">
                <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email anda">
            </div>
        </div>

        <div class="form-group row">
            <label for="kewarganegaraan" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Kewarganegaraan</label>
            <div class="col-sm-10">
                <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" placeholder="Kewarganegaraan">
            </div>
        </div>

        </div>
        </div>
    </div>

    

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            3. DATA AYAH KANDUNG
        </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">

        <div class="form-group row">
            <label for="nama_ayah" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Nama Ayah</label>
            <div class="col-sm-10">
                <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Ayah">
            </div>
        </div>

        <div class="form-group row">
            <label for="tahun_lahir_ayah" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Tahun Lahir</label>
            <div class="col-sm-10">
                <input type="text" name="tahun_lahir_ayah" class="form-control" id="tahun_lahir_ayah" placeholder="Tahun Lahir Ayah">
            </div>
        </div>

        <div class="form-group row">
            <label for="pendidikan_ayah" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Pendidikan</label>
            <div class="col-sm-3">
                <select class="form-control" name="pendidikan_ayah">
                    <option>Pilih...</option>
                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                    <option value="Putus SD">Putus SD</option>
                    <option value="SD Sederajat">SD Sederajat</option>
                    <option value="SMP Sederajat">SMP Sederajat</option>
                    <option value="SMA Sederajat">SMA Sederajat</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4/ S1">D4/ S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="penghasilan_ayah" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Penghasilan Bulanan</label>
            <div class="col-sm-3">
                <select class="form-control" name="penghasilan_ayah">
                    <option>Pilih...</option>
                    <option value=" < Rp 500.000">Rp 500.000</option>
                    <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp.999.999</option>
                    <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                    <option value="Rp. 2.000.000 - Rp. 4.999.999">Rp. 2.000.000 - Rp. 4.999.999</option>
                    <option value="Rp. 5.000.000 - Rp. 20.000.000">Rp. 5.000.000 - Rp. 20.000.000</option>
                    <option value="> Rp. 20.000.000">> Rp. 20.000.000</option>
                </select>
            </div>
        </div>

        
        </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            4. DATA IBU KANDUNG
        </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            
        <div class="form-group row">
            <label for="nama_ibu" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Nama Ibu</label>
            <div class="col-sm-10">
                <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Ibu">
            </div>
        </div>

        <div class="form-group row">
            <label for="tahun_lahir_ibu" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Tahun Lahir</label>
            <div class="col-sm-10">
                <input type="text" name="tahun_lahir_ibu" class="form-control" id="tahun_lahir_ibu" placeholder="Tahun Lahir Ibu">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="pendikan_ibu" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Pendidikan</label>
            <div class="col-sm-3">
                <select class="form-control" name="pendidikan_ibu">
                    <option>Pilih...</option>
                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                    <option value="Putus SD">Putus SD</option>
                    <option value="SD Sederajat">SD Sederajat</option>
                    <option value="SMP Sederajat">SMP Sederajat</option>
                    <option value="SMA Sederajat">SMA Sederajat</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4/ S1">D4/ S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="penghasilan_ibu" class="col-sm-2 col-form-label"
                style="font-size: 18px;">Penghasilan Bulanan</label>
            <div class="col-sm-3">
                <select class="form-control" name="penghasilan_ibu">
                    <option>Pilih...</option>
                    <option value=" < Rp 500.000">Rp 500.000</option>
                    <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                    <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                    <option value="Rp. 2.000.000 - Rp. 4.999.999">Rp. 2.000.000 - Rp. 4.999.999</option>
                    <option value="Rp. 5.000.000 - Rp. 20.000.000">Rp. 5.000.000 - Rp. 20.000.000</option>
                    <option value="> Rp. 20.000.000">> Rp. 20.000.000</option>
                </select>
            </div>
        </div>
                                
        </div>
        </div>
    </div>

    <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </div>

    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>

    <br>
    <a href="report.php" class="btn btn-success">Export To Excel</a>

</body>
</html>