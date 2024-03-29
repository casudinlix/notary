$(function() {
    "use strict";
    //****************************
    /* Left header Theme Change function Start */
    //****************************
    function handlelogobg() {
        $('.theme-color .theme-item .theme-link').on("click", function() {
            var logobgskin = $(this).attr("data-logobg");
            $('.topbar nav .nav-wrapper .brand-logo').attr("data-logobg", logobgskin);
        });
    };
    handlelogobg();
    //****************************
    /* Top navbar Theme Change function Start */
    //****************************
    function handlenavbarbg() {
        $('.theme-color .theme-item .theme-link').on("click", function() {
            var navbarbgskin = $(this).attr("data-navbarbg");
            $('#main-wrapper').attr("data-navbarbg", navbarbgskin);
            $('.topbar nav').attr("data-navbarbg", navbarbgskin);
        });
    };

    handlenavbarbg();

    //****************************
    // ManageSidebar Type
    //****************************
    function handlesidebartype() {

    };
    handlesidebartype();


    //****************************
    /* Manage sidebar bg color */
    //****************************
    function handlesidebarbg() {
        $('.theme-color .theme-item .theme-link').on("click", function() {
            var sidebarbgskin = $(this).attr("data-sidebarbg");
            $('.left-sidebar .sidenav').attr("data-sidebarbg", sidebarbgskin);
        });
    };
    handlesidebarbg();
    //****************************
    /* sidebar position */
    //****************************
    function handlesidebarposition() {
        $('#sidebar-position').change(function() {
            if ($(this).is(":checked")) {
                $('#main-wrapper').attr("data-sidebar-position", 'fixed');
                $('.topbar nav .nav-wrapper .brand-logo').attr("data-navheader", 'fixed');
            } else {
                //$('#main-wrapper').attr("data-sidebar-position", 'absolute');
                //$('.topbar nav .nav-wrapper .brand-logo').attr("data-navheader", 'relative');
                // $('#main-wrapper').attr("data-sidebar-position", 'fixed');
                // $('.topbar nav .nav-wrapper .brand-logo').attr("data-navheader", 'fixed');
            }
        });

    };
    handlesidebarposition();
    //****************************
    /* Header position */
    //****************************
    function handleheaderposition() {
        $('#header-position').change(function() {
            if ($(this).is(":checked")) {
                $('#main-wrapper').attr("data-header-position", 'fixed');
            } else {
                $('#main-wrapper').attr("data-header-position", 'relative');
            }
        });
    };
    handleheaderposition();
    //****************************
    /* sidebar position */
    //****************************
    function handleboxedlayout() {
        $('#boxed-layout').change(function() {
            if ($(this).is(":checked")) {
                $('#main-wrapper').attr("data-boxed-layout", 'boxed');
            } else {
                $('#main-wrapper').attr("data-boxed-layout", 'full');
            }
        });

    };
    handleboxedlayout();
    //****************************
    /* Header position */
    //****************************
    function handlethemeview() {
        $('#theme-view').change(function() {
            if ($(this).is(":checked")) {
                $('body').attr("data-theme", 'dark');
            } else {
                $('body').attr("data-theme", 'light');
            }
        });
    };
    handlethemeview();
});
