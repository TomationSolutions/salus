@extends('layouts.master')

@section('title')
    Salus Trust
@endsection

@section('active')
    active
@endsection

@section('content')

<!-- Wrapper Start -->
        
<div class="dc-homesliderholder dc-haslayout" style="background:url(/front/uploads/settings/home/1571722013-banner-img.png)">
            <div id="dc-homeslider" class="dc-homeslider">
                <div id="dc-bannerslider" class="dc-bannerslider carousel slide" data-ride="false" data-interval="false">
                    <ol class="carousel-indicators dc-bannerdots">
                        <li data-target="#dc-bannerslider" data-slide-to="0" class="active"></li>
                        <li data-target="#dc-bannerslider" data-slide-to="1"></li>
                        <li data-target="#dc-bannerslider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" id="carousel-item-1">
                            <div class="d-flex justify-content-center dc-craousel-content">
                                <div class="mx-auto">
                                    <img class="d-block dc-bannerimg" src="/front/uploads/settings/home/1574688220-img-01.png" alt="Slide Image">
                                    <div class="dc-bannercontent dc-bannercotent-craousel">
                                        <div class="dc-content-carousel">
                                            <div class="dc-num">01.</div>
                                            <h1>
                                            
                                            Our Clients Trusts Us
                                            <span> With Their Health</span>
                                        </h1>
                                            <div class="dc-btnarea">
                                                <a href="#" class="dc-btn dc-btnactive">View Hospitals</a>
                                                <a href="#" class="dc-btn">Get To Know Why</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item " id="carousel-item-2">
                            <div class="d-flex justify-content-center dc-craousel-content">
                                <div class="mx-auto">
                                    <img class="d-block dc-bannerimg" src="/front/uploads/settings/home/1569052805-img-02.png" alt="Slide Image">
                                    <div class="dc-bannercontent dc-bannercotent-craousel">
                                        <div class="dc-content-carousel">
                                            <div class="dc-num">02.</div>
                                            <h1>
                                            <em>Emergency?</em> 
                                            Find Nearest
                                            <span> Medical Facility</span>
                                        </h1>
                                            <div class="dc-btnarea">
                                                <a href="#" class="dc-btn dc-btnactive">View Hospitals</a>
                                                <a href="#" class="dc-btn">View Doctors</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item " id="carousel-item-3">
                            <div class="d-flex justify-content-center dc-craousel-content">
                                <div class="mx-auto">
                                    <img class="d-block dc-bannerimg" src="/front/uploads/settings/home/1569052805-img-03.png" alt="Slide Image">
                                    <div class="dc-bannercontent dc-bannercotent-craousel">
                                        <div class="dc-content-carousel">
                                            <div class="dc-num">03.</div>
                                            <h1>
                                            <em>Emergency?</em> 
                                            Find Nearest
                                            <span> Medical Facility</span>
                                        </h1>
                                            <div class="dc-btnarea">
                                                <a href="#" class="dc-btn dc-btnactive">View Hospitals</a>
                                                <a href="#" class="dc-btn">View Doctors</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="dc-carousel-control-prev" href="#dc-bannerslider" role="button" data-slide="prev">
                            <span class="dc-carousel-control-prev-icon" aria-hidden="true"><span>PR</span><span class="d-block">EV</span></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="dc-carousel-control-next" href="#dc-bannerslider" role="button" data-slide="next">
                            <span class="dc-carousel-control-next-icon " aria-hidden="true"><span>NE</span><span class="d-block">XT</span></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <main id="dc-main" class="dc-main dc-haslayout">
        <!-- <div class="preloader-outer">
            <div class="dc-preloader-holder">
                <div class="dc-loader"></div>
            </div>
        </div> -->
        <div id="home">
            <section class="dc-searchholder dc-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="dc-searchform-holder">
                                <div class="dc-advancedsearch">
                                    <div class="dc-title">
                                        <h2>Start Your Search</h2>
                                        <a href="javascript:void(0);" class="dc-docsearch" v-on:click="displayFilfer">
                                            <span class="dc-advanceicon"><i></i> <i></i> <i></i></span>
                                            <span>Advanced <br>Search</span>
                                        </a>
                                    </div>
                                    <form method="GET" action="http://amentotech.com/projects/doctry/search-results" accept-charset="UTF-8" id="search_form" class="dc-formtheme dc-form-advancedsearch">
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="text" name="search" value="" class="form-control" placeholder="Search doctors, clinics, hospitals etc.">
                                            </div>
                                            <div class="form-group">
                                                <div class="dc-select">
                                                    <select class="chosen-select locations" data-placeholder="Select Country" name="locations">
                                                        <option value="">Select Country</option>
                                                        <option value="australia">Australia*</option>
                                                        <option value="canada">Canada*</option>
                                                        <option value="england">England*</option>
                                                        <option value="india">India*</option>
                                                        <option value="turkey">Turkey*</option>
                                                        <option value="united-emirates">United Emirates*</option>
                                                        <option value="united-kingdom">United Kingdom*</option>
                                                        <option value="united-states">United States*</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="dc-formbtn">
                                                <button type="submit" class="btn-sm"><i class="ti-arrow-right"></i></button>
                                            </div>
                                        </fieldset>
                                        <fieldset style="display: none;" class="dc-home-advancedsearch">
                                            <div class="form-group">
                                                <div class="dc-select">
                                                    <select class="chosen-select locations" name="type">
                                                        <option value="both" selected>Both</option>
                                                        <option value="doctor">doctor</option>
                                                        <option value="hospital">Clinic</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <speciality-services :specialities="specialities" v-if="show_speciality" :speciality_value_type="'slug'" :service_value_type="'slug'" v-cloak>
                                            </speciality-services>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="dc-jointeamholder">
                                    <div class="dc-jointeam">
                                        <span class="dc-jointeamnoti"><i class="ti-light-bulb"></i></span>
                                        <figure class="dc-jointeamimg">
                                            <img src="/front/uploads/settings/home/small-1569052927-img-04.png" alt="Image Description">
                                        </figure>
                                        <div class="dc-jointeamcontent">
                                            <h3><span>Have a Hospital?</span>Get Registered</h3>
                                            <a href="#" class="dc-btn dc-btnactive">Register Here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dc-haslayout">
                    <div class="container-fluid">
                        <div class="row">
                            <div id="dc-doctorslider" class="dc-doctorslider owl-carousel">
                                <div class="item dc-doctordetails-holder dc-titlecolor1">
                                    <span class="dc-slidercounter">01.</span>
                                    <h3><span>Doctors</span> Live Chat With</h3>
                                    <a href="#" class="dc-btn">Show All Doctors</a>
                                </div>
                                <div class="item dc-doctordetails-holder dc-titlecolor2">
                                    <span class="dc-slidercounter">02.</span>
                                    <h3><span>Nearest Hospital</span> Fast Appointment With</h3>
                                    <a href="#" class="dc-btn">Show All Nearest Hospitals</a>
                                </div>
                                <div class="item dc-doctordetails-holder dc-titlecolor3">
                                    <span class="dc-slidercounter">03.</span>
                                    <h3><span>Hospitals &amp; Doctors</span> Articles From Top</h3>
                                    <a href="#" class="dc-btn">Show All Articles</a>
                                </div>
                                <div class="item dc-doctordetails-holder dc-titlecolor4">
                                    <span class="dc-slidercounter">04.</span>
                                    <h3><span>Help Support</span> Our 24/7 Active</h3>
                                    <a href="#" class="dc-btn">Show All Nearest Hospitals</a>
                                </div>
                                <div class="item dc-doctordetails-holder dc-titlecolor5">
                                    <span class="dc-slidercounter">05.</span>
                                    <h3><span>Download App</span> Help on The Go</h3>
                                    <a href="#" class="dc-btn">Show All Nearest Hospitals</a>
                                </div>
                                <div class="item dc-doctordetails-holder dc-titlecolor6">
                                    <span class="dc-slidercounter">06.</span>
                                    <h3><span>Doctors</span> Live Chat With</h3>
                                    <a href="#" class="dc-btn">Show All Doctors</a>
                                </div>
                                <div class="item dc-doctordetails-holder dc-titlecolor7">
                                    <span class="dc-slidercounter">07.</span>
                                    <h3><span>Nearest Hospital</span> Fast Appointment With</h3>
                                    <a href="#" class="dc-btn">Show All Nearest Hospitals</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Bring Care Start -->
            <section class="dc-haslayout dc-main-section dc-sectionbg">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 align-self-center">
                            <div class="dc-bringcarecontent">
                                <div class="dc-sectionhead dc-sectionheadvtwo">
                                    <div class="dc-sectiontitle">
                                        <h2> Affordable Health Plans For All</h2>
                                    </div>
                                    <div class="dc-description">
                                        <p>We have both Premium and Standard Health Plans to suit your needs. We understand the unique features of individuals and therefore we are open to Customize your health Plan to suit your needs.</p>
                                    </div>
                                    <!--descript-->
                                    
                                    <!--descript-->
                                </div>
                                <div class="dc-btnarea">
                                    <a href="#" class="dc-btn">Buy Plan Now</a>
                                    <a href="#" class="dc-btn dc-btnactive">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="dc-bringimg-holder">
                                <figure class="dc-doccareimg">
                                    <img src="/front/uploads/settings/home/1571722777-img-01.png" alt="Image Description">
                                    <figcaption>
                                        <div class="dc-doccarecontent">
                                            <h3><em>Dr. Tyrone Grindle</em>Greetings &amp; Welcome</h3>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Bring Care End -->
            <!-- Works Section Start -->
            <section class="dc-haslayout">
                <div class="dc-haslayout dc-bgcolor dc-main-section dc-workholder">
                    <div class="container">
                        <div class="row justify-content-center align-self-center">
                            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-8 push-lg-2">
                                <div class="dc-sectionhead dc-text-center">
                                    <div class="dc-sectiontitle">
                                        <h2><span></span>Our Core Values</h2>
                                    </div>
                                    <div class="dc-description">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dc-haslayout dc-main-section dc-workdetails-holder">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="dc-workdetails">
                                    <div class="dc-workdetail">
                                        <figure>
                                            <img src="/front/uploads/settings/home/1569054476-img-01.png" alt="Image Description">
                                        </figure>
                                    </div>
                                    <div class="dc-title">
                                        <h3>
                                            Plan Selection</h3>
                                        <span>
                                            
                                            Carefully select your preferred Health Plan bearing in mind your health needs and challenges. Fill out the enrollment form.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="dc-workdetails">
                                    <div class="dc-workdetail">
                                        <figure>
                                            <img src="/front/uploads/settings/home/1569054476-img-02.png" alt="Image Description">
                                        </figure>
                                    </div>
                                    <div class="dc-title">
                                        <h3> Pay Premium</h3>
                                        <span>
                                            
                                            
                                            Pay your Premium and you will be issued a copy of your benefit package. This will be your guide.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="dc-workdetails">
                                    <div class="dc-workdetail">
                                        <figure>
                                            <img src="/front/uploads/settings/home/1571723299-img-03.png" alt="Image Description">
                                        </figure>
                                    </div>
                                    <div class="dc-title">
                                        <h3>ID Card Issued</h3>
                                        <span>
                                            
                                            
                                            Salus Trust will produce and issue your ID Card. This card will authenticate you as our enrollee whenever you visit the hospital.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Works Section End -->
            <!-- Our Rated Start -->
            <section class="dc-haslayout dc-main-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-3">
                            <div class="row">
                                <div class="dc-ratedecontent dc-bgcolor">
                                    <figure class="dc-neurosurgeons-img">
                                        <img src="/front/uploads/specialities/small-1570522041-img-08.png" alt="Image Description">
                                    </figure>
                                    <div class="dc-sectionhead dc-sectionheadvtwo dc-text-center">
                                        <div class="dc-sectiontitle">
                                            
                                            <h2><span> Our Team</span></h2>
                                        </div>
                                        <div class="dc-description">
                                            <p>We have our care team ready to serve you</p>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
                            <div class="row">
                                <div id="dc-docpostslider" class="dc-docpostslider owl-carousel">

                                    <div class="item">
                                        <div class="dc-docpostholder">
                                            <figure class="dc-docpostimg">
                                                <img src="/front/uploads/users/2/medium-1569829809-01.jpg" alt="Image Description">
                                            </figure>
                                            <div class="dc-docpostcontent">
                                                <a href="javascript:void(0);" class="dc-like"><i class="fa fa-heart"></i></a>
                                                <a href="javascrip:void(0);" class="dc-like" id="doctor-2" @click.prevent="add_wishlist('doctor-2', '2', 'saved_doctors', '')" v-cloak>
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <div class="dc-title">
                                                    <a href="javascript:void(0)" class="dc-docstatus">Neurology</a>
                                                    <h3>
                                                            <a href="profile/ava-nguyen.html">
                                                                Mr. 
                                                                Ava Nguyen
                                                            </a> 
                                                                <i class="far fa-check-circle dc-tipso" data-tipso="<em>Verified User</em>"></i>
                                                        </h3>
                                                    <ul class="dc-docinfo">
                                                        <li>MBBS, MCPS, MSc (Immunology)</li>
                                                        <li>
                                                            <span class="dc-stars"><span style="width: 50%;"></span></span><em>3 Feedbacks</em>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="dc-doclocation">
                                                    <span><i class="ti-direction-alt"></i> India</span>
                                                    <span>
                                                                <i class="ti-calendar"></i>
                                                                                                                                                                                                                    Mon,
                                                                                                                                                                                                                                                                                            Tue,
                                                                                                                                                                                                                                                                                            Wed,
                                                                                                                                                                                                                                                                                            Thu,
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Fri</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sat</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sun</em>
                                                                                                                                                                                                        </span>
                                                    <a href="profile/ava-nguyen.html" class="dc-btn">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="dc-docpostholder">
                                            <figure class="dc-docpostimg">
                                                <img src="/front/uploads/users/5/medium-1569829887-09.jpg" alt="Image Description">
                                            </figure>
                                            <div class="dc-docpostcontent">
                                                <a href="javascript:void(0);" class="dc-like"><i class="fa fa-heart"></i></a>
                                                <a href="javascrip:void(0);" class="dc-like" id="doctor-5" @click.prevent="add_wishlist('doctor-5', '5', 'saved_doctors', '')" v-cloak>
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <div class="dc-title">
                                                    <a href="javascript:void(0)" class="dc-docstatus">Neurology</a>
                                                    <h3>
                                                            <a href="profile/elijah-johnson.html">

                                                                Elijah Johnson
                                                            </a> 
                                                            <i class="icon-sheild dc-tipso" data-tipso="<em>Medical Registration Verified</em>"></i> <i class="far fa-check-circle dc-tipso" data-tipso="<em>Verified User</em>"></i>
                                                        </h3>
                                                    <ul class="dc-docinfo">
                                                        <li>MBBS, FCPS, MCPS, FESC</li>
                                                        <li>
                                                            <span class="dc-stars"><span style="width: 95%;"></span></span><em>4 Feedbacks</em>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="dc-doclocation">
                                                    <span><i class="ti-direction-alt"></i> Canada</span>
                                                    <span>
                                                                <i class="ti-calendar"></i>
                                                                                                                                                                                                                    Mon,
                                                                                                                                                                                                                                                                                            Tue,
                                                                                                                                                                                                                                                                                            Wed,
                                                                                                                                                                                                                                                                                            Thu,
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Fri</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sat</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sun</em>
                                                                                                                                                                                                        </span>
                                                    <a href="profile/elijah-johnson.html" class="dc-btn">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="dc-docpostholder">
                                            <figure class="dc-docpostimg">
                                                <img src="/front/uploads/users/6/medium-1569829909-23.jpg" alt="Image Description">
                                            </figure>
                                            <div class="dc-docpostcontent">
                                                <a href="javascript:void(0);" class="dc-like"><i class="fa fa-heart"></i></a>
                                                <a href="javascrip:void(0);" class="dc-like" id="doctor-6" @click.prevent="add_wishlist('doctor-6', '6', 'saved_doctors', '')" v-cloak>
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <div class="dc-title">
                                                    <a href="javascript:void(0)" class="dc-docstatus">Neurology</a>
                                                    <h3>
                                                            <a href="profile/brooklyn-chan.html">

                                                                Brooklyn Chan
                                                            </a> 
                                                            <i class="icon-sheild dc-tipso" data-tipso="<em>Medical Registration Verified</em>"></i> <i class="far fa-check-circle dc-tipso" data-tipso="<em>Verified User</em>"></i>
                                                        </h3>
                                                    <ul class="dc-docinfo">
                                                        <li>MBBS, FCPS (Psychiatry)</li>
                                                        <li>
                                                            <span class="dc-stars"><span style="width: 20%;"></span></span><em>2 Feedbacks</em>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="dc-doclocation">
                                                    <span><i class="ti-direction-alt"></i> Canada</span>
                                                    <span>
                                                                <i class="ti-calendar"></i>
                                                                                                                                                                                                                    Mon,
                                                                                                                                                                                                                                                                                            Tue,
                                                                                                                                                                                                                                                                                            Wed,
                                                                                                                                                                                                                                                                                            Thu,
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Fri</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sat</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sun</em>
                                                                                                                                                                                                        </span>
                                                    <a href="profile/brooklyn-chan.html" class="dc-btn">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="dc-docpostholder">
                                            <figure class="dc-docpostimg">
                                                <img src="/front/uploads/users/7/medium-1569829939-12.jpg" alt="Image Description">
                                            </figure>
                                            <div class="dc-docpostcontent">
                                                <a href="javascript:void(0);" class="dc-like"><i class="fa fa-heart"></i></a>
                                                <a href="javascrip:void(0);" class="dc-like" id="doctor-7" @click.prevent="add_wishlist('doctor-7', '7', 'saved_doctors', '')" v-cloak>
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <div class="dc-title">
                                                    <a href="javascript:void(0)" class="dc-docstatus">Neurology</a>
                                                    <h3>
                                                            <a href="profile/beau-simard.html">

                                                                Beau Simard
                                                            </a> 
                                                            <i class="icon-sheild dc-tipso" data-tipso="<em>Medical Registration Verified</em>"></i> <i class="far fa-check-circle dc-tipso" data-tipso="<em>Verified User</em>"></i>
                                                        </h3>
                                                    <ul class="dc-docinfo">
                                                        <li>MBBS, D-Dermatology</li>
                                                        <li>
                                                            <span class="dc-stars"><span style="width: 95%;"></span></span><em>2 Feedbacks</em>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="dc-doclocation">
                                                    <span><i class="ti-direction-alt"></i> Canada</span>
                                                    <span>
                                                                <i class="ti-calendar"></i>
                                                                                                                                                                                                                    Mon,
                                                                                                                                                                                                                                                                                            Tue,
                                                                                                                                                                                                                                                                                            Wed,
                                                                                                                                                                                                                                                                                            Thu,
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Fri</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sat</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sun</em>
                                                                                                                                                                                                        </span>
                                                    <a href="profile/beau-simard.html" class="dc-btn">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="dc-docpostholder">
                                            <figure class="dc-docpostimg">
                                                <img src="/front/uploads/users/8/medium-1569829957-10.jpg" alt="Image Description">
                                            </figure>
                                            <div class="dc-docpostcontent">
                                                <a href="javascript:void(0);" class="dc-like"><i class="fa fa-heart"></i></a>
                                                <a href="javascrip:void(0);" class="dc-like" id="doctor-8" @click.prevent="add_wishlist('doctor-8', '8', 'saved_doctors', '')" v-cloak>
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <div class="dc-title">
                                                    <a href="javascript:void(0)" class="dc-docstatus">Neurology</a>
                                                    <h3>
                                                            <a href="profile/isobel-jones.html">

                                                                Isobel Jones
                                                            </a> 
                                                            <i class="icon-sheild dc-tipso" data-tipso="<em>Medical Registration Verified</em>"></i> <i class="far fa-check-circle dc-tipso" data-tipso="<em>Verified User</em>"></i>
                                                        </h3>
                                                    <ul class="dc-docinfo">
                                                        <li>MBBS,FCPS(rhumato)</li>
                                                        <li>
                                                            <span class="dc-stars"><span style="width: 95%;"></span></span><em>2 Feedbacks</em>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="dc-doclocation">
                                                    <span><i class="ti-direction-alt"></i> England</span>
                                                    <span>
                                                                <i class="ti-calendar"></i>
                                                                                                                                                                                                                    Mon,
                                                                                                                                                                                                                                                                                            Tue,
                                                                                                                                                                                                                                                                                            Wed,
                                                                                                                                                                                                                                                                                            Thu,
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Fri</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sat</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sun</em>
                                                                                                                                                                                                        </span>
                                                    <a href="profile/isobel-jones.html" class="dc-btn">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="dc-docpostholder">
                                            <figure class="dc-docpostimg">
                                                <img src="/front/uploads/users/9/medium-1569829981-18.jpg" alt="Image Description">
                                            </figure>
                                            <div class="dc-docpostcontent">
                                                <a href="javascript:void(0);" class="dc-like"><i class="fa fa-heart"></i></a>
                                                <a href="javascrip:void(0);" class="dc-like" id="doctor-9" @click.prevent="add_wishlist('doctor-9', '9', 'saved_doctors', '')" v-cloak>
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <div class="dc-title">
                                                    <a href="javascript:void(0)" class="dc-docstatus">Neurology</a>
                                                    <h3>
                                                            <a href="profile/kian-johnson.html">

                                                                Kian Johnson
                                                            </a> 
                                                            <i class="icon-sheild dc-tipso" data-tipso="<em>Medical Registration Verified</em>"></i> <i class="far fa-check-circle dc-tipso" data-tipso="<em>Verified User</em>"></i>
                                                        </h3>
                                                    <ul class="dc-docinfo">
                                                        <li>My Health. My Life.</li>
                                                        <li>
                                                            <span class="dc-stars"><span style="width: 95%;"></span></span><em>2 Feedbacks</em>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="dc-doclocation">
                                                    <span><i class="ti-direction-alt"></i> England</span>
                                                    <span>
                                                                <i class="ti-calendar"></i>
                                                                                                                                                                                                                    Mon,
                                                                                                                                                                                                                                                                                            Tue,
                                                                                                                                                                                                                                                                                            Wed,
                                                                                                                                                                                                                                                                                            Thu,
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Fri</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sat</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sun</em>
                                                                                                                                                                                                        </span>
                                                    <a href="profile/kian-johnson.html" class="dc-btn">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="dc-docpostholder">
                                            <figure class="dc-docpostimg">
                                                <img src="/front/uploads/users/10/medium-1569830001-08.jpg" alt="Image Description">
                                            </figure>
                                            <div class="dc-docpostcontent">
                                                <a href="javascript:void(0);" class="dc-like"><i class="fa fa-heart"></i></a>
                                                <a href="javascrip:void(0);" class="dc-like" id="doctor-10" @click.prevent="add_wishlist('doctor-10', '10', 'saved_doctors', '')" v-cloak>
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <div class="dc-title">
                                                    <a href="javascript:void(0)" class="dc-docstatus">Neurology</a>
                                                    <h3>
                                                            <a href="profile/sarah-chapman.html">

                                                                Sarah Chapman
                                                            </a> 
                                                            <i class="icon-sheild dc-tipso" data-tipso="<em>Medical Registration Verified</em>"></i> <i class="far fa-check-circle dc-tipso" data-tipso="<em>Verified User</em>"></i>
                                                        </h3>
                                                    <ul class="dc-docinfo">
                                                        <li>MBBS, MRCS (Optha Uk)</li>
                                                        <li>
                                                            <span class="dc-stars"><span style="width: 40%;"></span></span><em>1 Feedbacks</em>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="dc-doclocation">
                                                    <span><i class="ti-direction-alt"></i> England</span>
                                                    <span>
                                                                <i class="ti-calendar"></i>
                                                                                                                                                                                                                    Mon,
                                                                                                                                                                                                                                                                                            Tue,
                                                                                                                                                                                                                                                                                            Wed,
                                                                                                                                                                                                                                                                                            Thu,
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Fri</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sat</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sun</em>
                                                                                                                                                                                                        </span>
                                                    <a href="profile/sarah-chapman.html" class="dc-btn">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="dc-docpostholder">
                                            <figure class="dc-docpostimg">
                                                <img src="/front/uploads/users/11/medium-1569830028-11.jpg" alt="Image Description">
                                            </figure>
                                            <div class="dc-docpostcontent">
                                                <a href="javascript:void(0);" class="dc-like"><i class="fa fa-heart"></i></a>
                                                <a href="javascrip:void(0);" class="dc-like" id="doctor-11" @click.prevent="add_wishlist('doctor-11', '11', 'saved_doctors', '')" v-cloak>
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <div class="dc-title">
                                                    <a href="javascript:void(0)" class="dc-docstatus">Neurology</a>
                                                    <h3>
                                                            <a href="profile/abhinav-balasubramanium.html">

                                                                Abhinav Balasubramanium
                                                            </a> 
                                                            <i class="icon-sheild dc-tipso" data-tipso="<em>Medical Registration Verified</em>"></i> <i class="far fa-check-circle dc-tipso" data-tipso="<em>Verified User</em>"></i>
                                                        </h3>
                                                    <ul class="dc-docinfo">
                                                        <li>Health Is Wealth</li>
                                                        <li>
                                                            <span class="dc-stars"><span style="width: 80%;"></span></span><em>1 Feedbacks</em>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="dc-doclocation">
                                                    <span><i class="ti-direction-alt"></i> India</span>
                                                    <span>
                                                                <i class="ti-calendar"></i>
                                                                                                                                                                                                                    Mon,
                                                                                                                                                                                                                                                                                            Tue,
                                                                                                                                                                                                                                                                                            Wed,
                                                                                                                                                                                                                                                                                            Thu,
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Fri</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sat</em>
                                                                                                                                                                                                                                                                                            <em class="dc-dayon">Sun</em>
                                                                                                                                                                                                        </span>
                                                    <a href="profile/abhinav-balasubramanium.html" class="dc-btn">View More</a>
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
            <!-- Our Rated End -->
            <!-- Mobile App Start -->
            <section class="dc-haslayout dc-bgcolor">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="dc-appbgimg">
                                <figure>
                                    <img src="/front/uploads/settings/home/1569221891-img-01.png" alt="Image Description">
                                </figure>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 justify-content-center align-self-center">
                            <div class="dc-appcontent">
                                <div class="dc-sectionhead dc-sectionheadvtwo">
                                    <div class="dc-sectiontitle">
                                        <h2>Care On The GO<span>Download Mobile App</span></h2>
                                    </div>
                                    <div class="dc-description">
                                        <p>Lorem ipsum dolor amet consectetur adipisicing eliteiuim sete eiusmod tempor incididunt ut labore etnalom dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <ul class="dc-appicons">
                                    <li>
                                        <a href="#">
                                            <img src="/front/uploads/settings/home/1569221891-img-03.png" alt="Image Description">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/front/uploads/settings/home/1571722416-img-02.png" alt="Image Description">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="dc-haslayout dc-main-section">
                <div class="container">
                    <div class="row justify-content-center align-self-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 push-lg-2">
                            <div class="dc-sectionhead dc-text-center">
                                <div class="dc-sectiontitle">
                                    <h2>
                                    
                                    Health News
                                </h2>
                                </div>
                                <div class="dc-description">
                                    <p>Get Briefed of our latest blog posts on health related events</p>
                                </div>
                            </div>
                        </div>
                        <div class="dc-articlesholder">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 float-left">
                                <div class="dc-article">
                                    <figure class="dc-articleimg">
                                        <img src="/front/uploads/users/1/articles/featured-1571722269-img-01.jpg" alt="Image Description">
                                        <figcaption>
                                            <div class="dc-articlesdocinfo">
                                                <img src="/front/uploads/users/1/extra-small-1571721502-1569829760-01.jpg" alt="Image Description">
                                                <span>SALUS ADMINISTRATOR</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="dc-articlecontent">
                                        <div class="dc-title">
                                            <div class="dc-articleby-holder">
                                                <a href="articles/anesthesiology.html" class="dc-articleby">What to ask when buying a Plan</a>
                                            </div>
                                            <h3><a href="#">
                                                In recent times, there has been a lot of issues with  HMOs not meeting up with their promises as stated in the Health Plans they sell. This have prompted a general revolutionary awareness spare headed by Salus Trust, to make sure that consumers are not only getting the kinds of coverage they are paying for,...</a></h3>
                                            <span class="dc-datetime"><i class="ti-calendar"></i> JULY 12, 2017</span>
                                        </div>
                                        <ul class="dc-moreoptions">
                                            <li><a href="javascript:void(0);"><i class="ti-heart"></i></a> 0 Likes</li>
                                            <li><a href="javascript:void(0);"><i class="ti-eye"></i></a>130 Views</li>
                                            <li id="dc-share-1" @click="socialPopup('1')" class="la-shareicon">
                                                <a href="javascript:void(0);"><i class="ti-share"></i> Share</a>
                                                <ul class="dc-simplesocialicons dc-socialiconsborder">
                                                    <li class="dc-facebook">
                                                        <a href="javascript:void()" @click="socialShare('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Falcohol-may-be-less-harmful-for-people-over-50')" class="social-share">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li class="dc-twitter">
                                                        <a href="javascript:void()" @click="socialShare('https://twitter.com/intent/tweet?url=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Falcohol-may-be-less-harmful-for-people-over-50')" class="social-share">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="dc-linkedin">
                                                        <a href="javascript:void()" @click="socialShare('https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Falcohol-may-be-less-harmful-for-people-over-50')" class="social-share">
                                                            <i class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                    <li class="dc-googleplus">
                                                        <a href="javascript:void()" @click="socialShare('https://plus.google.com/share?url=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Falcohol-may-be-less-harmful-for-people-over-50')" class="social-share">
                                                            <i class="fab fa-google-plus-g"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 float-left">
                                <div class="dc-article">
                                    <figure class="dc-articleimg">
                                        <img src="/front/uploads/users/6/articles/featured-1569246869-bloogs-1.jpg" alt="Image Description">
                                        <figcaption>
                                            <div class="dc-articlesdocinfo">
                                                <img src="/front/uploads/users/6/extra-small-1569829909-23.jpg" alt="Image Description">
                                                <span>NNAMDI IHENETU</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="dc-articlecontent">
                                        <div class="dc-title">
                                            <div class="dc-articleby-holder">
                                                <a href="#" class="dc-articleby">Hope Finally arriving for HIV
                                            </a>
                                            </div>
                                            <h3><a href="#">
                                                Scientists have cured living animals of HIV using CRISPR gene-editing, a new study claims. The virus remains elusive due to the its ability to hide away in latent reservoirs.  But now, in new research published this week, US scientists showed they could completely remove HIV DNA from human cells implanted into mice – preventing...</a></h3>
                                            <span class="dc-datetime"><i class="ti-calendar"></i> MAY 3, 2017</span>
                                        </div>
                                        <ul class="dc-moreoptions">
                                            <li><a href="javascript:void(0);"><i class="ti-heart"></i></a> 0 Likes</li>
                                            <li><a href="javascript:void(0);"><i class="ti-eye"></i></a>72 Views</li>
                                            <li id="dc-share-4" @click="socialPopup('4')" class="la-shareicon">
                                                <a href="javascript:void(0);"><i class="ti-share"></i> Share</a>
                                                <ul class="dc-simplesocialicons dc-socialiconsborder">
                                                    <li class="dc-facebook">
                                                        <a href="javascript:void()" @click="socialShare('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Fis-high-blood-pressure-always-bad')" class="social-share">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li class="dc-twitter">
                                                        <a href="javascript:void()" @click="socialShare('https://twitter.com/intent/tweet?url=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Fis-high-blood-pressure-always-bad')" class="social-share">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="dc-linkedin">
                                                        <a href="javascript:void()" @click="socialShare('https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Fis-high-blood-pressure-always-bad')" class="social-share">
                                                            <i class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                    <li class="dc-googleplus">
                                                        <a href="javascript:void()" @click="socialShare('https://plus.google.com/share?url=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Fis-high-blood-pressure-always-bad')" class="social-share">
                                                            <i class="fab fa-google-plus-g"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 float-left">
                                <div class="dc-article">
                                    <figure class="dc-articleimg">
                                        <img src="/front/uploads/users/7/articles/featured-1569246934-Untitled-1_0003_Layer-5.jpg" alt="Image Description">
                                        <figcaption>
                                            <div class="dc-articlesdocinfo">
                                                <img src="/front/uploads/users/7/extra-small-1569829939-12.jpg" alt="Image Description">
                                                <span>NNAMDI IHENETU</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="dc-articlecontent">
                                        <div class="dc-title">
                                            <div class="dc-articleby-holder">
                                                <a href="articles/dermatology.html" class="dc-articleby">Cucumber – Exceptional Vegetable
                                                    
                                                </a>
                                                
                                            </div>
                                            <h3><a href="#">
                                                There are so many benefits embedded in having a cucumber and feasting on the goodness daily. In order to learn the educational values of this vegetable, it will be good for us not to focus on the carnal use of it. Consuming cucumber daily is healthy since it is made mostly. The low-calorie vegetable...</a></h3>
                                            <span class="dc-datetime"><i class="ti-calendar"></i>  DECEMBER 29, 2016</span>
                                        </div>
                                        <ul class="dc-moreoptions">
                                            <li><a href="javascript:void(0);"><i class="ti-heart"></i></a> 0 Likes</li>
                                            <li><a href="javascript:void(0);"><i class="ti-eye"></i></a>36 Views</li>
                                            <li id="dc-share-6" @click="socialPopup('6')" class="la-shareicon">
                                                <a href="javascript:void(0);"><i class="ti-share"></i> Share</a>
                                                <ul class="dc-simplesocialicons dc-socialiconsborder">
                                                    <li class="dc-facebook">
                                                        <a href="javascript:void()" @click="socialShare('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Fintermittent-fasting-boosts-health-by-strengthening-daily-rhythms')" class="social-share">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li class="dc-twitter">
                                                        <a href="javascript:void()" @click="socialShare('https://twitter.com/intent/tweet?url=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Fintermittent-fasting-boosts-health-by-strengthening-daily-rhythms')" class="social-share">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="dc-linkedin">
                                                        <a href="javascript:void()" @click="socialShare('https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Fintermittent-fasting-boosts-health-by-strengthening-daily-rhythms')" class="social-share">
                                                            <i class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                    <li class="dc-googleplus">
                                                        <a href="javascript:void()" @click="socialShare('https://plus.google.com/share?url=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Fintermittent-fasting-boosts-health-by-strengthening-daily-rhythms')" class="social-share">
                                                            <i class="fab fa-google-plus-g"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 float-left">
                                <div class="dc-article">
                                    <figure class="dc-articleimg">
                                        <img src="/front/uploads/users/7/articles/featured-1569246934-Untitled-1_0003_Layer-5.jpg" alt="Image Description">
                                        <figcaption>
                                            <div class="dc-articlesdocinfo">
                                                <img src="/front/uploads/users/7/extra-small-1569829939-12.jpg" alt="Image Description">
                                                <span>NNAMDI IHENETU</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="dc-articlecontent">
                                        <div class="dc-title">
                                            <div class="dc-articleby-holder">
                                                <a href="#" class="dc-articleby">Exposure to computer radiation
                                                </a>
                                                <a href="#" class="dc-articleby">Emergency medicine</a>
                                            </div>
                                            <h3><a href="article/intermittent-fasting-boosts-health-by-strengthening-daily-rhythms.html">MARCH 31, 2017
                                                EXPOSURE TO COMPUTER RADIATION   Let us begin by asking the salient question: Who doesn’t use a computer today? Who doesn’t have a cell phone? It will be very difficult to point one or two people who do not conform to the technological utilizing group. Another salient question goes forth: Are computers harmless? We...</a></h3>
                                            <span class="dc-datetime"><i class="ti-calendar"></i> Oct 21, 2019</span>
                                        </div>
                                        <ul class="dc-moreoptions">
                                            <li><a href="javascript:void(0);"><i class="ti-heart"></i></a> 0 Likes</li>
                                            <li><a href="javascript:void(0);"><i class="ti-eye"></i></a>36 Views</li>
                                            <li id="dc-share-6" @click="socialPopup('6')" class="la-shareicon">
                                                <a href="javascript:void(0);"><i class="ti-share"></i> Share</a>
                                                <ul class="dc-simplesocialicons dc-socialiconsborder">
                                                    <li class="dc-facebook">
                                                        <a href="javascript:void()" @click="socialShare('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Fintermittent-fasting-boosts-health-by-strengthening-daily-rhythms')" class="social-share">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li class="dc-twitter">
                                                        <a href="javascript:void()" @click="socialShare('https://twitter.com/intent/tweet?url=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Fintermittent-fasting-boosts-health-by-strengthening-daily-rhythms')" class="social-share">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="dc-linkedin">
                                                        <a href="javascript:void()" @click="socialShare('https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Fintermittent-fasting-boosts-health-by-strengthening-daily-rhythms')" class="social-share">
                                                            <i class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                    <li class="dc-googleplus">
                                                        <a href="javascript:void()" @click="socialShare('https://plus.google.com/share?url=http%3A%2F%2Famentotech.com%2Fprojects%2Fdoctry%2Farticle%2Fintermittent-fasting-boosts-health-by-strengthening-daily-rhythms')" class="social-share">
                                                            <i class="fab fa-google-plus-g"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- Latest Articles End -->
            <!--
            <section class="dc-haslayaout dc-footeraboutus dc-bgcolor">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="dc-widgetskills">
                                <div class="dc-fwidgettitle">
                                    <h3>By Specialty</h3>
                                </div>
                                <ul class="dc-fwidgetcontent">
                                    <li><a href="search-results66f6.html?search=&amp;speciality=allergy-immunology">Allergy &amp; Immunology</a></li>
                                    <li><a href="search-resultsaaaf.html?search=&amp;speciality=anesthesiology">Anesthesiology</a></li>
                                    <li><a href="search-results8369.html?search=&amp;speciality=dermatology">Dermatology</a></li>
                                    <li><a href="search-results69fe.html?search=&amp;speciality=diagnostic-radiology">Diagnostic radiology</a></li>
                                    <li><a href="search-resultsc63e.html?search=&amp;speciality=emergency-medicine">Emergency medicine</a></li>
                                    <li class="dc-viewmore"><a href="search-results.html">View All</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="dc-widgetskills">
                                <div class="dc-fwidgettitle">
                                    <h3>Doctors In US</h3>
                                </div>
                                <ul class="dc-fwidgetcontent">
                                    <li>
                                        <a href="search-resultscaad.html?search=&amp;speciality=allergy-immunology&amp;type=doctor&amp;locations=united-states">
                                            Allergy &amp; Immunology
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search-results2d51.html?search=&amp;speciality=anesthesiology&amp;type=doctor&amp;locations=united-states">
                                            Anesthesiology
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search-results0c06.html?search=&amp;speciality=dermatology&amp;type=doctor&amp;locations=united-states">
                                            Dermatology
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search-results309f.html?search=&amp;speciality=diagnostic-radiology&amp;type=doctor&amp;locations=united-states">
                                            Diagnostic radiology
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search-resultsc833.html?search=&amp;speciality=emergency-medicine&amp;type=doctor&amp;locations=united-states">
                                            Emergency medicine
                                        </a>
                                    </li>
                                    <li class="dc-viewmore">
                                        <a href="search-results8f59.html?type=doctor&amp;locations=united-states">
                                        View All
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="dc-widgetskills">
                                <div class="dc-fwidgettitle">
                                    <h3>Doctors In India</h3>
                                </div>
                                <ul class="dc-fwidgetcontent">
                                    <li>
                                        <a href="search-results9768.html?search=&amp;speciality=allergy-immunology&amp;type=doctor&amp;locations=india">
                                            Allergy &amp; Immunology
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search-results3461.html?search=&amp;speciality=anesthesiology&amp;type=doctor&amp;locations=india">
                                            Anesthesiology
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search-results1518.html?search=&amp;speciality=dermatology&amp;type=doctor&amp;locations=india">
                                            Dermatology
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search-results18b6.html?search=&amp;speciality=diagnostic-radiology&amp;type=doctor&amp;locations=india">
                                            Diagnostic radiology
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search-results47ba.html?search=&amp;speciality=emergency-medicine&amp;type=doctor&amp;locations=india">
                                            Emergency medicine
                                        </a>
                                    </li>
                                    <li class="dc-viewmore">
                                        <a href="search-resultsf01c.html?type=doctor&amp;locations=india">
                                        View All
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="dc-footercol dc-widgetcategories">
                                <div class="dc-fwidgettitle">
                                    <h3>By Locations</h3>
                                </div>
                                <ul class="dc-fwidgetcontent">
                                    <li>
                                        <a href="search-resultsf28a.html?search=&amp;locations=australia">
                                            Australia
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search-results39b2.html?search=&amp;locations=canada">
                                            Canada
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search-results1c47.html?search=&amp;locations=england">
                                            England
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search-resultsf98f.html?search=&amp;locations=india">
                                            India
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search-results1a78.html?search=&amp;locations=turkey">
                                            Turkey
                                        </a>
                                    </li>
                                    <li class="dc-viewmore"><a href="search-results.html">View All</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
        </div>
    </main>

@endsection