jQuery(document).ready(function(e){function t(t){t.each(function(){var t=e(this),i={}
i.timelineWrapper=t.find(".events-wrapper"),i.eventsWrapper=i.timelineWrapper.children(".events"),i.fillingLine=i.eventsWrapper.children(".filling-line"),i.timelineEvents=i.eventsWrapper.find("a"),i.timelineDates=u(i.timelineEvents),i.eventsMinLapse=g(i.timelineDates),i.timelineNavigation=t.find(".cd-timeline-navigation"),i.eventsContent=t.children(".events-content"),o(i,y)
var a=f(i,y)
t.addClass("loaded"),i.timelineNavigation.on("click",".next",function(e){e.preventDefault(),n(i,a,"next")}),i.timelineNavigation.on("click",".prev",function(e){e.preventDefault(),n(i,a,"prev")}),i.eventsWrapper.on("click","a",function(t){t.preventDefault(),i.timelineEvents.removeClass("selected"),e(this).addClass("selected"),v(e(this)),s(e(this),i.fillingLine,a),p(e(this),i.eventsContent)}),i.eventsContent.on("swipeleft",function(){var e=w()
"mobile"==e&&r(i,a,"next")}),i.eventsContent.on("swiperight",function(){var e=w()
"mobile"==e&&r(i,a,"prev")}),e(document).keyup(function(e){"37"==e.which&&h(t.get(0))?r(i,a,"prev"):"39"==e.which&&h(t.get(0))&&r(i,a,"next")})})}function n(e,t,n){var i=d(e.eventsWrapper),r=+e.timelineWrapper.css("width").replace("px","")
"next"==n?l(e,i-r+y,r-t):l(e,i+r-y)}function r(e,t,n){var i=e.eventsContent.find(".selected"),r="next"==n?i.next():i.prev()
if(r.length>0){var l=e.eventsWrapper.find(".selected"),o="next"==n?l.parent("li").next("li").children("a"):l.parent("li").prev("li").children("a")
s(o,e.fillingLine,t),p(o,e.eventsContent),o.addClass("selected"),l.removeClass("selected"),v(o),a(n,o,e,t)}}function a(e,t,n,i){var r=window.getComputedStyle(t.get(0),null),a=+r.getPropertyValue("left").replace("px",""),s=+n.timelineWrapper.css("width").replace("px",""),i=+n.eventsWrapper.css("width").replace("px",""),o=d(n.eventsWrapper);("next"==e&&a>s-o||"prev"==e&&-o>a)&&l(n,-a+s/2,s-i)}function l(e,t,n){var i=e.eventsWrapper.get(0)
t=t>0?0:t,t=void 0!==n&&n>t?n:t,c(i,"translateX",t+"px"),0==t?e.timelineNavigation.find(".prev").addClass("inactive"):e.timelineNavigation.find(".prev").removeClass("inactive"),t==n?e.timelineNavigation.find(".next").addClass("inactive"):e.timelineNavigation.find(".next").removeClass("inactive")}function s(e,t,n){var i=window.getComputedStyle(e.get(0),null),r=i.getPropertyValue("left"),a=i.getPropertyValue("width")
r=+r.replace("px","")+ +a.replace("px","")/2
var l=r/n
c(t.get(0),"scaleX",l)}function o(e,t){for(i=0;i<e.timelineDates.length;i++){var n=m(e.timelineDates[0],e.timelineDates[i]),r=Math.round(n/e.eventsMinLapse)+2
e.timelineEvents.eq(i).css("left",r*t+"px")}}function f(e,t){var n=m(e.timelineDates[0],e.timelineDates[e.timelineDates.length-1]),i=n/e.eventsMinLapse,i=Math.round(i)+4,r=i*t
return e.eventsWrapper.css("width",r+"px"),s(e.timelineEvents.eq(0),e.fillingLine,r),r}function p(e,t){var n=e.data("date"),i=t.find(".selected"),r=t.find('[data-date="'+n+'"]'),a=r.height()
if(r.index()>i.index())var l="selected enter-right",s="leave-left"
else var l="selected enter-left",s="leave-right"
r.attr("class",l),i.attr("class",s).one("webkitAnimationEnd oanimationend msAnimationEnd animationend",function(){i.removeClass("leave-right leave-left"),r.removeClass("enter-left enter-right")}),t.css("height",a+"px")}function v(e){e.parent("li").prevAll("li").children("a").addClass("older-event").end().end().nextAll("li").children("a").removeClass("older-event")}function d(e){var t=window.getComputedStyle(e.get(0),null),n=t.getPropertyValue("-webkit-transform")||t.getPropertyValue("-moz-transform")||t.getPropertyValue("-ms-transform")||t.getPropertyValue("-o-transform")||t.getPropertyValue("transform")
if(n.indexOf("(")>=0){var n=n.split("(")[1]
n=n.split(")")[0],n=n.split(",")
var i=n[4]}else var i=0
return+i}function c(e,t,n){e.style["-webkit-transform"]=t+"("+n+")",e.style["-moz-transform"]=t+"("+n+")",e.style["-ms-transform"]=t+"("+n+")",e.style["-o-transform"]=t+"("+n+")",e.style.transform=t+"("+n+")"}function u(t){var n=[]
return t.each(function(){var t=e(this).data("date").split("/"),i=new Date(t[2],t[1]-1,t[0])
n.push(i)}),n}function m(e,t){return Math.round(t-e)}function g(e){var t=[]
for(i=1;i<e.length;i++){var n=m(e[i-1],e[i])
t.push(n)}return Math.min.apply(null,t)}function h(e){for(var t=e.offsetTop,n=e.offsetLeft,i=e.offsetWidth,r=e.offsetHeight;e.offsetParent;)e=e.offsetParent,t+=e.offsetTop,n+=e.offsetLeft
return t<window.pageYOffset+window.innerHeight&&n<window.pageXOffset+window.innerWidth&&t+r>window.pageYOffset&&n+i>window.pageXOffset}function w(){return window.getComputedStyle(document.querySelector(".cd-horizontal-timeline"),"::before").getPropertyValue("content").replace(/'/g,"").replace(/"/g,"")}var x=e(".cd-horizontal-timeline"),y=60
x.length>0&&t(x)})
