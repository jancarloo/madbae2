
      		
			<footer id="footer" class="dark">
				<div class="container">
					<div class="footer-top clearfix">					
						<div class="height-50"></div>
						
						<div class="footer-left">
							<div class="footer-address-widget clearfix">
								<ul>
								

									<li class="jmy_web_div" data-page="footer" id="telefono_correo" data-editor="no">
						<?php $this->pnt('telefono_correo','<i class="icon-telephone114"></i>+1 900 234 567<a href="<?php $this->url_inicio(); ?>mailto:support@advisor.com">supprt@advisor.com</a>',["secundario"=>"footer"]);
						?></li>
									<li class="jmy_web_div" data-page="footer" id="direccion_footer" data-editor="no">
						<?php $this->pnt('direccion_footer','<i class="icon-icons74"></i>Manhattan Hall,<span>Advisor Ltd 1258, Melbourne, australia</span>',["secundario"=>"footer"]); 
						?></li>
								</ul>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="usefull-links-widget jmy_web_div" data-page="footer" id="vinetas_footer" data-editor="no">
						<?php $this->pnt('vinetas_footer','<h4>Usefull Links</h4>
										<ul>
											<li><a href="<?php $this->url_inicio(); ?>index.html">Home</a></li>
											<li><a href="<?php $this->url_inicio(); ?>about-us.html">About Us</a></li>
											<li><a href="<?php $this->url_inicio(); ?>services.html">Services</a></li>
											<li><a href="<?php $this->url_inicio(); ?>#.">Projects</a></li>
											<li><a href="<?php $this->url_inicio(); ?>news.html">News</a></li>
											<li><a href="<?php $this->url_inicio(); ?>contact-us.html">Contact Us</a></li>
										</ul>
										<ul>
											<li><a href="<?php $this->url_inicio(); ?>services.html">Bonds</a></li>
											<li><a href="<?php $this->url_inicio(); ?>services.html">Commodities</a></li>
											<li><a href="<?php $this->url_inicio(); ?>services.html">Investments</a></li>
											<li><a href="<?php $this->url_inicio(); ?>services.html">Retirement</a></li>
										</ul>',["secundario"=>"footer"]); 
						?> 
										
									</div>
								</div>
								<div class="col-md-6">
									<div class="twitter-widget clearfix jmy_web_div" data-page="footer" id="twitter" data-editor="no">
						<?php $this->pnt('twitter','<h4>Twitter Feeds</h4>
										<div class="tweet">
											<i class="icon-twitter-1"></i>
											<p><a href="<?php $this->url_inicio(); ?>#">@Rotography</a> Please kindly use our Support Forum: <a href="<?php $this->url_inicio(); ?>#.">pixelatic.co.uk.</a>
											<span>about a month ago</span>
											</p>
										</div>
										<div class="tweet">
											<i class="icon-twitter-1"></i>
											<p><a href="<?php $this->url_inicio(); ?>#">@Rotography</a> Please kindly use our Support Forum: <a href="<?php $this->url_inicio(); ?>#.">pixelatic.co.uk.</a>
											<span>about a month ago</span>
											</p>
										</div>',["secundario"=>"footer"]); 
						?>
										
									</div>
								</div>
							</div>
						</div>
						<div class="footer-right">
							<div class="newsletter-widget">
								<h4>Our Newsletter</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod.</p>
								<div class="form">
									<p class="subscribe_success" id="subscribe_success" style="display:none;"></p>
									<p class="subscribe_error" id="subscribe_error" style="display:none;"></p>
									<form name="subscribe_form" id="subscribe_form" method="post" action="#" onSubmit="return false">
										<input type="text" data-delay="300" placeholder="Your Name" name="subscribe_name" id="subscribe_name" onKeyPress="removeChecks();" class="input" >
										<input type="text" data-delay="300" placeholder="Email Address" name="subscribe_email" id="subscribe_email" onKeyPress="removeChecks();" class="input" >
										<button class="btn btn-primary" name="Subscribe" type="submit" data-text="Subscribe" onClick="validateSubscription();">Subscribe</button>
									</form>
								</div>
								<ul class="social">
									<li class="animate bounceIn"><a href="<?php $this->url_inicio(); ?>#." class="facebook"><i class="icon-facebook-1"></i></a></li>
									<li class="animate bounceIn" data-delay="100"><a href="<?php $this->url_inicio(); ?>#." class="twitter"><i class="icon-twitter-1"></i></a></li>
									<li class="animate bounceIn" data-delay="200"><a href="<?php $this->url_inicio(); ?>#." class="google-plus"><i class="icon-google"></i></a></li>
									<li class="animate bounceIn" data-delay="300"><a href="<?php $this->url_inicio(); ?>#." class="linkedin"><i class="icon-linkedin3"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6"><p>Coyright © 2016 Advisor. All rights reserved.</p></div>
							<div class="col-md-6 col-sm-6"><p class="text-right">Designed by <a href="<?php $this->url_inicio(); ?>#.">Brighthemes</a></p></div>
						</div>
					</div>
				</div>
				
			</footer>
			
			
			
            
		<!-- FOOTER SCRIPTS
		================================================== -->
		<script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
		<script src="<?php $this->url_templet(); ?>js/smooth-scroll.js"></script>
		<script src="<?php $this->url_templet(); ?>js/bootstrap.min.js"></script>
		<script src="<?php $this->url_templet(); ?>js/counter.js"></script>
		<script src="<?php $this->url_templet(); ?>js/common.js"></script>
		<script src="<?php $this->url_templet(); ?>js/scripts.js"></script>
		<script src="<?php $this->url_templet(); ?>js/hero-slider.js"></script>
		<?php  $this->llamar_js(); ?> 
		
    </body>
</html>