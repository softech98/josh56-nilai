
    $(document).ready(function() {
        $('input#nip')
            .maxlength({
                alwaysShow: true,
                placement: 'top',
                warningClass: "label label-danger",
            limitReachedClass: "label label-success"
            });
        $('input#username')
            .minlength({
                alwaysShow: true,
                placement: 'top',
                warningClass: "label label-success",
            limitReachedClass: "label label-danger"
            });
        $('input#nis')
            .maxlength({
                alwaysShow: true,
                placement: 'top',
                warningClass: "label label-danger",
            limitReachedClass: "label label-success"
            });
            $('input#nisn')
            .maxlength({
                alwaysShow: true,
                placement: 'top',
                warningClass: "label label-danger",
            limitReachedClass: "label label-success"
            });
        $(
            'input#defaultconfig'
        ).maxlength({
            alwaysShow: true
        });

        $(
            'input#thresholdconfig'
        ).maxlength({
            threshold: 20,
            alwaysShow: true

        });
        $(
            'input#moreoptions'
        ).maxlength({
            alwaysShow: true,
            warningClass: "label label-success",
            limitReachedClass: "label label-danger"
        });

        $(
            'input#alloptions'
        ).maxlength({
            alwaysShow: true,
            warningClass: "label label-success",
            limitReachedClass: "label label-danger",
            separator: ' chars out of ',
            preText: 'You typed ',
            postText: ' chars.',
            vali
                : true
        });
        $(
            'textarea#textarea'
        ).maxlength({
            alwaysShow: true
        });

        $(".display-no").hide();

        $('input#placement')
            .maxlength({
                alwaysShow: true,
                placement: 'top'
            });

        $('#card').card({
            container: $('.card-wrapper')
        });

        $('.autogrow_area').autogrow({onInitialize: true});


    });
