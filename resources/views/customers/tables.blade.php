@extends('teams.content')
@section('content')
    <h4 class="text-center">Details table</h4>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>img</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th> Edit</th>
            <th>delete</th>
        </tr>
        </thead>

        <tbody>


        @foreach($customer as $cus)
            <tr>
                <td>{{ $cus->id }}</td>
                <td> <img src="{{ $cus->image }}"width="100" height="100"></td>
                <td>{{ $cus->name}} </td>
                <td>{{ $cus->email}}</td>
                <td>{{ $cus->phone}}</td>
                <td> <a class="btn btn-black" href="{{ route('edit',[$cus->id]) }}">Edit </a></td>
                <td> <form class="" action="{{ route('delete',[$cus->id]) }}" method="post">
                        <input type="hidden" name="_token" value=" {{csrf_token()}} ">
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit"class="btn btn-danger" name="button">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>


@stop
