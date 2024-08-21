@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jumbotron">
                    <h1>
                        Locations Edit
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Locations Edit</div>

                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="{{ route('locations.update', [$location]) }}">
                            {{ csrf_field() }}

                            {{ method_field("PUT") }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="name">Name:</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{$location->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="street">street:</label>
                                <input id="street" type="text" class="form-control" name="street" value="{{$location->street}}" required autofocus>

                                @if ($errors->has('street'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="address">address:</label>
                                <input id="address" type="text" class="form-control" name="address" value="{{$location->address}}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="city">city:</label>
                                <input id="city" type="text" class="form-control" name="city" value="{{$location->city}}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('pin') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="pin">pin:</label>
                                <input id="pin" type="text" class="form-control" name="pin" value="{{$location->pin}}" required autofocus>

                                @if ($errors->has('pin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pin') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('contact_person') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="contact_person">contact_person:</label>
                                <input id="contact_person" type="text" class="form-control" name="contact_person" value="{{$location->contact_person}}" required autofocus>

                                @if ($errors->has('contact_person'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_person') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }} col-md-12 col-md-offset-2">
                                <label for="mobile">mobile:</label>
                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{$location->mobile}}" required autofocus>

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
