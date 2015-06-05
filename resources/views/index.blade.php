<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Render test-task application</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/modernizr.js"></script>
</head>
<body>
<div class="preloader" id="preloader">
    <div class="intro-text">Please wait</div>
</div>
<div class="content-container" id="content-container" style="display:none;">
    <!-- SCENERY START -->
    <div class="scenery">
        <div class="clouds" id="clouds"></div>
        <div class="mountains mountains3">
            <div class="mountains mountains2">
                <div class="mountains mountains1">
                    <div class="beast beast_small" id="beast_small"></div>
                    <div class="grass1">
                        <div class="beast beast_big" id="beast_big"></div>
                        <div class="bushes">
                            <div class="bush1">
                                <div class="bush2"></div>
                            </div>
                            <div class="grass2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FLOATBOX START -->
        <div class="floatbox" id="floatbox">
            <h1 class="logo"></h1>

            <h2 class="intro_message">Рендеринг контента с transdir.ru</h2>
            
            <!-- Header Content / Intro Area Start -->            
            <div style="text-align: left">                
                @foreach ($info as $info_element)
                    <strong>{{ $info_element['desc'] }}</strong> : {{ $info_element['value'] }} <br />
                @endforeach
            </div>
            <!-- Header Content / Intro Area Start  END -->

            <!-- SOCIAL START -->
            <section class="social">
                <p>
                    <a href="https://github.com/ptretyakov/render-test-task" class="github social-link"></a>
                    <a href="mailto:tretjakov.pavel@gmail.com" class="google social-link"></a>
                    <a href="http://tretyakovpavel.ru" class="pmc social-link"></a>                    
                </p>
            </section>
            <!-- SOCIAL START -->
        </div>
        <!-- FLOATBOX END -->

    </div>
    <!-- SCENERY END -->

    <!-- CONTENT START -->
    <section class="content-area" id="content-area">
        
        <!-- .container -->
    </section>
    <!-- CONTENT END-->

    <!-- FOOTER START -->
    <footer class="page-footer">
        <div class="footer-top-bg"></div>
        <div class="footer-content-wrapper">
            <div class="footer-content">
                <!-- FOOTER CONTENT START -->
                <a href="http://tretyakovpavel.com">Pavel Tretyakov</a> &copy; 2015
                Designed by <a href="http://www.minecraftwebsitetemplates.com">sycoinc</a>
                <!-- FOOTER CONTENT END -->
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->

    <!-- SCRIPTS AND TECHICAL STUFF -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.backgroundpos.min.js"></script>    
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/script.js"></script>
    <div id="fake_timer" style="display:none"></div>
    <div class="pattern"></div>
</div>
<!-- .content-container -->
</body>
</html>