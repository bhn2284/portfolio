//circle boxshadow
$(function(){
    const box = new Array();

    for(var i=0; i<700; i++){
        box[i] = '#dff1ff' +' '+ -i + 'px ' + i + 'px';
    }

    var s = box.join(',');
    var domObj = document.querySelector('.circle');
    domObj.style.boxShadow=s;
});

//메뉴 클릭하면 콘텐츠로 이동
var menu=$('.gnb-menu>.gnb>li');
var content=$('#main section');
menu.click(function(e){
    e.preventDefault();
    var tg=$(this);
    var i=tg.index();
    var section=content.eq(i);
    var sectop=section.offset().top;
    menu.removeClass('on');
    tg.addClass('on');
    $('html,body').stop().animate({scrollTop:sectop},800);
});

//스크롤하면 메뉴색 바뀜
$(window).scroll(function(){
    var sct1=$(window).scrollTop()+300;
    var sct2=$(window).scrollTop();
    var offtop=$('#about').offset();
    
    content.each(function(){
        var tg=$(this);
        var i=tg.index();
        if(tg.offset().top<=sct1){
            menu.removeClass('on');
            menu.eq(i).addClass('on');
        }
    });
    
    //스크롤하면 로고 변경
    if(sct2>offtop.top-50){
        $('.img-logo').addClass('on');
        $('.logo').addClass('on');
    }else{
        $('.img-logo').removeClass('on');
        $('.logo').removeClass('on');
    }
});

// project tab menu
$('.name li').click(function(e){
    e.preventDefault();
    var idx=$(this).index();
    $('.name li').removeClass('on');
    $('.name li').eq(idx).addClass('on');
    $('.view li').fadeOut(300);
    $('.view li').eq(idx).fadeIn(300);
});

//마우스휠
// var wheelDelta= 0; //휠 이벤트 발생 시 반환 값 확인 변수
// var browser= 0; //파이어폭스 브라우저 판별 변수 BOM (파이어폭스는 마우스 휠 이벤트를 인지하지 못하기 때문에 해당 변수가 필요)
    
// $('section').each(function(index){
//     $(this).on('mousewheel DOMMouseScroll', function(event){
//         event.preventDefault();
//         browser=window.navigator.userAgent.toLowerCase().indexOf('firefox');
//         if(browser>=0){
//             wheelDelta=-event.detail*40
//         }else{
//             wheelDelta=event.originalEvent.wheelDelta;
//         }
//         console.log(wheelDelta); //-120, 120 등

//         if(wheelDelta<0){
//             if(index<$('section').length-1){             
//                 $('html, body').stop().animate({scrollTop: $(this).next().offset().top},800);
//             }                                                             
//         }else{
//             if(index >0) {
//                 $('html, body').stop().animate({scrollTop: $(this).prev().offset().top},800);  
//             } 
//         }
//     });
// });