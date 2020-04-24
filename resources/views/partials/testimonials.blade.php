	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>{!!App\Helper\ColorChanger::green($accueil->titre_testimonials) !!}</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						@foreach ($testimonials as $item)
							
						<!-- single testimonial -->
						
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
						<p>{{wordwrap($item->texte, 5, "\n", true)}}</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{asset('storage/'.$item->image)}}" alt="">
								</div>
								<div class="client-name">
								<h2>{{wordwrap($item->nom.' '.$item->prenom, 5, "\n", true)}}</h2>
								<p>{{$item->fonction}}</p>
								</div>
							</div>
						</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->
