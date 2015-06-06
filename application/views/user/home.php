<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="<?php echo base_url()?>css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo base_url()?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="center brand-logo">Logo</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down button-collapse"">
                <li><a href="#">Navbar Link</a></li>
                <li><a href="#">Navbar Link</a></li>
            </ul>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php if(isset($this->session->userdata['result']) && is_array($this->session->userdata['result'])){
                    ?>
                    <a class='waves-effect dropdown-button btn' href='#' data-beloworigin="true" data-activates='login-l'>Profile</a>
                    <ul id='login-l' class='dropdown-content'>
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">three</a></li>
                    </ul>
                <?php
                } else{
                    ?>
                    <a class='waves-effect modal-trigger btn' href='#modal1'>Login</a>

                <?php } ?>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <?php if(isset($this->session->userdata['result']) && is_array($this->session->userdata['result'])){
                    ?>
                    <a class='waves-effect dropdown-button btn' href='#' data-beloworigin="true" data-activates='login-l'>Profile</a>
                    <ul id='login-l' class='dropdown-content'>
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">three</a></li>
                    </ul>
                <?php
                } else{
                    ?>
                    <a class='waves-effect modal-trigger btn' href='#modal1'>Login</a>

                <?php } ?>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        </div>
    </nav>
</div>
<div id="modal1" class="modal">
    <form method="post" action="<?php echo base_url("user/user/login")?>">
        <div class="modal-content">
            <h4>Login</h4>
            <div class="row">
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
            <button type="submit" class="large waves-effect waves-green btn-flat mdi-content-send">
        </div>
    </form>

</div>

<!--
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
-->
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
            <div class="row center">
                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url()?>images/background1.jpg" alt="Unsplashed background img 2"></div>
</div>


<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="mdi-image-flash-on"></i></h2>
                    <h5 class="center">Speeds up development</h5>

                    <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="mdi-social-group"></i></h2>
                    <h5 class="center">User Experience Focused</h5>

                    <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="mdi-action-settings"></i></h2>
                    <h5 class="center">Easy to work with</h5>

                    <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                </div>
            </div>
        </div>

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
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h4>Contact Us</h4>
                <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
            </div>
        </div>

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
    <div class="parallax"><img src="<?php echo base_url()?>images/background2.jpg" alt="Unsplashed background img 3"></div>
</div>

<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="dropdown-button" href="#!" data-beloworigin="true" data-activates="dropdown1">Dropdown<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="dropdown-button" href="#!" data-beloworigin="true" data-activates="dropdown1">Dropdown<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>



<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url()?>js/materialize.js"></script>
<script src="<?php echo base_url()?>js/init.js"></script>
<script src="<?php echo base_url()?>js/smooth.js"></script>
<script src="<?php echo base_url()?>js/inMaterialize.js"></script>
</body>
</html>
