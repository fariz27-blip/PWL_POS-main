<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Form Tambah Data User</h1>
    <form method="post" action="/user/tambah_simpan">
        {{ csrf_field() }}

        <label>username</label>
        <input type="text" name="username" placeholder="username" required="Masukan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Nama" required="Masukan Nama">
        <br>
        <label>password</label>
        <input type="password" name="password" placeholder="password" required="Masukan Password">
        <br>
        <label>level ID</label>
        <input type="number" name="level_id" placeholder="Masukan ID level">
        <br><br>
        <input type="submit" class="btn ntn-succes" value="Simpan">
    </form>
</body>
</html>
