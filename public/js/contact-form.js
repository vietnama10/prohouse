/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var baseUrl = window.location.href.match(/^.*\//);

//submit contact form
$(document).ready(function () {
    ajaxSubmitForm('.form_SendContact', 1);
});

function ajaxSubmitForm(form, form_reset = 1) {
    $(form).ajaxForm(function (result) {
        console.log(result);
        if (result.status === 0) {
            var errors = "ERRORS: ";
            $.each(result.errors, function (key, val) {
                errors += val;
            });
            alert(errors);
        }
        if (result.status === 1) {
            alert(result.success);
            if (form_reset) {
                $(form)[0].reset();
            }
        }
//        console.log(result);
    });
}