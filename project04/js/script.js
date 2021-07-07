/* 헤더 줄어듬 */
var shrinkHeader = 300;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('nav').addClass('fixed');
        }
        else {
            $('nav').removeClass('fixed');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
}
// gnb메뉴
$('.gnb ul li').mouseover(function(){
    if($(this).prop('class')!='on'){
        $('.gnb ul li').removeClass('on');
        $(this).addClass('on');
        $('.gnb-sub').css('display','none');
        $('.gnb-sub').eq($(this).index()).slideDown('fast');
    }
});

// 메인배너
$('.main-visual ul li').on({"mouseover":function(){
        $(this).addClass('on');
    }, "mouseout":function(){
        $(this).removeClass('on');
    }  
});

var swiper1 = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop:true,
    autoplay:{
        delay:3000,
        disableOnInteraction : false
    }
});
$('.mySwiper').on({"mouseover":function(){
        swiper1.autoplay.stop();
    },"mouseout":function(){
        swiper1.autoplay.start();
    }
});

// family site
let moving=$('.site-list>ul'),
    timer=undefined;
function slide(){
    timer=setInterval(()=>{
        moving.animate({left:-200},500,function(){
            $(this).children('li:first').insertAfter($(this).children('li:last'));
            $(this).css('left','0');
        });
    },3000);
}
slide();

$('.site-list').on({"mouseover":function(){
    clearInterval(timer);
    },"mouseout":function(){
        slide();
    }
});

function left(){
    moving.find('li:last').insertBefore(moving.find('li:first'));
    moving.css('left','-200').stop().animate({left:0},500);
}
function right(){
    moving.animate({left:-200},500, function(){
        $(this).children('li:first').insertAfter($(this).children('li:last'));
        $(this).css({left:0});
    });
}
$('.family-site .left').click(function(){
    left();
    return false;
});
$('.family-site .right').click(function(){
    right();
    return false;
});


//footer banner
var swiper2 = new Swiper(".foot-banner", {
    navigation: {
      nextEl: ".control-btn .next-btn",
      prevEl: ".control-btn .prev-btn",
    },
    loop:true,
    autoplay:{
        delay:3000
    }
  });