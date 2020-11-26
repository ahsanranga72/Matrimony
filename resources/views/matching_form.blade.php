@extends('layouts.app')

@section('content')




    <form class="form" action="edit_profile" method="post"  enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="container">
            <div class="card">
                <br>
                <div class="card" style="width: 80%; margin-left: 10% ">

                    <div class="card-header">Detail About Your Preferred Partner's Views</div>

                    <div class="card-body">
                        <label for="">Religious View:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value="">Very Religious</option>
                            <option value="">Normal</option>
                            <option value="">Not Interested</option>
                        </select> <br>

                        <label for="">Employment View:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value="">Employment</option>
                            <option value="">No Employment</option>
                        </select> <br>

                        <label for="">Dream Lifestyle:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value="">Rich</option>
                            <option value="">Normal</option>
                            <option value="">Very Normal</option>
                        </select> <br>

                        <label for="">Dream Family:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value="">Joint</option>
                            <option value="">Separated</option>
                        </select> <br>

                        <label for="">Travelling:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value="">Yes</option>
                            <option value="">No</option>
                        </select> <br>

                        <label for="">Music:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value="">Yes</option>
                            <option value="">No</option>
                        </select> <br>

                        <label for="">Game:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select> <br>

                        <label for="">Smoking:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select> <br>

                        <label for="">Drinking:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select> <br>

                    </div>
                </div>


                <br>


                <div class="card" style="width: 80%; margin-left: 10% ">
                    <div class="card-header">Detail About Your Views</div>

                    <div class="card-body">
                        <label for="">Religious View:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value="">Very Religious</option>
                            <option value="">Normal</option>
                            <option value="">Not Interested</option>
                        </select> <br>

                        <label for="">Employment View:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value="">Employment</option>
                            <option value="">No Employment</option>
                        </select> <br>

                        <label for="">Dream Lifestyle:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value="">Rich</option>
                            <option value="">Normal</option>
                            <option value="">Very Normal</option>
                        </select> <br>

                        <label for="">Dream Family:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value="">Joint</option>
                            <option value="">Separated</option>
                        </select> <br>

                        <label for="">Travelling:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value="">Yes</option>
                            <option value="">No</option>
                        </select> <br>

                        <label for="">Music:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value="">Yes</option>
                            <option value="">No</option>
                        </select> <br>

                        <label for="">Game:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select> <br>

                        <label for="">Smoking:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select> <br>

                        <label for="">Drinking:</label>
                        <select name="" class="form-control">
                            <option value=""><--Select--></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select> <br>
                    </div>
                </div>
                <br>
                <div class=" text-right"><button type="submit" class="btn btn-primary">Update  </button></div>
                <br>
            </div>
        </div>
    </form>


@endsection
