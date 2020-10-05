@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravel <3 </div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{route('emp-create')}}"> Create New</a>
                    <ul>
                        @foreach ($emp as $item)
                            <li>
                            <a href="{{route('emp-show', $item -> id)}}">
                                {{$item -> name}} {{$item -> lastname}}
                            </a>
                            </li>
                        @endforeach
                        @auth                     
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
