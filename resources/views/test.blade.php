@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row">
            {{$user->name}}
            <img src="{{$user->avatar}}" style="width: 150px; height: 150px; border-radius:100%"/>
        </div>
    </div>



@endsection
