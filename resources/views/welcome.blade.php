@extends('layouts.rezaTemplate')

@section('homebanner')
<div id="tg-homebanner" class="tg-homebanner tg-haslayout">
    <figure class="tg-bannerbg">
        <img src="images/rezaTemplate/banner/img-01.jpg" alt="image description">
    </figure>
    <div class="tg-bannercontent">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form class="tg-formtheme tg-formsearch">
                        <div class="tg-sectionhead">
                            <div class="tg-sectiontitle">
                                <h1>در خصوص مهاجرت کمک بگیرید.</h1>
                            </div>
                        </div>
                        <fieldset>

                            <input type="text" name="category" class="form-control" placeholder="keywords...">
                            <button type="submit" class="tg-btnformsearch"><i class="fa fa-search"></i></button>
                        </fieldset>
                        <div class="tg-searchbulder">
                            <div id="tg-categoryslider" class="tg-categoryslider tg-category owl-carousel owl-theme">

                                <span data-id="hospitalscategory" class="item tg-radio">
											<input type="radio" id="usa" name="maincategory" value="usa">
											<label for="usa">
												<span><img class="flag" src="images/rezaTemplate/flags/png/usa.png" alt="image description"></span>
												<span>آمریکا</span>
											</label>
										</span>

                                <span data-id="spascategory" class="item tg-radio">
											<input type="radio" id="newzealand" name="maincategory" value="newzealand">
											<label for="newzealand">
												<span><img class="flag" src="images/rezaTemplate/flags/png/new-zealand.png" alt="image description"></span>
												<span>نیوزیلند</span>
											</label>
										</span>
                                <span data-id="spascategory" class="item tg-radio">
											<input type="radio" id="australia" name="maincategory" value="australia">
											<label for="australia">
												<span><img class="flag" src="images/rezaTemplate/flags/png/australia.png" alt="image description"></span>
												<span>استرالیا</span>
											</label>
										</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('main')
<main id="tg-main" class="tg-main tg-haslayout" >
    <!--************************************
            Features Start
    *************************************-->
    <section class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-sectionhead">
                        <div class="tg-sectiontitle">
                            <h2>لورم اپیسوم </h2>
                        </div>
                    </div>
                </div>
                <div class="tg-features">
                    <div class="col-sm-4 col-xs-12">
                        <div class="tg-feature">
                            <figure class="tg-featureicon"><img src="images/rezaTemplate/icons/icon-02.png" alt="image description"></figure>
                            <h3><a href="#">در خصوص مهاجرت کمک بگیرید</a></h3>
                            <div class="tg-description">
                                <p>در این بخش شما بدون نیاز به رفتن از شهری به شهر دیگر یا حتی از شهرهای بسیار دور به مشاورین دسترسی دارید</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="tg-feature">
                            <figure class="tg-featureicon"><img src="images/rezaTemplate/icons/icon-03.png" alt="image description"></figure>
                            <h3><a href="#">رزرو وقت مشاوره</a></h3>
                            <div class="tg-description">
                                <p>شما می‌توانید در زمینه‌های مختلف و در سطوح مختلف از دانش و تخصص، مشاوره بگیرید</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="tg-feature">
                            <figure class="tg-featureicon"><img src="images/rezaTemplate/icons/icon-04.png" alt="image description"></figure>
                            <h3><a href="#">کنترل کیفیت</a></h3>
                            <div class="tg-description">
                                <p>ما مشاورین را بر اساس نظرسنجی از مشتریان و نظرات تخصصی رتبه‌بندی می‌کنیم و بهترین مشاوران را مشخص می‌کنیم و مشاورین با اثربخشی کمتر را از سیستم حذف می‌کنیم</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Features End
    *************************************-->
    <!--************************************
            Statistics Start
    *************************************-->
    <section class="tg-main-section tg-haslayout tg-parallaximg tg-imgoverlap" data-bleed="-17" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/rezaTemplate/parallax/bgparallax-02.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="tg-statisticscounters">
                        <div class="row">
                            <div class="tg-counter">
                                <figure><img src="images/rezaTemplate/icons/icon-05.png" alt="image description"></figure>
                                <h2><span data-from="0" data-to="36012" data-speed="8000" data-refresh-interval="50">36012</span></h2>
                                <h3>مشتریان راضی</h3>
                            </div>
                            <div class="tg-counter">
                                <figure><img src="images/rezaTemplate/icons/icon-06.png" alt="image description"></figure>
                                <h2><span data-from="0" data-to="21067" data-speed="8000" data-refresh-interval="50">21067</span></h2>
                                <h3>اعضای فعال</h3>
                            </div>
                            <div class="tg-counter">
                                <figure><img src="images/rezaTemplate/icons/icon-07.png" alt="image description"></figure>
                                <h2><span data-from="0" data-to="6954" data-speed="8000" data-refresh-interval="50">6954</span></h2>
                                <h3>اعضای جدید</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <figure class="tg-sectionimg"><img src="images/rezaTemplate/img-04.png" alt="image description"></figure>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Statistics End
    *************************************-->
    <!--************************************
            Featured DiretPost Start
    *************************************-->
    <section class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-sectionhead">
                        <div class="tg-sectiontitle">
                            <h2>خدمات ما</h2>
                        </div>
                    </div>
                    <ul id="tg-filterbalenav" class="tg-filterbalenav option-set">
                        <li><a class="tg-active" data-filter="*" href="javascript:void(0);">همه</a></li>
                        <li><a data-filter=".doctors" href="javascript:void(0);">کانادا</a></li>
                        <li><a data-filter=".hospitals" href="javascript:void(0);">استرالیا</a></li>
                        <li><a data-filter=".spas" href="javascript:void(0);">آمریکا</a></li>
                        <li><a data-filter=".pharmacies" href="javascript:void(0);">نیوزیلند</a></li>
                    </ul>
                    <div id="filter-masonry" class="tg-featureddirectposts tg-searchresult tg-filtermasonry">
                        <div class="tg-directpost doctors">
                            <figure class="tg-directpostimg">
                                <a href="#"><img src="images/rezaTemplate/directpost/img-01.jpg" alt="image description"></a>
                                <figcaption>
                                    <a class="tg-usericon tg-iconfeatured" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-bolt"></i>
                                            <span>featured</span>
                                        </em>
                                    </a>
                                    <a class="tg-usericon tg-iconvarified" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-shield"></i>
                                            <span>مورد تایید</span>
                                        </em>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="tg-directinfo">
                                <div class="tg-leftarea">
                                    <div class="tg-directposthead">
                                        <h3><a href="#">Dr. Steve Northrop</a></h3>
                                        <div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
                                    </div>
                                    <ul class="tg-contactinfo">
                                        <li><a href="#"><i class="fa fa-location-arrow"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
                                        <li><a href="#"><i class="fa fa-phone"></i><span>+4 235 856843</span></a></li>
                                    </ul>
                                </div>
                                <div class="tg-rightarea">
                                    <div class="tg-bookappoinment">
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>99%<span>(1009 votes)</span></a>
                                        <button type="button" class="tg-btn" data-toggle="modal" data-target="#tg-appointmentlightbox">Book Appointment</button>
                                        <ul class="tg-metadata">
                                            <li><span class="tg-stars"><span></span></span></li>
                                            <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-directpost hospitals">
                            <figure class="tg-directpostimg">
                                <a href="#"><img src="images/rezaTemplate/directpost/img-02.jpg" alt="image description"></a>
                                <figcaption>
                                    <a class="tg-usericon tg-iconfeatured" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-bolt"></i>
                                            <span>featured</span>
                                        </em>
                                    </a>
                                    <a class="tg-usericon tg-iconvarified" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-shield"></i>
                                            <span>varified</span>
                                        </em>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="tg-directinfo">
                                <div class="tg-leftarea">
                                    <div class="tg-directposthead">
                                        <h3><a href="#">Dr. Steve Northrop</a></h3>
                                        <div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
                                    </div>
                                    <ul class="tg-contactinfo">
                                        <li><a href="#"><i class="fa fa-location-arrow"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
                                        <li><a href="#"><i class="fa fa-phone"></i><span>+4 235 856843</span></a></li>
                                    </ul>
                                </div>
                                <div class="tg-rightarea">
                                    <div class="tg-bookappoinment">
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>99%<span>(1009 votes)</span></a>
                                        <button type="button" class="tg-btn" data-toggle="modal" data-target="#tg-appointmentlightbox">Book Appointment</button>
                                        <ul class="tg-metadata">
                                            <li><span class="tg-stars"><span></span></span></li>
                                            <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-directpost spas">
                            <figure class="tg-directpostimg">
                                <a href="#"><img src="images/rezaTemplate/directpost/img-03.jpg" alt="image description"></a>
                                <figcaption>
                                    <a class="tg-usericon tg-iconfeatured" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-bolt"></i>
                                            <span>featured</span>
                                        </em>
                                    </a>
                                    <a class="tg-usericon tg-iconvarified" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-shield"></i>
                                            <span>varified</span>
                                        </em>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="tg-directinfo">
                                <div class="tg-leftarea">
                                    <div class="tg-directposthead">
                                        <h3><a href="#">Dr. Steve Northrop</a></h3>
                                        <div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
                                    </div>
                                    <ul class="tg-contactinfo">
                                        <li><a href="#"><i class="fa fa-location-arrow"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
                                        <li><a href="#"><i class="fa fa-phone"></i><span>+4 235 856843</span></a></li>
                                    </ul>
                                </div>
                                <div class="tg-rightarea">
                                    <div class="tg-bookappoinment">
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>99%<span>(1009 votes)</span></a>
                                        <button type="button" class="tg-btn">Available on Call</button>
                                        <ul class="tg-metadata">
                                            <li><span class="tg-stars"><span></span></span></li>
                                            <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-directpost pharmacies">
                            <figure class="tg-directpostimg">
                                <a href="#"><img src="images/rezaTemplate/directpost/img-04.jpg" alt="image description"></a>
                                <figcaption>
                                    <a class="tg-usericon tg-iconfeatured" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-bolt"></i>
                                            <span>featured</span>
                                        </em>
                                    </a>
                                    <a class="tg-usericon tg-iconvarified" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-shield"></i>
                                            <span>varified</span>
                                        </em>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="tg-directinfo">
                                <div class="tg-leftarea">
                                    <div class="tg-directposthead">
                                        <h3><a href="#">Dr. Steve Northrop</a></h3>
                                        <div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
                                    </div>
                                    <ul class="tg-contactinfo">
                                        <li><a href="#"><i class="fa fa-location-arrow"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
                                        <li><a href="#"><i class="fa fa-phone"></i><span>+4 235 856843</span></a></li>
                                    </ul>
                                </div>
                                <div class="tg-rightarea">
                                        <div class="tg-bookappoinment">
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>99%<span>(1009 votes)</span></a>
                                        <button type="button" class="tg-btn" data-toggle="modal" data-target="#tg-appointmentlightbox">Book Appointment</button>
                                        <ul class="tg-metadata">
                                            <li><span class="tg-stars"><span></span></span></li>
                                            <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-directpost lab">
                            <figure class="tg-directpostimg">
                                <a href="#"><img src="images/rezaTemplate/directpost/img-05.jpg" alt="image description"></a>
                                <figcaption>
                                    <a class="tg-usericon tg-iconfeatured" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-bolt"></i>
                                            <span>featured</span>
                                        </em>
                                    </a>
                                    <a class="tg-usericon tg-iconvarified" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-shield"></i>
                                            <span>varified</span>
                                        </em>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="tg-directinfo">
                                <div class="tg-leftarea">
                                    <div class="tg-directposthead">
                                        <h3><a href="#">Dr. Steve Northrop</a></h3>
                                        <div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
                                    </div>
                                    <ul class="tg-contactinfo">
                                        <li><a href="#"><i class="fa fa-location-arrow"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
                                        <li><a href="#"><i class="fa fa-phone"></i><span>+4 235 856843</span></a></li>
                                    </ul>
                                </div>
                                <div class="tg-rightarea">
                                    <div class="tg-bookappoinment">
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>99%<span>(1009 votes)</span></a>
                                        <button type="button" class="tg-btn">Available on Call</button>
                                        <ul class="tg-metadata">
                                            <li><span class="tg-stars"><span></span></span></li>
                                            <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-directpost fitnesscenters">
                            <figure class="tg-directpostimg">
                                <a href="#"><img src="images/rezaTemplate/directpost/img-01.jpg" alt="image description"></a>
                                <figcaption>
                                    <a class="tg-usericon tg-iconfeatured" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-bolt"></i>
                                            <span>featured</span>
                                        </em>
                                    </a>
                                    <a class="tg-usericon tg-iconvarified" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-shield"></i>
                                            <span>varified</span>
                                        </em>
                                    </a>
                                </figcaption>
                            </figure>
                            <div class="tg-directinfo">
                                <div class="tg-leftarea">
                                    <div class="tg-directposthead">
                                        <h3><a href="#">Dr. Steve Northrop</a></h3>
                                        <div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
                                    </div>
                                    <ul class="tg-contactinfo">
                                        <li><a href="#"><i class="fa fa-location-arrow"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
                                        <li><a href="#"><i class="fa fa-phone"></i><span>+4 235 856843</span></a></li>
                                    </ul>
                                </div>
                                <div class="tg-rightarea">
                                    <div class="tg-bookappoinment">
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>99%<span>(1009 votes)</span></a>
                                        <button type="button" class="tg-btn" data-toggle="modal" data-target="#tg-appointmentlightbox">Book Appointment</button>
                                        <ul class="tg-metadata">
                                            <li><span class="tg-stars"><span></span></span></li>
                                            <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Featured DiretPost End
    *************************************-->
    <!--************************************
            Student Review Start
    *************************************-->
    <section class="tg-main-section tg-haslayout tg-parallaximg" data-position-x="center" data-position-y="center" data-appear-top-offset="600" data-parallax="scroll" data-bleed="0" data-image-src="images/rezaTemplate/parallax/bgparallax-02.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="tg-sectionhead">
                        <div class="tg-sectiontitle">
                            <h2>Valuable Feedback</h2>
                        </div>
                    </div>
                    <div id="tg-feedbackslider" class="tg-feedbackslider tg-feedback owl-carousel owl-theme">
                        <div class="item">
                            <div class="tg-feedbackcontent">
                                <blockquote>
                                    <q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
                                </blockquote>
                                <h3>Dr. Steve Northrop</h3>
                                <ul class="tg-metadata">
                                    <li><span>MDS - Paedodontics &amp; Preventive Dentistry </span></li>
                                    <li><span class="tg-tooltip tg-stars" data-toggle="tooltip" data-placement="top right" title="4.85 average based on 423 ratings"><span></span></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-feedbackcontent">
                                <blockquote>
                                    <q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
                                </blockquote>
                                <h3>Lawrence Troutman</h3>
                                <ul class="tg-metadata">
                                    <li><span>MDS - Paedodontics &amp; Preventive Dentistry </span></li>
                                    <li><span class="tg-tooltip tg-stars" data-toggle="tooltip" data-placement="top right" title="4.85 average based on 423 ratings"><span></span></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-feedbackcontent">
                                <blockquote>
                                    <q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
                                </blockquote>
                                <h3>Ahmad Carstensen</h3>
                                <ul class="tg-metadata">
                                    <li><span>MDS - Paedodontics &amp; Preventive Dentistry </span></li>
                                    <li><span class="tg-tooltip tg-stars" data-toggle="tooltip" data-placement="top right" title="4.85 average based on 423 ratings"><span></span></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-feedbackcontent">
                                <blockquote>
                                    <q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
                                </blockquote>
                                <h3>Jenna Strope</h3>
                                <ul class="tg-metadata">
                                    <li><span>MDS - Paedodontics &amp; Preventive Dentistry </span></li>
                                    <li><span class="tg-tooltip tg-stars" data-toggle="tooltip" data-placement="top right" title="4.85 average based on 423 ratings"><span></span></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-feedbackcontent">
                                <blockquote>
                                    <q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
                                </blockquote>
                                <h3>Dolores Mcreynolds</h3>
                                <ul class="tg-metadata">
                                    <li><span>MDS - Paedodontics &amp; Preventive Dentistry </span></li>
                                    <li><span class="tg-tooltip tg-stars" data-toggle="tooltip" data-placement="top right" title="4.85 average based on 423 ratings"><span></span></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-feedbackcontent">
                                <blockquote>
                                    <q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
                                </blockquote>
                                <h3>Dustin Mckillop</h3>
                                <ul class="tg-metadata">
                                    <li><span>MDS - Paedodontics &amp; Preventive Dentistry </span></li>
                                    <li><span class="tg-tooltip tg-stars" data-toggle="tooltip" data-placement="top right" title="4.85 average based on 423 ratings"><span></span></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="tg-reviewerdpslider" class="tg-reviewerdpslider tg-reviewerdp owl-carousel owl-theme">
                        <div class="item">
                            <figure><img src="images/rezaTemplate/thumbnails/img-01.jpg" alt="image description"></figure>
                        </div>
                        <div class="item">
                            <figure><img src="images/rezaTemplate/thumbnails/img-02.jpg" alt="image description"></figure>
                        </div>
                        <div class="item">
                            <figure><img src="images/rezaTemplate/thumbnails/img-03.jpg" alt="image description"></figure>
                        </div>
                        <div class="item">
                            <figure><img src="images/rezaTemplate/thumbnails/img-04.jpg" alt="image description"></figure>
                        </div>
                        <div class="item">
                            <figure><img src="images/rezaTemplate/thumbnails/img-05.jpg" alt="image description"></figure>
                        </div>
                        <div class="item">
                            <figure><img src="images/rezaTemplate/thumbnails/img-06.jpg" alt="image description"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Student Review End
    *************************************-->
    <!--************************************
            Trusted By Many Start
    *************************************-->
    <section class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="tg-trustedbymany">
                        <div class="tg-sectionhead">
                            <div class="tg-sectiontitle">
                                <h2>Trusted By Many</h2>
                            </div>
                        </div>
                        <div id="tg-brandsslider" class="tg-brandsslider tg-brands">
                            <div class="item">
                                <figure><a href="#"><img src="images/rezaTemplate/brands/img-01.png" alt="image description"></a></figure>
                                <figure><a href="#"><img src="images/rezaTemplate/brands/img-02.png" alt="image description"></a></figure>
                                <figure><a href="#"><img src="images/rezaTemplate/brands/img-03.png" alt="image description"></a></figure>
                                <figure><a href="#"><img src="images/rezaTemplate/brands/img-04.png" alt="image description"></a></figure>
                            </div>
                            <div class="item">
                                <figure><a href="#"><img src="images/rezaTemplate/brands/img-01.png" alt="image description"></a></figure>
                                <figure><a href="#"><img src="images/rezaTemplate/brands/img-02.png" alt="image description"></a></figure>
                                <figure><a href="#"><img src="images/rezaTemplate/brands/img-03.png" alt="image description"></a></figure>
                                <figure><a href="#"><img src="images/rezaTemplate/brands/img-04.png" alt="image description"></a></figure>
                            </div>
                            <div class="item">
                                <figure><a href="#"><img src="images/rezaTemplate/brands/img-01.png" alt="image description"></a></figure>
                                <figure><a href="#"><img src="images/rezaTemplate/brands/img-02.png" alt="image description"></a></figure>
                                <figure><a href="#"><img src="images/rezaTemplate/brands/img-03.png" alt="image description"></a></figure>
                                <figure><a href="#"><img src="images/rezaTemplate/brands/img-04.png" alt="image description"></a></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Trusted By Many Start
    *************************************-->
    <!--************************************
            Register Start
    *************************************-->
    <section class="tg-main-section tg-haslayout tg-parallaximg" data-position-x="center" data-position-y="center" data-appear-top-offset="600" data-parallax="scroll" data-bleed="0" data-image-src="images/rezaTemplate/parallax/bgparallax-02.jpg">
        <div class="container">
            <div class="row">
                <div class="tg-freeregistration">
                    <div class="tg-regleftarea">
                        <h2>Register For Free!</h2>
                        <div class="tg-description"><p>Join the thousands of people who have changed their way of life with immigration now.</p></div>
                    </div>
                    <div class="tg-regrightarea">
                        <a class="tg-btn" href="javascript:void(0);">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Register Start
    *************************************-->
    <!--************************************
            News Start
    *************************************-->
    <section class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-newstrusted">
                    <div class="tg-sectionhead">
                        <div class="tg-sectiontitle">
                            <h2>Latest News</h2>
                        </div>
                    </div>
                    <div class="tg-latestnews">
                        <div class="col-sm-4">
                            <article class="tg-post">
                                <figure class="tg-postimg"><a href="#"><img src="images/rezaTemplate/post/img-01.jpg" alt="image description"></a></figure>
                                <div class="tg-postcontent">
                                    <time class="tg-postdate" datetime="2011-10-10">June <span>27</span></time>
                                    <div class="tg-posttitle">
                                        <h3><a href="#">Always Take Right Decision</a></h3>
                                    </div>
                                    <ul class="tg-metadata">
                                        <li class="my-tg-metadata">
                                            <em>Posted By: </em>
                                            <a href="#">Pricilla Nader</a>
                                        </li>
                                    </ul>
                                    <div class="tg-description"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article class="tg-post">
                                <figure class="tg-postimg"><a href="#"><img src="images/rezaTemplate/post/img-02.jpg" alt="image description"></a></figure>
                                <div class="tg-postcontent">
                                    <time class="tg-postdate" datetime="2011-10-10">June <span>27</span></time>
                                    <div class="tg-posttitle">
                                        <h3><a href="#">Always Take Right Decision</a></h3>
                                    </div>
                                    <ul class="tg-metadata">
                                        <li class="my-tg-metadata">
                                            <em>Posted By: </em>
                                            <a href="#">Pricilla Nader</a>
                                        </li>
                                    </ul>
                                    <div class="tg-description"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article class="tg-post">
                                <figure class="tg-postimg"><a href="#"><img src="images/rezaTemplate/post/img-03.jpg" alt="image description"></a></figure>
                                <div class="tg-postcontent">
                                    <time class="tg-postdate" datetime="2011-10-10">June <span>27</span></time>
                                    <div class="tg-posttitle">
                                        <h3><a href="#">Always Take Right Decision</a></h3>
                                    </div>
                                    <ul class="tg-metadata">
                                        <li class="my-tg-metadata">
                                            <em>Posted By: </em>
                                            <a href="#">Pricilla Nader</a>
                                        </li>
                                    </ul>
                                    <div class="tg-description"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            News & Trusted End
    *************************************-->
</main>
@endsection