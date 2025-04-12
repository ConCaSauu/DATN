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