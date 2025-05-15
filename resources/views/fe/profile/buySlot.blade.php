<h2 style="font-weight: bold; margin: 15px 15px 5px 15px;">Buy Slot</h2>
<p style="margin:0px 0px 5px 25px">"You can using G coin to increase Job's slot available."</p>
<div style="display: flex">
    <div class="col-md-4 col-6 mb-24 bb-product-box pro-bb-content" style="margin-bottom: 0px">
        <div class="bb-pro-box">
            <div class="bb-pro-img">
                <a href="javascript:void(0)">
                    <div class="inner-img">
                        <img class="main-img" src="{{asset('upload/images')}}/plus1.png" alt="product-6">
                        <img class="hover-img" src="{{asset('upload/images')}}/plus1.png" alt="product-6">    
                    </div>
                </a>
            </div>                
            <div class="bb-pro-contact">
                <h4 class="bb-pro-title">15 G Coin</h4>
                <form action="{{ route('buySlot')}}" method="POST">
                    @csrf
                    <div class="bb-price">
                        <div class="inner-price">
                            <span class="new-price">+1 Slot</span>
                            
                        </div>
                        <input type="hidden" name="cost" value="15">
                        <input type="hidden" name="slot" value="1">
                        <button type="submit" id="buyCoin" class="bb-btn-2">Buy now</button>
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
                        <img class="main-img" src="{{asset('upload/images')}}/plus2.png" alt="product-6">
                        <img class="hover-img" src="{{asset('upload/images')}}/plus2.png" alt="product-6">    
                    </div>
                </a>
            </div>                
            <div class="bb-pro-contact">
                <h4 class="bb-pro-title">30 G Coin</h4>
                <form action="{{route('buySlot')}}" method="POST">
                    @csrf
                    <div class="bb-price">
                        <div class="inner-price">
                            <span class="new-price">+2 Slot</span>
                            
                        </div>
                        <input type="hidden" name="cost" value="30">
                        <input type="hidden" name="slot" value="2">
                        <button type="submit" id="buyCoin" class="bb-btn-2">Buy now</button>
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
                        <img class="main-img" src="{{asset('upload/images')}}/plus5.png" alt="product-6">
                        <img class="hover-img" src="{{asset('upload/images')}}/plus5.png" alt="product-6">    
                    </div>
                </a>
            </div>                
            <div class="bb-pro-contact">
                <h4 class="bb-pro-title">70 G Coin</h4>
                <form action="{{route('buySlot')}}" method="POST">
                    @csrf
                    <div class="bb-price">
                        <div class="inner-price">
                            <span class="new-price">+5 Slot</span>
                        </div>
                        <input type="hidden" name="cost" value="70">
                        <input type="hidden" value="5">
                        <button type="submit" id="buyCoin" class="bb-btn-2">Buy now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>