( function( $ ) {
    $('.custom-input__file input').on('change', function() {
        const files = this.files;
        
        for (let i = 0; i < files.length; i++) {
            console.log(files[i]);
        }
    });
} )(jQuery);