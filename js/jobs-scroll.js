/**
 * Created by Home on 01.01.2016.
 */

$(".sales-assistant").click(function() {
    $("html,body").animate({
            scrollTop: $("#sales-assistant").offset().top},
        "slow");
});
$(".consultant").click(function() {
    $("html,body").animate({
            scrollTop: $("#consultant").offset().top},
        "slow");
});
$(".director").click(function() {
    $("html,body").animate({
            scrollTop: $("#director").offset().top},
        "slow");
});