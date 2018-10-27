(function($){

    $(document).ready(function() {

        var checkGroup = 0;
        $('.checkbox-max-3').change(function() {
            console.log('Start: ' + checkGroup);
            if(this.checked) {
                checkGroup++;
            } else {
                checkGroup--;
            }
            if(checkGroup > 3){
                $( this ).prop( "checked", false );
                checkGroup--;
                $("#top-3-message").html("You've selected your top 3. Unselect an option to choose this option.");
            } else {
                if(checkGroup == 3){
                    $("#top-3-message").html("Great! Click the 'Get Matched' button to continue." );
                } else {
                    $("#top-3-message").html("Choose up to " + ( 3 - checkGroup ) + " more." );
                }
            }
            console.log('End: ' + checkGroup);
        });

        $( "#register-interests" ).submit(function( event ) {
            event.preventDefault();

            // var person = {
            //     name: $("#id-name").val(),
            //     address:$("#id-address").val(),
            //     phone:$("#id-phone").val()
            // }
            var person = {
                name: 'Test'
            }

            // $('#target').html('sending..');

            $.ajax({
                url: 'forms/save-forms.php',
                type: 'post',
                dataType: 'json',
                contentType: 'application/json',
                success: function (data) {
                    // $('#target').html(data.msg);
                },
                data: JSON.stringify(person)
            });
        });

    });

})(jQuery);