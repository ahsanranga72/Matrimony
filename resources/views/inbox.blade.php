@extends('layouts.app')


@section('content')



    <div class="container">
        <div class="row">
            {{--<iframe scrolling="auto" height="500px" width="10%">khjkh--}}
            <div class="col-2 card" style="height: 500px">
                <div class="card-header">Profile</div>
                <div style="height: 100%; border: 3px; overflow: auto;">
                    @if($lists)
                        @forelse($lists as $list)

                            <div class="card">

                                <div class="row">

                                    <div class="col-1">
                                        <img src="{{ asset('/PP/' . $list->ypic)}}" style="width: 40px; height: 40px; ">
                                    </div>

                                    <div class="col-11">
                                        <a href="{{ url('/user/' . $list->yid . '/message') }}" class="btn-success">@if($list->status)({{$list->status}})@endif{{$list->yname}}</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="card text-center text-danger">Sorry, You have Nothing to Show !</div>
                        @endforelse
                    @endif
                </div>
            </div>
            {{--</iframe>--}}

            {{--<iframe scrolling="auto" height="500px" width="90%">--}}
            <div class="col-10 card" style="height: 500px">
                <div class="card-header">Message</div>
                <div style="height:100%; border:3px; overflow: auto;">
                    @if($messages)
                        @forelse($messages as $message)
                            <br>

                            @if($message->idfrom == $friend->id)

                                <div class="container">

                                    <div class="row">
                                        <div class="col-1">
                                            <img src="{{ asset('/PP/' . $message->idfrom_pic)}}" style="width: 50px; height: 50px; border-radius:100%">
                                        </div>

                                        <div class="col-11 text-left">
                                            <button type="button" class="btn btn-xs btn-primary" name="ok">{{$message->text}}</button>
                                            <br>
                                        </div>
                                    </div>



                                </div>

                            @else

                                <div class="container">
                                    <div class="row">
                                        <div class="col-11 text-right">
                                            {{$message->text}}
                                        </div>

                                        <div class="col-1">
                                            <img src="{{ asset('/PP/' . $message->idto_pic)}}"  style="width: 50px; height: 50px; border-radius:100%">
                                        </div>
                                    </div>

                                </div>

                            @endif
                        @empty
                            <div class="card text-center text-danger">Sorry, You have Nothing to Show !</div>
                        @endforelse
                    @endif
                    <br><br>
                </div>
                <form class="form" action="{{ url('/user/' . $friend->id . '/send') }}" method="post">
                    {{csrf_field()}}
                    {{--
                                    <input type="te" class="form-control" name="text" >--}}
                    <textarea name="text" id="" maxlength="16000000"  cols="100" rows="2" style=" height: 60%; width: 90%" required></textarea>
                    <button type="submit" class="btn btn-xs btn-primary">Send</button>

                    {{--    <a href="{{ url('/user/' . $user->id . '/send') }}" class="btn btn-xs btn-success pull-right">Send</a>--}}
                </form>
            </div>
            {{--</iframe>--}}
        </div>
    </div>







{{--


    <div class="container">
        <div class="row">
            <div class="col-2 card" style="height: 500
        ; border: 2px; overflow: auto;">
                <div class="card-header">Profile</div>

                @if($lists)
                    @forelse($lists as $list)

                        <div class="card">

                            <div class="container">

                                <div class="row">

                                    <div class="col-1">
                                       --}}
{{-- <img src="{{ asset('/PP/' . $list->ypic)}}" style="width: 50px; height: 50px; border-radius:100%">--}}{{--

                                    </div>

                                    <div class="col-11 text-left">
                                        <a href="{{ url('/user/' . $list->yid . '/message') }}" class="btn btn-xs btn-success pull-right">@if($list->status)({{$list->status}})@endif{{$list->yname}}</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @empty
                        <div class="card text-center text-danger">Sorry, You have Nothing to Show !</div>
                    @endforelse
                    @else
                    <div class="card text-center text-danger">Sorry, You have Nothing to Show !</div>
                @endif
            </div>

            <div class="col-10 card" style="height: 100px
        ; border: 2px; overflow: auto;">
                <div class="card-header">Message</div>

                --}}
{{--@forelse($messages as $message)
                    <br>

                    @if($message->idfrom == $friend->id)

                        <div class="container">

                            <div class="row">
                                <div class="col-1">
                                    <img src="{{ asset('/PP/' . $message->idfrom_pic)}}" style="width: 50px; height: 50px; border-radius:100%">
                                </div>

                                <div class="col-11 text-left">
                                    {{$message->text}}
                                </div>
                            </div>



                        </div>

                    @else

                        <div class="container">
                            <div class="row">
                                <div class="col-11 text-right">
                                    {{$message->text}}
                                </div>

                                <div class="col-1">
                                    <img src="{{ asset('/PP/' . $message->idto_pic)}}"  style="width: 50px; height: 50px; border-radius:100%">
                                </div>
                            </div>

                        </div>

                    @endif
                @empty
                    <div class="card text-center text-danger">Sorry, You have Nothing to Show !</div>
                @endforelse
                <br><br>
                <form class="form" action="{{ url('/user/' . $friend->id . '/send') }}" method="post">
                    {{csrf_field()}}
                    --}}{{--
--}}
{{--
                                    <input type="te" class="form-control" name="text" >--}}{{--
--}}
{{--
                    <textarea name="text" id="" maxlength="16000000"  cols="100" rows="2" required></textarea>
                    <button type="submit" class="btn btn-primary">Send</button>

                    --}}{{--
--}}
{{--    <a href="{{ url('/user/' . $user->id . '/send') }}" class="btn btn-xs btn-success pull-right">Send</a>--}}{{--
--}}
{{--
                </form>--}}{{--


            </div>
        </div>
    </div>
--}}



@endsection
