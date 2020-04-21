<!-- services card section-->
<div class="services-card-section spad" id="article">
    <div class="container">
        <div class="row">
            @foreach ($articles as $item)
                
            <!-- Single Card -->
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="{{asset('storage/'.$item->image)}}" alt="">
                    </div>
                    <div class="card-text">
                    <h2>{{$item->titre}}</h2>
                    <p>{{ \Illuminate\Support\Str::limit($item->texte, 150, $end='...')}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
<!-- services card section end-->
