<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($a && $b)
    Promo untuk {{ $a}} <br>
    Kode Promo {{ $b }}
    @elseif ($a)
    Barang : {{ $a }}
    @else
    Menampilkan Semua Promo Barang
    @endif
</body>
</html>