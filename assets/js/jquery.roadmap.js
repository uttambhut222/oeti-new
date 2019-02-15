!function(e){"use strict"
"function"==typeof define&&define.amd?define(["jquery"],e):"undefined"!=typeof exports?module.exports=e(require("jquery")):e(jQuery)}(function(e,t,n,r){"use strict"
e.fn.roadmap=function(t,n){!t instanceof Array&&(t=[])
var r={slide:1,eventsPerSlide:6,rootClass:"roadmap",prevArrow:"prev",nextArrow:"next",eventTemplate:'<div class="event"><div class="event__date">####DATE###</div><div class="event__content">####CONTENT###</div></div>'},a=e.extend({},r,n),s=function(t,n){var r='<li class="'+a.rootClass+'__events__event">'+a.eventTemplate+"</li>"
r=r.replace("####DATE###",t.date),r=r.replace("####CONTENT###",t.content)
var s=100/(a.eventsPerSlide-1)*n
return e(r).css("left",s+"%")}
return this.each(function(){var n=this,r=e(this),i=a.slide-1
r.data({events:t,settings:a,currentSlide:i}).addClass(a.rootClass)
var l=function(){r.removeClass(a.rootClass+"--initialized"),r.find("."+a.rootClass+"__events").remove(),r.find("."+a.rootClass+"__navigation").remove()},o=function(){var t=r.data("currentSlide"),a=r.data("settings"),i=r.data("events")
e("<ol/>",{"class":a.rootClass+"__events"}).append(i.slice(t*a.eventsPerSlide,(t+1)*a.eventsPerSlide).map(s)).appendTo(n)},d=function(){var s=r.data("currentSlide"),i=function(n){switch(n){case"prev":if(s>0)return e('<li><a href="#" class="'+n+'">'+a.prevArrow+"</a></li>")
break
case"next":if((s+1)*a.eventsPerSlide<t.length)return e('<li><a href="#" class="'+n+'">'+a.nextArrow+"</a></li>")}return e("<li></li>")}
e("<ul/>",{"class":a.rootClass+"__navigation"}).append(["prev","next"].map(i)).appendTo(n)},v=function(){l(),o(),d(),setTimeout(function(){r.addClass(a.rootClass+"--initialized")},100)}
v(),e("body").on("click","."+a.rootClass+" ."+a.rootClass+"__navigation li > *",function(n){if(n.preventDefault(),e(this).hasClass("prev")){var s=r.data("currentSlide")
if(1>s)return!1
r.data({events:t,settings:a,currentSlide:s-1}),v()}else{var s=r.data("currentSlide")
if((s+1)*a.eventsPerSlide>=t.length)return!1
r.data({events:t,settings:a,currentSlide:s+1}),v()}})})}})
