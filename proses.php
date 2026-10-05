<?php
$nama          = $_POST['nama'];
$nim           = $_POST['nim'];
$email         = $_POST['email'];
$no_hp         = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$semester      = $_POST['semester'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$minat         = isset($_POST['minat']) ? implode(', ', $_POST['minat']) : '-';
$program       = $_POST['program'];
$alamat        = $_POST['alamat'];
$prodi         = $_POST['prodi'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="rekap">

    <div class="hasil">
        <h2>Rekap Pendaftaran</h2>

        <div class="data"><strong>Nama</strong><span><?php echo htmlspecialchars($nama); ?></span></div>
        <div class="data"><strong>NIM</strong><span><?php echo htmlspecialchars($nim); ?></span></div>
        <div class="data"><strong>Email</strong><span><?php echo htmlspecialchars($email); ?></span></div>
        <div class="data"><strong>No. HP</strong><span><?php echo htmlspecialchars($no_hp); ?></span></div>
        <div class="data"><strong>Jenis Kelamin</strong><span><?php echo htmlspecialchars($jenis_kelamin); ?></span></div>
        <div class="data"><strong>Semester</strong><span><?php echo htmlspecialchars($semester); ?></span></div>
        <div class="data"><strong>Tanggal Lahir</strong><span><?php echo htmlspecialchars($tanggal_lahir); ?></span></div>
        <div class="data"><strong>Minat</strong><span><?php echo htmlspecialchars($minat); ?></span></div>
        <div class="data"><strong>Program</strong><span><?php echo htmlspecialchars($program); ?></span></div>
        <div class="data"><strong>Alamat</strong><span><?php echo htmlspecialchars($alamat); ?></span></div>
        <div class="data"><strong>Prodi</strong><span><?php echo htmlspecialchars($prodi); ?></span></div>

        <a href="index.php">Kembali ke Form</a>
    </div>

</body>
</html>