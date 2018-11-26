<footer>
    <div class="footer">
        <div class="container">
            <!-- Prefooter Section -->
            <div class="row pre-footer">
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">Location</h4>
                            <p>Yaoude
                                <br> Etug Ebe </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title"> {{ __('site.call_us') }}</h4>
                            <p> CALL: +237 673 90 19 39
                                <br> DELIVERANCE: +237 650 21 06 84 </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">EMAIL US</h4>
                            <p>
                                havilla@gmail.com
                                <br>
                                havilla@yahoo.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prefooter Section -->

            <!-- Footer widgets -->
            <div class="row widgets">
                <div class="col-md-4 col-sm-6">
                    <div class="about-txt widget">
                        <img src="images/footer-logo.png" alt="logo" />

                        <p>
                            God gave a vision for his church back in 2003
                            and today the we have it.
                            <br>
                            Havilla International Ministry. Saving souls
                            and brining souls to christ.
                        </p>

                        <div class="widgets-social">
                            <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="quick-links widget">
                        <h2 class="widget-title">QUICK LINKS</h2>
                        <ul>
                            <li> <a href="{{ route('en') }}"> English </a> </li>
                            <li> <a href="{{ route('fr') }}"> French </a> </li>
                            <li> <a href="#"> Programs </a> </li>
                            <li> <a href="#"> Blog </a> </li>
                            <li> <a href="#"> Our Program </a> </li>
                        </ul>
                    </div>
                </div>

                <div class="spacer-50 visible-sm"></div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-services widget">
                        <h2 class="widget-title">OUR SERVICES</h2>
                        <ul>
                            <li> <a href="#"> Healing &amp; Deliverance </a> </li>
                            <li> <a href="#"> Councelling </a> </li>
                            <li> <a href="#"> Prayers </a> </li>
                            <li> <a href="#"> Prophecy </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="newsletter widget">
                        <h2 class="widget-title">Newsletter</h2>
                        <p>Subscribe to our newsletters to receive latest news and updates.</p>
                        <!-- ============= Mailchimp Subscribe Form ============= -->

                        <form action="php/subscribe.php" id="subscribeform" method="post">
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" title="Please enter your email" data-msg-email="Please enter a valid email">
                            </div>
                            <button type="submit" class="btn btn-block" id="js-subscribe-btn"> Subscribe Now! </button>

                            <div id="js-subscribe-result" data-success-msg="Done. Subscribed" data-error-msg="Oops. Error!"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Footer widgets -->
        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row copyright-bar">
                <div class="col-md-6">
                    <p>Copyright © 2017 - {{ date('Y') }} Havilla  Ministry. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-right">
                    <p> <a href="#"> Terms of use</a> <a href="#">Privacy Policy</a> <span> | </span> Made with <i class="fa fa-heart" aria-hidden="true"></i> by Surjith S M </p>

                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
</footer>
