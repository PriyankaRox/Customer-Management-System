@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jumbotron">
                    <h1>
                        Customer Details
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Customer Details</div>

                    <div class="panel-body">

                        <div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="name" class="col-md-2">Name:</label>
                                <p class="col-md-10">{{$customers->name}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="dob" class="col-md-2">Date Of Birth:</label>
                                <p class="col-md-10">{{$customers->dob}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="gender" class="col-md-2">Gender:</label>
                                <p class="col-md-10">{{$customers->gender}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="email" class="col-md-2">email:</label>
                                <p class="col-md-10">{{$customers->email}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="mobile" class="col-md-2">mobile:</label>
                                <p class="col-md-10">{{$customers->mobile}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="address" class="col-md-2">address:</label>
                                <p class="col-md-10">{{$customers->address}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="city" class="col-md-2">city:</label>
                                <p class="col-md-10">{{$customers->city}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="pin" class="col-md-2">pin:</label>
                                <p class="col-md-10">{{$customers->pin}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="state" class="col-md-2">state:</label>
                                <p class="col-md-10">{{$customers->state}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="country" class="col-md-2">country:</label>
                                <p class="col-md-10">{{$customers->country}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="adhar_number" class="col-md-2">adhar number:</label>
                                <p class="col-md-10">{{$customers->adhar_number}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="religion" class="col-md-2">religion:</label>
                                <p class="col-md-10">{{$customers->religion}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="caste" class="col-md-2">caste:</label>
                                <p class="col-md-10">{{$customers->caste}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="category" class="col-md-2">category:</label>
                                <p class="col-md-10">{{$customers->category}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="emergency_contacts" class="col-md-2">emergency contacts:</label>
                                <p class="col-md-10">{{$customers->emergency_contacts}}</p>
                            </div>

                            <div class="form-group col-md-10 col-md-offset-2">

                                <a href="{{ route('customers.edit', [$customers]) }}" class="btn btn-default" role="button">Edit</a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['customers.destroy', $customers], 'style' => 'display:inline']) !!}
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
