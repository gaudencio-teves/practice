<footer class="page-footer teal">
<div class="container">
    <div class="row">
        <div class="col l6 s12 white-text right-align hide-on-med-and-down">
            <h2><i class="mdi-image-tag-faces white-text"></i></h2>
            <h4>Who we are</h4>
            <p class="light"> We are a dedicated group of individuals that has lived to do one thing: to make a world wherein smile can be seen everywhere
                </br>
                Developer: Gaudencio Teves
                </br>
                Lead Dentist: Joel Taytayan

            </p>
        </div>
        <div class="col l6 s12 white-text left-align show-on-small hide-on-large-only">
            <h2><i class="mdi-image-tag-faces white-text"></i></h2>
            <h4>Who we are</h4>
            <p class="light"> We are a dedicated group of individuals that has lived to do one thing: to make a world wherein smile can be seen everywhere
                </br>
                Developer: Gaudencio Teves
                </br>
                Lead Dentist: Joel Taytayan

            </p>
        </div>

        <div class="col l6 s12 white-text">
            <h2><i class="mdi-maps-local-phone white-text"></i></h2>
            <h4>Contact Us</h4>
            <p class="left-align light"> Questions? Suggestions? Give us a thumb!
                </br>
                <i class="mdi-communication-email"></i>
                captainbuggythefifth@gmail.com
                </br>
                <i class="mdi-hardware-smartphone"></i>
                +632945678643
            </p>
        </div>
    </div>
</div>
<div class="footer-copyright">
    <div class="container">
        Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Gaudencio Teves</a>
        </br>
        Powered by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
    </div>
</div>
</footer>



<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js">
    $( window ).resize(function() {
        //$( "#log" ).append( "<div>Handler for .resize() called.</div>" );
        $(".map").width($(".map").parent().width());
        $(".map").height($(".map").parent().height());
    });
</script>
<script src="<?php echo base_url()?>js/materialize.js"></script>
<script src="<?php echo base_url()?>js/init.js"></script>
<script src="<?php echo base_url()?>js/smooth.js"></script>
<script src="<?php echo base_url()?>js/inMaterialize.js"></script>
<script type="javascript">
    $( window ).resize(function() {
        //$( "#log" ).append( "<div>Handler for .resize() called.</div>" );
        $(".map").width($(".map").parent().width());
        $(".map").height($(".map").parent().height());
    });
</script>

</body>
</html>
