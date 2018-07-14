@extends('layouts.home.pagedetail')
@section('content')
<div class="col-md-9 technology-left">
	<div class="music">
		<div class="latest">
			<h2 class="w3">MUSIC</h2>
			@foreach($newsSupport as $item)
			<div class="tip-grids">
				<div class="col-md-6 tip-grid">
					<figure class="effect-julia">
						<img src="/page/images/m5.jpg" alt="">
					</figure>
				</div>
				<div class="col-md-6 tip-grid-right">
					<div class="tip-gd-left">
						<h4>{{ $item->title }}</h4>
						<p> Temporibus autem quibusdam et aut officiis
							debitis aut rerum necessitatibus saepe eveniet ut
							et voluptates repudiandae sint et molestiae non recusandae. .</p>
						<p> Temporibus autem quibusdam et aut officiis
							debitis aut rerum necessitatibus saepe eveniet ut
							et voluptates repudiandae .</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			@endforeach
		</div>
		<div class="effect-grid">
			<h3 class="w3">PROGRAMS</h3>
			<ul class="grid cs-style-3">
				<li>
					<figure>
						<img src="images/m1.jpg" alt="img02">
						<figcaption>
							<h4>PROGRAMS</h4>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/m2.jpg" alt="img03">
						<figcaption>
							<h4>PROGRAMS</h4>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/m3.jpg" alt="img06">
						<figcaption>
							<h4>PROGRAMS</h4>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/m3.jpg" alt="img04">
						<figcaption>
							<h4>PROGRAMS</h4>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/m2.jpg" alt="img05">
						<figcaption>
							<h4>PROGRAMS</h4>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/m1.jpg" alt="img01">
						<figcaption>
							<h4>PROGRAMS</h4>
						</figcaption>
					</figure>
				</li>
				<div class="clearfix"></div>
			</ul>
		</div>
	</div>
</div>
@endsection()