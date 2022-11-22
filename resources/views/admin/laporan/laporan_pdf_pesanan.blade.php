<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nama Menu</th>
                    <th scope="col">Nama pembeli</th>
                    <th scope="col">Status</th>
                    <th scope="col">Permintaan tambahan</th>
                    <th scope="col">Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row )
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $row->menu->name }}</td>
                    <td>{{ $row->user->name }}</td>
                    <td>{{ $row->status }}</td>
                    <td>{{ $row->special_request }}</td>
                    <td>${{ $row->total_harga }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
