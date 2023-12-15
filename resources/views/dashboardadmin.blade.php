<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
</head>
<body>
    <h1>Data Penduduk</h1>
    <table border="1">
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Provinsi</th>
            <th>Kota</th>
            <th>Nomor Telepon</th>
        </tr>
        <tr>
            <td>{{ $data['nik'] }}</td>
            <td>{{ $data['nama'] }}</td>
            <td>{{ $data['provinsi'] }}</td>
            <td>{{ $data['kota'] }}</td>
            <td>{{ $data['no_telepon'] }}</td>
        </tr>
    </table>
</body>
</html>
