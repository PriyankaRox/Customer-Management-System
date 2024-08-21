@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jumbotron">
                    <h1>
                        Customers Edit
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Customers Edit</div>

                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="{{ route('customers.update', [$customers]) }}">
                            {{ csrf_field() }}

                            {{ method_field("PUT") }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="name">Name:</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{$customers->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="dob">Date Of Birth:</label>
                                <input id="dob" type="text" class="form-control" name="dob" value="{{$customers->dob}}" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="gender">gender:</label>
                                <input id="gender" type="text" class="form-control" name="gender" value="{{$customers->gender}}" required autofocus>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="email">email:</label>
                                <input id="email" type="text" class="form-control" name="email" value="{{$customers->email}}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="mobile">mobile:</label>
                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{$customers->mobile}}" required autofocus>

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="address">address:</label>
                                <input id="address" type="text" class="form-control" name="address" value="{{$customers->address}}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="city">city:</label>
                                <input id="city" type="text" class="form-control" name="city" value="{{$customers->city}}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('pin') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="pin">pin:</label>
                                <input id="pin" type="text" class="form-control" name="pin" value="{{$customers->pin}}" required autofocus>

                                @if ($errors->has('pin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pin') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="state">state:</label>
                                <input id="state" type="text" class="form-control" name="state" value="{{$customers->state}}" required autofocus>

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="country">country:</label>
                                <input id="country" type="text" class="form-control" name="country" value="{{$customers->country}}" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('adhar_number') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="adhar_number">adhar_number:</label>
                                <input id="adhar_number" type="text" class="form-control" name="adhar_number" value="{{$customers->adhar_number}}" required autofocus>

                                @if ($errors->has('adhar_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adhar_number') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('religion') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="religion">religion:</label>
                                <input id="religion" type="text" class="form-control" name="religion" value="{{$customers->religion}}" required autofocus>

                                @if ($errors->has('religion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('religion') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('caste') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="caste">caste:</label>
                                <input id="caste" type="text" class="form-control" name="caste" value="{{$customers->caste}}" required autofocus>

                                @if ($errors->has('caste'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('caste') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="category">category:</label>
                                <input id="category" type="text" class="form-control" name="category" value="{{$customers->category}}" required autofocus>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('emergency_contacts') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="emergency_contacts">emergency_contacts:</label>
                                <input id="emergency_contacts" type="text" class="form-control" name="emergency_contacts" value="{{$customers->emergency_contacts}}" required autofocus>

                                @if ($errors->has('emergency_contacts'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emergency_contacts') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-10 col-md-offset-2">

                                <a href="{{ route('customers.index') }}" class="btn btn-default" role="button">Cancel</a>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>

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
