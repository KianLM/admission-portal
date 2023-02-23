@extends('home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
    <h1>hello world</h1>

    <table style="border: 1px solid black">
        <tr>
            <td>Name</td>
            <td>Phone </td>
            <td>Address</td>
        </tr>

        @foreach ($data as $data);
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
        </tr>

        @endforeach
    </table>
</body>
</html>
@endsection