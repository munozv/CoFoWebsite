jQuery(document).ready(function () {
    var firstRun = true;
    jQuery('#themeSwitcher select').ddslick({
        onSelected: function (ddData) {
            if (!firstRun) {
                if (ddData.selectedData) {
                    window.location = ddData.selectedData.value;
                }
            }
            firstRun = false;
        }
    });

    jQuery('#themeSwitcher a.dd-option[rel]').qtip({
        content: {
            text: function (api) {
                return '<div class="themePreviewImage"><img src="' + jQuery(this).attr('rel') + '" alt=""/>';
            }
        },
        style: {
            classes: 'qtip-dark theme-qtip-custom ui-tooltip-rounded',
            tip: {
                width: 14,
                height: 8
            }
        },
        position: {
            my: 'left top',
            at: 'right top',
            adjust: {
                x: -7,
                y: 5,
            }
        }
    });
});