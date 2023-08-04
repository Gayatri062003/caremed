

<?php  
$sql = mysqli_query($con,"select * from `services` where `id` = '".$_GET['id']."' "); 
$row = mysqli_fetch_array($sql);

?>
    <div class="fullpageremove">
        <div class="page-wrapper">

            


 
    
        <div class="section fp-auto-height bg-white service-top-main business-registration-service" id="section01">
            <div class="nw-services-section nws-top-banner">
                <div class="container">
                    <div class="service-wrp service-top-wrp">
                        <div class="service-top-cnt-blk">
                            <div class="service-info">
                                <h1 class="sit-title">We Offer A Hassle-Free Approach To <br /><strong><?php echo $row['Service_Name']; ?></strong></h1>
                                <p class="sit-discription">Thousands of business owners use</p>
                                <p class="sit-discription">Insta C.A. to register their business</p>
                                <div class="sit-btn-blk">
                                    <ul>
                                        <li><a href="login.php#tosignup" class="nw-btn nw-btn-green"><?php echo $row['Service_Name']; ?></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="service-top-img">
                                <img src="images/services/business-service-img1.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section fp-auto-height bg-light service-middle-main" id="section02">
            <div class="nws-middle-blk">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="nws-middle-title-block">
                                <h2>So, How Does It Work?</h2>
                                <p>Using Insta C.A. is simple</p>
                            </div>
                        </div>
                    </div>
                    <div class="row single-work-list">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="text-wrapper">
                                <div class="icon-box">
                                    01 <span>Step</span>
                                </div>
                                <h3 class="swl-title">Choose a package on our <br /> website</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="img-box">
                                <img src="images/services/business-service-img2.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="row single-work-list">
                        <div class="col-sm-6 col-md-6 col-lg-6 order-lg-last">
                            <div class="text-wrapper">
                                <div class="icon-box">
                                    02 <span>Step</span>
                                </div>
                                <h3 class="swl-title">Complete an easy-to-fill form on your <br /> Insta C.A. Dashboard</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 order-lg-first">
                            <div class="img-box">
                                <img src="images/services/business-service-img3.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="row single-work-list">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="text-wrapper">
                                <div class="icon-box">
                                    03 <span>Step</span>
                                </div>
                                <h3 class="swl-title">Our software connects you with our inhouse <br /> dedicated expert to answer your questions</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="img-box">
                                <img src="images/services/business-service-img4.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="row single-work-list">
                        <div class="col-sm-6 col-md-6 col-lg-6 order-lg-last">
                            <div class="text-wrapper">
                                <div class="icon-box">
                                    04 <span>Step</span>
                                </div>
                                <h3 class="swl-title">Job’s done. <br /> Celebrate the opening of your enterprise!</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 order-lg-first">
                            <div class="img-box">
                                <img src="images/services/business-service-img5.png" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section fp-auto-height bg-white call-action-main" id="section03">
            <div class="call-action-blk">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="call-action-img">
                                <img src="images/services/call-action-img.png" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="call-action-content">
                                <h2>Have Questions? <br /> We are here to help!</h2>
                                <p>Contact us and our executive will get back to you as soon as possible!</p>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#enquire-popup" class="nw-btn nw-btn-green">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
    
 



<div class="section  fp-auto-height bg-light footer-main " id="section6">
				<section class="newNewsletter-section" style="margin-top:0;">
					<div class="container">
                        <div class="row">
							<div class="col-sm-12 col-md-7">
								<div class="newNewsletter-description">
									<h3>Be on top of things.</h3>
									<p>Join our newsletter and never miss another tax & accounting deadline</p>
								</div>
							</div>
							<div class="col-sm-12 col-md-5">
								<form>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="newNesletter-subscribe foot-subscribe foot-white form-group position-relative">
                                                <!--<label class="text-muted">Write your email <span class="text-danger">*</span></label>-->
                                                <i class="ion-android-mail ml-3 icons"></i>
                                                <input type="email" name="txtnewsletter" id="txtnewsletter" class="form-control" placeholder="Your email: ">
												<input type="button" id="submitsubscribe" name="send" class="nw-btn applynewsletterclick nw-btn-green w-100" value="Subscribe" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
							</div>
						</div>
					</div>
				</section>
                <section class="home-footer-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <a class="logo-footer text-dark" href="index.html"><img class="img-responsive" alt="Insta CA" src="images/logo.png"></a>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="faq.html" class="text-muted"> FAQ</a></li>
                                    <li><a href="aboutus.html" class="text-muted"> About us</a></li>
                                    <li><a href="jobs.html" class="text-muted"> Jobs</a></li>
                                    <li><a href="contactus.html" class="text-muted"> Contact Us</a></li>
                                    <li><a href="media.html" class="text-muted"> Press & Media</a></li>
                                    <li><a href="privacypolicy.html" class="text-muted"> Privacy Policy</a></li>
                                    <li><a href="terms-and-condition.html" class="text-muted"> Terms & Conditions</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h4 class="text-dark footer-head">Services</h4>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="business-registration-service.html" class="text-muted"> Business Registration</a></li>
                                    <li><a href="accounting-and-tax-service.html" class="text-muted"> Accounting & Tax</a></li>
                                    <li><a href="gst-service.html" class="text-muted"> GST & TDS</a></li>
                                    <li><a href="legal-service.html" class="text-muted"> Legal</a></li>
                                    <li><a href="compliances-service.html" class="text-muted"> Compliance</a></li>
                                    <li><a href="itr-service.html" class="text-muted"> Income Tax Return</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h4 class="text-dark footer-head">Tools & Tips</h4>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="income-tax-return-filing-services-guides.html" class="text-muted"> Video & Guides</a></li>
                                    <li><a href="blog.html" class="text-muted"> Blog</a></li>
                                    <li><a href="hracalculator.html" class="text-muted"> HRA Calculator</a></li>
                                    <li><a href="ppfcalculator.html" class="text-muted"> PPF Calculator</a></li>
                                    <li><a href="emicalculator.html" class="text-muted"> EMI Calculator</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0 footer-newsletter">
                                <h4 class="text-dark footer-head">Contact Info</h4>
                                <ul class="f-contact-info">
									<li><a href="tel:+911141252365"><i class="ion-android-call"></i> 011 41252365</a></li>
									<li><a href="tel:+919818644558"><i class="ion-social-whatsapp"></i> +91 9818644558</a></li>
									<li><a href="cdn-cgi/l/email-protection.html#6e070008012e07001d1a0f0d0f400700"><i class="ion-android-mail"></i> <span class="__cf_email__" data-cfemail="4920272f260920273a3d282a28672027">[email&#160;protected]</span></a></li>
								</ul>
								<ul class="f-social">
									<li><a href="https://www.facebook.com/InstaCA.in/"><i class="ion-social-facebook"></i></a></li>
									<li><a href="https://twitter.com/InstaCA1"><i class="ion-social-twitter"></i></a></li>
									<li><a href="https://www.linkedin.com/company/insta-c-a/"><i class="ion-social-linkedin"></i></a></li>
									<li><a href="https://www.instagram.com/instaca.in/"><i class="ion-social-instagram"></i></a></li>
								</ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <div class="footer-contact-info">
                                    <div class="f-info-block">
                                        <h5>Brands and trademarks are the property of their respective owners.</h5>
                                        <div class="f-br-logos">
                                            <img src="images/footer-logos.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <div class="f-copyrights">
                                    <p>Copyright © 2020 - Loond Technologies Private Limited. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div id="pageloader" style="display:none">
        <img src="images/loader.gif" class="img-responsive" alt="loader" height="128" width="128">
    </div>
    <!-- GET STARTED POPUP -->
    <div id="modal-container">
        <div id="close" class="modal-close"><i class="ion-close-circled"></i></div>
        <div class="modal-background">
            <div class="modal">
                <div class="container dvfbp" style="display:none;">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="fbp_area_box">
                                <div class="fbp_inner_box">
                                    <label>Nature of Business</label>
                                    <div class="input-box sFirstNamediv">
                                        <select tabindex="" name="" id="ddlBusinessnature" class="formInput" autocomplete="off">
                                            <option value="1">Trading of Goods</option>
                                            <option value="2">Rendering of Services</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="fbp_inner_box">
                                    <label>Type of business</label>
                                    <div class="input-box sFirstNamediv">
                                        <select tabindex="" name="" id="ddlTypeofbussiness" class="formInput" autocomplete="off">
                                            <option value="1">Limited Liability Partnership (LLP)</option>
                                            <option value="2">Private Limited Company (PLC)</option>
                                            <option value="3">Sole Proprietorship / Partnership / Hindu Undivided Family</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="fbp_inner_box">
                                    <label>Annual Revenue</label>
                                    <div class="input-box sFirstNamediv">
                                        <select tabindex="" name="" id="ddlTurnopen" class="formInput" autocomplete="off">
                                            <option value="1"><10,00,000</option>
                                            <option value="2"><20,00,000</option>
                                            <option value="3"><50,00,000</option>
                                            <option value="4"><1,00,00,000</option>
                                            <option value="5"><2,00,00,000</option>
                                            <option value="6"><5,00,00,000 </option>
                                            <option value="7">+5,00,00,000 </option>
                                        </select>
                                    </div>
                                </div>
                                <a href="javascript:;" class="calbussinesspackage">
                                    <div class="arrow-button-block">
                                        <span>
                                            <i class="ion-android-arrow-forward"></i>
                                        </span>
                                        <div></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container dvgetstarted" style="display:none;">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="getstarted-title">Get Started</h2>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12"></div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a href="recommend.html">
                                <div class="get-started-box-block">
                                    <h3>Tax Planner</h3>
                                    <div class="get-started-icon">
                                        <img src="images/recommended-icon.png" alt="" />
                                    </div>
                                    <p>We’ll recommend the right tax solution for you!</p>
                                    <div class="arrow-button-block">
                                        <span>
                                            <i class="ion-android-arrow-forward"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a href="taxsaver.html">
                                <div class="get-started-box-block">
                                    <h3>Tax Saver</h3>
                                    <div class="get-started-icon">
                                        <img src="images/tax-saver-icon.png" alt="" />
                                    </div>
                                    <p>We’ll help you maximize your deductions and savings!</p>
                                    <div class="arrow-button-block">
                                        <span>
                                            <i class="ion-android-arrow-forward"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /. GET STARTED POPUP -->
    <!-- Modal -->
    <div id="enquire-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <h4 class="modal-title">We would love to talk to you!</h4>
                    <p class="modal-mini-title">Schedule a callback and we will call you shortly!</p>
                </div>
                <div class="modal-body">
                    <div class="enquire-popup-form-block">
                        <div class="input-box fnamediv activealert">
                            <label class="formLabel" for="">First Name</label>
                            <input type="text" class="formInput" id="txtnamefront" name="" autocomplete="off">
                        </div>
                        <div class="input-box lnamediv activealert">
                            <label class="formLabel" for="">Last Name</label>
                            <input type="text" class="formInput" id="txtlastnamefront" name="" autocomplete="off">
                        </div>
                        <div class="input-box emailaddressdiv activealert">
                            <label class="formLabel" for="">Email</label>
                            <input type="text" class="formInput" id="txtenquiryemailfront" name="" autocomplete="off">
                        </div>
                        <div class="input-box phonediv activealert">
                            <label class="formLabel" for="">Phone Number</label>
                            <input type="text" class="formInput" id="txtphonefront" name="" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-insGreen waves-effect waves-ripple enquiryclickfront">Request A Callback</button>

                    <div class="modal-disclaimer">
                        <p>Your information is 100% safe with us. We will never sell or rent your email id.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- alert popup -->
    <div id="ins-alert-popup" class="modal fade ins-alert-dialog-block in" role="dialog" style="background: rgba(0,0,0,0.7);">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body ins-alert-body">
                    <div class="ins-alert-content-block">
                        <div class="ins-alert-icon-block ins-alert-insgreen">
                            <i class="ion-checkmark-circled"></i>
                        </div>
                        <div class="ins-alert-textbtn-block">
                            <p class="alertmessage">Are you sure you want to submit this?</p>
                            <button type="button" data-dismiss="modal" class="btn btn-insGreen waves-effect waves-ripple okvalidatemodelclick">Ok</button>
                            
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div id="ins-alert-popup1" class="modal fade ins-alert-dialog-block in" role="dialog" style="background: rgba(0,0,0,0.7);">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body ins-alert-body">
                    <div class="ins-alert-content-block">
                        <div class="ins-alert-icon-block ins-alert-insgreen">
                            <i class="ion-alert-circled"></i>
                        </div>
                        <div class="ins-alert-textbtn-block">
                            <p class="alertmessage">Are you sure you want to submit this?</p>
                            <button type="button" data-dismiss="modal" class="btn btn-insGreen waves-effect waves-ripple okvalidatemodelclick">Ok</button>
                            
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- alert popup end -->
    <!-- income tax return popup -->
    <div id="incometax-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <p class="modal-mini-title" style="color: #354855; font-size: 18px;">Income Tax Return Services</p>
                </div>
                <div class="modal-body">
                    <h4 class="popup-income-title-block">To know which plan is most suitable for you <a href="recommend.html">click here</a></h4>
                    <ul class="Wrecommend-select-income-block popup-income-block popup-with-description">
                        <li>
                            <a href="service/income-tax-return-filing-salaried-individual.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Individuals</h5>
                                </div>
                            </a>
                            <div class="popup-description-content-block">
                                <p>
                                    Salary income l Pension income l Capital gain from property l Capital gain from securities l Capital gain from other assets l Rental income l Dividend income l Interest income l Gifts received l Gambling winnings l Winnings from lotteries l ESOPs
                                </p>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="modal" data-target="#incometaxbusiness-popup" data-href="/service/income-tax-return-filing-business">
                                <div class="Wrecommend-income-box">
                                    <h5>Business</h5>
                                </div>
                            </a>
                            <div class="popup-description-content-block">
                                <p>
                                    Small & Medium enterprises l Startups l Traders l Manufacturers l Independent contractors l Kirana shop owners l Wholesalers l Retailers l E-Commerce Sellers l Bloggers
                                </p>
                            </div>
                        </li>
                        <li>
                            <a href="service/income-tax-return-filing-professional.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Professionals</h5>
                                </div>
                            </a>
                            <div class="popup-description-content-block">
                                <p>
                                    Doctors l Lawyers l Engineers l Private Tutors l Fashion Designers l Chartered Accountants l Commission Agents l Insurance agents l Web Designers l Securities Traders l Architects l Consultants l Freelancers
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- income tax return popup end -->
    <!-- company incorporation popup -->
    <div id="company-incorporation-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <p class="modal-mini-title" style="color: #354855; font-size: 18px;">Company Incorporation Services</p>
                </div>
                <div class="modal-body">
                    <ul class="Wrecommend-select-income-block popup-income-block">
                        <li>
                            <a href="service/ngo-registration-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>NGO <br> Registration</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/proprietorship-firm-registration-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Proprietorship Firm Registration</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/private-limited-company-registration-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Private Limited Company Registration</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/limited-liability-partnership-company-registration-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Limited Liability Partnership</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/one-person-company-registration-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>One Person Company Registration</h5>
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- company incorporation popup end -->
    <!-- startup services popup -->
    <div id="startupservices-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <p class="modal-mini-title" style="color: #354855; font-size: 18px;">Start Up Services</p>
                </div>
                <div class="modal-body">
                    <ul class="Wrecommend-select-income-block popup-income-block">
                        <li>
                            <a href="service/startups-launching-registration-advisory-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Hand Holding</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/startups-roc-mca-filing-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>ROC Filing</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/startups-accounting-bookkeeping-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Accounting</h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- startup services popup end -->
    <!-- income tax business services popup -->
    <div id="incometaxbusiness-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <p class="modal-mini-title" style="color: #354855; font-size: 18px;">Income Tax Return Services</p>
                </div>
                <div class="modal-body">
                    <ul class="Wrecommend-select-income-block popup-income-block" style="min-height:500px;">
                        <li>
                            <a href="service/income-tax-return-filing-business.html">
                                <div class="Wrecommend-income-box">
                                    <h5 style="line-height:36px;">Sole Proprietorship</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/income-tax-return-private-limited-company.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Private Limited<br />Company</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/income-tax-return-limited-liability-partnership-partnership-firm.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Limited Liability<br />Partnership</h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- income tax business services popup end -->
    <!-- Accounting services popup -->
    <div id="accountingservices-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <p class="modal-mini-title" style="color: #354855; font-size: 18px;">Accounting Services</p>
                </div>
                <div class="modal-body">
                    <ul class="Wrecommend-select-income-block popup-income-block popup-with-description">
                        <li>
                            <a href="service/business-accounting-bookkeeping-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Business</h5>
                                </div>
                            </a>
                            <div class="popup-description-content-block">
                                <p>Small & Medium enterprises l Startups l Traders l Manufacturers l Independent contractors l Kirana shop owners l Wholesalers l Retailers l E-Commerce Sellers l Bloggers</p>
                            </div>
                        </li>
                        <li>
                            <a href="service/professionals-accounting-bookkeeping-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Professionals</h5>
                                </div>
                            </a>
                            <div class="popup-description-content-block">
                                <p>Doctors l Lawyers l Engineers l Private Tutors l Fashion Designers l Chartered Accountants l Commission Agents l Insurance agents l Web Designers l Securities Traders l Architects l Consultants l Freelancers</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Accounting services popup end -->
    <!-- DSC/DIN services popup -->
    <div id="dsc-din-popup" class="modal fade enquire-popup-block" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="ion-close-round"></i></button>
                    <p class="modal-mini-title" style="color: #354855; font-size: 18px;">DSC / DIN Services</p>
                </div>
                <div class="modal-body">
                    <ul class="Wrecommend-select-income-block popup-income-block">
                        <li>
                            <a href="service/digital-signature-certificate-dsc-token.html">
                                <div class="Wrecommend-income-box">
                                    <h5>Digital Signature Certificate</h5>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="service/director-identification-number-services.html">
                                <div class="Wrecommend-income-box">
                                    <h5> Director Identification No </h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- DSC/DIN services popup end -->
    <!-- alert popup -->
    <div id="ins-alert-popup" class="modal fade ins-alert-dialog-block in" role="dialog" style="background: rgba(0,0,0,0.7);">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body ins-alert-body">
                    <div class="ins-alert-content-block">
                        <div class="ins-alert-icon-block ins-alert-insgreen">
                            <i class="ion-alert-circled"></i>
                        </div>
                        <div class="ins-alert-textbtn-block">
                            <p class="alertmessage">Are you sure you want to submit this?</p>
                            <button type="button" data-dismiss="modal" class="btn btn-insGreen waves-effect waves-ripple okvalidatemodelclick">Ok</button>
                            <button type="button" data-dismiss="modal" class="btn btn-insGreen waves-effect waves-ripple okvalidatemodelclick">Cancel</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- alert popup end -->


 