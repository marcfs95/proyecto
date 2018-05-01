/*
Template Name: Monster Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: js
*/
$(function() {
    "use strict";
    $(function() {
        $(".preloader").fadeOut();
    });
    jQuery(document).on('click', '.mega-dropdown', function(e) {
        e.stopPropagation()
    });
    // ============================================================== 
    // This is for the top header part and sidebar part
    // ==============================================================  
    var set = function() {
        var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
        var topOffset = 70;
        // if (width < 500) {
        if (width < 768 ) {
            $("body").addClass("mini-sidebar");
            $('.navbar-brand span').hide();
            $(".scroll-sidebar, .slimScrollDiv").css("overflow-x", "visible").parent().css("overflow", "visible");
            $(".nav-toggler i").addClass("ti-menu");
            $('.contenido-pagina').removeClass("contenido-extendido");
            $('.contenido-pagina').addClass("contenido-no-sidebar");
        } else {
            $("body").removeClass("mini-sidebar");
            $('.navbar-brand span').show();
            $(".nav-toggler i").addClass("ti-menu");
            $('.contenido-pagina').removeClass("contenido-no-sidebar");
            $('.contenido-pagina').removeClass("contenido-extendido");
        }

    };
    $(window).ready(set);
    $(window).on("resize", set);

    // topbar stickey on scroll

    $(".fix-header .topbar").stick_in_parent({

    });

    // this is for close icon when navigation open in mobile view
    $(".nav-toggler").click(function() {
        var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
        
        $("body").toggleClass("mini-sidebar");
        $('.navbar-brand span').hide();
        
        if (width < 768 ) {
            $('.contenido-pagina').removeClass("contenido-extendido");
            $('.contenido-pagina').removeClass("contenido-no-sidebar");

        }else{
            $('.contenido-pagina').toggleClass("contenido-extendido");
            $('.contenido-pagina').removeClass("contenido-no-sidebar");

        }
    });
    $(".sidebartoggler").on('click', function() {
        $(".sidebartoggler i").toggleClass("ti-menu");
    });

    // ============================================================== 
    // Auto select left navbar
    // ============================================================== 
    $(function() {
        var url = window.location;
        var element = $('ul#sidebarnav a').filter(function() {
            return this.href == url;
        }).addClass('active').parent().addClass('active');
        while (true) {
            if (element.is('li')) {
                element = element.parent().addClass('in').parent().addClass('active');
            } else {
                break;
            }
        }
    });

    // ============================================================== 
    // Sidebarmenu
    // ============================================================== 
    $(function() {
        $('#sidebarnav').metisMenu();
    });
    // ============================================================== 
    // Slimscrollbars
    // ============================================================== 
    $('.scroll-sidebar').slimScroll({
        position: 'left',
        size: "5px",
        height: '100%',
        color: '#dcdcdc'
    });

    // ============================================================== 
    // Resize all elements
    // ============================================================== 
    $("body").trigger("resize");
});
