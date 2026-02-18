<!DOCTYPE html>
<html lang="en-us">
	<head>

		<meta charset="utf-8">
		<meta name="keywords" content="NISCAIR" />
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<title>CSIR-NIScPR</title>
		<link rel="icon" type="image/png"  href="{{ asset('') }}includes/images/favicon.png">
		<link rel="stylesheet"  href="{{ asset('') }}includes/css/bootstrap.min.css">
        <link rel="stylesheet"  href="{{ asset('') }}includes/css/font-awesome.min.css">
        <link rel="stylesheet"  href="{{ asset('') }}includes/css/owl.carousel.min.css">
        <link rel="stylesheet"  href="{{ asset('') }}includes/css/owl.theme.default.min.css">
        <link rel="stylesheet"  href="{{ asset('') }}includes/css/animate.min.css">
        <link rel="stylesheet"  href="{{ asset('') }}includes/css/slicknav.min.css">
		<link rel="stylesheet"  href="{{ asset('') }}includes/style.css">	
        <link rel="stylesheet"  href="{{ asset('') }}includes/css/sample.css">
		<link rel="stylesheet"  href="{{ asset('') }}includes/css/themecolor/themecolor.css">
		<link rel="stylesheet"  href="{{ asset('') }}includes/css/responsive.css">	
		<link rel="stylesheet"  href="{{ asset('') }}includes/css/croppie.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Carter+One" />
    </head>
    <body id="body">
		<header class="header">
			<div class="tophead">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-3 col-sm-12">
							<ul class="language" id="language_switcher" style="list-style-type: none;">
                                <li>
                                    @if(session('sess_lang') == 'hindi')
                                        <a href="{{ url('langswitch/switchlanguage?language=english') }}">
                                            English
                                        </a>
                                    @else
                                        <a href="{{ url('langswitch/switchlanguage?language=hindi') }}">
                                            हिन्दी
                                        </a>
                                    @endif
                                </li>

							</ul>
						</div>
					
						<div class="col-lg-10 col-md-9 col-sm-12">
							<ul class="social">
								<li class="top-social-list"> 
									<a class="font-size-decrease" title="Decrease font size">
										A<sup>-</sup>
									</a> 
								</li>
								<li class="top-social-list">
									<a class="font-size-reset" title="Reset font size">
										A<sup>&nbsp;</sup>
									</a> 
								</li>
								<li class="top-social-list"> 
									<a class="font-size-increase" title="Increase font size">
										A<sup>+</sup>
									</a> 
								</li>
								<li class="top-social-list">
									<a class="skiptomaincontent" title="Skip to main content">
                                                    <img src="{{ asset('includes/images/ico-skip.png') }}">
									</a>
								</li>
								<li class="top-social-list">
									<a href="https://www.facebook.com/niscprcsir" title="Facebook" target="_blank">
										<i class="fa fa-facebook-square"></i>
									</a>
								</li>
								<li class="top-social-list">
									<a href="https://twitter.com/CSIR_NIScPR" title="Twitter" target="_blank">
										<i class="fa fa-twitter-square"></i>
									</a>
								</li>
								<li class="top-social-list">
									<a href="https://www.linkedin.com/company/niscair-csir-" title="Linkedin" target="_blank">
										<i class="fa fa-linkedin-square"></i>
									</a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
	
			<div class="header-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<nav class="navbar navbar-default">
								<div class="navbar-collapse">
									<!-- Main Menu -->
									<ul id="nav" class="nav menu navbar-nav">
										<li class="active">
											<a  href="#">
												{{ ktLang('main_menu_home') }}

											</a>
										</li>
										<li>
											<a href="#">{{ ktLang('new_main_menu_about') }}</a>

										</li>
										<li>
											<a href="#">{{ ktLang('main_menu_resources') }}</a> 
										</li>
										
										<li>
											<a href="#">{{ ktLang('new_main_menu_HRD') }}</a> 
										</li>

									</ul>
								</div> 
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="nis-box-shadow margin-bottom-10">

                            <marquee>

                                <span style="margin-right: 20px">
                                    <a href="{{ asset('includes/images/iconicbooks/CSIR-NIScPR-Book-Publication-Programme.pdf') }}" target="_blank">
                                    A</a>
                                </span> |

                                <span style="margin: 0px 20px;">
                                    <a href="https://shebox.wcd.gov.in/" target="_blank">
                                    B</a>
                                </span> |

                                <span style="color: blue; margin: 0px 20px;">
                                    <a href="{{ asset('includes/images/calendars/CSIR-NIScPR-Table-Calender-2026.pdf') }}" target="_blank">
                                    C</a>
                                </span> |


                            </marquee>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container margin-bottom-10">
                <div class="row justify-content-center gap-5">

                    <!-- Prime Minister -->
                    <div class="col-lg-4">
                        <div class="min-box">
                            <div class="card">
                                <div class="card-body d-flex">
                                    <div class="row justify-content-center gap-5">
                                        <div class="col-lg-5">
                                            <img src="{{ asset('includes/images/prime-minister.png') }}" 
                                                alt="President" class="w-100">
                                        </div>
                                        <div class="col-lg-7">
                                            <a href="https://www.pmindia.gov.in/en/" 
                                            class="vp-btn-1" target="_blank">
                                                <p>{{ ktLang('website_all_pm') }}</p>
                                                <p>{{ ktLang('website_all_president_csir') }}</p>
                                            </a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <!-- Minister -->
                    <div class="col-lg-4">
                        <div class="min-box">
                            <div class="card">
                                <div class="card-body d-flex">
                                    <div class="row justify-content-center gap-5">
                                        <div class="col-lg-5">
                                            <img src="{{ asset('includes/images/vice-president-CSIR.png') }}" 
                                                alt="President" class="w-100">
                                        </div>
                                        <div class="col-lg-7">
                                            <a href="https://www.csir.res.in/en/minister/dr-jitendra-singh" 
                                            class="vp-btn-1" target="_blank">
                                                <p>{{ ktLang('website_all_minister') }}</p>
                                                <p>{{ ktLang('website_all_vice_president_csir') }}</p>
                                            </a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <!-- DG CSIR -->
                    <div class="col-lg-4">
                        <div class="min-box">
                            <div class="card">
                                <div class="card-body d-flex">
                                    <div class="row justify-content-center gap-5">
                                        <div class="col-lg-5">
                                            <img src="{{ asset('includes/images/dg-csir.png') }}" 
                                                alt="President" class="w-100">
                                        </div>
                                        <div class="col-lg-7">
                                            <a href="https://www.csir.res.in/dgrcsir/dr-mrs-n-kalaiselvi" 
                                            class="vp-btn-1" target="_blank">
                                                <p>{{ ktLang('website_all_dg_name') }}</p>
                                                <p>{{ ktLang('website_all_dg_csir') }}</p>
                                            </a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        
       <script src="{{ asset('includes/js/jquery.min.js') }}"></script>
        <script src="{{ asset('includes/js/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('includes/js/circle-progress.min.js') }}"></script>
        <script src="{{ asset('includes/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('includes/js/slicknav.min.js') }}"></script>
        <script src="{{ asset('includes/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('includes/js/main.js') }}"></script>
        <script src="{{ asset('includes/js/issn.js') }}"></script>
        <script src="{{ asset('includes/js/popper.min.js') }}"></script>
        <script src="{{ asset('includes/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('includes/js/turn.js') }}"></script>
        <script src="{{ asset('includes/js/croppie.js') }}"></script>

	</body>
</html>