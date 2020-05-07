<!--business-talking-start-->
<section class="business-talking">
    <div class="container">
        <h2>Let’s Talk Business.</h2>
    </div>
</section>

<!-- Address -->
<div class="container">
    <section class="main-section contact" id="contact">
        <div class="row">
            <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                <div class="contact-info-box address clearfix">
                    <h3><i class=" icon-map-marker"></i>Address :</h3>
                    <span>Building 10, Phase III<br> MICT Park, Hlaing</span> </div>
                <div class="contact-info-box phone clearfix">
                    <h3><i class="fa-phone"></i>Phone :</h3>
                    <span> (951) 652315, 095100081, 095100082, 0973207766</span> </div>
                <div class="contact-info-box email clearfix">
                    <h3><i class="fa-pencil"></i>email :</h3>
                    <span>info@mwdtechnologies.com</span> </div>
               
                <ul class="social-link">
                    <li class="twitter"><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li class="facebook"><a href="https://web.facebook.com/MyanmarWorldD/"><i class="zmdi zmdi-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                
                <div class="form">
                    <form action="{{ route("contactus.store") }}" method="POST">

                    <div class="form-group">
                        <input name="name" type="text" value="" placeholder="Your Name*" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input name="email" type="text" value="" placeholder="Your E-mail*" class="form-control" />
                    </div>
                    <div class="form-group"> 
                        <input name="phone" type="text" value="" placeholder="Your Phone*" class="form-control" />
                    </div>
                    <textarea name="messagecontent" class="form-control" placeholder="Your Message *" rows="5"></textarea>
                    <button class="btn btn-raised btn-primary">send message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>