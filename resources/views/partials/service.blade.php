	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{!!App\Helper\ColorChanger::green($accueil->titre_service)!!}</h2>
			</div>
			<div class="row">
				@foreach ($services as $item)
					
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
				<div class="service" style="color: {{$item->color}}">
						<div class="icon">
						<i class="{{$item->logo}}"></i>
						</div>
						<div class="service-text">
						<h2>{{$item->titre}}</h2>
						<p style="color: {{$item->color}}">{{$item->description}}</p>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
			<div class="text-center">
			<a href="{{route('services')}}" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->

