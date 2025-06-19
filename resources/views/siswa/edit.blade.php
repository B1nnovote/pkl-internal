<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <hr>
    <form action="/siswa/{{$siswa['id']}}" method="post">
        @method('PUT')
    @csrf
    <select name="kelas" id="" required>
        <option value="">Pilih Kelas</option>
        <option value="XII 1" {{$siswa['kelas'] == 'XII 1'?'selected':''}}>XII 1</option>
        <option value="XII 2" {{$siswa['kelas'] == 'XII 2'?'selected':''}}>XII 2</option>
        <option value="XII 3" {{$siswa['kelas'] == 'XII 3'?'selected':''}}>XII 3</option>
    </select>
    <br>

    <input type="text" name="nama" value="{{$siswa['nama']}}" required>
    <br>

    <button type="submit">Simpan</button>
    <button type="reset">Reset</button>
    </form>
    <a href="/siswa">Kembali</a>
</body>
</html>