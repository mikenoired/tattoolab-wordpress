!function(e){var t={};function n(i){if(t[i])return t[i].exports;var r=t[i]={i:i,l:!1,exports:{}};return e[i].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(i,r,function(t){return e[t]}.bind(null,r));return i},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=1)}([function(e,t){function n(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}var i=["webkit"],r=function(){function e(t,n,i){!function(t,n){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this),this.callback=i||null,this.container=t,this.image=this.container.querySelector(n)||this.container.querySelector("img"),this.gradientData=[],this.image&&this.container&&(this.canvas=document.createElement("canvas"),this.ctx=this.canvas.getContext("2d"),this.imageDimensions={width:0,height:0},this.imageData=[],this.readImage())}var t,r;return t=e,(r=[{key:"readImage",value:function(){this.imageDimensions.width=.1*this.image.width,this.imageDimensions.height=.1*this.image.height,this.render()}},{key:"getImageData",value:function(){var e=this.ctx.getImageData(0,0,this.imageDimensions.width,this.imageDimensions.height).data;this.imageData=Array.from(e)}},{key:"getChunkedImageData",value:function(){return this.imageData.reduce(function(e,t,n){var i=Math.floor(n/4);return e[i]||(e[i]=[]),e[i].push(t),e},[]).filter(function(e){return e.slice(0,2).every(function(e){return e<250})&&e.slice(0,2).every(function(e){return 0<e})})}},{key:"getRGBAGradientValues",value:function(e){return e.map(function(e,t){return"rgb(".concat(e.rgba.slice(0,3).join(","),") ").concat(0==t?"0%":"75%")}).join(",")}},{key:"getCSSGradientProperty",value:function(e){var t=this.getRGBAGradientValues(e);return i.map(function(e){return"background-image: -".concat(e,"-linear-gradient(\n                        135deg,\n                        ").concat(t,"\n                    )")}).concat(["background-image: linear-gradient(\n                    135deg,\n                    ".concat(t,"\n                )")]).join(";")}},{key:"getMiddleRGB",value:function(e,t){return[parseInt(.5*e[0]+.5*t[0]),parseInt(.5*e[1]+.5*t[1]),parseInt(.5*e[2]+.5*t[2])]}},{key:"getSortedValues",value:function(e){return Object.keys(e).map(function(t){var n=t,i=t.split("|"),r=(299*i[0]+587*i[1]+114*i[2])/1e3;return{rgba:n.split("|"),occurs:e[t],brightness:r}}).sort(function(e,t){return e.occurs-t.occurs}).reverse().slice(0,10).sort(function(e,t){return e.brightness-t.brightness}).reverse()}},{key:"getTextProperty",value:function(e){var t=this.getMiddleRGB(e[0].rgba.slice(0,3),e[1].rgba.slice(0,3));return 125<Math.round((299*parseInt(t[0])+587*parseInt(t[1])+114*parseInt(t[2]))/1e3)?"color: #000":"color: #fff"}},{key:"getTopValues",value:function(e){var t=this.getSortedValues(e);return[t[0],t[t.length-1]]}},{key:"getUniqValues",value:function(e){return e.reduce(function(e,t){var n=t.join("|");return e[n]?e[n]=++e[n]:e[n]=1,e},{})}},{key:"renderGradient",value:function(){var e=window.localStorage,t="grade-".concat(this.image.getAttribute("src")),n=null;if(e&&e.getItem(t))n=JSON.parse(e.getItem(t));else{var i=this.getChunkedImageData();n=this.getTopValues(this.getUniqValues(i)),e&&e.setItem(t,JSON.stringify(n))}if(this.callback)this.gradientData=n;else{var r=this.getCSSGradientProperty(n),o=this.getTextProperty(n),a="".concat(this.container.getAttribute("style")||"","; ").concat(r,"; ").concat(o);this.container.setAttribute("style",a)}}},{key:"render",value:function(){this.canvas.width=this.imageDimensions.width,this.canvas.height=this.imageDimensions.height,this.ctx.drawImage(this.image,0,0,this.imageDimensions.width,this.imageDimensions.height),this.getImageData(),this.renderGradient()}}])&&n(t.prototype,r),e}();e.exports=function(e,t,n){var i=function(e,t,n){var i=new r(e,t,n).gradientData;return i.length?{element:e,gradientData:i}:null},o=(NodeList.prototype.isPrototypeOf(e)?Array.from(e).map(function(e){return i(e,t,n)}):[i(e,t,n)]).filter(Boolean);if(o.length)return n(o)}},function(e,t,n){"use strict";n.r(t);var i=n(0),r=n.n(i);n(23),n(2),n(3),n(4),n(5),n(6),n(7),n(8),n(9),n(10),n(11),n(12),n(13),n(14),n(15),n(16),n(17),n(18),n(19),n(20),n(21),n(22),window.onscroll=function(){var e=window.pageYOffset/2;document.body.style.backgroundPosition="left -"+e+"px"},window.addEventListener("load",function(){r()(document.querySelectorAll("header"))})},function(e,t,n){e.exports=n.p+"img/svg-icons.svg"},function(e,t,n){e.exports=n.p+"favicon/favicon.ico"},function(e,t,n){e.exports=n.p+"favicon/android-chrome-192x192.png"},function(e,t,n){e.exports=n.p+"favicon/android-chrome-512x512.png"},function(e,t,n){e.exports=n.p+"favicon/apple-touch-icon-60x60.png"},function(e,t,n){e.exports=n.p+"favicon/apple-touch-icon-76x76.png"},function(e,t,n){e.exports=n.p+"favicon/apple-touch-icon-120x120.png"},function(e,t,n){e.exports=n.p+"favicon/apple-touch-icon-152x152.png"},function(e,t,n){e.exports=n.p+"favicon/apple-touch-icon-180x180.png"},function(e,t,n){e.exports=n.p+"favicon/apple-touch-icon.png"},function(e,t,n){e.exports=n.p+"favicon/browserconfig.xml"},function(e,t,n){e.exports=n.p+"favicon/favicon-16x16.png"},function(e,t,n){e.exports=n.p+"favicon/favicon-32x32.png"},function(e,t,n){e.exports=n.p+"favicon/mstile-70x70.png"},function(e,t,n){e.exports=n.p+"favicon/mstile-144x144.png"},function(e,t,n){e.exports=n.p+"favicon/mstile-150x150.png"},function(e,t,n){e.exports=n.p+"favicon/mstile-310x150.png"},function(e,t,n){e.exports=n.p+"favicon/mstile-310x310.png"},function(e,t,n){e.exports=n.p+"favicon/safari-pinned-tab.svg"},function(e,t,n){e.exports=n.p+"favicon/yandex-tab-icon.png"},function(e,t,n){e.exports=n.p+"favicon/site.webmanifest"},function(e,t){}]);