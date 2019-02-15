!function(){function e(){E.keyboardSupport&&m("keydown",i)}function t(){if(!X&&document.body){X=!0
var t=document.body,o=document.documentElement,n=window.innerHeight,a=t.scrollHeight
if(Y=document.compatMode.indexOf("CSS")>=0?o:t,k=t,e(),top!=self)_=!0
else if(a>n&&(t.offsetHeight<=n||o.offsetHeight<=n)){var i=document.createElement("div")
i.style.cssText="position:absolute; z-index:-10000; top:0; left:0; right:0; height:"+Y.scrollHeight+"px",document.body.appendChild(i)
var r
D=function(){r||(r=setTimeout(function(){H||(i.style.height="0",i.style.height=Y.scrollHeight+"px",r=null)},500))},setTimeout(D,10),m("resize",D)
var l={attributes:!0,childList:!0,characterData:!1}
if(M=new Q(D),M.observe(t,l),Y.offsetHeight<=n){var s=document.createElement("div")
s.style.clear="both",t.appendChild(s)}}E.fixedBackground||H||(t.style.backgroundAttachment="scroll",o.style.backgroundAttachment="scroll")}}function o(){M&&M.disconnect(),h(q,a),h("mousedown",r),h("keydown",i),h("resize",D),h("load",t)}function n(e,t,o){if(b(t,o),1!=E.accelerationMax){var n=Date.now(),a=n-K
if(a<E.accelerationDelta){var i=(1+50/a)/2
i>1&&(i=Math.min(i,E.accelerationMax),t*=i,o*=i)}K=Date.now()}if(N.push({x:t,y:o,lastX:0>t?.99:-.99,lastY:0>o?.99:-.99,start:Date.now()}),!B){var r=e===document.body,l=function(n){for(var a=Date.now(),i=0,s=0,c=0;c<N.length;c++){var u=N[c],d=a-u.start,f=d>=E.animationTime,m=f?1:d/E.animationTime
E.pulseAlgorithm&&(m=S(m))
var h=u.x*m-u.lastX>>0,p=u.y*m-u.lastY>>0
i+=h,s+=p,u.lastX+=h,u.lastY+=p,f&&(N.splice(c,1),c--)}r?window.scrollBy(i,s):(i&&(e.scrollLeft+=i),s&&(e.scrollTop+=s)),t||o||(N=[]),N.length?R(l,e,1e3/E.frameRate+1):B=!1}
R(l,e,0),B=!0}}function a(e){X||t()
var o=e.target,a=c(o)
if(!a||e.defaultPrevented||e.ctrlKey)return!0
if(p(k,"embed")||p(o,"embed")&&/\.pdf/i.test(o.src)||p(k,"object"))return!0
var i=-e.wheelDeltaX||e.deltaX||0,r=-e.wheelDeltaY||e.deltaY||0
return A&&(e.wheelDeltaX&&v(e.wheelDeltaX,120)&&(i=-120*(e.wheelDeltaX/Math.abs(e.wheelDeltaX))),e.wheelDeltaY&&v(e.wheelDeltaY,120)&&(r=-120*(e.wheelDeltaY/Math.abs(e.wheelDeltaY)))),i||r||(r=-e.wheelDelta||0),1===e.deltaMode&&(i*=40,r*=40),!E.touchpadSupport&&w(r)?!0:(Math.abs(i)>1.2&&(i*=E.stepSize/120),Math.abs(r)>1.2&&(r*=E.stepSize/120),n(a,i,r),e.preventDefault(),void l())}function i(e){var t=e.target,o=e.ctrlKey||e.altKey||e.metaKey||e.shiftKey&&e.keyCode!==O.spacebar
document.contains(k)||(k=document.activeElement)
var a=/^(textarea|select|embed|object)$/i,i=/^(button|submit|radio|checkbox|file|color|image)$/i
if(a.test(t.nodeName)||p(t,"input")&&!i.test(t.type)||p(k,"video")||x(e)||t.isContentEditable||e.defaultPrevented||o)return!0
if((p(t,"button")||p(t,"input")&&i.test(t.type))&&e.keyCode===O.spacebar)return!0
var r,s=0,u=0,d=c(k),f=d.clientHeight
switch(d==document.body&&(f=window.innerHeight),e.keyCode){case O.up:u=-E.arrowScroll
break
case O.down:u=E.arrowScroll
break
case O.spacebar:r=e.shiftKey?1:-1,u=-r*f*.9
break
case O.pageup:u=.9*-f
break
case O.pagedown:u=.9*f
break
case O.home:u=-d.scrollTop
break
case O.end:var m=d.scrollHeight-d.scrollTop-f
u=m>0?m+10:0
break
case O.left:s=-E.arrowScroll
break
case O.right:s=E.arrowScroll
break
default:return!0}n(d,s,u),e.preventDefault(),l()}function r(e){k=e.target}function l(){clearTimeout(T),T=setInterval(function(){P={}},1e3)}function s(e,t){for(var o=e.length;o--;)P[I(e[o])]=t
return t}function c(e){var t=[],o=document.body,n=Y.scrollHeight
do{var a=P[I(e)]
if(a)return s(t,a)
if(t.push(e),n===e.scrollHeight){var i=d(Y)&&d(o),r=i||f(Y)
if(_&&u(Y)||!_&&r)return s(t,F())}else if(u(e)&&f(e))return s(t,e)}while(e=e.parentElement)}function u(e){return e.clientHeight+10<e.scrollHeight}function d(e){var t=getComputedStyle(e,"").getPropertyValue("overflow-y")
return"hidden"!==t}function f(e){var t=getComputedStyle(e,"").getPropertyValue("overflow-y")
return"scroll"===t||"auto"===t}function m(e,t){window.addEventListener(e,t,!1)}function h(e,t){window.removeEventListener(e,t,!1)}function p(e,t){return(e.nodeName||"").toLowerCase()===t.toLowerCase()}function b(e,t){e=e>0?1:-1,t=t>0?1:-1,(L.x!==e||L.y!==t)&&(L.x=e,L.y=t,N=[],K=0)}function w(e){return e?($.length||($=[e,e,e]),e=Math.abs(e),$.push(e),$.shift(),clearTimeout(z),z=setTimeout(function(){window.localStorage&&(localStorage.SS_deltaBuffer=$.join(","))},1e3),!g(120)&&!g(100)):void 0}function v(e,t){return Math.floor(e/t)==e/t}function g(e){return v($[0],e)&&v($[1],e)&&v($[2],e)}function x(e){var t=e.target,o=!1
if(-1!=document.URL.indexOf("www.youtube.com/watch"))do if(o=t.classList&&t.classList.contains("html5-video-controls"))break
while(t=t.parentNode)
return o}function y(e){var t,o,n
return e*=E.pulseScale,1>e?t=e-(1-Math.exp(-e)):(o=Math.exp(-1),e-=1,n=1-Math.exp(-e),t=o+n*(1-o)),t*E.pulseNormalize}function S(e){return e>=1?1:0>=e?0:(1==E.pulseNormalize&&(E.pulseNormalize/=y(1)),y(e))}function j(e){for(var t in e)C.hasOwnProperty(t)&&(E[t]=e[t])}var k,M,D,T,z,C={frameRate:150,animationTime:400,stepSize:60,pulseAlgorithm:!0,pulseScale:4,pulseNormalize:1,accelerationDelta:50,accelerationMax:3,keyboardSupport:!0,arrowScroll:50,touchpadSupport:!1,fixedBackground:!0,excluded:""},E=C,H=!1,_=!1,L={x:0,y:0},X=!1,Y=document.documentElement,$=[],A=/^Mac/.test(navigator.platform),O={left:37,up:38,right:39,down:40,spacebar:32,pageup:33,pagedown:34,end:35,home:36},N=[],B=!1,K=Date.now(),I=function(){var e=0
return function(t){return t.uniqueID||(t.uniqueID=e++)}}(),P={}
window.localStorage&&localStorage.SS_deltaBuffer&&($=localStorage.SS_deltaBuffer.split(","))
var q,R=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e,t,o){window.setTimeout(e,o||1e3/60)}}(),Q=window.MutationObserver||window.WebKitMutationObserver||window.MozMutationObserver,F=function(){var e
return function(){if(!e){var t=document.createElement("div")
t.style.cssText="height:10000px;width:1px;",document.body.appendChild(t)
var o=document.body.scrollTop
document.documentElement.scrollTop
window.scrollBy(0,3),e=document.body.scrollTop!=o?document.body:document.documentElement,window.scrollBy(0,-3),document.body.removeChild(t)}return e}}(),U=window.navigator.userAgent,W=/Edge/.test(U),V=/chrome/i.test(U)&&!W,G=/safari/i.test(U)&&!W,J=/mobile/i.test(U),Z=(V||G)&&!J
"onwheel"in document.createElement("div")?q="wheel":"onmousewheel"in document.createElement("div")&&(q="mousewheel"),q&&Z&&(m(q,a),m("mousedown",r),m("load",t)),j.destroy=o,window.SmoothScrollOptions&&j(window.SmoothScrollOptions),"function"==typeof define&&define.amd?define(function(){return j}):"object"==typeof exports?module.exports=j:window.SmoothScroll=j}()
