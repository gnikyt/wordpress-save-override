jQuery(document).bind('keydown', 'meta+s', function(e) {
    wsoSavePost(e);
});
jQuery(document).bind('keydown', 'ctrl+s', function(e) {
    wsoSavePost(e);
});

function wsoSavePost(e) {
    var $publish = jQuery('input#publish');

    if ($publish.length > 0) {
        e.preventDefault();

        $publish.click();
    }
}