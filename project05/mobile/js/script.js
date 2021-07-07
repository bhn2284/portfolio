var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 10,
    freeMode: true,
});


// tabmenu
$('.tab-menu').each(function(){
    var menuWrap=$(this);
    var anchors=menuWrap.find('.tabs a');
    var panel=menuWrap.find('.product');
    var selectAnchor=anchors.filter('.on');
    var selectPanel=$(selectAnchor.attr('href'));
    panel.hide(); //모든 패널 숨김
    selectPanel.show(); //선택된 패널 보임

    anchors.click(function(e){
        e.preventDefault();
        var currentAnchor=$(this); //클릭되는 탭메뉴
        var currentPanel=$(currentAnchor.attr('href'));
        selectAnchor.removeClass('on');
        currentAnchor.addClass('on');
        selectPanel.hide(); //선택되었던 패널 숨김
        currentPanel.show(); //선택된 패널 보임
        selectAnchor=currentAnchor;
        selectPanel=currentPanel;
    });
});

// 이미지경로변경
var menu=$('.menu>ul>li>a');
menu.on("click", function(){
    menu.removeClass('on');
    $(this).addClass('on');
    console.log(menu);
});