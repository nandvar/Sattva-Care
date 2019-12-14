@extends('base')

@section('content')
		<div id="single">
			<div class="container">
				<div class="post">

					<div class="caption">
						<div class="header">
							<h1>About Sattva Care</h1>
						</div>

						<p>The lack of time within our community due to the constant pressure of day to day lives of family members, triggered the founder of Sattva Care, Monica Sharma, to establish an atmosphere of love and compassion, where dedicated care could be provided to senior members of society. In an endeavour to provide a milieu whereby every senior resident could enjoy an improved lifestyle, Sattva Care was founded. Located in the heart of the city of Gurugram, Sattva Care promises to take senior caregiving in India, to the next level.</p>

						<p>“Sattva signifies equilibrium, balance, harmony, gentleness, clarity and purity. Offering an atmosphere of Sattva that empowers each elder to enjoy a full life fearlessly and with independence, is our objective” - Monica Sharma, Founder, Sattva Care.</p>

					</div>
				</div>
			</div>
		</div>
		<script>
			function load() {
				if(document.getElementsByClassName("dropdown active")[0])
						document.getElementsByClassName("dropdown active")[0].className = "dropdown";
				document.getElementsByClassName("dropdown")[1].className = "dropdown active";
		}
		window.onload = load;
		</script>
@endsection