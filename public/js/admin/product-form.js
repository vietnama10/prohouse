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
            url: baseUrl+"product/getProjectsOfType",
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
    $('#name').blur(function(){
       $('#url_key').val(url_slug($(this).val())); 
    });
    
    //Submit Add product
    $('#btn-addProduct').click(function(e){
       e.preventDefault();
       
       var _token = $('meta[name=csrf-token]').attr("content");
       var type_id = $('#type').val();
       var project_id = $('#project').val();
       var sku = $('#sku').val();
       var name = $('#name').val();
       var url_key = $('#url_key').val();
       var price = $('#price').val();
       var description = $('#description').val();
       var size = $('#size').val();
       var level = $('#level').val();
       var bedroom = $('#bedroom').val();
       var bathroom = $('#bathroom').val();
       var status = $('#status').is(':checked')?'Available':'Not Available';
       var direction = $('#direction').val();
       var location = $('#location').val();
       var address = $('#address').val();
       var interior = $('#interior').val();
       //if the form has been validated
        if($('#demo-form2').parsley().isValid()){
            $.ajax({
            url: baseUrl+"product/new",
            type: "post",
            data: {
                _token:_token, type_id: type_id,
                project_id: project_id, sku: sku,
                name: name, url_key: url_key,
                price: price, description: description,
                size: size, level: level, bedroom:bedroom,
                bathroom: bathroom, status: status,
                location: location, direction: direction,
                address: address, interior: interior
            },
            success: function (result) {
                $('#error_message').hide();
                $('#success_message').hide();
                if(result.status === 0){
                    $('#error_message').show();
                    $('#error_message ul').empty();
                    $.each(result.errors, function(key,val){
                        $('#error_message ul').append('<li>'+val+'</li>');
                    });
                }
                if(result.status === 1){
                    $('#success_message').show();
                    $('#success_message ul').empty();
                    $('#success_message ul').append('<li>'+result.success+'</li>');
                }
            }
        });
        };
    });
    //Reset Form
    $('#btn_resetForm').click(function(){
       $(this).find('input, checkbox, select').val(''); 
    });
    
});

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