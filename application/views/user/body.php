<body onLoad="initialize()">

<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="center brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <a class='waves-effect modal-trigger btn' href='#modal-login-large'>Login</a>
            </ul>
            <ul class="left hide-on-med-and-down">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Forums</a></li>
                <li><a href="#">Doctors</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Forums</a></li>
                <li><a href="#">Doctors</a></li>
                <a class='waves-effect modal-trigger btn' href='#modal-login-small'>Login</a>
            </ul>

            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        </div>
    </nav>
</div>
<div id="modal-login-large" class="modal">
    <form method="post" action="<?php echo base_url("user/user/login")?>">
        <div class="modal-content">
            <h4>Login</h4>
            <div class="row hide-on-med-and-down">
                <div class="input-field col s6">
                    <i class="mdi-communication-email prefix"></i>
                    <input id="icon_prefix" type="email" class="validate" required>
                    <label for="icon_prefix" class="">Email Address</label>
                </div>
                <div class="input-field col s6">
                    <i class="mdi-communication-email prefix"></i>
                    <input id="icon_prefix" type="password" class="validate" required>
                    <label for="icon_prefix" class="">Password</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="large waves-effect waves-green btn-flat mdi-content-send"/>
        </div>
    </form>

</div>

<div id="modal-login-small" class="modal">
    <form method="post" action="<?php echo base_url("user/user/login")?>">
        <div class="modal-content">
            <h4>Login</h4>
            <div class="row show-on-small show-on-medium hide-on-large-only">
                <div class="input-field col s12">
                    <i class="mdi-communication-email prefix"></i>
                    <input id="icon_prefix" type="email" class="validate" required>
                    <label for="icon_prefix" class="">Email Address</label>
                </div>
                <div class="input-field col s12">
                    <i class="mdi-communication-email prefix"></i>
                    <input id="icon_prefix" type="password" class="validate" required>
                    <label for="icon_prefix" class="">Password</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="large waves-effect waves-green btn-flat mdi-content-send"/>
        </div>
    </form>
</div>

<div class="slider">
    <ul class="slides">
        <li>
            <img src="http://lorempixel.com/580/250/nature/1">
            <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/580/250/nature/2">
            <div class="caption left-align">
                <h3>Left Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/580/250/nature/3">
            <div class="caption right-align">
                <h3>Right Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/580/250/nature/4">
            <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
    </ul>
</div>
<!--
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">Dentview Dental Clinic</h1>
            <div class="row center">
                <h5 class="header col s12 light">The best clinic in town</h5>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url()?>images/background1.jpg" alt="Unsplashed background img 2"></div>
</div>

-->
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 center">
                <h3><i class="mdi-social-public brown-text"></i></h3>
                <h4><a class="" style="color:rgba(42, 42, 42, 1)" href="/services" title="Click to see all the Services">Services</a></h4>
                <p class="center-align light">
                    A lively, intelligent, highly advanced equipment, superior dentistry that holds the foothold of every clinic in Cebu
                </p>
            </div>
        </div>

    </div>
</div>


<div class="row">
    <div class="col s12 m4 l4">

            <div class="card small">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/service/Green.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title 1 : <i class="mdi-navigation-more-vert right"></i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
    </div>
    <div class="col s12 m4 l4">

            <div class="card small">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/service/White.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title 2 : <i class="mdi-navigation-more-vert right"></i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
    </div>
    <div class="col s12 m4 l4">

            <div class="card small">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/service/bob_marley_one_love-56440.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title 3 : <i class="mdi-navigation-more-vert right"></i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
    </div>
</div>
<div class="row">
    <div class="col s12 center">
        <p class="center-align light">
        <h1><a href="/services" title="Click for Check all the Services"><i class="mdi-navigation-expand-more"></i></a></h1>
        </p>
    </div>
</div>

<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url()?>images/background3.jpg" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 center">
                <h3><i class="mdi-communication-location-on brown-text"></i></h3>
                <h4>Our Location</h4>
                <p class="center-align light"> APM Shopping Mall Soriano Avenue, Cebu North Reclamation Area Cebu City, Philippines </p>
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 m12 l12 center">
                <div class="s6 m4 l2 hide-on-med-and-down">
                    <iframe class="map  z-depth-3" src="https://www.google.com/maps/d/embed?mid=z_xhSjPnDltc.kRxjxwyChNN0" style="width: 900px; height: 360px;  border: 0px"></iframe>
                </div>
                <div class="s1 m1 hide-on-large-only show-on-small">
                    <iframe class="map  z-depth-3" src="https://www.google.com/maps/d/embed?mid=z_xhSjPnDltc.kRxjxwyChNN0" style="width: 300px; height: 300px; border: 0px"></iframe>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col s12 center">
        <p class="center-align light">
        <h1><a href="/location" title="Click for Check all the Services"><i class="mdi-navigation-expand-more"></i></a></h1>
        </p>
    </div>
</div>

<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">A good quality service right in the heart of Cebu City</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url()?>images/skyline65.jpg" alt="Unsplashed background img 3"></div>
</div>