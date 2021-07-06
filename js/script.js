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
    var sct=$(window).scrollTop();
    content.each(function(){
        var tg=$(this);
        var i=tg.index();
        if(tg.offset().top<=sct){
            menu.removeClass('on');
            menu.eq(i).addClass('on');
        }
    });
});