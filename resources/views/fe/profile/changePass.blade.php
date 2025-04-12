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