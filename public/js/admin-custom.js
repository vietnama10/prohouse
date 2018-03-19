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
        $.ajax({
            url: baseUrl+"product/getProjectsOfType",
            type: "get",
            data: {
                type: $('#type').val()
            },
            success: function (result) {
                $("#project").empty().append(result);
            }
        });
    })
})