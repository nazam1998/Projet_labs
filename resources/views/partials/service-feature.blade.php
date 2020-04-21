<!-- features section -->
<div class="team-section spad" id="feature">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>Get in <span>the Lab</span> and  discover the world</h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($services as $index=>$item)
                    @if ($index<3)
                        
                    <div class="icon-box light left">
                        <div class="service-text">
                        <h2>{{$item->titre}}</h2>
                        <p>{{$item->description}}</p>
                        </div>
                        <div class="icon">
                        <i class="{{$item->logo}}"></i>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($services as $index=>$item)
                    @if ($index>=3)
                    <div class="icon-box light">
                        <div class="icon">
                        <i class="{{$item->logo}}"></i>
                        </div>
                        <div class="service-text">
                        <h2>{{$item->titre}}</h2>
                        <p>{{$item->description}}</p>
                        </div>
                    </div>
                    @endif
                @endforeach
                
            </div>
        </div>
        <div class="text-center mt100">
            <a href="#article" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->

