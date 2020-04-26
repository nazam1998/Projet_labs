<!-- services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
                <h2>{!! App\Helper\ColorChanger::green($titres->titre1) !!}</h2>
        </div>
        <div class="row">
            @foreach ($lastservices as $item)
                
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon" style="color: {{$item->color}}">
                    <i class="{{$item->logo}}"></i>
                    </div>
                    <div class="service-text" style="color: {{$item->color}}">
                    <h2>{{$item->titre}}</h2>
                    <p style="color: {{$item->color}}">{{$item->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach

            {{$lastservices->links()}}
            
        </div>
        <div class="text-center">
            <a href="#feature" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->

