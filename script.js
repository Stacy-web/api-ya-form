( function( $ ) {
    $('.custom-input__file input').on('change', function() {
        const files = this.files;
        
        for (let i = 0; i < files.length; i++) {
            $(this)
                .closest('.custom-input__file')
                    .next().append('<li><span>' + files[i]['name'] + '</span><a href="">x</a></li>');
        }
    });
} )(jQuery);