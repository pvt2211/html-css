<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Arrowtic_Template/partials/header.php';
$fileName = "Contact Us";
$fileTitle = "Contact Us";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<script>
	var current_page = "contact";
</script>
<div class="wrapper">
	<div class="container pt-100 pb-70">
		<div class="row align-items-center mb-100">
		    <div class="contact-col-lg-5 pl-15 pr-15 text-left">
		        <div class="mb-45">
		            <span class="pages-span-red" style="color: black;">We’ll Be</span>
		            <h1 class="pages-h1">Glad To Assist You!</h1>
		            <p class="pages-p-two">There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in that some form by injected humour or randomised words which don't look even the slightly is believable dummy text.</p>
		        </div>
		    </div>
			<div class="contact-col-lg-7 pr-15 pl-15 right-div">
				<img src="<?php echo getTemplateUrl() . '/assets/images/bg/contact.png'?>" class="pages-100w" alt="img alt">
			</div>
		</div>
		<div class="row align-items-center">
			<div class="contact-us-3columns pl-15">
				<div class="contact-box-shadow text-center pt-75 pb-75">
					<div class="contact-cta-icon mb-15 ">
						<i class="flaticon-phone" style="color: #6a55a6;"></i>
					</div>
					<div class="contact-cta-content">
						<h5>PHONE NO:</h5>
						<span>+05 - 015 - 246 -5524</span>
						<span>+06 - 025 - 286 - 5500</span>
					</div>
				</div>
			</div>
			<div class="contact-us-3columns">
				<div class="contact-box-shadow text-center pt-75 pb-75">
					<div class="contact-cta-icon mb-15 ">
						<i class="flaticon-mail" style="color: #6a55a6;"></i>
					</div>
					<div class="contact-cta-content">
						<h5>MAIL ADDESS</h5>
						<span>info@example.com</span>
						<span>info@example.com</span>
					</div>
				</div>
			</div>
			<div class="contact-us-3columns pr-15">
				<div class="contact-box-shadow text-center pt-75 pb-75">
					<div class="contact-cta-icon mb-15 ">
						<i class="flaticon-pin" style="color: #6a55a6;"></i>
					</div>
					<div class="contact-cta-content">
						<h5>LOCATION</h5>
						<span>New York, NY 256364,</span>
						<span>United States</span>
					</div>
				</div>
			</div>
		</div>
		<div class="mt-100">
			<div class="row">
				<div class="pages-2columns contact-map pages-display">
					<img src="<?php echo getTemplateUrl() . '/assets/images/map.jpg'?>" alt="img alt">
				</div>
				<div class="contact-input pr-15 pl-15">
					<div class="post-comment-form">
			            <div class="details-title mb-25">
			                <h3>Get In Touch With Us</h3>
			            </div>
			            <form action="#" class="comment-form">
			          	    <input type="text" placeholder="Full Name" class="contact-us-fullname">
			                <div class="grid-11">
			                    <div>
			                       <input type="text" placeholder="First name" class="contact-us-fullname">
			                    </div>
			                    <div>
			                        <input type="email" placeholder="E-mail" class="contact-us-fullname">
			                    </div>
			                </div>
			                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
			                <div class="portifolio-btn mt-20">
			                    <a href="#">SEND MESSAGE</a>
			                </div>
			            </form>
			        </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
