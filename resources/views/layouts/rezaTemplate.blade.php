<!doctype html>
@php

$locale = session()->get('locale');
//we have $user object accessible here
@endphp


<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>اهورا | فهرست مشاورین و وکلای مهاجرت</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/jquery.countdown.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/customScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/transitions.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/rezaTemplate/rtl.css')}}">
    <script src="{{ asset('js/rezaTemplate/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body class="tg-home tg-login">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Preloader Start
*************************************-->
<div class="preloader-outer">
    <div class="pin"></div>
    <div class="pulse"></div>
</div>
<!--************************************
        Preloader End
*************************************-->

<!--************************************
        Wrapper Start
*************************************-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <!--************************************
            Header Start
    *************************************-->
    <header id="tg-header" class="tg-header tg-haslayout">
        <div class="tg-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <span class="tg-quickadvice">مشاوره سریع بگیرید : <strong>(+1) 236 999 78 78</strong></span>
                        <ul class="tg-contactinfo">
                            <li><a href="#">hi@ahouraa.com</a></li>
                            <li><address>North Vancouver, BC, Canada</address></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <strong class="tg-logo">
                        <a href="index.html"><img src="{{asset('images/rezaTemplate/logo.png')}}" alt="image description"></a>
                    </strong>
                    <div class="tg-navigationarea">
                        <nav id="tg-nav" class="tg-nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="tg-navigation" class="tg-navigation collapse navbar-collapse">
                                <ul>
                                    <li class="tg-hasdropdown">
                                        <a>Language <span class="caret"></span>
                                            @switch($locale)
                                                @case('fa')
                                                <img src="{{asset('images/rezaTemplate/flags/png/iran.png')}}" width="30px" height="20x">  فارسی
                                                @break
                                                @default
                                                <img src="{{asset('images/rezaTemplate/flags/png/usa.png')}}" width="30px" height="20x"> English
                                            @endswitch
                                        </a>
                                        <ul class="tg-dropdownmenu">
                                            <a href="lang/en"><img src="{{asset('images/rezaTemplate/flags/png/usa.png')}}" width="30px" height="20x"> English</a>
                                            <a href="lang/fa"><img src="{{asset('images/rezaTemplate/flags/png/iran.png')}}" width="30px" height="20x"> فارسی </a>
                                        </ul>
                                    </li>
                                    <li><a href="aboutus.html">درباره ما</a></li>
                                    <li><a href="how-its-works.html">سایت چگونه کار میکند </a></li>
                                    @if(empty($user))
                                        <li><a href="/register"> عضو شوید ! </a></li>
                                        <li><a href="/login"> وارد شوید ! </a></li>
                                    @else
                                        <li><span> سلام {{$user->name}}</span><a href="/customer/profile">  تکمیل پروفایل </a></li>

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    @endif
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->
    <!--************************************
            Home Banner Start
    *************************************-->
    @yield('homebanner')
    <!--************************************
            Home Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
   @yield('main')
    <!--************************************
            Main End
    *************************************-->
    <!--************************************
            Footer Start
    *************************************-->
    <footer id="tg-footer" class="tg-footer tg-haslayout">
        <div class="tg-subscribe">
            <div class="container">
                <div class="row">
                    <div class="tg-fcols">
                        <div class="col-sm-3">
                            <div class="tg-subscribetitle">
                                <h3>Signup For Latest Updates and News</h3>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <form class="tg-formtheme tg-formsubscribe">
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="form-group"><button class="tg-btn">Register Now</button></div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-quicklinks">
            <div class="container">
                <div class="row">
                    <div class="tg-fcols">
                        <div class="tg-fcol tg-latestlistings">
                            <div class="tg-title">
                                <h3>Latest Listings</h3>
                            </div>
                            <ul>
                                <li>
                                    <figure class="tg-authordp">
                                        <img src="{{asset('images/rezaTemplate/directpost/img-08.jpg')}}" alt="image description">
                                    </figure>
                                    <div class="tg-directposthead">
                                        <h3><a href="#">Dr. Steve Northrop</a></h3>
                                        <div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
                                    </div>
                                </li>
                                <li>
                                    <figure class="tg-authordp">
                                        <img src="{{asset('images/rezaTemplate/directpost/img-09.jpg')}}" alt="image description">
                                    </figure>
                                    <div class="tg-directposthead">
                                        <h3><a href="#">Dr. Steve Northrop</a></h3>
                                        <div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
                                    </div>
                                </li>
                                <li>
                                    <figure class="tg-authordp">
                                        <img src="{{asset('images/rezaTemplate/directpost/img-10.jpg')}}" alt="image description">
                                    </figure>
                                    <div class="tg-directposthead">
                                        <h3><a href="#">Dr. Steve Northrop</a></h3>
                                        <div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
                                    </div>
                                </li>
                            </ul>
                            <a class="tg-btnviewmore" href="javascript:void(0);">View All <i class="fa fa-angle-double-right"></i></a>
                        </div>
                        <div class="tg-fcol tg-specialities">
                            <div class="tg-title">
                                <h3>Top Specialities</h3>
                            </div>
                            <ul>
                                <li><a href="#">Arnos Grove</a></li>
                                <li><a href="#">Dalston</a></li>
                                <li><a href="#">Balham</a></li>
                                <li><a href="#">Denmark Hill</a></li>
                                <li><a href="#">Barkingside</a></li>
                                <li><a href="#">Derry Downs</a></li>
                                <li><a href="#">Barnes Cray</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">East Bedfont</a></li>
                                <li><a href="#">Camden Town</a></li>
                                <li><a href="#">Eden Park</a></li>
                                <li><a href="#">Canonbury</a></li>
                                <li><a href="#">View All</a></li>
                            </ul>
                        </div>

                        <div class="tg-fcol">
                            <strong class="tg-logo">
                                <a href="index.html"><img src="{{asset('images/rezaTemplate/logo.png')}}" alt="image description"></a>
                            </strong>
                            <ul class="tg-contactinfo">
                                <li><a href="#"><i class="fa fa-location-arrow"></i><address>North Vancouver, BC, CANADA</address></a></li>
                                <li><a href="#"><i class="fa fa-phone"></i><span class="mynumber">+1 236 999 78 78</span></a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i><span>info@ahouraa.com</span></a></li>
                                <li><a href="#"><i class="fa fa-fax"></i><span class="mynumber">+1 778 837 84 83</span></a></li>
                            </ul>
                            <ul class="tg-socialsharewithtext">
                                <li class="tg-facebook">
                                    <a class="tg-roundicontext" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-facebook-f"></i>
                                            <span>share on facebook</span>
                                        </em>
                                    </a>
                                </li>
                                <li class="tg-twitter">
                                    <a class="tg-roundicontext" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-twitter"></i>
                                            <span>share on twitter</span>
                                        </em>
                                    </a>
                                </li>
                                <li class="tg-linkedin">
                                    <a class="tg-roundicontext" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-linkedin"></i>
                                            <span>share on linkdin</span>
                                        </em>
                                    </a>
                                </li>
                                <li class="tg-googleplus">
                                    <a class="tg-roundicontext" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-google-plus"></i>
                                            <span>share on googl+</span>
                                        </em>
                                    </a>
                                </li>
                                <li class="tg-rss">
                                    <a class="tg-roundicontext" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-rss"></i>
                                            <span>share on RSS</span>
                                        </em>
                                    </a>
                                </li>
                                <li class="tg-youtube">
                                    <a class="tg-roundicontext" href="#">
                                        <em class="tg-usericonholder">
                                            <i class="fa fa-youtube-play"></i>
                                            <span>share on YouTube</span>
                                        </em>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-footerbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <nav id="tg-footernav" class="tg-footernav">
                            <ul>
                                <li class="tg-active"><a href="">Home</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="">How It Works?</a></li>
                                <li><a href="">Contact us</a></li>
                            </ul>
                        </nav>
                        <span class="tg-copyright">2017 All Rights Reserved &copy; <a href="#">Ahouraa</a></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--************************************
            Footer End
    *************************************-->
</div>
<!--************************************
        Wrapper End
*************************************-->
<!--************************************
            Light Box Start
*************************************-->
<div class="modal tg-modal tg-appointmentlightbox fade" id="tg-appointmentlightbox" tabindex="-1" role="dialog">
    <div class="modal-dialog tg-modaldialog">
        <div class="modal-content tg-modalcontent">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            <h2>Book Your Appointment!</h2>
            <form class="tg-formbookappointment">
                <ul class="tg-formprogressbar">
                    <li class="tg-active"><span>Request Appointment</span></li>
                    <li><span>Verify Your Password</span></li>
                    <li><span>Verify Code</span></li>
                    <li><span>Complete</span></li>
                </ul>
                <fieldset class="tg-formstepone tg-current">
                    <h3>What Would You Like To See The Doctor For?</h3>
                    <div class="row tg-rowmargin">
                        <div class="col-sm-4 col-xs-12 tg-columnpadding">
                            <div class="form-group">
                                <div class="tg-patienttype">
                                    <strong>Patient is:*</strong>
                                    <span class="tg-radio">
											<input type="radio" id="myself" name="myself" value="Myself">
											<label for="myself">Myself</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="someoneelse" name="someoneelse" value="Someone Else">
											<label for="someoneelse">Someone Else</label>
										</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 tg-columnpadding">
                            <div class="form-group">
                                <input type="text" name="text" class="form-control" placeholder="His/Her Name">
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 tg-columnpadding">
                            <div class="form-group">
                                <div class="tg-select">
                                    <select>
                                        <option value="">His/Her Relation</option>
                                        <option value="">His/Her Relation</option>
                                        <option value="">His/Her Relation</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 tg-columnpadding">
                            <div class="form-group">
                                <div class="tg-select">
                                    <select>
                                        <option value="">Where to visit:*</option>
                                        <option value="">Where to visit:*</option>
                                        <option value="">Where to visit:*</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 tg-columnpadding">
                            <div class="form-group">
                                <div class="tg-select">
                                    <select>
                                        <option value="">Appointment Type:*</option>
                                        <option value="">Appointment Type:*</option>
                                        <option value="">Appointment Type:*</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 tg-columnpadding">
                            <div class="form-group">
                                <div class="tg-select">
                                    <select>
                                        <option value="">Reason for visit:*</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 tg-columnpadding">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Comments:"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 tg-columnpadding">
                            <div class="tg-timeslothead">
                                <h3>Select Best Time To See The Doctor</h3>
                                <span class="tg-checkbox">
										<input type="checkbox" id="firstavailableslot" name="firstavailableslot" value="">
										<label for="firstavailableslot">Appoint First Available Time</label>
									</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 tg-columnpadding">
                            <div class="tg-dateandtimeslots">
                                <div class="tg-datebox">
                                    <time datetime="2011-10-10">June 27, Wednesday</time>
                                    <span>11 Available</span>
                                    <i class="fa fa-calendar-check-o"></i>
                                </div>
                                <div class="tg-timeslots">
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot1" name="firstavailableslot" value="09:00" disabled>
											<label for="firstavailableslot1">09:00</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot2" name="firstavailableslot" value="09:30" disabled>
											<label for="firstavailableslot2">09:30</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot3" name="firstavailableslot" value="10:00" disabled>
											<label for="firstavailableslot3">10:00</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot4" name="firstavailableslot" value="10:30" disabled>
											<label for="firstavailableslot4">10:30</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot5" name="firstavailableslot" value="11:00">
											<label for="firstavailableslot5">11:00</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot6" name="firstavailableslot" value="11:30">
											<label for="firstavailableslot6">11:30</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot7" name="firstavailableslot" value="12:00">
											<label for="firstavailableslot7">12:00</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot8" name="firstavailableslot" value="12:30">
											<label for="firstavailableslot8">12:30</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot9" name="firstavailableslot" value="01:00">
											<label for="firstavailableslot9">01:00</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot10" name="firstavailableslot" value="01:30">
											<label for="firstavailableslot10">01:30</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot11" name="firstavailableslot" value="02:00">
											<label for="firstavailableslot11">02:00</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot12" name="firstavailableslot" value="02:30">
											<label for="firstavailableslot12">02:30</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot13" name="firstavailableslot" value="03:00">
											<label for="firstavailableslot13">03:00</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot14" name="firstavailableslot" value="03:30">
											<label for="firstavailableslot14">03:30</label>
										</span>
                                    <span class="tg-radio">
											<input type="radio" id="firstavailableslot15" name="firstavailableslot" value="04:00">
											<label for="firstavailableslot15">04:00</label>
										</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tg-btnbox">
                        <button type="button" class="tg-btn tg-btnnext">Next Step</button>
                    </div>
                </fieldset>
                <fieldset class="tg-formsteptwo">
                    <h3>Verify Is That You?</h3>
                    <div class="row tg-rowmargin">
                        <div class="col-sm-6 tg-columnpadding">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password*">
                            </div>
                        </div>
                        <div class="col-sm-6 tg-columnpadding">
                            <div class="form-group">
                                <input type="password" name="retypepassword" class="form-control" placeholder="Retype Password*">
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12">
								<span class="tg-checkbox">
									<input type="checkbox" id="remember" name="remember" value="remember">
									<label for="remember">Trust This Computer For Next Time</label>
								</span>
                        </div>
                    </div>
                    <div class="tg-btnbox">
                        <button type="button" class="tg-btn tg-btnnext">Next Step</button>
                        <button type="button" class="tg-btn tg-btnprevious">previous Step</button>
                    </div>
                </fieldset>
                <fieldset class="tg-formstepthree">
                    <h3>Enter Authentication Code</h3>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="tg-description">
                                <p>Consectetur adipisicing elit sed do eiusmod tempor code sent to <a href="#">yourmail@domain.com</a> incididunt ut labore et dolore magna aliqua enim adminim ayiam quis nostrud exercitation commodo.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                            <input type="text" name="code" class="form-control" placeholder="Enter Authentication Code Here">
                        </div>
                    </div>
                    <div class="tg-btnbox">
                        <button type="button" class="tg-btn tg-btnnext">Next Step</button>
                        <button type="button" class="tg-btn tg-btnprevious">previous Step</button>
                    </div>
                </fieldset>
                <fieldset class="tg-formstepfour">
                    <h3>Appointment Confirmed</h3>
                    <div class="tg-description">
                        <p>Consectetur adipisicing elit sent to <a href="#">yourmail@domain.com</a> and your appointment ID is <a href="#">2124539</a> incididunt ut labore et dolore magna aliqua enim adminim ayiam quis nostrud exercitation commodo.</p>
                    </div>
                    <div class="tg-regardbox">
                        <span>Regard</span>
                        <strong class="tg-logo"><a href="#"><img src="{{asset('images/rezaTemplate/logos.png')}}" alt="image description"></a></strong>
                        <ul class="tg-contactdetail">
                            <li>
                                <i class="fa fa-phone"></i>
                                <em>+4 212 245155 - 6</em>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <a href="mailto:query@domain.com">query@domain.com</a>
                            </li>
                            <li>
                                <i class="fa fa-laptop"></i>
                                <a href="www.mediurl.com">www.mediurl.com</a>
                            </li>
                        </ul>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--************************************
            Light Box End
*************************************-->
<script src="{{ asset('js/rezaTemplate/vendor/jquery-library.js') }}"></script>
<script src="{{ asset('js/rezaTemplate/vendor/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/mapclustering/data.json')}}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
<script src="{{ asset('js/rezaTemplate/mapclustering/markerclusterer.min.js') }}"></script>
<script src="{{ asset('js/rezaTemplate/mapclustering/infobox.js') }}"></script>
<script src="{{ asset('js/rezaTemplate/bootstrap-timepicker.min.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/customScrollbar.min.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/mapclustering/map.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/jquery.countdown.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/isotope.pkgd.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/packery-mode.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/svg-injector.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/moment.min.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/fullcalendar.min.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/jquery-ui.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/collapse.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/parallax.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/readmore.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/countTo.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/loader.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/appear.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/gmap3.js')}}"></script>
<script src="{{ asset('js/rezaTemplate/main.js')}}"></script>
</body>
</html>