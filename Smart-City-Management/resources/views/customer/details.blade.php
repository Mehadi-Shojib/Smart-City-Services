@extends('layouts.admin_app')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <h3 style="text-align: center">Customer Details</h3>
<table class="table">

    <thead>

        <th scope="col">ID</th>

        <th >Name</th>

        <th >Email</th>

        <th >Phone</th>
        <th >DOB</th>

        <th >Address</th>




    </thead>

    <tbody>

        @foreach ($list as $i)

        <tr>

            <th scope="row">{{$i->c_id}}</th>

        <td>{{$i->c_name}}</td>

        <td>{{$i->c_email}}</td>

        <td>{{$i->c_phone}}</td>

        <td>{{$i->c_dob}}</td>

        <td>{{$i->c_address}}</td>


      </tr>

        @endforeach


    </tbody>

</table>
  </body>
</html>
@endsection
