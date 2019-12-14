@extends('base')

@section('content')
		<div id="single">
			<div class="container">
				<div class="post">

					<div class="caption">
						<div class="header">
							<h1>Frequently Asked Questions</h1>
						</div>
						<br>
						<p><strong>Does your home accommodate individuals with Dementia ?</strong></p><br>
						<p><i>We take a very small number of residents who have disabilities related to Dementia. Dementia care requires a lot of attention, close monitoring and a separate programme. We desire to accommodate small numbers to be able to give the individual an inclusive and more encouraging setup.</i></p>

						<br>
						<p><strong>Does your home offer stays for medical tourists ?</strong></p><br>
						<p><i>We do not offer stays for medical tourism, as senior citizens require a clinically safe environment. Our home accommodates healthy seniors, who may have difficulty in performing routine tasks or who may need a more stimulating environment.</i></p>

						<br>
						<p><strong>What do you do if a resident encounters an infectious disease ?</strong></p><br>
						<p><i>In the case when a resident encounters an infectious disease, we immediately  inform the family and quarantine or hospitalise the resident on medical advise and offer care giving services until the family takes over.</i></p>

						<br>
						<p><strong>How much independence can a resident enjoy ?</strong></p><br>
						<p><i>A resident can use his free will to participate in the activities offered. Although all are encouraged to do so even if there is no compulsion. Moreover, the resident could choose to participate in the running of the home if he/she wishes to. However, neither is a remuneration offered nor is he/she on the rolls of Sattva Care.</i></p>

						<br>
						<p><strong>Are all services that you provide, free of cost ?</strong></p><br>
						<p><i>The rental includes three meals, snacks and beverages, housekeeping services, basic laundry services that cover a hand towel daily and bedsheet and pillows cases once a week, security, doctor consultation once a month, basic parameters recorded once a week, entertainment and activities offered at Sattva Care and the room rent.</i></p>

						<br>
						<p><strong>I am taking my family on a holiday. Can you accommodate my parents for that time ? How will I be charged ?</strong></p><br>
						<p><i>We would be happy to accommodate your loved one. The minimum period charged for is one month and successive months thereafter and not lesser. However, a security deposit is also taken at the time of signing the contract which is over and above the rental. A minimum amount for sundry expenses also needs to be deposited by the family.</i></p>

						<br>
						<p><strong>Does my parent get a one bedroom flat to stay in ?</strong></p><br>
						<p><i>Your loved one is offered a room to stay in. You could choose between sharing a room with an unknown resident or booking an entire room to yourself. Even though it is not a one bedroom flat, it would appear more like a three bedroom flat, with three rooms sharing a common living room and pantry.</i></p>

						<br>
						<p><strong>Can my mother cook in the pantry ?</strong></p><br>
						<p><i>The pantry offers only fireless cooking with a microwave oven. We do not recommend that elders cook unattended. Using the common services of the main kitchen and aiding the cook will be a better option if at all need be.</i></p>

						<br>
						<p><strong>Is it mandatory to eat in the dining hall ?</strong></p><br>
						<p><i>It is important for all residents to come together at meal times. It is a great time for bonding and getting to know each other as well as introducing new residents. However, in case of an illness or injury that disrupts the resident from coming to the dining hall, the resident can be provided food in the room itself.</i></p>

						<br>
						<p><strong>Does the Assisted Living Facility provide transport ?</strong></p><br>
						<p><i>Transport can be booked and arranged for through us with our local cab operator. Charges will be levied as per the operator’s rates and will have to be paid to him by the resident right after the journey. However, on outings planned by Sattva Care, the residents are charged by Sattva Care and pay from their sundry expense.</i></p>

						<br>
						<p><strong>Is your Assisted Living Facility aided or funded ?</strong></p><br>
						<p><i>No, ours is a private setup that is solely owned by Sattva Care with no funding whatsoever. This is why we do not offer discounts or rebates at all.</i></p>

						<br>
						<p><strong>What happens in case of death of a resident ?</strong></p><br>
						<p><i>Sattva Care understands that it is dealing with an age group that is more vulnerable to encounter death at any point of their life, even during their stay with us. If such is the case, the family is immediately informed by Sattva Care. If the family is unable to claim the body within the time as advised by the doctor, the body is sent to the infirmary, the cost of which is borne by the family or representative.</i></p>
					</div>
				</div>
			</div>
		</div>
		<script>
			function load() {
				if(document.getElementsByClassName("dropdown active")[0])
						document.getElementsByClassName("dropdown active")[0].className = "dropdown";
				document.getElementsByClassName("dropdown")[3].className = "dropdown active";
		}
		window.onload = load;
		</script>
@endsection