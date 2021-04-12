
@extends('frontend.layouts.master')

@section('main-content')
@section('styles')
    <!-- The styles -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css" />
    <link href="{{asset('frontend')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
    <link href="{{asset('frontend')}}/css/animate.css" rel="stylesheet" type="text/css" >
    <link href="{{asset('frontend')}}/css/owl.carousel.css" rel="stylesheet" type="text/css" >
    <link href="{{asset('frontend')}}/css/venobox.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="{{asset('frontend')}}/css/styles.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/css/reg_style.css" />

@endsection
<div id="preloader">
    <span class="margin-bottom"><img src="{{asset('frontend')}}/images/loader.gif" alt="" /></span>
</div>
<!-- PAGE HEADER -->
<section class="page-header" data-stellar-background-ratio="1.2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>
                    Blog Posts
                </h3>
                <p class="page-breadcrumb">
                    <a href="#">Home</a> / Blog
                </p>
            </div>
        </div> <!-- end .row  -->
    </div> <!-- end .container  -->
</section> <!-- end PAGE HEADER -->
<!--  SERVICES SECTION-->

<section class="section-content-block section-services-bg">

    <div class="container wow fadeInUp">
        <div class="panel panel-primary" style="margin:20px;">
            <div class="panel-heading">
                <h3 class="panel-title">Registration Form</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">Name<span style="color: red">*</span></label>
                            <input type="text" class="form-control input-sm" name="name" id="name" placeholder="">
                            <font style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">Father name<span style="color: red">*</span>	</label>
                            <input type="text" class="form-control input-sm" name="father_name" id="name"
                                   placeholder="">
                            <font style="color: red">{{($errors->has('father_name'))?($errors->first('father_name')):''}}</font>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">Mother name<span style="color: red">*</span>	</label>
                            <input type="text" class="form-control input-sm" name="mother_name" id="name"
                                   placeholder="">
                            <font style="color: red">{{($errors->has('mother_name'))?($errors->first('mother_name')):''}}</font>

                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="email">Email<span style="color: red">*</span></label>
                            <input type="email" class="form-control input-sm" name="email" id="email" placeholder="">
                            <font style="color: red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">Password<span style="color: red">*</span>	</label>
                            <input type="password"name="password" id="password" placeholder="Password"class="form-control input-sm">
                            <font style="color: red">{{($errors->has('Password'))?($errors->first('Password')):''}}</font>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">Confirm Password<span style="color: red">*</span>	</label>
                            <input type="password" name="confirm_password" id="password" placeholder="Password"  class="form-controlinput-sm">
                            <font style="color: red">{{($errors->has('confirm_password'))?($errors->first('confirm_password')):''}}</font>
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="mobile">Mobile<span style="color: red">*</span></label>
                            <input type="text" class="form-control input-sm" name="mobile" id="mobile" placeholder="">
                            <font style="color: red">{{($errors->has('mobile'))?($errors->first('mobile'))
                            :''}}</font>
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="address">Address<span style="color: red">*</span></label>
                            <textarea class="form-control input-sm" name="address" id="address" rows="3"></textarea>
                            <font style="color: red">{{($errors->has('address'))?($errors->first('address'))
                            :''}}</font>
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="city">District<span style="color: red">*</span></label>


                            <select class="form-control input-sm" name="district_id" id="district_id">
                                <option selected disabled>-- Select District --</option>
                                @foreach($districts as $district)
                                    @if($district)
                                <option value="{{$district->id}}">{{$district->district_name}}</option>
                                    @endif
                                    @endforeach

                            </select>
                            <font style="color: red">{{($errors->has('district_id'))?($errors->first('district_id')):''}}</font>



                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="state">Nearest<span style="color: red">*</span></label>
                            <select class="form-control input-sm" name="nearest_id" id="nearest_id">

                                <option selected disabled>-- {{__('Select Nearest Name ')}}--</option>

                            </select>
                            <font style="color: red">{{($errors->has('nearest_id'))?($errors->first('nearest_id')):''}}</font>




                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="country">Blood Group<span style="color: red">*</span></label>
                            <select class="form-control input-sm" name="blood_group_id" id="blood_group_id">
                                <option selected disabled>-- Select Blood Group --</option>
                                @foreach($bloods as $blood)
                                    @if($blood)
                                        <option value="{{$blood->id}}">{{$blood->blood_group_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <font style="color: red">{{($errors->has('blood_group_id'))?($errors->first('blood_group_id')):''}}</font>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">Weight<span style="color: red">*</span>	</label>
                            <input type="number" class="form-control input-sm"
                                   name="weight"
                                   id="weight"
                                   placeholder="weight">
                            <font style="color: red">{{($errors->has('weight'))?($errors->first('weight')):''}}</font>
                        </div>


                        <div class="form-group col-md-6 col-sm-6" > Gender <span style="color: red">*</span>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="male" name="gender"
                                       id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2"> Male</label>
                            </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="female" name="gender"
                                           id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1"> Female </label>

                                </div>
                            <font style="color: red">{{($errors->has('gender'))?($errors->first('gender')):''}}</font>
                        </div>


                        <div class="form-group col-md-6 col-sm-6" > married Status <span style="color: red">*</span>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="1" name="married_Status"
                                       id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2"> Married</label>
                            </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="0" name="married_Status"
                                           id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1"> Unmarried </label>
                                </div>
                            <font style="color: red">{{($errors->has('married_Status'))?($errors->first('married_Status')):''}}</font>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="DOB">Date of Birth*</label>
                            <input type="date" class="form-control " name="date_of_birth" id="DOB" placeholder="">
                            <font style="color: red">{{($errors->has('date_of_birth'))?($errors->first('date_of_birth')):''}}</font>
                        </div>

                        <div class="form-group col-md-6 col-sm-6" >Have you ever donated blood before? <span style="color: red">*</span><label
                                    class="radio-inline">
                                <input type="radio"
                                       name="blood_before"
                                       value="1">Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio"
                                       name="blood_before"
                                       value="0">No
                            </label>

                            <font style="color: red">{{($errors->has('blood_before'))?($errors->first('blood_before')):''}}</font>
                        </div>
                    </div>
                    <div class="last_donated" style="display: none">
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="DOB">When was the last time you donated blood? <span style="color: red">*</span></label>
                        <input type="date" class="form-control " name="last_time_donated" id="DOB" placeholder="">
                        <font style="color: red">{{($errors->has('last_time_donated'))?($errors->first('last_time_donated')):''}}</font>
                    </div>
                    </div>

                    <div class="women" style="display: none">
                        <div class="form-group col-md-6 col-sm-6" >FEMALE DONORS:<span style="color: red">*</span><br/>
                            Are you pregnant <span style="color: red">*</span>   <label class="radio-inline">
                                <input type="radio"
                                       name="pregnant"
                                       value="0">No
                            </label>
                            <label class="radio-inline">
                                <input type="radio"
                                       name="pregnant"
                                       value="1">Yes
                            </label><br/>
                            Have you had an abortion in the last 3 months <span style="color: red">*</span>
                            <label class="radio-inline">
                                <input type="radio"
                                       value="0"
                                       name="abortion_lasabortiont_month">No
                            </label>
                            <label class="radio-inline">
                                <input type="radio"
                                       name="abortion"
                                       value="1">Yes
                            </label><br/>
                            Do you have a child less then one year old? <span style="color: red">*</span>   <label class="radio-inline">
                                <input type="radio"
                                       name="child_one_year_old"
                                       value="0">No
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="child_one_year_old"
                                       value="1">Yes
                            </label>


                        </div>
                    </div>
                        <div class="form-group col-md-6 col-sm-6" >
                            Have you any reason to believe that you may be infected
                                By either Hepatitis, Malaria, HIV/AIDS, and/or venereal disease?<span style="color: red">*</span><label
                                        class="radio-inline">
                                <input type="radio"
                                       name="venereal_disease"
                                value="0">No
                            </label>
                            <label class="radio-inline">
                                <input type="radio"
                                       name="venereal_disease"
                                       value="1">Yes
                            </label>

                            <font style="color: red">{{($errors->has('venereal_disease'))?($errors->first('venereal_disease')):''}}</font>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="address">Do you suffer from or have suffered from any of the following diseases?<span style="color: red">*</span>
                                @foreach($data as $diseases)
                                    @if($diseases)
                                <div class="form-check">

                                    <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value="{{$diseases->id}}"
                                            id="diseases_id"
                                            name="diseases_id[]"
                                    />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{$diseases->diseases_name}}
                                    </label>
                                </div>
                                    @endif
                               @endforeach

                            </label>
                            <font style="color: red">{{($errors->has('diseases_id'))?($errors->first('diseases_id')):''}}</font>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="address">Is there any history of surgery or blood transfusion in the past 6 months?<span style="color: red">*</span>
                               @foreach($_data as $surgery)
                                   @if ($surgery)

                                <div class="form-check">
                                    <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value="{{$surgery->id}}"
                                            id="any_diseases"
                                            name="surgery_id"
                                    />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{$surgery->surgery_name}}
                                    </label>
                                </div>

                                    @endif
                                   @endforeach
                            </label>
                            <font style="color: red">{{($errors->has('surgery_id'))?($errors->first('surgery_id')):''}}</font>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="address">Other allergies:<span style="color: red">*</span></label>
                            <textarea class="form-control input-sm" id="address" name="other_allergies" rows="3"></textarea>
                            <font style="color: red">{{($errors->has('other_allergies'))?($errors->first('other_allergies')):''}}</font>
                        </div>

                        <div class="form-group col-md-3 col-sm-3">
                            <label for="photo">Photo<span style="color: red">*</span></label>
                            <input type="file" id="photo"name="image">
                            <p class="help-block">Please upload individual photo. Group photo is not acceptable.</p>
                            <font style="color: red">{{($errors->has('image'))?($errors->first('image'))
                            :''}}</font>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="address">Are You Donor? <span style="color: red">*</span>
                                <input class="form-check-input" type="checkbox" name="donor" id="inlineCheckbox1"
                                       value="1">
                            </label>
                            <font style="color: red">{{($errors->has('donor'))?($errors->first('donor'))
                            :''}}</font>
                        </div>
                    </div>


                    <div class="col-md-12 col-sm-12">
                        <div class="form-group col-md-3 col-sm-3 pull-right" >
                            <label for="accepted">Accepted
                                <input class="form-check-input" type="checkbox" name="accepted" value="1">
                            </label>
                            <font style="color: red">{{($errors->has('accepted'))?($errors->first('accepted')):''}}</font>
                            <input type="submit" class="btn btn-primary" value="Register"/>
                        </div>
                    </div>
                </form>
            </div>

    </div>
</section> <!--  end .section-services -->

<!-- JAVASCRIPT SECTION  -->
@section('scripts')

    <script src="{{asset('frontend')}}/js/jquery.min.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend')}}/js/wow.min.js"></script>
    <script src="{{asset('frontend')}}/js/jquery.backTop.min.js"></script>
    <script src="{{asset('frontend')}}/js/waypoints.min.js"></script>
    <script src="{{asset('frontend')}}/js/waypoints-sticky.min.js"></script>
    <script src="{{asset('frontend')}}/js/jquery.stellar.min.js"></script>
    <script src="{{asset('frontend')}}/js/venobox.min.js"></script>
    <script src="{{asset('frontend')}}/js/custom-scripts.js"></script>
@endsection
@endsection

