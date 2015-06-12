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
    <!--
    <div class="col s12 m4 l4">
        <div class="col l10 offset-l2">
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
    </div>
    <div class="col s12 m4 l4">
        <div class="col l10 offset-l1">
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
    </div>
    <div class="col s12 m4 l4">
        <div class="col l10 ">
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
    -->
    <?php
        $i = 0;
        foreach($services as $serv){
            //var_dump($serv);
     ?>
            <div class="col s10 m3 l4">
                <div class="col s12">
                    <div class="card small">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo $serv['service_photo'][0]['source']?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><?php echo $serv['name']?><i class="mdi-navigation-more-vert right" title="More information"></i></span>
                            <!--<p><a href="#">See more<i class="mdi-navigation-chevron-right"></i></a></p>-->
                            <h5><i class="mdi-navigation-chevron-right" onclick="Javascript:see_more_service_photo('<?php echo $serv['id']?>','<?php echo base_url()."see-more-photos?service_id=".$serv['id']?>')" title="See more" data-service-id="<?php echo $serv['id']?>"></i></h5>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Description: <i class="mdi-navigation-close right"></i></span>
                            <p><?php echo $serv['description']?></p>
                        </div>
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
<script type="javascript" src="<?php echo base_url("js/custom.js")?>">
</script>
