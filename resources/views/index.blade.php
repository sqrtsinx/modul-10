

<!DOCTYPE html>
<html>
<head>
    <title>Pendataan Penduduk</title>
</head>
<body>
    <h1>Form Pendataan Penduduk</h1>
    <form action="submit-data" method="post">
        @csrf
        <label for="nik">NIK:</label><br>
        <input type="text" id="nik" name="nik"><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="provinsi">Provinsi:</label><br>
        <input type="text" id="provinsi" name="provinsi"><br>
        <label for="kota">Kota:</label><br>
        <input type="text" id="kota" name="kota"><br>
        <label for="no_telepon">Nomor Telepon:</label><br>
        <input type="text" id="no_telepon" name="no_telepon"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
