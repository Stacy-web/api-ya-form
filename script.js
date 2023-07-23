( function( $ ) {
<<<<<<< HEAD
    let inputMem = {};

    function checkInFiles(files, file) {
        for (let i = 0; i < files.length; i++) {
            console.log(files[i]['name']);
            if (files[i]['name'] == file['name']) {
                return true;
            } 
        }

        return false;
    }

    $('.custom-input__file input').on('change', function() {
        const files = this.files;
        const name = $(this).attr('name');
        const filesList = $(this).closest('.custom-input__file').next();

        if (!inputMem[name]) {
            inputMem[name] = [];
        }

        for (let i = 0; i < files.length; i++) {
            if (!checkInFiles(inputMem[name], files[i])) {
                inputMem[name].push(files[i]);
            }
        }

        filesList.html('');
        
        for (let i = 0; i < inputMem[name].length; i++) {
            filesList.append('<li><span>' + inputMem[name][i]['name'] + '</span><a href="">x</a></li>');
        }
    });


    $('[name="object_type"]').on('change', function() {
        const objectType = $(this).val();

        $('[data-obj-type]').hide();
        $('[data-obj-type="' + objectType + '"]').fadeIn();
    });
=======
    $('.custom-input__file input').on('change', function() {
        const files = this.files;
        
        for (let i = 0; i < files.length; i++) {
            $(this)
                .closest('.custom-input__file')
                    .next().append('<li><span>' + files[i]['name'] + '</span><a href="">x</a></li>');
        }
    });
>>>>>>> 8e1140118d548c64a1ad0f6ed053cace09319191
} )(jQuery);