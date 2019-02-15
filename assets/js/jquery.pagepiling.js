!function(e,n,t,o){"use strict"
e.fn.pagepiling=function(i){function a(e){e.addClass("pp-table").wrapInner('<div class="pp-tableCell" style="height:100%" />')}function s(n){var t=e(".pp-section.active").index(".pp-section"),o=n.index(".pp-section")
return t>o?"up":"down"}function r(n,t){var i={destination:n,animated:t,activeSection:e(".pp-section.active"),anchorLink:n.data("anchor"),sectionIndex:n.index(".pp-section"),toMove:n,yMovement:s(n),leavingSection:e(".pp-section.active").index(".pp-section")+1}
if(!i.activeSection.is(n)){o===i.animated&&(i.animated=!0),o!==i.anchorLink&&u(i.anchorLink,i.sectionIndex),i.destination.addClass("active").siblings().removeClass("active"),i.sectionsToMove=d(i),"down"===i.yMovement?(i.translate3d=j(),i.scrolling="-100%",J.css3||i.sectionsToMove.each(function(n){n!=i.activeSection.index(".pp-section")&&e(this).css(v(i.scrolling))}),i.animateSection=i.activeSection):(i.translate3d="translate3d(0px, 0px, 0px)",i.scrolling="0",i.animateSection=n),e.isFunction(J.onLeave)&&J.onLeave.call(this,i.leavingSection,i.sectionIndex+1,i.yMovement),l(i),I(i.anchorLink),O(i.anchorLink,i.sectionIndex),Y=i.anchorLink
var a=(new Date).getTime()
W=a}}function l(n){J.css3?(C(n.animateSection,n.translate3d,n.animated),n.sectionsToMove.each(function(){C(e(this),n.translate3d,n.animated)}),setTimeout(function(){c(n)},J.scrollingSpeed)):(n.scrollOptions=v(n.scrolling),n.animated?n.animateSection.animate(n.scrollOptions,J.scrollingSpeed,J.easing,function(){p(n),c(n)}):(n.animateSection.css(v(n.scrolling)),setTimeout(function(){p(n),c(n)},400)))}function c(n){e.isFunction(J.afterLoad)&&J.afterLoad.call(this,n.anchorLink,n.sectionIndex+1)}function d(n){var t
return t="down"===n.yMovement?e(".pp-section").map(function(t){return t<n.destination.index(".pp-section")?e(this):o}):e(".pp-section").map(function(t){return t>n.destination.index(".pp-section")?e(this):o})}function p(n){"up"===n.yMovement&&n.sectionsToMove.each(function(t){e(this).css(v(n.scrolling))})}function v(e){return"vertical"===J.direction?{top:e}:{left:e}}function u(e,n){J.anchors.length?(location.hash=e,f(location.hash)):f(n+"")}function f(n){n=n.replace("#",""),e("body")[0].className=e("body")[0].className.replace(/\b\s?pp-viewing-[^\s]+\b/g,""),e("body").addClass("pp-viewing-"+n)}function h(){var o=t.location.hash.replace("#",""),i=o,a=e(n).find('.pp-section[data-anchor="'+i+'"]')
a.length>0&&r(a,J.animateAnchor)}function m(){var e=(new Date).getTime()
return e-W<G+J.scrollingSpeed?!0:!1}function g(){var o=t.location.hash.replace("#","").split("/"),i=o[0]
if(i.length&&i&&i!==Y){var a
a=isNaN(i)?e(n).find('[data-anchor="'+i+'"]'):e(".pp-section").eq(i-1),r(a)}}function S(e){return{"-webkit-transform":e,"-moz-transform":e,"-ms-transform":e,transform:e}}function C(e,n,t){e.toggleClass("pp-easing",t),e.css(S(n))}function w(n){var i=(new Date).getTime()
n=n||t.event
var a=n.wheelDelta||-n.deltaY||-n.detail,s=Math.max(-1,Math.min(1,a)),r=o!==n.wheelDeltaX||o!==n.deltaX,l=Math.abs(n.wheelDeltaX)<Math.abs(n.wheelDelta)||Math.abs(n.deltaX)<Math.abs(n.deltaY)||!r
V.length>149&&V.shift(),V.push(Math.abs(a))
var c=i-$
if($=i,c>200&&(V=[]),!m()){var d=e(".pp-section.active"),p=y(d),v=x(V,10),u=x(V,70),f=v>=u
return f&&l&&(0>s?T("down",p):s>0&&T("up",p)),!1}}function x(e,n){for(var t=0,o=e.slice(Math.max(e.length-n,1)),i=0;i<o.length;i++)t+=o[i]
return Math.ceil(t/n)}function T(e,n){var t,o
if("down"==e?(t="bottom",o=Q.moveSectionDown):(t="top",o=Q.moveSectionUp),n.length>0){if(!b(t,n))return!0
o()}else o()}function b(e,n){return"top"===e?!n.scrollTop():"bottom"===e?n.scrollTop()+1+n.innerHeight()>=n[0].scrollHeight:o}function y(e){return e.filter(".pp-scrollable")}function _(){U.get(0).addEventListener?(U.get(0).removeEventListener("mousewheel",w,!1),U.get(0).removeEventListener("wheel",w,!1)):U.get(0).detachEvent("onmousewheel",w)}function M(){U.get(0).addEventListener?(U.get(0).addEventListener("mousewheel",w,!1),U.get(0).addEventListener("wheel",w,!1)):U.get(0).attachEvent("onmousewheel",w)}function E(){if(B){var e=D()
U.off("touchstart "+e.down).on("touchstart "+e.down,A),U.off("touchmove "+e.move).on("touchmove "+e.move,N)}}function k(){if(B){var e=D()
U.off("touchstart "+e.down),U.off("touchmove "+e.move)}}function D(){var e
return e=t.PointerEvent?{down:"pointerdown",move:"pointermove",up:"pointerup"}:{down:"MSPointerDown",move:"MSPointerMove",up:"MSPointerUp"}}function P(e){var n=[]
return n.y=o!==e.pageY&&(e.pageY||e.pageX)?e.pageY:e.touches[0].pageY,n.x=o!==e.pageX&&(e.pageY||e.pageX)?e.pageX:e.touches[0].pageX,n}function L(e){return o===e.pointerType||"mouse"!=e.pointerType}function A(e){var n=e.originalEvent
if(L(n)){var t=P(n)
F=t.y,R=t.x}}function N(n){var t=n.originalEvent
if(!q(n.target)&&L(t)){var o=e(".pp-section.active"),i=y(o)
if(i.length||n.preventDefault(),!m()){var a=P(t)
H=a.y,K=a.x,"horizontal"===J.direction&&Math.abs(R-K)>Math.abs(F-H)?Math.abs(R-K)>U.width()/100*J.touchSensitivity&&(R>K?T("down",i):K>R&&T("up",i)):Math.abs(F-H)>U.height()/100*J.touchSensitivity&&(F>H?T("down",i):H>F&&T("up",i))}}}function q(n,t){t=t||0
var o=e(n).parent()
return t<J.normalScrollElementTouchThreshold&&o.is(J.normalScrollElements)?!0:t==J.normalScrollElementTouchThreshold?!1:q(o,++t)}function z(){e("body").append('<div id="pp-nav"><ul></ul></div>')
var n=e("#pp-nav")
n.css("color",J.navigation.textColor),n.addClass(J.navigation.position)
for(var t=0;t<e(".pp-section").length;t++){var i=""
if(J.anchors.length&&(i=J.anchors[t]),"undefined"!==J.navigation.tooltips){var a=J.navigation.tooltips[t]
o===a&&(a="")}n.find("ul").append('<li data-tooltip="'+a+'"><a href="#'+i+'"><span></span></a></li>')}n.find("span").css("border-color",J.navigation.bulletsColor)}function O(n,t){J.navigation&&(e("#pp-nav").find(".active").removeClass("active"),n?e("#pp-nav").find('a[href="#'+n+'"]').addClass("active"):e("#pp-nav").find("li").eq(t).find("a").addClass("active"))}function I(n){J.menu&&(e(J.menu).find(".active").removeClass("active"),e(J.menu).find('[data-menuanchor="'+n+'"]').addClass("active"))}function X(){var e,i=n.createElement("p"),a={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",MozTransform:"-moz-transform",transform:"transform"}
n.body.insertBefore(i,null)
for(var s in a)i.style[s]!==o&&(i.style[s]="translate3d(1px,1px,1px)",e=t.getComputedStyle(i).getPropertyValue(a[s]))
return n.body.removeChild(i),e!==o&&e.length>0&&"none"!==e}function j(){return"vertical"!==J.direction?"translate3d(-100%, 0px, 0px)":"translate3d(0px, -100%, 0px)"}var Y,Q=e.fn.pagepiling,U=e(this),W=0,B="ontouchstart"in t||navigator.msMaxTouchPoints>0||navigator.maxTouchPoints,F=0,R=0,H=0,K=0,V=[],G=600,J=e.extend(!0,{direction:"vertical",menu:null,verticalCentered:!0,sectionsColor:[],anchors:[],scrollingSpeed:700,easing:"easeInQuart",loopBottom:!1,loopTop:!1,css3:!0,navigation:{textColor:"#000",bulletsColor:"#000",position:"right",tooltips:[]},normalScrollElements:null,normalScrollElementTouchThreshold:5,touchSensitivity:5,keyboardScrolling:!0,sectionSelector:".section",animateAnchor:!1,afterLoad:null,onLeave:null,afterRender:null},i)
e.extend(e.easing,{easeInQuart:function(e,n,t,o,i){return o*(n/=i)*n*n*n+t}}),Q.setScrollingSpeed=function(e){J.scrollingSpeed=e},Q.setMouseWheelScrolling=function(e){e?M():_()},Q.setAllowScrolling=function(e){e?(Q.setMouseWheelScrolling(!0),E()):(Q.setMouseWheelScrolling(!1),k())},Q.setKeyboardScrolling=function(e){J.keyboardScrolling=e},Q.moveSectionUp=function(){var n=e(".pp-section.active").prev(".pp-section")
!n.length&&J.loopTop&&(n=e(".pp-section").last()),n.length&&r(n)},Q.moveSectionDown=function(){var n=e(".pp-section.active").next(".pp-section")
!n.length&&J.loopBottom&&(n=e(".pp-section").first()),n.length&&r(n)},Q.moveTo=function(t){var o=""
o=isNaN(t)?e(n).find('[data-anchor="'+t+'"]'):e(".pp-section").eq(t-1),o.length>0&&r(o)},e(J.sectionSelector).each(function(){e(this).addClass("pp-section")}),J.css3&&(J.css3=X()),e(U).css({overflow:"hidden","-ms-touch-action":"none","touch-action":"none"}),Q.setAllowScrolling(!0),e.isEmptyObject(J.navigation)||z()
var Z=e(".pp-section").length
e(".pp-section").each(function(n){e(this).data("data-index",n),e(this).css("z-index",Z),n||0!==e(".pp-section.active").length||e(this).addClass("active"),o!==J.anchors[n]&&e(this).attr("data-anchor",J.anchors[n]),o!==J.sectionsColor[n]&&e(this).css("background-color",J.sectionsColor[n]),J.verticalCentered&&!e(this).hasClass("pp-scrollable")&&a(e(this)),Z-=1}).promise().done(function(){J.navigation&&(e("#pp-nav").css("margin-top","-"+e("#pp-nav").height()/2+"px"),e("#pp-nav").find("li").eq(e(".pp-section.active").index(".pp-section")).find("a").addClass("active")),e(t).on("load",function(){h()}),e.isFunction(J.afterRender)&&J.afterRender.call(this)}),e(t).on("hashchange",g),e(n).keydown(function(n){if(J.keyboardScrolling&&!m())switch(n.which){case 38:case 33:Q.moveSectionUp()
break
case 40:case 34:Q.moveSectionDown()
break
case 36:Q.moveTo(1)
break
case 35:Q.moveTo(e(".pp-section").length)
break
case 37:Q.moveSectionUp()
break
case 39:Q.moveSectionDown()
break
default:return}}),J.normalScrollElements&&(e(n).on("mouseenter",J.normalScrollElements,function(){Q.setMouseWheelScrolling(!1)}),e(n).on("mouseleave",J.normalScrollElements,function(){Q.setMouseWheelScrolling(!0)}))
var $=(new Date).getTime()
e(n).on("click touchstart","#pp-nav a",function(n){n.preventDefault()
var t=e(this).parent().index()
r(e(".pp-section").eq(t))}),e(n).on({mouseenter:function(){var n=e(this).data("tooltip")
e('<div class="pp-tooltip '+J.navigation.position+'">'+n+"</div>").hide().appendTo(e(this)).fadeIn(200)},mouseleave:function(){e(this).find(".pp-tooltip").fadeOut(200,function(){e(this).remove()})}},"#pp-nav li")}}(jQuery,document,window)
