<div id="createJob" class="view-profile">
    <form id="formCreateJob" class="formUpdate" action="{{route('jobStore')}}" method="POST"> 
        @csrf
        <div class="row">
            <input type="hidden" name="ucid" value="{{Auth::user()->id}}">
            <input type="hidden" name="status" value="pending">
            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter your Job name" >
            </div>
            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                <label>Expỉred Date</label>
                <input type="date" name="exp_date">
            </div>
            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                <label>Category</label>
                <div style="border: 1px solid #eeeeee; border-radius: 10px; padding: 12px;">
                    <select name="category" id="select-category" style="display: block; width: -webkit-fill-available;">
                        @foreach ($categories as $item) 
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6 bb-register-wrap bb-register-width-50 margin-bot-10">
                <label>City</label>
                <div style="border: 1px solid #eeeeee; border-radius: 10px; padding: 12px;">
                    <select name="location" id="select-city" style="display: block; width: -webkit-fill-available;">
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