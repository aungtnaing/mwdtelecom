	<div id="" class="faq-area ptb-100">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-5">
		                <div class="faq-left-sec">
                            <div class="faq-title-image fix">
                                <div class="faq-title">
                                    <h2>FAQ :</h2>
                                    <h3>Introduction</h3>
                                </div>
                                <div class="faq-image">
                                    <img src="img/banner/3.png" alt="">
                                </div>
                            </div>
		                    <div class="faq-wrapper fix">
                                <p>This document answers the most frequently asked questions related to Multiprotocol Label Switching (MPLS) from a beginner level.</p>
                                <p>.</p>
                            
                            </div>
		                </div>
		            </div>
		            <div class="col-lg-6 col-md-7">
                        <div class="panel-group" id="order-review" role="tablist" aria-multiselectable="true">   
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#order-review" href="#one">
                                            <span></span> What is Multi-Protocol Label Switching (MPLS)?
                                        </a>
                                    </h4>
                                </div>    
                                <div id="one" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">     
                                        <p>MPLS is a packet-forwarding technology which uses labels in order to make data forwarding decisions. With MPLS, the Layer 3 header analysis is done just once (when the packet enters the MPLS domain). Label inspection drives subsequent packet forwarding.</p>
                                        <span class="arrow"></span>
                                    </div>
                                </div>           
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#order-review" href="#two">
                                            <span></span> What is a label? What is the structure of the label?
                                        </a>
                                    </h4>
                                </div>    
                                <div id="two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">     
                                        <p>A label is a short, four-byte, fixed-length, locally-significant identifier which is used in order to identify a Forwarding Equivalence Class (FEC). The label which is put on a particular packet represents the FEC to which that packet is assigned.</p>
                                        <span class="arrow"></span>
                                    </div> 
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#order-review" href="#three">
                                            <span></span> Where will the label be imposed in a packet?
                                        </a>
                                    </h4>
                                </div>    
                                <div id="three" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">     
                                        <p>The label is imposed between the data link layer (Layer 2) header and network layer (Layer 3) header. The top of the label stack appears first in the packet, and the bottom appears last. The network layer packet immediately follows the last label in the label stack.</p>
                                        <span class="arrow"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
		            </div>
		        </div>
		    </div>
		</div>