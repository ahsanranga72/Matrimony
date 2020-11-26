@extends('layouts.app')

@section('content')



    <div class="container-fluid">


    </div>


    <div class="container">
        <div class="card">
            <div class="card-header">Welcome to Matrimonial Site !</div>

            <div class="bgpicture container-fluid">
                <img src="bg1.jpg" class="" style="width: 100%; height: 500px;">
            </div>


            <div class="card-body">

                <form class="form" action="search" method="post">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="col">
                            <label for="">Looking For *</label>
                            <select name="sex" class="form-control">
                                <option value="Female">Bride</option>
                                <option value="Male">Groom</option>
                            </select>
                        </div>

                        <div class="col">
                            <label for="">Age From *</label>
                            <select name="agefrom" class="form-control">
                                <option value="">--Select--</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="60">60</option>
                            </select><br>
                        </div>

                        <div class="col">
                            <label for="">Age To *</label>
                            <select name="ageto" class="form-control">
                                <option value="">--Select--</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                                <option value="49">49</option>
                                <option value="50">50</option>
                                <option value="51">51</option>
                                <option value="52">52</option>
                                <option value="53">53</option>
                                <option value="54">54</option>
                                <option value="55">55</option>
                                <option value="56">56</option>
                                <option value="57">57</option>
                                <option value="58">58</option>
                                <option value="59">59</option>
                                <option value="60">60</option>
                            </select><br>
                        </div>

                        <div class="col">
                            <label for="">Religion *</label>
                            <select name="religion" class="form-control">
                                <option value="">--Select--</option>
                                <option value="Islam">Islam</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Buddhism">Buddhism</option>
                            </select>
                        </div>

                        <div class="col">
                            <label for="">Marital Status *</label>
                            <select name="maritalstatus" class="form-control">
                                <option value="">--Select--</option>
                                <option value="Single">Single</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Separated">Separated</option>
                                <option value="Married">Married</option>
                            </select> <br>
                        </div>

                        <div class="col">
                            <br>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>

              </form>
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

                                                <!-- split button -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @empty

                                <div class="card text-center text-danger">Sorry, You have Nothing to Show !</div>

                            @endforelse


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
