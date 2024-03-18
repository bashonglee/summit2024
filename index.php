<!DOCTYPE html>
<script src="js/testimonialslider.js">
<script>
	window.onload = function() {

		// Testimonials code

		updateTestimonial();

		setInterval(updateTestimonial, 10000);

	}

</script>

<style>
	@import url(https://fonts.googleapis.com/css?family=Open+Sans);

			.tcontainer *{
			box-sizing:border-box;
			}
			.tcontainer html, body{
			height:100%;
			font: normal 1em/1.5 "Open Sans";
			background-color:#ddd;
			background-size:cover;
			}
			.tcontainer a{
			color:#ccc;
			}
			.tcontainer .container{
			width:800px;
			min-height:350px;
			margin:0 auto;
			position:relative;
			padding-bottom:30px;
			overflow:hidden;
			}
			.tcontainer h1{
			text-align:center;
			text-shadow:0 1px white;
			color:#02303F;
			}
			.tcontainer h2{
			color:#736861; 
			margin:15px 0 5px;
			text-shadow:0 1px rgba(255,255,255,0.5);
			}
			.tcontainer h6{
			color:#928566; 
			margin:0;
			}
			.tcontainer input[type="radio"] {
			position: absolute;
			width: 1px; /* Setting this to 0 make it invisible for VoiceOver */
			height: 1px; /* Setting this to 0 make it invisible for VoiceOver */
			padding: 0;
			margin: -1px;
			border: 0;
			clip: rect(0 0 0 0);
			overflow: hidden;
			}
			.tcontainer label{
			display:block;
			width:20%;
			border: 4px solid white;
			position:absolute;
			bottom:5px;
			cursor: pointer;
			transition: border-color 0.3s linear;
			}

			.tcontainer label.second{
			left:34%;
			}
			.tcontainer label.third{
			left:68%;
			}

			.tcontainer blockquote{
			margin:0;
			padding:30px;
			width:800px;
			background-color: #3ab990;
			color:white;
			box-shadow: 0 5px 2px rgba(0,0,0,0.1);
			position:relative;
			transition: background-color 0.6s linear;
			}

			.tcontainer blockquote:after { 
			content: " "; 
			height: 0; 
			width: 0; 
			position: absolute; 
			top: 100%; 
			border: solid transparent; 
			border-top-color: #3ab990;
			border-left-color:#3ab990;
			border-width: 10px; 
			left: 10%; 
			} 
			.tcontainer #second:checked ~ .two blockquote {
			background-color:purple;
			}
			.tcontainer .two blockquote:after{
			border: solid transparent; 
			border-top-color: purple;
			border-left-color:purple;
			border-width: 10px;
			}
			.tcontainer #third:checked ~ .three blockquote{
			background-color:#54885F;
			}
			.tcontainer .three blockquote:after{
			border: solid transparent; 
			border-top-color: #54885F;
			border-left-color: #54885F;
			border-width: 10px;
			}
			.tcontainer .quotes{
			position:absolute;
			color:rgba(255,255,255,0.5);
			font-size:5em;
			}
			.tcontainer .leftq{
			top:-25px;
			left:5px;
			}
			.tcontainer .rightq{
			bottom:-10px;
			right:5px;
			}
			.tcontainer img{
			float:left;
			margin-right: 20px;
			}
			.tcontainer .slide{
			position:absolute;
			left:-100%;
			opacity:0;
			transition: all 0.6s ease-in;
			}

			.tcontainer #first:checked ~ label.first {
			border-width:6px;
			border-color:#3ab990;
			}
			.tcontainer #second:checked ~ label.second {
			border-width:6px; border-color:purple;
			}
			.tcontainer #third:checked ~ label.third {
			border:6px solid #54885F;
			}

			.tcontainer #first:checked ~ div.one {
			left:0;
			opacity:1;
			}
			.tcontainer #second:checked ~ div.two {
			left:0;
			opacity:1;
			}
			.tcontainer #third:checked ~ div.three {
			left:0;
			opacity:1;
			}

</style>



<?php require_once 'include/head.php';?>
<?php require_once 'include/nav.php';?>
<!-- Slider Section -->
	<div id="slider-section" class="slider-section container-fluid no-padding">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active" >
					<img src="images/photos/bmic1.jpg" alt="slide2" width="1920" height="770"/>
					<div class="carousel-caption">
						<div class="container">
							<div class="col-md-5 col-sm-6 col-xs-9 pull-right">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Controls 
			<div class="container">
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			-->
		</div>
	</div><!-- Slider Section /- -->
	
	<!-- Howwecan Section -->
	<div class="container-fluid no-padding howwecan-section">
		<div class="section-padding"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="howwecan-left">
						<div class="img-box">
							<img src="images/photos/149.jpg" alt="howwecan1" width="149" height="149"/>
						</div>
						<div class="img-box">
							<img src="images/photos/149-2.jpg" alt="howwecan2" width="149" height="149"/>
						</div>
						<div class="img-box">
							<img src="images/photos/149-3.jpg" alt="howwecan3" width="149" height="149"/>
						</div>
						
					</div>
				</div>
				<div class="col-md-8 col-sm-6 col-xs-12">
					<div class="howwecan-right">
						<div class="section-header">
							<h3>ABOUT THE SUMMIT</h3>
								<p>
									CARISCA’s annual Supply Chain Research Summit is central to our goal to strengthen African supply chain capacity and put Africa’s supply chain research on the map.<br><br>
									The conference brings together academic and non-academic researchers and public, private and civil society organizations to create an ongoing dialogue addressing complex supply chain challenges.<br><br> 
									<!--
									The fourth annual Supply Chain Research Summit is set for June 4-6, 2024, in Nairobi, Kenya. Organized in collaboration with Strathmore University, the summit will be presented in a hybrid format. <br><br>
									The in-person venue is the <a href="lodging.php"> Radisson Blu Hotel, Nairobi Upper Hill.</a> Attendees and speakers may also participate virtually via Zoom.</p> -->
							</div>

					</div>
					</div>
				</div>


			</div>
		</div>
		
	</div><!-- Howwecan Section /- -->

	<!-- Howwecan Section -->
	<div class="container-fluid no-padding howwecan-section" style="margin-top: 50px;">
		<div class="container">
			<div class="row">
			
				<div class="col-md-4 col-sm-6 col-xs-12">
				
					<div class="howwecan-left" style="top: -40px !important">
					<!--
						<div class="img-box">
							<img src="images/photos/149.jpg" alt="howwecan1" width="149" height="149"/>
						</div>
						<div class="img-box">
							<img src="images/photos/149-4.jpg" alt="howwecan2" width="149" height="149"/>
						</div>
						<div class="img-box">
							<img src="images/photos/149-5.jpg" alt="howwecan3" width="149" height="149"/>
						</div>
						-->
					</div>
					
				</div>

				
				<div class="col-md-8 col-sm-6 col-xs-12">
					<div class="howwecan-right">				
					<div class="section-header">
								<h3 style="line-height: 1;">Africa’s Supply Chain Resilience for Economic Transformation</h3>
									<ps>Resilient supply chains are vital for the success of businesses and societies. Given the frequent and costly supply chain disruptions in Africa, increased investment in supply chain resilience on the continent is a pressing need.
									<br><br>
									Current proposals for addressing these issues are primarily at the macro level and often lack solid grounding in theory-validated frameworks. Furthermore, while studies on the drivers of supply chain resilience are growing rapidly, research specific to African supply chains remains limited.
									<br><br>
									Addressing these supply chain resilience themes requires a forum such as the 2024 Supply Chain Research Summit. There, supply chain scholars will brainstorm and share ideas on how Africa’s supply chains can be repositioned to drive the continent’s economic transformation agenda.
									</ps>
					</div>

					</div>
					</div>
				</div>


			</div>
		</div>
		
	</div><!-- Howwecan Section /- -->


	<!-- Keynote Speakers -->
	<div class="container-fluid our-history our-history-section upcoming-event latest-blog no-padding">
		<div class="container text-center">
		<div class="section-padding"></div>
			<div class="section-header">
				<h3>Our Keynote Speakers</h3>
			</div>
			<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-6">
					<article class="type-post">
						<div class="entry-cover">
							<a href="#"><img src="images/photos/lydia.jpg" alt="patrick" width="370" height="300"/></a>
						</div>
						<div class="entry-block">
							<div class="entry-title">
								<a href="#" title="Patrick"><h3>Lydiah Kiburu</h3></a>
							</div>
							<div class="entry-meta">
								<div class="post-metablock">
									<div class="post-time">
										<span>Group Director for Business Transformation, Brand & Culture</span>
									</div>
									<div class="post-location">
										<span>Equity Group Holdings Plc (Kenya) </span>
									</div>
								</div>
							</div>
							<div class="entry-content">
								<p>“Leveraging Technology and Innovation To Build Resilient Supply Chains in Africa”</p>
							</div>
							<a href="#" class="learn-more" title="Learn More">Read More</a>
						</div>
					</article>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<article class="type-post">
						<div class="entry-cover">
							<a href="#"><img src="images/photos/glenn.jpg" alt="Glenn" width="370" height="300"/></a>
						</div>
						<div class="entry-block">
							<div class="entry-title">
								<a href="#" title="Glenn Richey"><h3>Glenn Richey</h3></a>
							</div>
							<div class="entry-meta">					
								<div class="post-metablock">
									<div class="post-time">
										<span>Harbert Eminent Scholar in Supply Chain Management</span>
									</div>
									<div class="post-location">
										<span>Auburn University (USA)</span>
									</div>
								</div>
							</div>
							<div class="entry-content">
								<p>“Responsiveness, Organizational Learning and AI: The Future of Supply Chain Strategy”</p>
							</div>
							<a href="#" class="learn-more" title="Learn More">Read More</a>
						</div>
					</article>
				</div>

			<!--

				<div class="col-md-4 col-sm-4 col-xs-4">
					<article class="type-post">
						<div class="entry-cover">
							<a href="#"><img src="images/photos/patrick.jpg" alt="Patrick" width="370" height="300"/></a>
						</div>
						<div class="entry-block">
							<div class="entry-title">
								<a href="#" title="Glenn Richey"><h3>Patrick Wanjuki</h3></a>
							</div>
							<div class="entry-meta">					
								<div class="post-metablock">
									<div class="post-time">
										<span>Director General, Public Procurement Regulatory Authority</span>
									</div>
									<div class="post-location">
										<span>Kenya</span>
									</div>
								</div>
							</div>
							<div class="entry-content">
								<p>“His topic shall have this full section to rule</p>
							</div>
							<a href="#" class="learn-more" title="Learn More">Read More</a>
						</div>
					</article>
				</div>

				-->
				

				<!-- Third Speaker
				<div class="col-md-4 col-sm-6 col-xs-6">
					<article class="type-post">
						<div class="entry-cover">
							<a href="eventsingle-page.html"><img src="images/history3.jpg" alt="history" width="370" height="300"/></a>
						</div>
						<div class="entry-block">
							<div class="entry-title">
								<a href="eventsingle-page.html" title="Event Badge Attendance"><h3>Event Badge Attendance</h3></a>
							</div>
							<div class="entry-meta">
								<div class="post-metablock">
									<div class="post-time">
										<span>11:00pm - 03:00pm</span>
									</div>
									<div class="post-location">
										<span>3rd Dist, NY, North America</span>
									</div>
								</div>
							</div>
							<div class="entry-content">
								<p>The power less in a world of criminals who operate above the law the mate.</p>
							</div>
							<a href="eventsingle-page.html" class="learn-more" title="Learn More">Learn More</a>
						</div>
					</article>
				</div>

				-->
			</div>
		</div>
		<div class="section-padding"></div>
	</div><!-- Our History /- -->




	<br><br><br>
	<!-- Latest News -->
	<div class="container-fluid latest-blog latest-blog-section no-padding">
		<div class="container">	
		<div class="section-header">
								<h3 id="callforpapers">CALL FOR PAPERS NOW OPEN</h3>
		</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<article class="type-post">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="entry-cover">
								<a href="#"><img src="images/photos/cfp.jpg" alt="latest-blog" width="267" height="358"/></a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							
							<div class="entry-title">
								<a href="https://asu.us2.list-manage.com/track/click?u=7beebdc6c8a3317d91ebb0c8e&id=324581b318&e=606e6c6139" title="Summit Call for Papers"><h3>Call for Papers</h3></a>
							</div>
							<div class="entry-content">
								<p>This year’s summit will take an in-depth look at <b> “Africa’s Supply Chain Resilience for Economic Transformation.”</b> We invite you to share your research, knowledge and insights by submitting a paper abstract for presentation at the summit.  </p>
							</div>
							<a href="https://asu.us2.list-manage.com/track/click?u=7beebdc6c8a3317d91ebb0c8e&id=324581b318&e=606e6c6139" class="learn-more" title="Learn More">Learn More</a>
						</div>
					</article>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<article class="type-post">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="entry-cover">
								<a href="#"><img src="images/photos/pda.jpg" alt="latest-blog" width="267" height="358"/></a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							
							<div class="entry-title">
								<a href="https://asu.us2.list-manage.com/track/click?u=7beebdc6c8a3317d91ebb0c8e&id=7cb5e9cbe3&e=606e6c6139" title="PhD Dissertation Award"><h3>PhD Dissertation Award</h3></a>
							</div>
							<div class="entry-content">
								<p>Doctoral researchers whose primary affiliation is with a higher education institution in Africa and whose research is in logistics and supply chain management are invited to submit their dissertation proposal to be considered for an award and presentation at the summit. </p>
							</div>
							<a href="https://asu.us2.list-manage.com/track/click?u=7beebdc6c8a3317d91ebb0c8e&id=7cb5e9cbe3&e=606e6c6139" title="Learn More" class="learn-more">Learn More</a>
						</div>
					</article>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<article class="type-post">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="entry-cover">
								<a href="#"><img src="images/photos/pdw.jpg" alt="latest-blog" width="267" height="358"/></a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							
							<div class="entry-title">
								<a href="https://asu.us2.list-manage.com/track/click?u=7beebdc6c8a3317d91ebb0c8e&id=9acb240de7&e=606e6c6139" title="Paper Development Workshop"><h3>Paper Development Workshop</h3></a>
							</div>
							<div class="entry-content">
								<p>Faculty and senior doctoral candidates in higher education institutions in Africa are invited to participate in the pre-conference Paper Development Workshop... </p>
							</div>
							<a href="https://asu.us2.list-manage.com/track/click?u=7beebdc6c8a3317d91ebb0c8e&id=9acb240de7&e=606e6c6139" class="learn-more" title="Learn More">Learn More</a>
						</div>
					</article>
				</div>
			</div>
		</div>
		<div class="section-padding"></div>
	</div><!-- Latest News /- -->
	
	
  
</div>
	

	<!-- Testimonial Section -->
	<div class="container-fluid testimonial-section no-padding">
	<div class="container">	
	<div class="section-header no-padding">
					<h3 style="line-height: 30px !important;">Testimonials from 2023 Summit participants</h3>					
				</div>
	<div class="tcontainer">
		<div class="container">
				<input type="radio" name="nav" id="first" checked/>
				<input type="radio" name="nav" id="second" />
				<input type="radio" name="nav" id="third" />
				<label for="first" class="first"></label>
				<label for="second"  class="second"></label>
				<label for="third" class="third"></label>
				
			<div class="one slide">
				<blockquote>
				<span class="leftq quotes">&ldquo;</span> <p id="testimonial-quote"> <span class="rightq quotes">&bdquo; </span>
				</blockquote>
				<img id="testimonial-image" width="150" style="margin-top: 11px; margin-left:10px;border-radius: 25px 70px;"/>
				<h2 id="testimonial-author"></h2>
				<div>
					<h6 id="testimonial-role"> </h6>
					<h6 id="testimonial-organisation"></h6> 
					<h6 id="testimonial-extra"></h6>
				</div>	
				
			</div>	
		</div>
	</div>

	</div>
		<div class="section-padding"></div>
	</div><!-- Testimonial Section /- -->
								


	<?php require_once 'include/footer.php';?>
	<?php require_once 'include/scripts.php';?>

</body>
	
</html>