@extends('layouts.app')



@section('content')



    <div class="container text-center" >
        <div class="card">
            <div class="card-header text-center"><b>My Profile Showing</b>       <a href="{{ url('/user/update') }}"
                 class="btn btn-xs btn-success pull-right">Update</a>
            </div>

            <br>


            <div class="card" style="width: 90%; margin-left: 5%">
                    <div class="card-header text-left"><b>Dashboard</b></b></div>
                    <div class="card-body form-group">
                                <div class="row">
                                        <div class="col text-center">
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

                                            <!-- split button -->
                                        </div>

                                </div>
                    </div>
            </div>
            <br>



            <div class="card" style="width: 90%; margin-left: 5%">
                    <div class="card-header text-left"><b>Current Location</b></div>
                    <div class="row card-body">
                        <div class="col-md-5">
                            <h6>Currently Living In</h6>

                            <h6>Residing City/District</h6>

                            <h6>Citizenship</h6>
                        </div>

                        <div class="col-md-2">
                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>
                        </div>

                        <div class="col-md-5">
                            <h6>{{$user->country}}</h6>

                            <h6>{{$user->district}}</h6>

                            <h6>{{$user->citizenship}}</h6>
                        </div>
                    </div>
            </div>

            <br>

            <div class="card" style="width: 90%; margin-left: 5%">
                <div class="card-header text-left"><b>Personal Details</b></div>
                    <div class="row card-body">
                        <div class="col-md-5">
                            <h6>Marital Status</h6>

                            <h6>Height (foot.inch)</h6>

                            <h6>Physical Status</h6>

                            <h6>Family Value</h6>

                            <h6>Family Status</h6>

                            <h6>Ethnicity</h6>
                        </div>

                        <div class="col-md-2">
                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>
                        </div>

                        <div class="col-md-5">
                            <h6>{{$user->maritalstatus}}</h6>

                            <h6>{{$user->height}}</h6>

                            <h6>{{$user->physicalstatus}}</h6>

                            <h6>{{$user->familyvalue}}</h6>

                            <h6>{{$user->familystatus}}</h6>

                            <h6>{{$user->ethnicity}}</h6>
                        </div>
                    </div>
            </div>


            <br>


            <div class="card" style="width: 90%; margin-left: 5%">
                <div class="card-header text-left"><b>Professional Details</b></div>
                    <div class="row card-body">
                        <div class="col-md-5">
                            <h6>Education Level</h6>

                            <h6>Field of Education</h6>

                            <h6>Employed In</h6>

                            <h6>Annual Income</h6>
                        </div>

                        <div class="col-md-2">
                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>
                        </div>

                        <div class="col-md-5">
                            <h6>{{$user->educationlevel}}</h6>

                            <h6>{{$user->fieldofeducation}}</h6>

                            <h6>{{$user->employedin}}</h6>

                            <h6>{{$user->annualincome}}</h6>
                        </div>
                    </div>
            </div>


            <br>


            <div class="card" style="width: 90%; margin-left: 5%">
                <div class="card-header text-left"><b>More About Family</b></div>
                        <div class="row card-body">
                        <div class="col-md-5">
                            <h6>Ancestral Family Origin</h6>

                            <h6>Mother's Occupation</h6>

                            <h6>Father's Occupation</h6>

                            <h6>No. of Brother</h6>

                            <h6>No. of Married Brother</h6>

                            <h6>No. of Sister</h6>

                            <h6>No. of Married Sister</h6>
                        </div>

                        <div class="col-md-2">
                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>
                        </div>

                        <div class="col-md-5">
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

            <br>


            <div class="card" style="width: 90%; margin-left: 5%">
                <div class="card-header text-left"><b>More About Own Self</b></div>
                    <div class="row card-body">
                        <div class="col-md-5">
                            <h6>Weight</h6>

                            <h6>Body Type</h6>

                            <h6>Complexion</h6>

                            <h6>Spoken Language</h6>

                            <h6>Eating Habit</h6>

                            <h6>Hobbies</h6>

                            <h6>Favourites</h6>
                        </div>

                        <div class="col-md-2">
                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>

                            <h6>:</h6>
                        </div>

                        <div class="col-md-5">
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

            <br>


            <div class="card" style="width: 90%; margin-left: 5%">
                <div class="card-header text-left"><b>Partner Preference Profile</b></div>
                <div class="row card-body  form-group">
                                <div class="col-md-5">
                                    <h6>Looking for</h6>
                                    <h6>Age From</h6>
                                    <h6>Age To</h6>
                                    <h6>Marital Status</h6>
                                    <h6>Religion</h6>

                                    {{--<h6>Height From</h6>
                                    <h6>Height To</h6>
                                    <h6>Physical Status</h6>
                                    <h6>Eating Habit</h6>
                                    <h6>Drinking Habit</h6>
                                    <h6>Smoking Habit</h6>
                                    <h6>Education Level</h6>
                                    <h6>Employed In</h6>
                                    <h6>Citizenship</h6>
                                    <h6>Annual Income from</h6>
                                    <h6>Annual Income to</h6>--}}
                                </div>

                                <div class="col-md-2">
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    {{--<h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>--}}
                                </div>

                                <div class="col-md-5">
                                    <h6>{{$user->psex}}</h6>
                                    <h6>{{$user->pagefrom}}</h6>
                                    <h6>{{$user->pageto}}</h6>
                                    <h6>{{$user->pmaritalstatus}}</h6>
                                    <h6>{{$user->preligion}}</h6>

                                    {{--<h6>{{$user->pheightfrom}}</h6>
                                    <h6>{{$user->pheightto}}</h6>
                                    <h6>{{$user->pphysicalstatus}}</h6>
                                    <h6>{{$user->peatinghabit}}</h6>
                                    <h6>{{$user->pdrinkinghabit}}</h6>
                                    <h6>{{$user->psmokinghabit}}</h6>
                                    <h6>{{$user->peducationlevel}}</h6>
                                    <h6>{{$user->pemployedin}}</h6>
                                    <h6>{{$user->pcitizenship}}</h6>
                                    <h6>{{$user->pannualincomefrom}}</h6>
                                    <h6>{{$user->pannualincometo}}</h6>--}}
                                </div>
                </div>
            </div>
            <br>

            <div class="card" style="width: 90%; margin-left: 5%">
                <div class="card-header text-left"><b>Detail About Your Views for Special Matching</b></div>
                <div class="row card-body  form-group">
                    <div class="col-md-5">
                        <h6>Religious View</h6>
                        <h6>Employment View</h6>
                        <h6>Dream Lifestyle</h6>
                        <h6>Dream Family</h6>
                        <h6>Travelling</h6>
                        <h6>Music</h6>
                        <h6>Game</h6>
                        <h6>Smoking</h6>
                        <h6>Drinking</h6>

                    </div>

                    <div class="col-md-2">
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>

                    </div>

                    <div class="col-md-5">
                        <h6>{{$user->mreligious}}</h6>
                        <h6>{{$user->memployment}}</h6>
                        <h6>{{$user->mlifestyle}}</h6>
                        <h6>{{$user->mfamily}}</h6>
                        <h6>{{$user->mtravelling}}</h6>
                        <h6>{{$user->mmusic}}</h6>
                        <h6>{{$user->mgame}}</h6>
                        <h6>{{$user->msmoking}}</h6>
                        <h6>{{$user->mdrinking}}</h6>

                    </div>
                </div>
            </div>
            <br>

            <div class="card" style="width: 90%; margin-left: 5%">
                <div class="card-header text-left"><b>Detail About Your Preferred Partner's Views for Special Matching</b></div>
                <div class="row card-body  form-group">
                    <div class="col-md-5">
                        <h6>Religious View</h6>
                        <h6>Employment View</h6>
                        <h6>Dream Lifestyle</h6>
                        <h6>Dream Family</h6>
                        <h6>Travelling</h6>
                        <h6>Music</h6>
                        <h6>Game</h6>
                        <h6>Smoking</h6>
                        <h6>Drinking</h6>

                    </div>

                    <div class="col-md-2">
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>
                        <h6>:</h6>

                    </div>

                    <div class="col-md-5">
                        <h6>{{$user->mpreligious}}</h6>
                        <h6>{{$user->mpemployment}}</h6>
                        <h6>{{$user->mplifestyle}}</h6>
                        <h6>{{$user->mpfamily}}</h6>
                        <h6>{{$user->mptravelling}}</h6>
                        <h6>{{$user->mpmusic}}</h6>
                        <h6>{{$user->mpgame}}</h6>
                        <h6>{{$user->mpsmoking}}</h6>
                        <h6>{{$user->mpdrinking}}</h6>

                    </div>
                </div>
            </div>

            <br>

        </div>
    </div>


@endsection

