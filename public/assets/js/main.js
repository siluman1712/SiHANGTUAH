"use strict";
var mainbody = $("body");
$(document).ready(function () {    
    
	/* laoder script */
	setTimeout(function () {
		$(".loader-logo").fadeOut();
	}, 3000)
    
    /* Layout options on document ready */
	if (mainbody.hasClass('boxed-page') === true) {
		$('.wrapper').css('min-height', ($(window).outerHeight() - 40 - $('footer').outerHeight()));
	}
    $('body .wrapper').css('padding-top', ($('body .wrapper > header').outerHeight()) );
	$('.vh-100').css('min-height', $(window).outerHeight() - $('footer').outerHeight());
	$('.vhi-100').css('height', ($(window).outerHeight() - ($('footer > div').outerHeight()+25) - $('.wrapper > header').outerHeight() -$('.wrapper > header').outerHeight()));
	$('.vhinner-100').css('height', ($(window).outerHeight() - ($('footer > div').outerHeight()+25)- $('.wrapper > header').outerHeight()));


	/* url  navigation active */
	var url = window.location;
	function menuitems() {
		var element = $('#side-menu li a').filter(function () {
			return this.href == url;
		}).addClass('active').parent("li").addClass('active').closest('.nav').slideDown().addClass('in').parent().addClass('show').closest('.nav').slideDown().addClass('in').parent().addClass('show');
	}
	menuitems();

	function menuitems2() {
		var element = $('.navbar-nav li a').filter(function () {
			return this.href == url;
		}).addClass('active').parent("li").addClass('active').closest('.nav').slideDown().addClass('in').parent().addClass('show').closest('.nav').slideDown().addClass('in').parent().addClass('show');
	}
	menuitems2();


	$('#side-menu li a:not(.menudropdown)').on('click', function () {
		$(this).addClass('active').parent("li").addClass('active').closest('.nav').slideDown().addClass('in').parent().addClass('show').closest('.nav').slideDown().addClass('in').parent().addClass('show');
	});
	$('#side-menu li a.menudropdown').on('click', function () {
		if ($(this).parent().hasClass('show') !== true) {
			$('#side-menu li a.menudropdown').next().slideUp().removeClass('in').parent().removeClass("show");
			$(this).next().slideToggle().toggleClass('in').parent().toggleClass('show');
		} else {
			$(this).next().slideToggle().toggleClass('in').parent().toggleClass('show');
		}
	});

	/* Smooth scrolls */
	$('.scroll-id').on('click', function (event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top
		}, 1000);
	});

	/* Sidebar toggle script */
	$('#sidebar-left').on('click', function (e) {
        e.stopPropagation();
		mainbody.toggleClass('menuleft-open');
		$(this).toggleClass("active");
	});
	$('#sidebar-right').on('click', function (e) {
        e.stopPropagation();
		mainbody.toggleClass('menuright-open');
		$(this).toggleClass("active");
	});

	/* remain open dropdown on tab click inside header notification */
	$('.dropdown-menu.mega .nav-tabs a').on('click', function (event) {
		event.stopPropagation();
		$(this).tab('show')
	});
	$('.dropdown-menu.mega .title').on('click', function (event) {
		event.stopPropagation();
	});

	/* remain open dropdown on tab click inside header notification */
	$('.search-form .btn').on('click', function () {
		$(this).parent().toggleClass('show')
	});


	/* Floating label */
	$('.float-label .form-control[placeholder]').each(function () {
		if ($(this).attr('placeholder').length > 0) {
			$(this).addClass('active');
		}
	});
	$('.float-label .form-control[value]').each(function () {

		if ($(this).val.length > 0) {

			$(this).addClass('active');
		}
	});
	$('.float-label .form-control').on('blur', function () {

		if ($(this).val().length > 0) {
			$(this).addClass('active');
		} else {
			if ($(this)[0].hasAttribute('placeholder') === true) {
				if ($(this).attr('placeholder').length > 0) {
					$(this).addClass('active');
				} else {
					$(this).removeClass('active');
				}
			} else {
				$(this).removeClass('active');
			}
		}
	});

	/* Theme customization panel script */
	$("#color-setting").on('click', function () {
		mainbody.toggleClass('menuright-open');
		$('#sidebar-right').toggleClass('active');        
		$('.sidebar .nav-tabs a[href="#setting"]').tab('show')
	});
	$('#settings-layout-boxed').on('click', function () {
		if (mainbody.hasClass('boxed-page') != true) {
			mainbody.addClass('boxed-page');
			mainbody.removeClass('fixed-header');
			$('.wrapper').addClass('z3 mb-4');
			$('#settings-layout-stickyheader').prop('checked', false);
		} else {
			mainbody.removeClass('boxed-page');
			mainbody.addClass('fixed-header');
			$('.wrapper').removeClass('z3 mb-4');
			$('#settings-layout-stickyheader').prop('checked', true);
			if ($('body .wrapper > header').next().hasClass('nav-scroller') === true) {
				$('body .wrapper').css('padding-top', ($('body .wrapper > header').outerHeight() + $('body .wrapper > header + .nav-scroller').outerHeight()))
			} else {
				$('body .wrapper').css('padding-top', $('body .wrapper > header').outerHeight())
			};
		}

	});
	$('#settings-layout-stickyheader').on('click', function () {
		mainbody.toggleClass('fixed-header');
		mainbody.removeClass('boxed-page');
		$('.wrapper').removeClass('z3 mb-4');
		$('#settings-layout-boxed').prop('checked', false);

		if (mainbody.hasClass('fixed-header') === true) {
			$('.nav-scroller').css('top', $('header .navbar ').outerHeight());
			if ($('body .wrapper > header').next().hasClass('nav-scroller') === true) {
				$('body .wrapper').css('padding-top', ($('body .wrapper > header').outerHeight() + $('body .wrapper > header + .nav-scroller').outerHeight()))
			} else {
				$('body .wrapper').css('padding-top', $('body .wrapper > header').outerHeight())
			};

		} else {
			$('.nav-scroller').css('top', '0');
			$('body .wrapper').css('padding-top', '0')
		}

		if ($(document).scrollTop() >= 40) {
			if (mainbody.hasClass('fixed-header') != true) {
				$('body .wrapper > .sidebar').css('padding-top', 0);
			} else {
				$('body .wrapper > .sidebar').css('padding-top', $('header').outerHeight());
			}

		}
	})



	if ($('.sidebar.left').length) { /* if there is no left sidebar disable theme selection option stickysidebar*/
		$('#settings-layout-stickysidebar').attr('disabled', false);
		$('#settings-layout-stickysidebar').parent().removeClass('disabled');

	} else {
		$('#settings-layout-stickysidebar').attr('disabled', true);
		$('#settings-layout-stickysidebar').parent().addClass('disabled');
	}


	$('#settings-layout-stickysidebar').on('click', function () {
		mainbody.toggleClass('sticky-sidebar');
		$('.sidebar.left').toggleClass('z3 border-right');
		$('#sidebar-left').toggle();
	});

	$('#settings-layout-stickyfooter').on('click', function () {
		mainbody.toggleClass('sticky-footer');
		if (mainbody.hasClass('sticky-footer') === true) {
			mainbody.css('padding-bottom', $('footer').outerHeight());
		} else {
			mainbody.css('padding-bottom', 0);
		}
	});

    if($.type($.cookie("themecolor")) != 'undefined' && $.cookie("themecolor") != ''){
        var linkurl =$('#theme')
        $('head').append("<link id='theme' rel='stylesheet' href='"+$.cookie("themecolor")+"' type='text/css'>");
        $('.theme-color input[type="radio"]').prop( "checked",false);
        $( "label[data-title='"+$.cookie("themecolor")+"']" ).prev().prop( "checked",true);
        setTimeout(function(){             
            linkurl.remove();
        }, 1500);
	}
    
	$('.theme-color input[type="radio"]').on('click', function () {
        
            $.cookie("themecolor", $(this).next().attr('data-title'), { expires: 7 });
     	    var linkurl =$('#theme')
            $('head').append("<link id='theme' rel='stylesheet' href='"+$(this).next().attr('data-title')+"' type='text/css'>");
           
            $(".loader-logo").show();
            setTimeout(function(){
                $(".loader-logo").fadeOut();
                linkurl.remove();
            }, 1500);
	});
	
	if($.type($.cookie("sidebarimgrepeat")) != 'undefined' && $.cookie("sidebarimgrepeat") != ''){
		$('body .wrapper > .sidebar').css({ 'background-image': 'url(' + $.cookie("sidebarimgrepeat") + ')', 'background-repeat': 'repeat', 'background-size': 'auto' });        
        $('.sidebar-image input[type="radio"]').prop( "checked",false);
		$( "label[data-title='"+$.cookie("sidebarimgrepeat")+"']" ).prev().prop( "checked",true);
	}
       if($.type($.cookie("sidebarimg")) != 'undefined' && $.cookie("sidebarimg") != ''){
		$('body .wrapper > .sidebar').css({ 'background-image': 'url(' + $.cookie("sidebarimg") + ')', 'background-repeat': 'no-repeat', 'background-size': '100%' });        
        $('.sidebar-image input[type="radio"]').prop( "checked",false);
		$( "label[data-title='"+$.cookie("sidebarimg")+"']" ).prev().prop( "checked",true);
	}
    
	$('.sidebar-image input[type="radio"]').on('click', function () {        
		if ($(this).hasClass('bg-repeat') === true) {
	            $.cookie("sidebarimgrepeat",  $(this).next().attr('data-title'), { expires: 7 });
			$.removeCookie('sidebarimg', { path: '/' });
        	    $('body .wrapper > .sidebar').css({ 'background-image': 'url(' + $(this).next().attr('data-title') + ')', 'background-repeat': 'repeat', 'background-size': 'auto' });
		} else {
	            $.cookie("sidebarimg",  $(this).next().attr('data-title'), { expires: 7 });
        	    $.removeCookie('sidebarimgrepeat', { path: '/' });
		    $('body .wrapper > .sidebar').css({ 'background-image': 'url(' + $(this).next().attr('data-title') + ')', 'background-repeat': 'no-repeat', 'background-size': '100%' });
		}
	});




	/* Second level menu off canvas menu */
	if (mainbody.hasClass('fixed-header') === true && mainbody.hasClass('boxed-page') != true) {
		$('.nav-scroller').css('top', $('header .navbar ').outerHeight());
	} else {
		$('.nav-scroller').css('top', $('header .navbar ').outerHeight());
		if ($('body .wrapper > header').next().hasClass('nav-scroller') === true) {
			$('body .wrapper > .sidebar').css('padding-top', $('body .wrapper > header').outerHeight() + $('body .wrapper > header + .nav-scroller').outerHeight());
		} else {
			$('body .wrapper > .sidebar').css('padding-top', $('body .wrapper > header').outerHeight());
		};
	}
	if ($('body .wrapper > header').next().hasClass('nav-scroller') === true && mainbody.hasClass('boxed-page') != true) {
		$('body .wrapper > .sidebar').css('padding-top', ($('body .wrapper > header').outerHeight() + $('body .wrapper > header + .nav-scroller').outerHeight()));
		if (mainbody.hasClass('fixed-header') === true) {
			$('body .wrapper').css('padding-top', ($('body .wrapper > header').outerHeight() + $('body .wrapper > header + .nav-scroller').outerHeight()))
		}
	}

	/* Dropdown center */
	$('.dropdown-menu-center').prev('.dropdown-toggle').on('click', function () {
		$(this).next('.dropdown-menu-center').css({ 'top': $(this).height(), 'margin-left': - (($(this).next('.dropdown-menu-center').outerWidth() / 2) - $(this).parent().width() / 2) })
	});
    
    
    
    /* sidebar inner slide */
    $('#sidebarinner-left, #sidebarinner-left2').on('click', function(){
         $('.sidebar-inner.slide-menu').toggleClass('active')
    });
    if( $(window).outerWidth() >= 992 ) {
        $('.sidebar-inner.slide-menu').removeClass('active')        
    }else{
        $('.sidebar-inner.slide-menu').addClass('active')
    }
   
    
    /* navbar top margin */
    $('.navbar-collapse').css({'top': $('body .wrapper > header').outerHeight() });
    $('body .wrapper .sidebar').css({'padding-top': $('body .wrapper > header').outerHeight() });


    if( $(window).width() < 640){       
        $('.btn').addClass('btn-sm');
        $('.form-control').addClass('form-control-sm');
        $('.input-group').addClass('input-group-sm');
    }
    /* hide menu on clicking out side sidebar and clicking on body */
    if ($(window).width() <= 1280) {
        mainbody.on('click', function(e){ 
            if(mainbody.hasClass('menuleft-open') == true ){
                if(e.target.className !== 'sidebar' && e.target.id !== 'sidebar-left' && $(e.target).parents('.sidebar').length == 0 ){
                    mainbody.removeClass('menuleft-open');
                    $('#sidebar-left').removeClass('active');
                }
            }else if(mainbody.hasClass('menuright-open') == true ){
                if(e.target.className !== 'sidebar' && e.target.id !== 'sidebar-right' && $(e.target).parents('.sidebar').length == 0 ){
                    mainbody.removeClass('menuright-open');
                    $('#sidebar-right').removeClass('active');
                }
            }
        });
    }

});
    $(window).on("scroll", function () {
        /* header height maiitain padding top for sidebar*/
        if (mainbody.hasClass('fixed-header') != true && mainbody.hasClass('boxed-page') != true) {
            if ($(document).scrollTop() >= 40) {
                $('body .wrapper > .sidebar').css('padding-top', 0);
            } else {

                if ($('body .wrapper > header').next().hasClass('nav-scroller') === true) {
                    $('body .wrapper > .sidebar').css('padding-top', $('body .wrapper > header').outerHeight() + $('body .wrapper > header + .nav-scroller').outerHeight());
                } else {
                    $('body .wrapper > .sidebar').css('padding-top', $('body .wrapper > header').outerHeight());
                };
            }
        } else {
            if ($(document).scrollTop() >= 40) {

            } else {
                if ($('body .wrapper > header').next().hasClass('nav-scroller') === true) {
                    $('body .wrapper > .sidebar').css('padding-top', $('body .wrapper > header').outerHeight() + $('body .wrapper > header + .nav-scroller').outerHeight());
                } else {
                    $('body .wrapper > .sidebar').css('padding-top', $('body .wrapper > header').outerHeight());
                }

            }
        }
    });

    $(window).on("load", function () {
        $(".loader-logo").fadeOut();

        /* sticky-footer */
        if (mainbody.hasClass('sticky-footer') === true) {
            $('.sticky-footer').css('padding-bottom', ($('footer > div ').outerHeight() + 25) );
        } else { mainbody.css('padding-bottom', 0); }

        

        /*cicular progress sidebar home page */
        $('.progress_profile').circleProgress({
            fill: "#5ba0ff",
            /*fill: {gradient: ["#2ec7cb", "#6c8bef"]},*/
            lineCap: 'butt'
        });

        $('.progress_profile_file').circleProgress({
            fill: "#ffffff",
            /*fill: {gradient: ["#2ec7cb", "#6c8bef"]},*/
            lineCap: 'butt'
        });

        $('.progress_profile-sm').circleProgress({
            fill: "#5ba0ff",
            /*fill: {gradient: ["#2ec7cb", "#6c8bef"]},*/
            lineCap: 'butt'
        });

        /* Sparklines can also take their values from the first argument   passed to the sparkline() function */
        var myvalues = [10, 8, 5, 7, 4, 2, 8, 10, 8, 5, 6, 4, 1, 7, 4, 5, 8, 10, 8, 5, 6, 4, 4];
        $('.dynamicsparkline').sparkline(myvalues, { type: 'bar', width: '100px', height: '20', barColor: '#8596ae', barWidth: '2', barSpacing: 2 });
        $('.dynamicsparkline2').sparkline(myvalues, { type: 'bar', width: '100px', height: '20', barColor: '#ffffff', barWidth: '2', barSpacing: 2 });
        $('.dynamicsparkline3').sparkline(myvalues, { type: 'bar', width: '100%', height: '30', barColor: '#8596ae', barWidth: '2', barSpacing: 3 });

        /* Dropdown script */
        $('.dropdown-toggle').dropdown();

        /* Tooltip script */
        $('[data-toggle="tooltip"]').tooltip();


        /* hide menu on screen resolutions below defined */
        if ($(window).width() <= 1600) {   // this hide right side menu at 1600px and below resolution on ready
            mainbody.removeClass('menuright-open');
        } else {
            if (mainbody.hasClass('boxed-page') !== true && mainbody.hasClass('menuright-open') == true) {
                mainbody.addClass('menuright-open');
            }
        }
        if ($(window).width() < 1280 && mainbody.hasClass('sticky-sidebar') !== true) {   // this hide left side menu at 1280px and below resolution on ready, if there is no sticky sidebar
            mainbody.removeClass('menuleft-open');
        } else {
            if (mainbody.hasClass('menuleft-open') == true) {
                mainbody.addClass('menuleft-open');
            }
        }

    });

    $(window).on("resize", function () {
        /* Layout option */
        if (mainbody.hasClass('sticky-footer') === true) {
            $('.sticky-footer').css('padding-bottom', ($('footer > div ').outerHeight() + 25) );       
        }
        $('body .wrapper').css('padding-top', ($('body .wrapper > header').outerHeight()) );
        $('.vh-100').css('min-height', $(window).outerHeight() - $('footer').outerHeight());
        $('.vhi-100').css('height', ($(window).outerHeight() - ($('footer > div').outerHeight()+25) - $('.wrapper > header').outerHeight() -$('.wrapper > header').outerHeight()));
        $('.vhinner-100').css('height', ($(window).outerHeight() - ($('footer > div').outerHeight()+25)- $('.wrapper > header').outerHeight()));


        /* hide menu on screen resolutions below defined */
        if ($(window).width() <= 1600) {   // this hide right side menu at 1600px and below resolution on ready
            mainbody.removeClass('menuright-open');
        } else {
            if (mainbody.hasClass('boxed-page') !== true && mainbody.hasClass('menuright-open') == true) {
                mainbody.addClass('menuright-open');
            }
        }
        if ($(window).width() < 1280 && mainbody.hasClass('sticky-sidebar') !== true) {   // this hide left side menu at 1280px and below resolution on ready, if there is no sticky sidebar
            mainbody.removeClass('menuleft-open');
        } else {
            if (mainbody.hasClass('menuleft-open') == true) {
                mainbody.addClass('menuleft-open');
            }
        }


        /* Second level menu off canvas menu */
        if (mainbody.hasClass('fixed-header') === true) {
            $('.nav-scroller').css('top', $('header .navbar ').outerHeight());
            $('body .wrapper').css('padding-top', ($('body .wrapper > header').outerHeight() + $('body .wrapper > header + .nav-scroller').outerHeight()))
        } else {
            $('.nav-scroller').css('top', '0');
            $('body .wrapper').css('padding-top', '0');
        }

         /* sidebar inner slide */
        if( $(window).width() > 992 ){
            $('.sidebar-inner.slide-menu').removeClass('active')
        }else{
            $('.sidebar-inner.slide-menu').addClass('active')
        }

        /* create small btn controls and input groups in small devices */
        if( $(window).width() < 640){       
            $('.btn').addClass('btn-sm');
            $('.form-control').addClass('form-control-sm');
            $('.input-group').addClass('input-group-sm');
        }else{
            $('.btn').removeClass('btn-sm');
            $('.form-control').removeClass('form-control-sm');
            $('.input-group').removeClass('input-group-sm');
        }
    });