(function($){
    $(function(){

        $('.button-collapse').sideNav();
        $('.parallax').parallax();
        $('.slider').slider({full_width: true});
        $('.dropdown-button').dropdown({
                inDuration: 300,
                outDuration: 225,
                constrain_width: false, // Does not change width of dropdown to that of the activator
                //hover: true, // Activate on hover
                gutter: 0, // Spacing from edge
                belowOrigin: false // Displays dropdown below the button
            }
        );
        $('.modal-trigger').leanModal();
        smoothScroll.init({
            speed: 1000,
            easing: 'easeInOutCubic',
            offset: 0,
            updateURL: true,
            callbackBefore: function ( toggle, anchor ) {},
            callbackAfter: function ( toggle, anchor ) {}
        });
    }); // end of document ready
})(jQuery); // end of jQuery name space