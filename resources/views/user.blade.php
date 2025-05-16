<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>

    <!-- Tambah User Link -->
    <a href="/user/tambah">+ Tambah User</a>
    <br><br>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>
            <td>ID Level Pengguna</td>
            <td>Kode Level</td>
            <td>Nama Level</td>
            <td>Aksi</td>
        </tr>
        @foreach ($data as $d )
        <tr>
            <td>{{ $d->user_id }}</td>
            <td>{{ $d->username }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->level_id }}</td>
            <td>{{ $d->level->kode_level ?? '-' }}</td>
            <td>{{ $d->level->nama_level ?? '-' }}</td>
            <td>
                <a href="/user/ubah/{{ $d->user_id }}">ubah</a> |
                <form action="/user/hapus/{{ $d->user_id }}" method="POST" style="display:inline;">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin hapus user ini?')">hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>
