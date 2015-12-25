/**
 * Created by Home on 25.12.2015.
 */
function toggle_categories() {
    $("#toggleCategories").slideToggle("slow");

    var src = $('img[alt="not-found"]').attr('src');
    var newSrc;

    if(src === "/shop/images/plus.png"){
        newSrc = "/shop/images/close.png";
    } else if(src === "/shop/images/close.png"){
        newSrc = "/shop/images/plus.png";
    }

    $('img[alt="not-found"]').attr("src", newSrc);

}
