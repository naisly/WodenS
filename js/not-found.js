/**
 * Created by Home on 25.12.2015.
 */
function toggle_categories() {
    $("#toggleCategories").slideToggle("slow");

    var q = document.getElementById("image-get-data-gl");

    if(q.style.transform == "rotate(45deg)"){
        q.style.transform = "rotate(90deg)";
    } else {
        q.style.transform = "rotate(45deg)";
    }

}
