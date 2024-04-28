

<?php require_once 'include/head.php';?>
<?php require_once 'include/nav2.php';?>


<head>	
  <link href="assets/css/custom.css" rel="stylesheet">  
  <script>
	$(function() {
		$('#sponsorshipTabs a').click(function(e) {
			e.preventDefault();
			$(this).tab('show');
		});
	});
</script>
<style>
	.howwecan-section {
			background-color: #f8f9fa;
			padding: 18px 0;
		}

		.howwecan-section .nav-tabs {
			margin-bottom: 2rem;
		}

		.howwecan-section .nav-tabs .nav-item {
			margin-right: 1rem;
			border: 1px solid #dee2e6;
			border-radius: 0.25rem;
		}

		.howwecan-section .nav-tabs .nav-item .nav-link {
			padding: 0.5rem 1rem;
			border: 0;
		}

		.howwecan-section .tab-content {
			padding: 2rem;
			background-color: #fff;
			border: 1px solid #dee2e6;
			border-radius: 0.25rem;
		}

		.howwecan-section .tab-content .tab-pane {
			display: none;
		}

		.howwecan-section .tab-content .tab-pane.active {
			display: block;
		}
		.sponsorship-package { padding: 2rem; background-color: #f8f9fa; border: 1px solid #dee2e6; border-radius: 0.25rem; margin-top: 2rem; } 
		
		.benefits-list { list-style: none; padding: 0; margin: 0; } 
		
		.benefits-list li { margin-bottom: 1rem; } 

		.benefits-list ol {list-style-type: disc;padding-left: 20px; margin-bottom: 1rem;}
		
		
</style>
</head>


<!-- PageBanner -->
<div class="container-fluid page-banner blogpost no-padding" style='background: url("images/sponsor.jpg"); -webkit-background-size: cover;	background-size: cover;	background-position: center center; background-repeat: no-repeat; background-size: cover; min-height: 200px;'>
		<div class="section-padding"></div>
			<div class="container">
				<div class="banner-content-block">
					<div class="banner-content">
						<h3>Registration Information</h3>
						<ol class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li class="active">Registration</li>
						</ol>
					</div>
				</div>
			</div>
		<div class="section-padding"></div>
	</div><!-- PageBanner /- -->



<body class="light-vz">

<div class="container-fluid no-padding howwecan-section">
		<div class="container">
	
		<h3>Registration Information</h3> 
    <p>
	Registration fees are covered, courtesy of CARISCA. In-person attendees only need to fund their own transportation and lodging. 	</p>

<button href="https://na.eventscloud.com/782387" title="Registration Link">Click Here to Register </button>

  
        </div>
</div>
  
    


  

        <?php require_once 'include/footer.php';?>
      

       
    </div><!--theme-layout end-->

  
    <?php require_once 'include/scripts.php';?>
	

</body>
