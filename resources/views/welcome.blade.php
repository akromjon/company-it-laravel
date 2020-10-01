@extends('layouts.master')
@section('title')
<title></title>
@endsection
@section('content')

<!--Mobile contact-->
<div class="popup-modal1">
    <div class="modal" id="menu-popup">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="common-heading">
                        <h4 class="mt0 mb0">Write a Message</h4>
                    </div>
                    <button type="button" class="closes" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-block fdgn2 mt10 mb10">
                        <form action="#" method="post" name="feedback-form">
                            <div class="fieldsets row">
                                <div class="col-md-12"><input type="text" placeholder="Full Name" name="name"></div>
                                <div class="col-md-12"><input type="email" placeholder="Email Address" name="email"></div>
                                <div class="col-md-12"><input type="number" placeholder="Contact Number" name="phone"></div>
                                <div class="col-md-12"><input type="text" placeholder="Subject" name="subject"></div>
                                <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
                            </div>
                            <div class="fieldsets mt20 pb20">
                                <button type="submit" name="submit" class="lnk btn-main bg-btn" data-dismiss="modal">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Mobile contact-->
<!--End Header -->
<!--Start Hero-->
<section class="hero-section hero-creative-agenc2">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 v-center">
                    <div class="header-heading">
                        <h1 class="wow fadeInUp" data-wow-delay=".2s">Biz Bilan <span class="text-primary">Kelajakni Quring</span></h1>
                        <p class="wow fadeInUp" data-wow-delay=".4s">Agar sen bugun piyoda yurishni xohlamasang, ertaga yugurishga majbur bo'lasan.</p>
                        <a href="#" class="btn-main bg-btn7 lnk wow fadeInUp" data-wow-delay=".6s">Boshlash<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="img-design h-scl-">
                        <div class="imgac "> <img src="images/hero/creative-ag2a.jpg" alt="creative agnecy html template" class="ag-dg1 img-fluid h-scl-base"></div>
                        <div class="imgac h-scl-base"><img src="images/hero/creative-ag2b.jpg" alt="creative agnecy html template" class="ag-dg2 img-fluid "></div>
                        <div class="shpdez1 shpdzz"></div>
                        <div class="shpdez2 shpdzz"></div>
                        <div class="shpdez3 shpdzz"></div>
                        <div class="shpdez4 shpdzz"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Hero-->
<!--Start Service-->
<section class="dg-service2 posrtl pb80 pt80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading text-center">
                    <h2 class="mb20">Bizning Xizmatlar</h2>
                </div>
            </div>
        </div>
        <div class="row upset ovr-bg2 bd-hor">
            <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">
                        <div class="s-card-icon"><img src="images/icons/branding.svg" alt="service" class="img-fluid" /></div>
                        <h4>Social Media Marketing</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">
                        <div class="s-card-icon"><img src="images/icons/development.svg" alt="service" class="img-fluid" /></div>
                        <h4>Branding & Identity</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">
                        <div class="s-card-icon"><img src="images/icons/app.svg" alt="service" class="img-fluid" /></div>
                        <h4>Performance Marketing</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">
                        <div class="s-card-icon"><img src="images/icons/marketing.svg" alt="service" class="img-fluid" /></div>
                        <h4>Instagram Growth</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">
                        <div class="s-card-icon"><img src="images/icons/marketing.svg" alt="service" class="img-fluid" /></div>
                        <h4>Online Branding</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1.2s">
                <div class="s-block up-hor bd-hor-base">
                    <div class="nn-card-set">
                        <div class="s-card-icon"><img src="images/icons/marketing.svg" alt="service" class="img-fluid" /></div>
                        <h4>Video Marketing</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1s">
                    <p>O'z biznesingizni uchun <span>sayt</span> kerakmi?</p>
                    <a href="#" class="btn-main bg-btn7 lnk">Hoziroq Buyurtma Qilish<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service-->
<!--Start Portfolio-->
<section class="dg-portfolio-section pb80 pt80">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8">
                <div class="common-heading">
                    <h2 class="mb20">Oxirgi Ishl</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
        <div class="row mt60">
            <div class="col-lg-12 col-sm-12">
                <div class="porto-slide owl-carousel">
                    <div class="div-portfolio- row no-gutters">
                        <div class="div-item-image col-lg-6 text-center v-center">
                            <a href="#"><img src="images/portfolio/image-1.jpg" alt="portfolio" class="img-fluid" /> </a>
                        </div>
                        <div class="div-item-info col-lg-6 v-center">
                            <h3>Creative Android App</h3>
                            <div class="mt20">
                                <p class="itm-tag">ios, design</p>
                            </div>
                            <p class="mt20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#" class="btn-main bg-btn4 lnk mt30">View Case Study<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                    <div class="div-portfolio- row no-gutters">
                        <div class="div-item-image col-lg-6 text-center v-center">
                            <a href="#"><img src="images/portfolio/image-2.jpg" alt="portfolio" class="img-fluid" /> </a>
                        </div>
                        <div class="div-item-info col-lg-6 v-center">
                            <h3>Real Estate Brochure Design</h3>
                            <div class="mt20">
                                <p class="itm-tag">ios, design</p>
                            </div>
                            <p class="mt20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#" class="btn-main bg-btn4 lnk mt30">View Case Study<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Portfolio-->
<!--Start Clients-->

<!--End Clients-->
<!--Start Team-->
<section class="dg-testinomial-section  pb80 pt80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <h2 class="mb20">Our Team</h2>
                    <p class="mb30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
        <div class="single-slide owl-carousel mt60">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <div class="image-block upset h-scl-">
                        <div class="image-div h-scl-base"><img src="images/team/team-single.jpg" alt="team" class="img-fluid" /></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="full-image-card mt0">
                        <div class="info-text-block">
                            <h3><a href="#">Anna Rexia</a></h3>
                            <p>Company CTO</p>
                            <div class="social-media-profile">
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="otherinfo">
                            <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <div class="image-block upset">
                        <div class="image-div"><a href="#"><img src="images/team/team-single.jpg" alt="team" class="img-fluid" /></a></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="full-image-card mt0">
                        <div class="info-text-block">
                            <h3><a href="#">Anna Rexia</a></h3>
                            <p>Company CTO</p>
                            <div class="social-media-profile">
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="otherinfo">
                            <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Team-->
<!--start photo gallery-->
<div class="photosets- pb80 pt50">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mt30 h-scl-">
                <div class="img-ca2set h-scl-base"><img src="images/about/office-1.jpg" alt="companyname" class="img-fluid"></div>
            </div>
            <div class="col-lg-7 mt30 h-scl-">
                <div class="img-ca2set h-scl-base"><img src="images/about/office-2.jpg" alt="companyname" class="img-fluid"></div>
            </div>
            <div class="col-lg-7 mt30 h-scl-">
                <div class="img-ca2set h-scl-base"><img src="images/about/office-3.jpg" alt="companyname" class="img-fluid"></div>
            </div>
            <div class="col-lg-5 mt30 h-scl-">
                <div class="img-ca2set h-scl-base"><img src="images/about/office-4.jpg" alt="companyname" class="img-fluid"></div>
            </div>
        </div>
    </div>
</div>
<!--End photo gallery-->
<!--Start Testinomial-->
<section class="dg-testinomial-section pb80 pt80">
    <div class="container">
        <div class="row mt60">
            <div class="col-lg-6">
                <div class="common-heading text-l">
                    <h2 class="mb0">What our clients say about our design</h2>
                </div>
                <div class="owl-carousel testimonial-card-b mt60">
                    <div class="testimonial-card">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="clients-creative-pic pl25">
                    <div class="owl-dots" id="testimonials-avatar">
                        <button class="dot-c1 tcc1 owl-dot active"> <img alt="image" src="images/user-thumb/user1.jpg"></button>
                        <button class="dot-c1 tcc2 owl-dot"> <img alt="image" src="images/user-thumb/user2.jpg"></button>
                        <button class="dot-c1 tcc3 owl-dot"> <img alt="image" src="images/user-thumb/user3.jpg"></button>
                        <button class="dot-c1 tcc4 owl-dot"> <img alt="image" src="images/user-thumb/user4.jpg"></button>
                        <button class="dot-c1 tcc5 owl-dot"> <img alt="image" src="images/user-thumb/user5.jpg"></button>
                        <button class="dot-c1 tcc6 owl-dot"> <img alt="image" src="images/user-thumb/user1.jpg"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testinomial-->
<!--Start Blogs-->
<section class="blogs-section pb80 pt80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <h2 class="mb20">So'ngi Bloglar</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="#"><img src="images/blog/blog-dg-1.jpg" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Nodejs</a></span>
                            <span class="posted-on-">
                                <a href="#"><i class="fas fa-clock"></i> Sep 23, 2020</a>
                            </span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4><a href="#">Everything You Need To Know About Nodejs!</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="post-social">
                            <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <div class="ss-inline-share-content">
                                    <div class="ss-social-icons-container">
                                        <a href="javascript:void(0)">Shares</a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="#"><img src="images/blog/blog-dg-2.jpg" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Laravel</a></span>
                            <span class="posted-on-">
                                <a href="#"><i class="fas fa-clock"></i> Sep 24, 2020</a>
                            </span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4><a href="#">Exploring the Key Features of Laravel 7 Framework</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="post-social">
                            <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <div class="ss-inline-share-content">
                                    <div class="ss-social-icons-container">
                                        <a href="javascript:void(0)">Shares</a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="#"><img src="images/blog/blog-dg-3.jpg" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Mobile Application</a></span>
                            <span class="posted-on-">
                                <a href="#"><i class="fas fa-clock"></i> Sep 25, 2020</a>
                            </span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4><a href="#">Best Technology for Mobile Application Development</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="post-social">
                            <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <div class="ss-inline-share-content">
                                    <div class="ss-social-icons-container">
                                        <a href="javascript:void(0)">Shares</a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Blogs-->

@endsection