/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var baseUrl = window.location.href.match(/^.*\//);
//Add product
$(document).ready(function () {
    //Type Change
    $('#type').change(function () {
        $('#form_overlay').show();
        $.ajax({
            url: baseUrl + "product/getProjectsOfType",
            type: "get",
            data: {
                type: $('#type').val()
            },
            success: function (result) {
                $("#project").empty().append(result);
                $('#form_overlay').hide();
            }
        });
    });

    // generate url_key by name
    $('#name').blur(function () {
        $('#url_key').val(url_slug($(this).val()));
    });

    //Preview images upload
    $('#images').on('change', function () {
        $('.images-preview').empty();
        imagesPreview(this, '.images-preview');
    });

    // jQuery ajaxForm when submit form
    ajaxSubmitForm('.form_CreateProduct', '#error_message', '#success_message');

    //Reset Form
    $('#btn_resetForm').click(function () {
        $('.form_CreateProduct')[0].reset();
        $('.images-preview').empty();
    });

});

//Add Type, Project
$(document).ready(function () {
    // jQuery ajaxForm when submit form
    ajaxSubmitForm('.form_CreateType', '#error_message', '#success_message');
    // jQuery ajaxForm when submit form
    ajaxSubmitForm('.form_CreateProject', '#error_message', '#success_message');
});

//Load and Save COnfig page
$(document).ready(function () {
    if ($('body').find('#configPage').length !== 0) {
        $('#form_overlay').show();
        $.ajax({
            url: baseUrl + "config/getAllConfig",
            type: "get",
            success: function (result) {
                var skip_binding = ["cf_logo"];
                if (result.length !== 0) {
                    //binding data
                    $.each(result, function (key, value) {
                        if (skip_binding.indexOf(value.config_tag) === -1) {
                            $('.form_SaveConfigs').find('#' + value.config_tag).val(value.config_value);
                        } else {
                            $('.images-preview').append('<img src="public/images/' + value.config_value + '" alt="Logo"/>');
                            $('#current_logo').val(value.config_value);
                        }
                    });
                    $('#form_overlay').hide();
                }
            }
        });
    }

    ajaxSubmitForm('.form_SaveConfigs', '#error_message', '#success_message', 0);
});

function ajaxSubmitForm(form, error_message, success_message, form_reset = 1) {
    $(form).ajaxForm(function (result) {
        $(error_message).hide();
        $(success_message).hide();
        $('#form_overlay').show();
        if (result.status === 0) {
            $(error_message).show();
            $(error_message + ' ul').empty();
            $.each(result.errors, function (key, val) {
                $(error_message + ' ul').append('<li>' + val + '</li>');
            });
        }
        if (result.status === 1) {
            $(success_message).show();
            $(success_message + ' ul').empty();
            $(success_message + ' ul').append('<li>' + result.success + '</li>');
            // reset form
            if (form_reset) {
                $(form)[0].reset();
                $('.images-preview').empty();
            }
        }
        $('.modal, body').animate({scrollTop: '0px'}, 1000);
        $('#form_overlay').hide();
        console.log(result);
    });
}
function imagesPreview(input, placeToInsertImagePreview) {

    if (input.files) {
        var filesAmount = input.files.length;

        for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();

            reader.onload = function (event) {
                $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
            }

            reader.readAsDataURL(input.files[i]);
        }
    }

}
;

function url_slug(str) {
    var slug;

    //Đổi chữ hoa thành chữ thường
    slug = str.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    return slug;
}