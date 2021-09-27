<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="shortcut icon" href="storage/favicon.ico" type="image/x-icon">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Transport | transport & logistics</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    </style>
</head>
<body>

    <div id="preloder">
		<div class="loader"></div>
	</div>

    <!-- Hero section -->
	<section class="hero-section">
        <!-- Top bar -->
        <div class="top-bar position-relative z-index-2">
            <!-- Top line -->
            <div class="container position-relative justify-content-between py-3 px-0 topbar-wrapper">
                <div class="d-flex align-items-center me-md-auto">
                    <div class="d-flex text-white align-items-center">
                        <i class="bi bi-telephone mx-1"></i>
                        <p class="mx-1">{{ __('lang.t-phone') }}</p>
                    </div>
        
                    <div class="line h-75 mx-1"></div>
        
                    <div class="d-flex text-white align-items-center">
                        <i class="bi bi-envelope mx-1"></i>
                        <p class="mx-1 text-uppercase">{{ __('lang.t-email') }}</p>
                    </div>
        
                    <div class="line h-75 mx-1"></div>
        
                    <div class="d-flex text-white align-items-center">
                        <i class="bi bi-clock mx-1"></i>
                        <p class="mx-1">{{ __('lang.t-work-day') }}</p>
                    </div>
                </div>
            
                <div class="d-flex align-items-center ms-md-auto">
                    <a class="btn-vk mx-2" target="_blank" href="https://vk.com/l_astochka47" role="button">
                        <img data-src="storage/img//nav/vk.svg" alt="vk" class="lazy">
                    </a>
        
                    <a class="btn-github mx-2" target="_blank" href="https://github.com/Ssmurf8571/" role="button">
                        <img data-src="storage/img/nav/github.svg" alt="github" class="lazy">
                    </a>
        
                    <a class="btn-instagram mx-2" target="_blank" href="https://www.instagram.com/romans.luk/" role="button">
                        <img data-src="storage/img/nav/instagram.svg" alt="instagram" class="lazy">
                    </a>
        
                    <div class="line h-75 mx-1"></div>
        
                    <div class="dropdown text-end">
                        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          <h6 class="text-capitalize text-dark mx-1 fw-bold">{{ __('lang.lang') }}</h6>
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdown-menu">
                          <li><a class="dropdown-item text-uppercase py-0" href="en">en</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item text-uppercase py-0" href="/ru">ru</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Top line -->
            <!-- Header -->
            <header class="position-relative">
                <div class="container po px-35 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none media-m0-auto">
                        <svg width="56" height="56" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.75 9.75C22.75 16.7603 13 26 13 26C13 26 3.25 16.7603 3.25 9.75C3.25 7.16414 4.27723 4.68419 6.10571 2.85571C7.93419 1.02723 10.4141 0 13 0C15.5859 0 18.0658 1.02723 19.8943 2.85571C21.7228 4.68419 22.75 7.16414 22.75 9.75ZM13 16.25C16.5899 16.25 19.5 13.3399 19.5 9.75C19.5 6.16015 16.5899 3.25 13 3.25C9.41015 3.25 6.5 6.16015 6.5 9.75C6.5 13.3399 9.41015 16.25 13 16.25Z" fill="white"/>
                            <path d="M9 6.84998C9 6.71737 9.05268 6.59019 9.14645 6.49642C9.24021 6.40265 9.36739 6.34998 9.5 6.34998H16.5C16.6326 6.34998 16.7598 6.40265 16.8536 6.49642C16.9473 6.59019 17 6.71737 17 6.84998V7.84998C17 7.98258 16.9473 8.10976 16.8536 8.20353C16.7598 8.2973 16.6326 8.34998 16.5 8.34998V12.1C16.5 12.4315 16.3683 12.7494 16.1339 12.9839C15.8995 13.2183 15.5815 13.35 15.25 13.35H10.75C10.4185 13.35 10.1005 13.2183 9.86612 12.9839C9.6317 12.7494 9.5 12.4315 9.5 12.1V8.34998C9.36739 8.34998 9.24021 8.2973 9.14645 8.20353C9.05268 8.10976 9 7.98258 9 7.84998V6.84998ZM10 8.34998V12.1C10 12.2989 10.079 12.4897 10.2197 12.6303C10.3603 12.771 10.5511 12.85 10.75 12.85H15.25C15.4489 12.85 15.6397 12.771 15.7803 12.6303C15.921 12.4897 16 12.2989 16 12.1V8.34998H10ZM16.5 6.84998H9.5V7.84998H16.5V6.84998ZM11.5 9.59998C11.5 9.53367 11.5263 9.47008 11.5732 9.4232C11.6201 9.37632 11.6837 9.34998 11.75 9.34998H14.25C14.3163 9.34998 14.3799 9.37632 14.4268 9.4232C14.4737 9.47008 14.5 9.53367 14.5 9.59998C14.5 9.66628 14.4737 9.72987 14.4268 9.77675C14.3799 9.82364 14.3163 9.84998 14.25 9.84998H11.75C11.6837 9.84998 11.6201 9.82364 11.5732 9.77675C11.5263 9.72987 11.5 9.66628 11.5 9.59998Z" fill="white"/>
                        </svg>
                        <div class="logo-title">
                            <h1 class="text-white m-0 lh-1">{{ __('lang.header-logo-uptitle') }}</h1>
                            <p class="text-white text-uppercase m-0 lh-1">{{ __('lang.header-logo-downtitle') }}</p>
                        </div>
                    </a>
            
                    <div class="media-m0-auto">
                        <button type="button" class="btn btn-warning text-white px-4 text-uppercase">{{ __('lang.order') }}</button>
                    </div>
                </div>
            </header>
            <!-- End Header -->
        </div>
        <!-- Slider -->
		<div class="hero-slider owl-carousel position-absolute top-0">
			<div class="hs-item h-681 set-bg" data-src="storage/img/slider/Enclosed_vs_Open_Auto_Shipping_AMPM_Auto_Transport.jpg">
				<div class="hs-text">
                    <div class="container">
                        <div class="slide-title w-435">
                            <h1 class="mb-3">{{ __('lang.slider-title') }}</h1>
                            <h5>{{ __('lang.slider-context') }}</h5>
                        </div>
					</div>
				</div>
			</div>
            <div class="hs-item h-681 set-bg lazy" data-src="storage/img/slider/91619659.jpg">
				<div class="hs-text">
                    <div class="container">
                        <div class="slide-title w-435">
                            <h1 class="mb-3">{{ __('lang.slider-title') }}</h1>
                            <h5>{{ __('lang.slider-context') }}</h5>
                        </div>
					</div>
				</div>
			</div>
            <div class="hs-item h-681 set-bg lazy" data-src="storage/img/slider/shutterstock_660736591-1500x1000.jpg">
				<div class="hs-text">
					<div class="container">
                        <div class="slide-title w-435">
                            <h1 class="mb-3">{{ __('lang.slider-title') }}</h1>
                            <h5>{{ __('lang.slider-context') }}</h5>
                        </div>
					</div>
				</div>
			</div>
            <div class="hs-item h-681 set-bg lazy" data-src="storage/img/slider/stock-photo-123543377.jpg">
				<div class="hs-text">
					<div class="container">
                        <div class="slide-title w-435">
                            <h1 class="mb-3">{{ __('lang.slider-title') }}</h1>
                            <h5>{{ __('lang.slider-context') }}</h5>
                        </div>
					</div>
				</div>
			</div>
            <div class="hs-item h-681 set-bg lazy" data-src="storage/img/slider/hero-image-2.jpg">
				<div class="hs-text">
					<div class="container">
                        <div class="slide-title w-435">
                            <h1 class="mb-3">{{ __('lang.slider-title') }}</h1>
                            <h5>{{ __('lang.slider-context') }}</h5>
                        </div>
					</div>
				</div>
			</div>
		</div>
        <!-- End Slider -->
	</section>

    <!-- Solution section -->
    <section class="solution-section pt-70 pb-100">
        <div class="container text-center">
            <h1 class="text-dark mb-4 fw-bold small-caps">{{ __('lang.solutions') }}</h1>
            <div class="solution-wrapper">
                <div class="solution-item truck border-1 text-center">
                    <img class="lazy" data-src="storage/img/solutions/truck.svg" alt="">
                    <h4 class="mt-2 fw-bold mx-auto">{{ __('lang.cargo-transport') }}</h4>
                    <button type="button" class="btn btn-warning text-white text-uppercase fw-bold fs-5">{{ __('lang.order') }}</button>
                </div>

                <div class="solution-item mail border-1 text-center">
                    <img class="lazy" data-src="storage/img/solutions/mail.svg" alt="">
                    <h4 class="mt-2 fw-bold mx-auto">{{ __('lang.delivery') }}</h4>
                    <button type="button" class="btn btn-warning text-white text-uppercase fw-bold fs-5">{{ __('lang.order') }}</button>
                </div>

                <div class="solution-item snap border-1 text-center">
                    <img class="lazy" data-src="storage/img/solutions/snap.svg" alt="">
                    <h4 class="mt-2 fw-bold mx-auto">{{ __('lang.simple-order') }}</h4>
                    <button type="button" class="btn btn-warning text-white text-uppercase fw-bold fs-5">{{ __('lang.order') }}</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Types transport section -->
    <section class="types-transport pt-70 pb-100">
        <h1 class="text-dark mb-4 text-center fw-bold small-caps">{{ __('lang.types-transport') }}</h1>
        <div class="container">
            <div class="tp-transport-wrapper">
                <div class="line-1">
                    <div class="left-line text-center text-dark">
                        <div class="ll-block mt-5 wow jackInTheBox">
                            <h2 class="text-uppercase fw-bold mb-50">{{ __('lang.awning') }}</h2>
                            <img class="lazy mb-2 awning" data-src="storage/img/auto/awning.png" alt="">
                            <div class="info-car text-center">
                                <h5 class="lspace-1 fw-bold">{{ __('lang.tonnage') }} <img class="lazy" src="storage/img/ruble-currency-sign.svg" alt="P">/{{ __('lang.km') }}</h5>
                            </div>
                        </div>
                        
                        <div class="ll-block mt-5 wow jackInTheBox">
                            <h2 class="text-uppercase fw-bold mb-50">{{ __('lang.board') }}</h2>
                            <img class="lazy mb-2 board" data-src="storage/img/auto/BOARD.png" alt="">
                            <div class="info-car text-center">
                                <h5 class="lspace-1 fw-bold">{{ __('lang.tonnage') }} <img class="lazy" src="storage/img/ruble-currency-sign.svg" alt="P">/{{ __('lang.km') }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="right-line">
                        <div class="ll-block mt-5 wow jackInTheBox">
                            <h2 class="text-uppercase fw-bold mb-50">{{ __('lang.thermobudka') }}</h2>
                            <img class="lazy mb-2 thermobudka" data-src="storage/img/auto/THERMOBUDKA.png" alt="">
                            <div class="info-car text-center">
                                <h5 class="lspace-1 fw-bold">{{ __('lang.tonnage') }} <img class="lazy" src="storage/img/ruble-currency-sign.svg" alt="P">/{{ __('lang.km') }}</h5>
                            </div>
                        </div>
                        
                        <div class="ll-block mt-5 wow jackInTheBox">
                            <h2 class="text-uppercase fw-bold mb-50">{{ __('lang.refrigerator') }}</h2>
                            <img class="lazy mb-2 refrigerator" data-src="storage/img/auto/REFRIGERATOR.png" alt="">
                            <div class="info-car text-center">
                                <h5 class="lspace-1 fw-bold">{{ __('lang.tonnage') }} <img class="lazy" src="storage/img/ruble-currency-sign.svg" alt="P">/{{ __('lang.km') }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line-2">
                    <div class="left-line text-center text-dark">
                        <div class="ll-block mt-5 wow jackInTheBox">
                            <h2 class="text-uppercase fw-bold mb-50">{{ __('lang.container-ship') }}</h2>
                            <img class="lazy mb-2 container-ship" data-src="storage/img/auto/CONTAINER SHIP.png" alt="">
                            <div class="info-car text-center">
                                <h5 class="lspace-1 fw-bold">{{ __('lang.from-11') }} <img class="lazy" src="storage/img/ruble-currency-sign.svg" alt="P">/{{ __('lang.km') }}</h5>
                            </div>
                        </div>
                        
                        <div class="ll-block mt-5 wow jackInTheBox">
                            <h2 class="text-uppercase fw-bold mb-50">{{ __('lang.trawl') }}</h2>
                            <img class="lazy mb-2 trawl" data-src="storage/img/auto/TRAWL.png" alt="">
                            <div class="info-car text-center">
                                <h5 class="lspace-1 fw-bold">{{ __('lang.from-11') }} <img class="lazy" src="storage/img/ruble-currency-sign.svg" alt="P">/{{ __('lang.km') }}</h5>
                            </div>
                        </div>

                        <div class="ll-block mt-5 wow jackInTheBox">
                            <h2 class="text-uppercase fw-bold mb-50">{{ __('lang.autovoz') }}</h2>
                            <img class="lazy mb-2 autovoz" data-src="storage/img/auto/AUTOVOZ.png" alt="">
                            <div class="info-car text-center">
                                <h5 class="lspace-1 fw-bold">{{ __('lang.from-11') }} <img class="lazy" src="storage/img/ruble-currency-sign.svg" alt="P">/{{ __('lang.km') }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About section -->
    <section class="about-us text-white">
        <h1 class="text-dark mb-5 text-center fw-bold small-caps">{{ __('lang.about-us') }}</h1>
        <div class="hs-item set-bg lazy" data-src="storage/img/parallax-min.jpg">
            <div class="pt-70 pb-100 wow fadeInDown">
                <div class="container d-flex flex-wrap justify-content-between" id="counter">
                    <h1 class="mb-3 text-center">{{ __('lang.about-title') }}</h1>
                    <div class="about-block m-0 mt-4">
                        <div class="years-exp about-title text-center w-content-max mx-auto">
                            <h1 class="numerate">7</h1>
                            <div class="line my-3 mx-auto"></div>
                            <h4>{{ __('lang.years') }}</h4>
                        </div>
                    </div>
                    <div class="about-block m-0 mt-4">
                        <div class="people-team about-title text-center w-content-max mx-auto">
                            <h1 class="numerate">152</h1>
                            <div class="line my-3 mx-auto"></div>
                            <h4>{{ __('lang.people-team') }}</h4>
                        </div>
                    </div>

                    <div class="about-block m-0 mt-4">
                        <div class="own-vehicles about-title text-center w-content-max mx-auto">
                            <h1 class="numerate">53</h1>
                            <div class="line my-3 mx-auto"></div>
                            <h4>{{ __('lang.own-car') }}</h4>
                        </div>
                    </div>

                    <div class="about-block m-0 mt-4">
                        <div class="cooperating about-title text-center w-content-max mx-auto">
                            <h1 class="numerate">17</h1>
                            <div class="line my-3 mx-auto"></div>
                            <h4>{{ __('lang.companies') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="hs-item set-bg lazy" data-src="storage/img/1b1f71deeee1f8d8ac93f1fd8dbc758e.jpg">
            <div class="request pt-70 pb-100 text-black text-center">
                <h1 class="fw-bold small-caps">{{ __('lang.request-quote') }}</h1>
                <div class="line my-3 mx-auto"></div>
                <div class="container">
                    <h6 class="mx-auto">{{ __('lang.request-title') }}</h6>
                    <form class="request-wrapper position-relative mt-5 d-flex flex-wrap justify-content-between" action="/action" method="POST">
                        @csrf
                            <input class="my-3 wow fadeIn" type="text" name="contact_name" placeholder="{{ __('lang.contact-name') }}" required>
                            <input class="my-3 wow fadeIn" type="text" name="commodity" placeholder="{{ __('lang.commodity') }}" required>
                            <select class="my-3 text-capitalize form-select wow fadeIn" name="type" id="type-car" required>
                                <option value="awning">{{ __('lang.awning') }}</option>
                                <option value="board">{{ __('lang.board') }}</option>
                                <option value="thermobudka">{{ __('lang.thermobudka') }}</option>
                                <option value="refrigerator">{{ __('lang.refrigerator') }}</option>
                                <option value="container ship">{{ __('lang.container-ship') }}</option>
                                <option value="trawl">{{ __('lang.trawl') }}</option>
                                <option value="autovoz">{{ __('lang.autovoz') }}</option>
                            </select>
                            <input class="my-3 wow fadeIn" type="tel" name="phone" placeholder="{{ __('lang.phone') }}" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}">
                            <input class="my-3 wow fadeIn" type="text" name="from" placeholder="{{ __('lang.from') }}" required>
                            <input class="my-3 wow fadeIn" type="text" name="to" placeholder="{{ __('lang.to') }}" required>
                            <input class="my-3 wow fadeIn" type="email" name="email" placeholder="{{ __('lang.email') }}" required>
                            <input class="my-3 wow fadeIn" type="text" name="load" placeholder="{{ __('lang.load-date') }}" onfocus="(this.type='date')" required>
                            <input class="my-3 wow fadeIn" type="text" name="shipment" placeholder="{{ __('lang.shipment-date') }}" onfocus="(this.type='date')" required>
                            <textarea class="my-3 w-100 wow fadeIn" name="Notations" id="notations" cols="30" rows="10" placeholder="{{ __('lang.notations') }}"></textarea>
                            <button type="submit" class="btn btn-success text-white px-4 py-2 text-uppercase position-absolute btn-send">{{ __('lang.send') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5">
        <div class="container">
            <ul class="nav text-white justify-content-around">
                <li class="d-flex justify-content-center">
                    <img class="lazy" data-src="storage/img/footer/location-pin.svg" alt="">
                    <div class="line mx-4"></div>
                    <div class="footer-info">
                        <h6 class="text-capitalize">{{ __('lang.visit-us') }}</h6><h6 class="text-uppercase">{{ __('lang.adress') }}</h6>
                    </div>
                </li>
                <li class="d-flex justify-content-center">
                    <img class="lazy" data-src="storage/img/footer/mail.svg" alt="">
                    <div class="line mx-4"></div>
                    <div class="footer-info">
                        <h6 class="text-capitalize">{{ __('lang.email-us') }}</h6><h6 class="text-uppercase">{{ __('lang.t-email') }}</h6>
                    </div>
                </li>
                <li class="d-flex justify-content-center">
                    <img class="lazy" data-src="storage/img/footer/phone-call.svg" alt="">
                    <div class="line mx-4"></div>
                    <div class="footer-info">
                        <h6 class="text-capitalize">{{ __('lang.call-us') }}</h6><h6 class="text-uppercase">{{ __('lang.t-phone') }}</h6>
                    </div>
                </li>
            </ul>
        </div>
    </footer>

<div>
<!--====== Javascripts & Jquery & Bootstrap ======-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="js/loadPage.js"></script>


	<script src="js/owl.carousel.min.js"></script>
    <script src="js/lazyload.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.spincrement.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</div>

    <script>
        // loader
        'use strict';
        $(window).on('load', function() {
            $(".loader").fadeOut(); 
            $("#preloder").delay(400).fadeOut("slow");

        });
        /*------------------
		Background Set
        --------------------*/
        $('.set-bg').each(function() {
            var bg = $(this).data('src');
            $(this).css('background-image', 'linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)), url(' + bg + ')');
        });
        /*------------------
            Hero Slider
        --------------------*/
        $('.hero-slider').owlCarousel({
            loop: true,
            dots: false,
            mouseDrag: false,
            touchDrag: false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items: 1,
            autoplay: true
        });

        $("img.lazy").lazyload();


        new WOW().init();



        $(document).ready(function () {

            var show = true;
            var countbox = ".about-us";
            $(window).on("scroll load resize", function () {
                if (!show) return false;
                var w_top = $(window).scrollTop();
                var e_top = $(countbox).offset().top;
                var w_height = $(window).height();
                var d_height = $(document).height();
                var e_height = $(countbox).outerHeight();
                if (w_top + 1000 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
                    $('.numerate').css('opacity', '1');
                    $('.numerate').spincrement({
                        thousandSeparator: "",
                        duration: 17000
                    });

                    show = false;
                }
            });

        });


    </script>
    
</body>
</html>