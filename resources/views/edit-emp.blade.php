@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   <form action="{{route('emp-update', $emp -> id)}}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" name="name" value="{{$emp -> name}}">
                    </div>
                    <div class="form-group">
                        <label for="lastname">lastname</label>
                        <input type="text" name="lastname" value="{{$emp -> lastname}}">
                    </div>

                    <div class="form-group">
                        <label for="location_id">location ID</label>
                        <input type="text" name="location_id" value="{{$emp -> location_id}}">
                    </div>

                    {{-- <div class="form-group">
                        <label for="location_id">city</label>
                        <select name="location_id" id="">
                            @foreach ($loc as $item)
                            <option>
                                   @if ($loc -> id === $emp -> location -> id)
                                       
                                   @endif
                            </option>
                                @endforeach
                        </select>
                    </div> --}}
                    <button class="btn btn-danger" type="submit"> CAMBIA </button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection