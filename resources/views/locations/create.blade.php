@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jumbotron">
                    <h1>
                        Location Create
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Location Create</div>

                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="{{ route('locations.store') }}">
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

                            <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="street">Street:</label>
                                <input id="street" type="date" class="form-control" name="street" value="{{ old('street') }}" required autofocus>

                                @if ($errors->has('street'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('street') }}</strong>
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
                                <label for="city">city:</label>
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

                            <div class="form-group{{ $errors->has('contact_person') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="contact_person">Contact Person:</label>
                                <input id="contact_person" type="contact_person" class="form-control" name="contact_person" value="{{ old('contact_person') }}" required autofocus>

                                @if ($errors->has('contact_person'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_person') }}</strong>
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

                            
                            <div class="form-group col-md-10 col-md-offset-2">

                                <a href="{{ route('locations.index') }}" class="btn btn-default" role="button">Cancel</a>

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
