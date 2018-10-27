(function($){

    $(document).ready(function() {

        /* ***** Scroll Action ***** */
        $( '.smoothscroll' ).click( function( e ) {

            e.preventDefault();

            var goHere = $( this ).attr( 'href' );

            $( 'html, body' ).animate({
                scrollTop: $( goHere ).offset().top - 75
            }, 500 );

        });

        // CHECKBOX MAX 3
        var checkGroup = 0;
        $('.checkbox-max-3').change(function() {
            if(this.checked) {
                checkGroup++;
            } else {
                checkGroup--;
            }
            if(checkGroup > 3){
                $( this ).prop( "checked", false );
                checkGroup--;
                $("#top-3-message").html('<h3 class="notice warning">You\'ve selected your top 3. Unselect an option first.</h3>');
            } else {
                if(checkGroup == 3){
                    $("#top-3-message").html('<h3 class="notice valid">Great! Click the \'Get Matched\' button to continue.</h3>');
                } else {
                    $("#top-3-message").html('<h3 class="notice valid">Choose up to <span class="amt">' + ( 3 - checkGroup ) + '</span> more interests.</h3>');
                }
            }
        });

    });

})(jQuery);