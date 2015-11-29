/**
 * Created by Home on 29.11.2015.
 */
function toggle0() {
    var ele0 = document.getElementById("toggleText0");
    var text0 = document.getElementById("displayText0");
    if(ele0.style.display == "block") {
        ele0.style.display = "none";
        text0.innerHTML = "show";
    }
    else {
        ele0.style.display = "block";
        text0.innerHTML = "hide";
    }
}

function toggle1() {
    var ele1 = document.getElementById("toggleText1");
    var text1 = document.getElementById("displayText1");
    if(ele1.style.display == "block") {
        ele1.style.display = "none";
        text1.innerHTML = "show";
    }
    else {
        ele1.style.display = "block";
        text1.innerHTML = "hide";
    }
}
