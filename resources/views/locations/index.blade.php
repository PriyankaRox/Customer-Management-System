@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jumbotron">
                    <h1>
                        locations
                        <a href="{{ route('locations.create') }}" class="btn btn-success pull-right" role="button">Create</a>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <br/>
                @endif

                @if (\Session::has('success'))
                    <div class="alert alert-success alert-dismissable">
                        <p>{!! \Session::get('success')  !!} </p>
                    </div>
                    <br/>
                @endif

                @if (\Session::has('notice'))
                    <div class="alert alert-info alert-dismissable">
                        <p>{!! \Session::get('notice')  !!} </p>
                    </div>
                    <br/>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">locations</div>

                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="datatable" name="datatable" class="table table-hover table-striped table-bordered display">
                                <thead>
                                <tr>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Street</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">City</th>
                                    <th class="text-center">Pin</th>
                                    <th class="text-center">Contact Person</th>
                                    <th class="text-center">Mobile</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($locations as $location)
                                    <tr>
                                        <td>
                                            {{$location->name}}
                                        </td>
                                        <td>
                                            {{$location->street}}
                                        </td>
                                        <td>
                                            {{$location->address}}
                                        </td>
                                        <td>
                                            {{$location->city}}
                                        </td>
                                        <td>
                                            {{$location->pin}}
                                        </td>
                                        <td>
                                            {{$location->contact_person}}
                                        </td>
                                        <td>
                                            {{$location->mobile}}
                                        </td>
                                        
                                        <td class="text-center">
                                            @if($location->deleted_at == null)
                                                <span class="label label-success">Active</span>
                                            @else

                                                <span class="label label-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if($location->deleted_at == null)
                                                <a href="{{ route('locations.show', [$location]) }}" class="btn btn-primary" role="button">View</a>
                                                <a href="{{ route('locations.edit', [$location]) }}" class="btn btn-info" role="button">Edit</a>

                                                {!! Form::open(['method' => 'DELETE', 'route' => ['locations.destroy', $location], 'style' => 'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @else
                                                <a href="#" data-toggle="modal" data-target="#access_denied" class="btn btn-primary" role="button">View</a>
                                                <a href="#" data-toggle="modal" data-target="#access_denied" class="btn btn-info" role="button">Edit</a>
                                                <a href="#" data-toggle="modal" data-target="#access_denied" class="btn btn-danger" role="button">Delete</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra_js')
    <script>
        $(document).ready(function() {
            $('#datatable').dataTable();

            $("[data-toggle=tooltip]").tooltip();

        } );
    </script>
@endsection
