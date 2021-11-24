@extends('base')

@section('content')

    @if ($info = Session::get('info'))

        <div class="card" style="padding: 10px">
            <div class="card-body bg-success text-white">
                {{$info}}
            </div>
        </div>

    @endif

    <div class="btn" style="float: right">
        <a href="{{url('/destinations/create')}}" class="btn btn-primary" >
            Add Destinations
        </a>
    </div>
    <h1>List of Destinations</h1>
    <table class='table table-bordered table-striped table-sm'>

        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Type</th>
                <th>Rating</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($destinations as $s)
                <tr>
                    <td>{{$s -> name}}</td>
                    <td>{{$s -> address}}</td>
                    <td>{{$s -> type}}</td>
                    <td>{{$s -> rating}}</td>
                </tr>

            @endforeach
        </tbody>
    </table>

@endsection