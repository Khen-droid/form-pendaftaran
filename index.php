<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Kursus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrapper">

    <!-- Panel kiri: sambutan -->
    <div class="kiri">
        <div class="ikon">🚀</div>
        <h2>Selamat Datang</h2>
        <p>Daftar kursus hanya butuh 1 menit. Isi data Anda dan mulai belajar hari ini!</p>
    </div>

    <!-- Panel kanan: form -->
    <div class="kanan">
        <h1>Pendaftaran Kursus</h1>

        <form action="proses.php" method="POST">
            <div class="grid">

                <input type="text" name="nama" placeholder="Nama Lengkap *" required>
                <input type="text" name="nim" placeholder="NIM *" required>

                <input type="email" name="email" placeholder="Email *" required>
                <input type="tel" name="no_hp" placeholder="No. HP *" required>

                <select name="semester" required>
                    <option value="">Pilih Semester *</option>
                    <?php for ($i = 1; $i <= 8; $i++) { ?>
                        <option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <input type="date" name="tanggal_lahir" title="Tanggal Lahir" required>

                <select name="program" required class="penuh">
                    <option value="">Pilih Program *</option>
                    <option value="PHP Dasar">PHP Dasar</option>
                    <option value="PHP Lanjutan">PHP Lanjutan</option>
                    <option value="Web Programming">Web Programming</option>
                </select>

                <div class="pilihan penuh">
                    <span>Jenis Kelamin:</span>
                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
                </div>

                <div class="pilihan penuh">
                    <span>Minat:</span>
                    <label><input type="checkbox" name="minat[]" value="Web"> Web</label>
                    <label><input type="checkbox" name="minat[]" value="Database"> Database</label>
                    <label><input type="checkbox" name="minat[]" value="Mobile"> Mobile</label>
                </div>

                <textarea name="alamat" placeholder="Alamat *" required class="penuh"></textarea>

                <input type="hidden" name="prodi" value="PTIK">
            </div>

            <button type="submit">Daftar</button>
        </form>
    </div>

</div>

</body>
</html>