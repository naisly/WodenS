/**
 * Created by Home on 01.11.2015.
 */

$(":checkbox").on("change", function(){
    var checkboxValues = {};
    $(":checkbox").each(function(){
        checkboxValues[this.id] = this.checked;
    });
    $.cookie('checkboxValues', checkboxValues, { expires: 7, path: '/' })
});

function repopulateCheckboxes(){
    var checkboxValues = $.cookie('checkboxValues');
    if(checkboxValues){
        Object.keys(checkboxValues).forEach(function(element) {
            var checked = checkboxValues[element];
            $("#" + element).prop('checked', checked);
        });
    }
}

$.cookie.json = true;
repopulateCheckboxes();

