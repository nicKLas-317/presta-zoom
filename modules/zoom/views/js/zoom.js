// TODO : if <div class="layer hidden-sm-down"></div> => delete it without delete img into


//BEGIN ZOOM on img product
$('.js-qv-product-cover').on('click', function () {
    $('.js-qv-product-cover')
        .wrap('<span style="display:inline-block"></span>')
        .css('display', 'block')
        .parent()
        .zoom({
            on: 'click',
            magnify: 1.5,
            url: $('.js-qv-product-cover').attr('src'),

            onZoomOut: function () {
                $('.js-qv-product-cover').trigger('zoom.destroy');
            }
        });
})
// END ZOOM on img product
