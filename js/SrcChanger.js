/**
 * Created by Home on 11.12.2015.
 */

function toggle(){
    $("#toggleTextFooter").toggle("slow");
    var x = document.getElementById("displayTextFooter");

    if(x.style.fontWeight == "bold"){
        x.style.fontWeight = "normal";
    } else {
        x.style.fontWeight = "bold";
    }

    var src = $('img[alt="arrow"]').attr('src');
    var newSrc;

    if(src === "/images/arrow-down.png"){
        newSrc = "/images/arrow-top.png";
    } else if(src === "/images/arrow-top.png"){
        newSrc = "/images/arrow-down.png";
    }

    $('img[alt="arrow"]').attr("src", newSrc);
}
function toggle1(){
    $("#toggleTextFooter1").toggle("slow");
    var y = document.getElementById("displayTextFooter1");

    if(y.style.fontWeight == "bold"){
        y.style.fontWeight = "normal";
    } else {
        y.style.fontWeight = "bold";
    }

    var src = $('img[alt="arrow1"]').attr('src');
    var newSrc;

    if(src === "/images/arrow-down.png"){
        newSrc = "/images/arrow-top.png";
    } else if(src === "/images/arrow-top.png"){
        newSrc = "/images/arrow-down.png";
    }

    $('img[alt="arrow1"]').attr("src", newSrc);
}
function toggle2(){
    $("#toggleTextFooter2").toggle("slow");
    var z = document.getElementById("displayTextFooter2");

    if(z.style.fontWeight == "bold"){
        z.style.fontWeight = "normal";
    } else {
        z.style.fontWeight = "bold";
    }

    var src = $('img[alt="arrow2"]').attr('src');
    var newSrc;

    if(src === "/images/arrow-down.png"){
        newSrc = "/images/arrow-top.png";
    } else if(src === "/images/arrow-top.png"){
        newSrc = "/images/arrow-down.png";
    }

    $('img[alt="arrow2"]').attr("src", newSrc);
}
function toggle3(){
    $("#toggleTextFooter3").toggle("slow");
    var q = document.getElementById("displayTextFooter3");

    if(q.style.fontWeight == "bold"){
        q.style.fontWeight = "normal";
    } else {
        q.style.fontWeight = "bold";
    }

    var src = $('img[alt="arrow3"]').attr('src');
    var newSrc;

    if(src === "/images/arrow-down.png"){
        newSrc = "/images/arrow-top.png";
    } else if(src === "/images/arrow-top.png"){
        newSrc = "/images/arrow-down.png";
    }

    $('img[alt="arrow3"]').attr("src", newSrc);
}
function toggle4(){
    $("#toggleTextFooter4").toggle("slow");
    var g = document.getElementById("displayTextFooter4");

    if(g.style.fontWeight == "bold"){
        g.style.fontWeight = "normal";
    } else {
        g.style.fontWeight = "bold";
    }

    var src = $('img[alt="arrow4"]').attr('src');
    var newSrc;

    if(src === "/images/arrow-down.png"){
        newSrc = "/images/arrow-top.png";
    } else if(src === "/images/arrow-top.png"){
        newSrc = "/images/arrow-down.png";
    }

    $('img[alt="arrow4"]').attr("src", newSrc);
}
function toggle5() {
    $("#toggleTextFooter5").toggle("slow");

    $("body").animate({"scrollTop": $('#scroll-handler').offset().top }, "slow");
}