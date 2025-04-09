@extends('fe.index')
@section('content')
<section class="section-cart padding-tb-50">
<script>
    let passwordVisible = false;
</script>

    <div class="container">
        <div class="row mb-minus-24">
            <div class="col-lg-3 mb-24">
                <div class="bb-cart-sidebar-block fit-ct">              
                    <div class="profile-logo">
                        @if (Auth::user()->logo)
                            <img src="{{asset('upload/images')}}/{{Auth::user()->logo}}" alt="">
                        @else 
                            <img src="{{asset('upload/images')}}/{{Auth::user()->gender == 1 ? 'male.png' : 'female.png'}}">
                        @endif
                    </div>    
                    <div>
                        <p style="margin-left:10px; font-family:quicksand; font-weight:bold; font-size:28px; color:#6c7fd8">{{Auth::user()->name}}</p><br>
                        @if(Auth::user()->role == 'employee')
                        <p style="margin-left: 10px">{{\Carbon\Carbon::parse(Auth::user()->birthday)->format('d/m/Y')}}</p>
                        @elseif(Auth::user()->role == 'company')
                        <a style="margin-left: 10px" href="#">{{Auth::user()->web}}</a>
                        @else
                        <p style="margin-left: 10px">{{\Carbon\Carbon::parse(Auth::user()->birthday)->format('d/m/Y')}}</p>
                        <a style="margin-left: 10px" href="#">{{Auth::user()->web}}</a>
                        @endif
                    </div>
                </div> 
                <div class="" style="margin-top: 15px; margin-left: 5px; margin-right: 5px; ">
                    <div class="profile-cat">
                        <a href="#" onclick="showView('account'); return false;">
                            <h5 >Account</h5>
                        </a>  
                        <div class="bottom-bor"></div>                     
                    </div>
                    @if(Auth::user()->role == 'admin')
                        <div class="profile-cat">
                            <a href="#" onclick="showView('cv'); return false;">
                                <h5 >CV</h5>
                            </a>      
                            <div class="bottom-bor"></div>                 
                        </div>
                        <div class="profile-cat">
                            <a href="#" onclick="showView('job'); return false;">
                                <h5 >Job</h5>
                            </a>    
                            <div class="bottom-bor"></div>                   
                        </div>
                    @elseif(Auth::user()->role == 'company')
                        <div class="profile-cat">
                            <a href="#" onclick="showView('job'); return false;">
                                <h5 >Job</h5>
                            </a>    
                            <div class="bottom-bor"></div>                   
                        </div>
                    @else
                        <div class="profile-cat">
                            <a href="#" onclick="showView('cv'); return false;">
                                <h5 >CV</h5>
                            </a>      
                            <div class="bottom-bor"></div>                 
                        </div>
                    @endif
                    <div class="profile-cat">
                        <a href="#" onclick="showView('application'); return false;">
                            <h5 >{{Auth::user()->role == 'employee' ? 'Job Applied' : 'Application'}}</h5>
                        </a>    
                        <div class="bottom-bor"></div>                   
                    </div>
                    <div class="profile-cat">
                        <a href="#" onclick="showView('changePass'); return false;">
                            <h5 >Change email/password</h5>
                        </a>      
                        <div class="bottom-bor"></div>                 
                    </div>
                </div>               
            </div>
            <div class="col-lg-9 mb-24">
                <div class="bb-cart-table ">
                    <div id="account" class="view-profile" style="display: block">
                        @if(Auth::user()->role == 'employee')
                        <div class="col-12">
                            <form id="formUpdate" class="hidden formUpdate" action="{{route('updatePro', Auth::user()->id)}}" method="POST"> 
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10" >
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Enter your name" value="{{Auth::user()->name}}">
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="Enter your email" value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Birthday</label>
                                        <input type="date" name="birthday" value="{{Auth::user()->birthday}}">
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone_number" placeholder="Enter your phone number" value="{{Auth::user()->phone_number}}">
                                    </div>
                                    <div class="bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Gender:</label><br>
                                        <input type="radio"  name="gender" value="1" {{Auth::user()->gender == 1 ? 'checked':''}}>
                                        <label style="margin-left: 50px" for="male">Male</label>
                                        
                                        <input type="radio"  name="gender" value="0" {{Auth::user()->gender == 0 ? 'checked':''}}>
                                        <label style="margin-left: 50px" for="female">Female</label>    
                                    </div>
                                    <div class="bb-register-button margin-bot-10">
                                        <button type="button" id="editButton" class="bb-btn-2" onclick="cancel()">Cancel</button>
                                        <button type="submit" id="saveButton" class="bb-btn-2">Save</button>
                                    </div>
                                </div>              
                            </form>
    
                            <form id="formDisable" class="formUpdate" action="{{route('user.update', Auth::user()->id)}}" method="POST">   
                                <div class="row">
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10" >
                                        <label>Name</label>
                                        <input disabled type="text" name="name" placeholder="Enter your first name" value="{{Auth::user()->name}}">
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Email</label>
                                        <input disabled type="email" name="email" placeholder="Enter your Email" value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Birthday</label>
                                        <input disabled type="date" name="birthday" placeholder="Enter your phone number" value="{{Auth::user()->birthday}}">
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Phone Number</label>
                                        <input disabled type="text" name="phone_number" placeholder="Enter your phone number" value="{{Auth::user()->phone_number}}">
                                    </div>
                                    <div class="bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Gender:</label><br>
                                        <input disabled type="radio"  name="gender" value="1" {{Auth::user()->gender == 1 ? 'checked':''}}>
                                        <label style="margin-left: 50px" for="male">Male</label>
                                        
                                        <input disabled type="radio"  name="gender" value="0" {{Auth::user()->gender == 0 ? 'checked':''}}>
                                        <label style="margin-left: 50px" for="female">Female</label>
                                        
                                        
                                    </div>
                                    <div class="bb-register-button margin-bot-10">
                                        <button type="button" id="editButton" class="bb-btn-2" onclick="edit()">Update</button>
                                    
                                    </div>
                                </div>
                            </form>
                        </div>
                        @elseif(Auth::user()->role == 'admin' || Auth::user()->role == 'company')
                        <div class="col-12">
                            <form id="formUpdate" class="hidden formUpdate" action="{{route('updatePro', Auth::user()->id)}}" method="POST" enctype="multipart/form-data"> 
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10" >
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Enter your company name" value="{{Auth::user()->name}}">
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="Enter your email" value="{{Auth::user()->email}}">
                                    </div>
                                    <div class=" bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Address</label>
                                        <input type="text" name="address" placeholder="Enter your address" value="{{Auth::user()->address}}">
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone_number" placeholder="Enter your phone number" value="{{Auth::user()->phone_number}}">
                                    </div>
                                
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>City</label>
                                        <div style="border: 1px solid #eeeeee; border-radius: 10px; padding: 10px;">
                                            <select name="city" id="select-city" style="display: block">
                                                <option>Ha Noi</option>
                                                <option {{Auth::user()->city == 'Ho Chi Minh' ? 'selected' : ''}}>Ho Chi Minh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Website</label>
                                        <input type="text" name="web" placeholder="Enter your company website" value="{{Auth::user()->web}}">
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Logo</label>
                                        <input type="file" name="file" value="{{Auth::user()->logo}}">
                                    </div>
                                    <div class="bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Images</label>
                                        <input type="file" name="images[]" accept="image/*" multiple>
                                    </div>
                                    <div class=" bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Description</label>
                                        <textarea type="text" name="description" style="height: 150px; resize:none" placeholder="Enter your company description">{{Auth::user()->description}}</textarea>
                                    </div>
                                    
                                    <div class="bb-register-button margin-bot-10">
                                        <button type="button" id="editButton" class="bb-btn-2" onclick="cancel()">Cancel</button>
                                        <button type="submit" id="saveButton" class="bb-btn-2">Save</button>
                                    </div>
                                </div>              
                            </form>
    
                            <form id="formDisable" class="formUpdate" action="{{route('user.update', Auth::user()->id)}}" method="POST">   
                                <div class="row">
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10" >
                                        <label>Name</label>
                                        <input disabled type="text" name="name" placeholder="Enter your first name" value="{{Auth::user()->name}}">
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Email</label>
                                        <input disabled type="email" name="email" placeholder="Enter your Email" value="{{Auth::user()->email}}">
                                    </div>
                                    <div class=" bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Address</label>
                                        <input disabled type="text" name="address" placeholder="Enter your address" value="{{Auth::user()->address}}">
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Phone Number</label>
                                        <input disabled type="text" name="phone_number" placeholder="Enter your phone number" value="{{Auth::user()->phone_number}}">
                                    </div>
                                
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>City</label>
                                        <div style="border: 1px solid #eeeeee; border-radius: 10px; padding: 10px;">
                                            <select disabled name="city" id="select-city" style="display: block">
                                                <option>Ha Noi</option>
                                                <option {{Auth::user()->city == 'Ho Chi Minh' ? 'selected' : ''}}>Ho Chi Minh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Website</label>
                                        <input disabled type="text" name="web" placeholder="Enter your company website" value="{{Auth::user()->web}}">
                                    </div>
                                    <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Logo</label>
                                        <input disabled type="file" name="logo" value="{{Auth::user()->logo}}">
                                    </div>
                                    <div class="bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Images</label>
                                        <input disabled type="file" name="images" multiple>
                                    </div>
                                    <div class=" bb-register-wrap bb-register-width-50 margin-bot-10">
                                        <label>Description</label>
                                        <textarea disabled type="text" name="description" style="height: 150px; resize:none" placeholder="Enter your company description">{{Auth::user()->description}}</textarea>
                                    </div>
                                    <div class="bb-register-button margin-bot-10">
                                        <button type="button" id="editButton" class="bb-btn-2" onclick="edit()">Update</button>
                                    
                                    </div>
                                </div>
                            </form>
                        </div>
                        @else
                        @endif
                    </div>
                    <div id="cv" class="view-profile" >
                        <h4 style="margin: 10px; margin-bottom:25px">CV</h4>
                        <div class="col-12">
                                @if(Auth::user()->cv_id)
                                    <form id="formUpdate2" class="formUpdate" action="{{route('updateCV', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            
                                            <div class=" bb-register-wrap bb-register-width-50 margin-bot-10" style="display: flex; flex-direction: column">
                                                <label>Avatar</label>
                                                <label for="file-upload" style="cursor: pointer; width:fit-content">
                                                    <img id="preview-image" src="{{asset('upload/images')}}/{{$cv->avatar ? $cv->avatar : 'user.png'}}" style="width:150px; margin:10px 20px " alt="Upload">
                                                    <div id="preview" style="display: none; text-align:center">
                                                        <p id="file-name"></p> 
                                                    </div>
                                                </label>
                                                <input disabled id="file-upload" name="image" type="file" style="display: none" accept="image/*">
                                                <div id="preview" style="display: none">
                                                    <p id="file-name"></p> 
                                                </div>                                     
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Name</label>
                                                <input disabled type="text" name="name" placeholder="Enter your name" value="{{$cv->name}}">
                                            </div>
                                            <div class="bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Goal</label>
                                                <textarea disabled style="height: 100px; resize:none" name="goal" placeholder="Enter your goal" >{{$cv->goal}}</textarea>
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Phone Number</label>
                                                <input disabled type="text" name="phone" placeholder="Enter your phone number" value="{{$cv->phone}}">
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Nationality</label>
                                                <input disabled type="text" name="nationality" placeholder="Enter your nationality" value="{{$cv->nationality}}">
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Email</label>
                                                <input disabled type="email" name="email" placeholder="Enter your email" value="{{$cv->email}}">
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Education</label>
                                                <input disabled type="text" name="education" placeholder="Enter your education" value="{{$cv->education}}">
                                            </div>
                                            <div class="bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Address</label>
                                                <input disabled type="text" name="address" placeholder="Enter your address" value="{{$cv->address}}">
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Skill</label>
                                                <textarea disabled style="height: 100px; resize:none" name="skill" placeholder="Enter your basic skills" >{{$cv->skill}}</textarea>
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Language</label>
                                                <textarea disabled style="height: 100px; resize:none" name="language" placeholder="" >{{$cv->language}}</textarea>
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Experience</label>
                                                <textarea disabled style="height: 100px; resize:none" name="experience" placeholder="Enter your experience" >{{$cv->experience}}</textarea>
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>References</label>
                                                <textarea disabled style="height: 100px; resize:none" name="references" placeholder="Enter your references" >{{$cv->references}}</textarea>
                                            </div>
                                            <div class="bb-register-button margin-bot-10">
                                                <button type="button" id="editButton2" class="bb-btn-2" >Update</button>
                                                <button type="button" id="cancelButton2" class="bb-btn-2" style="display: none">Cancel</button>
                                                <button type="submit" id="saveButton2" class="bb-btn-2" style="display: none">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <form id="formCreate" class="formUpdate" action="{{route('createCV', Auth::user()->id)}}" method="POST"> 
                                        @csrf
                                        <div class="row">
                                            <input type="hidden" name="uid" value="{{Auth::user()->id}}">
                                            <div class=" bb-register-wrap bb-register-width-50 margin-bot-10" style="display: flex; flex-direction: column">
                                                <label>Avatar</label>
                                                <img src="{{asset('upload/images')}}/user.png" style="width:150px; margin:10px 20px ">                                    
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Name</label>
                                                <input type="text" name="name" placeholder="Enter your first name" >
                                            </div>
                                            <div class="bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Goal</label>
                                                <textarea style="height: 100px; resize:none" name="goal" placeholder="Enter your goal" ></textarea>
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Phone Number</label>
                                                <input type="text" name="phone" placeholder="Enter your phone number" >
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Nationality</label>
                                                <input type="text" name="nationality" placeholder="Enter your nationality" >
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Email</label>
                                                <input type="email" name="email" placeholder="Enter your email" >
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Education</label>
                                                <input type="text" name="education" placeholder="Enter your education">
                                            </div>
                                            <div class="bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Address</label>
                                                <input type="text" name="address" placeholder="Enter your address">
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Skill</label>
                                                <textarea style="height: 100px; resize:none" name="skill" placeholder="Enter your basic skills" ></textarea>
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Language</label>
                                                <textarea style="height: 100px; resize:none" name="language" placeholder="" ></textarea>
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>Experience</label>
                                                <textarea style="height: 100px; resize:none" name="experience" placeholder="Enter your experience" ></textarea>
                                            </div>
                                            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                                <label>References</label>
                                                <textarea style="height: 100px; resize:none" name="references" placeholder="Enter your references" ></textarea>
                                            </div>
                                            <div class="bb-register-button margin-bot-10">
                                                <button type="submit" id="saveButton" class="bb-btn-2">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                        </div>    
                    </div>
                    <div id="job" class="view-profile">
                            <h4 style="margin: 10px; margin-bottom:25px">Job</h4>
                            <table class="table-apply" >
                                <tr>
                                    <th>Id</th>
                                    <th>Job Name</th>
                                    <th>Company Name</th>
                                    <th>Apply At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($jobs as $job)
                                <tr>
                                    <td>{{$job->id}}</td>
                                    <td>{{$job->name}}</td>
                                    <td>{{Auth::user()->name}}</td>
                                    <td>{{$job->created_at}}</td>
                                    @switch($job->status)
                                        @case('pending')
                                        <td style="color: orange">Pending</td>
                                            @break
                                        @case('active')
                                        <td style="color: green">Active</td>
                                            @break
                                        @case('unactive')
                                        <td style="color: red">Unactive</td>
                                            @break
                                        @case('lock')
                                        <td style="color: red">Lock</td>
                                            @break
                                    @endswitch
                                    <td>
                                        @if($job->status == 'active')
                                        <a href="#" style="color: brown">Hide</a>
                                        @elseif($job->status == 'unactive')
                                        <a href="#" style="color: brown">Active</a>
                                        @else
                                        @endif
                                        <a href="#" style="color: #6c7fd8">Edit</a></br>
                                        @if($job->level == '0' && $job->status != 'pending')
                                        <a href="#">Upgrade</a>
                                        @else
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            <div class="bb-register-button margin-bot-10" style="margin-top:15px">
                                <button type="button" id="createJob" class="bb-btn-2" onclick="showView('createJob')">Create Job</button>
                            </div>
                    </div>    
                    <div id="application" class="view-profile">
                        <h4 style="margin: 10px; margin-bottom:25px">Your Applications</h4>
                        @if(Auth::user()->role == 'company' || Auth::user()->role == 'admin')
                        <table class="table-apply" >
                            <tr>
                                <th>Id</th>
                                <th>Job Name</th>
                                <th>Employee Name</th>
                                <th>Apply At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($applications as $apl)
                            <tr>
                                <td>{{$apl->id}}</td>
                                <td>{{$apl->job_name}}</td>
                                <td>{{$apl->user_name}}</td>
                                <td>{{$apl->created_at}}</td>
                                @if($apl->status == 'pending')
                                <td style="color: orange">Pending</td>
                                @elseif($apl->status == 'accepted')
                                <td style="color: green">Accepted</td>
                                @else
                                <td style="color: red">Canceled</td>
                                @endif
                                <td>
                                    @if($apl->status == 'pending')
                                    <a href="" style="color:rgb(100, 100, 255)">Check Cv</a></br>
                                    <a href="" style="color:green ">Accept</a><p> </p>
                                    <a href="" style="color:red">Refuse</a>
                                    @elseif($apl->status == 'accepted')
                                    <a href="" style="color:rgb(100, 100, 255)">Check Cv</a>
                                    @else
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @elseif(Auth::user()->role == 'employee')
                        <table class="table-apply">
                            <tr>
                                <th>Id</th>
                                <th>Job Name</th>
                                <th>Company Name</th>
                                <th>Apply At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($applications as $apl)
                            <tr>
                                <td>{{$apl->id}}</td>
                                <td>{{$apl->job_name}}</td>
                                <td>{{$apl->com_name}}</td>
                                <td>{{$apl->created_at}}</td>
                                @if($apl->status == 'pending')
                                <td style="color: orange">Pending</td>
                                @elseif($apl->status == 'accepted')
                                <td style="color: green">Accepted</td>
                                @else
                                <td style="color: red">Canceled</td>
                                @endif
                                <td>
                                    @if($apl->status == 'pending')
                                    <a href="{{route('cancelAPL', ['id' => $apl->id])}}" style="color:red">Cancel</a>
                                    @else
                                    
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @else
                        @endif
                    </div>
                    <div id="changePass" class="view-profile">
                        
                        <div class="col-12">
                                <form id="formUpdate3" class="formUpdate" action="{{route('updatePro', Auth::user()->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                            <label>Email</label>
                                            <input required type="email" name="email" placeholder="Enter your email" value="{{Auth::user()->email}}">
                                        </div>
                                        <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                            <label>New password</label>
                                            <input required type="password" id="new_password" name="new_password" placeholder="Enter your new password" >
                                        </div>
                                        <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                            <label>Current password</label>
                                            <input required type="password" id="current_password" name="current_password" placeholder="Enter your current password" >
                                        </div>
                                        <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                            <label>Confirm new password</label>
                                            <input required type="password" id="new_password_confirmation" name="new_password_confirmation" placeholder="Enter your new password" onkeyup="validatePassword()">
                                            <div id="password-message">Status: ...</div>
                                        </div>
                                        <div class="col-lg-6 bb-register-button margin-bot-10">
                                            <button type="button" onclick="togglePasswordVisibility()" class="bb-btn-2">👁️</button>
                                            <button disabled id="change_password" type="submit" class="bb-btn-2">Save</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                    <div id="createJob" class="view-profile">
                        <form id="formCreateJob" class="formUpdate" action="{{route('createJob', Auth::user()->id)}}" method="POST"> 
                            @csrf
                            <div class="row">
                                <input type="hidden" name="ucid" value="{{Auth::user()->id}}">
                                <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Enter your Job name" >
                                </div>
                                <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                    <label>Expỉred Date</label>
                                    <input type="date" name="exp_date">
                                </div>
                                <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                    <label>City</label>
                                    <div style="border: 1px solid #eeeeee; border-radius: 10px; padding: 10px;">
                                        <select name="location" id="select-city" style="display: block">
                                            <option value="Ha Noi">Ha Noi</option>
                                            <option value="Ho Chi Minh">Ho Chi Minh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="bb-register-wrap bb-register-width-50 margin-bot-10">
                                    <label>Description</label>
                                    <textarea id="description" name="description" placeholder="Enter your job description"></textarea>
                                </div>
                                <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                    <label>Salary Min (million VND)</label>
                                    <input type="number" id="salaryMin" name="salary_min" min="0" oninput="validateInputs()">
                                    
                                </div>
                                <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                                    <label>Salary Max</label>
                                    <input type="number" id="salaryMax" name="salary_max" min="0" oninput="validateInputs()">
                                    <div id="errorMessage" style="color: red"></div>
                                </div>
                                <div class="bb-register-button margin-bot-10">
                                    <button disabled type="submit" id="saveB" class="bb-btn-2">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function edit() {
        // Ẩn form 2
        document.getElementById('formDisable').classList.add('hidden');
        // Hiện form 1
        document.getElementById('formUpdate').classList.remove('hidden');
    }

    function cancel() {
        // Ẩn form 1
        document.getElementById('formUpdate').classList.add('hidden');
        // Hiện form 2
        document.getElementById('formDisable').classList.remove('hidden');
    }

    function showView(name){
        const views = document.querySelectorAll('.view-profile');
        views.forEach(view => {
            view.style.display = view.id === name ? 'block' : 'none';
        })
    }

    const editButton2 = document.getElementById('editButton2');
    const cancelButton2 = document.getElementById('cancelButton2');
    const saveButton2 = document.getElementById('saveButton2');
    const inputs = document.querySelectorAll('#formUpdate2 input');
    const textareas = document.querySelectorAll('#formUpdate2 textarea');

    editButton2.addEventListener('click', function() {
        inputs.forEach(input => {
            input.disabled = false; // Bỏ tắt trường
        });
        textareas.forEach(textarea => {
            textarea.disabled = false; // Bỏ tắt trường
        });
        editButton2.style.display = 'none';
        cancelButton2.style.display = 'inline';
        saveButton2.style.display = 'inline';
    });

    cancelButton2.addEventListener('click', function() {
        inputs.forEach(input => {
            input.disabled = true; // Tắt trường
        });
        textareas.forEach(textarea => {
            textarea.disabled = true; // Bỏ tắt trường
        });
        editButton2.style.display = 'inline';
        cancelButton2.style.display = 'none';
        saveButton2.style.display = 'none';
    });

    document.getElementById('file-upload').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                // Cập nhật hình ảnh đã chọn
                document.getElementById('preview-image').src = e.target.result;
                document.getElementById('file-name').innerText = file.name;
                // Hiện phần preview
                document.getElementById('preview').style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });

    // Xử lý sự kiện click để cho phép chọn lại file
    document.querySelector('.custom-file-upload').addEventListener('click', function() {
        document.getElementById('file-upload').value = ''; // Đặt lại giá trị input file
        document.getElementById('preview').style.display = 'none'; // Ẩn phần preview khi nhấn chọn lại
    });

    function validatePassword() {
            const newPassword = document.getElementById('new_password').value;
            const confirmPassword = document.getElementById('new_password_confirmation').value;
            const message = document.getElementById('password-message');
            const button = document.getElementById('change_password');
            // Chỉ kiểm tra khi trường xác nhận mật khẩu không rỗng
            if (confirmPassword !== "") {
                
                if (newPassword !== confirmPassword) {
                    message.innerText = "Confirmation password does not match.";
                    message.style.color = "red";
                    button.disabled = true;
                } else {
                    message.innerText = "Your password is matching"; // Xóa thông báo khi mật khẩu khớp
                    message.style.color = "green";
                    button.disabled = false;
                }
            } else {
                message.innerText = "Password checking ..."; // Xóa thông báo khi trường xác nhận mật khẩu rỗng
                message.style.color = "orange";
                button.disabled = true;
            }
    }

    function togglePasswordVisibility() {
            
            passwordVisible = !passwordVisible; 

            const inputs = ['current_password', 'new_password', 'new_password_confirmation'];
            inputs.forEach(inputId => {
                const input = document.getElementById(inputId);
                input.type = passwordVisible ? "text" : "password"; 
            });
    }


    function validateInputs() {
            const salaryMin = document.getElementById('salaryMin').value;
            const salaryMax = document.getElementById('salaryMax').value;
            const saveB = document.getElementById('saveB');
            const errorMessage = document.getElementById('errorMessage');

            // Reset thông báo lỗi
            errorMessage.style.display = 'none';
            errorMessage.textContent = '';

            // Kiểm tra điều kiện
            const isMinFilled = salaryMin !== '';
            const isMaxFilled = salaryMax !== '';
            const isValidRange = isMinFilled && isMaxFilled && (parseFloat(salaryMin) < parseFloat(salaryMax));

            // Nếu thỏa mãn điều kiện thì kích hoạt button, ngược lại thì disable
            if ((isMinFilled || isMaxFilled) && (!isMaxFilled || isValidRange)) {
                saveB.disabled = false; // Kích hoạt button
            } else {
                saveB.disabled = true; // Vô hiệu hóa button

                // Hiển thị thông báo lỗi
                if (!isMinFilled && !isMaxFilled) {
                    errorMessage.textContent = 'Please enter at least one value for Salary Min or Salary Max.';
                } else if (isMinFilled && isMaxFilled && !isValidRange) {
                    errorMessage.textContent = 'Salary Min must be less than Salary Max.';
                }
                errorMessage.style.display = 'block'; // Hiển thị thông báo lỗi
            }
        }
</script>
@endsection