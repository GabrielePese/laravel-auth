@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                       
                                 NAME: {{$emps -> name}}
                                {{$emps -> lastname}}
                                <br>
                               LOCATION: {{$emps -> location -> city}} {{$emps -> location_id}}

                            <br>
                <a class="btn btn-primary" href="{{route('index')}}"> COME BACK</a>
                <a class="btn btn-danger" href="{{route('emp-delete', $emps -> id)}}">DELETE</a>
                <a class="btn btn-dark" href="{{route('emp-edit', $emps -> id)}}">EDIT</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
