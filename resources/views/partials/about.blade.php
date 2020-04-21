<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                @foreach ($service3 as $item)
                    
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                        <i class="{{$item->logo}}"></i>
                        </div>
                    <h2>{{$item->titre}}</h2>
                    <p>{{$item->description}}</p>
                        </div>
                    </div>
                    @endforeach
                
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>{!!App\Helper\ColorChanger::green($accueil->titre_about)!!}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>{{$accueil->text1_about}}</p>
                </div>
                <div class="col-md-6">
                    <p>{{$accueil->text2_about}}</p>
                </div>
            </div>
            @if ($accueil->showbutton)
            <div class="text-center mt60">
                <a href="#contact" class="site-btn">Browse</a>
            </div>
            @endif
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{asset('storage/'.$accueil->image_video)}}" alt="">
                        <a href="{{$accueil->video}}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->
