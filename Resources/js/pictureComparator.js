jQuery(document).ready(function($){
    $(".v-widget--picturecomparator .twentytwenty-container").each(function() {
        var orientation = 'horizontal';
        var initialOffset = 0.5;
        var beforeLabel = "Before";
        var afterLabel = "After";

        if ($(this).attr('data-orientation') != '') {
            orientation = $(this).attr('data-orientation');
        }
        if ($(this).attr('data-initialOffset') != '') {
            initialOffset = parseInt($(this).attr('data-initialOffset'))/100;
        }
        if ($(this).attr('data-before-label') != '') {
            beforeLabel = $(this).attr('data-before-label');
        }
        if ($(this).attr('data-after-label') != '') {
            afterLabel = $(this).attr('data-after-label');
        }

        $(this).twentytwenty({
            'orientation': orientation,
            'default_offset_pct': initialOffset,
            'before_label': beforeLabel,
            'after_label': afterLabel
        });
    });
});