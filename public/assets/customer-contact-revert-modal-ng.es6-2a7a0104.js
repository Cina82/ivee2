!function e(t,n,r){function o(u,s){if(!n[u]){if(!t[u]){var f="function"==typeof require&&require;if(!s&&f)return f(u,!0);if(i)return i(u,!0);var c=new Error("Cannot find module '"+u+"'");throw c.code="MODULE_NOT_FOUND",c}var l=n[u]={exports:{}};t[u][0].call(l.exports,function(e){var n=t[u][1][e];return o(n?n:e)},l,l.exports,e,t,n,r)}return n[u].exports}for(var i="function"==typeof require&&require,u=0;u<r.length;u++)o(r[u]);return o}({1:[function(e,t,n){(function(t){"use strict";function n(e){return e&&e.__esModule?e:{"default":e}}var r="undefined"!=typeof window?window.angular:"undefined"!=typeof t?t.angular:null,o=n(r),i=e("./customer-contact-revert-modal.es6"),u=n(i),s=e("../../../utilities/notify/scripts/notify.es6"),f=n(s),c=o["default"].module("auraComponents");c.directive("customerContactRevertModal",["eventPubSub",function(e){function t(t,n,r){function o(){t.$apply()}t.ccRevertModal=new u["default"](n,{owningUserId:r.owningUserId,requestUserId:r.requestUserId,redeemCreditsUrl:r.redeemCreditsUrl,modalId:r.modalId,showOnLoad:r.showOnLoad,creditAmount:r.redeemCreditsAmount,onUpdate:o,pubsub:e,notify:f["default"]})}return{restrict:"E",scope:!0,link:t}}])}).call(this,"undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{})},{"../../../utilities/notify/scripts/notify.es6":5,"./customer-contact-revert-modal.es6":2}],2:[function(e,t,n){(function(t){"use strict";function r(e){return e&&e.__esModule?e:{"default":e}}function o(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(n,"__esModule",{value:!0});var i=function(){function e(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}return function(t,n,r){return n&&e(t.prototype,n),r&&e(t,r),t}}(),u="undefined"!=typeof window?window._:"undefined"!=typeof t?t._:null,s=r(u),f=e("../../../utilities/promises/scripts/promises.es6"),c=r(f),l=e("../../../utilities/track/scripts/track.es6"),a=r(l),d=function(){function e(t){var n=this,r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};o(this,e),this.$el=t,s["default"].extend(this,r),this.pubsub.subscribe("modal","show",function(e){e===n.modalId&&n.track("view")}),this.showOnLoad&&this.pubsub.publish("modal","show",this.modalId),this.submitting=!1,this.loadElementReferences()}return i(e,[{key:"redeemCredits",value:function(){var e=this;this.submitting||(this.submitting=!0,c["default"].http.post(this.redeemCreditsUrl,{redeem:!0}).then(function(t){e.submitting=!1,e.pubsub.publish("modal","hide",e.modalId),t.success?(e.pubsub.publish(e.modalId,"redeem-credits"),e.creditAmount?e.notify("We've added "+e.creditAmount+" credits to your account.",0,"success"):e.notify("You're now paying to quote",0,"success")):e.notify(t.error,0,"caution")})["catch"](function(){e.submitting=!1,e.notify("There was a problem with your request. Please try again.",0,"caution")}))}},{key:"track",value:function(e,t){var n={owning_user_id:this.owningUserId,request_user_id:this.requestUserId};t=s["default"].extend(n,t),(0,a["default"])("customer contact revert modal/"+e,t)}},{key:"loadElementReferences",value:function(){}}]),e}();n["default"]=d}).call(this,"undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{})},{"../../../utilities/promises/scripts/promises.es6":8,"../../../utilities/track/scripts/track.es6":9}],3:[function(e,t,n){(function(r,o){!function(e,r){"object"==typeof n&&"undefined"!=typeof t?t.exports=r():"function"==typeof define&&define.amd?define(r):e.ES6Promise=r()}(this,function(){"use strict";function t(e){return"function"==typeof e||"object"==typeof e&&null!==e}function n(e){return"function"==typeof e}function i(e){H=e}function u(e){Q=e}function s(){return function(){return r.nextTick(d)}}function f(){return function(){B(d)}}function c(){var e=0,t=new Z(d),n=document.createTextNode("");return t.observe(n,{characterData:!0}),function(){n.data=e=++e%2}}function l(){var e=new MessageChannel;return e.port1.onmessage=d,function(){return e.port2.postMessage(0)}}function a(){var e=setTimeout;return function(){return e(d,1)}}function d(){for(var e=0;e<z;e+=2){var t=ne[e],n=ne[e+1];t(n),ne[e]=void 0,ne[e+1]=void 0}z=0}function p(){try{var t=e,n=t("vertx");return B=n.runOnLoop||n.runOnContext,f()}catch(r){return a()}}function h(e,t){var n=arguments,r=this,o=new this.constructor(y);void 0===o[oe]&&q(o);var i=r._state;return i?!function(){var e=n[i-1];Q(function(){return C(i,o,e,r._result)})}():E(r,o,e,t),o}function v(e){var t=this;if(e&&"object"==typeof e&&e.constructor===t)return e;var n=new t(y);return O(n,e),n}function y(){}function m(){return new TypeError("You cannot resolve a promise with itself")}function w(){return new TypeError("A promises callback cannot return that same promise.")}function _(e){try{return e.then}catch(t){return fe.error=t,fe}}function b(e,t,n,r){try{e.call(t,n,r)}catch(o){return o}}function g(e,t,n){Q(function(e){var r=!1,o=b(n,t,function(n){r||(r=!0,t!==n?O(e,n):P(e,n))},function(t){r||(r=!0,M(e,t))},"Settle: "+(e._label||" unknown promise"));!r&&o&&(r=!0,M(e,o))},e)}function T(e,t){t._state===ue?P(e,t._result):t._state===se?M(e,t._result):E(t,void 0,function(t){return O(e,t)},function(t){return M(e,t)})}function A(e,t,r){t.constructor===e.constructor&&r===h&&t.constructor.resolve===v?T(e,t):r===fe?M(e,fe.error):void 0===r?P(e,t):n(r)?g(e,t,r):P(e,t)}function O(e,n){e===n?M(e,m()):t(n)?A(e,n,_(n)):P(e,n)}function j(e){e._onerror&&e._onerror(e._result),k(e)}function P(e,t){e._state===ie&&(e._result=t,e._state=ue,0!==e._subscribers.length&&Q(k,e))}function M(e,t){e._state===ie&&(e._state=se,e._result=t,Q(j,e))}function E(e,t,n,r){var o=e._subscribers,i=o.length;e._onerror=null,o[i]=t,o[i+ue]=n,o[i+se]=r,0===i&&e._state&&Q(k,e)}function k(e){var t=e._subscribers,n=e._state;if(0!==t.length){for(var r=void 0,o=void 0,i=e._result,u=0;u<t.length;u+=3)r=t[u],o=t[u+n],r?C(n,r,o,i):o(i);e._subscribers.length=0}}function S(){this.error=null}function x(e,t){try{return e(t)}catch(n){return ce.error=n,ce}}function C(e,t,r,o){var i=n(r),u=void 0,s=void 0,f=void 0,c=void 0;if(i){if(u=x(r,o),u===ce?(c=!0,s=u.error,u=null):f=!0,t===u)return void M(t,w())}else u=o,f=!0;t._state!==ie||(i&&f?O(t,u):c?M(t,s):e===ue?P(t,u):e===se&&M(t,u))}function I(e,t){try{t(function(t){O(e,t)},function(t){M(e,t)})}catch(n){M(e,n)}}function U(){return le++}function q(e){e[oe]=le++,e._state=void 0,e._result=void 0,e._subscribers=[]}function $(e,t){this._instanceConstructor=e,this.promise=new e(y),this.promise[oe]||q(this.promise),K(t)?(this._input=t,this.length=t.length,this._remaining=t.length,this._result=new Array(this.length),0===this.length?P(this.promise,this._result):(this.length=this.length||0,this._enumerate(),0===this._remaining&&P(this.promise,this._result))):M(this.promise,L())}function L(){return new Error("Array Methods must be provided an Array")}function F(e){return new $(this,e).promise}function N(e){var t=this;return new t(K(e)?function(n,r){for(var o=e.length,i=0;i<o;i++)t.resolve(e[i]).then(n,r)}:function(e,t){return t(new TypeError("You must pass an array to race."))})}function W(e){var t=this,n=new t(y);return M(n,e),n}function R(){throw new TypeError("You must pass a resolver function as the first argument to the promise constructor")}function Y(){throw new TypeError("Failed to construct 'Promise': Please use the 'new' operator, this object constructor cannot be called as a function.")}function D(e){this[oe]=U(),this._result=this._state=void 0,this._subscribers=[],y!==e&&("function"!=typeof e&&R(),this instanceof D?I(this,e):Y())}function J(){var e=void 0;if("undefined"!=typeof o)e=o;else if("undefined"!=typeof self)e=self;else try{e=Function("return this")()}catch(t){throw new Error("polyfill failed because global object is unavailable in this environment")}var n=e.Promise;if(n){var r=null;try{r=Object.prototype.toString.call(n.resolve())}catch(t){}if("[object Promise]"===r&&!n.cast)return}e.Promise=D}var G=void 0;G=Array.isArray?Array.isArray:function(e){return"[object Array]"===Object.prototype.toString.call(e)};var K=G,z=0,B=void 0,H=void 0,Q=function(e,t){ne[z]=e,ne[z+1]=t,z+=2,2===z&&(H?H(d):re())},V="undefined"!=typeof window?window:void 0,X=V||{},Z=X.MutationObserver||X.WebKitMutationObserver,ee="undefined"==typeof self&&"undefined"!=typeof r&&"[object process]"==={}.toString.call(r),te="undefined"!=typeof Uint8ClampedArray&&"undefined"!=typeof importScripts&&"undefined"!=typeof MessageChannel,ne=new Array(1e3),re=void 0;re=ee?s():Z?c():te?l():void 0===V&&"function"==typeof e?p():a();var oe=Math.random().toString(36).substring(16),ie=void 0,ue=1,se=2,fe=new S,ce=new S,le=0;return $.prototype._enumerate=function(){for(var e=this.length,t=this._input,n=0;this._state===ie&&n<e;n++)this._eachEntry(t[n],n)},$.prototype._eachEntry=function(e,t){var n=this._instanceConstructor,r=n.resolve;if(r===v){var o=_(e);if(o===h&&e._state!==ie)this._settledAt(e._state,t,e._result);else if("function"!=typeof o)this._remaining--,this._result[t]=e;else if(n===D){var i=new n(y);A(i,e,o),this._willSettleAt(i,t)}else this._willSettleAt(new n(function(t){return t(e)}),t)}else this._willSettleAt(r(e),t)},$.prototype._settledAt=function(e,t,n){var r=this.promise;r._state===ie&&(this._remaining--,e===se?M(r,n):this._result[t]=n),0===this._remaining&&P(r,this._result)},$.prototype._willSettleAt=function(e,t){var n=this;E(e,void 0,function(e){return n._settledAt(ue,t,e)},function(e){return n._settledAt(se,t,e)})},D.all=F,D.race=N,D.resolve=v,D.reject=W,D._setScheduler=i,D._setAsap=u,D._asap=Q,D.prototype={constructor:D,then:h,"catch":function(e){return this.then(null,e)}},J(),D.polyfill=J,D.Promise=D,D})}).call(this,e("_process"),"undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{})},{_process:4}],4:[function(e,t,n){function r(){throw new Error("setTimeout has not been defined")}function o(){throw new Error("clearTimeout has not been defined")}function i(e){if(a===setTimeout)return setTimeout(e,0);if((a===r||!a)&&setTimeout)return a=setTimeout,setTimeout(e,0);try{return a(e,0)}catch(t){try{return a.call(null,e,0)}catch(t){return a.call(this,e,0)}}}function u(e){if(d===clearTimeout)return clearTimeout(e);if((d===o||!d)&&clearTimeout)return d=clearTimeout,clearTimeout(e);try{return d(e)}catch(t){try{return d.call(null,e)}catch(t){return d.call(this,e)}}}function s(){y&&h&&(y=!1,h.length?v=h.concat(v):m=-1,v.length&&f())}function f(){if(!y){var e=i(s);y=!0;for(var t=v.length;t;){for(h=v,v=[];++m<t;)h&&h[m].run();m=-1,t=v.length}h=null,y=!1,u(e)}}function c(e,t){this.fun=e,this.array=t}function l(){}var a,d,p=t.exports={};!function(){try{a="function"==typeof setTimeout?setTimeout:r}catch(e){a=r}try{d="function"==typeof clearTimeout?clearTimeout:o}catch(e){d=o}}();var h,v=[],y=!1,m=-1;p.nextTick=function(e){var t=new Array(arguments.length-1);if(arguments.length>1)for(var n=1;n<arguments.length;n++)t[n-1]=arguments[n];v.push(new c(e,t)),1!==v.length||y||i(f)},c.prototype.run=function(){this.fun.apply(null,this.array)},p.title="browser",p.browser=!0,p.env={},p.argv=[],p.version="",p.versions={},p.on=l,p.addListener=l,p.once=l,p.off=l,p.removeListener=l,p.removeAllListeners=l,p.emit=l,p.prependListener=l,p.prependOnceListener=l,p.listeners=function(e){return[]},p.binding=function(e){throw new Error("process.binding is not supported")},p.cwd=function(){return"/"},p.chdir=function(e){throw new Error("process.chdir is not supported")},p.umask=function(){return 0}},{}],5:[function(e,t,n){(function(e){"use strict";function t(e){return e&&e.__esModule?e:{"default":e}}function r(){c.apply(void 0,arguments)}Object.defineProperty(n,"__esModule",{value:!0}),n["default"]=r;var o="undefined"!=typeof window?window.$:"undefined"!=typeof e?e.$:null,i=t(o),u="undefined"!=typeof window?window._:"undefined"!=typeof e?e._:null,s=t(u),f=50,c=s["default"].noop;(0,i["default"])(document).ready(function(){(0,i["default"])(document).ready(function(){var e=(0,i["default"])("body");s["default"].isFunction(e.injector)&&e.injector().invoke(["$compile","$rootScope","eventPubSub","$timeout",function(e,t,n,r){c=function(o){var u=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,c=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,l=arguments.length>3&&void 0!==arguments[3]?arguments[3]:s["default"].uniqueId("alert-");n.publish("alert","hide",{id:l});var a=t.$new(),d=e((0,i["default"])("<alert>",{theme:c,"alert-id":l,html:o,"destroy-on-hide":""}))(a);(0,i["default"])("body").append(d),r(function(){n.publish("alert","show",{id:l,duration:u})},f)}}])})})}).call(this,"undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{})},{}],6:[function(e,t,n){(function(e){"use strict";function t(e){return e&&e.__esModule?e:{"default":e}}function r(e,t,n){var r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:{};return new Promise(function(o,i){f["default"].ajax(l["default"].extend(r,{url:e,data:t,type:n})).done(o).fail(i)})}function o(e,t,n){return r(e,t,"GET",n)}function i(e,t,n){return r(e,t,"POST",n)}function u(e,t,n){return o(e,t,n).then(function(e){return l["default"].isObject(e)?e:JSON.parse(e)})}Object.defineProperty(n,"__esModule",{value:!0}),n.request=r,n.get=o,n.post=i,n.getJSON=u;var s="undefined"!=typeof window?window.$:"undefined"!=typeof e?e.$:null,f=t(s),c="undefined"!=typeof window?window._:"undefined"!=typeof e?e._:null,l=t(c)}).call(this,"undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{})},{}],7:[function(e,t,n){"use strict";function r(e,t){return Promise.race([e,new Promise(function(e,n){setTimeout(function(){n(new Error("Promise wasn't resolved in time"))},t)})])}function o(e){return new Promise(function(t){setTimeout(t,e)})}Object.defineProperty(n,"__esModule",{value:!0}),n.invokeWithTimeout=r,n.resolveAfterTimeout=o},{}],8:[function(e,t,n){"use strict";function r(e){if(e&&e.__esModule)return e;var t={};if(null!=e)for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&(t[n]=e[n]);return t["default"]=e,t}function o(e){return e&&e.__esModule?e:{"default":e}}Object.defineProperty(n,"__esModule",{value:!0});var i=e("es6-promise"),u=o(i),s=e("./promise-http.es6"),f=r(s),c=e("./promise-timeout.es6");u["default"].polyfill();var l={http:f,invokeWithTimeout:c.invokeWithTimeout,resolveAfterTimeout:c.resolveAfterTimeout};n["default"]=l},{"./promise-http.es6":6,"./promise-timeout.es6":7,"es6-promise":3}],9:[function(e,t,n){(function(e){"use strict";function t(e){return e&&e.__esModule?e:{"default":e}}function r(e,t,n){f.push({type:e,data:t}),l(n)}Object.defineProperty(n,"__esModule",{value:!0}),n["default"]=r;var o="undefined"!=typeof window?window.$:"undefined"!=typeof e?e.$:null,i=t(o),u="undefined"!=typeof window?window._:"undefined"!=typeof e?e._:null,s=t(u),f=[],c=10,l=s["default"].debounce(function(e){var t={url:"/event/batch-add/",type:"post",data:{buffer:f}};s["default"].isFunction(e)&&(t.success=function(t){e(null,t)},t.error=function(t){e(t,null)}),f.length>0&&(i["default"].ajax(t),f=[])},c)}).call(this,"undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{})},{}]},{},[1]);