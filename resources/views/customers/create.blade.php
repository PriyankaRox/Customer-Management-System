@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jumbotron">
                    <h1>
                        Customer Create
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Customer Create</div>

                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="{{ route('customers.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="name">Name:</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="dob">Date Of Birth:</label>
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="gender">Gender:</label>
                                <input id="gender" type="gender" class="form-control" name="gender" value="{{ old('gender') }}" required autofocus>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="email">Email:</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                           
                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="mobile">Mobile:</label>
                                <input id="mobile" type="mobile" class="form-control" name="mobile" value="{{ old('mobile') }}" required autofocus>

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="address">Address:</label>
                                <input id="address" type="address" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="city">City:</label>
                                <input id="city" type="city" class="form-control" name="city" value="{{ old('city') }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('pin') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="pin">Pin:</label>
                                <input id="pin" type="pin" class="form-control" name="pin" value="{{ old('pin') }}" required autofocus>

                                @if ($errors->has('pin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pin') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="state">State:</label>
                                <input id="state" type="state" class="form-control" name="state" value="{{ old('state') }}" required autofocus>

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="country">Country:</label>
                                <input id="country" type="country" class="form-control" name="country" value="{{ old('country') }}" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('adhar_number') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="adhar_number">Adhar Number:</label>
                                <input id="adhar_number" type="adhar_number" class="form-control" name="adhar_number" value="{{ old('adhar_number') }}" required autofocus>

                                @if ($errors->has('adhar_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adhar_number') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('religion') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="religion">Religion:</label>
                                <input id="religion" type="religion" class="form-control" name="religion" value="{{ old('religion') }}" required autofocus>

                                @if ($errors->has('religion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('religion') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('caste') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="caste">Caste:</label>
                                <input id="caste" type="caste" class="form-control" name="caste" value="{{ old('caste') }}" required autofocus>

                                @if ($errors->has('caste'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('caste') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="category">Category:</label>
                                <input id="category" type="category" class="form-control" name="category" value="{{ old('category') }}" required autofocus>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('emergency_contacts') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="emergency_contacts">Emergency contacts:</label>
                                <input id="emergency_contacts" type="emergency_contacts" class="form-control" name="emergency_contacts" value="{{ old('emergency_contacts') }}" required autofocus>

                                @if ($errors->has('emergency_contacts'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emergency_contacts') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-10 col-md-offset-2">

                                <a href="{{ route('clients.index') }}" class="btn btn-default" role="button">Cancel</a>

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
