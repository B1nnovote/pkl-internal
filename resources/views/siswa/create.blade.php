<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Siswa</h2>
    <hr>
    <form action="/siswa" method="post">
    @csrf
    <select name="kelas" id="" required>
        <option value="">Pilih Kelas</option>
        <option value="XII 1">XII 1</option>
        <option value="XII 2">XII 2</option>
        <option value="XII 3">XII 3</option>
    </select>
    <br>

    <input type="text" name="nama" placeholder="Masukan Nama" required>
    <br>

    <button type="submit">Simpan</button>
    <button type="reset">Reset</button>
    </form>
    <a href="/siswa">Kembali</a>
</body>
</html>