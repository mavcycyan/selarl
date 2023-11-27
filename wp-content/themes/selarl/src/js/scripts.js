( function( $ ) {
    /*anim init*/
    AOS.init();
    /*anim init*/

    /*preloader*/
    $(document).ready(function() {
        setTimeout(function() {
            $('.js-preloader').removeClass('loading');
            setTimeout(function() {
                $('.js-preloader').remove();
            }, 500)
        }, 1500)
    });
    /*preloader*/


    /*header*/
    $(window).scroll(function(){
        var hHeight = $('.js-header').outerHeight() + $('.js-headerAnch').offset().top;
        if ($(window).scrollTop() > hHeight) {
            $('.js-header').addClass('fixed');
        } else {
            $('.js-header').removeClass('fixed');
        }
    });

    $('.js-hMenuBtn').click(function() {
        $('.js-fixData').addClass('active');
        $('.js-header').addClass('d-none');
    });
    $('.js-hMenuCls').click(function() {
        $('.js-fixData').removeClass('active');
        $('.js-header').removeClass('d-none');
    });
    /*header*/

    /*rdv*/
    $('.js-hRdvBtn').click(function() {
        if ($(window).width() < 992) {
            $(this).parent().toggleClass('active')
        }
    })
    /*rdv*/

    /*traitements image worker*/
    $('.js-mainTraitsImgChange').on('mouseover', function(){
        $('.js-mainTraitsImg img').attr('src', $(this).data('img'));
    });
    /*traitements image worker*/

    /*page team slider*/
    $(document).ready(function(){

        $('.js-teamSlider').each(function() {
            $(this).on("init reInit afterChange", function(event, slick) {
                $(this).closest('section').find('.js-teamSliderPagination').removeClass('d-none');
                var cnt = slick.options.slidesToScroll;
                $(this).closest('section').find(".js-teamSliderCounter").html(
                    '<span>' + (Math.ceil(slick.slickCurrentSlide() / cnt) + 1) + '</span><span class="sep"></span><span class="all">' + (Math.ceil(slick.slideCount / cnt)) + '</span>'
                );
                if (Math.ceil(slick.slideCount / cnt) <= 1) {
                    $(this).closest('section').find('.js-teamSliderPagination').addClass('d-none');
                }
            });
            $(this).on("setPosition", function(event, slick) {
                if ($(window).width() >= 992) {
                    var _this =  $(this);
                    var cnt = slick.options.slidesToScroll;
                    setTimeout(function(){
                        if (Math.ceil(slick.slideCount / cnt) <= 1) {
                            _this.find('.slick-track').width(_this.find('.slick-list').width());
                            _this.find('.slick-track .slick-slide').width(_this.find('.slick-list').width() / slick.slideCount);
                        }
                    }, 1000);
                }
            });
            $(this).slick({
                dots: false,
                arrows: true,
                nextArrow: '<div class="slider__arrows next__arrows"><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_3102_1042)"> <path d="M1.5 10L18.5 10" stroke="white" stroke-linecap="square" stroke-linejoin="round"/> <path d="M10.5 18.9999L19.5 9.99991L10.5 0.999908" stroke="white" stroke-linecap="square"/> </g> <defs> <clipPath id="clip0_3102_1042"> <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20.5 0)"/> </clipPath> </defs> </svg></div>',
                prevArrow:'<div class="slider__arrows prev__arrows"><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_3102_1039)"> <path d="M19.5 10L2.5 10" stroke="white" stroke-linecap="square" stroke-linejoin="round"/> <path d="M10.5 18.9999L1.5 9.99991L10.5 0.999908" stroke="white" stroke-linecap="square"/> </g> <defs> <clipPath id="clip0_3102_1039"> <rect width="20" height="20" fill="white" transform="translate(0.5)"/> </clipPath> </defs> </svg></div>',
                infinite: true,
                autoplay: false,
                autoplaySpeed: 5000,
                speed: 1500,
                slidesToShow: 4,
                slidesToScroll: 4,
                appendArrows: $(this).closest('section').find('.js-teamSliderArrows'),
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        });
    })
    /*page team slider*/



    /*trait tax team slider*/
    $(document).ready(function(){
        $('.js-teamTaxSlider').on("init reInit afterChange", function(event, slick) {
            $('.js-teamTaxSliderPagination').removeClass('d-none');
            var cnt = slick.options.slidesToScroll;
            $(".js-teamTaxSliderCounter").html(
                '<span>' + (Math.ceil(slick.slickCurrentSlide() / cnt) + 1) + '</span><span class="sep"></span><span class="all">' + (Math.ceil(slick.slideCount / cnt)) + '</span>'
            );
            if (Math.ceil(slick.slideCount / cnt) <= 1) {
                $('.js-teamTaxSliderPagination').addClass('d-none');
            }
        });
        $('.js-teamTaxSlider').slick({
            dots: false,
            arrows: true,
            nextArrow: '<div class="slider__arrows next__arrows"><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_3102_1042)"> <path d="M1.5 10L18.5 10" stroke="white" stroke-linecap="square" stroke-linejoin="round"/> <path d="M10.5 18.9999L19.5 9.99991L10.5 0.999908" stroke="white" stroke-linecap="square"/> </g> <defs> <clipPath id="clip0_3102_1042"> <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20.5 0)"/> </clipPath> </defs> </svg></div>',
            prevArrow:'<div class="slider__arrows prev__arrows"><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_3102_1039)"> <path d="M19.5 10L2.5 10" stroke="white" stroke-linecap="square" stroke-linejoin="round"/> <path d="M10.5 18.9999L1.5 9.99991L10.5 0.999908" stroke="white" stroke-linecap="square"/> </g> <defs> <clipPath id="clip0_3102_1039"> <rect width="20" height="20" fill="white" transform="translate(0.5)"/> </clipPath> </defs> </svg></div>',
            infinite: true,
            autoplay: false,
            autoplaySpeed: 5000,
            speed: 1500,
            slidesToShow: 3,
            slidesToScroll: 3,
            appendArrows: $('.js-teamTaxSliderArrows'),
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    })
    /*trait tax team slider*/

    /*clinics ajax*/
    $('.js-archClinTerms').click(function(){
        term = ($(this).data('term') == '0') ? '' : $(this).data('term');
        paged = 1;
        clinics_ajax($(this), '.js-archClinTerms');
    })
    $('body').on('click', '.js-archClinPaginator', function(){
        paged = $(this).data('page');
        clinics_ajax();
    })

    function clinics_ajax(_this = null, _class = null) {
        var data = {
            'action': 'clinics',
            'paged': paged,
            'posts_per_page': posts_per_page,
            'term': term
        };

        $.post(ajaxurl, data, function(response) {
            var ret = JSON.parse(response);
            if (ret.html !== undefined) {
                $('.js-archClinPosts').html(ret.html);
                if (_this !== null) {
                    $(_class).removeClass('active');
                    _this.addClass('active');
                }

                $('.js-archClinPagi').html(ret.pagination);
            }
        });
    }
    /*clinics ajax*/

    /*faq ajax*/
    $('.js-archFaqTerms').click(function(){
        term = ($(this).data('term') == '0') ? '' : $(this).data('term');
        paged = 1;
        faq_ajax($(this), '.js-archFaqTerms');
    })
    $('body').on('click', '.js-archFaqPaginator', function(){
        paged = $(this).data('page');
        faq_ajax();
    })
    $('.js-archFaqSearchBtn').click(function(){
        paged = $(this).data('page');
        search = $('.js-archFaqSearch').val();
        faq_ajax();
    })

    function faq_ajax(_this = null, _class = null) {
        var data = {
            'action': 'faq',
            'paged': paged,
            'posts_per_page': posts_per_page,
            'term': term
        };
        if (search !== '') {
            data.search = search;
        }

        $.post(ajaxurl, data, function(response) {
            var ret = JSON.parse(response);
            if (ret.html !== undefined) {
                $('.js-archFaqPosts').html(ret.html);
                if (_this !== null) {
                    $(_class).removeClass('active');
                    _this.addClass('active');
                }

                $('.js-archFaqPagi').html(ret.pagination);
            }
        });
    }
    /*faq ajax*/

    /*articles ajax*/
    $('.js-archArticlesTerms').click(function(){
        term = ($(this).data('term') == '0') ? '' : $(this).data('term');
        paged = 1;
        $('.js-archArticlesLoadMore').parent().removeClass('d-none');
        articles_ajax($(this), '.js-archArticlesTerms');
    })
    $('.js-archArticlesLoadMore').click(function(){
        paged = paged + 1;
        articles_ajax(null, null, true);
    })

    function articles_ajax(_this = null, _class = null, loadmore = false) {
        var data = {
            'action': 'articles',
            'paged': paged,
            'posts_per_page': posts_per_page,
            'term': term
        };

        $.post(ajaxurl, data, function(response) {
            var ret = JSON.parse(response);
            if (ret.html !== undefined) {
                if (!loadmore) {
                    $('.js-archArticlesPosts').html(ret.html);
                }
                else {
                    $('.js-archArticlesPosts').html($('.js-archArticlesPosts').html() + ret.html);
                }
                if (_this !== null) {
                    $(_class).removeClass('active');
                    _this.addClass('active');
                }
                if (ret.pagination === false)
                    $('.js-archArticlesLoadMore').parent().addClass('d-none');
            }
        });
    }
    /*articles ajax*/




    /*top section slider*/
    $(document).ready(function(){
        $('.js-tssSlider').on("init reInit afterChange", function(event, slick) {
            $('.js-tssSliderPagination').removeClass('d-none');
            var cnt = slick.options.slidesToScroll;
            $(".js-tssSliderCounter").html(
                '<span>' + (Math.ceil(slick.slickCurrentSlide() / cnt) + 1) + '</span><span class="sep"></span><span class="all">' + (Math.ceil(slick.slideCount / cnt)) + '</span>'
            );
            if (Math.ceil(slick.slideCount / cnt) <= 1) {
                $('.js-tssSliderPagination').addClass('d-none');
            }
        });
        $('.js-tssSlider').slick({
            fade: true,
            dots: false,
            arrows: true,
            nextArrow: '<div class="slider__arrows next__arrows"><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_3102_1042)"> <path d="M1.5 10L18.5 10" stroke="white" stroke-linecap="square" stroke-linejoin="round"/> <path d="M10.5 18.9999L19.5 9.99991L10.5 0.999908" stroke="white" stroke-linecap="square"/> </g> <defs> <clipPath id="clip0_3102_1042"> <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20.5 0)"/> </clipPath> </defs> </svg></div>',
            prevArrow:'<div class="slider__arrows prev__arrows"><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_3102_1039)"> <path d="M19.5 10L2.5 10" stroke="white" stroke-linecap="square" stroke-linejoin="round"/> <path d="M10.5 18.9999L1.5 9.99991L10.5 0.999908" stroke="white" stroke-linecap="square"/> </g> <defs> <clipPath id="clip0_3102_1039"> <rect width="20" height="20" fill="white" transform="translate(0.5)"/> </clipPath> </defs> </svg></div>',
            infinite: true,
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 1500,
            slidesToShow: 1,
            slidesToScroll: 1,
            appendArrows: $('.js-tssSliderArrows'),
        });
    })
    /*top section slider*/

    /*modal*/
    $('.js-modalOpen').click(function(e){
        e.preventDefault();
        $('.js-modal').removeClass('active');
        $('.js-modal[data-modal="'+$(this).data('modal')+'"]').addClass('active');
    });
    $('.js-modalClose').click(function(){
        $(this).closest('.js-modal').removeClass('active');
    });
    /*modal*/

    /*modal-patient*/
    $('body').on('click', '.js-modalPatientBtn', function(){
        var data = {
            'action': 'patient_modal',
            'step': $(this).data('step'),
            'value': $(this).data('val')
        };

        $.post(ajax_url, data, function(response) {
            var ret = JSON.parse(response);
            if (ret.html !== undefined) {
                $('.js-modalPatientData').html(ret.html);
            }
        });
    })
    /*modal-patient*/


    /*cabinet-gal*/
    $(document).ready(function(){
        var contW = 1920 / 1.0464355788096795;
        $('.js-cabinGalImg').each(function(){
            var natW = this.naturalWidth + 30;
            var perc = natW * 100 / contW;
            $(this).closest('.js-cabinGalImgCol').css('width', perc + '%');
        })
    })
    /*cabinet-gal*/

}( jQuery ) );
