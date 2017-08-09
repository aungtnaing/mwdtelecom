 <div id="contact" class="contact-area bg-light pt-100">
            <div class="container">
                <div class="section-title text-center">
                    <h2>get in touch</h2>
                    <p>Let get together.</p>
                </div>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <div class="contact-from">
                            
                            <form action="{{ route("contactus.store") }}" method="POST">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <input name="name" type="text" placeholder="Name">
                                <input name="email" type="text" placeholder="Email">
                                 <input name="phone" type="text" placeholder="Phone">
                                <textarea name="messagecontent" placeholder="Your message"></textarea>
                               
                                <!-- <button type="submit" class="submit">SUBMIT</button> -->
                                <button type="submit" class="btn btn-default">Send Message</button>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
                <div class="conatct-info fix">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-center">
                            <div class="single-contact-info">
                                <div class="contact-icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="contact-text">
                                    <span>
                                        (951) 652315, 095100081, 
                                        <br>
                                        095100082, 0973207766
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <div class="single-contact-info res-xs2">
                                <div class="contact-icon">
                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                </div>
                                <div class="contact-text">
                                    <span>
                                        <a href="#">www.mwdtelecom.com</a>
                                            <br>
                                        <a href="#">info@mwdtechnologies.com</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <div class="single-contact-info">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="contact-text">
                                    <span>Building 10, Phase III<br> MICT Park, Hlaing
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-area">
            <div class="contact-map">
                <div id="hastech"></div>
            </div>
        </div>