/**
 * Created by Home on 31.12.2015.
 */

$(".collection-of-information").click(function() {
    $("html,body").animate({
            scrollTop: $("#collection-of-information").offset().top},
        "slow");
});
$(".use-of-personal-data").click(function() {
    $("html,body").animate({
            scrollTop: $("#use-of-personal-data").offset().top},
        "slow");
});
$(".disclosure-of-personal-data").click(function() {
    $("html,body").animate({
            scrollTop: $("#disclosure-of-personal-data").offset().top},
        "slow");
});
$(".security-measures").click(function() {
    $("html,body").animate({
            scrollTop: $("#security-measures").offset().top},
        "slow");
});
$(".cookies").click(function() {
    $("html,body").animate({
            scrollTop: $("#cookies").offset().top},
        "slow");
});
