@extends('layouts.app')



@section('content')


    <div class="container" >
        <div class="row">
            <div class="col-12"><div class="card-header text-center">Partner Preference Profile</div></div>
            {{--<div class="col"><button type="button" class="btn btn-dark">Edit</button></div>--}}
        </div><br>



        <div class="container-fluid">
            <div class="well well-md">
                <div class="card-body form-group">


                    <label for="">Age From *</label>
                    <input type="number" step="" min="18" max="60" class="form-control" id="agefrom" ><br>

                    <label for="">Age to *</label>
                    <input type="number" step="" min="18" max="60" class="form-control" id="ageto" ><br>


                    <label for="">Height From *</label>
                    <input type="number" step="0.1" min="3" max="7" class="form-control" id="heightfrom" ><br>

                    <label for="">Height to *</label>
                    <input type="number" step="0.1" min="3" max="7" class="form-control" id="heightto" ><br>

                    <label for="">Physical Status *</label>
                    <select name="" class="form-control">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select> <br>

                    <label for="">Marital Status *</label>
                    <select name="" class="form-control">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select> <br>

                    <label for="">Mother Tongue *</label>
                    <select name="" class="form-control">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select> <br>

                    <label for="">Religion *</label>
                    <select name="" class="form-control">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select> <br>

                    <label for="">Eating Habit *</label>
                    <select name="eatinghabit" class="form-control">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select> <br>

                    <label for="">Drinking Habit *</label>
                    <select name="drinkinghabit" class="form-control">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select> <br>

                    <label for="">Smoking Habit *</label>
                    <select name="smokinghabit" class="form-control">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select> <br>

                    <label for="">Education Level *</label>
                    <select name="educationlevel" class="form-control">
                        <option value="Masters">Masters</option>
                        <option value="Graduation">Graduation</option>
                        <option value="HSC">HSC</option>
                        <option value="SSC">SSC</option>
                    </select> <br>


                    <label for="">Employed In *</label>
                    <select name="employedin" class="form-control">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select> <br>


                    <label for="">Citizenship *</label>
                    <select name="citizenship" class="form-control">
                        <option value="Not Applicable"></option>
                        <option value="America">America</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="China">China</option>
                        <option value="India">India</option>
                    </select><br>

                    <label for="">Currently Living In *</label>
                    <select name="country" class="form-control">
                        <option value="Bangladesh">Bangladesh</option>
                        {{--<option value="Not Applicable">Country</option>
                        <option value="America">America</option>
                        <option value="China">China</option>
                        <option value="India">India</option>--}}
                    </select> <br>

                    <label for="">Annual Income *</label>
                    <input type="number" class="form-control" id="annualincome" ><br>



                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <button type="submit" class="btn btn-primary">Submit</button>



                </div>
            </div>
        </div>




    </div>

@endsection

