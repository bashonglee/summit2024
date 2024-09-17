


<?php require_once 'include/head.php';?>
<?php require_once 'include/nav.php';?>


<head>	
  <link href="assets/css/custom.css" rel="stylesheet">  
  <style>
	
		* {
		  box-sizing: border-box;
		  &::before, &::after {
			box-sizing: border-box;
		  }
		}


		.container {
		  margin: 0 auto;
		  padding: 4rem;
		}

		.accordion {
		  .accordion-item {
			border-bottom: 1px solid $lightgray;
			button[aria-expanded='true'] {
			  border-bottom: 1px solid $blue;
			}
		  }
		  button {
			position: relative;
			display: block;
			text-align: left;
			width: 100%;
			padding: 1em 0;
			color: $text;
			font-weight: 400;
			border: none;
			background: none;
			outline: none;
			&:hover, &:focus {
			  cursor: pointer;
			  color: $blue;
			  &::after {
				cursor: pointer;
				color: $blue;
				border: 1px solid $blue;
			  }
			}
			.accordion-title {
			  padding: 1em 1.5em 1em 0;
			}
			.icon {
			  display: inline-block;
			  position: absolute;
			  top: 18px;
			  right: 0;
			  width: 22px;
			  height: 22px;
			  border: 1px solid;
			  border-radius: 22px;
			  &::before {
				display: block;
				position: absolute;
				content: '';
				top: 9px;
				left: 5px;
				width: 10px;
				height: 2px;
				background: currentColor;
			  }
			  &::after {
				display: block;
				position: absolute;
				content: '';
				top: 5px;
				left: 9px;
				width: 2px;
				height: 10px;
				background: currentColor;
			  }
			}
		  }
		  button[aria-expanded='true'] {
			color: $blue;
			.icon {
			  &::after {
				width: 0;
			  }
			}
			+ .accordion-content {
			  opacity: 1;
			  max-height: 9em;
			  transition: all 200ms linear;
			  will-change: opacity, max-height;        
			}
		  }
		  .accordion-content {
			opacity: 0;
			max-height: 0;
			overflow: hidden;
			transition: opacity 200ms linear, max-height 200ms linear;
			will-change: opacity, max-height;
      background-color: rgba(59, 174, 134, 0.33);
      border-radius: 16px;
      padding: 15px;
			p {
			  font-weight: 300;
			  margin: 2em 0;
			}
		  }
		}
</style>


</head>

<!-- PageBanner -->
<div class="container-fluid page-banner blogpost no-padding" style='background: url("images/faqs.jpg"); -webkit-background-size: cover;	background-size: cover;	background-position: center center; background-repeat: no-repeat; background-size: cover;'>
		<div class="section-padding"></div>
			<div class="container">
				<div class="banner-content-block">
					<div class="banner-content">
						<h3>Frequestly Asked Questions</h3>
						<ol class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li class="active">FAQs</li>
						</ol>
					</div>
				</div>
			</div>
		<div class="section-padding"></div>
	</div><!-- PageBanner /- -->



<body class="light-vz">
    <div class="container">
      <h2>Frequently Asked Questions</h2>
      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is the moon sometimes out during the day?</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
          </div>
        </div>
        
      </div>
    </div>
   
  

        <?php require_once 'include/footer.php';?>
      


  
    <?php require_once 'include/scripts.php';?>
    <script>
			const items = document.querySelectorAll(".accordion button");

		function toggleAccordion() {
		  const itemToggle = this.getAttribute('aria-expanded');
		  
		  for (i = 0; i < items.length; i++) {
			items[i].setAttribute('aria-expanded', 'false');
		  }
		  
		  if (itemToggle == 'false') {
			this.setAttribute('aria-expanded', 'true');
		  }
		}

		items.forEach(item => item.addEventListener('click', toggleAccordion));

</script>
	

</body>