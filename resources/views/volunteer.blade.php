@extends('base')

@section('content')
		<div id="single">
			<div class="container">
				<div class="post">

					<div class="caption">
						<div class="header">
							<h1>Volunteer</h1>
						</div>
						<p>Sattva Care welcomes members of the community to add value to the lives of elders by engaging in activities with them. If you are keen on volunteering, we expect you to plan your activity creatively,
						with an element of fun and enjoyment. Those keen on volunteering are expected to fill the form
						below, come prepared with the plan and book a date and time that is mutually convenient. Students
						who are keen on volunteering, will be awarded certificates provided they complete a minimum of 20
						hours of service with regularity.</p><br>

						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<form>
									<div class="form-group">
										<label for="ident">Identify yourself as</label>
										<select class="form-control">
											<option>Select an option</option>
											<option>An Individual</option>
											<option>A Social Group</option>
											<option>A Spiritual Group</option>
											<option>Other</option>
										</select>
									</div>
									<div class="form-group">
										<label for="name">Name of your identity</label>
										<input type="text" class="form-control" id="name" placeholder="Name">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" placeholder="Email" required>
									</div>
									<div class="form-group">
										<label for="contact">Contact number</label>
										<input type="text" class="form-control" id="contact" placeholder="Contact">
									</div>
									<div class="form-group">
										<label for="person">Name of contact person</label>
										<input type="text" class="form-control" id="person" placeholder="Name">
									</div>
									<div class="form-group">
										<label for="activity" class="col-md-12" style="padding: 0%">What kind of activity would you like to volunteer for?</label>
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox1" value="1"> Indoor Games
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox2" value="2"> Physical Activity
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox3" value="3"> Talks/Discussions
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox4" value="4"> Teaching
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox5" value="5"> Learning
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox6" value="6"> Dancing
										</label>
										<label class="checkbox-inline" style="margin-left: 0px;">
											<input type="checkbox" id="inlineCheckbox7" value="7"> Singing
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox8" value="8"> Music
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox9" value="9"> Art
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox10" value="10"> Theatre
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox11" value="11"> Reading
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox12" value="12"> Gardening
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox13" value="13"> Others
										</label>
									</div>
									<div class="form-group">
										<label for="time">How many one hour sessions will you require?</label>
										<input type="text" class="form-control" id="time" placeholder="Sessions">
									</div>
									<button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
								</form>
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
				document.getElementsByClassName("dropdown")[4].className = "dropdown active";
		}
		window.onload = load;
		</script>
@endsection