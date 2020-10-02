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
@endsection
