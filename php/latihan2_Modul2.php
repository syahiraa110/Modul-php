<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Biodata</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Form Input Biodata</h2>
        <form action="process.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br><br>

            <label for="agama">Agama:</label>
            <input type="text" id="agama" name="agama" required><br><br>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea><br><br>

            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" required><br><br>

            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>

            <label for="hobi">Hobi:</label>
            <input type="text" id="hobi" name="hobi" required><br><br>

            <label for="cita_cita">Cita-cita:</label>
            <input type="text" id="cita_cita" name="cita_cita" required><br><br>

            <label for="usia">Usia:</label>
            <input type="number" id="usia" name="usia" required><br><br>

            <label for="asal_sekolah">Asal Sekolah:</label>
            <input type="text" id="asal_sekolah" name="asal_sekolah" required><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>



