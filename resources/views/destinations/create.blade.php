@extends('base')

@section('content')

    <h1>Add New Destinations</h1>

    <div class="row">
        <div class="col-md-5">
            {!! Form::open(['url' => '/destinations', 'method' => 'post']) !!}

            <div class="form-group">
                {{ Form::label('Name') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Address') }}
                {{ Form::text('address', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Type') }}
                {{ Form::text('type', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Rating') }}
                {{ Form::number('rating', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group" style="padding-top: 15px;">
                <button class="btn btn-primary" style="float: right">
                    Add Destinations
                </button>
            </div>
        </div>

        <div class="col md-7">
            @if (count($errors)>0)
                <div class="card-body bg-danger text-warning">
                    Please fill this fields:
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{$err}}</li>
                        @endforeach
                    </ul>

                </div>
            @endif


        </div>

    {!! Form::close() !!}

    </div>

@endsection