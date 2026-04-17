jQuery(function($) {
    const $container = $('section.current-promotions .card-container > .wp-block-group__inner-container, section.review .card-container > .wp-block-group__inner-container');
    $container.masonry({
        itemSelector: '.card',
        columnWidth: '.card',
        percentPosition: true,
        gutter: 28
    });
});