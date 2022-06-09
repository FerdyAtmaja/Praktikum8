<?php
    include "koneksi.php";

    $tanggal = $_POST['tanggal'];
    $jenis_pendaftaran = $_POST['jenis_pendaftaran'];
    $tanggal_masuk_sekolah	 = $_POST['tanggal_masuk_sekolah'];
    $nis = $_POST['nis'];
    $no_peserta_ujian = $_POST['no_peserta_ujian'];
    $no_skhun = $_POST['no_skhun'];
    $no_ijazah = $_POST['no_ijazah'];
    $hobi = $_POST['hobi'];
    $cita2 = $_POST['cita2'];
    $nama_siswa = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $nama_ayah = $_POST['nama_ayah'];
    $tahun_lahir_ayah = $_POST['tahun_lahir_ayah'];
    $pendidikan_ayah = $_POST['pendidikan_ayah'];
    $penghasilan_ayah = $_POST['penghasilan_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $tahun_lahir_ibu = $_POST['tahun_lahir_ibu'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $penghasilan_ibu = $_POST['penghasilan_ibu'];

    $querysql="INSERT pendaftaran_siswa set tanggal = '$tanggal', 
    jenis_pendaftaran = '$jenis_pendaftaran', 
    tanggal_masuk_sekolah = '$tanggal_masuk_sekolah', 
    nis = '$nis', 
    no_peserta_ujian = '$no_peserta_ujian',
    no_skhun = '$no_skhun',
    no_ijazah = '$no_ijazah', 
    hobi = '$hobi',
    cita2 = '$cita2',
    nama_siswa = '$nama_siswa',
    jenis_kelamin = '$jenis_kelamin',
    nisn = '$nisn',
    nik = '$nik',
    tempat_lahir = '$tempat_lahir',
    tanggal_lahir = '$tanggal_lahir',
    agama = '$agama',
    alamat = '$alamat',
    no_hp = '$no_hp',
    no_telepon = '$no_telepon',
    email = '$email',
    kewarganegaraan = '$kewarganegaraan',
    nama_ayah = '$nama_ayah',
    tahun_lahir_ayah = '$tahun_lahir_ayah',
    pendidikan_ayah = '$pendidikan_ayah',
    penghasilan_ayah = '$penghasilan_ayah',
    nama_ibu = '$nama_ibu',
    tahun_lahir_ibu = '$tahun_lahir_ibu',
    pendidikan_ibu = '$pendidikan_ibu',
    penghasilan_ibu = '$penghasilan_ibu'";
    mysqli_query($conn, $querysql) or die("Proses simpan ke database gagal");
    header("location:Form Pendaftaran Siswa.php");
?>