<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Creating a Simple Parallax Scrolling Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="stylesheets/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" href="stylesheets/variables.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="stylesheets/main.min.css" rel="stylesheet" />
    <link href="stylesheets/customForm.min.css" rel="stylesheet" />
    <link href="stylesheets/waves.min.css" rel="stylesheet" />

</head>

<body>
    <div id="movie">
        <div class="wrapper">
            <div class="cover"></div>
            <video class="myVideo" autoplay loop muted>
                <source src="images/intro.webm" type="video/webm" />
                <source src="images/intro.mp4" type="video/mp4" />
                <source src="images/intro.ogv" type="video/ogg" />
                Your browser does not support the video element.
            </video>

            <a target="_blank" class="youtube" href="https://www.youtube.com/watch?v=Z1kulU8Yd10" role="button">
                ZOBACZ WIĘCEJ
            </a>
            <span class="fa-stack" onclick="goTo()">
                <i class="fa fa-angle-down fa-stack-1x"></i>
                <i class="fa fa-circle-thin fa-stack-2x"></i>
            </span>
        </div>
    </div>




    <div id="slide32">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="logo" href="#movie">lumos</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="button2" href="#oNas">O NAS</a></li>
                        <li><a class="button2" href="#oferta">OFERTA</a></li>
                        <li><a class="button2" href="#galeria">GALERIA</a></li>
                        <li><a class="button2" href="#partnerzy">PARTNERZY</a></li>
                        <li><a class="button2" href="#kontakt">KONTAKT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div id="oNas">
        <div class="content">
            <h2 class="title">Nasza grupa</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 team col-sm-12 clearfix hideme">
                        <img src="images/lol.png" />
                        <div class="text">
                            ąćłLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </div>
                    </div>
                    <div class="col-md-6 team col-sm-12 hideme">
                        <img src="images/lol.png" />
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, słed do eiusmod tempor incidąćidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="slide3">
    </div>

    <div id="oferta">
        <div class="content">
            <div class="quotes_container">
                <h3 class="quotes hideme">
                    “Christmas doesn't come from a store, maybe Christmas perhaps means a little bit more....” <i class="fa fa-chevron-circle-up"></i>
                </h3>
                <img src="img/dr-seuss.png" align="left" /> <h4 class="author_name_gray">Dr. Seuss </h4>
            </div>
        </div>
    </div>


    <div id="slide5">
    </div>

    <div id="galeria">
        <div class="content">
            <h2 class="title">Galeria</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 thumb">
                            <a class="thumbnail2 fancybox" href="images/03.jpg" rel="group">
                                <div class="zoom">
                                    <i class="fa fa-search-plus"></i>
                                    <img class="img-responsive" src="images/03.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 thumb">
                            <a class="thumbnail2 fancybox" href="images/34.jpg" rel="group">
                                <div class="zoom">
                                    <i class="fa fa-search-plus"></i>
                                    <img class="img-responsive" src="images/34.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 thumb">
                            <a class="thumbnail2 fancybox" href="images/39.jpg" rel="group">
                                <div class="zoom">
                                    <i class="fa fa-search-plus"></i>
                                    <img class="img-responsive" src="images/39.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 thumb">
                            <a class="thumbnail2 fancybox" href="images/84.jpg" rel="group">
                                <div class="zoom">
                                    <i class="fa fa-search-plus"></i>
                                    <img class="img-responsive" src="images/84.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 thumb">
                            <a class="thumbnail2 fancybox" href="images/04.jpg" rel="group">
                                <div class="zoom">
                                    <i class="fa fa-search-plus"></i>
                                    <img class="img-responsive" src="images/04.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 thumb">
                            <a class="thumbnail2 fancybox" href="images/61.jpg" rel="group">
                                <div class="zoom">
                                    <i class="fa fa-search-plus"></i>
                                    <img class="img-responsive" src="images/61.jpg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="slide6">
    </div>

    <div id="partnerzy">
        <h2 class="title">Nasi partnerzy i klienci</h2>
        <div class="content">
            <div id="carousel-example-generic" class="carousel slide">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <!-- Slide -->
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <a href="https://www.facebook.com/clubMetroopolisSzczuczyn">
                                    <img src="/images/metropolis.png" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <img src="http://placehold.it/260x180" alt="" />
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <img src="http://placehold.it/260x180" alt="" />
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <img src="http://placehold.it/260x180" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <img src="http://placehold.it/260x180" alt="" />
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <img src="http://placehold.it/260x180" alt="" />
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <img src="http://placehold.it/260x180" alt="" />
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <img src="http://placehold.it/260x180" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="slide6">
    </div>

    <div id="kontakt">
        <h2 class="title">Kontakt</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                        <p class="text-center">Dariusz Farancewicz</p>
                    <table>

                        <tr>
                            <td><i class="fa fa-envelope"></i></td>
                            <td>d.farancewicz@o2.pl</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-phone"></i></td>
                            <td>512 158 567</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-facebook-official"></i></td>
                            <td><a href="https://www.facebook.com/darek.farancewicz">faceboook</a></td>
                        </tr>
                    </table>                                   
                    <br />
                    <br />
                    <p class="text-center">Karolina Ślużyńska</p>
                    <table>

                        <tr>
                            <td><i class="fa fa-envelope"></i></td>
                            <td>d.farancewicz@o2.pl</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-phone"></i></td>
                            <td>512 158 567</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-facebook-official"></i></td>
                            <td><a href="https://www.facebook.com/darek.farancewicz">faceboook</a></td>
                        </tr>
                    </table> 
                    <form action="index.php" method="post">
                        <p>Napisz do nas</p>
						<input type="hidden" name="aktywne" value="true">
                        <input name="temat" placeholder="Imię i nazwisko" type="text" value="" required>
                        <input name="email" placeholder="Adres e-mail" type="email" onblur="this.setAttribute('value', this.value);" value="" required>
                        <span class="validation-text">Proszę wpisać odpowiedni adres.</span>
                        <div class="flex">
                            <textarea name="tresc" placeholder="Treść wiadomości" rows="3" required></textarea>
                        </div>
                        <button class="button" type="submit" value="wyślij">Wyślij</button>
                    </form>
					
		<?php
	
	$adres = 'piotr210694@wp.pl, daro1502@o2.pl';
	@$email = $_POST['email'];
	@$tresc = $_POST['tresc'];
    @$temat = $_POST['temat'];
	$header = 	"From: $email";

	if($_POST["aktywne"]=="true")
	{
		if($_POST['email'] AND $_POST['temat'] AND $_POST['tresc'])
		{
			mail($adres, $temat, $tresc, $header);
		}
	}	

?>
					
                </div>
                <div class="col-md-6 face">
                    <h4>Polub nas na Facebooku i bądź na bieżąco</h4>
                    <div class="fb-page" data-href="https://www.facebook.com/lumosski" data-height="auto" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/lumosski"><a href="https://www.facebook.com/lumosski">LUMOS</a></blockquote></div></div>
                </div>
            </div>
        </div>
        <div id="googleMap" class="container-fluid"></div>
    </div>

    <footer>
        <div class="menuBottom">
            <ul>
                <li><a href="#oNas">O NAS</a></li>
                <li><a href="#oferta">OFERTA</a></li>
                <li><a href="#galeria">GALERIA</a></li>
                <li><a href="#partnerzy">PARTNERZY</a></li>
                <li><a href="#kontakt">KONTAKT</a></li>
            </ul>
        </div>
        <p class="text-center">
            <span>LUMOS © 2015 Dariusz Farancewicz & Piotr Aleksandrowicz</span>
        </p>
    </footer>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="javascripts/waves.js"></script>
    <script src="javascripts/jquery.fancybox.pack.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        $(document).ready(function () {
            $(".fancybox").fancybox({
                padding: 0,
                tpl: {
                    closeBtn: '<a title="Zamknij" class="fancybox-item fancybox-close myClose" href="javascript:;"></a>',
                    next: '<a title="Następne" class="fancybox-nav fancybox-next myNext" href="javascript:;"><span></span></a>',
                    prev: '<a title="Poprzednie" class="fancybox-nav fancybox-prev myPrev" href="javascript:;"><span></span></a>'
                }

            });

            $(".wrapper").width($(window).width());
            $(".wrapper").height($(window).height());
            $(window).on("scroll", function () {
                var videoHeight = $(".wrapper").height();
                if ($(document).scrollTop() > videoHeight) {
                    $('.navbar').addClass('navbar-fixed-top');
                    $(".myVideo")[0].pause();
                } else {
                    $('.navbar').removeClass('navbar-fixed-top');
                    $(".myVideo")[0].play();
                }
            });

            $(window).scroll(function () {
                onScroll();
                /* Check the location of each desired element */
                $('.hideme').each(function (i) {

                    var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                    var bottom_of_window = $(window).scrollTop() + $(window).height();

                    /* If the object is completely visible in the window, fade it it */
                    if (bottom_of_window > bottom_of_object) {

                        $(this).animate({ 'opacity': '1' }, 1000);
                    }
                });
            });

            $(".button2").on("click", function (e) {
                e.preventDefault();
                $('nav a').each(function () {
                    $(this).removeClass('myActive');
                })
                $(this).addClass("myActive");
                var cipka = $($(this).attr('href')).position().top - 69;
                $("body,html").animate({
                    scrollTop: cipka
                }, 1000);
            });
            $(".logo").on("click", function (e) {
                e.preventDefault();
                $("body,html").animate({
                    scrollTop: 0
                }, 1000);
            });



            Waves.init();
            Waves.attach('.button', ['waves-button', 'waves-float']);
            Waves.attach('.button2', ['waves-float', 'waves-light']);
        });

        $(window).load(function () {
            $(".cover").height($(".myVideo").height());
        });
        $(window).resize(function () {
            $(".cover").height($(".myVideo").height());
        });




        function goTo() {
            $("body,html").animate({
                scrollTop: $("#slide2").position().top - 70
            }, 1000);
        }

        function onScroll(event) {
            var scrollPos = $(document).scrollTop();
            $('nav a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                var positionTop = refElement.position().top - 70;
                if (positionTop <= scrollPos && positionTop + refElement.outerHeight() > scrollPos) {
                    $('nav ul li a').removeClass("myActive");
                    currLink.addClass("myActive");
                }
                else {
                    currLink.removeClass("myActive");
                }
            });
        }
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.4";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        function initialize() {
            var mapProp = {
                scrollwheel: false,
                center: new google.maps.LatLng(54.108427, 22.926719),
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</body>

</html>
