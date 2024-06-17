<!DOCTYPE html>
<html>
<head>
    <title>Data Absensi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Data Absensi</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Murid</th>
                <th>Sabuk</th>
                <th>Status Absensi</th>
                <th>Dojo</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $siswa)
                <tr>
                    <td>{{ $siswa->kode_murid }}</td>
                    <td>{{ $siswa->nama_murid }}</td>
                    <td>{{ $siswa->sabuk }}</td>
                    <td>{{ $siswa->status_kehadiran }}</td>
                    <td>{{ $siswa->nama_dojo }}</td>
                    <td>{{ $siswa->tanggal_absensi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
