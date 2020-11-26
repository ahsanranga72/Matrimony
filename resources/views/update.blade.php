@extends('layouts.app')



@section('content')

    <form class="form" action="update_profile" method="post"  enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="container" >
            <div class="card">
            <div class="card-header text-lg-center"><b> Update Your Profile Details</b></div>
                <br>
            <div class="card " style="width: 80%; margin-left: 10%" >
                {{-- <div class="card-header">Your Current Location</div>--}}
                <div class="well well-md card ">
                    <div class="card-body  form-group" >

                        <label for="" style="width: 80%; margin-left: 10% ">Update Your Profile Picture</label>
                        <input type="file" class="form-control" style="width: 80%; margin-left: 10% " name="avatar" />

                    </div>
                </div>
            </div>
                <br>
            <div class="card" style="width: 80%; margin-left: 10% ">
                <div class="card-header">Your Current Location</div>
                <div class="">
                    <div class="card-body  form-group" style="width: 80%; margin-left: 10% ">


                        <label for="">Currently Living In</label>
                        <select name="country" class="form-control" >
                            <option value="{{$user->country}}">{{$user->country}}</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="America">America</option>
                            <option value="China">China</option>
                            <option value="India">India</option>
                        </select> <br>


                        <label for="">Residing City/District</label>
                        <select name="district" class="form-control">
                            <option value="{{$user->district}}">{{$user->district}}</option>
                            <option value="Bagerhat">Bagerhat</option>
                            <option value="Bandarban">Bandarban</option>
                            <option value="Barguna">Barguna</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Bhola">Bhola</option>
                            <option value="Bogra">Bogra</option>
                            <option value="Brahmanbaria">Brahmanbaria</option>
                            <option value="Chandpur">Chandpur</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Chuadanga">Chuadanga</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Cox's Bazar">Cox's Bazar</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Dinajpur">Dinajpur</option>
                            <option value="Faridpur">Faridpur</option>
                            <option value="Feni">Feni</option>
                            <option value="Gaibandha">Gaibandha</option>
                            <option value="Gazipur">Gazipur</option>
                            <option value="Gopalganj">Gopalganj</option>
                            <option value="Habiganj">Habiganj</option>
                            <option value="Jaipurhat">Jaipurhat</option>
                            <option value="Jamalpur">Jamalpur</option>
                            <option value="Jessore">Jessore</option>
                            <option value="Jhalakati">Jhalakati</option>
                            <option value="Jhenaidah">Jhenaidah</option>
                            <option value="Khagrachari">Khagrachari</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Kishoreganj">Kishoreganj</option>
                            <option value="Kurigram">Kurigram</option>
                            <option value="Kushtia">Kushtia</option>
                            <option value="Lakshmipur">Lakshmipur</option>
                            <option value="Lalmonirhat">Lalmonirhat</option>
                            <option value="Madaripur">Madaripur</option>
                            <option value="Magura">Magura</option>
                            <option value="Manikganj">Manikganj</option>
                            <option value="Meherpur">Meherpur</option>
                            <option value="Moulvibazar">Moulvibazar</option>
                            <option value="Munshiganj">Munshiganj</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Naogaon">Naogaon</option>
                            <option value="Narail">Narail</option>
                            <option value="Narayanganj">Narayanganj</option>
                            <option value="Narsingdi">Narsingdi</option>
                            <option value="Natore">Natore</option>
                            <option value="Nawabganj">Nawabganj</option>
                            <option value="Netrakona">Netrakona</option>
                            <option value="Nilphamari">Nilphamari</option>
                            <option value="Noakhali">Noakhali</option>
                            <option value="Pabna">Pabna</option>
                            <option value="Panchagarh">Panchagarh</option>
                            <option value="Parbattya Chattagram">Parbattya Chattagram</option>
                            <option value="Patuakhali">Patuakhali</option>
                            <option value="Pirojpur">Pirojpur</option>
                            <option value="Rajbari">Rajbari</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Satkhira">Satkhira</option>
                            <option value="Shariatpur">Shariatpur</option>
                            <option value="Sherpur">Sherpur</option>
                            <option value="Sirajganj">Sirajganj</option>
                            <option value="Sunamganj">Sunamganj</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Tangail">Tangail</option>
                            <option value="Thakurgaon">Thakurgaon</option>
                        </select><br>

                        <label for="">Citizenship</label>
                        <select name="citizenship" class="form-control">
                            <option value="{{$user->citizenship}}">{{$user->citizenship}}</option>
                            <option value="America">America</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="China">China</option>
                            <option value="India">India</option>
                        </select><br>

                    </div>
                </div>

            </div>


                <br>


            <div class="card" style="width: 80%; margin-left: 10% ">
                <div class="card-header">Personal Details</div>
                <div class="well well-md">
                    <div class="card-body  form-group" style="width: 80%; margin-left: 10% ">

                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}"> <br>

                        <label for="">Profile Managed By</label>
                        <select name="owner" class="form-control">
                            <option value="{{$user->owner}}">{{$user->owner}}</option>
                            <option value="Self">Self</option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Others">Others</option>
                        </select> <br>



                        <label for="">Gender</label>
                        <select name="sex" class="form-control">
                            <option value="{{$user->sex}}">{{$user->sex}}</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select> <br>


                        <label>Birth Date</label>
                        <label class=" text-danger">( You must have to be 18+ )</label> <br>
                        <input class="" type="date" min="1960-01-01" max="2002-01-01" name="birthdate" value="{{$user->birthdate}}"/>
                        <br><br>

                        <label for="">Religion</label>
                        <select name="religion" class="form-control">
                            <option value="{{$user->religion}}">{{$user->religion}}</option>
                            <option value="Islam">Islam</option>
                            <option value="Hinduism">Hinduism</option>
                            <option value="Christianity">Christianity</option>
                            <option value="Buddhism">Buddhism</option>
                        </select> <br>



                        <label for="">Marital Status</label>
                        <select name="maritalstatus" class="form-control">
                            <option value="{{$user->maritalstatus}}">{{$user->maritalstatus}}</option>
                            <option value="Single">Single</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Separated">Separated</option>
                            <option value="Married">Married</option>
                        </select> <br>

                        <label for="">Height (Foot.Inch)</label>
                        <select name="height" class="form-control">
                            <option value="{{$user->height}}">{{$user->height}}</option>
                            <option value="4.6">4'6"(137 cm)</option>
                            <option value="4.7">4'7"(140 cm)</option>
                            <option value="4.8">4'8"(142 cm)</option>
                            <option value="4.9">4'9"(145 cm)</option>
                            <option value="4.10">4'10"(147 cm)</option>
                            <option value="4.11">4'11"(150 cm)</option>
                            <option value="5.0">5'0"(152 cm)</option>
                            <option value="5.1">5'1"(155 cm)</option>
                            <option value="5.2">5'2"(157 cm)</option>
                            <option value="5.3">5'3"(160 cm)</option>
                            <option value="5.4">5'4"(163 cm)</option>
                            <option value="5.5">5'5"(165 cm)</option>
                            <option value="5.6">5'6"(168 cm)</option>
                            <option value="5.7">5'7"(170 cm)</option>
                            <option value="5.8">5'8"(173 cm)</option>
                            <option value="5.9">5'9"(175 cm)</option>
                            <option value="5.10">5'10"(178 cm)</option>
                            <option value="5.11">5'11"(180 cm)</option>
                            <option value="6.0">6'0"(183 cm)</option>
                            <option value="6.1">6'1"(185 cm)</option>
                            <option value="6.2">6'2"(188 cm)</option>
                            <option value="6.3">6'3"(191 cm)</option>
                            <option value="6.4">6'4"(193 cm)</option>
                            <option value="6.5">6'5"(195 cm)</option>
                            <option value="6.6">6'6"(198 cm)</option>
                            <option value="6.7">6'7"(201 cm)</option>
                            <option value="6.8">6'8"(203 cm)</option>
                            <option value="6.9">6'9"(205 cm)</option>
                            <option value="6.10">6'10"(208 cm)</option>
                            <option value="6.11">6'11"(210 cm)</option>
                            <option value="7.0">7'0"(213 cm)</option>
                        </select><br>

                        <label for="">Physical Status</label>
                        <select name="physicalstatus" class="form-control">
                            <option value="{{$user->physicalstatus}}">{{$user->physicalstatus}}</option>
                            <option value="Normal">Normal</option>
                            <option value="Physically Challenged">Physically Challenged</option>
                        </select><br>

                        <label for="">Family Value</label>
                        <select name="familyvalue" class="form-control">
                            <option value="{{$user->familyvalue}}">{{$user->familyvalue}}</option>
                            <option value="Orthodox">Orthodox</option>
                            <option value="Traditional">Traditional</option>
                            <option value="Moderate">Moderate</option>
                            <option value="Liberal">Liberal</option>
                        </select> <br>

                        <label for="">Family Status</label>
                        <select name="familystatus" class="form-control">
                            <option value="{{$user->familystatus}}">{{$user->familystatus}}</option>
                            <option value="Middle Class">Middle Class</option>
                            <option value="Upper Middle Class">Upper Middle Class</option>
                            <option value="Rich/Affluent">Rich/Affluent</option>
                        </select> <br>

                        <label for="">Ethnicity</label>
                        <select name="ethnicity" class="form-control">
                            <option value="{{$user->ethnicity}}">{{$user->ethnicity}}</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Chakma">Chakma</option>
                            <option value="Bihari">Bihari</option>
                            <option value="Marmar">Marmar</option>
                            <option value="Others">Others</option>
                        </select> <br>



                    </div>

                </div>
            </div>


                <br>


            <div class="card" style="width: 80%; margin-left: 10% ">
                <div class="card-header">Professional Details</div>
                <div class="well well-md">
                    <div class="card-body  form-group" style="width: 80%; margin-left: 10% ">


                        <label for="">Education Level</label>
                        <select name="educationlevel" class="form-control">
                            <option value="{{$user->educationlevel}}">{{$user->educationlevel}}</option>
                            <option value="Doctorate">Doctorate</option>
                            <option value="Masters">Masters</option>
                            <option value="Graduation">Graduation</option>
                            <option value="Diploma">Diploma</option>
                            <option value="HSC">HSC</option>
                            <option value="SSC">SSC</option>
                            <option value="Others">Others</option>
                        </select> <br>

                        <label for="">Field of Education</label>
                        <select name="fieldofeducation" class="form-control">
                            <option value="{{$user->fieldofeducation}}">{{$user->fieldofeducation}}</option>
                            <option value="Arts">Arts</option>
                            <option value="Accountancy">Accountancy</option>
                            <option value="Architechture">Architechture</option>
                            <option value="Business Administration">Business Administration</option>
                            <option value="Business Management">Business Management</option>
                            <option value="Civil">Civil</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Computer Science(hardware)">Computer Science(hardware)</option>
                            <option value="Computer Science(software)">Computer Science(software)</option>
                            <option value="Economics">Economics</option>
                            <option value="Education">Education</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Journalism">Journalism</option>
                            <option value="Law">Law</option>
                            <option value="Library Science">Library Science</option>
                            <option value="Mathmatics">Mathmatics</option>
                            <option value="Medicine">Medicine</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Music">Music</option>
                            <option value="Nursing/Health Science">Nursing/Health Science</option>
                            <option value="Pharmacy">Pharmacy</option>
                            <option value="Public Administration">Public Administration</option>
                            <option value="Science">Science</option>
                            <option value="Others">Others</option>
                        </select> <br>

                        <label for="">Employed In</label>
                        <select name="employedin" class="form-control">
                            <option value="{{$user->employedin}}">{{$user->employedin}}</option>
                            <option value="Accounting/Auditing">Accounting/Auditing</option>
                            <option value="Administrative/Secretarial">Administrative/Secretarial</option>
                            <option value="Advertising/Media/PR">Advertising/Media/PR</option>
                            <option value="Bangking/Finance">Bangking/Finance</option>
                            <option value="Consultant">Consultant</option>
                            <option value="Customer Service">Customer Service</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Education/Teaching">Education/Teaching</option>
                            <option value="Food Service">Food Service</option>
                            <option value="Goverment">Goverment</option>
                            <option value="Healthcare & Medical">Healthcare & Medical</option>
                            <option value="Hospitality & Tourism">Hospitality & Tourism</option>
                            <option value="I.T/Communication">I.T/Communication</option>
                            <option value="Journalism">Journalism</option>
                            <option value="Legal">Legal</option>
                            <option value="Law enforcement">Law enforcement</option>
                            <option value="Military">Military</option>
                            <option value="Management/HR">Management/HR</option>
                            <option value="Political/Goverment">Political/Goverment</option>
                            <option value="Researcher">Researcher</option>
                            <option value="Sales & Marketing">Sales & Marketing</option>
                            <option value="Self-Employed/Entrepruneur">Self-Employed/Entrepruneur</option>
                            <option value="Senior Management">Senior Management</option>
                            <option value="Student">Student</option>
                            <option value="Teacher/Professor">Teacher/Professor</option>
                            <option value="Technical Science">Technical Science</option>
                            <option value="Not Working"></option>
                            <option value="Others"></option>
                        </select> <br>

                        <label for="">Annual Income (BDT)</label>
                        <select name="annualincome" class="form-control">
                            <option value="{{$user->annualincome}}">{{$user->annualincome}}</option>
                            <option value="50000">50000 Tk</option>
                            <option value="100000">100000 Tk</option>
                            <option value="200000">200000 Tk</option>
                            <option value="300000">300000 tk</option>
                            <option value="400000">400000 Tk</option>
                            <option value="500000">500000 Tk</option>
                            <option value="600000">600000 Tk</option>
                            <option value="700000">700000 Tk</option>
                            <option value="800000">800000 Tk</option>
                            <option value="900000">900000 Tk</option>
                            <option value="1000000">1000000 Tk</option>
                            <option value="1100000">1100000 Tk</option>
                            <option value="1200000">1200000 Tk</option>
                            <option value="1300000">1300000 Tk</option>
                            <option value="1400000">1400000 Tk</option>
                            <option value="1500000">1500000 Tk</option>
                            <option value="1600000">1600000 Tk</option>
                        </select><br>

                    </div>

                </div>
            </div>


                <br>


            <div class="card" style="width: 80%; margin-left: 10% ">
                <div class="card-header">More About Family</div>
                <div class="well well-md">
                    <div class="card-body  form-group" style="width: 80%; margin-left: 10% ">


                        <label for="">Ancestral Family Origin</label>
                        <input type="text" class="form-control" value="{{$user->ancestralfamilyorigin}}" name="ancestralfamilyorigin" >
                        <br>

                        <label for="">Mother's Occupation</label>
                        <input type="text" class="form-control" value="{{$user->motheroccupation}}" name="motheroccupation" >
                        <br>

                        <label for="">Father's Occupation</label>
                        <input type="text" class="form-control" value="{{$user->fatheroccupation}}" name="fatheroccupation" >
                        <br>

                        <label for="">No. of Brother</label>
                        <input type="number" class="form-control" value="{{$user->noofbrother}}" name="noofbrother" >
                        <br>

                        <label for="">No. of Married Brother</label>
                        <input type="number" class="form-control" value="{{$user->noofmarriedbrother}}" name="noofmarriedbrother" >
                        <br>

                        <label for="">No. of Sister</label>
                        <input type="number" class="form-control" value="{{$user->noofsister}}" name="noofsister" >
                        <br>

                        <label for="">No. of Married Sister</label>
                        <input type="number" class="form-control" value="{{$user->noofmarriedsister}}" name="noofmarriedsister" >
                        <br>

                    </div>

                </div>
            </div>


                <br>

            <div class="card" style="width: 80%; margin-left: 10% ">
                <div class="card-header">More About Own Self</div>
                <div class="well well-md">
                    <div class="card-body  form-group" style="width: 80%; margin-left: 10% ">


                        <label for="">Weight (Kgs)</label>
                        <select name="weight" class="form-control">
                            <option value="{{$user->weight}}">{{$user->weight}}</option>
                            <option value="25">25 kg</option>
                            <option value="26">26 kg</option>
                            <option value="27">27 kg</option>
                            <option value="28">28 kg</option>
                            <option value="29">29 kg</option>
                            <option value="30">30 kg</option>
                            <option value="31">31 kg</option>
                            <option value="32">32 kg</option>
                            <option value="33">33 kg</option>
                            <option value="34">34 kg</option>
                            <option value="35">35 kg</option>
                            <option value="36">36 kg</option>
                            <option value="37">37 kg</option>
                            <option value="38">38 kg</option>
                            <option value="39">39 kg</option>
                            <option value="40">40 kg</option>
                            <option value="41">41 kg</option>
                            <option value="42">42 kg</option>
                            <option value="43">43 kg</option>
                            <option value="44">44 kg</option>
                            <option value="45">45 kg</option>
                            <option value="46">46 kg</option>
                            <option value="47">47 kg</option>
                            <option value="48">48 kg</option>
                            <option value="49">49 kg</option>
                            <option value="50">50 kg</option>
                            <option value="51">51 kg</option>
                            <option value="52">52 kg</option>
                            <option value="53">53 kg</option>
                            <option value="54">54 kg</option>
                            <option value="55">55 kg</option>
                            <option value="56">56 kg</option>
                            <option value="57">57 kg</option>
                            <option value="58">58 kg</option>
                            <option value="59">59 kg</option>
                            <option value="60">60 kg</option>
                            <option value="61">61 kg</option>
                            <option value="62">62 kg</option>
                            <option value="63">63 kg</option>
                            <option value="64">64 kg</option>
                            <option value="65">65 kg</option>
                            <option value="66">66 kg</option>
                            <option value="67">67 kg</option>
                            <option value="68">68 kg</option>
                            <option value="69">69 kg</option>
                            <option value="70">70 kg</option>
                            <option value="71">71 kg</option>
                            <option value="72">72 kg</option>
                            <option value="73">73 kg</option>
                            <option value="74">74 kg</option>
                            <option value="75">75 kg</option>
                            <option value="76">76 kg</option>
                            <option value="77">77 kg</option>
                            <option value="78">78 kg</option>
                            <option value="79">79 kg</option>
                            <option value="80">80 kg</option>
                            <option value="81">81 kg</option>
                            <option value="82">82 kg</option>
                            <option value="83">83 kg</option>
                            <option value="84">84 kg</option>
                            <option value="85">85 kg</option>
                            <option value="86">86 kg</option>
                            <option value="87">87 kg</option>
                            <option value="88">88 kg</option>
                            <option value="89">89 kg</option>
                            <option value="90">90 kg</option>
                            <option value="91">91 kg</option>
                            <option value="92">92 kg</option>
                            <option value="93">93 kg</option>
                            <option value="94">94 kg</option>
                            <option value="95">95 kg</option>
                            <option value="96">96 kg</option>
                            <option value="97">97 kg</option>
                            <option value="98">98 kg</option>
                            <option value="99">99 kg</option>
                            <option value="100">100 kg</option>
                            <option value="101">101 kg</option>
                            <option value="102">102 kg</option>
                            <option value="103">103 kg</option>
                            <option value="104">104 kg</option>
                            <option value="105">105 kg</option>
                            <option value="106">106 kg</option>
                            <option value="107">107 kg</option>
                            <option value="108">108 kg</option>
                            <option value="109">109 kg</option>
                            <option value="110">110 kg</option>

                        </select><br>

                        <label for="">Body Type</label>
                        <select name="bodytype" class="form-control">
                            <option value="{{$user->bodytype}}">{{$user->bodytype}}</option>
                            <option value="Slim">Slim</option>
                            <option value="Athletic">Athletic</option>
                            <option value="Average">Average</option>
                            <option value="Heavy">Heavy</option>
                        </select> <br>

                        <label for="">Complexion</label>
                        <select name="complexion" class="form-control">
                            <option value="{{$user->complexion}}">{{$user->complexion}}</option>
                            <option value="Very Fair">Very Fair</option>
                            <option value="Fair">Fair</option>
                            <option value="Wheatish">Wheatish</option>
                            <option value="Wheatish Brown">Wheatish Brown</option>
                            <option value="Dark">Dark</option>
                        </select> <br>

                        <label for="">Spoken Language</label>
                        <input type="text" class="form-control" value="{{$user->spokenlanguage}}" name="spokenlanguage" ><br>

                        <label for="">Eating Habit</label>
                        <select name="eatinghabit" class="form-control">
                            <option value="{{$user->eatinghabit}}">{{$user->eatinghabit}}</option>
                            <option value="Vegetarian">Vegetarian</option>
                            <option value="Non-vegetarian">Non-vegetarian</option>
                            <option value="Only Halal Food">Only Halal Food</option>
                            <option value="Anything">Anything</option>
                        </select> <br>


                        <label for="">Hobbies</label>
                        <input type="text" class="form-control" value="{{$user->hobbies}}" name="hobbies" ><br>

                        <label for="">Favourites</label>
                        <input type="text" class="form-control" value="{{$user->favourite}}" name="favourite" ><br>


                    </div>

                </div>
            </div>

                <br>

            <div class="card" style="width: 80%; margin-left: 10% ">
                <div class="card-header text-center">Partner Preference Profile</div>
                <div class="well well-md">
                    <div class="card-body form-group" style="width: 80%; margin-left: 10% ">

                        <label for="">Gender</label>
                        <select name="psex" class="form-control">
                            <option value="{{$user->psex}}">{{$user->psex}}</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select> <br>

                        <label for="">Age From</label>
                        <select name="pagefrom" class="form-control">
                            <option value="{{$user->pagefrom}}">{{$user->pagefrom}}</option>
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

                        <label for="">Age to</label>
                        <select name="pageto" class="form-control">
                            <option value="{{$user->pageto}}">{{$user->pageto}}</option>
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


                        <label for="">Marital Status</label>
                        <select name="pmaritalstatus" class="form-control">
                            <option value="{{$user->pmaritalstatus}}">{{$user->pmaritalstatus}}</option>
                            <option value="Single">Single</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Separated">Separated</option>
                            <option value="Married">Married</option>
                        </select> <br>


                        <label for="">Religion</label>
                        <select name="preligion" class="form-control">
                            <option value="{{$user->preligion}}">{{$user->preligion}}</option>
                            <option value="Islam">Islam</option>
                            <option value="Hinduism">Hinduism</option>
                            <option value="Christianity">Christianity</option>
                            <option value="Buddhism">Buddhism</option>
                        </select>



                    </div>
                </div>
            </div>

                <br>
                <br>

                <div class="card" style="width: 80%; margin-left: 10% ">
                    <div class="card-header">Detail About Your Views for Special Matching</div>

                    <div class="card-body">
                        <label for="">Religious View:</label>
                        <select name="mreligious" class="form-control">
                            <option value="{{$user->mreligious}}">{{$user->mreligious}}</option>
                            <option value="Very Religious">Very Religious</option>
                            <option value="Normal">Normal</option>
                            <option value="Not Interested">Not Interested</option>
                        </select> <br>

                        <label for="">Employment View:</label>
                        <select name="memployment" class="form-control">
                            <option value="{{$user->memployment}}">{{$user->memployment}}</option>
                            <option value="Employment">Employment</option>
                            <option value="No Employment">No Employment</option>
                        </select> <br>

                        <label for="">Dream Lifestyle:</label>
                        <select name="mlifestyle" class="form-control">
                            <option value="{{$user->mlifestyle}}">{{$user->mlifestyle}}</option>
                            <option value="Rich">Rich</option>
                            <option value="Normal">Normal</option>
                            <option value="Very Normal">Very Normal</option>
                        </select> <br>

                        <label for="">Dream Family:</label>
                        <select name="mfamily" class="form-control">
                            <option value="{{$user->mfamily}}">{{$user->mfamily}}</option>
                            <option value="Joint">Joint</option>
                            <option value="Separated">Separated</option>
                        </select> <br>

                        <label for="">Travelling:</label>
                        <select name="mtravelling" class="form-control">
                            <option value="{{$user->mtravelling}}">{{$user->mtravelling}}</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select> <br>

                        <label for="">Music:</label>
                        <select name="mmusic" class="form-control">
                            <option value="{{$user->mmusic}}">{{$user->mmusic}}</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select> <br>

                        <label for="">Game:</label>
                        <select name="mgame" class="form-control">
                            <option value="{{$user->mgame}}">{{$user->mgame}}</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select> <br>

                        <label for="">Smoking:</label>
                        <select name="msmoking" class="form-control">
                            <option value="{{$user->msmoking}}">{{$user->msmoking}}</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select> <br>

                        <label for="">Drinking:</label>
                        <select name="mdrinking" class="form-control">
                            <option value="{{$user->mdrinking}}">{{$user->mdrinking}}</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select> <br>
                    </div>
                </div>
                <br>

                <div class="card" style="width: 80%; margin-left: 10% ">

                    <div class="card-header">Detail About Your Preferred Partner's Views for Special Matching</div>

                    <div class="card-body">
                        <label for="">Religious View:</label>
                        <select name="mpreligious" class="form-control">
                            <option value="{{$user->mpreligious}}">{{$user->mpreligious}}</option>
                            <option value="Very Religious">Very Religious</option>
                            <option value="Normal">Normal</option>
                            <option value="Not Interested">Not Interested</option>
                        </select> <br>

                        <label for="">Employment View:</label>
                        <select name="mpemployment" class="form-control">
                            <option value="{{$user->mpemployment}}">{{$user->mpemployment}}</option>
                            <option value="Employment">Employment</option>
                            <option value="No Employment">No Employment</option>
                        </select> <br>

                        <label for="">Dream Lifestyle:</label>
                        <select name="mplifestyle" class="form-control">
                            <option value="{{$user->mplifestyle}}">{{$user->mplifestyle}}</option>
                            <option value="Rich">Rich</option>
                            <option value="Normal">Normal</option>
                            <option value="Very Normal">Very Normal</option>
                        </select> <br>

                        <label for="">Dream Family:</label>
                        <select name="mpfamily" class="form-control">
                            <option value="{{$user->mpfamily}}">{{$user->mpfamily}}</option>
                            <option value="Joint">Joint</option>
                            <option value="Separated">Separated</option>
                        </select> <br>

                        <label for="">Travelling:</label>
                        <select name="mptravelling" class="form-control">
                            <option value="{{$user->mptravelling}}">{{$user->mptravelling}}</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select> <br>

                        <label for="">Music:</label>
                        <select name="mpmusic" class="form-control">
                            <option value="{{$user->mpmusic}}">{{$user->mpmusic}}</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select> <br>

                        <label for="">Game:</label>
                        <select name="mpgame" class="form-control">
                            <option value="{{$user->mpgame}}">{{$user->mpgame}}</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select> <br>

                        <label for="">Smoking:</label>
                        <select name="mpsmoking" class="form-control">
                            <option value="{{$user->mpsmoking}}">{{$user->mpsmoking}}</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select> <br>

                        <label for="">Drinking:</label>
                        <select name="mpdrinking" class="form-control">
                            <option value="{{$user->mpdrinking}}">{{$user->mpdrinking}}</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select> <br>

                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
                <br>
        </div>

        </div>

    </form>


@endsection
