    @extends('layouts.app')



    @section('content')



        <div class="container" >
            <div class="row">
                <div class="col-12"><div class="card-header text-center">My Profile Showing</div></div>
                {{--<div class="col"><button type="button" class="btn btn-dark">Edit</button></div>--}}
            </div><br>





            <div class="container-fluid">
                <div class="well well-md">
                    <div class="card-body form-group">


                        <div class="card">
                            <div class="card-header">Dashboard</div>

                            <div class="card-body">
                                <div class="well well-sm">
                                    <div class="row">
                                        <div class="col">
                                            <h5>Profile Managed by {{$user->owner}}</h5>
                                            <img src="{{ asset('/PP/' . $user->avatar)}}" style="width: 150px; height: 150px; border-radius:100%">
                                        </div>
                                        <div class="col">
                                            <h3>{{$user->name}}</h3>
                                            <h5>{{$user->age}}</h5>
                                            <h5>{{$user->religion}}</h5>
                                            <h5>{{$user->maritalstatus}}</h5>
                                            <h5>{{$user->mail}}</h5>
                                            <h5>{{$user->district}}</h5>
                                            <a href="{{ url('/user/' . $user->id . '/message') }}" class="btn btn-xs btn-success pull-right">Message</a>

                                            <!-- split button -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>





            <div class="container-fluid">
                <div class="card-header">Current Location</div>
                <div class="well well-md">
                    <div class="row card-body">
                        <div class="col-md-4">
                            <h6>Currently Living In</h6>

                            <h6>Residing City/District</h6>

                            <h6>Citizenship</h6>
                        </div>

                        <div class="col-md-1">
                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>
                        </div>

                        <div class="col-md-6">
                            <h6>{{$user->country}}</h6>

                            <h6>{{$user->district}}</h6>

                            <h6>{{$user->citizenship}}</h6>
                        </div>

                    </div>
                </div>

            </div>





            <div class="container-fluid">
                <div class="card-header">Personal Details</div>
                <div class="well well-md">
                    <div class="row card-body">
                        <div class="col-md-4">
                            <h6>Marital Status</h6>

                            <h6>Height (foot.inch)</h6>

                            <h6>Physical Status</h6>

                            <h6>Family Value</h6>

                            <h6>Family Status</h6>

                            <h6>Ethnicity</h6>
                        </div>

                        <div class="col-md-1">
                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>
                        </div>

                        <div class="col-md-6">
                            <h6>{{$user->maritalstatus}}</h6>

                            <h6>{{$user->height}}</h6>

                            <h6>{{$user->physicalstatus}}</h6>

                            <h6>{{$user->familyvalue}}</h6>

                            <h6>{{$user->familystatus}}</h6>

                            <h6>{{$user->ethnicity}}</h6>
                        </div>
                    </div>

                </div>
            </div>





            <div class="container-fluid">
                <div class="card-header">Professional Details</div>
                <div class="well well-md">
                    <div class="row card-body">
                        <div class="col-md-4 ">
                            <h6>Education Level</h6>

                            <h6>Field of Education</h6>

                            <h6>Employed In</h6>

                            <h6>Annual Income</h6>
                        </div>

                        <div class="col-md-1">
                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>
                        </div>

                        <div class="col-md-6">
                            <h6>{{$user->educationlevel}}</h6>

                            <h6>{{$user->fieldofeducation}}</h6>

                            <h6>{{$user->employedin}}</h6>

                            <h6>{{$user->annualincome}}</h6>
                        </div>
                    </div>

                </div>
            </div>





            <div class="container-fluid">
                <div class="card-header">More About Family</div>
                <div class="well well-md">
                    <div class="row card-body">
                        <div class="col-md-4 ">
                            <h6>Ancestral Family Origin</h6>

                            <h6>Mother's Occupation</h6>

                            <h6>Father's Occupation</h6>

                            <h6>No. of Brother</h6>

                            <h6>No. of Married Brother</h6>

                            <h6>No. of Sister</h6>

                            <h6>No. of Married Sister</h6>
                        </div>

                        <div class="col-md-1">
                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>
                        </div>

                        <div class="col-md-6">
                            <h6>{{$user->ancestralfamilyorigin}}</h6>

                            <h6>{{$user->motheroccupation}}</h6>

                            <h6>{{$user->fatheroccupation}}</h6>

                            <h6>{{$user->noofbrother}}</h6>

                            <h6>{{$user->noofmarriedbrother}}</h6>

                            <h6>{{$user->noofsister}}</h6>

                            <h6>{{$user->noofmarriedsister}}</h6>
                        </div>
                    </div>

                </div>
            </div>




            <div class="container-fluid">
                <div class="card-header">More About Own Self</div>
                <div class="well well-md">
                    <div class="row card-body">
                        <div class="col-md-4 ">
                            <h6>Weight</h6>

                            <h6>Body Type</h6>

                            <h6>Complexion</h6>

                            <h6>Spoken Language</h6>

                            <h6>Eating Habit</h6>

                            <h6>Hobbies</h6>

                            <h6>Favourites</h6>
                        </div>

                        <div class="col-md-1">
                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>
                        </div>

                        <div class="col-md-6">
                            <h6>{{$user->weight}}</h6>

                            <h6>{{$user->bodytype}}</h6>

                            <h6>{{$user->complexion}}</h6>

                            <h6>{{$user->spokenlanguage}}</h6>

                            <h6>{{$user->eatinghabit}}</h6>

                            <h6>{{$user->hobbies}}</h6>

                            <h6>{{$user->favourite}}</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    @endsection
