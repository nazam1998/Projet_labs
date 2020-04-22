	<!-- Contact section -->
	<div class="contact-section spad fix" id="contact">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
					<h2>{{$contact->titre}}</h2>
					</div>
					<p>{{$contact->texte}}</p>
					<h3 class="mt60">{{$contact->soustitre}}</h3>
					<p class="con-item">{{$contact->adresse}}<br> {{$contact->ville}} </p>
					<p class="con-item">{{$contact->numero}}</p>
					<p class="con-item">{{$contact->email}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					@if (session()->has('msg'))
				<p class="alert alert-success">{{session('msg')}}</p>
					@endif
				<form class="form-class" id="con_form" method="POST" action="{{route('storemsg')}}">
					@csrf
						<div class="row">
							@guest
							<div class="col-sm-6">
								@error('name')
								<p class="alert alert-danger">{{$message}}</p>
								@enderror
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								
								@error('email')
								<p class="alert alert-danger">{{$message}}</p>
								@enderror
								
								<input type="text" name="email" placeholder="Your email">
							
							</div>
							@endguest
							<div class="col-sm-12">
								
								@error('subject')
								<p class="alert alert-danger">{{$message}}</p>
								@enderror
								<input type="text" name="subject" placeholder="Subject">
								
								@error('message')
								<p class="alert alert-danger">{{$message}}</p>
								@enderror
								<textarea name="message" placeholder="Message"></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->

