function ShowFeedback(message){
    $('.feedback').fadeOut('slow', function() {
        $('.feedback').html(message);
        $('.feedback').fadeIn('slow', function() {
            //
        });
    });
}