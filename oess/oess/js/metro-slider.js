function metro_slider(){var t=0
$(".vc_metro-slider ul li").each(function(){var e=$(this).width()
$(this).hasClass("odd")?t=t+e+5:$(this).hasClass("even")&&(t=t+e+5)}),t+=5,$(".vc_metro-slider").css("width",t+"px")
var e=70,i=$(".container").width()-e
$("html.no-touch .vc_metro-wrapper").tinyscrollbar({axis:"x",size:i,sizethumb:"auto",invertscroll:!0}),$("html.touch .vc_metro-wrapper .viewport").css({width:$(window).innerWidth()+"px","overflow-x":"scroll"}),$("html.touch .vc_metro-wrapper .scrollbar").hide()}function startLoop(){myInterval=setInterval(runSlide,iFrequency)}function stopLoop(){clearInterval(myInterval)}function runSlide(){var t=$(".vc_metro-wrapper .thumb").position(),t=(t.left,$(".vc_metro-wrapper .overview").position()),e=(t.left,($(".vc_metro-wrapper .track").width()-$(".vc_metro-wrapper .thumb").width())/movement),i=$(window).width()
$("body").hasClass("boxed")&&(i=$(".container").width()+50)
var s=(i-$(".vc_metro-wrapper .vc_metro-slider").width())/movement
iDo=(iDo+1)%(movement+1),$("html.no-touch .vc_metro-wrapper .thumb").animate({left:iDo*e},1e3,function(){}),$("html.no-touch .vc_metro-wrapper .overview").animate({left:iDo*s-2*iDo},1e3,function(){}),$("html.touch .vc_metro-wrapper .viewport").animate({scrollLeft:iDo*(($(".vc_metro-wrapper .vc_metro-slider").width()-$(window).innerWidth())/movement)},1e3,function(){})}var iFrequency=5e3,movement=0,pauseOnHover=1,iDo=0,myInterval,target=$(".vc_metro-wrapper"),run=!1
$(window).load(function(){metro_slider(),run||(0!=$(".vc_metro-wrapper:hover").length&pauseOnHover?stopLoop():startLoop(),run=!0),target.hover(function(){pauseOnHover&run&&stopLoop()},function(){pauseOnHover&run&&startLoop()})}),$(window).resize(function(){metro_slider()})
