@extends('base')

@section('content')
		<div id="single">
			<div class="container">
				<div class="post">

					<div class="caption">
						<div class="header">
							<h1>Sattva Care Admission Procedure</h1>
						</div>

						<div style="text-align: center;">
							<p class="post-description">The Sattva Care admission procedure is designed to make the move from your home into our residence, a seamless process.</p>
							<br>

							<div class="col-md-4">
								<div class="panel panel-milano panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Step One</h3>
									</div>
									<div class="panel-body">
										<p>Once you have decided on moving your loved one into Sattva Care, you will be required to furnish complete medical reports, documents and insurance papers of the resident. You will also require to bring with you your bank statement and ID proofs.</p>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="panel panel-milano panel-success">
									<div class="panel-heading">
										<h3 class="panel-title">Step Two</h3>
									</div>
									<div class="panel-body">
										<p>Our geriatrician / clinical psychologist will assess the resident and may at this stage ask for certain medical reports.</p>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="panel panel-milano panel-info">
									<div class="panel-heading">
										<h3 class="panel-title">Step Three</h3>
									</div>
									<div class="panel-body">
										<p>Once cleared by the geriatrician / clinical psychologist, a contract covering the terms and conditions of the resident’s stay in Sattva Care shall be mutually agreed upon and signed and the payment made in full, including the security deposit and the deposit for sundry expenses that the resident may require.</p>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="panel panel-milano panel-warning">
									<div class="panel-heading">
										<h3 class="panel-title">Step Four</h3>
									</div>
									<div class="panel-body">
										<p>Our care managers record details of the resident, interests and preferences.</p>
									</div>
								</div>
							</div>

							<div class="col-md-8">
								<div class="panel panel-milano panel-danger">
									<div class="panel-heading">
										<h3 class="panel-title">Step Five</h3>
									</div>
									<div class="panel-body">
										<p>The room can be organised and prepared by family members to welcome the resident. The resident moves into Sattva Care premises and is helped with settling down comfortably by the staff at Sattva Care. Family involvement is encouraged at this stage to help in the transition. The local representative or friend should be present to be able to give assurance of availability to the resident if need be.</p>
									</div>
								</div>
							</div>
						</div>

						<h2 style="text-align: center">Sattva Care Room Rentals</h2>
						<br>
						<p>Understanding the need of families today, we have designed two brackets of stay. A long term stay is offered to accommodate seniors who would require to stay on indefinitely in the home. It could be a good decision to take if you are aging and finding it challenging to live by yourself. A short term stay can be opted for by families who need their loved ones to be cared for when away on holidays, or as a respite for those who have family members who are unwell and need the elderly member to be looked after or it could just be an experiential stay at the home. Whatever the reason may be, adopt a transparent approach and  involve the elderly member in the decision. Ensure they are comfortable about choosing the option to make the transition pleasant. Hand holding your loved one during the initial stages of the stay and keeping in touch with them and enquiring about their well being is a great way to help them settle in.</p>
						<br>
						<div style="text-align: center;">
							<div class="col-md-6">
								<div class="panel panel-milano panel-success">
									<div class="panel-heading">
										<h3 class="panel-title">Short Stay</h3>
									</div>
									<div class="panel-body">
										<p style="text-align: center;">Minimum stay of <strong>one</strong> month to <strong>nine</strong> months.</p>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="panel panel-milano panel-info">
									<div class="panel-heading" >
										<h3 class="panel-title">Long Stay</h3>
									</div>
									<div class="panel-body">
										<p style="text-align: center;">More that <strong>nine</strong> months.</p>
									</div>
								</div>
							</div>
						</div>

						<br>
							<div class="block" style="text-align: center;">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Occupancy</th>
											<th>Duration</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Single</td>
											<td>Short Stay</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Single</td>
											<td>Long Stay</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Double</td>
											<td>Short Stay</td>													</tr>
										<tr>
											<th scope="row">4</th>
											<td>Double</td>
											<td>Long Stay</td>										</tr>
									</tbody>
								</table>
							</div>
							<hr>

							<p style="text-align: center;font-size: 16px;"><strong>To know about our tarrifs and other charges</strong></p>
							<br>							
							<div style="text-align: center;">
								<a href="mailto:contact@sattvacare.com"><button type="button" class="btn btn-success btn-lg">Write to contact@sattvacare.com</button></a>
								<a href="/contact"><button type="button" class="btn btn-danger btn-lg">Let us contact you</button></a>															
							</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			function load() {
				if(document.getElementsByClassName("dropdown active")[0])
						document.getElementsByClassName("dropdown active")[0].className = "dropdown";
				document.getElementsByClassName("dropdown")[2].className = "dropdown active";
		}
		window.onload = load;
		</script>
@endsection