<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laporan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>kode</th>
                    <th>bank</th>
                    <th>nomor</th>
                    <th>tanggal</th>
                    <th>tipe</th>
                    <th>nominal</th>
                    <th>uraian</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataRekening as $r)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $r->kode_satker }}</td>
                        <td>{{ $r->bank }}</td>
                        <td>{{ $r->nomor }}</td>
                        <td>{{ $r->tanggal }}</td>
                        <td>{{ $r->tipe }}</td>
                        <td>{{ $r->nominal }}</td>
                        <td>{{ $r->uraian }}</td>
                        <td>{{ $r->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
