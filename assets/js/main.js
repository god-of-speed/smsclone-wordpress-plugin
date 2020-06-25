$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});

$(document).ready(function() {
    $('.placeholder-btn').on('click', function(e) {
        $textToCopy = $(e.target).text();
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($textToCopy).select();
        document.execCommand("copy");
        $temp.remove();
    });
});