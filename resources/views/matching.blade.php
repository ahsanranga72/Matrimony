@extends('layouts.app')

@section('content')



    <div class="container-fluid">


    </div>


    <div class="container">
        <div class="card">
            <div class="card-header text-center">Find Your Soul Mate ! </div>

            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <h3><b>Topic</b></h3>
                        <h5>Religious View:</h5>
                        <h5>Employment View:</h5>
                        <h5>Dream Lifestyle:</h5>
                        <h5>Dream Family:</h5>
                        <h5>Travelling:</h5>
                        <h5>Music:</h5>
                        <h5>Game:</h5>
                        <h5>Smoking:</h5>
                        <h5>Drinking:</h5>
                    </div>

                    <div class="col">
                        <h3><b>Your Choice</b></h3>
                        <h5>{{$user->mpreligious}}</h5>
                        <h5>{{$user->mpemployment}}</h5>
                        <h5>{{$user->mplifestyle}}</h5>
                        <h5>{{$user->mpfamily}}</h5>
                        <h5>{{$user->mptravelling}}</h5>
                        <h5>{{$user->mpmusic}}</h5>
                        <h5>{{$user->mpgame}}</h5>
                        <h5>{{$user->mpsmoking}}</h5>
                        <h5>{{$user->mpdrinking}}</h5>
                    </div>

                    <div class="col">
                        <h3><b>Partner's Choice</b></h3>
                        @if($partner)
                        <h5>{{$partner->mreligious}}</h5>
                        <h5>{{$partner->memployment}}</h5>
                        <h5>{{$partner->mlifestyle}}</h5>
                        <h5>{{$partner->mfamily}}</h5>
                        <h5>{{$partner->mtravelling}}</h5>
                        <h5>{{$partner->mmusic}}</h5>
                        <h5>{{$partner->mgame}}</h5>
                        <h5>{{$partner->msmoking}}</h5>
                        <h5>{{$partner->mdrinking}}</h5>
                            @endif
                    </div>
                </div>

                @if($result1 != -1)
                    <div class="card text-center"><h3>Congratulations !!
                            <br> <b>{{$partner->name}}</b> is {{$result1}}% of your Choice <br>
                        You are {{$result2}}% of <b>{{$partner->name}}'s Choice</h3></div>
                @endif
            </div>
        </div>
    </div>




    <div class="container">
        <div class="card">
            <div class="card-header">Find the one who completes you !!</div>
            <div class="card-body">


                <div class="container-fluid">
                    <div class="well well-md">
                        <div class="card-body form-group">


                            @forelse($users as $user)

                                <div class="card">

                                    <div class="card-body">
                                        <div class="well well-sm">
                                            <div class="row">
                                                <div class="col">
                                                    <img src="{{ asset('/PP/' . $user->avatar)}}" style="width: 150px; height: 150px; border-radius:100%">
                                                </div>
                                                <div class="col">
                                                    <h3>{{$user->name}}</h3>
                                                    <h5>{{$user->age}}</h5>
                                                    <h5>{{$user->religion}}</h5>
                                                    <h5>{{$user->maritalstatus}}</h5>
                                                    <h5>{{$user->mail}}</h5>
                                                    <h5>{{$user->district}}</h5>

                                                    <a href="{{ url('/user/' . $user->id . '/details') }}" class="btn btn-xs btn-info pull-right">Details</a>

                                                    <a href="{{ url('/user/' . $user->id . '/message') }}" class="btn btn-xs btn-success pull-right">Message</a>

                                                    <a href="{{ url('/user/' . $user->id . '/match') }}" class="btn btn-xs btn-danger pull-right">Match</a>

                                                    <!-- split button -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @empty

                                <div class="card-body text-center text-danger">Sorry, You have Nothing to Show !</div>

                            @endforelse


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
