//lnb menu
$('#lnb>li').on({"mouseover focusin":function(){
	$(this).addClass('active');
},"mouseout focusout":function(){
	$(this).removeClass('active');
	}
});

//MainBannerSlide
$(function MainBannerSlide(){
	let banner=$('#main_visual>.swiperWrap>.slider'),
		pagerBtn=$('.swiperPage>.page_btn'),
		stopBtn=$('#main_visual .vis_pause'),
		playBtn=$('#main_visual .vis_play'),
		current=0,
		timer=undefined;
		
	function imgslide(){
		timer=setInterval(function(){
			const prev=banner.eq(current);
			const prevBtn=pagerBtn.eq(current);
			move(prev,0,'-100%');
			prevBtn.removeClass('on');
			current++;
			if(current==banner.size()){
				current=0;
			}
			const next=banner.eq(current);
			const nextBtn=pagerBtn.eq(current);
			move(next,'100%',0);	
			nextBtn.addClass('on');
		},3500);
	}
	function move(tg,start,end){
		tg.css('left',start).stop().animate({left:end},500);
	}
	imgslide();

	/* pagerBtn */
	pagerBtn.click(function(){
		let tg=$(this);
		let i=tg.index();
		pagerBtn.removeClass('on');
		tg.addClass('on');
		
		if(current>i){
			move2(i)
		}else{
			move1(i)
		}
	});
	function move1(i){
		if(current==i) return;
		let currentEl=banner.eq(current);
		const nextEl=banner.eq(i);
		currentEl.css('left','0').stop().animate({left:'-100%'},500);
		nextEl.css('left','100%').stop().animate({left:0},500);
		current=i;
	}
	function move2(i){
		if(current==i) return;
		let currentEl=banner.eq(current);
		const nextEl=banner.eq(i);
		currentEl.css('left','0').stop().animate({left:'100%'},500);
		nextEl.css('left','-100%').stop().animate({left:0},500);
		current=i;
	}

	/* stop,play */
	stopBtn.click(function(){
		clearInterval(timer);
	});
	playBtn.click(function(){
		imgslide();
	});
});

/* --------------SubBannerSlide-------------------- */

$(function SubBannerSlide(){
	let banner=$('.main_popup>.swiperWrap>.slider'),
		prevBtn=$('.main_popup .slide_prev'),
		nextBtn=$('.main_popup .slide_next'),
		stopBtn=$('.main_popup .vis_pause'),
		playBtn=$('.main_popup .vis_play'),
		current=0,
		timer=undefined;
		
	function imgslide(){
		timer=setInterval(function(){
			const prev=banner.eq(current);
			move(prev,0,'-100%');
			prevBtn.removeClass('on');
			current++;
			if(current==banner.size()){
				current=0;
			}
			const next=banner.eq(current);
			move(next,'100%',0);	
			nextBtn.addClass('on');
		},3500);
	}
	function move(tg,start,end){
		tg.css('left',start).stop().animate({left:end},500);
	}
	imgslide();

	/* prevBtn, nextBtn */
	prevBtn.click(function(){
		const prev=banner.eq(current);
		move(prev, 0, '100%');
		prevBtn.removeClass('on');
		current--;
		if(current==-banner.size()){
			 current=0;
		}
		const next=banner.eq(current);
		move(next, '-100%', 0);
		nextBtn.addClass('on');
	});
	nextBtn.click(function(){
		const prev=banner.eq(current);
		move(prev,0,'-100%'); //move(tg,start,end) 이전버튼을 시작:0, -100%씩 움직여
		prevBtn.removeClass('on');
		current++;
		if(current==banner.size()){ //current가 배너갯수만큼 되면 
			current=0; 
		}
		const next=banner.eq(current);
		move(next,'100%',0); //100%에 있다가 0이 되게 만들어
		nextBtn.addClass('on');
	});
	
	/* stop,play */
	stopBtn.click(function(){
		clearInterval(timer);
	});
	playBtn.click(function(){
		imgslide();
	});
});


// main_notice
$(function tabMenu(){
	const tabmenu=$('#notice_list dl');
	const panel=$('#notice_list dl dd');
	tabmenu.click(function() {
		var tab_id=$(this).attr('data-tab');
		tabmenu.removeClass('on');
		panel.removeClass('on');
		$(this).addClass('on');
		$("#"+tab_id).addClass('on');
		
  });
});


// welfare_list
$(function tabMenu(){
	const tabmenu=$('#welfare_list dl');
	tabmenu.click(function() {
		tabmenu.removeClass('on');
		$(this).addClass('on');	
  });
});