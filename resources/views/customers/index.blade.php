@extends('teams.content')

@section('content')
    <h1 class="text-center">Customers Table</h1>
    <a class="btn btn-black" href="{{route('create')}}">Add Customer</a>
    <br>
    <table  class="table" width="100px">
        <tr>
            <th>Id</th>
            <th>img</th>
            <th>Name</th>
        </tr>

        @foreach($customer as $cus)
            <tr>
                <td>{{ $cus->id }}</td>
                <td> <img src="{{ $cus->image }}"width="100" height="100"></td>
                <td>{{ $cus->name}} </td>
            </tr>
        @endforeach
    </table>
@endsection
