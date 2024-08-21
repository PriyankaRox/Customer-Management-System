@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jumbotron">
                    <h1>
                        location Details
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">location Details</div>

                    <div class="panel-body">

                        <div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="name" class="col-md-2">Name:</label>
                                <p class="col-md-10">{{$location->name}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="street" class="col-md-2">Street:</label>
                                <p class="col-md-10">{{$location->street}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="address" class="col-md-2">address:</label>
                                <p class="col-md-10">{{$location->address}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="city" class="col-md-2">city:</label>
                                <p class="col-md-10">{{$location->city}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="pin" class="col-md-2">pin:</label>
                                <p class="col-md-10">{{$location->pin}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="mobile" class="col-md-2">mobile:</label>
                                <p class="col-md-10">{{$location->mobile}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="contact_person" class="col-md-2">Contact person:</label>
                                <p class="col-md-10">{{$location->contact_person}}</p>
                            </div>

                            <div class="form-group col-md-10 col-md-offset-2">

                                <a href="{{ route('locations.edit', [$location]) }}" class="btn btn-default" role="button">Edit</a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['locations.destroy', $location], 'style' => 'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('extra_js')
    <script>
        //ExtraJS
    </script>
@endsection
