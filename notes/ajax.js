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

            $("#top-3-message").html('submitting');

            $.ajax({
                url: 'server-pipe.php',
                type: 'post',
                dataType: 'json',
                contentType: 'application/json',
                success: function (data) {
                    console.log('done');
                    $("#top-3-message").html(data.msg);
                },
                data: JSON.stringify(person)
            });


            $.post('server-pipe.php', person, function(response){
                console.log(response);
            });
        });