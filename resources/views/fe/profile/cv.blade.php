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
                            <textarea disabled style="height: 100px; resize:none" name="language" placeholder="List the languages you know" >{{$cv->language}}</textarea>
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
                            <textarea style="height: 100px; resize:none" name="language" placeholder="List the languages you know" ></textarea>
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

<script>

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

</script>