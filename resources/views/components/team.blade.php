	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>Get in <span>the Lab</span> and  meet the team</h2>
			</div>
			<div class="row">
				@foreach ($team as $index=>$item)
				<!-- single member -->
				@if ($index==2)
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('storage/'.$ceo->image)}}" alt="">
					<h2>{{$ceo->nom.' '.$ceo->prenom}}</h2>
					<h3>{{$ceo->role->role}}</h3>
					</div>
				</div>
				@else
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('storage/'.$item->image)}}" alt="">
					<h2>{{$item->nom.' '.$item->prenom}}</h2>
					<h3>{{$item->role->role}}</h3>
					</div>
				</div>
				@endif
				
				@endforeach
				
			</div>
		</div>
	</div>
	<!-- Team Section end-->

