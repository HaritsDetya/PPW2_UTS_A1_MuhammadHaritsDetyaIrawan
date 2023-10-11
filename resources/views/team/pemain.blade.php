<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Data Pemain</title>
</head>
<body>
    <br>
    <h1>@yield('judul halaman')</h1>

    @yield('isi')
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama Pemain</th>
                <th>Nomer Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_pemain as $pemain)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung}}</td>
                    <td>{{ $pemain->posisi}}</td>
                </tr>
                <td>
            @endforeach
        </tbody>
    </table>
</body>
</html>