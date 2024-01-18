<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Heaven Mount | Travel Solutions</title>
	<link rel="icon" type="image/png" href="assets/hm-logo.png" sizes="32x32" />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
	integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
	crossorigin="anonymous"
	referrerpolicy="no-referrer"
  />

</head>
<body>
	<!-- ------------- Custom form code begins here --------------  -->
	<div class="overlay-custom form-open" id="overlay">
		<div class="popup-custom">
			<div class="close-custom" id="close1" data-event-category="Section" data-event-action="Click"
				data-event-name="Close">&times;</div>
			<div class="customForm">
				<form class="enquire-form " id="enquiryForm" method="POST" novalidate>
					<input type="hidden" name="projects" class="" value="Saya Status">
					<input type="hidden" name="subject" class="" value="Saya Status Enquiry">
					<input type="hidden" name="utmsource" class="utmSource" value="
									  <?php echo $_GET['utm_source']?>">
					<input type="hidden" name="utmcampaign" class="utmCampaign" value="
										  <?php echo $_GET['utm_campaign']?>">
					<input type="hidden" name="utmmedium" class="utmMedium" value="
											  <?php echo $_GET['utm_medium']?>">
					<input type="hidden" name="utmterm" class="utmTerm" value="
												  <?php echo $_GET['utm_term']?>">
					<div class="col-12 col-xs-12 form-group-wrapper">
						<label>Name <span>*</span>
						</label>
						<br>
						<input type="text" name="name" value="" id="name" placeholder="Name" class="form-control required" required=""
							onkeypress="return /[a-z ]/i.test(event.key)">
					</div>
					<div class="col-12 col-xs-12 form-group-wrapper">
						<label>Email <span>*</span>
						</label>
						<br>
						<input type="email" name="email" value="" id="email" placeholder="Email" class="form-control required" required="">
					</div>
					<div class="col-12 col-xs-12 form-group-wrapper phone_wrapper">
						<label>Phone <span>*</span>
						</label>
						<br>
						<div class="col-12">

							<div class="col-12">
								<input id="phone" maxlength="10" minlength="10" name="phone" size="20"
									class="required number phone" type="tel" placeholder="Phone">
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-12 col-xs-12 form-group-wrapper">
						<label>Interested in <span>*</span>
						</label>
						<br>
						<select name="InterestedIn" id="InterestedIn" class="form-control required" required="">
							<option value="" >Interested In?</option>
							<option value="North East India" >North East India</option>
							<option value="Goa" >Goa</option>
							<option value="Manali" >Manali</option>
							<option value="Shimla" >Shimla</option>
							<option value="Kerala" >Kerala</option>
							<option value="Thailand" >Thailand</option>
						</select>
					</div>
					<div class="col-12 col-xs-12 form-group-wrapper">
						<label>Message</label>
						<br>
						<!-- <input type="text" name="message" value="" id="Message" class="form-control"> -->
						<textarea name="message" id="Message" cols="10" rows="10"></textarea>
					</div>
					<div class="col-12 form-group-wrapper text-center">
						<input type="submit" class="enquire-btn-now submit-btn theme-btn" id="enquiry-submit"
							value="Submit" data-event-category="Button" data-event-action="Click"
							data-event-name="Submit Enquire Form">
					</div>
				</form>
				<div id="enquirySuccess" class="success dark-btn text-center text-purple pd-tp-20 pd-bt-20"
					style="display: none;">Your response has been received. <br> Our sales team will get in touch with
					you soon. 
				</div>
				<!-- <div class="pd-tp-10 db-bro dark-btn">
				<a href="images/saya-status.pdf" target="_blank" class="bro" style="display:none;" data-event-category="Section" data-event-action="Click">Download Brochure&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="26.881" height="12.514" viewBox="0 0 26.881 12.514">
						<g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right" transform="translate(0.5 0.707)">
							<path id="Path_81623" data-name="Path 81623" d="M7.5,18H33.381" transform="translate(-7.5 -12.45)" fill="none" stroke="#ede1b5" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
							<path id="Path_81624" data-name="Path 81624" d="M18,7.5l5.55,5.55L18,18.6" transform="translate(2.331 -7.5)" fill="none" stroke="#ede1b5" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
						</g>
						</svg>
					</a>
				</div> -->
			</div>
			<div class="clearfix">

			</div>

		</div>
	</div>
<!-- ------------- custom form code ends here ----------  -->
	<header class="active">
		<div class="container pos-rel">
			<div class="row">
				<div class="pull-left col-xs-9 brand-logo">
					<a href="javascript:;" class="goto-home">
						<!-- <img src="./assets/hm-logo-crop.png" width="60%" height="auto" class="img-responsive" data-event-category="Header" data-event-action="Click" data-event-name="Logo"> -->
						<img src="./assets/brand-logo-2.jpg" width="60%" height="auto" class="img-responsive" data-event-category="Header" data-event-action="Click" data-event-name="Logo">
						<!-- <div>Heaven Mount</div> -->
					</a>
				</div>
				<div class="col-xs-3 pull-right">
					<div class="pull-right menu-icon-mobile">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="col-12 lower font-pop">
						<div class="nav-links">
							<a href="javascript:;" rel="overview" class="active" data-event-category="Header" data-event-action="Click" data-event-name="Overview">Overview</a>
							<!-- <a href="javascript:;" rel="lifestyle" data-event-category="Header" data-event-action="Click" data-event-name="Lifestyle">Lifestyle</a> -->
							<a href="javascript:;" rel="Amenities" data-event-category="Header" data-event-action="Click" data-event-name="Amenities">Amenities</a>
							<!-- <a href="javascript:;" rel="Gallery" data-event-category="Header" data-event-action="Click" data-event-name="Gallery">Gallery</a> -->
							<!-- <a href="javascript:;" rel="location" data-event-category="Header" data-event-action="Click" data-event-name="Location">Location</a> -->
							<!-- <a href="javascript:;" rel="about" data-event-category="Header" data-event-action="Click" data-event-name="about">About</a> -->
							<a href="tel:+918765620009" id="hid-on-mob" class="call-icon"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#000" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"/></svg></span>+91 876 562 0009</a>
							<a href="javascript:;" class="enquire-btn open-custom-form" id="hid-on-mob" data-event-category="Header" data-event-action="Click" data-event-name="Enquire Now">Enquire Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="form-container">
				<a href="javascript:;" class="frmclose" data-event-category="Section" data-event-action="Click" data-event-name="Form Close">X</a>
			</div>
		</div>
		<!-- <nav class="NavbarItems"> -->
			<!-- <h1 class="navbar-logo">Heaven Mount</h1>
	
			<div class="menu-icons" style="display: none;">
				<!- - <i class={this.state.clicked ? "fas fa-times" : "fas fa-bars"}></i> - ->
				<i class="fas fa-bars"></i>
			</div>
			
			<ul class="nav-cont">
				<li>Overview</li>
				<li>Overview</li>
				<li>Overview</li>
				<li>Overview</li>
				<li>Overview</li>
			</ul> -->
		  <!-- </nav> -->
	</header>