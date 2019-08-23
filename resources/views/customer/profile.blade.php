@extends('layouts.rezaTemplate')

@section('main')
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div id="tg-content" class="tg-content tg-dashboard">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left">
                    <div class="tg-widgetdashboard">
                        <div class="tg-widgetprofile">
                            <figure class="tg-directpostimg"> <a href="#"><img src="images/thumbnails/img-20.jpg" alt="image description"></a>
                                <figcaption> <a class="tg-usericon tg-iconfeatured" href="#"> <em class="tg-usericonholder"> <i class="fa fa-bolt"></i> <span>featured</span> </em> </a> <a class="tg-usericon tg-iconvarified" href="#"> <em class="tg-usericonholder"> <i class="fa fa-shield"></i> <span>varified</span> </em> </a> </figcaption>
                            </figure>
                            <div class="tg-directposthead">
                                <h3><a href="#">Dr. Steve Northrop</a></h3>
                            </div>
                            <a class="tg-btn tg-btn-lg" href="#">Edit Profile</a> </div>
                        <nav id="tg-dashboardnav" class="tg-dashboardnav">
                            <ul>
                                <li class="tg-warningmessage tg-active"> <a href="dashboard-profilesetting.html"> <i class="fa fa-user"></i> <span>Profile Settings</span> </a> </li>
                                <li> <a href="dashboard-upgradepackage.html"> <i class="fa fa-arrow-up"></i> <span>Update Package</span> </a> </li>
                                <li> <a href="dashboard-privacy-settings.html"> <i class="fa fa-eye"></i> <span>Privacy Settings</span> </a> </li>
                                <li> <a href="#"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right">
                    <div class="tg-dashboardtabs">
                        <ul class="tg-dashboardtabnav" role="tablist">
                            <li role="presentation" class="active"> <a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Profile</a> </li>
                            <li role="presentation"> <a href="#work" aria-controls="Work" role="tab" data-toggle="tab">Skills</a> </li>
                            <li role="presentation"> <a href="#education" aria-controls="education" role="tab" data-toggle="tab">Education</a> </li>
                            <li role="presentation"> <a href="#language" aria-controls="language" role="tab" data-toggle="tab">Languages</a> </li>
                            <li role="presentation"> <a href="#others" aria-controls="others" role="tab" data-toggle="tab">Others</a> </li>
                        </ul>
                        <div class="tab-content tg-dashboardtabcontent">
                            <div role="tabpanel" class="tab-pane active" id="overview">
                                <div class="tg-dashboardbox">
                                    <div class="tg-dashboardboxtitle">
                                        <h2>Basic Information</h2>
                                    </div>
                                    <div class="tg-box tg-basicinformation">
                                        <div class="row tg-rowmargin">
                                            <div class="col-md-4 col-sm-12 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup"> <span class="tg-select">
														<select>
															<option>Title</option>
															<option>Title</option>
															<option>Title</option>
														</select>
														</span> </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <input type="text" name="firstname" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-12 tg-columnpadding">
                                                <input type="text" name="subtitle" class="form-control" placeholder="Sub Title (MDS - Paedodontics &amp; Preventive Dentistry)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-dashboardbox">
                                    <div class="tg-dashboardboxtitle">
                                        <h2>Profile Photo</h2>
                                    </div>
                                    <div class="tg-box tg-profilephoto">
                                        <div class="row tg-rowmargin">
                                            <div class="col-md-8 col-sm-12 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <input type="text" name="firstname" class="form-control" placeholder="File_name01.jpg">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <button class="tg-btn tg-btn-lg" type="submit">Brows</button>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <button class="tg-btn tg-btn-lg" type="submit">upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-updateall"> <span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
                                    <button class="tg-btn" type="submit">update now</button>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="work">
                                <div class="tg-dashboardbox">
                                    <div class="tg-dashboardboxtitle">
                                        <h2>Experience</h2>
                                    </div>
                                    <div class="tg-box tg-experience tg-uiicons">
                                        <div class="row tg-rowmargin">
                                            <div class="col-sm-6 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <input type="text" name="designation" class="form-control" placeholder="Designation">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <input type="text" name="companyname" class="form-control" placeholder="Company Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <input type="text" name="startingdate" class="form-control" placeholder="Starting Date">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <input type="text" name="endingdate" class="form-control" placeholder="Ending Date">
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <button class="tg-btn tg-btn-lg" type="submit">Add Now</button>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="tg-themelist tg-liststyledot tg-listdatastyle">
                                            <li> <span>Senior Consultant</span> <span>Altrincham Group Of Company</span> <span>June 2015 - Present</span> </li>
                                            <li> <span>Senior Therapist</span> <span>Sydney Trust Hospital</span> <span>Sep 2013 - Sep 2014</span> </li>
                                            <li> <span>Jr. Osteopathic</span> <span>Altrincham Group Company</span> <span>Apr 2012 - Apr 2013</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tg-updateall"> <span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
                                    <button class="tg-btn" type="submit">update now</button>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="education">
                                <div class="tg-dashboardbox">
                                    <div class="tg-dashboardboxtitle">
                                        <h2>Education</h2>
                                    </div>
                                    <div class="tg-box tg-education tg-uiicons">
                                        <div class="row tg-rowmargin">
                                            <div class="col-sm-6 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <input type="text" name="designation" class="form-control" placeholder="Designation">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <input type="text" name="companyname" class="form-control" placeholder="Company Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <input type="text" name="startingdate" class="form-control" placeholder="Starting Date">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <input type="text" name="endingdate" class="form-control" placeholder="Ending Date">
                                                </div>
                                            </div>
                                            <div class="col-sm-2 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <button class="tg-btn tg-btn-lg" type="submit">Add Now</button>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="tg-themelist tg-liststyledot tg-listdatastyle">
                                            <li> <span>Doctor of Pharmacy</span> <span>Manchester University</span> <span>June 2012 - June 2013</span> </li>
                                            <li> <span>Doctor of Physical Therapy</span> <span>Sydney College Of Health</span> <span>May 2011 - May 2012</span> </li>
                                            <li> <span>Doctor of Osteopathic Medicine</span> <span>Altrincham School Of Medical</span> <span>Apr 2010 - Apr 2011</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tg-updateall"> <span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
                                    <button class="tg-btn" type="submit">update now</button>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="language">
                                <div class="tg-dashboardbox">
                                    <div class="tg-dashboardboxtitle">
                                        <h2>Languages</h2>
                                    </div>
                                    <div class="tg-box tg-languages tg-uiicons">
                                        <div class="row tg-rowmargin">
                                            <div class="col-md-10 col-sm-9 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup"> <span class="tg-select">
														<select>
															<option>Select/Type Languages</option>
															<option>Select/Type Languages</option>
															<option>Select/Type Languages</option>
														</select>
														</span> </div>
                                            </div>
                                            <div class="col-md-2 col-sm-3 col-xs-12 tg-columnpadding">
                                                <div class="form-group tg-formgroup">
                                                    <button class="tg-btn tg-btn-lg" type="submit">add now</button>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="tg-threecolumns tg-liststyledot">
                                            <li> <span>English</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
                                            <li> <span>Arabic</span> <i class="fa fa-exclamation-circle tg-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="write your note here"></i> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
                                            <li> <span>Russian</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
                                            <li> <span>Chinese</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
                                            <li> <span>Portuguese</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
                                            <li> <span>Japanese</span> <i class="fa fa-exclamation-circle tg-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="write your note here"></i> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
                                            <li> <span>Spanish</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tg-updateall"> <span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
                                    <button class="tg-btn" type="submit">update now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

