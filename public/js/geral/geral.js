$('.repeater').repeater({

    show: function () {

        $(this).slideDown();

        // Reindexar ID's
        setIndexes();
    },
    hide: function (deleteElement) {
        // if(confirm('Are you sure you want to delete this element?')) {

        // }
        $(this).slideUp(deleteElement);
    },
    ready: function (setIndexes) {

    }
});

function setIndexes() {
    $('div[data-repeater-list] div[data-repeater-item]').each(function($idx, $item) {
        $($item).find('[name]').each(function() {
            $element = $(this);
            if ($element.attr('id')) {
                $element.attr('id', $element.attr('id').replace(/[0-9]{1,3}/, $idx));
            }
        });

        $($item).find('[for]').each(function() {
            $element = $(this);
            if ($element.attr('for')) {
                $element.attr('for', $element.attr('for').replace(/[0-9]{1,3}/, $idx));
            }
        });
    });
}
