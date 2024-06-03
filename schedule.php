<?php require_once 'include/head.php'; ?>
<?php require_once 'include/nav2.php'; ?>


<style>
    .font-weight-bold {
        font-weight: 500;
    }

    .b-none {
        border-bottom: none !important;
    }

    a .active {
        color: #dc143c !important;
    }
	.card-text {
		font-size: 13px !important;
    	letter-spacing: 0.16px !important;
		line-height: 18px !important;

	}
	.card-title {
		font-size: 16px !important;
		margin-bottom: 0px !important;
		font-weight: bold !important;
		color: #4b4a4a !important;

	}
</style>

<link rel="stylesheet" type="text/css" href="css/schedule.css">


<!-- PageBanner
<div class="container-fluid page-banner blogpost no-padding" style='background: url("images/sponsor.jpg"); -webkit-background-size: cover;	background-size: cover;	background-position: center center; background-repeat: no-repeat; background-size: cover;'>
    <div class="section-padding"></div>
    <div class="container">
        <div class="banner-content-block">
            <div class="banner-content">
                <h3>Summit Schedule</h3>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Schedule</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div>
PageBanner /- -->




<body class="light-vz">
  <!-- Schedule Section -->
	<div class="container-fluid no-padding schedule-section">
		<div class="container">
			<div class="section-header">
			</div>	
			<div class="schedule-block">
				<img src="images/schedule.jpg" alt="schedule"/>
				<div class="col-md-11">
					<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#schedule_1" aria-controls="schedule_1" role="tab" data-toggle="tab">
									<h3>PDW</h3>
									<span>03-June-2024</span>
								</a>
							</li>
							<li role="presentation">
								<a href="#schedule_2" aria-controls="schedule_2" role="tab" data-toggle="tab">
									<h3>Day 1</h3>
									<span>04-June-2024</span>
								</a>
							</li>
							<li role="presentation">
								<a href="#schedule_3" aria-controls="schedule_3" role="tab" data-toggle="tab">
									<h3>Day 2</h3>
									<span>05-June-2024</span>
								</a>
							</li>
							<li role="presentation">
								<a href="#schedule_4" aria-controls="schedule_4" role="tab" data-toggle="tab">
									<h3>Day 3</h3>
									<span>06-June-2024</span>
								</a>
							</li>
							
						</ul>  


		 		<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="schedule_1">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#schedule_1_venue1" aria-controls="schedule_1_venue1" role="tab" data-toggle="tab">Adlon</a>
								</li>
							</ul>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="schedule_1_venue1">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion" role="tablist" aria-multiselectable="true">                        
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_1" aria-expanded="false" aria-controls="schedule_accrodion_content_1">
															Registration and Coffee
														</a>
													</h4>
												</div>
												
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2">									
													<h4 class="panel-title">
														<span>9:00 AM - 10:30 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_2" aria-expanded="true" aria-controls="schedule_accrodion_content_2">
														Roundtable Discussions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Table 1: Prof. Glenn Richey</strong></span>
																	<!-- <span>Rasheed Olawale Azeez</span> -->
																	</p>
																	<p>
																	<span class="facilitator"><strong>Table 2: Prof. Dale Rogers</strong></span>
																	<!-- <span>Mulugeta Chane</span> -->
																	</p>
																	<p>
																	<span class="facilitator"><strong>Table 3: Prof. Adegoke Oke</strong></span>
																	<!-- <span>Ibrahim Hassan</span> -->
																	</p>
																	<p>
																	<span class="facilitator"><strong>Table 4: Prof. Thomas Choi</strong></span>
																	<!-- <span>Ellis Kofi Akwaa-Sekyi</span> -->
																	</p>
																	<p>
																	<span class="facilitator"><strong>Table 5: Prof. Nat Boso</strong></span>
																	<!-- <span>Jonathan Ikeolumba</span> -->
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3">									
													<h4 class="panel-title">
														<span>10:30 AM - 10:45 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_3" aria-expanded="true" aria-controls="schedule_accrodion_content_3">
														Break/Changeover
														</a>
													</h4>
												</div>
												

											</div>

											
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_4">									
													<h4 class="panel-title">
														<span>10:45 AM - 12:30 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_4" aria-expanded="true" aria-controls="schedule_accrodion_content_4">
														Roundtable Discussions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_4">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																<p>
																	<span class="facilitator"><strong>Table 1: Prof. Glenn Richey</strong></span>
																	<!-- <span>Rasheed Olawale Azeez</span> -->
																	</p>
																	<p>
																	<span class="facilitator"><strong>Table 2: Prof. Dale Rogers</strong></span>
																	<!-- <span>Mulugeta Chane</span> -->
																	</p>
																	<p>
																	<span class="facilitator"><strong>Table 3: Prof. Adegoke Oke</strong></span>
																	<!-- <span>Ibrahim Hassan</span> -->
																	</p>
																	<p>
																	<span class="facilitator"><strong>Table 4: Prof. Thomas Choi</strong></span>
																	<!-- <span>Ellis Kofi Akwaa-Sekyi</span> -->
																	</p>
																	<p>
																	<span class="facilitator"><strong>Table 5: Prof. Nat Boso</strong></span>
																	<!-- <span>Jonathan Ikeolumba</span> -->
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_5">
													<h4 class="panel-title">
														<span>12:30 PM - 1:30 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_5" aria-expanded="false" aria-controls="schedule_accrodion_content_5">
															Networking Lunch
														</a>
													</h4>
												</div>
					
											</div>
										</div>										
								</div>
							</div>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="schedule_2">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#schedule_2_venue1" aria-controls="schedule_2_venue1" role="tab" data-toggle="tab">All Halls</a>
								</li>
								<li role="presentation">
									<a href="#schedule_2_venue2" aria-controls="schedule_2_venue2" role="tab" data-toggle="tab">Adlon</a>
								</li>
								<li role="presentation">
									<a href="#schedule_2_venue3" aria-controls="schedule_2_venue3" role="tab" data-toggle="tab">Baltschug</a>
								</li>
								<li role="presentation">
									<a href="#schedule_2_venue4" aria-controls="schedule_2_venue4" role="tab" data-toggle="tab">Pearl</a>
								</li>
								<li role="presentation">
									<a href="#schedule_2_venue5" aria-controls="schedule_2_venue5" role="tab" data-toggle="tab">Stafford</a>
								</li>
							</ul>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="schedule_2_venue1">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion2" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_101">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_101" aria-expanded="false" aria-controls="schedule_accrodion_content_101">
														Registration  and Coffee
														</a>
													</h4>
												</div>
												<!--
												<div id="schedule_accrodion_content_101" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_101">
													<div class="panel-body">
														<p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
														<div class="author-box">
															<img src="images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Jim harryson<span>Public Speaker</span></h3>
																<a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
																<a class="btn-event" href="#" title="About The Events">About the events</a>
															</div>
														</div>
													</div>
												</div>
													-->
											</div>
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_102">									
													<h4 class="panel-title">
														<span>9:00 AM - 9:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_102" aria-expanded="true" aria-controls="schedule_accrodion_content_102">
															Welcome:
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_102" class="panel-collapse collapses" role="tabpanel" aria-labelledby="schedule_accrodion_heading_102">
													<div class="panel-body">
														<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/rita.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Prof. Mrs. Rita Akosua Dickson<span>The Vice-Chancellor of Kwame Nkrumah University of Science and Technology (KNUST)</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_103">									
													<h4 class="panel-title">
														<span>9:15 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_103" aria-expanded="true" aria-controls="schedule_accrodion_content_103s">
															Introduction: Nathaniel Boso 
															<br>Keynote 
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_103" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_103">
													<div class="panel-body">
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/lydia-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Lydiah Kiburu, Group Director, Business Transformation, Brand & Culture - Equity Group Holdings Plc 
																	<span>Leveraging Technology and Innovation to Build Resilient Supply Chains in Africa</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_104">									
													<h4 class="panel-title">
														<span>10:00 AM - 10:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_104" aria-expanded="true" aria-controls="schedule_accrodion_content_104">
														15-minute changeover
														</a>
													</h4>
												</div>

												<!--
												<div id="schedule_accrodion_content_104" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_104">
													<div class="panel-body">
														<p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
														<div class="author-box">
															<img src="images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Jim harryson<span>Public Speaker</span></h3>
																<a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
																<a class="btn-event" href="#" title="About The Events">About the events</a>
															</div>
														</div>
													</div>
												</div>

												-->
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_105">									
													<h4 class="panel-title">
														<span>10:15 AM - 11:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_105" aria-expanded="true" aria-controls="schedule_accrodion_content_105">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_105" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_105">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: John Serbe Marfo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: John Frimpong</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Pearl: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Dominic Essuman</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Enoch Bulley</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_106">									
													<h4 class="panel-title">
														<span>11:15 AM - 11:45 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_106" aria-expanded="true" aria-controls="schedule_accrodion_content_106">
														15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_107">									
													<h4 class="panel-title">
														<span>11:45 AM - 12:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_107" aria-expanded="true" aria-controls="schedule_accrodion_content_107">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_107" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_107">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Priscilla Mante</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Abdul Samed Muntaka</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Pearl: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Evans Amoah</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Boakye-Yiadom</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_108">									
													<h4 class="panel-title">
														<span>12:45 PM - 1:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_108" aria-expanded="true" aria-controls="schedule_accrodion_content_108">
															Lunch
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_109">									
													<h4 class="panel-title">
														<span>1:45 PM - 2:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_109" aria-expanded="true" aria-controls="schedule_accrodion_content_109">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_109" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_109">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Priscilla Addo Asamany</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Henry Ataburo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Pearl: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Darlington Adanfo</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Isaac Apike</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_110">									
													<h4 class="panel-title">
														<span>2:45 PM - 3:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_110" aria-expanded="true" aria-controls="schedule_accrodion_content_110">
															15-minute changeover
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_111">									
													<h4 class="panel-title">
														<span>3:00 PM - 4:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_111" aria-expanded="true" aria-controls="schedule_accrodion_content_111">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_111" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_111">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Sectoral Supply Chains.</strong></span>
																	<span>Session Chair: Ibraheem Forson</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Matilda Kokui Owusu-Bio</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Pearl: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Emmanuel Anin</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Adetoyese Oguntimehin</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_112">									
													<h4 class="panel-title">
														<span>4:00 PM - 4:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_112" aria-expanded="true" aria-controls="schedule_accrodion_content_112">
															15-minute changeover 
														</a>
													</h4>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_113">									
													<h4 class="panel-title">
														<span>4:15PM - 5:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_113" aria-expanded="true" aria-controls="schedule_accrodion_content_113">
															Parallel Session
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_113" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_113">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Women in Supply Chain Panel Session.</strong></span>
																	<span>Moderator: Matilda Owusu-Bio</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																	<span>Session Chair: Dominic Essuman</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Pearl: Emerging Issues in Global Supply Chains.</strong></span>
																	<span>Session Chair: Benjamin Agyei-Owusu</span>
																	</p>
																	<p>
																	<span class="facilitator"><strong> Pearl: Africa Supply Chains.</strong></span>
																	<span>Session Chair: Mona Ali</span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_114">									
													<h4 class="panel-title">
														<span>5:15 PM - 5:35 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_114" aria-expanded="true" aria-controls="schedule_accrodion_content_114">
														20-minute coffee break
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_114" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_114">
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_115">
													<h4 class="panel-title">
														<span>5:35 PM - 6:35 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_115" aria-expanded="false" aria-controls="schedule_accrodion_content_115">
														PhD Dissertation Award Presentations    
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_115" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_115">
													<div class="panel-body">
														<p>Session Chair: Dominic Essuman</p>
														
													</div>
												</div>
											</div>
										</div>
									</div>										
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_2_venue2">
									<!-- Adlon schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion2" role="tablist" aria-multiselectable="true">
											
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1102">									
													<h4 class="panel-title">
														<span>9:00 AM - 9:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1102" aria-expanded="true" aria-controls="schedule_accrodion_content_1102">
															Welcome:
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1102" class="panel-collapse collapses" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1102">
													<div class="panel-body">
														<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/rita.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Prof. Mrs. Rita Akosua Dickson<span>The Vice-Chancellor of Kwame Nkrumah University of Science and Technology (KNUST)</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1103">									
													<h4 class="panel-title">
														<span>9:15 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1103" aria-expanded="true" aria-controls="schedule_accrodion_content_1103s">
															Introduction: Nathaniel Boso 
															<br>Keynote 
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1103" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1103">
													<div class="panel-body">
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/lydia-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3>Lydiah Kiburu, Group Director, Business Transformation, Brand & Culture - Equity Group Holdings Plc 
																	<span>Leveraging Technology and Innovation to Build Resilient Supply Chains in Africa</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1105">									
													<h4 class="panel-title">
														<span>10:15 AM - 11:30 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1105" aria-expanded="true" aria-controls="schedule_accrodion_content_1105">
															Parallel Sessions: Sectoral Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1105" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1105">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Session Chair: John Serbe Marfo</strong></span>
																			<div class="card mb-3">
																				<div class="card-body">
																				<h5 class="card-title">How Mobile Technology is Revolutionizing Access to Health Care in Eastern Africa: A Supply Chain Perspective.</h5>
																				<p class="card-text">Gilbert Nyaga (Northeastern University)</p>
																				</div>
																			</div>

																			<div class="card mb-3">
																				<div class="card-body">
																				<h5 class="card-title">GHSC-PSM in Ghana's Western/Western North Combats Covid-19 and Hiv Supply Issues, Enhancing Healthcare Access and Commodity Availability with Transformative Impact.</h5>
																				<p class="card-text">Abena Ntodi, Innocent Ibegbunam, Daniel Owusu-Afranie, Irene Andoh, Charles Owusu Boakye, Edinam Amegashie (All from USAID GHSC-PSM)</p>
																				</div>
																			</div>

																			<div class="card mb-3">
																				<div class="card-body">
																				<h5 class="card-title">An Assessment Of Health Commodity Supply Chain Visibility: Impact, Challenges, and Critical Success Factors of the Ghana Integrated Logistics Management Information System (GhiLMIS)</h5>
																				<p class="card-text">John Marfo, Henry Ataburo (All from CARISCA KNUST)</p>
																				</div>
																			</div>
																	</p>
																	
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1107">									
													<h4 class="panel-title">
														<span>11:45 AM - 12:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1107" aria-expanded="true" aria-controls="schedule_accrodion_content_1107">
															Parallel Sessions: Sectoral Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1107" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1107">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span  class="facilitator"><strong>Session Chair: Priscilla Mante</strong></span>
																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Inventory Stockpiling: Causes and Impact at Community Pharmacies in Nairobi, Kenya</h5>
																			<p class="card-text">Agnes Maina, Nyamwange Onserio, Akelo Ernest Ochieng (All from University of Nairobi, Faculty of Business & Management Sciences)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Measuring The Impact Of Supply Chain Disruptions on Patient Outcomes and Healthcare Costs: A Study of the Ghana Healthcare System</h5>
																			<p class="card-text">Alhaji Cobbinah (KNUST) Abdulai Sulemana Baba (KNUST)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Assessment of the Newborn Respiratory Ecosystem: A Focus on Public Facilities in the Northern and Upper West Regions of Ghana</h5>
																			<p class="card-text">Emmanuel Menyah (Chemonics), Innocent Igbegbunam, Irene Andoh, Abdul-Fatahi Adam, Mary Ann Tanlongo (All of GHSC-PSM, Ghana), Rebecca Bronheim, Siobhan Vega, Tamah Kamlem, Brittany Stollar, Charlotte Stein, (All from GHSC-PSM, Headquarters, U.S.A), Kofi Issah (Ghana Health Service), Claudette Diogo, (Ghana Health Service), Damaris Forson (USAID Ghana)</p>
																			</div>
																		</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1109">									
													<h4 class="panel-title">
														<span>1:45 PM - 2:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1109" aria-expanded="true" aria-controls="schedule_accrodion_content_1109">
															Parallel Sessions: Sectoral Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1109" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1109">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Session Chair: Priscilla Addo Asamany</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Social - Ecological Resource Configuration and Disaster Responsiveness: When does Coopetition Matter?</h5>
																		<p class="card-text">Priscilla Addo Asamany, Nathaniel Boso ( All from KNUST), Emmanuel Anin (Kumasi Technical University), Matilda Owusu-Bio (KNUST)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">The Influence of Collectivism and Individualism on Co-Opetition Dynamics within the Context of African Supply Chains</h5>
																		<p class="card-text">Samuel Mayanja (Makerere University Business School)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Institutional Pressures, Top Management Commitment and Social Sustainable Procurement Among Manufacturing Firms in Uganda</h5>
																		<p class="card-text">Pamela Ssennoga (Kyambogo University), Henry Mutebi, Samuel S. Mayanja</p>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1111">									
													<h4 class="panel-title">
														<span>3:00 PM - 4:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1111" aria-expanded="true" aria-controls="schedule_accrodion_content_1111">
															Parallel Sessions: Sectoral Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1111" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1111">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span  class="facilitator"><strong>Session Chair: Emmanuel Anin</strong></span>
																		<div class="card mb-3">
																		<div class="card-body">
																			<h5 class="card-title">Health Supply Chain Financing System in Ghana: Implications for Policy and Practice</h5>
																			<p class="card-text">Abdul Samed Muntaka (CARISCA KNUST), Emmanuel Kwabena Anin (CARISCA KNUST)</p>
																		</div>
																		</div>

																		<div class="card mb-3">
																		<div class="card-body">
																			<h5 class="card-title">Optimizing Low-demand Pharmaceutical Packaging: Evaluating the Effect on Access and Inventory Cost of Advanced HIV Disease Diagnostics in Uganda</h5>
																			<p class="card-text">Henry Oundo, (Management Sciences for Health) Miti Joel, Shamim Nakade, Henry Komakech, Denis Okidi, Martin Oteba (All from USAID/Uganda Strengthening Supply Chain Systems Activity), Judith Kyokushaba, Viola Kasone, Martha Ajulong, Seru Morries, Proscovia Namuwenge (All from Ministry of Health, Uganda), Eric Lugada (All from USAID/Uganda Strengthening Supply Chain Systems Activity)</p>
																		</div>
																		</div>

																		<div class="card mb-3">
																		<div class="card-body">
																			<h5 class="card-title">Improving Supply Chain Data Visibility through Solar-Powered Hardware at Remote Health Facilities in Uganda</h5>
																			<p class="card-text">Shamim Nakade (Management Sciences for Health) Denis Okidi, Henry Oundo, Henry Komakech, John Wasswa, Miti Joel, Amuzah Nshabaruhanga, Anthony Kirunda, Martin Oteba (All from USAID/Uganda Strengthening Supply Chain Systems Activity), Seru Morries, Martha Ajulong (All from Ministry of Health, Uganda), Eric Lugada (USAID/Uganda Strengthening Supply Chain Systems Activity)</p>
																		</div>
																		</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1113">									
													<h4 class="panel-title">
														<span>4:15PM - 5:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1113" aria-expanded="true" aria-controls="schedule_accrodion_content_1113">
															Parallel Session: Women in Supply Chain Panel Session
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1113" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1113">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Moderator: Matilda Owusu-Bio</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Ensuring Inclusive and Gender-Responsive Supply Chains in Africa</h5>
																		<ul class="list" style="color: #777; font-size: 16px; letter-spacing: 0.16px;line-height: 30px; !important">
																			<li>Mrs Naa Densua Aryeetey (Vice President for Maritime, CILT Gh and Global Advisor for Women in Logistics and Transport (WiLAT))</li>
																			<li>Dr. Mona Ali Ekram Ali (Assistant Professor of Operations and Supply Chain Management. Faculty of Management Technology, the German University in Cairo)</li>
																			<li>Fortune Kyei (Director of Operations, Guzakuza)</li>
																			<li>Lucia Addae (Chairperson, Lady Pharmacist Association of Ghana)</li>
																		</ul>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1115">
													<h4 class="panel-title">
														<span>5:35 PM - 6:35 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1115" aria-expanded="false" aria-controls="schedule_accrodion_content_1115">
														PhD Dissertation Award Presentations
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1115" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1115">
													<div class="panel-body">
														<p>
														<span class="facilitator"><strong>Session Chair: Dominic Essuman</strong></span>
														<div class="card mb-3">
																<div class="card-body">
																<h5 class="card-title">Antecedents of Tendering Capability and Performance: The Role of Procedural Justice</h5>
																<p class="card-text">Mavis Agbodza</p>
																</div>
															</div>

															<div class="card mb-3">
																<div class="card-body">
																<h5 class="card-title">Developing an Industry 4.0 Ecosystem for Sustainable Supply Chain Practices in the Vuca World: An Exploration in the Emerging Economies</h5>
																<p class="card-text">Zakaria El Hathat</p>
																</div>
															</div>

															<div class="card mb-3">
																<div class="card-body">
																<h5 class="card-title">The Effects Of Supply Chain Integration On Public Hospital Efficiency: The Role Of Organizational Learning</h5>
																<p class="card-text">Esther Nandara</p>
																</div>
															</div>
													</p>
														
													</div>
												</div>
											</div>
									</div>													
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_2_venue3">
									<!-- Baltschug schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion2" role="tablist" aria-multiselectable="true">
											

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1205">									
													<h4 class="panel-title">
														<span>10:15 AM - 11:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1205" aria-expanded="true" aria-controls="schedule_accrodion_content_1205">
															Parallel Sessions: General Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1205" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1205">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">																	
																	<p>
																	<span class="facilitator"><strong>Session Chair: John Frimpong</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Advancements in Supply Chain Technological Innovations and their Effect of Business Performance; A Case of Naivas Supermarket, Kenya</h5>
																		<p class="card-text">Michael Boro (Kenya)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">A Study of the Last Mile Supply Chain of FMCGs Among Micro Retail Outlets in Urban Areas. Case Study of Alimosho Lga Lagos</h5>
																		<p class="card-text">Grace Akinmolayan, Abiola Fagbrenro (All from Lagos State University)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Project Infrastructure Design as Transportation Aid to Logistic Performance: Evidence from Logistic Providers in Lagos, Nigeria.</h5>
																		<p class="card-text">Lede Ikpoh (Lagos State University), Ajemunigbohun Sunday Stephen (Lagos State University)</p>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

										
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1207">									
													<h4 class="panel-title">
														<span>11:45 AM - 12:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1207" aria-expanded="true" aria-controls="schedule_accrodion_content_1207">
															Parallel Sessions: General Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1207" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1207">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Session Chair: Abdul Samed Muntaka</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">A Systematic Review on the Supply Chain Challenges of Contraceptive Use in Africa</h5>
																		<p class="card-text">Desiree Chigbo (University of Nigeria Nsukka), Okorie Chinedu Justin, Ugochukwu Jane Eziwanne, Chukwuemeka Ubaka</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Supply Chain Management of Micro, Small and Medium Enterprises (MSMEs) in Africa: A Bibliometric Analysis</h5>
																		<p class="card-text">Mulugeta Wube (Wollo University, Ethiopia)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Integration of Environmental Considerations into Supplier Selection: Review of the Literature</h5>
																		<p class="card-text">Tonny Ograh (Takoradi Technical University)</p>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1209">									
													<h4 class="panel-title">
														<span>1:45 PM - 2:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1209" aria-expanded="true" aria-controls="schedule_accrodion_content_1209">
															Parallel Sessions: General Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1209" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1209">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Session Chair: Henry Ataburo</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Personality Traits and Driver's Behaviour of Selected Logistic Companies in Lagos State.</h5>
																		<p class="card-text">Ayobami Elegunde, SAKA, Rahmon Olawale, OKUNBANJO Olajide (All from Lagos State University)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Assessing Demand Management Practices in Gauteng Public Hospitals</h5>
																		<p class="card-text">Intaher Marcus Ambe (Jackson State University), David Selby, Jonathan Ellsworth</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Building a Persistence Supply Chain on Chemical Logistics for African Economy Improvement</h5>
																		<p class="card-text">Maurice Eyo (Supply Chain Management, Nigeria), Ejem A. Ejem</p>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1211">									
													<h4 class="panel-title">
														<span>3:00 PM - 4:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1211" aria-expanded="true" aria-controls="schedule_accrodion_content_1211">
															Parallel Sessions: General Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1211" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1211">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Session Chair: Matilda Kokui Owusu-Bio</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Humanitarian Operations and Disaster Management in Africa: Challenges, Strategies and Impact</h5>
																		<p class="card-text">James Mutua (RedCraft Logistics)</p>
																		</div>
																	</div>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">How Should Firms Approach Competition to Develop and Benefit Financially from Responsiveness? Evidence from Logistics Firms in Ghana</h5>
																		<p class="card-text">Getrude Ampong (KNUST), Dominic Essuman (University of Sheffield), Emmanuel Kwabena Anin (Kumasi Technical University)</p>
																		</div>
																	</div>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Supply Network Characteristics as Contingencies Underlying the Relationship between Green Process Innovation and Financial Performance.</h5>
																		<p class="card-text">Prince Opoku (KNUST, Ghana)</p>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1213">									
													<h4 class="panel-title">
														<span>4:15PM - 5:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1213" aria-expanded="true" aria-controls="schedule_accrodion_content_1213">
															Parallel Session: General Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1213" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1213">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Session Chair: Dominic Essuman</strong></span>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Assessment of Implementation Status and Challenges of Pharmaceutical Reverse Logistics: the Case of Selected Public Hospitals in Addis Ababa, Ethiopia</h5>
																		<p class="card-text">Zerihun Eka (TBGH, Ethiopia)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Quantum Computing in Supply Chain: Revolutionising Management with Blockchain and Predictive Analytics</h5>
																		<p class="card-text">Swastik Anupam (Amity University Kolkata, India)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Logistics Management and Healthcare Facilities: Evidence From Selected Primary at the Grassroot</h5>
																		<p class="card-text">Victoria Hunga, Sunday Stephen Ajemunigbohun, Olufemi Jacob Fatile (All from Lagos State University)</p>
																		</div>
																	</div>


																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
									</div>	
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_2_venue4">
									<!-- Pearl schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion2" role="tablist" aria-multiselectable="true">
											

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1305">									
													<h4 class="panel-title">
														<span>10:15 AM - 11:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1305" aria-expanded="true" aria-controls="schedule_accrodion_content_1305">
															Parallel Sessions: Emerging Issues in Global Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1305" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1305">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	
																	<p>
																	<span  class="facilitator"><strong>Session Chair: Dominic Essuman</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Securing Wellbeing and Building Resilience: A Resource Configuration Approach for MSMEs</h5>
																		<p class="card-text">Elvis Abima, Ahmed Agyapong, Henry Mensah, Nathaniel Boso (All from KNUST), Dominic Essuman (University of Sheffield)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Unlocking Competitive Edge: AI Technology Procurement Dynamics and Firm Performance in the Kenyan Financial Services and Manufacturing Sectors.</h5>
																		<p class="card-text">Linda Ingari (Strathmore University, Kenya), Jonathan Annan (Strathmore University, Kenya), Choudrie Jyoti (University of Hertfordshire, United Kingdom)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Optimizing Health and Pharmaceutical Supply Chains in Africa: Challenges, Opportunities, and Evidence-Based Strategies</h5>
																		<p class="card-text">James Mutua (RedCraft Logistics)</p>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1307">									
													<h4 class="panel-title">
														<span>11:45 AM - 12:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1307" aria-expanded="true" aria-controls="schedule_accrodion_content_1307">
															Parallel Sessions: Emerging Issues in Global Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1307" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1307">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	
																	<p>
																	<span  class="facilitator"><strong>Session Chair: Evans Amoah</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">E-sourcing and Performance of Inventory Management of Fast-Moving Consumer Good (FCMG) Companies in Lagos State, Nigeria.</h5>
																		<p class="card-text">Rukayat Pelumi, Olateju O. I (All from Lagos State University, Nigeria)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Use Offtake Techniques to Support The Growth of Local Supply Chains, Foster Technology Transfer, Create Jobs and Add Value Within the Borders of African Countries.</h5>
																		<p class="card-text">Christian Sylvain (Judian Int. Consultancy Ltd. Kenya)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Inventory Management Practice, Performance and Challenges of Program Medicines in Hadiya Zone Primary Healthcare Facilities, Southern Ethiopia</h5>
																		<p class="card-text">Mengistu Tirore (Wachemo University), Teferi Gedef, Alemayehu Adinew</p>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1309">									
													<h4 class="panel-title">
														<span>1:45 PM - 2:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1309" aria-expanded="true" aria-controls="schedule_accrodion_content_1309">
															Parallel Sessions: Emerging Issues in Global Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1309" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1309">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	
																	<p>
																	<span   class="facilitator"><strong>Session Chair: Darlington Adanfo</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Fairness-Aware Scoring System and its Application in the Diagnosis of Sepsis</h5>
																		<p class="card-text">Yi Yang, Xiangyu Chang (Xi'An Jiaotong University), Mei Li (University of Oklahoma), Yong Tan (University of Washington)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">The Role of Consumer in Enforcement of Regulations in Private Security Industry: Case of Banks and Financial Institutions in Tanzania</h5>
																		<p class="card-text">Eric Sambu (University of Dar es Salaam, Tanzania)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Linking Social Support, Service Experience and Procedural Convenience to Customer Satisfaction: the Stimulus-Organism-Response Perspective.</h5>
																		<p class="card-text">Darlington Adanfo (Ghana Tertiary Education Commission), Emmanuel Kwabena Anin (KTU, CARISCA), Henry Ataburo (KNUST, CARISCA)</p>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1311">									
													<h4 class="panel-title">
														<span>3:00 PM - 4:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1311" aria-expanded="true" aria-controls="schedule_accrodion_content_1311">
															Parallel Sessions: Emerging Issues in Global Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1311" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1311">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">																	
																	<p>
																	<span  class="facilitator"><strong>Session Chair: Henry Kofi Mensah</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">The Supply Chain Adjustment Cycle:</h5>
																		<h6 class="card-subtitle mb-2 text-muted">Evolving from Responsiveness to Resilience through Learning</h6>
																		<p class="card-text">Robert Richey (Auburn University, USA), Anthony S. Roath, Tyler Roy Morgan, Colin B. Gabler (All from Auburn University)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Africa's Supply Chain Renaissance: Tech-Driven Resilience for Economic Transformation</h5>
																		<p class="card-text">Jim Mwanda (Janem Limited, Kenya)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">The Circular Economy Transition in Ghana – Practices and Challenges of Smes Across Various Industries and Enablers for a Transition</h5>
																		<p class="card-text">Leonie Bartneck, Mahdi Alazzeh (All from Technische Universität Berlin, Germany), Henry Kofi Mensah (KNUST, Ghana)</p>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1313">									
													<h4 class="panel-title">
														<span>4:15PM - 5:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1313" aria-expanded="true" aria-controls="schedule_accrodion_content_1313">
															Parallel Session: Emerging Issues in Global Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1313" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1313">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">																	
																	<p>
																	<span  class="facilitator"><strongs>Session Chair: Benjamin Agyei-Owusu</strongs></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Big Data Analytics Capabilities and Humanitarian Supply Chain Resilience: The Mediating Role of Inter-Organisational Coordination Capabilities</h5>
																		<p class="card-text">Wilbroad Aryatwijuka (Mbarara University of Science and Technology), Henry Mutebi</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Angle Mark a Device Used to Open Airway of a Neonate Born Immediately with Difficult in Breathing (Birth Asphyxia)</h5>
																		<p class="card-text">Emmanuel Mushi (New Born Thermal Control Company, Tanzania)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Supply Chain Management and E-Healthcare Records: Resilience in Policy Implementation for Sustainable Development in Lagos State, Nigeria</h5>
																		<p class="card-text">Busayo Ibikunle, Hunga Victoria Opeyemi (All from Lagos State University, Nigeria)</p>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
									</div>	
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_2_venue5">
									<!-- Pearl schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion2" role="tablist" aria-multiselectable="true">
											
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1405">									
													<h4 class="panel-title">
														<span>10:15 AM - 11:15 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1405" aria-expanded="true" aria-controls="schedule_accrodion_content_1405">
															Parallel Sessions: Africa Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1405" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1405">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	
																	<p>
																	<span class="facilitator"><strong>Session Chair: Enoch Bulley</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">A Study Of Factors That Influence Pedestrian Rate Of Accidents in Lagos-Abeokuta Expressway, Lagos, Nigeria</h5>
																		<p class="card-text">Joel Asaju, Liman Alim, Jeariogbe Samsudeen Olaniyi, Ajimatanrareje Victor (All from Lagos State University)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Occupational Safety Management and its Effect on Water Transportation: Evidence from Lagos State Waterways Authority.</h5>
																		<p class="card-text">Olayinka Sholesi, (Lagos State University)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Investigating the Role of Stakeholder Pressure and Collaborative Partnerships in Driving ESCM Adoption for Enhanced Environmental and Operational Performance in the Ghanaian Pharmaceutical Industry.</h5>
																		<p class="card-text">Gifty Kumadey (Durban University of Technology, South Africa. Takoradi Technical University), David Odikro, Esther Nandara (GIMPA)</p>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>


											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1407">									
													<h4 class="panel-title">
														<span>11:45 AM - 12:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1407" aria-expanded="true" aria-controls="schedule_accrodion_content_1407">
															Parallel Sessions: Africa Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1407" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1407">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	
																	<p>
																	<span class="facilitator"><strong>Session Chair: Emmanuel Boakye-Yiadom</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Assessment of Framework Contracting Implementation and Financial Sustainability within Ghana's Public Health Commodity Supply Chain</h5>
																		<p class="card-text">Emmanuel Boakye-Yiadom, Innocent Igbegbunam, Daniel Owusu-Afranie (All from GHSC-PSM), Edward Agyekum (Ministry of Health, Ghana)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Retail Resilience Through Technology, Data and Smart Outcomes</h5>
																		<p class="card-text">Jonathan Karanja (Frontier Consulting), Marion Wambui Ngumo (Frontier Consulting)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">The Role of Pooled Funding in Financing Nigeria's Family Planning Supply Chain</h5>
																		<p class="card-text">Joachim Chijide (UNFPA), Ummulkhulthum Bajoga (UNFPA), Amaka Anene (UNFPA)</p>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>											

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1409">									
													<h4 class="panel-title">
														<span>1:45 PM - 2:45 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1409" aria-expanded="true" aria-controls="schedule_accrodion_content_1409">
															Parallel Sessions: Africa Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1409" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1409">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	
																	<p>
																	<span class="facilitator"><strong>Session Chair: Isaac Apike</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Evaluating Suitable Marine Transportation Vessel Options for the Efficient Distribution of Relief Materials to the Damare IDP Camp in Northeast Nigeria</h5>
																		<p class="card-text">Ejem Ejem (Federal University of Technology Owerri), Joshua N. Osuji (Delta State University), Timothy S. Aikor (Federal University of Technology)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Implementation of Policy on Family Planning Supply Chain Financing</h5>
																		<p class="card-text">Ummulkhulthum Bajoga (UNFPA, Nigeria) Joachim Chijide, Ms Amaka Anene (UNFPA, Nigeria)</p>
																		</div>
																	</div>

																	<div class="card mb-3">
																		<div class="card-body">
																		<h5 class="card-title">Supply Chain Finance and Agri-Food Product Quality Performance. the Roles of Cold Chain Logistics Capability and Supply Chain Visibility</h5>
																		<p class="card-text">Abdul Muntaka, Isaac Akurugu Apike, David Antwi (All from KNUST), Ogochukwu Ugboma</p>
																		</div>
																	</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											
											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1411">									
													<h4 class="panel-title">
														<span>3:00 PM - 4:00 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1411" aria-expanded="true" aria-controls="schedule_accrodion_content_1411">
															Parallel Sessions: Africa Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1411" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1411">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	
																	<p>
																	<span class="facilitator"><strong>Session Chair: Adetoyese Oguntimehin</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																			<h5 class="card-title">Enhancing Firms' Operational Resilience: Roles and Boundary Conditions of Training Types</h5>
																			<p class="card-text">Dominic Essuman (The University of Sheffield), James Aditchere, Henry Kofi Mensah (All from KNUST), Emmanuel Kwabena Anin (Kumasi Technical University, Ghana)</p>
																		</div>
																		</div>

																		<div class="card mb-3">
																		<div class="card-body">
																			<h5 class="card-title">Leveraging Big Data Analytics Capability to Achieve Healthcare Supply Chain Resilience: Does Organizational Ambidexterity Really Matter?</h5>
																			<p class="card-text">Enoch Bulley (KNUST), Francis Kofi Andoh-Baidoo (The University of Texas Rio Grande Valley), David Asamoah, Kwame Owusu Kwateng, John Serbe Marfo (All from KNUST)</p>
																		</div>
																		</div>

																		<div class="card mb-3">
																		<div class="card-body">
																			<h5 class="card-title">Supply Chain Resilience and Sustainable Economic Recovery in Nigeria</h5>
																			<p class="card-text">Ibraheem ABDUL-AZEEZ (Lagos State University) Christy Bisiriyu, Adetoyese Oguntimehin Charles Asenime</p>
																		</div>
																		</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											

											<div class="panel panel-default intro">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1413">									
													<h4 class="panel-title">
														<span>4:15PM - 5:15 PM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_1413" aria-expanded="true" aria-controls="schedule_accrodion_content_1413">
															Parallel Session: Africa Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_1413" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1413">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	
																	<p>
																	<span class="facilitator"><strong>Session Chair: Enoch Bulley</strong></span>
																	<div class="card mb-3">
																		<div class="card-body">
																			<h5 class="card-title">Strengthening Resilience of Africa's Food Supply Chain for Food Systems Transformation</h5>
																			<p class="card-text">Jeremiah Rogito (Food Systems and Land Use Coalition, Kenya)</p>
																		</div>
																		</div>

																		<div class="card mb-3">
																		<div class="card-body">
																			<h5 class="card-title">Social-Ecological Value Creation under the Ascendancy of Current Digital Technologies</h5>
																			<p class="card-text">Samar Al-Kindy (Strathmore University, Kenya)</p>
																		</div>
																		</div>

																		<div class="card mb-3">
																		<div class="card-body">
																			<h5 class="card-title">Big Data, Quick Insights: Rapid Review of Data-Driven Employee Safety Innovations in African Supply Chains</h5>
																			<p class="card-text">Rasheed Azeez, Victor Adebiyi Ajimatanrareje (All from Lagos State University, Nigeria)</p>
																		</div>
																		</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>

											
									</div>	
								</div>
							</div>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="schedule_3">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#schedule_3_venue1" aria-controls="schedule_3_venue1" role="tab" data-toggle="tab">All Halls</a>
								</li>
								<li role="presentation">
									<a href="#schedule_3_venue2" aria-controls="schedule_3_venue2" role="tab" data-toggle="tab">Adlon</a>
								</li>
								<li role="presentation">
									<a href="#schedule_3_venue3" aria-controls="schedule_3_venue3" role="tab" data-toggle="tab">Baltschug</a>
								</li>
								<li role="presentation">
									<a href="#schedule_3_venue4" aria-controls="schedule_3_venue4" role="tab" data-toggle="tab">Pearl</a>
								</li>
								<li role="presentation">
									<a href="#schedule_3_venue5" aria-controls="schedule_3_venue5" role="tab" data-toggle="tab">Stafford</a>
								</li>
							</ul>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="schedule_3_venue1">
									<!-- All Halls schedule content for this day -->		
									<div class="panel-group schedule-accordion" id="accordion3" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_201">
												<h4 class="panel-title">
													<span>8:00 AM - 9:00 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_201" aria-expanded="false" aria-controls="schedule_accrodion_content_201">
														Registration and Coffee
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default intro">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_202">									
												<h4 class="panel-title">
													<span>9:00 AM - 10:00 AM</span>
													<a  role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_202" aria-expanded="true" aria-controls="schedule_accrodion_content_202">
														Keynote
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_202" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_202">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/glenn-1.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Glenn Richey, Co-Editor-in-Chief of the Journal of Business Logistics, Harbert Eminent Scholar in SCM  at Auburn University 
																<span>Responsiveness, Organizational Learning and AI: The Future of Supply Chain Strategy</span></h3>
														</div>
													</div>
											</div>
										</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_203">
												<h4 class="panel-title">
													<span>10:00 AM - 10:15 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_203" aria-expanded="false" aria-controls="schedule_accrodion_content_203">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_204">
												<h4 class="panel-title">
													<span>10:15 AM - 11:30 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_204" aria-expanded="false" aria-controls="schedule_accrodion_content_204">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_204" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_204">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Africa Supply Network Research Accelerator (ASN-RA)</strong></span>
																<span>Session Chair: Benjamin Agyei-Owusu</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																<span>Session Chair: Jacob Kuutuome</span>
																</p>
																<p>
																<span class="facilitator"><strong>Pearl: General Supply Chains.</strong></span>
																<span>Session Chair: Abiola Fagbenro</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																<span>Session Chair: Listowel Appiah</span>
																</p>
															</div>
															</div>
														</div>	
												
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_205">
												<h4 class="panel-title">
													<span>11:30 AM - 11:45 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_205" aria-expanded="false" aria-controls="schedule_accrodion_content_205">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_206">
												<h4 class="panel-title">
													<span>11:45 AM - 12:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_206" aria-expanded="false" aria-controls="schedule_accrodion_content_206">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_206" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_206">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Africa Supply Network Research Accelerator (ASN-RA)</strong></span>
																<span>Session Chair: Ishmael Acquah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																<span>Session Chair: Leticia Antwi</span>
																</p>
																<p>
																<span class="facilitator"><strong>Pearl: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Okyere Anim Barima</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: General Supply Chains.</strong></span>
																<span>Session Chair: David Asamoah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_207">
												<h4 class="panel-title">
													<span>12:45 PM - 1:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_207" aria-expanded="false" aria-controls="schedule_accrodion_content_207">
														Lunch
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_208">
												<h4 class="panel-title">
													<span>1:45 PM - 2:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_208" aria-expanded="false" aria-controls="schedule_accrodion_content_208">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_208" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_208">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: The Logistics Managers Index Session </strong></span>
																<span>Session Chair: Abdul Samed Muntaka</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																<span>Session Chair: Listowel Appiah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Pearl: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Benjamin Agyei-Owusu</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																<span>Session Chair: David Asamoah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_209">
												<h4 class="panel-title">
													<span>2:45 PM - 3:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_209" aria-expanded="false" aria-controls="schedule_accrodion_content_209">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_210">
												<h4 class="panel-title">
													<span>3:00 PM - 4:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_210" aria-expanded="false" aria-controls="schedule_accrodion_content_210">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_210" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_210">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Sectoral Supply Chains. </strong></span>
																<span>Session Chair: Priscilla Mante</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: General Supply Chains.</strong></span>
																<span>Session Chair: Pasty Asamamoah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Pearl: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: Listowel Owusu Appiah</span>
																</p>
																<p>
																<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																<span>Session Chair: Emmanuel Quansah</span>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_211">
												<h4 class="panel-title">
													<span>4:00 PM - 4:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_211" aria-expanded="false" aria-controls="schedule_accrodion_content_211">
														15-minute changeover
													</a>
												</h4>
											</div>
											
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_212">
												<h4 class="panel-title">
													<span>4:15 PM - 5:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_212" aria-expanded="false" aria-controls="schedule_accrodion_content_212">
														Parallel Sessions
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_212" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_212">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Adlon: Panel Session: Publishing in Top Journals in Operations and Supply Chain Management </strong></span>
																<span>Moderator: Professor Adegoke Oke</span>
																</p>
																<p>
																<span class="facilitator"><strong>Baltschug: Emerging Issues in Global Supply Chains.</strong></span>
																<span>Session Chair: David Antwi</span>
																</p>
																<p>
																<span class="facilitator"><strong>Pearl: Africa Supply Chains.</strong></span>
																<span>Session Chair: Bonaventure Dery</span>
																</p>
																
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_213">
												<h4 class="panel-title">
													<span>6:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_213" aria-expanded="false" aria-controls="schedule_accrodion_content_213">
														Conference Dinner
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_213" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_213">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/atoampem.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Atoapem Frimpong Barimah, Senior Manager, Supply Chain Operations, Newmont
																<span>Has Transformation Ever Been Achieved Without Supply Chain?</span></h3>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>	
								<div role="tabpanel" class="tab-pane fade" id="schedule_3_venue2">
									<!-- Adlon schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion3" role="tablist" aria-multiselectable="true">
										
										<div class="panel panel-default intro">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2102">									
												<h4 class="panel-title">
													<span>9:00 AM - 10:00 AM</span>
													<a  role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2102" aria-expanded="true" aria-controls="schedule_accrodion_content_2102">
														Keynote
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2102" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2102">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/glenn-1.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Glenn Richey, Co-Editor-in-Chief of the Journal of Business Logistics, Harbert Eminent Scholar in SCM  at Auburn University 
																<span>Responsiveness, Organizational Learning and AI: The Future of Supply Chain Strategy</span></h3>
														</div>
													</div>
											</div>
										</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2104">
												<h4 class="panel-title">
													<span>10:15 AM - 11:30 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2104" aria-expanded="false" aria-controls="schedule_accrodion_content_2104">
														Parallel Sessions: Africa Supply Network Research Accelerator (ASN-RA)
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2104" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2104">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Benjamin Agyei-Owusu</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Supercharging Supply Chain Exchanges in Africa: Current State and Way Forward</h5>
																		<p class="card-text">Benjamin Agyei-Owusu (KNUST, Ghana), Joseph Onyango (University of Strathmore, Kenya), Barima Okyere Anim (KNUST, Ghana)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Re-interpreting Last Mile Delivery in the African Informal Markets</h5>
																		<p class="card-text">Priscilla Addo Asamany(KNUST), Mocke Kelvinne (University of Pretoria), Mogesa Motari Felix, (Strathmore University) Amankwaa Kumi Caleb (KNUST)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Scalability of Relationships in Construction Procurement in Sub-Saharan Africa</h5>
																		<p class="card-text">Busha Kitessa (Addis Ababa University), Usman Abbas (Kaduna State University, Nigeria), Esther Nandara (Ghana Institute of Management and Public Administration)</p>
																	</div>
																	</div>
																</p>
															</div>
															</div>
														</div>	
												
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2106">
												<h4 class="panel-title">
													<span>11:45 AM - 12:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2106" aria-expanded="false" aria-controls="schedule_accrodion_content_2106">
														Parallel Sessions: Africa Supply Network Research Accelerator (ASN-RA)
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2106" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2106">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Ishmael Acquah</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">From Resistance to Acceptance of SMEs Supplier Development Initiatives: An African Perspective</h5>
																		<p class="card-text">Mona Ali (German University in Cairo) Assilah Agigi (University of Pretoria), Alfred Sallwa (College of Business Education, Tanzania), Bonny Bagenda (Makerere University Business School, Uganda)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Antecedents of Family Financing and its Influence on Performance of Retail Pharmaceutical Firms in Sub-Saharan Africa</h5>
																		<p class="card-text">Mathew Kalubanga (Makerere University Business School), Mohammed Ali Sulaiman (Mzumbe University, Tanzania), Robert Kalema (Makerere University Business School)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Scalability of Relationships Among Supply Chain Actors in African Context: A Networking Theoretical Perspective</h5>
																		<p class="card-text">Henry Mutebi (Makerere University Business School), Ishmael Nanaba Acquah (KNUST), Mary Aming'a,(Strathmore University) Mavis Agbodza, Samuel S. Mayanja (Makerere University Business School)</p>
																	</div>
																	</div>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2108">
												<h4 class="panel-title">
													<span>1:45 PM - 2:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2108" aria-expanded="false" aria-controls="schedule_accrodion_content_2108">
														Parallel Sessions: The Logistics Managers Index Session
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2108" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2108">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Abdul Samed Muntaka</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Ghana Logistics Managers Index</h5>
																		<p class="card-text">Emmanuel Kweku Quansah (Southampton Solent University (Southampton, UK)), Nathaniel Boso, Abdul Samed Muntaka (All from CARISCA, KNUST)</p>
																	</div>
																	</div>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2110">
												<h4 class="panel-title">
													<span>3:00 PM - 4:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2110" aria-expanded="false" aria-controls="schedule_accrodion_content_2110">
														Parallel Sessions: Sectoral Supply Chains. 
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2110" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2110">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Priscilla Mante</strong></span>
																<div class="card mb-3">
																		<div class="card-body">
																			<h5 class="card-title">Enhancing Supply Chain Resilience for Economic Transformation: Perspectives on Agriculture and Commodities Supply in Africa</h5>
																			<p class="card-text">Hannah Karanja, (Prime News Agency)</p>
																		</div>
																		</div>

																		<div class="card mb-3">
																		<div class="card-body">
																			<h5 class="card-title">An Assessment of Traceability of Counterfeit Drugs in Ghana's Pharmaceutical Supply Chain</h5>
																			<p class="card-text">Priscilla Mante (KNUST), Richard Kwasi Boso (GIMPA), Nana Ofori Adomako, Isaac Apike (All from KNUST)</p>
																		</div>
																		</div>

																		<div class="card mb-3">
																		<div class="card-body">
																			<h5 class="card-title">The Value of the Fourth Party Logistics (4PL) in Humanitarian Health Commodities Supply Chains in Africa</h5>
																			<p class="card-text">Anthony Anammah, (MEBS Global LLC, Project Management Unit, Nigeria Global Fund Malaria), Timilehin Omole (International Association of Public Health Logisticians (IAPHL)), Jacob Kuutuome (KNUST),Osezefe Ehimen Solina (Centre for International Development & Research)</p>
																		</div>
																		</div>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2112">
												<h4 class="panel-title">
													<span>4:15 PM - 5:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2112" aria-expanded="false" aria-controls="schedule_accrodion_content_2112">
													Panel Session: Publishing in Top Journals in Operations and Supply Chain Management
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2112" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2112">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span>Moderator: Professor Adegoke Oke</span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Publishing in Top Journals in Operations and Supply Chain Management</h5>
																		<p class="card-text">Glenn Richey (Co-Editor-in-Chief of the Journal of Business Logistics (JBL)), Steven Carnovale - (Co-Editor-in-Chief of the Journal of Purchasing and Supply Management (JPSM)), Wendy Tate (Co-Editor-in-Chief of the Journal of Supply Chain Management (JSCM))</p>
																	</div>
																	</div>
																</p>
																
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2113">
												<h4 class="panel-title">
													<span>6:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2113" aria-expanded="false" aria-controls="schedule_accrodion_content_2113">
														Conference Dinner
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2113" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2113">
												<div class="panel-body">
												<div class="author-box" style="margin-top: -11px !important;">
														<img src="images/photos/atoampem.jpg" alt="slider-thumb" width="74" height="74"/>
														<div class="author-content">
															<h3>Atoapem Frimpong Barimah, Senior Manager, Supply Chain Operations, Newmont
																<span>Has Transformation Ever Been Achieved Without Supply Chain?</span></h3>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>	
								<div role="tabpanel" class="tab-pane fade" id="schedule_3_venue3">
									<!-- Baltschug schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion3" role="tablist" aria-multiselectable="true">
										
										
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2204">
												<h4 class="panel-title">
													<span>10:15 AM - 11:30 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2204" aria-expanded="false" aria-controls="schedule_accrodion_content_2204">
														Parallel Sessions: Sectoral Supply Chains
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2204" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2204">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Jacob Kuutuome</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">An Investigation of Inventory Management Practices for Locally Manufactured, Non-Cold-Chain Products in Nigeria's Pharmaceutical Industry</h5>
																		<p class="card-text">Emmanuel Ogah (Lagos Business School)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">An Investigation into Causes, Consequences and Remedies of Poor Asset Management Practices in the Context of the Oil and Gas Sector in Developing Countries.</h5>
																		<p class="card-text">Robert Oloyede (Lagos Business School)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Optimizing Low-demand Pharmaceutical Packaging: Evaluating the Impact of Smaller Pack Size on Wastage of Sulfadoxine/PyrimethaMine 25/500mg Oral Tablets at Public Health Facilities in Uganda</h5>
																		<p class="card-text">Joel Miti, Henry Oundo, Shamim Nakade, Denis Okidi, Henry Komakech, Martin Oteba (All from USAID/SSCS, Kampala Uganda), Martha Ajulong, Jane Nabakooza, Myers Lugemwa (All from Ministry of Health, Uganda), Sunday Izidoro, Bernard Nsubuga (All from National Medical Stores Entebbe, Uganda), Jimmy Opigo (Ministry of Health,Kampala Uganda), Eric Lugada (USAID/SSCS)</p>
																	</div>
																	</div>
																</p>
															</div>
															</div>
														</div>	
												
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2206">
												<h4 class="panel-title">
													<span>11:45 AM - 12:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2206" aria-expanded="false" aria-controls="schedule_accrodion_content_2206">
														Parallel Sessions: Sectoral Supply Chains
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2206" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2206">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Leticia Antwi</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">New Technologies Integration In Health Supply Chain Systems: The Use of Pharmaceutical Traceability Technologies in Rwanda to Improve the Product Quality and Safety</h5>
																		<p class="card-text">Nyirimanzi Joseph Desire (Rwanda Medical Supply) Evariste Ndaribumbye (Global Health Supply Chain- Procurement and Supply Management Kigali, Rwanda) Gaston Kazeneza, Ephrem Mfizi (All from Rwanda Medical Supply), Birikunzira Shabani Jean Bapriste Munyangaju and Josée Edouard (All from Rwanda Food and Drugs Board)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Network Embeddedness and Operational Performance: A Configuration Approach</h5>
																		<p class="card-text">Priscilla Agyemang, Fred Nimoh, James Osei Mensah (All from KNUST), Richard Kwasi Bannor (UENR)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Optimizing Healthcare Supply Chains in Ghana through Big Data Analytics: Lessons from the Covid-19 Pandemic</h5>
																		<p class="card-text">Emmanuel Owusu (KNUST, Ghana), Doreen Adu (Arizona State University, USA)</p>
																	</div>
																	</div>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2208">
												<h4 class="panel-title">
													<span>1:45 PM - 2:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2208" aria-expanded="false" aria-controls="schedule_accrodion_content_2208">
														Parallel Sessions: General Supply Chains
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2208" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2208">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Listowel Appiah</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">The Challenges and Opportunities of Sustainable Supply Chain Management in Sub-Saharan Africa</h5>
																		<p class="card-text">Yusuf Lawal (Lagos State University), Tiamiyu, Riyanat Olasumbo, Saka Rahmon Olawale, Sanwo-Olu, Jermaine Ayotunde</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Enhancing Sustainable Supply Chains in Africa through Value Chain Reporting for Climate Action</h5>
																		<p class="card-text">Sundus Al Nahari (American University of Cairo), Mumbi Maria Wachira (Strathmore University), Sherwat Elwan Ibrahim (American University of Cairo)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Fashioning A Sustainable Future: Quantifying the Triple Bottom Line Benefits Of Circularity in the Nigerian Fashion Supply Chains.</h5>
																		<p class="card-text">Jonathan Ikeolumba (Lagos Business School)</p>
																	</div>
																	</div>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2210">
												<h4 class="panel-title">
													<span>3:00 PM - 4:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2210" aria-expanded="false" aria-controls="schedule_accrodion_content_2210">
														Parallel Sessions: General Supply Chains
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2210" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2210">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Pasty Asamamoah</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Assessing the Digitalization Barriers within African Cold Chains for Resilience and Food Security Enhancement: A TISM Approach</h5>
																		<p class="card-text">Kavitha Gurrala, Dr. Oyenuga Michael (All from Woxsen University)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">An Empirical Assessment of the Determinants of Digital Cash-Based Assistance Adoption in a Humanitarian Supply Chain Context</h5>
																		<p class="card-text">Sheila Namagembe (Makerere University Business School), Ntayi Joseph, Mugizi Sylvia</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">The Role Of Emerging Technology in Enhancing the Supply Chain Performance Of Relief Agencies in Kenya</h5>
																		<p class="card-text">Michael Karanja (Strathmore University)</p>
																	</div>
																	</div>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2212">
												<h4 class="panel-title">
													<span>4:15 PM - 5:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2212" aria-expanded="false" aria-controls="schedule_accrodion_content_2212">
														Parallel Sessions: Emerging Issues in Global Supply Chains.
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2212" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2212">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: David Antwi</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Cultivating Prosperity: Exploring the Dynamics of Agriculture and Commodities Supply Chain in Africa.</h5>
																		<p class="card-text">Maximilla Wafula (Alliance for Green Africa, Kenya)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Operational Capability, Cold Transport Performance, Supply Chain Visibility and Food Loss: A Moderated Mediation Analysis</h5>
																		<p class="card-text">David Antwi, Robert Aidoo, Isaac Akurugu Apike, Leticia Adwoa Anima Antwi, Priscilla Agyemang, Abdul Samed Muntaka (All from KNUST, Ghana)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Analysis of Pharmaceutical Inventory Management Based on ABC-VEN Analysis in Rwanda: a Case Study of Nyamagabe District</h5>
																		<p class="card-text">Ephrem Mfizi (Rwanda Medical Supply Ltd), François Niragire,Thomas Bizimana, Françoise Mukanyangezi (University of Rwanda)</p>
																	</div>
																	</div>
																</p>
																
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_3_venue4">
									<!-- Pearl schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion3" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2304">
												<h4 class="panel-title">
													<span>10:15 AM - 11:30 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2304" aria-expanded="false" aria-controls="schedule_accrodion_content_2304">
														Parallel Sessions: General Supply Chains
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2304" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2304">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<span class="facilitator"><strong>Session Chair: David Asamoah</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">An Examination of the Inherent Challenges in Supply Chain Systems in the Ghanaian Agricultural Sector: The Role of Stakeholders and Policymakers in Providing Sustainable Solutions</h5>
																		<p class="card-text">Kwadwo Nyantakyi, Charles Agyei (All from GIMPA, Ghana), Frank Akwei</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Policy Implications on the Safety of Agro Food Distribution to Urban Centers</h5>
																		<p class="card-text">Abiola Fagbenro (Lagos State University), Giwa Olayiwola</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Quantifying the Impact of Traffic Congestion on Delivery Time and Costs for E-Commerce Businesses in Lagos</h5>
																		<p class="card-text">Temitope Okunola, Emmanuel Adeoye Oyeleke, Ibraheem Forson Abdul-Azeez (All from Lagos State University)</p>
																	</div>
																	</div>
																</p>
															</div>
															</div>
														</div>	
												
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2306">
												<h4 class="panel-title">
													<span>11:45 AM - 12:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2306" aria-expanded="false" aria-controls="schedule_accrodion_content_2306">
														Parallel Sessions: Emerging Issues in Global Supply Chains.
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2306" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2306">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Okyere Anim Barima</strong></span>

																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Prospects of Access-Based Consumption in Developing Economies</h5>
																		<p class="card-text">Alex Boateng (Regional Maritime University, Ghana), Dominic Essuman (The University of Sheffield, UK), Dacosta Essel (Dalian Maritime University, China)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Orchestrating Entrepreneurial and Institutional Resources to Enhance Operational Performance in Weak Institutional Environments.</h5>
																		<p class="card-text">Okyere Anim Barima (KNUST, Ghana)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Data Led Procurement Management and Performance of Banks in Kenya</h5>
																		<p class="card-text">Stephen Mutiso (KCA University, Kenya)</p>
																	</div>
																	</div>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2308">
												<h4 class="panel-title">
													<span>1:45 PM - 2:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2308" aria-expanded="false" aria-controls="schedule_accrodion_content_2308">
														Parallel Sessions: Emerging Issues in Global Supply Chains.
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2308" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2308">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Benjamin Agyei-Owusu</strong></span>
																
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">The Moderating Role of Institutional Support and Relationship Quality on the International Alliance Learning Process and International Partner Investment</h5>
																		<p class="card-text">Mawuli Amedofu, Nathaniel Boso, Eric Fosu Oteng-Abayie, Abdul Samed Muntaka, Dorcas Nuertey (All from KNUST)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Supply Network Complexity, Eco-Innovation, Absorptive Capacity, Informal Network Governance Mechanisms.</h5>
																		<p class="card-text">Daniel Zokpe, Nathaniel Boso, Emmanuel Kweku Quansah (All from KNUST, Ghana)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Towards A Framework for Classifying Different Types of Digital Transformation: A Design Science Approach</h5>
																		<p class="card-text">Benjamin Agyei-Owusu (KNUST, Ghana), Francis Kofi Andoh-Baidoo (UT Rio Grande Valley, USA), David Asamoah, Emmanuel Quansah, Osei Eric Opoku (All from KNUST, Ghana)</p>
																	</div>
																	</div>


																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2310">
												<h4 class="panel-title">
													<span>3:00 PM - 4:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2310" aria-expanded="false" aria-controls="schedule_accrodion_content_2310">
														Parallel Sessions: Emerging Issues in Global Supply Chains.
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2310" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2310">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Listowel Owusu Appiah</strong></span>
																<div class="card mb-3">
																<div class="card-body">
																	<h5 class="card-title">Green Entrepreneurial Orientation and Firm Performance: Do Green Purchasing and Supply Chain Integration Matter?</h5>
																	<p class="card-text">Emmanuel Kwabena Anin (Kumasi Technical University), Henry Ataburo (KNUST), Daniel Etse (Kumasi Technical University), Darlington Bright Yao Adanfo (Ghana Tertiary Education Commission)</p>
																</div>
																</div>

																<div class="card mb-3">
																<div class="card-body">
																	<h5 class="card-title">Green Supply Chain Management in Africa</h5>
																	<p class="card-text">Henry Ataburo, Listowel Owusu Appiah (All from KNUST, Ghana)</p>
																</div>
																</div>

																<div class="card mb-3">
																<div class="card-body">
																	<h5 class="card-title">The Effect of Sustainable Supply Chain Management Practices on Manufacturing Companies' Performance in Ethiopia</h5>
																	<p class="card-text">Ephrem Negash Shebeshe (Bahir Dar University, Ethiopia), Dhiraj Sharma</p>
																</div>
																</div>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2312">
												<h4 class="panel-title">
													<span>4:15 PM - 5:15 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2312" aria-expanded="false" aria-controls="schedule_accrodion_content_2312">
														Parallel Sessions: Africa Supply Chains.
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2312" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2312">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Bonaventure Dery</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Navigating Uncertainties: Crafting Resilient Supply Chains for Economic Transformation in Kenya</h5>
																		<p class="card-text">Deflah Komen (Diamond Engineering LTD)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">The Role of Freight Volume on Sustainable Performance: Mediation – Mediation Analysis of Transport Efficiency and Green Innovation</h5>
																		<p class="card-text">Bonaventure Dery, Abdul Samad Muntaka (All from KNUST)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Enhancing Supply Chain Resilience in Africa's Economic Transformation Journey</h5>
																		<p class="card-text">Jennifer Tandoh (University of Cape Coast), Vincent Ackah (Ackah Baidoo Group of Companies), Emmanuel Quayson (UCC)</p>
																	</div>
																	</div>
																
																</p>
																
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>										
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_3_venue5">
									<!-- Pearl schedule content for this day -->
									<div class="panel-group schedule-accordion" id="accordion3" role="tablist" aria-multiselectable="true">
										
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2404">
												<h4 class="panel-title">
													<span>10:15 AM - 11:30 AM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2404" aria-expanded="false" aria-controls="schedule_accrodion_content_2404">
														Parallel Sessions: Africa Supply Chains
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2404" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2404">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Listowel Appiah</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Supply Chain Diversification and Supply Chain Performance of Food and Beverages Firms in Disruptive Environment, Kenya: Intervening Role of Supply Chain Resilience</h5>
																		<p class="card-text">Peter Mwangi (University of Embu)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Advancing Supply Chain Resilience: Innovations and Strategies for Sustainable Development</h5>
																		<p class="card-text">Edward Kusewa (St. Paul's University), Jim Muyoti</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">The Resilience of Nigerian Manufacturing Companies to the Current Devaluation of the Naira Currency</h5>
																		<p class="card-text">Ike Ehie (Kansas State University), Francis Ojadi (Lagos Business School), Yahaya Yusuf (Lancashire School of Business, University of Central Lancashire)</p>
																	</div>
																	</div>
																</p>
															</div>
															</div>
														</div>	
												
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2406">
												<h4 class="panel-title">
													<span>11:45 AM - 12:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2406" aria-expanded="false" aria-controls="schedule_accrodion_content_2406">
														Parallel Sessions: General Supply Chains
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2406" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2406">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: David Asamoah</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Public Procurement Audit and Performance of State Corporations in Kenya</h5>
																		<p class="card-text">Zurah Mohammed (Moi University), Stephen Mutiso (CPSP(K), Kenya College of Accountancy University), Charles Lagat (Moi University)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Effects of Information Communication Technology (ICT) on Freight Logistics in Lagos State: A Case Study of God is Good Logistics Technology Limited</h5>
																		<p class="card-text">Joel Asaju, Liasu Temiloluwa Ezekiel, Liman Alim, Ajimatanrareje Adebiyi Victor, (All from Lagos State University)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">How and When Does Buyer-Supplier Relationship Management Minimize Supply Disruption? Moderated and Mediation Analysis of Digital Innovation Capabilities and Supplier Performance.</h5>
																		<p class="card-text">Ishmael Acquah, David Asamoah, Caleb Amankwaa (All from KNUST) Isaac Mensah (University of Education)</p>
																	</div>
																	</div>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2408">
												<h4 class="panel-title">
													<span>1:45 PM - 2:45 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2408" aria-expanded="false" aria-controls="schedule_accrodion_content_2408">
														Parallel Sessions: Africa Supply Chains
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2408" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2408">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: David Asamoah</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Using Interfirm Governance Mechanisms to Drive Supplier Responsiveness: The Role of Information Sharing and Firm's Collaboration with Suppliers</h5>
																		<p class="card-text">Desmond Osei, David Asamoah (All from KNUST), Francis Kofi Andoh-Baidoo (The University of Texas Rio Grande Valley), Jonathan Annan (Strathmore University)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Unveiling the Dynamics of Supply Chain Financing in Developing Economies: The Rise of Fintech and its Transformative Influence on Africa's Supply Chain.</h5>
																		<p class="card-text">Doreen Adu (ASU, USA), Emmanuel Owusu (KNUST, Ghana)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Digitizing Healthcare Supply Chains in Africa: A Human-Centered Design Approach to Improving Data Visibility and Sharing Across the Pharmaceutical Supply Chain System</h5>
																		<p class="card-text">Bosun Tijani (Co-creation Hub, Nigeria),Temi Filani, Adefemi Adewemimo, Stephanie Okpere, Steven Karera, Olatunji Oluyide, George-Bush Otieno (All from 2iHUB Kenya) Gabriel Saka (eLIMU Kenya)</p>
																	</div>
																	</div>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2410">
												<h4 class="panel-title">
													<span>3:00 PM - 4:00 PM</span>
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_2410" aria-expanded="false" aria-controls="schedule_accrodion_content_2410">
														Parallel Sessions: Africa Supply Chains
													<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
													</a>
												</h4>
											</div>
											<div id="schedule_accrodion_content_2410" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2410">
												<div class="panel-body">
												<div class="container mt-5">
														<div class="row">
															<div class="col-md-6">
																<p>
																<span class="facilitator"><strong>Session Chair: Emmanuel Quansah</strong></span>
																<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Impact of AI on Retail Supply chains in Developing Countries: Challenges and Mitigation Tactics</h5>
																		<p class="card-text">Marvel Ogah (Lagos Business School)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Deploying Analytics for Improved Supply Chain Robustness: A Sense, Seize, and Transform (Sst) View of Dynamic Capabilities</h5>
																		<p class="card-text">Caleb Kumi (KNUST), Francis Andoh Baidoo (University of Texas Rio Grande) David Asamoah, John Serbe Marfo, Emmanuel Quansah (All from KNUST)</p>
																	</div>
																	</div>

																	<div class="card mb-3">
																	<div class="card-body">
																		<h5 class="card-title">Optimizing Routine Vaccine Distribution to Last Mile Centers in Enugu State Nigeria Using a Modified Transportation Models</h5>
																		<p class="card-text">Chidalu Anyachebelu, Anene-Okeke Chigozie Gloria, Madu, Samuel Nzube, Ubaka, Chukwuemeka Michael (All from University of Nigeria Nsukka, Enugu State, Nigeria)</p>
																	</div>
																	</div>
																</p>
															</div>
															</div>
														</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="schedule_4">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#schedule_4_venue1" aria-controls="schedule_4_venue1" role="tab" data-toggle="tab">All Halls</a>
								</li>
								<li role="presentation">
									<a href="#schedule_4_venue2" aria-controls="schedule_4_venue2" role="tab" data-toggle="tab">Adlon</a>
								</li>
								<li role="presentation">
									<a href="#schedule_4_venue3" aria-controls="schedule_4_venue3" role="tab" data-toggle="tab">Baltschug</a>
								</li>
								<li role="presentation">
									<a href="#schedule_4_venue4" aria-controls="schedule_4_venue4" role="tab" data-toggle="tab">Pearl</a>
								</li>
								<li role="presentation">
									<a href="#schedule_4_venue5" aria-controls="schedule_4_venue5" role="tab" data-toggle="tab">Stafford</a>
								</li>
							</ul>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="schedule_4_venue1">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion4" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_301">
													<h4 class="panel-title">
														<span>8:00 AM - 9:00 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_301" aria-expanded="false" aria-controls="schedule_accrodion_content_301">
															Registration and Coffee
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_302">									
													<h4 class="panel-title">
														<span>9:00 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_302" aria-expanded="true" aria-controls="schedule_accrodion_content_302">
															Keynote
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_302" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_302">
													<div class="panel-body">
														
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/faith-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3> Faith Mashele, Faculty member, University of Pretoria Gordon Institute of Business Science (South Africa)
																	<span>Harmonise Policies, Leverage Heritage: How Can Africa Drive Resilient Supply Chains?</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_303">
													<h4 class="panel-title">
														<span>10:00 AM - 10:15 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_303" aria-expanded="false" aria-controls="schedule_accrodion_content_303">
															15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_304">
													<h4 class="panel-title">
														<span>10:15 AM - 11:30 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_304" aria-expanded="false" aria-controls="schedule_accrodion_content_304">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_304" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_304">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: General Supply Chains. </strong></span>
																	<span class="facilitator"><strong>Session Chair: Richard Boso</strong></span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span class="facilitator"><strong>Session Chair: Isaac Apike</strong></span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Pearl: Emerging Issues in Global Supply Chains.</strong></span>
																	<span class="facilitator"><strong>Session Chair: Caleb Kumi Amankwah</strong></span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																	<span class="facilitator"><strong>Session Chair: Abdulazeez Ibrahim Forson</strong></span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_305">
													<h4 class="panel-title">
														<span>11:30 AM - 12:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_305" aria-expanded="false" aria-controls="schedule_accrodion_content_305">
															Coffee Break
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_306">
													<h4 class="panel-title">
														<span>12:00 PM - 1:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_306" aria-expanded="false" aria-controls="schedule_accrodion_content_306">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_306" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_306">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Emerging Issues in Global Supply Chains.</strong></span>
																	<span class="facilitator"><strong>Session Chair: William Affloe</strong></span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span class="facilitator"><strong>Session Chair: Esther Nandara</strong></span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Pearl: General Supply Chains.</strong></span>
																	<span class="facilitator"><strong>Session Chair:Robert Aidoo</strong></span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																	<span class="facilitator"><strong>Session Chair: Emmanuel Anin</strong></span>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_307">
													<h4 class="panel-title">
														<span>1:00 PM - 1:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_307" aria-expanded="false" aria-controls="schedule_accrodion_content_307">
															15-minute changeover
														</a>
													</h4>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_308">
													<h4 class="panel-title">
														<span>1:15 PM - 2:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_308" aria-expanded="false" aria-controls="schedule_accrodion_content_308">
															Parallel Sessions
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_308" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_308">
													<div class="panel-body">
													<div class="container mt-5">
													<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Adlon: Emerging Issues in Global Supply Chains. </strong></span>
																	<span class="facilitator"><strong>Session Chair: Caleb Kumi</strong></span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Baltschug: Sectoral Supply Chains.</strong></span>
																	<span class="facilitator"><strong>Session Chair: Robert Aidoo</strong></span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Pearl: General Supply Chains.</strong></span>
																	<span class="facilitator"><strong>Session Chair:  Ibraheem Forson Abdul-Azeez</strong></span>
																	</p>
																	<p>
																	<span class="facilitator"><strong>Stafford: Africa Supply Chains.</strong></span>
																	<span class="facilitator"><strong>Session Chair: John Manso Frimpong </strong></span>
																	</p>
																</div>
																</div>
															</div>	
													
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_309">
													<h4 class="panel-title">
														<span>2:15 PM - 3:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_309" aria-expanded="false" aria-controls="schedule_accrodion_content_309">
															Lunch and Conference Close
														</a>
													</h4>
												</div>
												
											</div>
										</div>										
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_4_venue2">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion4" role="tablist" aria-multiselectable="true">
											
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3102">									
													<h4 class="panel-title">
														<span>9:00 AM - 10:00 AM</span>
														<a  role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3102" aria-expanded="true" aria-controls="schedule_accrodion_content_3102">
															Keynote
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3102" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3102">
													<div class="panel-body">
														
													<div class="author-box" style="margin-top: -11px !important;">
															<img src="images/photos/faith-1.jpg" alt="slider-thumb" width="74" height="74"/>
															<div class="author-content">
																<h3> Faith Mashele, Faculty member, University of Pretoria Gordon Institute of Business Science (South Africa)
																	<span>Harmonise Policies, Leverage Heritage: How Can Africa Drive Resilient Supply Chains?</span></h3>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3104">
													<h4 class="panel-title">
														<span>10:15 AM - 11:30 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3104" aria-expanded="false" aria-controls="schedule_accrodion_content_3104">
															Parallel Sessions: General Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3104" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3104">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>>Session Chair: Richard Boso</strong></span>
																	<div class="container">
																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Using Behavioral Nudges to Reduce Food Wastage in Ghana: Evidence from a Field Experiment</h5>
																			<p class="card-text">Mahyar Eftekhar (Arizona State University, USA), Xinming Liu, Karen Zheng (All from Massachusetts Institute of Technology), Richard Boso (CARISCA-KNUST)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">The Impact of Industry 4.0 Technologies in Supply Chain Management: Perspective of Developing Countries</h5>
																			<p class="card-text">Neo Rafifing, Ofaletse Mphale (All from University of Botswana), Joyce Mosinki (Southwest Jiaotong University), Ontiretse. G. Kebitseope (University of Bolton)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Conducting a Situational Analysis on the Implementation Status of Kenya National Pharmaceutical Policy 2012</h5>
																			<p class="card-text">Tom Menge, Tracy Njonjo, Eunice Gathitu, Stephen Njuguna, Kefa Bota, Nancy Njeru, Clara Namidi (All from Ministry of Health, Kenya), Susan Njogo (Africa Resource Center)</p>
																			</div>
																		</div>
																		</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3106">
													<h4 class="panel-title">
														<span>12:00 PM - 1:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3106" aria-expanded="false" aria-controls="schedule_accrodion_content_3106">
															Parallel Sessions: Global Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3106" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3106">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>>Session Chair: William Affloe</strong></span>
																	<div class="container">
																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Revisiting the Economic-Environmental Performance Conundrum: A New Perspective and a Three-Way Interaction Approach.</h5>
																			<p class="card-text">William Afloe (KNUST, Ghana), Dominic Essuman (University of Sheffield, UK)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Assessing the Viability of Renewable Energy Integration in African Supply Chains</h5>
																			<p class="card-text">Bukola Odediran (Sustainable Procurement, Environment and Social Standards Enhancment, Nigeria)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Emerging Technologies and Sustainability Issues: Assessing Lagos State Policy on Globalisation of Supply Chain Infrastructure.</h5>
																			<p class="card-text">Ibrahim Hassan, Fatile Jacob Olufemi (All from Lagos State University)</p>
																			</div>
																		</div>
																		</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3108">
													<h4 class="panel-title">
														<span>1:15 PM - 2:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3108" aria-expanded="false" aria-controls="schedule_accrodion_content_3108">
															Parallel Sessions: Emerging Issues in Global Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3108" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3108">
													<div class="panel-body">
													<div class="container mt-5">
													<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Session Chair: Caleb Kumi</strong></span>
																	<div class="container">
																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Comprehensive Analysis of Supply Chain Technology Adoption, Challenges, and Innovations in Africa</h5>
																			<p class="card-text">James Mutua (RedCraft Logistics)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Food Supply Chain, Financial Instrument, Goods in Transit Insurance, Logistics, Risk Management</h5>
																			<p class="card-text">Kehinde Abiodun (Lagos State Uninversity)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Integrating E-Procurement into Sustainable Production of Manufacturing SMEs in Rural Sub-Saharan Africa.</h5>
																			<p class="card-text">Nsikan John (Covenant University, Ota Nigeria), Ine Fubara Briggs (The Rivers State Bureau On Public Procurement- Port Harcourt, Nigeria)</p>
																			</div>
																		</div>
																		</div>
																	</p>
																</div>
																</div>
															</div>	
													
													</div>
												</div>
											</div>
											
										</div>										
																			
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_4_venue3">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion4" role="tablist" aria-multiselectable="true">
											
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3204">
													<h4 class="panel-title">
														<span>10:15 AM - 11:30 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3204" aria-expanded="false" aria-controls="schedule_accrodion_content_3204">
															Parallel Sessions: Sectoral Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3204" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3204">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Session Chair: Isaac Apike</strong></span>
																	<div class="container">
																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Achieving Operational Flexibility in Food Systems; The Roles of Financing Mechanisms and Operational Capability</h5>
																			<p class="card-text">Isaac Apike, David Antwi, Abdul Samed Muntaka, Kwame Mireku, Matilda Kokui Owusu-Bio (All from KNUST)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">From People to Plate: The Application of the Stakeholder Theory in the Case of Lesotho's Agricultural SMME's</h5>
																			<p class="card-text">Mathabo Kepa (Independent from Lesotho)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Aquaculture Insurance as a Financial Value Chain Addition to Sustaining Fish Farming in Lagos State, Nigeria</h5>
																			<p class="card-text">Sunday Stephen Ajemunigbohun (Lagos State University, Nigeria)</p>
																			</div>
																		</div>
																		</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3206">
													<h4 class="panel-title">
														<span>12:00 PM - 1:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3206" aria-expanded="false" aria-controls="schedule_accrodion_content_3206">
															Parallel Sessions: Sectoral Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3206" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3206">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Session Chair: Esther Nandara</strong></span>
																	<div class="container">
																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Agricultural Commodities Prices and the Cost of Living in Ethiopia</h5>
																			<p class="card-text">Tirngo Abeje (Bahir DAr University)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">The Effects of Supply Chain Integration on Public Hospital Efficiency: The Role of Organizational Learning</h5>
																			<p class="card-text">Esther Nandara (Ghana Institute of Management and Public Administration)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Analysing the strategy of Logistics Outsourcing and the Performance of Humanitarian organizations in the North East Nigeria</h5>
																			<p class="card-text">Solomon Lawrence(Nigerian Army University Biu Borno state) Yakeen Fatai, Godey Imade</p>
																			</div>
																		</div>
																		</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3208">
													<h4 class="panel-title">
														<span>1:15 PM - 2:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3208" aria-expanded="false" aria-controls="schedule_accrodion_content_3208">
															Parallel Sessions: Sectoral Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3208" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3208">
													<div class="panel-body">
													<div class="container mt-5">
													<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Chair: Robert Aidoo</strong></span>
																	<div class="container">
																			<div class="card mb-3">
																				<div class="card-body">
																				<h5 class="card-title">Building-Back-Better through Sustainable Supply Chain Finance (SSCF)</h5>
																				<p class="card-text">Jackson Wanjau, Ms Ann Maguta (All from Umma University)</p>
																				</div>
																			</div>

																			<div class="card mb-3">
																				<div class="card-body">
																				<h5 class="card-title">Reducing Food Losses in Ghana: The Role of Operational and Technological Capabilities of Supply Chain Actors.</h5>
																				<p class="card-text">Leticia Antwi, Robert Aidoo, Isaac Apike, Priscilla Agyemang, David Antwi, Fred Nimoh, Robert Clement Abaidoo, Camillus Wongnaa Abawiera (All from KNUST), Richard K. Bannor (University of Energy and Natural resources), Selorm Akaba (University of Cape Coast)</p>
																				</div>
																			</div>

																			<div class="card mb-3">
																				<div class="card-body">
																				<h5 class="card-title">Determinants of Pharmaceutical Product Track and Trace System Adoption in a Developing African Country</h5>
																				<p class="card-text">Yaa Bema Sarkodie Amankwah (KNUST), Dominic Essuman (Sheffield University Management School, UK)</p>
																				</div>
																			</div>
																			</div>
																	</p>
																</div>
																</div>
															</div>	
													
													</div>
												</div>
											</div>
										</div>										
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_4_venue4">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion4" role="tablist" aria-multiselectable="true">
											
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3304">
													<h4 class="panel-title">
														<span>10:15 AM - 11:30 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3304" aria-expanded="false" aria-controls="schedule_accrodion_content_3304">
															Parallel Sessions: Emerging Issues in Global Supply Chains.
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3304" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3304">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Session Chair: Caleb Kumi</strong></span>
																	<div class="container">
																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">The Effect of Supply Chain Management Practices on Sustainable Tourism Development: The Case of Star-rated Hotels in Addis Ababa, Ethiopia.</h5>
																			<p class="card-text">Yetaseb Feleke (Addis Ababa University, Ethiopia)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">African Supply Chain Resilience for Economic Transformation: Sustainability Issues in Health System Supply Chain in Nigeria</h5>
																			<p class="card-text">Andra Nwachukwu, Henrietta Bakura-Onyeneke, Atu Uzoma, Bashir Yusuf, Josephine Sule, Aishatu Babale, David Bello Obadofin, Magaji Godwin (All from National Product Supply Chain Management Programme (NPSCMP))</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">The Impact of Pathways to Sustainability and Sustainable Supply Chain Practices on Sustainability Performance of the Nigerian Oil and Gas Industry</h5>
																			<p class="card-text">Dahiru Dauda (Modibbo Adama University, Nigeria), Yahaya Y. Yusuf (University of Central Lancashire, Preston,UK), Ike Ehie (Kansas State University, Manhattan, USA), Ibrahim Danjuma ( American University of Nigeria)</p>
																			</div>
																		</div>
																		</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3306">
													<h4 class="panel-title">
														<span>12:00 PM - 1:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3306" aria-expanded="false" aria-controls="schedule_accrodion_content_3306">
															Parallel Sessions: General Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3306" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3306">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Session Chair: Robert Aidoo</strong></span>
																	<div class="container">
																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Exploring Driver – Passenger Relationship: A Generic Study of Lagos Yellow Bus Drivers in Nigeria</h5>
																			<p class="card-text">Grace Akinmolayan (Lagos State University)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">E-Procurement and Institutional Voids: The Effects of Innovation-Oriented Leadership and Employee Innovative Behaviour</h5>
																			<p class="card-text">Alexander Fianko Otchere, Daniel Etse, Meshac Awuah-Gyawu (All from Kumasi Technical University)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Food Safety Standards at the Processing Node of The Fish Supply Chain In Ghana: Awareness and Compliance Analysis.</h5>
																			<p class="card-text">Robert Aidoo, Opoku T. J., Tamakloe E.Y.R., Botwey Abigail, Owusu K. N., Tandoh Benjamin, Asamoah D.B., Owusu Asante B. Boakye Appiah G., Osei Mensah J. (All from KNUST)</p>
																			</div>
																		</div>
																		</div>
																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3308">
													<h4 class="panel-title">
														<span>1:15 PM - 2:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3308" aria-expanded="false" aria-controls="schedule_accrodion_content_3308">
															Parallel Sessions: General Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3308" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3308">
													<div class="panel-body">
													<div class="container mt-5">
													<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Pearl: General Supply Chains.</strong></span>
																	<span>Session Chair:  Ibraheem Forson Abdul-Azeez</span>
																	</p>

																	<div class="container">
																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Goods-in-Transit Insurance: Perceptions of Logistics Service Providers in Metropolitan Lagos, Nigeria</h5>
																			<p class="card-text">Bisola Awolode, Sunday Stephen Ajemunigbohun (All from Lagos State University)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">The Effect of Digitalization on Sustainable Development: The Mediating Role of Open Innovation in the Agri-food Industry with a Focus on the Food Processing Sector.</h5>
																			<p class="card-text">Shadrack Tabe (Freelance, Ghana)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Operational Challenges of Third-Party Logistics Companies in the Maritime Industry in Nigeria</h5>
																			<p class="card-text">Kenneth Ibiama (Federal Polytechnic Of Oil And Gas, Bonny)</p>
																			</div>
																		</div>
																		</div>
																</div>
																</div>
															</div>	
													
													</div>
												</div>
											</div>
										</div>										
								</div>
								<div role="tabpanel" class="tab-pane fade" id="schedule_4_venue5">
									<!-- All Halls schedule content for this day -->	
									<div class="panel-group schedule-accordion" id="accordion4" role="tablist" aria-multiselectable="true">
											
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3404">
													<h4 class="panel-title">
														<span>10:15 AM - 11:30 AM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3404" aria-expanded="false" aria-controls="schedule_accrodion_content_3404">
															Parallel Sessions: Africa Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3404" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3404">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>Session Chair: Abdulazeez Ibrahim Forson</strong></span>
																	<div class="container">
																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">When More is Better (Or Worse): Supply Chain Resilience, Environmental Munificence and Financial Performance.</h5>
																			<p class="card-text">Albert Okai (KNUST, Ghana)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Can a Strategic Risk Management Culture Manage Supply Chain Climate-Related Risk Disruptions?</h5>
																			<p class="card-text">Mary Aminga (Strathmore University) David Mathuva, Jonathan Annan</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">A Conceptual Framework for Cold Chain Logistics Resilience of the Importation and Distribution Network of Fish Products : Evidence From Lagos-Nigeria</h5>
																			<p class="card-text">Olaitan Oladipo (Lagos State University) Asenime Charles, Ogochukwu Ugboma ,Abdulazeez Ibrahim Forson, Fagbenro Abiola Ahmed, Ogazie Esther Chidinma</p>
																			</div>
																		</div>
																	</div>

																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3406">
													<h4 class="panel-title">
														<span>12:00 PM - 1:00 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3406" aria-expanded="false" aria-controls="schedule_accrodion_content_3406">
															Parallel Sessions: Africa Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3406" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3406">
													<div class="panel-body">
													<div class="container mt-5">
															<div class="row">
																<div class="col-md-6">
																	<p>
																	<span  class="facilitator"><strong>Session Chair: Emmanuel Anin</strong></span>
																	<div class="container">
																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">How Should Firms Implement Buffering and Bridging Strategies for Improved Supply Chain Resilience and Economic Performance?</h5>
																			<p class="card-text">James Aditchere (KNUST, Ghana), Dominic Essuman (The University of Sheffield, UK)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Analysis of Drug Supply Chain of Public Secondary Health Facilities in Lagos State, Nigeria</h5>
																			<p class="card-text">Moses Adeyi (Department of Transport School Nigeria Institute of Transport Technology (NITT), Zaria, Nigeria), Emmanuel Enyiribe Ege (University of Lagos)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Examining How Cross-Border Cooperation can Help African Supply Chains Succeed in the Face of Economic Shift</h5>
																			<p class="card-text">Jennifer Tandoh (University of Cape Coast), Vincent Ackah, (Ackah Baidoo Group Of Companies), Emmanuel Quayson. (University of Cape Coast)</p>
																			</div>
																		</div>
																	</div>


																	</p>
																</div>
																</div>
															</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3408">
													<h4 class="panel-title">
														<span>1:15 PM - 2:15 PM</span>
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_3408" aria-expanded="false" aria-controls="schedule_accrodion_content_3408">
															Parallel Sessions: Africa Supply Chains
														<p style="text-transform: initial; font-size: 14px !important; color:#36AE87">(Read more)</p>
														</a>
													</h4>
												</div>
												<div id="schedule_accrodion_content_3408" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3408">
													<div class="panel-body">
													<div class="container mt-5">
													<div class="row">
																<div class="col-md-6">
																	<p>
																	<span class="facilitator"><strong>>Session Chair: John Manso Frimpong</strong> </span>
																	<div class="container">
																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Assessment of Technological Innovations on Supply Chain Management of SMEs in Lagos State</h5>
																			<p class="card-text">Adéyemí Salau (Lagos State University, Nigeria), Opele Adedayo Mathias</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Rethinking Customs for Better Export Trade in Africa</h5>
																			<p class="card-text">Beatrice Mbinya (University of Nairobi), Kefa Simiyu (University of Johannesburg)</p>
																			</div>
																		</div>

																		<div class="card mb-3">
																			<div class="card-body">
																			<h5 class="card-title">Supply Chain Digitalization and Human Capital Development on Academic Staff Performance in Selected Universities in Lagos State</h5>
																			<p class="card-text">Lawal Raheem, Michael Ayorinde Afolayan, Nurudeen Adeyemi SALAU (All from Lagos State University, Nigeria)</p>
																			</div>
																		</div>
																	</div>


																	</p>
																</div>
																</div>
															</div>	
													
													</div>
												</div>
											</div>
										</div>										
								</div>
							</div>							
						</div>


					</div>
				</div>
			</div>
		</div>
		<div class="section-padding"></div>
	</div><!-- Schedule Section /- -->
	

    

    




    <?php require_once 'include/footer.php'; ?>



    </div><!--theme-layout end-->


    <?php require_once 'include/scripts.php'; ?>


</body>