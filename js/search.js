/**
 * Created by Home on 14.01.2016.
 */

$(function() {
    $("form").each(function() {
        $(this).find("input").keypress(function(e) {
            // Enter pressed?
            if(e.which == 10 || e.which == 13) {
                this.form.submit();
            }
        });

        $(this).find("input[type=submit]").hide();
    });
});
$(document).ready(function() {
    $("#txtboxToFilter").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
                // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});

$.fn.disableScroll = function() {
    var oldScrollPos = $(window).scrollTop();

    $(window).on('scroll.scrolldisabler',function ( event ) {
        $(window).scrollTop( "-200px" );
        event.preventDefault();
    });
};
$.fn.enableScroll = function() {
    $(window).off('scroll.scrolldisabler');
};

function disableOverflow(){
    var x = $("body").css("flex");

    if(x == "1 1 0%"){
        $("body")
            .css("flex", "2 2 2%");

        $("body").disableScroll();

        /*
        123
         */
        /*
        $('navbar').addClass('scroll');
        $('body').addClass('scroll');

        $('html')
            .css("overflow-y", "hidden");*/
        /*
        123
         */



        /*$("body")
            .css("overflow-y", "hidden");
        $("html")
            .css("overflow-y", "hidden");*/

        /*if ($(document).height() > $(window).height()) {
            var scrollTop = ($('html').scrollTop()) ? $('html').scrollTop() : $('body').scrollTop(); // Works for Chrome, Firefox, IE...
            $('html').addClass('noscroll').css('top',-scrollTop);
        }*/

        $("body")
            .css("overflow-y", "visible");
        $("navbar")
            .css("overflow-y", "visible");
    } else {
        $("body")
            .css("flex", "1 1 0%");

        $("body").enableScroll();


        /*
        123
         */
        /*
        $("html")
            .css("overflow-y", "visible");
        $("body")
            .css("overflow-y", "visible");
        $("navbar")
            .css("height", "auto");
        $('navbar')
            .css("height", "auto");*/
        /*
        123
         */



        /*$('navbar').removeClass('noscroll');*/

        var scrollTop = parseInt($('html').css('top'));
        $('html').removeClass('noscroll');
        $('html,body').scrollTop(-scrollTop);
    }

}
function changeCss(){

    x = document.getElementById("navbar");

    if(x.style.height !== "100%"){
        x.style.height = "100%";
    } else {
        x.style.height = "auto";
    }

}

function getSearchBox() {
    x = document.getElementById("navbar");

    if(x.style.height !== "100%"){
        x.style.height = "100%";
    } else {
        x.style.height = "auto";
    }

    disableOverflow();

    $("#invisible").toggle("slow");
    $("#divider").toggle("slow");

    var src = $('img[alt="search"]').attr('src');
    var newSrc;

    if(src === "/images/search-icon.png"){
        newSrc = "/images/close-icon-md.png";
    } else if(src === "/images/close-icon-md.png"){
        newSrc = "/images/search-icon.png";
    }

    setTimeout(function() {
        $('img[alt="search"]').attr("src", newSrc);
    }, 500);

}
