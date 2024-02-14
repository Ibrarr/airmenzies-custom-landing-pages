import Splide from '@splidejs/splide';

jQuery(document).ready(function ($) {
    const splide = new Splide('#testimonials-slider', {
        type        : 'loop',
        focus       : 'center',
        direction   : 'ttb',
        height      : '30em',
        updateOnMove: true,
        autoplay    : true,
        pauseOnHover: true,
        drag        : false,
        pagination  : false,
        arrows      : false,
        start       : 1,
        perPage     : 3,
        perMove     : 1,
        breakpoints : {
            767: {
                focus  : 1,
                perPage: 2,
            },
        },
    });

    splide.mount();
});