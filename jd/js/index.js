$(function(){
	var i = 0;
	var timer;
	var timerOut;
	var length = $('#shop .shopMidd .images ul li').length;
//	console.log(length);
	timer = setInterval(run,3000);
	function run(){
		i++;
		if(i>5){
			i=0;			
		}
		$('#shop .shopMidd .images ul li').eq(i).fadeIn(300).siblings().fadeOut();
		focus(i);
	}
//	鼠标放入图片区,图片停止
	$('#shop .shopMidd').hover(function(){
		clearInterval(timer);
	},function(){
		timer = setInterval(run,3000);
	})
//	小点变红方法
	function focus(index){
		if(index==length){
			index = 0;
		}
		$('#shop .shopMidd .circel ul li').eq(index).addClass('first').siblings().removeClass('first');
	}
//	绑定点击小红点图片移动
	$('#shop .shopMidd .circel ul li').mouseover(function(){
		var index = $(this).index();
		clearTimeout(timerOut);
		timerOut = setTimeout(function(){
			i=index;
			$('#shop .shopMidd .images ul li').eq(i).fadeIn(300).siblings().fadeOut();
			focus(index);
		},250)
	})
//	绑定左右按钮控制移动
	$('#shop .shopMidd .right').click(function(){
		clearTimeout(timerOut);
		timerOut = setTimeout(function(){
			run();
		},200)
	})
	$('#shop .shopMidd .left').click(function(){
		clearTimeout(timerOut);
		timerOut= setTimeout(function(){
			i--;
			if(i<0){
				i=length-1;
			}
			$('#shop .shopMidd .images ul li').eq(i).fadeIn(300).siblings().fadeOut();
			focus(i);
		},200)
	})
})
$(function(){
	var length = $('.floor1 .m .mc .main .mainIn .mainU .c2 .lunbo ul li').length;
	var i = 0;
	var timer;
	var timerOut;
	timer = setInterval(run,2000);
	function run(){
		i++;
		if(i>4){
			i=1;
			$('.floor1 .m .mc .main .mainIn .mainU .c2 .lunbo ul').css({left:0});
		}
		$('.floor1 .m .mc .main .mainIn .mainU .c2 .lunbo ul').stop().animate({left:-440*i},300);
		focus(i);
	}
//	鼠标移入图片停止
	$('.floor1 .m .mc .main .mainIn .mainU .c2 .lunbo').hover(function(){
		clearInterval(timer);
	},function(){
		timer = setInterval(run,2000)
	})
	function focus(index){
		if(index==length-1){
			index=0;
		}
		$('.floor1 .m .mc .main .mainIn .mainU .c2 .lunbo .point i').eq(index).addClass('bgred').siblings().removeClass('bgred');
	}
//	小点绑定图片移动
	$('.floor1 .m .mc .main .mainIn .mainU .c2 .lunbo .point i').mouseover(function(){
		var index = $(this).index();
		clearTimeout(timerOut);
		timerOut = setTimeout(function(){
			i=index;
			$('.floor1 .m .mc .main .mainIn .mainU .c2 .lunbo ul').stop().animate({left:-440*i},300);
			focus(i);
		},200)
	})
//	绑定左右按钮控制移动
	$('.floor1 .m .mc .main .mainIn .mainU .c2 .lunbo .right').click(function(){
		clearTimeout(timerOut);
		timerOut = setTimeout(function(){
			run();
		},200)
	})
	$('.floor1 .m .mc .main .mainIn .mainU .c2 .lunbo .left').click(function(){
		clearTimeout(timerOut);
		timerOut = setTimeout(function(){
			i--;
			if(i<0){
				i=length-2;
				$('.floor1 .m .mc .main .mainIn .mainU .c2 .lunbo ul').css('left',-440*length);				
			}
			$('.floor1 .m .mc .main .mainIn .mainU .c2 .lunbo ul').animate({left:-440*i},300);
			focus(i);
		},200)
//		console.log(length);
	})
})

$(function(){
	$('.floor1 .m .mt .tab .q').mouseover(function(){
		$('.floor1 .m .mt .tab .q').eq($(this).index()).addClass('tabItem').siblings().removeClass('tabItem');
		$('.floor1 .m .mc .main .c').hide().eq($(this).index()).show();
	})
})
$(function(){
	$('.floor1 .m .mt .tab .w').mouseover(function(){
		$('.floor1 .m .mt .tab .w').eq($(this).index()).addClass('tabItem').siblings().removeClass('tabItem');
		$('.floor1 .m .mc .d').hide().eq($(this).index()).show();
	})
})
$(function(){
	var floorTop = [];
	var index = 0;
	$('.floor1').each(function(i,k){
		floorTop.push(k.offsetTop);
	})
	function changeFloor(index){
		$('#lou .show li').eq(index).hide().siblings().show();
		if(index>=0){
			$('#lou').show();
		}else{
			$('#lou').hide();
		}
		
	}
	$(document).on('scroll',roll);
	function roll(){
		index = getIndex($(document).scrollTop());
		changeFloor(index);
//		$('#lou').show();
	}
	function getIndex(st){
		for(var i=0;i<floorTop.length;i++){
			if(st>floorTop[i]-200&&st<floorTop[i+1]-200){
				return i;
			}
			if(st>floorTop[floorTop.length-1]-200){
				return floorTop.length-1;
			}
		}
	}
	
	
	$('#lou .show li').click(function(){
		$(document).off('scroll');
		var index = $(this).index();
		changeFloor(index);
		if(navigator.userAgent.indexOf('Firefox')>=0){
			$(document.documentElement).animate({scrollTop:floorTop[index]},500,function(){
				$(document).on('scroll',roll);
			});
		}else{
			$(document.body).animate({scrollTop:floorTop[index]},500,function(){
				$(document).on('scroll',roll);
			});
		}

	})
})