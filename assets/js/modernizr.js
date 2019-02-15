window.Modernizr=function(t,e,i){function s(t){w.cssText=t}function n(t,e){return s(C.join(t+";")+(e||""))}function o(t,e){return typeof t===e}function r(t,e){return!!~(""+t).indexOf(e)}function a(t,e){for(var s in t){var n=t[s]
if(!r(n,"-")&&w[n]!==i)return"pfx"==e?n:!0}return!1}function l(t,e,s){for(var n in t){var r=e[t[n]]
if(r!==i)return s===!1?t[n]:o(r,"function")?r.bind(s||e):r}return!1}function h(t,e,i){var s=t.charAt(0).toUpperCase()+t.slice(1),n=(t+" "+$.join(s+" ")+s).split(" ")
return o(e,"string")||o(e,"undefined")?a(n,e):(n=(t+" "+S.join(s+" ")+s).split(" "),l(n,e,i))}function c(){g.input=function(i){for(var s=0,n=i.length;n>s;s++)M[i[s]]=i[s]in _
return M.list&&(M.list=!!e.createElement("datalist")&&!!t.HTMLDataListElement),M}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),g.inputtypes=function(t){for(var s,n,o,r=0,a=t.length;a>r;r++)_.setAttribute("type",n=t[r]),s="text"!==_.type,s&&(_.value=b,_.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(n)&&_.style.WebkitAppearance!==i?(m.appendChild(_),o=e.defaultView,s=o.getComputedStyle&&"textfield"!==o.getComputedStyle(_,null).WebkitAppearance&&0!==_.offsetHeight,m.removeChild(_)):/^(search|tel)$/.test(n)||(s=/^(url|email)$/.test(n)?_.checkValidity&&_.checkValidity()===!1:_.value!=b)),k[t[r]]=!!s
return k}("search tel url email datetime date month week time datetime-local number range color".split(" "))}var u,d,p="2.6.2",g={},f=!0,m=e.documentElement,v="modernizr",y=e.createElement(v),w=y.style,_=e.createElement("input"),b=":)",x={}.toString,C=" -webkit- -moz- -o- -ms- ".split(" "),E="Webkit Moz O ms",$=E.split(" "),S=E.toLowerCase().split(" "),T={svg:"http://www.w3.org/2000/svg"},D={},k={},M={},z=[],j=z.slice,P=function(t,i,s,n){var o,r,a,l,h=e.createElement("div"),c=e.body,u=c||e.createElement("body")
if(parseInt(s,10))for(;s--;)a=e.createElement("div"),a.id=n?n[s]:v+(s+1),h.appendChild(a)
return o='&#173;<style id="s'+v+'">'+t+"</style>",h.id=v,(c?h:u).innerHTML+=o,u.appendChild(h),c||(u.style.background="",u.style.overflow="hidden",l=m.style.overflow,m.style.overflow="hidden",m.appendChild(u)),r=i(h,t),c?h.parentNode.removeChild(h):(u.parentNode.removeChild(u),m.style.overflow=l),!!r},L=function(e){var i=t.matchMedia||t.msMatchMedia
if(i)return i(e).matches
var s
return P("@media "+e+" { #"+v+" { position: absolute; } }",function(e){s="absolute"==(t.getComputedStyle?getComputedStyle(e,null):e.currentStyle).position}),s},O=function(){function t(t,n){n=n||e.createElement(s[t]||"div"),t="on"+t
var r=t in n
return r||(n.setAttribute||(n=e.createElement("div")),n.setAttribute&&n.removeAttribute&&(n.setAttribute(t,""),r=o(n[t],"function"),o(n[t],"undefined")||(n[t]=i),n.removeAttribute(t))),n=null,r}var s={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"}
return t}(),N={}.hasOwnProperty
d=o(N,"undefined")||o(N.call,"undefined")?function(t,e){return e in t&&o(t.constructor.prototype[e],"undefined")}:function(t,e){return N.call(t,e)},Function.prototype.bind||(Function.prototype.bind=function(t){var e=this
if("function"!=typeof e)throw new TypeError
var i=j.call(arguments,1),s=function(){if(this instanceof s){var n=function(){}
n.prototype=e.prototype
var o=new n,r=e.apply(o,i.concat(j.call(arguments)))
return Object(r)===r?r:o}return e.apply(t,i.concat(j.call(arguments)))}
return s}),D.flexbox=function(){return h("flexWrap")},D.flexboxlegacy=function(){return h("boxDirection")},D.canvas=function(){var t=e.createElement("canvas")
return!!t.getContext&&!!t.getContext("2d")},D.canvastext=function(){return!!g.canvas&&!!o(e.createElement("canvas").getContext("2d").fillText,"function")},D.webgl=function(){return!!t.WebGLRenderingContext},D.touch=function(){var i
return"ontouchstart"in t||t.DocumentTouch&&e instanceof DocumentTouch?i=!0:P("@media ("+C.join("touch-enabled),(")+v+"){#modernizr{top:9px;position:absolute}}",function(t){i=9===t.offsetTop}),i},D.geolocation=function(){return"geolocation"in navigator},D.postmessage=function(){return!!t.postMessage},D.websqldatabase=function(){return!!t.openDatabase},D.indexedDB=function(){return!!h("indexedDB",t)},D.hashchange=function(){return O("hashchange",t)&&(e.documentMode===i||e.documentMode>7)},D.history=function(){return!!t.history&&!!history.pushState},D.draganddrop=function(){var t=e.createElement("div")
return"draggable"in t||"ondragstart"in t&&"ondrop"in t},D.websockets=function(){return"WebSocket"in t||"MozWebSocket"in t},D.rgba=function(){return s("background-color:rgba(150,255,150,.5)"),r(w.backgroundColor,"rgba")},D.hsla=function(){return s("background-color:hsla(120,40%,100%,.5)"),r(w.backgroundColor,"rgba")||r(w.backgroundColor,"hsla")},D.multiplebgs=function(){return s("background:url(https://),url(https://),red url(https://)"),/(url\s*\(.*?){3}/.test(w.background)},D.backgroundsize=function(){return h("backgroundSize")},D.borderimage=function(){return h("borderImage")},D.borderradius=function(){return h("borderRadius")},D.boxshadow=function(){return h("boxShadow")},D.textshadow=function(){return""===e.createElement("div").style.textShadow},D.opacity=function(){return n("opacity:.55"),/^0.55$/.test(w.opacity)},D.cssanimations=function(){return h("animationName")},D.csscolumns=function(){return h("columnCount")},D.cssgradients=function(){var t="background-image:",e="gradient(linear,left top,right bottom,from(#9f9),to(white));",i="linear-gradient(left top,#9f9, white);"
return s((t+"-webkit- ".split(" ").join(e+t)+C.join(i+t)).slice(0,-t.length)),r(w.backgroundImage,"gradient")},D.cssreflections=function(){return h("boxReflect")},D.csstransforms=function(){return!!h("transform")},D.csstransforms3d=function(){var t=!!h("perspective")
return t&&"webkitPerspective"in m.style&&P("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(e,i){t=9===e.offsetLeft&&3===e.offsetHeight}),t},D.csstransitions=function(){return h("transition")},D.fontface=function(){var t
return P('@font-face {font-family:"font";src:url("https://")}',function(i,s){var n=e.getElementById("smodernizr"),o=n.sheet||n.styleSheet,r=o?o.cssRules&&o.cssRules[0]?o.cssRules[0].cssText:o.cssText||"":""
t=/src/i.test(r)&&0===r.indexOf(s.split(" ")[0])}),t},D.generatedcontent=function(){var t
return P("#"+v+"{font:0/0 a}#"+v+':after{content:"'+b+'";visibility:hidden;font:3px/1 a}',function(e){t=e.offsetHeight>=3}),t},D.video=function(){var t=e.createElement("video"),i=!1
try{(i=!!t.canPlayType)&&(i=new Boolean(i),i.ogg=t.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),i.h264=t.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),i.webm=t.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""))}catch(s){}return i},D.audio=function(){var t=e.createElement("audio"),i=!1
try{(i=!!t.canPlayType)&&(i=new Boolean(i),i.ogg=t.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),i.mp3=t.canPlayType("audio/mpeg;").replace(/^no$/,""),i.wav=t.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),i.m4a=(t.canPlayType("audio/x-m4a;")||t.canPlayType("audio/aac;")).replace(/^no$/,""))}catch(s){}return i},D.localstorage=function(){try{return localStorage.setItem(v,v),localStorage.removeItem(v),!0}catch(t){return!1}},D.sessionstorage=function(){try{return sessionStorage.setItem(v,v),sessionStorage.removeItem(v),!0}catch(t){return!1}},D.webworkers=function(){return!!t.Worker},D.applicationcache=function(){return!!t.applicationCache},D.svg=function(){return!!e.createElementNS&&!!e.createElementNS(T.svg,"svg").createSVGRect},D.inlinesvg=function(){var t=e.createElement("div")
return t.innerHTML="<svg/>",(t.firstChild&&t.firstChild.namespaceURI)==T.svg},D.smil=function(){return!!e.createElementNS&&/SVGAnimate/.test(x.call(e.createElementNS(T.svg,"animate")))},D.svgclippaths=function(){return!!e.createElementNS&&/SVGClipPath/.test(x.call(e.createElementNS(T.svg,"clipPath")))}
for(var A in D)d(D,A)&&(u=A.toLowerCase(),g[u]=D[A](),z.push((g[u]?"":"no-")+u))
return g.input||c(),g.addTest=function(t,e){if("object"==typeof t)for(var s in t)d(t,s)&&g.addTest(s,t[s])
else{if(t=t.toLowerCase(),g[t]!==i)return g
e="function"==typeof e?e():e,void 0!==f&&f&&(m.className+=" "+(e?"":"no-")+t),g[t]=e}return g},s(""),y=_=null,function(t,e){function i(t,e){var i=t.createElement("p"),s=t.getElementsByTagName("head")[0]||t.documentElement
return i.innerHTML="x<style>"+e+"</style>",s.insertBefore(i.lastChild,s.firstChild)}function s(){var t=v.elements
return"string"==typeof t?t.split(" "):t}function n(t){var e=m[t[g]]
return e||(e={},f++,t[g]=f,m[f]=e),e}function o(t,i,s){if(i||(i=e),c)return i.createElement(t)
s||(s=n(i))
var o
return o=s.cache[t]?s.cache[t].cloneNode():p.test(t)?(s.cache[t]=s.createElem(t)).cloneNode():s.createElem(t),o.canHaveChildren&&!d.test(t)?s.frag.appendChild(o):o}function r(t,i){if(t||(t=e),c)return t.createDocumentFragment()
i=i||n(t)
for(var o=i.frag.cloneNode(),r=0,a=s(),l=a.length;l>r;r++)o.createElement(a[r])
return o}function a(t,e){e.cache||(e.cache={},e.createElem=t.createElement,e.createFrag=t.createDocumentFragment,e.frag=e.createFrag()),t.createElement=function(i){return v.shivMethods?o(i,t,e):e.createElem(i)},t.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+s().join().replace(/\w+/g,function(t){return e.createElem(t),e.frag.createElement(t),'c("'+t+'")'})+");return n}")(v,e.frag)}function l(t){t||(t=e)
var s=n(t)
return v.shivCSS&&!h&&!s.hasCSS&&(s.hasCSS=!!i(t,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),c||a(t,s),t}var h,c,u=t.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,p=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g="_html5shiv",f=0,m={}
!function(){try{var t=e.createElement("a")
t.innerHTML="<xyz></xyz>",h="hidden"in t,c=1==t.childNodes.length||function(){e.createElement("a")
var t=e.createDocumentFragment()
return void 0===t.cloneNode||void 0===t.createDocumentFragment||void 0===t.createElement}()}catch(i){h=!0,c=!0}}()
var v={elements:u.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:u.shivCSS!==!1,supportsUnknownElements:c,shivMethods:u.shivMethods!==!1,type:"default",shivDocument:l,createElement:o,createDocumentFragment:r}
t.html5=v,l(e)}(this,e),g._version=p,g._prefixes=C,g._domPrefixes=S,g._cssomPrefixes=$,g.mq=L,g.hasEvent=O,g.testProp=function(t){return a([t])},g.testAllProps=h,g.testStyles=P,m.className=m.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+z.join(" "):""),g}(this,this.document),function(t,e,i){function s(t){return"[object Function]"==m.call(t)}function n(t){return"string"==typeof t}function o(){}function r(t){return!t||"loaded"==t||"complete"==t||"uninitialized"==t}function a(){var t=v.shift()
y=1,t?t.t?g(function(){("c"==t.t?d.injectCss:d.injectJs)(t.s,0,t.a,t.x,t.e,1)},0):(t(),a()):y=0}function l(t,i,s,n,o,l,h){function c(e){if(!p&&r(u.readyState)&&(w.r=p=1,!y&&a(),u.onload=u.onreadystatechange=null,e)){"img"!=t&&g(function(){b.removeChild(u)},50)
for(var s in S[i])S[i].hasOwnProperty(s)&&S[i][s].onload()}}var h=h||d.errorTimeout,u=e.createElement(t),p=0,m=0,w={t:s,s:i,e:o,a:l,x:h}
1===S[i]&&(m=1,S[i]=[]),"object"==t?u.data=i:(u.src=i,u.type=t),u.width=u.height="0",u.onerror=u.onload=u.onreadystatechange=function(){c.call(this,m)},v.splice(n,0,w),"img"!=t&&(m||2===S[i]?(b.insertBefore(u,_?null:f),g(c,h)):S[i].push(u))}function h(t,e,i,s,o){return y=0,e=e||"j",n(t)?l("c"==e?C:x,t,e,this.i++,i,s,o):(v.splice(this.i++,0,t),1==v.length&&a()),this}function c(){var t=d
return t.loader={load:h,i:0},t}var u,d,p=e.documentElement,g=t.setTimeout,f=e.getElementsByTagName("script")[0],m={}.toString,v=[],y=0,w="MozAppearance"in p.style,_=w&&!!e.createRange().compareNode,b=_?p:f.parentNode,p=t.opera&&"[object Opera]"==m.call(t.opera),p=!!e.attachEvent&&!p,x=w?"object":p?"script":"img",C=p?"script":x,E=Array.isArray||function(t){return"[object Array]"==m.call(t)},$=[],S={},T={timeout:function(t,e){return e.length&&(t.timeout=e[0]),t}}
d=function(t){function e(t){var e,i,s,t=t.split("!"),n=$.length,o=t.pop(),r=t.length,o={url:o,origUrl:o,prefixes:t}
for(i=0;r>i;i++)s=t[i].split("="),(e=T[s.shift()])&&(o=e(o,s))
for(i=0;n>i;i++)o=$[i](o)
return o}function r(t,n,o,r,a){var l=e(t),h=l.autoCallback
l.url.split(".").pop().split("?").shift(),l.bypass||(n&&(n=s(n)?n:n[t]||n[r]||n[t.split("/").pop().split("?")[0]]),l.instead?l.instead(t,n,o,r,a):(S[l.url]?l.noexec=!0:S[l.url]=1,o.load(l.url,l.forceCSS||!l.forceJS&&"css"==l.url.split(".").pop().split("?").shift()?"c":i,l.noexec,l.attrs,l.timeout),(s(n)||s(h))&&o.load(function(){c(),n&&n(l.origUrl,a,r),h&&h(l.origUrl,a,r),S[l.url]=2})))}function a(t,e){function i(t,i){if(t){if(n(t))i||(u=function(){var t=[].slice.call(arguments)
d.apply(this,t),p()}),r(t,u,e,0,h)
else if(Object(t)===t)for(l in a=function(){var e,i=0
for(e in t)t.hasOwnProperty(e)&&i++
return i}(),t)t.hasOwnProperty(l)&&(!i&&!--a&&(s(u)?u=function(){var t=[].slice.call(arguments)
d.apply(this,t),p()}:u[l]=function(t){return function(){var e=[].slice.call(arguments)
t&&t.apply(this,e),p()}}(d[l])),r(t[l],u,e,l,h))}else!i&&p()}var a,l,h=!!t.test,c=t.load||t.both,u=t.callback||o,d=u,p=t.complete||o
i(h?t.yep:t.nope,!!c),c&&i(c)}var l,h,u=this.yepnope.loader
if(n(t))r(t,0,u,0)
else if(E(t))for(l=0;l<t.length;l++)h=t[l],n(h)?r(h,0,u,0):E(h)?d(h):Object(h)===h&&a(h,u)
else Object(t)===t&&a(t,u)},d.addPrefix=function(t,e){T[t]=e},d.addFilter=function(t){$.push(t)},d.errorTimeout=1e4,null==e.readyState&&e.addEventListener&&(e.readyState="loading",e.addEventListener("DOMContentLoaded",u=function(){e.removeEventListener("DOMContentLoaded",u,0),e.readyState="complete"},0)),t.yepnope=c(),t.yepnope.executeStack=a,t.yepnope.injectJs=function(t,i,s,n,l,h){var c,u,p=e.createElement("script"),n=n||d.errorTimeout
p.src=t
for(u in s)p.setAttribute(u,s[u])
i=h?a:i||o,p.onreadystatechange=p.onload=function(){!c&&r(p.readyState)&&(c=1,i(),p.onload=p.onreadystatechange=null)},g(function(){c||(c=1,i(1))},n),l?p.onload():f.parentNode.insertBefore(p,f)},t.yepnope.injectCss=function(t,i,s,n,r,l){var h,n=e.createElement("link"),i=l?a:i||o
n.href=t,n.rel="stylesheet",n.type="text/css"
for(h in s)n.setAttribute(h,s[h])
r||(f.parentNode.insertBefore(n,f),g(i,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))}
