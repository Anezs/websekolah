<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $jurusan = $_POST['jurusan'];
    $telepon = $_POST['telepon'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $nama_ayah = $_POST['nama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $penghasilan_orang_tua = $_POST['penghasilan_orang_tua'];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Konfirmasi Pendaftaran Siswa Baru Sekolah Kelompok 2">
    <meta name="author" content="Kelompok 2">
    <title>Konfirmasi Pendaftaran - Sekolah Kelompok 2</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

    <header>
        <div class="hero">
            <h1>Konfirmasi Pendaftaran Siswa Baru</h1>
            <p>Terima kasih telah mendaftar di Sekolah Kelompok 2!</p>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="visimisi.html">Visi dan Misi</a></li>
            <li><a href="fasilitas.html">Fasilitas</a></li>
            <li><a href="index.html#kontak">Kontak</a></li>
            <li><a href="form.html">Pendaftaran</a></li>
        </ul>
    </nav>

    <main>
        <section class="card">
            <h2>Data Pendaftaran Siswa Baru</h2>
            <div class="card-content">
                <p><strong>Nama Lengkap         :</strong></p> <?php echo ($nama); ?>
                <p><strong>Email                :</strong></p> <?php echo ($email); ?>
                <p><strong>Tanggal Lahir        :</strong></p> <?php echo ($tanggal_lahir); ?>
                <p><strong>Jenis Kelamin        :</strong></p> <?php echo ($jenis_kelamin); ?>
                <p><strong>Agama                :</strong></p> <?php echo ($agama); ?>
                <p><strong>Alamat               :</strong></p> <?php echo nl2br(($alamat)); ?>
                <p><strong>Kota                 :</strong></p> <?php echo ($kota); ?>
                <p><strong>Provinsi             :</strong></p> <?php echo ($provinsi); ?>
                <p><strong>Jurusan yang Dipilih :</strong></p> <?php echo ($jurusan); ?>
                <p><strong>Nomor Telepon        :</strong></p> <?php echo ($telepon); ?>
                <p><strong>Asal Sekolah         :</strong></p> <?php echo ($asal_sekolah); ?>
                <p><strong>Nama Ayah            :</strong></p> <?php echo ($nama_ayah); ?>
                <p><strong>Nama Ibu             :</strong></p> <?php echo ($nama_ibu); ?>
                <p><strong>Pekerjaan Ayah       :</strong></p> <?php echo ($pekerjaan_ayah); ?>
                <p><strong>Pekerjaan Ibu        :</strong></p> <?php echo ($pekerjaan_ibu); ?>
                <p><strong>Penghasilan Orang Tua:</strong></p> <?php echo ($penghasilan_orang_tua); ?>
            </div>
        </section>

        <div class="footer-action">
            <section>
                <p>Jika ada informasi yang perlu diperbaiki, silakan hubungi kami segera.</p>
            </section>
        </div>

        <div class="button-container">
            <a href="form.html" class="btn">Perbaiki</a>
            <a href="index.html" class="btn btn-back">Beranda</a>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Sekolah Kelompok 2. Semua Hak Dilindungi.</p>
        <div class="social-media">
            <a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/@nisahamada_" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/syfdnrml_" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://youtube.com/@Cipcips37" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>

</body>
</html>
