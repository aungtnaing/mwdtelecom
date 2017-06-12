		<!-- Newsletter Fun Area Strat -->
		<div class="newsletter-fun-area">
            <div class="newsletter-area">
                <div class="newsletter-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-sm-12 col-xs-12">
                                <div class="newsletter-container">
                                    <div class="newsletter-info">
                                        <h3>NEWSLETTER..</h3>
                                        <h3 class="text-light">You want to know our latest updates</h3>
                                    </div>
                                    <div class="newsletter-form">
                                        <form action="#" id="mc-form" class="mc-form fix">
                                            <input id="mc-email" type="email" name="email" placeholder="Enter your E-mail">
                                            <button id="mc-submit" type="submit"><i class="fa fa-send"></i></button>  
                                        </form>
                                        <!-- mailchimp-alerts Start -->
                                        <div class="mailchimp-alerts">
                                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                        </div>
                                        <!-- mailchimp-alerts end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="fun-factor-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="single-fun-factor">
                                <div class="fun-icon"><i class="fa fa-users"></i></div>
                                <h4>{{ $priorities[0]->name }}</h4>
                                <h5><span class="counter">{{ $priorities[0]->value }}</span>K</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="single-fun-factor">
                                <div class="fun-icon"><i class="fa fa-usb"></i></div>
                                <h4>{{ $priorities[1]->name }}</h4>
                                <h5><span class="counter">{{ $priorities[1]->value }}</span>K</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="single-fun-factor">
                                <div class="fun-icon"><i class="fa fa-server"></i></div>
                                <h4>{{ $priorities[2]->name }}</h4>
                                <h5><span class="counter">{{ $priorities[2]->value }}</span>K</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="single-fun-factor">
                                <div class="fun-icon"><i class="fa fa-paint-brush"></i></div>
                                <h4>{{ $priorities[3]->name }}</h4>
                                <h5><span class="counter">{{ $priorities[3]->value }}</span>K</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<!-- Newsletter Fun Area End -->