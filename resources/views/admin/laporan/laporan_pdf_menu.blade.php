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
                    <th scope="col">name</th>
                    <th scope="col">desc</th>
                    <th scope="col">price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row )
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $row->name }}</td>
                    <td>{!! $row->desc !!}</td>
                    <td>{!! $row->price !!}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
