/** 
 * Opstore Custom Scripts
 */

jQuery(document).ready(function($) {
    'use strict';
    var win = $(window),
        doc = $(document);

    //Sticky Header
    win.on('scroll', function() {
        // shrink the navbar
        if ($(this).scrollTop() > 150) { //Adjust 150
            $('header.site-header').addClass('shrinked');
            $('.cd-nav-icon').addClass('icon-blk');
        } else {
            $('header.site-header').removeClass('shrinked');
            $('.cd-nav-icon').removeClass('icon-blk');
        }

        // toggles the display of scroll to top button
        if ($(this).scrollTop() > 400) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }

    });

    //Full Screen Search
    
    $('body').on('click keypress','.searchbox-icon, button.istransparent', function(e) {
        e.preventDefault();
        opstoreElFocus('.full-search-container .search-form .search-field');
        $('.full-search-container').addClass('search_on');
       
    });
    $('body').on('click keypress','.closebtn', function(e) {
        e.preventDefault();
       opstoreElFocus('button.istransparent');
        $('.full-search-container').removeClass('search_on');
        
    });


    $( ".full-search-container .istransparent.hdn" ).focus(function() {
      opstoreElFocus('.full-search-container .closebtn');
    });


    /* For Off Camvas Cart */
    jQuery(document).ready(function($) {
        
        $('body').on('added_to_cart', function() {
            $('.off-canvas-cart').addClass('show');

            $(".scroll-wrap").niceScroll({
                cursorborder: "0px solid #1e1e1e",
            });
        });
        $('.cart-icon a').on('click', function() {
            $('.off-canvas-cart').addClass('show');

            $(".scroll-wrap").niceScroll({
                cursorborder: "0px solid #1e1e1e",
            });
        });
        $('.off-canvas-close').on('click', function() {
            $('.off-canvas-cart').removeClass('show');
        });
    });


    /* Icon Wrap */
    $('body').on('mouseover', '.products li', function() {
        var dis = $(this);
        dis.find('.icons').addClass('icon-triggred');
    });
    $('body').on('mouseleave', '.products li', function() {
        var dis = $(this);
        dis.find('.icons').removeClass('icon-triggred');
    });

    //Add to cart
    doc.on('click', '.add', function(e) {
        var $qty = $(this).closest('div').find('.qty');
        var maxVal = parseInt($qty.attr('max'));
        var step = parseInt($qty.attr('step'));
        var currentVal = parseInt($qty.val());
        if (!step) {
            step = 1;
        }
        $qty.val(currentVal + step);
        $qty.trigger('change');
    });

    doc.on('click', '.minus', function(e) {
        var $qty = $(this).closest('div').find('.qty');
        var minVal = parseInt($qty.attr('min'));
        var step = parseInt($qty.attr('step'));
        var currentVal = parseInt($qty.val());
        if (!step) {
            step = 1;
        }

        if (currentVal > 0 && currentVal !== minVal) {
            $qty.val(currentVal - step);
        }
        $qty.trigger('change');
    });

    // Sticky Sidebar
    if (opstore_params.sidebar_sticky == 'show') {
        $('.primary-content, .sidebar').theiaStickySidebar();
    }

    //Post format Gallery
    var gal_items = $('.opstore-gallery-items');
    if(gal_items.length > 0){
        gal_items.slick();
    }

    //Fix audio and video size
    if($('.opstore_video_wrap').length){
        $(".opstore-single-content").fitVids();
    }
    if($('.opstore_audio_wrap').length){
        $(".opstore-single-content").fitVids({
            customSelector: "iframe[src^='https://w.soundcloud.com']"
        });
    }

    //Sticky Cart
    var lastScrollTop = 0;
    $(window).scroll(function() {
        var el = $("button[name='add-to-cart'], .wc-variation-selection-needed");
        if (el.length) {
            var btn_top = el.offset().top;
            var btn_bottom = btn_top + el.outerHeight();
        }

        var st = $(this).scrollTop();
        var scroll_bottom = st + $(this).height();
        if (typeof btn_bottom != 'undefined' && typeof btn_top != 'undefined') {
            if (!(btn_bottom > st) && (btn_top < scroll_bottom)) {
                $('.opstore-sticky-cart').slideDown('slow');
            } else {
                $('.opstore-sticky-cart').slideUp('slow');
            }
        } else
            $('.opstore-sticky-cart').slideDown('slow');
        lastScrollTop = st;
    });
    $('.closebtn').on('click', function() {
        $('.opstore-sticky-cart').addClass('hidden');
    });

    // scroll to top
    $('.scrollup').on("click", function() {
        $("html, body").animate({
            scrollTop: 0
        }, 1500);
        return false;
    });


// Elements to focus after modals are closed.
function opstoreElFocus(focusElement){
     var _doc = document;
     setTimeout( function() {

    focusElement = _doc.querySelector( focusElement );
    focusElement.focus();

    }, 100 );
}

/**
* Mobile navigation scripts
*
*/   
 $('body').on('click keypress','.toggle-wrapp', function(e){
    e.preventDefault();
     
    $('.site-header').toggleClass('toggled-on');
    $('body').toggleClass('toggled-modal');

    if( $(this).hasClass('close-wrapp') ){
        opstoreElFocus('.mob-outer-wrapp .toggle-wrapp');
    }else{
        opstoreElFocus('.toggle.close-wrapp.toggle-wrapp');
    }
   
 });

$('.mob-nav-wrapp ul li ul').slideUp();

$('body').on('vclick touchstart keypress','.mob-nav-wrapp .sub-toggle', function()  {
  
  $(this).next('ul.sub-menu').slideToggle(400);
  $(this).parent('li').toggleClass('mob-menu-toggle');
});

$('body').on('click touchstart keypress','.mob-nav-wrapp .sub-toggle-children',function() {
  $(this).next('ul.sub-menu').slideToggle(400);
    
});


opstoreFocusTab();
function opstoreFocusTab(){
        var _doc = document;

        _doc.addEventListener( 'keydown', function( event ) {
            var toggleTarget, modal, selectors, elements, menuType, bottomMenu, activeEl, lastEl, firstEl, tabKey, shiftKey;
                
            if ( _doc.body.classList.contains( 'toggled-modal' ) ) {
                toggleTarget = '.mob-nav-wrapp';//mobile menu wrapper
                selectors = 'input, a, button';
                modal = _doc.querySelector( toggleTarget );

                elements = modal.querySelectorAll( selectors );
                elements = Array.prototype.slice.call( elements );

                if ( '.menu-modal' === toggleTarget ) {
                    menuType = window.matchMedia( '(min-width: 1000px)' ).matches;
                    menuType = menuType ? '.expanded-menu' : '.mobile-menu';

                    elements = elements.filter( function( element ) {
                        return null !== element.closest( menuType ) && null !== element.offsetParent;
                    } );

                    elements.unshift( _doc.querySelector( '.mob-outer-wrapp .toggle-wrapp' ) ); //mobile toggle

                    bottomMenu = _doc.querySelector( '.mob-outer-wrapp .menu-last' );//mobile menu last div

                    if ( bottomMenu ) {
                        bottomMenu.querySelectorAll( selectors ).forEach( function( element ) {
                            elements.push( element );
                        } );
                    }
                }

                lastEl = elements[ elements.length - 1 ];
                firstEl = elements[0];
                activeEl = _doc.activeElement;
                tabKey = event.keyCode === 9;
                shiftKey = event.shiftKey;

                if ( ! shiftKey && tabKey && lastEl === activeEl ) {
                    event.preventDefault();
                    firstEl.focus();
                }

                if ( shiftKey && tabKey && firstEl === activeEl ) {
                    event.preventDefault();
                    lastEl.focus();
                }
            }
        } );
}





    //Smooth scroll
    if(opstore_params.smooth_scroll == 'show'){
        SmoothScroll({
            animationTime    : 2000, // [ms]
            stepSize         : 100, // [px]
        });
    }

    //For YITH wishlist
    $(document).on('added_to_wishlist removed_from_wishlist', function() {
        var counter = $('.wishlist-count');

        $.ajax({
            url: yith_wcwl_l10n.ajax_url,
            data: {
                action: 'yith_wcwl_update_wishlist_count'
            },
            dataType: 'json',
            success: function(data) {
                console.log(data);
                counter.html(data.count);
            },
            beforeSend: function() {
                counter.block();
            },
            complete: function() {
                counter.unblock();
            }
        });

    });

    $('body').on('click', '.add-to-wishlist-custom', function() {
        var dis = $(this);
        $(document).on('added_to_wishlist removed_from_wishlist', function() {
            dis.hide();
            dis.next('.yith-wcwl-wishlistaddedbrowse').show();
        });
    });

});

//Preloader section
jQuery(window).load(function() {
    jQuery('.opstore-loader').fadeOut('slow');
});