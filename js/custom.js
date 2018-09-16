
"use strict";

// Document ready main scripts initialization
jQuery(document).ready(function($) {

    // var windowHeight = $(window).height();
    // var imgSrc = $('.body-bg_img');
    // function wResize () {
    //     $("body").css("height", $(window).height()+ 100);
    //     };
    //     wResize();
    // $(window).resize(function(){
    //         wResize();
    // });
    // if(windowHeight <= 500){         
    // imgSrc.attr('src','/wp-content/themes/cronion/images/bg-main.jpg');
    // }
    // else if(windowHeight > 500){
    // imgSrc.attr('src','/wp-content/themes/cronion/images/bg.jpg');
    // }

    // $(".slide1 .btn-primary").click(function() {      
    //     $('html, body').animate({scrollTop:$('#slide2').position().top}, 1500);
    // });

    // if($("body").hasClass("home")){

    //     var videobackground = new $.backgroundVideo($('body'), {
    //             "align": "centerXY",
    //             "width": 1280,
    //             "height": 720,
    //             "path": "/wp-content/themes/cronion/video/",
    //             "filename": "01_2",
    //             "types": ["mp4","webm"],
    //             "autoplay": true,
    //             "loop": true
    //           });
        

    // } else {
    //     var videobackground = new $.backgroundVideo($('body'), {
    //             "align": "centerXY",
    //             "width": 1280,
    //             "height": 720,
    //             "path": "/wp-content/themes/cronion/video/",
    //             "filename": "02",
    //             "types": ["mp4","webm"],
    //             "preload": true,
    //             "autoplay": true,
    //             "loop": true
    //           });
    // }

    if ($(window).width() > 768) {

        $(".player").mb_YTPlayer();

    };
   

       $('#fullpage').fullpage({
            afterLoad: function(link,index) {
                
                if(index ==6) {
                    $('.col-wrap').each(function(index) {
                        var ths = $(this);
                        setInterval(function() {
                            ths.addClass('on');
                            }, 300*index);
                        });
                    $("#iframe_bgndVideo").fadeOut(1000);
                }          
            },
            onLeave: function(index, nextIndex, direction) {
                if(nextIndex == 5) {
                    $("#iframe_bgndVideo").fadeIn(1000);
                }
            },
            slidesNavigation: true,
            slidesNavPosition: 'bottom',
            controlArrows: false,
            loopHorizontal: false,
            paddingTop: '15px'

        });

       // На планшетах и мобильных секция идет слайдером

        if ($(window).width() < 768) {

            $(".slide2-hidden-xs").remove(); 
            $(".slide3-hidden-xs").remove(); 
            $(".slide4-hidden-xs").remove(); 
            $(".slide5-hidden-xs").remove(); 

        } else {

           $(".slide2-hidden-lg").remove(); 
           $(".slide3-hidden-lg").remove(); 
           $(".slide4-hidden-lg").remove(); 
           $(".slide5-hidden-lg").remove(); 
        };

    /* begin  owl-slider carouser*/
    // if ($(window).width() < 768) {
    //     $('.gallery-slider').owlCarousel({
                    // center: true,
                    // loop:true,
                    // margin:0,
                    // autoplay:false,
                    // autoHeight:true,
                    // animateOut: 'fadeOut',
                    // animateIn: 'fadeIn',
                    // nav:false,
                    // // navText: ['<i class="icon-navigate_before"></i>', '<i class="icon-navigate_next"></i>'],
                    // dotsEach: true,
                    // responsive:{
                    //             0:{
                    //                     items:1,
                    //                     autoplay:false
                    //             },
                    //             768:{
                    //                     items:1,
                    //                     autoplay:false
                    //             }
    //                 //     }
    //         });
    // };
    

    /*Popups*/
    // $('.popup').on('click',function(e){
    //     e.preventDefault();
    //     var goTo = $(this).attr('href');
    //     $(goTo).fadeIn();
    //     $.fn.fullpage.setAutoScrolling(false);
    //     $('body').addClass('noScroll');
    // });

    // $('.popuper > a').on('click',function(e){
    //     e.preventDefault();
    //     var goTo = $(this).attr('href');
    //     $(goTo).fadeIn();
    //     $.fn.fullpage.setAutoScrolling(false);
    //     $('body').addClass('noScroll');
    // });

    // $('.popup-overlay,.popup-close').on('click',function(e){
    //     e.preventDefault();
    //     $(this).closest('.popup-container').fadeOut();
    //     $.fn.fullpage.setAutoScrolling(true);
    //     $('body').removeClass('noScroll');
    // });

 // Страница партнерам   

    if ($('.partners-slider').length) {
        $('.partners-slider').slick();
    }

    $('.partners-slide a').on('click', function(e) {
        e.preventDefault();
        $('.partners-slide a').removeClass('active');
        $(this).addClass('active');
        var goToNow = $(this).attr('href');
        $('.partner-details > div').removeClass('active');
        $(goToNow).addClass('active');
    });
 // Страница партнерам конец

    $("#txt").textillate({
        initialDelay: 1500,
        in:{
            
            effect: "fadeIn",
            delayScale: 2,
            shuffle: true
        }
    });
    $("#tlt").textillate({
        initialDelay: 1500,
        in:{
            
            effect: "flipInY",
            delayScale: 1,
            shuffle: true
        }
    });

    // Параллакс эффект для фона
    if ($(window).width() > 960) {

    $("body").mousemove(function(e){
            var moveX = (e.pageX * -1/100);
            var moveY = (e.pageY * -1/100);
            $(this).css("background-position", moveX + "px " + moveY + "px");
        });

    }

    // begin popup window 
    
    $(".popup-with-move-anim").magnificPopup({
            type: 'inline',

            fixedContentPos: true,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: true,
            
            midClick: true,
            removalDelay: 500,
            mainClass: 'my-mfp-slide-bottom'
        });

    $('.popup-with-zoom-anim > a').magnificPopup({
        type: 'inline',

        fixedContentPos: true,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: true,
        callbacks: {
            elementParse: function() {
              $(".popup-text-content").mCustomScrollbar({
            theme: "inset-2",
            scrollButtons: { enable: true }
            });      
        }
        },
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });

    
    
    $(window).on("load", function() {
        $('.preloader').fadeOut(1000);
    });
    
 
});



// $(window).on("load", function() {
//     $('.preloader').fadeOut(1500);
// });

// // Background scripts
// "use strict";
// window.requestAnimFrame = (function() {
//     return  window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
//             function( callback ) { window.setTimeout(callback, 1000 / 60 ); }
// })();
// (function() {
//     var settings = {
//         NUM_PARTICLES : 10,
//         DISTANCE_T    : 0,
//         RADIUS        : 1,
//         OPACITY       : 1,
//         SPEED_X       : 0.8,
//         SPEED_Y       : 0.6,
//         AMPLITUDE     : 110
//     };

//     var COLOURS    = ["#FFFFFF", "#FFFFFF", "#FFFFFF"],
//         bounds     = {},
//         particles  = [],
//         random     = Math.random,
//         sqrt       = Math.sqrt,
//         PI         = Math.PI,
//         ctx, W, H, stats;

//     function Particle() {
//         this.x      = random() * bounds.right;
//         this.y      = random() * bounds.bottom;
//         this.xspeed = random() * settings.SPEED_X;
//         this.yspeed = random() * settings.SPEED_Y;
//         this.radius = settings.RADIUS;
//         this.colour = COLOURS[ ~~(random() * COLOURS.length)];
//     }

//     var bindEvents = function() {
//         window.addEventListener('resize', resize, false);
//     };

//     var resize = function() {
//         W = window.innerWidth;
//         H = window.innerHeight;
//         ctx.canvas.width  = W;
//         ctx.canvas.height = H;
//         bounds.top      = 100;
//         bounds.right    = W - 100;
//         bounds.bottom   = H - 200;
//         bounds.left     = 100;
//     };

//     var draw = function() {
//         render();
//         requestAnimFrame(draw);
//     };

//     var update = function (p) {
//         p.x += p.xspeed;
//         p.y += p.yspeed;

//         if (p.x > bounds.right) {
//             p.x = bounds.right;
//             p.xspeed *= -1;
//         }
//         if (p.x < bounds.left) {
//             p.x = bounds.left;
//             p.xspeed *= -1;
//         }
//         if (p.y > bounds.bottom) {
//             p.y = bounds.bottom;
//             p.yspeed *= -1;
//         }
//         if (p.y < bounds.top) {
//             p.y = bounds.top;
//             p.yspeed *= -1;
//         }
//     };

//     var render = function() {
//         ctx.beginPath();
//         ctx.globalCompositeOperation = "source-over";
//         ctx.rect(0, 0 , W, H);
//         ctx.fillStyle = "rgba(0,0,0,.3)";

//         ctx.fill();
//         ctx.closePath();

//         ctx.globalCompositeOperation = "lighter";

//         for (var i = 0; i < particles.length; i += 1) {
//             var p = particles[i];

//             ctx.beginPath();
//             ctx.globalAlpha = settings.OPACITY;
//             ctx.fillStyle = p.colour;
//             ctx.arc(p.x, p.y, p.radius, PI * 2, false);
//             ctx.fill();
//             ctx.closePath();

//             for (var j = 0; j < particles.length; j += 1) {
//                 var pp = particles[j],
//                     yd = pp.y - p.y,
//                     xd = pp.x - p.x,
//                     d  = sqrt(xd * xd + yd * yd);

//                 if ( d < settings.DISTANCE_T ) {
//                     ctx.beginPath();
//                     ctx.globalAlpha = (settings.DISTANCE_T - d) / (settings.DISTANCE_T - 0);
//                     ctx.lineWidth = 1;
//                     ctx.moveTo(p.x, p.y);

//                     if ( settings.AMPLITUDE ) {
//                         ctx.bezierCurveTo(
//                             p.x,
//                             p.y - random() * settings.AMPLITUDE,
//                             pp.x,
//                             pp.y + random() * settings.AMPLITUDE,
//                             pp.x,
//                             pp.y
//                         );
//                     } else {
//                         ctx.lineTo(pp.x, pp.y);
//                     }

//                     ctx.strokeStyle = p.colour;
//                     ctx.lineCap = "round";
//                     ctx.stroke();
//                     ctx.closePath();

//                 }
//             }

//             update(p);

//         }
//     };

//     var updateSpeed = function( x, y, attr ) {
//         var speed = arguments[0] ? x : y;
//         for (var i = 0; i < settings.NUM_PARTICLES; i += 1) {
//             var ns = random() * speed;
//             particles[i][attr] = particles[i][attr] > 0 ? ns : -ns;
//         }
//     };

//     var updateRadius = function( value ) {
//         for (var i = 0; i < settings.NUM_PARTICLES; i += 1) {
//             particles[i].radius = value;
//         }
//     };

//     var init = function() {
//         ctx = document.getElementsByTagName('canvas')[0].getContext('2d');

//         bindEvents();
//         resize();

//         for (var i = 0; i < settings.NUM_PARTICLES; i += 1) {
//             particles.push( new Particle() );
//         }

//         draw();
//     };

//     window.onload = init;

//     var GUI = new dat.GUI();

//     GUI.add(settings, 'NUM_PARTICLES')
//         .min(2)
//         .max(200)
//         .step(1)
//         .name("# Particles")
//         .onFinishChange(function( num ){
//             var l = particles.length;
//             if ( num < l ) {
//                 var diff = (l - num);
//                 particles.splice( 1, diff );
//             }

//             if ( num > l ) {
//                 var diff = (num - l);
//                 for (var i = 0; i < diff; i += 1) {
//                     particles.push( new Particle() );
//                 }
//             }
//         });

//     GUI.add(settings, 'DISTANCE_T').min(0)
//         .max(200)
//         .step(10)
//         .name("Distance");

//     GUI.add(settings, 'RADIUS')
//         .min(0)
//         .max(10)
//         .step(1)
//         .name("Radius")
//         .onFinishChange(function( value ) {
//             updateRadius( value );
//         });

//     GUI.add(settings, 'SPEED_X')
//         .min(0)
//         .max(20)
//         .name("X speed")
//         .onFinishChange(function( value ) {
//             updateSpeed( value, false, "xspeed");
//         });

//     GUI.add(settings, 'SPEED_Y')
//         .min(0)
//         .max(20)
//         .name("Y speed")
//         .onFinishChange(function( value ) {
//             updateSpeed( false, value, "yspeed");
//         });

//     GUI.add(settings, 'AMPLITUDE')
//         .min(0)
//         .max(20)
//         .step(1)
//         .name("Amplitude");

//     GUI.close();

// })();

// // Document ready main scripts initialization
// jQuery(document).ready(function($) {
//     var canvas = $("#background"),
//         ctx = canvas[0].getContext("2d"),
//         background = new Image();
//     background.src = "http://stonesconcept.com/cronion/wp/wp-content/themes/cronion/images/bg.jpg";
//     background.onload = function(){
//         ctx.drawImage(background,0,0);
//     }

//     if ($(window).width() < 768) {

//         $(".slide2").wrapAll("<div class='slide2_slider'></div>");

//         $(".section.slide1").after("<h2 class='slide2_h' id='section2'>Кто мы?</h2>")


//         $('.slide2_slider').slick({
//             prevArrow: ' ',
//             nextArrow: ' ',
//             arrows: false,
//             dots: true,
//             adaptiveHeight: false
//         });

//         // $(window).scroll(function(){

//         //   var scroll_status = $(document).scrollTop();

//         //   if(scroll_status > 25 ){
//         //     $(".header").addClass("header_bg");
//         //   }else{
//         //     $(".header").removeClass("header_bg");
//         //   }

//         // });        
//     }



//     if ($(window).width() > 768) {


//         $('#fullpage').fullpage({
//             afterLoad: function(link,index) {
                
//                 if(index == 6) {
//                     $("h2").addClass('on');
//                     $('.col3').each(function(index) {
//                         var ths = $(this);
//                         setInterval(function() {
//                             ths.addClass('on');
//                             }, 300*index);
//                         });
//                 }          
//             }
//         });
//     }else{
//         //$.fn.fullpage.destroy('all');
//         var scrollPos = 0;
//         $(window).scroll(function(){
//            var st = $(this).scrollTop();
//            if (st > scrollPos){
//              // down
//               $(".header").removeClass("header_bg");
              
//            } else {
//              // up
//              $(".header").addClass("header_bg");
//            }
//            scrollPos = st;
//         });
//     }


//     /*Popups*/
//     $('.popup').on('click',function(e){
//         e.preventDefault();
//         var goTo = $(this).attr('href');
//         $(goTo).fadeIn();
//         //$.fn.fullpage.setAutoScrolling(false);
//         $('body').addClass('noScroll');
//     });

//     $('.popuper > a').on('click',function(e){
//         e.preventDefault();
//         var goTo = $(this).attr('href');
//         $(goTo).fadeIn();
//         //$.fn.fullpage.setAutoScrolling(false);
//         $('body').addClass('noScroll');
//     });

//     $('.popup-overlay,.popup-close').on('click',function(e){
//         //e.preventDefault();
//         $(this).closest('.popup-container').fadeOut();
//         //$.fn.fullpage.setAutoScrolling(true);
//         $('body').removeClass('noScroll');
//         $(this).closest('.popup-content').not(".disclaimer .popup-content").removeClass("popupP");
//         $(this).closest('.popup-content').not(".disclaimer .popup-content").css({'width': 'inherit', 'transition':' all .8s'});
//         $(this).closest('.popup-content').not(".disclaimer .popup-content").find(".contacts-form").hide();
//         $(this).closest('.popup-content').not(".disclaimer .popup-content").find(".popup-text").fadeIn(800);
//         $(this).closest('.popup-content').not(".disclaimer .popup-content").find(".popup-image").fadeIn(800);
//     });

//     if ($('.partners-slider').length) {
//         $('.partners-slider').slick({
//             prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"></button>',
//             nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"></button>'
//         });
//     }


//     $('.partners-slide a').on('click', function(e) {
//         e.preventDefault();
//         $('.partners-slide a').removeClass('active');
//         $(this).addClass('active');
//         var goToNow = $(this).attr('href');
//         $('.partner-details > div').removeClass('active');
//         $(goToNow).addClass('active');
//     });


//         $("body").mousemove(function(e){
//             var moveX = (e.pageX * -1/100);
//             var moveY = (e.pageY * -1/100);
//             $(this).css("background-position", moveX + "px " + moveY + "px");
//         });

//     $("#tlt").textillate({
//         //initialDelay: 1500,
//         initialDelay: 500,
//         in:{
            
//             effect: "fadeIn",
//             delayScale: 2,
//             shuffle: true
//         }
//     });
//     // $("#txt").textillate({
//     //     //initialDelay: 1500,
//     //     initialDelay: 500,
//     //     in:{
            
//     //         effect: "flipInY",
//     //         delayScale: 1,
//     //         shuffle: true
//     //     }
//     // });


//     if($("body").hasClass("home")){
        
//         $(".background").html('<video loop="" poster="/wp-content/themes/cronion/images/planet.png" autoplay=""><source src="/wp-content/themes/cronion/video/main_video.mp4" type="video/mp4;"><source src="/wp-content/themes/cronion/video/main_video.webm" type="video/webm;"></video>')

//     } else {

//         $(".background").html('<video loop="" poster="/wp-content/themes/cronion/images/planet2.png" autoplay=""><source src="/wp-content/themes/cronion/video/contact.mp4" type="video/mp4;"><source src="/wp-content/themes/cronion/video/contact.webm" type="video/webm;"></video>')

//     }

//     $(".popup-text-content").not(".legal .popup-text-content").mCustomScrollbar();
//     $(".section.news.footer.fullpage-wrapper .columns").mCustomScrollbar();

//     $(".popup-text .btn").click(function(){
//         var formW= $(this).closest('.popup-content').find(".contacts-form").width();
//         $(this).closest('.popup-content').not(".disclaimer .popup-content").addClass("popupP");
//         $(this).closest('.popup-content').not(".disclaimer .popup-content").css({'width': formW, 'transition':' all .8s'});
        
//         $(this).closest('.popup-content').not(".disclaimer .popup-content").find(".popup-text").hide();
//         $(this).closest('.popup-content').not(".disclaimer .popup-content").find(".popup-image").hide();
//         $(this).closest('.popup-content').not(".disclaimer .popup-content").find(".contacts-form").fadeIn(800);


        
//     });
    

// });