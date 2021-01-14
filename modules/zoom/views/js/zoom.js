// $(document).ready(function(){
    $('.js-qv-product-cover').on('click', function (){
        console.log('début zoom');

        $('.js-qv-product-cover')
        .wrap('<span style="display:inline-block"></span>')
        .css('display', 'block')
        .parent()
        .zoom({
        on: 'click',
        magnify: 1.5,
        url: $('.js-qv-product-cover').attr('src'), 
        //   callback: function(){
        //     $(this).colorbox({href: this.src});
        //   }
        onZoomOut: function (){
            $('.js-qv-product-cover').trigger('zoom.destroy');
        }
        });
        console.log('fin zoom');
    })

//   });