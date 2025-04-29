<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>

    <!-- Tampilkan pesan status update -->
    @if (isset($updateStatus))
        <p>{{ $updateStatus }}</p>
    @endif

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Level ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->username }}</td>
                    <td>{{ $d->level_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
