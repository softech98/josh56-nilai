// bootstrap wizard//
$("#gender, #gender1").select2({
    theme:"bootstrap",
    placeholder:"",
    width: '100%'
});
$('input[type="checkbox"].custom-checkbox').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    increaseArea: '20%'
});
$("#dob").datetimepicker({
    format: 'YYYY-MM-DD',
    widgetPositioning:{
        vertical:'bottom'
    },
    keepOpen:false,
    useCurrent: false,
    maxDate: moment().add(1,'h').toDate()
});
$("#commentForm").bootstrapValidator({
    fields: {
        nama: {
            validators: {
                notEmpty: {
                    message: 'Nama is required'
                }
            },
            required: true,
            minlength: 3
        },
        last_name: {
            validators: {
                notEmpty: {
                    message: 'The last name is required'
                }
            },
            required: true,
            minlength: 3
        },
        password: {
            validators: {
                different: {
                    field: 'nama,last_name',
                    message: 'Password should not match first or last name'
                }
            }
        },
        password_confirm: {
            validators: {
                identical: {
                    field: 'password'
                },
                different: {
                    field: 'nama,last_name',
                    message: 'Confirm Password should match with password'
                }
            }
        },
        email: {
            validators: {
                notEmpty: {
                    message: 'The email address is required'
                },
                emailAddress: {
                    message: 'The input is not a valid email address'
                }
            }
        },
        activate: {
            validators: {
                notEmpty: {
                    message: 'Please check the checkbox to activate'
                }
            }
        },
        group: {
            validators:{
                notEmpty:{
                    message: 'You must select a group'
                }
            }
        }
    }
});
$('#activate').on('ifChanged', function(event){
    $('#commentForm').bootstrapValidator('revalidateField', $('#activate'));
});



