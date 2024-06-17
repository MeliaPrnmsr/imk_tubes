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
