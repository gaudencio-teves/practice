<body onLoad="initialize()">

<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="center brand-logo">Logo</a>
            <ul class="right hide-on-medgit -and-down">
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
<div class="container">
    <div class="section">
<div class="row">
    <?php
        $i = 0;
        foreach($services as $serv){
            //var_dump($serv);
     ?>
            <div class="col s12 m4 l4">
                    <div class="card small">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo $serv['service_photo'][0]['source']?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><?php echo $serv['name']?><i class="mdi-navigation-more-vert right" title="More information"></i></span>
                            <!--<p><a href="#">See more<i class="mdi-navigation-chevron-right"></i></a></p>-->
                            <h4><i class="mdi-navigation-chevron-right see_more" title="See more" data-service-id="<?php echo $serv['id']?>"</i></h4>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Description: <i class="mdi-navigation-close right"></i></span>
                            <p><?php echo $serv['description']?></p>
                        </div>
                    </div>
            </div>
    <?php
            $i++;
        }
    ?>
    <?php //var_dump($services);die();?>
        </div>
    </div>
</div>
<button onclick="see_more(this)">ALAALALALALALALH!</button>
