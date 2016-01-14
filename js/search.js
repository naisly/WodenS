/**
 * Created by Home on 14.01.2016.
 */

function disableOverflow(){
    var x = $("body").css("overflowY");
    if(x == "visible"){
        $("body")
            .css("overflow-y", "hidden");
        $("html")
            .css("overflow-y", "hidden");
    } else {
        $("body")
            .css("overflow-y", "visible");
        $("html")
            .css("overflow-y", "visible");
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

    if(src === "/shop/images/search-icon.png"){
        newSrc = "/shop/images/close-icon-md.png";
    } else if(src === "/shop/images/close-icon-md.png"){
        newSrc = "/shop/images/search-icon.png";
    }

    setTimeout(function() {
        $('img[alt="search"]').attr("src", newSrc);
    }, 500);

}
