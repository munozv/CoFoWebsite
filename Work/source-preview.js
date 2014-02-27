/**
 * createIT Source Preview Plugin
 */

jQuery(document).ready(function ($) {
    $('a.source-preview').click(function () {
        var $a = $(this);
        var url = $a.attr('data-url');

        $.colorbox({
            width: $a.attr('data-width'),
            height: $a.attr('data-height'),
            href: url,
            className: 'createit-source-preview',
            iframe: true,
            title: $(document).attr('title'),
            onOpen: function () {
                $('html').bind('mousewheel.source_preview',function(){
                    return false;
                });
            },
            onClosed: function () {
                 $('html').unbind('mousewheel.source_preview');
            }
        });
    });
});