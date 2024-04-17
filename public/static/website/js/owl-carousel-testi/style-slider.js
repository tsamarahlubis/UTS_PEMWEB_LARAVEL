$('.owl-carousel').owlCarousel({
    stagePadding: 200,
    loop:true,
    margin:40,
    nav:false,
    responsiveClass: true,
    responsive:{
        0:{
            items:1,
            margin: 10,
            stagePadding: 50
        },
        700:{
            items: 1
        },
        900:{
            items:1,
            stagePadding:200
        },

        1024:{
            items:1
        }

    }
});

$('.owl-preve').click(function () {
    $('.owl-carousel').trigger('prev.owl.carousel');
});

$('.owl-nextee').click(function () {
    $('.owl-carousel').trigger('next.owl.carousel');
});