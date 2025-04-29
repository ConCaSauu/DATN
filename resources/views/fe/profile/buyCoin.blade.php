<h2 style="font-weight: bold; margin: 15px 15px 5px 15px;">G Coin</h2>
<p style="margin:0px 0px 5px 25px">"G coin can be used to increase the number of job postings you want to publish or upgrade existing jobs to a higher priority level."</p>
<div style="display: flex">
    <div class="col-md-4 col-6 mb-24 bb-product-box pro-bb-content" style="margin-bottom: 0px">
        <div class="bb-pro-box">
            <div class="bb-pro-img">
                <a href="javascript:void(0)">
                    <div class="inner-img">
                        <img class="main-img" src="{{asset('upload/images')}}/gcoin20.jpeg" alt="product-6">
                        <img class="hover-img" src="{{asset('upload/images')}}/gcoin20zoom.jpeg" alt="product-6">    
                    </div>
                </a>
            </div>                
            <div class="bb-pro-contact">
                <h4 class="bb-pro-title">20 G Coin</h4>
                <form action="{{ url('profile/vnpay_payment')}}" method="POST">
                    @csrf
                    <div class="bb-price">
                        <div class="inner-price">
                            <span class="new-price">$5</span>
                            <span class="old-price">$8</span>
                        </div>
                        <input type="hidden" name="total_vnpay" value="125000">
                        <button type="submit" id="buyCoin" class="bb-btn-2" name="redirect">VNPay</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-6 mb-24 bb-product-box pro-bb-content" style="margin-bottom: 0px">
        <div class="bb-pro-box">
            <div class="bb-pro-img">
                <a href="javascript:void(0)">
                    <div class="inner-img">
                        <img class="main-img" src="{{asset('upload/images')}}/gcoin50.jpeg" alt="product-6">
                        <img class="hover-img" src="{{asset('upload/images')}}/gcoin50zoom.jpeg" alt="product-6">    
                    </div>
                </a>
            </div>                
            <div class="bb-pro-contact">
                <h4 class="bb-pro-title">50 G Coin</h4>
                <div class="bb-price">
                    <div class="inner-price">
                        <span class="new-price">$12</span>
                        <span class="old-price">$15</span>
                    </div>
                    <button type="submit" id="buyCoin" class="bb-btn-2">Buy now</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-6 mb-24 bb-product-box pro-bb-content" style="margin-bottom: 0px">
        <div class="bb-pro-box">
            <div class="bb-pro-img">
                <a href="javascript:void(0)">
                    <div class="inner-img">
                        <img class="main-img" src="{{asset('upload/images')}}/gcoin100.jpeg" alt="product-6">
                        <img class="hover-img" src="{{asset('upload/images')}}/gcoin100zoom.jpeg" alt="product-6">    
                    </div>
                </a>
            </div>                
            <div class="bb-pro-contact">
                <h4 class="bb-pro-title">100 G Coin</h4>
                <div class="bb-price">
                    <div class="inner-price">
                        <span class="new-price">$23</span>
                        <span class="old-price">$29</span>
                    </div>
                    <button type="submit" id="buyCoin" class="bb-btn-2">Buy now</button>
                </div>
            </div>
        </div>
    </div>
</div>