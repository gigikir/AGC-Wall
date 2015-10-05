<?php 
include('header.php');
include('navbar.php');
?>
<div class="container">
	<div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Dvorax
	                    <small>all wallpaper is here</small>
	                </h1>
	            </div>
	        </div>
		<?php
		include('sidebar.php');
		?>

		<?php 
			if (isset($_GET['p'])) {
				if ($_GET['p']=='dmca') {

					echo '
					<div class="col-md-8">
					<h2>DMCA</h2>
					<b>dvorax.com</b> is a community supported website with the majority of the published content being uploaded by our user community or collected from a wide range of sources including free image repositories and websites. Although published content is believed to be authorized for sharing and personal use as desktop wallpaper either by the uploader / author or for being Public Domain / Free Culture licensed content, unless otherwise noted in the wallpaper description, all images on this website are copyrighted by their respective authors, therefore, if you wish to use these images for any other use you must get permission from their respective authors.
					</div>';

				}
				if ($_GET['p']=='privacy') {
					echo '
					<div class="col-md-8">
					<h2>Privacy Policy</h2>
					<p>
						Your privacy is important to us. To better protect your privacy we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used. To make this notice easy to find, we make it available in our footer and at every point where personally identifiable information may be requested. Log files are maintained and analysed of all requests for files on this website’s web servers. Log files do not capture personal information but do capture the user’s IP address, which is automatically recognised by our web servers. This website does not store any information that would, on its own, allow us to identify individual users of this service without their permission. Any cookies that may be used by this website are used either solely on a per session basis or to maintain user preferences. Cookies are not shared with any third parties. 
						<hr />

						Third Parties
						Third party vendors, including Google, use cookies to serve ads based on a user`s prior visits to your website.
						Google`s use of the DoubleClick cookie enables it and its partners to serve ads to your users that are based on their visit to your sites and/or other sites across the Internet.
						Users may opt out of using the DoubleClick cookie for interest-based advertising by visiting Ads Settings. (Alternatively, you can direct users to opt out of a third-party vendor`s use of cookies for interest-based advertising by visiting aboutads.info.)
					</p></div>';
				}
				if ($_GET['p']=='contact') {
					echo '
					<div class="col-md-8">
						<h2>Contact Us</h2>
						<p>
						Please do not email asking if you can use the image for projects etc we do not own the copyright to any of the images on this website they are provided as-is and are believed to be in the "public domain" you use them at your own risk.. , 
						we also can not help with finding the original author of the images. 
						</p>
						<p>
						Alternatively if you own the copyright to the image we can provide you with a link to your website in our recommended links section. 
						</p>
						<p>
						NOTHING ON THIS WEBSITE IS FOR SALE DO NOT EMAIL ASKING TO BUY ANYTHING. 
						</p>
						<p>
						Response is usually done within 3 days.
						</p>
						<!-- FORM -->
						<form>
							<b>Name :</b>
							<input type="text" name="name" class="form-control" />
							<b>Email Address :</b>
							<input type="email" name="email" class="form-control" />
							<b>Subject :</b>
							<input type="text" name="subject" class="form-control" />
							<b>Message :</b>
							<textarea class="form-control" name="message"></textarea>
							<br />
							<input type="submit" name="sendEmail" value="Send" class="btn btn-success pull-right" />
						</form>
						<!-- /FORM -->

					</div>';
				}
			}
		?>


	</div>
<?php
include('footer.php');
?>