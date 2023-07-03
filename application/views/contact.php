		<!-- Page Banner Area Start -->
    <div class="page__banner" data-background="assets/img/pages/pagebanner.png">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
                        <span>Contact</span>
						<ul>
							<li><a href="<?php echo base_url();?>">Home</a><span>|</span></li>
							<li>Contact Us</li>
						</ul>
						<h1>Contact Us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->
    <!-- Contact Page Start -->
    <div class="contact__page section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 order-last order-lg-first">
                    <div class="contact__page-form">
                        <h3 class="mb-30">Contact Us</h3>
                        <form method="post" id="frmSubmitContact">
                            <div class="row">
                                <div class="col-sm-12 mb-20"> 
                                    <div class="contact__page-form-item conbix-contact-item">
                                        <span class="fal fa-user"></span>
                                        <input type="text" name="Name" placeholder="Full Name" required="required">
                                    </div>										
                                </div>
                                <div class="col-sm-12 mb-20">
                                    <div class="contact__page-form-item conbix-contact-item">
                                        <span class="far fa-envelope-open"></span>
                                        <input type="email" name="Email" placeholder="Email Address" required="required">											
                                    </div>									
                                </div>
                                <div class="col-sm-12 mb-30"> 
                                    <div class="contact__page-form-item conbix-contact-item">
                                        <span class="far fa-comments"></span>
                                        <textarea name="Message" placeholder="Type your comments...."></textarea>
                                    </div>										
                                </div>
                                <div class="col-lg-12">										
                                    <div class="contact__page-form-item">
                                        <button class="btn-one" id="btnSubmitContact" type="submit">Submit Now<i class="far fa-chevron-double-right"></i></button>
                                    </div>										
                                </div>
                            </div>							
                        </form>                        
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 lg-mb-30 pb-5">
                    <div class="contact__page-info">
                    <div class="getIn__touch-left-title ">
                   <span class="subtitle-one">Get In Touch</span>
                  
                   </div>
                        <div class="contact__page-info-item pt-5">
                            <h6>Office Address<span>:</span></h6>
                            <span>3891 Ranchview Dr. Richardson, California 62639</span>
                        </div>
                        <div class="contact__page-info-item">
                            <h6>Email Address <span>:</span></h6>
                            <span>
								<a href="mailto:websysoftsolutions.com">hello.websysoftsolutions.com </a>
								<a href="mailto:websysoftsolutions.com">info.websysoftsolutions.com </a>
							</span>
                        </div>
                        <div class="contact__page-info-item">
                            <h6>Phone Number<span>:</span></h6>
                            <span>
								<a href="tel:(+106)935-0120">(+106) 935-0120</a>
								<a href="tel:(+107)605-0133">(+107) 605-0133</a>
							</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
     jQuery('#frmSubmitContact').on('submit',function(e){
      e.preventDefault();
      jQuery('#btnSubmitContact').attr('disabled',true);
      jQuery.ajax({
         url:'https://script.google.com/macros/s/AKfycbzi2MtAc58w_kMR8JdEMonbO6abGPjiYjfBCTJWp2BevJ4Ttc7L_nRhL8petzb87_Cudw/exec',
         type:'post',
         data:jQuery('#frmSubmitContact').serialize(),
         success:function(result){
            jQuery('#frmSubmitContact')[0].reset();
            jQuery('#msg').html('Thank You');
            jQuery('#btnSubmitContact').attr('disabled',false);
            window.location.href='thank-you';
         }
      });
     });
</script>