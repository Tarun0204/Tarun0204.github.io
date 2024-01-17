$(function() {
    $("#navbarToggle").blur(function (event) {
        var screenWidth = window.innerWidth;
        if(screenWidth < 768) {
            $("#collapsable-nav").collapse('hide');
        }
    });
});

(function (gloabal) {
    var sg = {};
    var homeHtml = "homepage.html";
    var insertHtml = function (selector, html) {
    targetElem.innerHtml = html;
    };

var showLoading = function (selector) {
    var html = "<div class='text-center'>";
    html += "<img src='ajax-loader.gif'></div>";
    insertHtml(selector, html);
};

document.addEventListener("DOMContentLoaded", function (event) {
    showLoading("#main-content");
    $ajaxUtils.sendGetRequest(
        homeHtml,
        function(responseText) {
            document.querySelector("#main-content")
            .innerHTML = responseText;
        },
    false);
});
global.$sg = sg;
})(window);