@extends('base')

@section('content')
		<div id="single">
			<div class="container maps">
				<div id="map" ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.318641039722!2d77.03788071467594!3d28.469949082482202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19b343006aab%3A0xde8a337593bb1fdc!2sSattva+Care!5e0!3m2!1sen!2sin!4v1481647706821" scrolling="no" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
				<div class="post">
					<div class="caption">
						<div class="row contact-info">

							<div class="col-md-4 text-center">
								<i class="fa fa-home fa-4x"></i>
								<h4>Address</h4>
								<p style="text-align: center;"><br>
									PARAMOUNT<br>
									B-43/B<br>
									Old DLF Colony, Sector - 14<br>
									Gurugram - 122001<br>
									Haryana, India
								</p>
							</div>
							<div class="col-md-4 text-center">
								<i class="fa fa-phone fa-4x"></i>
								<h4>Phone</h4>
								<p style="text-align: center;"><br>
									<!--Local: NA<br />-->
									Mobile: +91 9910306466
								</p>
							</div>
							<div class="col-md-4 text-center">
								<i class="fa fa-envelope-o fa-4x"></i>
								<h4>Email</h4>
								<p style="text-align: center;"><br>
									<a class="email" href="mailto:contact@sattvacare.com" target="_blank">contact@sattvacare.com</a><br/>
									<a class="email" href="mailto:director@sattvacare.com" target="_blank">director@sattvacare.com</a>
								</p>
							</div>
						</div>

						<div class="header">
							<h1>Drop us a line</h1>
						</div>

						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								
								{!! Form::open() !!}
									<div class="form-group">
										{!! Form::label('name', 'Name') !!}
										{!! Form::text('name', null, ['class' => 'form-control' , 'placeholder' => 'Name', 'required']) !!}
									</div>

									<div class="form-group">
										{!! Form::label('email', 'Email') !!}
										{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required']) !!}
									</div>

									<div class="form-group">
										{!! Form::label('number', 'Number') !!}
										{!! Form::text('number', null, ['class' => 'form-control' , 'placeholder' => 'Add Country Extension']) !!}
									</div>

									<div class="form-group">
										{!! Form::label('message', 'Message') !!}
										{!! Form::textarea('message', null, ['class' => 'form-control' , 'placeholder' => 'Message', 'rows' => '2']) !!}
									</div>

									<div class="form-group">
										{!! Form::submit('Send',['class' => 'btn btn-default']) !!}
									</div>
								{!! Form::close() !!}

							</div>
						</div>



					</div>
				</div>
			</div>
		</div>
		<script>
			function load() {
				if(document.getElementsByClassName("dropdown active")[0])
						document.getElementsByClassName("dropdown active")[0].className = "dropdown";
				document.getElementsByClassName("dropdown")[5].className = "dropdown active";
			}
			window.onload = load;
		</script>
		
@endsection