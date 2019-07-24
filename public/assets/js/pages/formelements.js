    $(document).ready(function() {
        
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
        $('input#nip').maxlength({
                alwaysShow: true,
                warningClass: "label label-danger",
                limitReachedClass: "label label-success",
                placement: 'top'
            });
            $('input#nisn').maxlength({
                alwaysShow: true,
                warningClass: "label label-danger",
                limitReachedClass: "label label-success",
                placement: 'top'
                        });
            $('input#nis').maxlength({
                alwaysShow: true,
                warningClass: "label label-danger",
                limitReachedClass: "label label-success",
                placement: 'top'
                                });

        $('input#hp').maxlength({
                alwaysShow: true,
                warningClass: "label label-success",
                limitReachedClass: "label label-success",
                placement: 'top'
            });

        $('input#nama').maxlength({
                alwaysShow: true,
            });

        $('input#email').maxlength({
                alwaysShow: true,
            });
         $('input#tempat_lahir').maxlength({
            alwaysShow: true,
        });

        $('input#username').maxlength({
                        alwaysShow: true,
                    });

        $('textarea#alamat').maxlength({
                        alwaysShow: true,
                    });

        $('#card').card({
            container: $('.card-wrapper')
        });

        $('.autogrow_area').autogrow({onInitialize: true});


    });
