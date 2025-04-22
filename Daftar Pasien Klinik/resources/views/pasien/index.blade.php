<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pasien</title>
</head>
<body>
    <h1>Daftar Pasien</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasiens as $pasien)
                <tr>
                    <td>{{ $pasien->id }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->alamat }}</td>
                    <td>{{ $pasien->tanggal_lahir }}</td>
                    <td>{{ $pasien->nomor_telepon }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
