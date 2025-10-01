<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">🍴 Daftar Makanan</h2>

        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Nama Makanan</th>
                    <th>Harga</th>
                    <th>Asal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($makanan as $m)
                    <tr>
                        <td>{{ $m['nama'] }}</td>
                        <td>Rp{{ number_format($m['harga']) }}</td>
                        <td>{{ $m['asal'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
