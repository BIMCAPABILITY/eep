
    <script src="<?php echo base_url('assets_admin/vendor/libs/jquery/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/popper/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/js/menu.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/apex-charts/apexcharts.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/dashboards-analytics.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/parsley.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/checkbox.js'); ?>"></script>

    <!-- Range -->

  <script>
    
  
    // Initialize slider:
    $(document).ready(function() {
      $('.noUi-handle').on('click', function() {
        $(this).width(50);
      });

    // Mind
           
    var rangeSlider = document.getElementById('slider-range-mind');
           var moneyFormat = wNumb({
             decimals: 0,
             thousand: ','
           });

           noUiSlider.create(rangeSlider, {
            <?php if($personality) : ?>
              start: [<?php echo $personality->min_value_mind; ?>, <?php  echo $personality->max_value_mind; ?>],
            <?php else: ?>
              start: [1, 20],
            <?php endif; ?>
             step: 1,
             range: {
              'min': [1],
              'max': [100]
             },
             format: moneyFormat,
             connect: true
           });
           
           rangeSlider.noUiSlider.on('update', function(values, handle) {

            let value1 = document.getElementById('slider-range-mind1').innerHTML = values[0];
            let value2 = document.getElementById('slider-range-mind2').innerHTML = values[1];

            var mind = (parseInt(value1)) + (parseInt(value2));

            if(mind > 100){
              document.getElementById('slider-range-mind1').style.color = "#fff";
              document.getElementById('slider-range-mind2').style.color = "#fff";
              document.getElementById('slider-range-mind1').style.backgroundColor = "red";
              document.getElementById('slider-range-mind2').style.backgroundColor = "red";

            }else if(mind <= 100){
              document.getElementById('slider-range-mind1').style.color = "#2a61c7";
              document.getElementById('slider-range-mind2').style.color = "#2a61c7";
              document.getElementById('slider-range-mind1').style.backgroundColor = "#d6e0f5";
              document.getElementById('slider-range-mind2').style.backgroundColor = "#d6e0f5";

              document.getElementById('min-value-mind').value = value1;
              document.getElementById('max-value-mind').value = value2;

            }

           });

           // End Mind

           // Energy

             var rangeSlider2 = document.getElementById('slider-range-energy');
             var moneyFormat = wNumb({
               decimals: 0,
               thousand: ','
             });

             noUiSlider.create(rangeSlider2, {
              <?php if($personality) : ?>
              start: [<?php echo $personality->min_value_energy; ?>, <?php  echo $personality->max_value_energy; ?>],
            <?php else: ?>
              start: [1, 20],
            <?php endif; ?>
               step: 1,
               range: {
                 'min': [1],
                 'max': [100]
               },
               format: moneyFormat,
               connect: true
             });
             
             rangeSlider2.noUiSlider.on('update', function(values, handle) {
               
              let value1 = document.getElementById('slider-range-energy1').innerHTML = values[0];
              let value2 = document.getElementById('slider-range-energy2').innerHTML = values[1];

              var energy = (parseInt(value1)) + (parseInt(value2));

              if(energy > 100){
                document.getElementById('slider-range-energy1').style.color = "#fff";
                document.getElementById('slider-range-energy2').style.color = "#fff";
                document.getElementById('slider-range-energy1').style.backgroundColor = "red";
                document.getElementById('slider-range-energy2').style.backgroundColor = "red";

              }else if(energy <= 100){
                document.getElementById('slider-range-energy1').style.color = "#2a61c7";
                document.getElementById('slider-range-energy2').style.color = "#2a61c7";
                document.getElementById('slider-range-energy1').style.backgroundColor = "#d6e0f5";
                document.getElementById('slider-range-energy2').style.backgroundColor = "#d6e0f5";

                document.getElementById('min-value-energy').value = value1;
                document.getElementById('max-value-energy').value = value2;

              }

              
             });

           // End Energy

           // Nature

             var rangeSlider2 = document.getElementById('slider-range-nature');
             var moneyFormat = wNumb({
               decimals: 0,
               thousand: ','
             });

             noUiSlider.create(rangeSlider2, {
              <?php if($personality) : ?>
              start: [<?php echo $personality->min_value_nature; ?>, <?php  echo $personality->max_value_nature; ?>],
            <?php else: ?>
              start: [1, 20],
            <?php endif; ?>
               step: 1,
               range: {
                 'min': [1],
                 'max': [100]
               },
               format: moneyFormat,
               connect: true
             });
             
             rangeSlider2.noUiSlider.on('update', function(values, handle) {
               
              let value1 = document.getElementById('slider-range-nature1').innerHTML = values[0];
              let value2 = document.getElementById('slider-range-nature2').innerHTML = values[1];

              var nature = (parseInt(value1)) + (parseInt(value2));

              if(nature > 100){
                document.getElementById('slider-range-nature1').style.color = "#fff";
                document.getElementById('slider-range-nature2').style.color = "#fff";
                document.getElementById('slider-range-nature1').style.backgroundColor = "red";
                document.getElementById('slider-range-nature2').style.backgroundColor = "red";

              }else if(nature <= 100){
                document.getElementById('slider-range-nature1').style.color = "#2a61c7";
                document.getElementById('slider-range-nature2').style.color = "#2a61c7";
                document.getElementById('slider-range-nature1').style.backgroundColor = "#d6e0f5";
                document.getElementById('slider-range-nature2').style.backgroundColor = "#d6e0f5";

                document.getElementById('min-value-nature').value = value1;
                document.getElementById('max-value-nature').value = value2;

              }
               
             });

           // End Nature

           // Tactics

               var rangeSlider2 = document.getElementById('slider-range-tactics');
               var moneyFormat = wNumb({
                 decimals: 0,
                 thousand: ','
               });
           
               noUiSlider.create(rangeSlider2, {
                <?php if($personality) : ?>
              start: [<?php echo $personality->min_value_tactics; ?>, <?php  echo $personality->max_value_tactics; ?>],
            <?php else: ?>
              start: [1, 20],
            <?php endif; ?>
                 step: 1,
                 range: {
                   'min': [1],
                   'max': [100]
                 },
                 format: moneyFormat,
                 connect: true
               });
               
               rangeSlider2.noUiSlider.on('update', function(values, handle) {
                 
                 let value1 = document.getElementById('slider-range-tactics1').innerHTML = values[0];
                 let value2 = document.getElementById('slider-range-tactics2').innerHTML = values[1];

                var tactics = (parseInt(value1)) + (parseInt(value2));

                if(tactics > 100){
                  document.getElementById('slider-range-tactics1').style.color = "#fff";
                  document.getElementById('slider-range-tactics2').style.color = "#fff";
                  document.getElementById('slider-range-tactics1').style.backgroundColor = "red";
                  document.getElementById('slider-range-tactics2').style.backgroundColor = "red";

                }else if(tactics <= 100){
                  document.getElementById('slider-range-tactics1').style.color = "#2a61c7";
                  document.getElementById('slider-range-tactics2').style.color = "#2a61c7";
                  document.getElementById('slider-range-tactics1').style.backgroundColor = "#d6e0f5";
                  document.getElementById('slider-range-tactics2').style.backgroundColor = "#d6e0f5";

                  document.getElementById('min-value-tactics').value = value1;
                  document.getElementById('max-value-tactics').value = value2;

                }
                 
               });
           
           // End Tactics

           // Identity

           var rangeSlider2 = document.getElementById('slider-range-identity');
           var moneyFormat = wNumb({
             decimals: 0,
             thousand: ','
           });

           noUiSlider.create(rangeSlider2, {
            <?php if($personality) : ?>
              start: [<?php echo $personality->min_value_identity; ?>, <?php  echo $personality->max_value_identity; ?>],
            <?php else: ?>
              start: [1, 20],
            <?php endif; ?>
             step: 1,
             range: {
               'min': [1],
               'max': [100]
             },
             format: moneyFormat,
             connect: true
           });
           
           rangeSlider2.noUiSlider.on('update', function(values, handle) {
             
             let value1 = document.getElementById('slider-range-identity1').innerHTML = values[0];
             let value2 = document.getElementById('slider-range-identity2').innerHTML = values[1];

            var identity = (parseInt(value1)) + (parseInt(value2));

            if(identity > 100){
              document.getElementById('slider-range-identity1').style.color = "#fff";
              document.getElementById('slider-range-identity2').style.color = "#fff";
              document.getElementById('slider-range-identity1').style.backgroundColor = "red";
              document.getElementById('slider-range-identity2').style.backgroundColor = "red";

            }else if(identity <= 100){
              document.getElementById('slider-range-identity1').style.color = "#2a61c7";
              document.getElementById('slider-range-identity2').style.color = "#2a61c7";
              document.getElementById('slider-range-identity1').style.backgroundColor = "#d6e0f5";
              document.getElementById('slider-range-identity2').style.backgroundColor = "#d6e0f5";

              document.getElementById('min-value-identity').value = value1;
              document.getElementById('max-value-identity').value = value2;

            }
             
           });
             
           // End Tactics

    });

/*! nouislider - 8.3.0 - 2016-02-14 17:37:19 */ !function(t){"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?module.exports=t():window.noUiSlider=t()}(function(){"use strict";function t(t){var e=t.getBoundingClientRect(),n=t.ownerDocument.documentElement,i=a();return/webkit.*Chrome.*Mobile/i.test(navigator.userAgent)&&(i.x=0),{top:e.top+i.y-n.clientTop,left:e.left+i.x-n.clientLeft}}function e(t){return"number"==typeof t&&!isNaN(t)&&isFinite(t)}function n(t,e,n){o(t,e),setTimeout(function(){s(t,e)},n)}function i(t){return Math.max(Math.min(t,100),0)}function r(t){return Array.isArray(t)?t:[t]}function o(t,e){t.classList?t.classList.add(e):t.className+=" "+e}function s(t,e){t.classList?t.classList.remove(e):t.className=t.className.replace(RegExp("(^|\\b)"+e.split(" ").join("|")+"(\\b|$)","gi")," ")}function a(){var t,e=void 0!==window.pageXOffset,n="CSS1Compat"===(document.compatMode||"");return{x:e?window.pageXOffset:n?document.documentElement.scrollLeft:document.body.scrollLeft,y:e?window.pageYOffset:n?document.documentElement.scrollTop:document.body.scrollTop}}function u(t){t.stopPropagation()}var l=window.navigator.pointerEnabled?{start:"pointerdown",move:"pointermove",end:"pointerup"}:window.navigator.msPointerEnabled?{start:"MSPointerDown",move:"MSPointerMove",end:"MSPointerUp"}:{start:"mousedown touchstart",move:"mousemove touchmove",end:"mouseup touchend"};function c(t,e){return 100/(e-t)}function f(t,e){return 100*e/(t[1]-t[0])}function p(t,e){for(var n=1;t>=e[n];)n+=1;return n}function d(t,n,i){var r;if("number"==typeof n&&(n=[n]),"[object Array]"!==Object.prototype.toString.call(n))throw Error("noUiSlider: 'range' contains invalid value.");if(!e(r="min"===t?0:"max"===t?100:parseFloat(t))||!e(n[0]))throw Error("noUiSlider: 'range' value isn't numeric.");i.xPct.push(r),i.xVal.push(n[0]),r?i.xSteps.push(!isNaN(n[1])&&n[1]):isNaN(n[1])||(i.xSteps[0]=n[1])}function $(t,e,n){if(!e)return!0;n.xSteps[t]=f([n.xVal[t],n.xVal[t+1]],e)/c(n.xPct[t],n.xPct[t+1])}function h(t,e,n,i){this.xPct=[],this.xVal=[],this.xSteps=[i||!1],this.xNumSteps=[!1],this.snap=e,this.direction=n;var r,o=[];for(r in t)t.hasOwnProperty(r)&&o.push([t[r],r]);for(o.length&&"object"==typeof o[0][0]?o.sort(function(t,e){return t[0][0]-e[0][0]}):o.sort(function(t,e){return t[0]-e[0]}),r=0;r<o.length;r++)d(o[r][1],o[r][0],this);for(r=0,this.xNumSteps=this.xSteps.slice(0);r<this.xNumSteps.length;r++)$(r,this.xNumSteps[r],this)}h.prototype.getMargin=function(t){return 2===this.xPct.length&&f(this.xVal,t)},h.prototype.toStepping=function(t){return t=function t(e,n,i){if(i>=e.slice(-1)[0])return 100;var r,o,s,a,u,l,d=p(i,e);return r=e[d-1],o=e[d],s=n[d-1],a=n[d],s+(u=[r,o],l=i,f(u,u[0]<0?l+Math.abs(u[0]):l-u[0])/c(s,a))}(this.xVal,this.xPct,t),this.direction&&(t=100-t),t},h.prototype.fromStepping=function(t){var e;return this.direction&&(t=100-t),Number((Math.round(1e7*(e=function t(e,n,i){if(i>=100)return e.slice(-1)[0];var r,o,s,a,u,l,f=p(i,n);return r=e[f-1],o=e[f],s=n[f-1],a=n[f],u=[r,o],(l=(i-s)*c(s,a))*(u[1]-u[0])/100+u[0]}(this.xVal,this.xPct,t)))/1e7).toFixed(7))},h.prototype.getStep=function(t){return this.direction&&(t=100-t),t=function t(e,n,i,r){if(100===r)return r;var o,s,a,u,l=p(r,e);return i?r-(a=e[l-1])>((u=e[l])-a)/2?u:a:n[l-1]?e[l-1]+(o=r-e[l-1],Math.round(o/(s=n[l-1]))*s):r}(this.xPct,this.xSteps,this.snap,t),this.direction&&(t=100-t),t},h.prototype.getApplicableStep=function(t){var e=p(t,this.xPct),n=100===t?2:1;return[this.xNumSteps[e-2],this.xVal[e-n],this.xNumSteps[e-n]]},h.prototype.convert=function(t){return this.getStep(this.toStepping(t))};var m={to:function(t){return void 0!==t&&t.toFixed(2)},from:Number};function _(t,n){if(!e(n))throw Error("noUiSlider: 'step' is not numeric.");t.singleStep=n}function g(t,e){if("object"!=typeof e||Array.isArray(e))throw Error("noUiSlider: 'range' is not an object.");if(void 0===e.min||void 0===e.max)throw Error("noUiSlider: Missing 'min' or 'max' in 'range'.");if(e.min===e.max)throw Error("noUiSlider: 'range' 'min' and 'max' cannot be equal.");t.spectrum=new h(e,t.snap,t.dir,t.singleStep)}function v(t,e){if(!Array.isArray(e=r(e))||!e.length||e.length>2)throw Error("noUiSlider: 'start' option is incorrect.");t.handles=e.length,t.start=e}function b(t,e){if(t.snap=e,"boolean"!=typeof e)throw Error("noUiSlider: 'snap' option must be a boolean.")}function x(t,e){if(t.animate=e,"boolean"!=typeof e)throw Error("noUiSlider: 'animate' option must be a boolean.")}function y(t,e){if("lower"===e&&1===t.handles)t.connect=1;else if("upper"===e&&1===t.handles)t.connect=2;else if(!0===e&&2===t.handles)t.connect=3;else if(!1===e)t.connect=0;else throw Error("noUiSlider: 'connect' option doesn't match handle count.")}function S(t,e){switch(e){case"horizontal":t.ort=0;break;case"vertical":t.ort=1;break;default:throw Error("noUiSlider: 'orientation' option is invalid.")}}function w(t,n){if(!e(n))throw Error("noUiSlider: 'margin' option must be numeric.");if(0!==n&&(t.margin=t.spectrum.getMargin(n),!t.margin))throw Error("noUiSlider: 'margin' option is only supported on linear sliders.")}function E(t,n){if(!e(n))throw Error("noUiSlider: 'limit' option must be numeric.");if(t.limit=t.spectrum.getMargin(n),!t.limit)throw Error("noUiSlider: 'limit' option is only supported on linear sliders.")}function U(t,e){switch(e){case"ltr":t.dir=0;break;case"rtl":t.dir=1,t.connect=[0,2,1,3][t.connect];break;default:throw Error("noUiSlider: 'direction' option was not recognized.")}}function P(t,e){if("string"!=typeof e)throw Error("noUiSlider: 'behaviour' must be a string containing options.");var n=e.indexOf("tap")>=0,i=e.indexOf("drag")>=0,r=e.indexOf("fixed")>=0,o=e.indexOf("snap")>=0,s=e.indexOf("hover")>=0;if(i&&!t.connect)throw Error("noUiSlider: 'drag' behaviour must be used with 'connect': true.");t.events={tap:n||o,drag:i,fixed:r,snap:o,hover:s}}function N(t,e){var n;if(!1!==e){if(!0===e)for(n=0,t.tooltips=[];n<t.handles;n++)t.tooltips.push(!0);else{if(t.tooltips=r(e),t.tooltips.length!==t.handles)throw Error("noUiSlider: must pass a formatter for all handles.");t.tooltips.forEach(function(t){if("boolean"!=typeof t&&("object"!=typeof t||"function"!=typeof t.to))throw Error("noUiSlider: 'tooltips' must be passed a formatter or 'false'.")})}}}function L(t,e){if(t.format=e,"function"==typeof e.to&&"function"==typeof e.from)return!0;throw Error("noUiSlider: 'format' requires 'to' and 'from' methods.")}function O(t,e){if(void 0!==e&&"string"!=typeof e)throw Error("noUiSlider: 'cssPrefix' must be a string.");t.cssPrefix=e}function k(t){var e,n={margin:0,limit:0,animate:!0,format:m},i={connect:!1,direction:"ltr",behaviour:"tap",orientation:"horizontal"};return Object.keys(e={step:{r:!1,t:_},start:{r:!0,t:v},connect:{r:!0,t:y},direction:{r:!0,t:U},snap:{r:!1,t:b},animate:{r:!1,t:x},range:{r:!0,t:g},orientation:{r:!1,t:S},margin:{r:!1,t:w},limit:{r:!1,t:E},behaviour:{r:!0,t:P},format:{r:!1,t:L},tooltips:{r:!1,t:N},cssPrefix:{r:!1,t:O}}).forEach(function(r){if(void 0===t[r]&&void 0===i[r]){if(e[r].r)throw Error("noUiSlider: '"+r+"' is required.");return!0}e[r].t(n,void 0===t[r]?i[r]:t[r])}),n.pips=t.pips,n.style=n.ort?"top":"left",n}return{create:function e(c,f){if(!c.nodeName)throw Error("noUiSlider.create requires a single element.");var p=k(f,c),d=function e(c,f){var p,d,$,h,m,_,g,v,b,x=c,y=[-1,-1],S=f.spectrum,w=[],E={},U=["target","base","origin","handle","horizontal","vertical","background","connect","ltr","rtl","draggable","","state-drag","","state-tap","active","","stacking","tooltip","","pips","marker","value"].map((b=f.cssPrefix||"noUi-",function(t){return b+t}));function P(t,e){var n=document.createElement("div"),i=document.createElement("div"),r=["-lower","-upper"];return t&&r.reverse(),o(i,U[3]),o(i,U[3]+r[e]),o(n,U[2]),n.appendChild(i),n}function N(t){var e,n=t.mode,i=t.density||1,r=t.filter||!1,s=function t(e,n,i){if("range"===e||"steps"===e)return S.xVal;if("count"===e){var r,o=100/(n-1),s=0;for(n=[];(r=s++*o)<=100;)n.push(r);e="positions"}return"positions"===e?n.map(function(t){return S.fromStepping(i?S.getStep(t):t)}):"values"===e?i?n.map(function(t){return S.fromStepping(S.getStep(S.toStepping(t)))}):n:void 0}(n,t.values||!1,t.stepped||!1),a=function t(e,n,i){function r(t,e){return(t+e).toFixed(7)/1}var o,s=S.direction,a={},u=S.xVal[0],l=S.xVal[S.xVal.length-1],c=!1,f=!1,p=0;return S.direction=0,(i=(o=i.slice().sort(function(t,e){return t-e})).filter(function(t){return!this[t]&&(this[t]=!0)},{}))[0]!==u&&(i.unshift(u),c=!0),i[i.length-1]!==l&&(i.push(l),f=!0),i.forEach(function(t,o){var s,u,l,d,$,h,m,_,g,v,b=t,x=i[o+1];if("steps"===n&&(s=S.xNumSteps[o]),s||(s=x-b),!1!==b&&void 0!==x)for(u=b;u<=x;u=r(u,s)){for(l=1,g=Math.round(_=($=(d=S.toStepping(u))-p)/e),v=$/g;l<=g;l+=1)a[(h=p+l*v).toFixed(5)]=["x",0];m=i.indexOf(u)>-1?1:"steps"===n?2:0,!o&&c&&(m=0),u===x&&f||(a[d.toFixed(5)]=[u,m]),p=d}}),S.direction=s,a}(i,n,s),u=t.format||{to:Math.round};return x.appendChild(function t(e,n,i){var r=["horizontal","vertical"][f.ort],s=document.createElement("div"),a="";function u(t,e,n){var i;return'class="'+e+" "+e+"-"+r+" "+e+["-normal","-large","-sub"][i=n[1]]+'" style="'+f.style+": "+t+'%"'}return o(s,U[20]),o(s,U[20]+"-"+r),Object.keys(e).forEach(function(t){var r,o;r=t,o=e[t],S.direction&&(r=100-r),o[1]=o[1]&&n?n(o[0],o[1]):o[1],a+="<div "+u(r,U[21],o)+"></div>",o[1]&&(a+="<div "+u(r,U[22],o)+">"+i.to(o[0])+"</div>")}),s.innerHTML=a,s}(a,r,u))}function L(){var t=_.getBoundingClientRect(),e="offset"+["Width","Height"][f.ort];return 0===f.ort?t.width||_[e]:t.height||_[e]}function O(t,e,n){void 0!==e&&1!==f.handles&&(e=Math.abs(e-f.dir)),Object.keys(E).forEach(function(i){t===i.split(".")[0]&&E[i].forEach(function(t){t.call(v,r(D()),e,r(M(Array.prototype.slice.call(w))),n||!1,y)})})}function M(t){return 1===t.length?t[0]:f.dir?t.reverse():t}function C(t,e,n,i){var r=function(e){var r,o,s,u,c,p,d,$,h,m;if(x.hasAttribute("disabled")||(r=x,o=U[14],r.classList?r.classList.contains(o):RegExp("\\b"+o+"\\b").test(r.className))||(e=(s=e,u=i.pageOffset,s.preventDefault(),d=0===s.type.indexOf("touch"),$=0===s.type.indexOf("mouse"),h=0===s.type.indexOf("pointer"),m=s,0===s.type.indexOf("MSPointer")&&(h=!0),d&&(c=s.changedTouches[0].pageX,p=s.changedTouches[0].pageY),u=u||a(),($||h)&&(c=s.clientX+u.x,p=s.clientY+u.y),m.pageOffset=u,m.points=[c,p],m.cursor=$||h,m),t===l.start&&void 0!==e.buttons&&e.buttons>1||i.hover&&e.buttons))return!1;e.calcPoint=e.points[f.ort],n(e,i)},o=[];return t.split(" ").forEach(function(t){e.addEventListener(t,r,!1),o.push([t,r])}),o}function A(t,e){if(-1===navigator.appVersion.indexOf("MSIE 9")&&0===t.buttons&&0!==e.buttonsProperty)return V(t,e);var n,r,o,s,a,u,l,c=e.handles||g,f=!1,p=(t.calcPoint-e.start)*100/e.baseSize,d=c[0]===g[0]?0:1;if(n=(o=p,s=e.positions,a=c.length>1,u=o+s[0],l=o+s[1],a?(u<0&&(l+=Math.abs(u)),l>100&&(u-=l-100),[i(u),i(l)]):[u,l]),f=z(c[0],n[d],1===c.length),c.length>1){if(f=z(c[1],n[d?0:1],!1)||f)for(r=0;r<e.handles.length;r++)O("slide",r)}else f&&O("slide",d)}function V(t,e){var n=_.querySelector("."+U[15]),i=e.handles[0]===g[0]?0:1;null!==n&&s(n,U[15]),t.cursor&&(document.body.style.cursor="",document.body.removeEventListener("selectstart",document.body.noUiListener));var r=document.documentElement;r.noUiListeners.forEach(function(t){r.removeEventListener(t[0],t[1])}),s(x,U[12]),O("set",i),O("change",i),void 0!==e.handleNumber&&O("end",e.handleNumber)}function j(t,e){"mouseout"===t.type&&"HTML"===t.target.nodeName&&null===t.relatedTarget&&V(t,e)}function F(t,e){var n=document.documentElement;if(1===e.handles.length&&(o(e.handles[0].children[0],U[15]),e.handles[0].hasAttribute("disabled")))return!1;t.preventDefault(),t.stopPropagation();var i=C(l.move,n,A,{start:t.calcPoint,baseSize:L(),pageOffset:t.pageOffset,handles:e.handles,handleNumber:e.handleNumber,buttonsProperty:t.buttons,positions:[y[0],y[g.length-1]]}),r=C(l.end,n,V,{handles:e.handles,handleNumber:e.handleNumber}),s=C("mouseout",n,j,{handles:e.handles,handleNumber:e.handleNumber});if(n.noUiListeners=i.concat(r,s),t.cursor){document.body.style.cursor=getComputedStyle(t.target).cursor,g.length>1&&o(x,U[12]);var a=function(){return!1};document.body.noUiListener=a,document.body.addEventListener("selectstart",a,!1)}void 0!==e.handleNumber&&O("start",e.handleNumber)}function T(e){var i,r,o=e.calcPoint,s=0;if(e.stopPropagation(),g.forEach(function(e){s+=t(e)[f.style]}),g[i=o<s/2||1===g.length?0:1].hasAttribute("disabled")&&(i=i?0:1),o-=t(_)[f.style],r=100*o/L(),f.events.snap||n(x,U[14],300),g[i].hasAttribute("disabled"))return!1;z(g[i],r),O("slide",i,!0),O("set",i,!0),O("change",i,!0),f.events.snap&&F(e,{handles:[g[i]]})}function q(e){var n=e.calcPoint-t(_)[f.style],i=S.getStep(100*n/L()),r=S.fromStepping(i);Object.keys(E).forEach(function(t){"hover"===t.split(".")[0]&&E[t].forEach(function(t){t.call(v,r)})})}function z(t,e,n){var r=t!==g[0]?1:0,a=y[0]+f.margin,u=y[1]-f.margin,l=y[0]+f.limit,c=y[1]-f.limit;return g.length>1&&(e=r?Math.max(e,a):Math.min(e,u)),!1!==n&&f.limit&&g.length>1&&(e=r?Math.min(e,l):Math.max(e,c)),(e=i(parseFloat((e=S.getStep(e)).toFixed(7))))!==y[r]&&(window.requestAnimationFrame?window.requestAnimationFrame(function(){t.style[f.style]=e+"%"}):t.style[f.style]=e+"%",!t.previousSibling&&(s(t,U[17]),e>50&&o(t,U[17])),y[r]=e,w[r]=S.fromStepping(e),O("update",r),!0)}function B(t){var e,i,o=r(t);for(f.dir&&f.handles>1&&o.reverse(),f.animate&&-1!==y[0]&&n(x,U[14],300),e=g.length>1?3:1,1===o.length&&(e=1),function t(e,n){var i,r,o;for(f.limit&&(e+=1),i=0;i<e;i+=1)null!==(o=n[r=i%2])&&!1!==o&&("number"==typeof o&&(o=String(o)),(!1===(o=f.format.from(o))||isNaN(o)||!1===z(g[r],S.toStepping(o),i===3-f.dir))&&O("update",r))}(e,o),i=0;i<g.length;i++)null!==o[i]&&O("set",i)}function D(){var t,e=[];for(t=0;t<f.handles;t+=1)e[t]=f.format.to(w[t]);return M(e)}function H(t,e){E[t]=E[t]||[],E[t].push(e),"update"===t.split(".")[0]&&g.forEach(function(t,e){O("update",e)})}if(x.noUiSlider)throw Error("Slider was already initialized.");return _=(p=f.dir,d=f.ort,$=x,o($,U[0]),o($,U[8+p]),o($,U[4+d]),o(h=document.createElement("div"),U[1]),$.appendChild(h),h),g=function t(e,n,i){var r,o=[];for(r=0;r<e;r+=1)o.push(i.appendChild(P(n,r)));return o}(f.handles,f.dir,_),function t(e,n,i){switch(e){case 1:o(n,U[7]),o(i[0],U[6]);break;case 3:o(i[1],U[6]);case 2:o(i[0],U[7]);case 0:o(n,U[6])}}(f.connect,x,g),f.pips&&N(f.pips),f.tooltips&&(f.dir&&f.tooltips.reverse(),m=g.map(function t(e,n){if(!f.tooltips[n])return!1;var i=document.createElement("div");return i.className=U[18],e.firstChild.appendChild(i)}),f.dir&&(m.reverse(),f.tooltips.reverse()),H("update",function(t,e,n){m[e]&&(m[e].innerHTML=!0===f.tooltips[e]?t[e]:f.tooltips[e].to(n[e]))})),v={destroy:function t(){for(U.forEach(function(t){t&&s(x,t)});x.firstChild;)x.removeChild(x.firstChild);delete x.noUiSlider},steps:function t(){return M(y.map(function(t,e){var n,i,r=S.getApplicableStep(t),o=(i=(n=String(r[2])).split(".")).length>1?i[1].length:0,s=w[e],a=100===t?null:r[2],u=Number((s-r[2]).toFixed(o));return[0===t?null:u>=r[1]?r[2]:r[0]||!1,a]}))},on:H,off:function t(e){var n=e.split(".")[0],i=e.substring(n.length);Object.keys(E).forEach(function(t){var e=t.split(".")[0],r=t.substring(e.length);n&&n!==e||i&&i!==r||delete E[t]})},get:D,set:B,updateOptions:function t(e){var n,i=D(),r=k({start:[0,0],margin:e.margin,limit:e.limit,step:e.step,range:e.range,animate:e.animate,snap:void 0===e.snap?f.snap:e.snap});for(["margin","limit","step","range","animate"].forEach(function(t){void 0!==e[t]&&(f[t]=e[t])}),r.spectrum.direction=S.direction,S=r.spectrum,y=[-1,-1],B(i),n=0;n<g.length;n++)O("update",n)},options:f,target:x,pips:N},function t(e){var n,i;if(!e.fixed)for(n=0;n<g.length;n+=1)C(l.start,g[n].children[0],F,{handles:[g[n]],handleNumber:n});if(e.tap&&C(l.start,_,T,{handles:g}),e.hover)for(C(l.move,_,q,{hover:!0}),n=0;n<g.length;n+=1)["mousemove MSPointerMove pointermove"].forEach(function(t){g[n].children[0].addEventListener(t,u,!1)});e.drag&&(o((i=[_.querySelector("."+U[7])])[0],U[10]),e.fixed&&i.push(g[i[0]===g[0]?1:0].children[0]),i.forEach(function(t){C(l.start,t,F,{handles:g})}))}(f.events),v}(c,p);return d.set(p.start),c.noUiSlider=d,d}}}),function(){"use strict";var t=["decimals","thousand","mark","prefix","postfix","encoder","decoder","negativeBefore","negative","edit","undo"];function e(t){return t.split("").reverse().join("")}function n(t,e){return t.substring(0,e.length)===e}function i(t,e,n){if((t[e]||t[n])&&t[e]===t[n])throw Error(e)}function r(t){return"number"==typeof t&&isFinite(t)}function o(t,n,i,o,s,a,u,l,c,f,p,d){var $,h,m,_,g,v,b=d,x="",y="";return a&&(d=a(d)),!!r(d)&&(!1!==t&&0===parseFloat(d.toFixed(t))&&(d=0),d<0&&(_=!0,d=Math.abs(d)),!1!==t&&(d=($=d,(Math.round($*(m=Math.pow(10,h=t)))/m).toFixed(h))),-1!==(d=d.toString()).indexOf(".")?(v=(g=d.split("."))[0],i&&(x=i+g[1])):v=d,n&&(v=e(v).match(/.{1,3}/g),v=e(v.join(e(n)))),_&&l&&(y+=l),o&&(y+=o),_&&c&&(y+=c),y+=v,y+=x,s&&(y+=s),f&&(y=f(y,b)),y)}function s(t,e,i,o,s,a,u,l,c,f,p,d){var $,h,m,_="";return p&&(d=p(d)),!!d&&"string"==typeof d&&(l&&n(d,l)&&(d=d.replace(l,""),m=!0),o&&n(d,o)&&(d=d.replace(o,"")),c&&n(d,c)&&(d=d.replace(c,""),m=!0),s&&($=d,h=s,$.slice(-1*h.length)===h)&&(d=d.slice(0,-1*s.length)),e&&(d=d.split(e).join("")),i&&(d=d.replace(i,".")),m&&(_+="-"),_+=d,""!==(_=_.replace(/[^0-9\.\-.]/g,""))&&(_=Number(_),u&&(_=u(_)),!!r(_)&&_))}function a(e,n,i){var r,o=[];for(r=0;r<t.length;r+=1)o.push(e[t[r]]);return o.push(i),n.apply("",o)}window.wNumb=function e(n){if(!(this instanceof e))return new e(n);"object"==typeof n&&(n=function e(n){var r,o,s,a={};for(r=0;r<t.length;r+=1)if(void 0===(s=n[o=t[r]]))"negative"!==o||a.negativeBefore?"mark"===o&&"."!==a.thousand?a[o]=".":a[o]=!1:a[o]="-";else if("decimals"===o){if(s>=0&&s<8)a[o]=s;else throw Error(o)}else if("encoder"===o||"decoder"===o||"edit"===o||"undo"===o){if("function"==typeof s)a[o]=s;else throw Error(o)}else if("string"==typeof s)a[o]=s;else throw Error(o);return i(a,"mark","thousand"),i(a,"prefix","negative"),i(a,"prefix","negativeBefore"),a}(n),this.to=function(t){return a(n,o,t)},this.from=function(t){return a(n,s,t)})}}();
</script>

    <!-- End -->

    <script src="https://intl-tel-input.com/node_modules/intl-tel-input/build/js/intlTelInput.js?1549804213570"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
        ['Assessment', 'Employee Performance Report'],
        ['Good', <?php echo $grateful; ?>],
        ['Sufficient', <?php echo $good; ?>],
        ['Not Sufficient', <?php echo $average; ?>]
        ]);

        var options = {
        title: '',
        is3D: true,
        slices: {
            0: { color: '#3da73d' },
            1: { color: '#ffab00' },
            2: { color: '#e12929' },
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
    </script>

          <script type="text/javascript">
              $(document).ready(function(){
              $('#department_id').change(function(){
                  var department_id = $('#department_id').val();
                  if(department_id != ''){
                  $.ajax({
                  url:"<?php echo base_url(); ?>Admin/fetchDepartmentDrop",
                  method:"POST",
                  data:{department_id:department_id},
                  success:function(data)
                  {
                  $('#designation_id').html(data);
                  }
                  });
                  }
              });
              });
          </script>
    
          <script type="text/javascript">
              $(document).ready(function(){
              $('#main_employee_id').change(function(){

                  var employee_id = $('#main_employee_id').val();

                  if(employee_id != ''){
                      $.ajax({
                      url:"<?php echo base_url(); ?>Admin/fetchDDInput",
                      method:"POST",
                      data:{employee_id:employee_id},
                      success:function(data){
                          $('#department_name').val(data);
                      }
                      });
                  }
                  
                  if(employee_id != ''){
                      $.ajax({
                      url:"<?php echo base_url(); ?>Admin/fetchDesiInput",
                      method:"POST",
                      data:{employee_id:employee_id},
                      success:function(data){
                          $('#designation_name').val(data);
                      }
                      });
                  }
              });
              });
          </script>


          <script>
        
            // International telephone format
            // $("#phone").intlTelInput();
            // get the country data from the plugin
            var countryData = window.intlTelInputGlobals.getCountryData(),
              input = document.querySelector("#phone"),
              addressDropdown = document.querySelector("#address-country");

            // init plugin
            var iti = window.intlTelInput(input, {
              hiddenInput: "full_phone",
              utilsScript: "https://intl-tel-input.com/node_modules/intl-tel-input/build/js/utils.js?1549804213570" // just for formatting/placeholders etc
            });

            // populate the country dropdown
            for (var i = 0; i < countryData.length; i++) {
              var country = countryData[i];
              var optionNode = document.createElement("option");
              optionNode.value = country.iso2;
              var textNode = document.createTextNode(country.name);
              optionNode.appendChild(textNode);
              addressDropdown.appendChild(optionNode);
            }
            // set it's initial value
            addressDropdown.value = iti.getSelectedCountryData().iso2;

            // listen to the telephone input for changes
            input.addEventListener('countrychange', function(e) {
              addressDropdown.value = iti.getSelectedCountryData().iso2;
            });

            // listen to the address dropdown for changes
            addressDropdown.addEventListener('change', function() {
              iti.setCountry(this.value);
            });
    </script>

    <script>
      $(document).ready(() => {
          $("#upload").change(function () {
              const file = this.files[0];
              if (file) {
                  let reader = new FileReader();
                  reader.onload = function (event) {
                      $("#imgPreview")
                        .attr("src", event.target.result);
                  };
                  reader.readAsDataURL(file);
              }
          });
      });
  </script>

  <script>
    $(document).ready(function () {

      // start communication

      $(".communication_checkSelect1").attr('disabled', true);
      $(".communication_checkSelect2").attr('disabled', true);
      $(".communication_checkSelect3").attr('disabled', true);
      $(".communication_checkSelect4").attr('disabled', true);
      $(".communication_checkSelect5").attr('disabled', true);

      $(".checkSelect_communication").change(function() {

        if ($(this).val() == "1") {

          $('.communication_checkSelect2').prop('checked', false);
          $('.communication_checkSelect3').prop('checked', false);
          $('.communication_checkSelect4').prop('checked', false);
          $('.communication_checkSelect5').prop('checked', false);
          
          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', true);
          $(".communication_checkSelect3").attr('disabled', true);
          $(".communication_checkSelect4").attr('disabled', true);
          $(".communication_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.communication_checkSelect3').prop('checked', false);
          $('.communication_checkSelect4').prop('checked', false);
          $('.communication_checkSelect5').prop('checked', false);

          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', false);
          $(".communication_checkSelect3").attr('disabled', true);
          $(".communication_checkSelect4").attr('disabled', true);
          $(".communication_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.communication_checkSelect4').prop('checked', false);
          $('.communication_checkSelect5').prop('checked', false);

          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', false);
          $(".communication_checkSelect3").attr('disabled', false);
          $(".communication_checkSelect4").attr('disabled', true);
          $(".communication_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.communication_checkSelect5').prop('checked', false);

          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', false);
          $(".communication_checkSelect3").attr('disabled', false);
          $(".communication_checkSelect4").attr('disabled', false);
          $(".communication_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', false);
          $(".communication_checkSelect3").attr('disabled', false);
          $(".communication_checkSelect4").attr('disabled', false);
          $(".communication_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });
      
      // end communication

      // start productivity

      $(".productivity_checkSelect1").attr('disabled', true);
      $(".productivity_checkSelect2").attr('disabled', true);
      $(".productivity_checkSelect3").attr('disabled', true);
      $(".productivity_checkSelect4").attr('disabled', true);
      $(".productivity_checkSelect5").attr('disabled', true);

      $(".checkSelect_productivity").change(function() {

        if ($(this).val() == "1") {

          $('.productivity_checkSelect2').prop('checked', false);
          $('.productivity_checkSelect3').prop('checked', false);
          $('.productivity_checkSelect4').prop('checked', false);
          $('.productivity_checkSelect5').prop('checked', false);
          
          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', true);
          $(".productivity_checkSelect3").attr('disabled', true);
          $(".productivity_checkSelect4").attr('disabled', true);
          $(".productivity_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.productivity_checkSelect3').prop('checked', false);
          $('.productivity_checkSelect4').prop('checked', false);
          $('.productivity_checkSelect5').prop('checked', false);

          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', false);
          $(".productivity_checkSelect3").attr('disabled', true);
          $(".productivity_checkSelect4").attr('disabled', true);
          $(".productivity_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.productivity_checkSelect4').prop('checked', false);
          $('.productivity_checkSelect5').prop('checked', false);

          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', false);
          $(".productivity_checkSelect3").attr('disabled', false);
          $(".productivity_checkSelect4").attr('disabled', true);
          $(".productivity_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.productivity_checkSelect5').prop('checked', false);

          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', false);
          $(".productivity_checkSelect3").attr('disabled', false);
          $(".productivity_checkSelect4").attr('disabled', false);
          $(".productivity_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', false);
          $(".productivity_checkSelect3").attr('disabled', false);
          $(".productivity_checkSelect4").attr('disabled', false);
          $(".productivity_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // start quality

      $(".quality_checkSelect1").attr('disabled', true);
      $(".quality_checkSelect2").attr('disabled', true);
      $(".quality_checkSelect3").attr('disabled', true);
      $(".quality_checkSelect4").attr('disabled', true);
      $(".quality_checkSelect5").attr('disabled', true);

      $(".checkSelect_quality").change(function() {

        if ($(this).val() == "1") {

          $('.quality_checkSelect2').prop('checked', false);
          $('.quality_checkSelect3').prop('checked', false);
          $('.quality_checkSelect4').prop('checked', false);
          $('.quality_checkSelect5').prop('checked', false);
          
          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', true);
          $(".quality_checkSelect3").attr('disabled', true);
          $(".quality_checkSelect4").attr('disabled', true);
          $(".quality_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.quality_checkSelect3').prop('checked', false);
          $('.quality_checkSelect4').prop('checked', false);
          $('.quality_checkSelect5').prop('checked', false);

          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', false);
          $(".quality_checkSelect3").attr('disabled', true);
          $(".quality_checkSelect4").attr('disabled', true);
          $(".quality_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.quality_checkSelect4').prop('checked', false);
          $('.quality_checkSelect5').prop('checked', false);

          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', false);
          $(".quality_checkSelect3").attr('disabled', false);
          $(".quality_checkSelect4").attr('disabled', true);
          $(".quality_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.quality_checkSelect5').prop('checked', false);

          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', false);
          $(".quality_checkSelect3").attr('disabled', false);
          $(".quality_checkSelect4").attr('disabled', false);
          $(".quality_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', false);
          $(".quality_checkSelect3").attr('disabled', false);
          $(".quality_checkSelect4").attr('disabled', false);
          $(".quality_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });


      // end quality


      // start Knowledge of Job

      $(".knowledge_checkSelect1").attr('disabled', true);
      $(".knowledge_checkSelect2").attr('disabled', true);
      $(".knowledge_checkSelect3").attr('disabled', true);
      $(".knowledge_checkSelect4").attr('disabled', true);
      $(".knowledge_checkSelect5").attr('disabled', true);

      $(".checkSelect_knowledge").change(function() {

        if ($(this).val() == "1") {

          $('.knowledge_checkSelect2').prop('checked', false);
          $('.knowledge_checkSelect3').prop('checked', false);
          $('.knowledge_checkSelect4').prop('checked', false);
          $('.knowledge_checkSelect5').prop('checked', false);
          
          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', true);
          $(".knowledge_checkSelect3").attr('disabled', true);
          $(".knowledge_checkSelect4").attr('disabled', true);
          $(".knowledge_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.knowledge_checkSelect3').prop('checked', false);
          $('.knowledge_checkSelect4').prop('checked', false);
          $('.knowledge_checkSelect5').prop('checked', false);

          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', false);
          $(".knowledge_checkSelect3").attr('disabled', true);
          $(".knowledge_checkSelect4").attr('disabled', true);
          $(".knowledge_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.knowledge_checkSelect4').prop('checked', false);
          $('.knowledge_checkSelect5').prop('checked', false);

          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', false);
          $(".knowledge_checkSelect3").attr('disabled', false);
          $(".knowledge_checkSelect4").attr('disabled', true);
          $(".knowledge_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.knowledge_checkSelect5').prop('checked', false);

          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', false);
          $(".knowledge_checkSelect3").attr('disabled', false);
          $(".knowledge_checkSelect4").attr('disabled', false);
          $(".knowledge_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', false);
          $(".knowledge_checkSelect3").attr('disabled', false);
          $(".knowledge_checkSelect4").attr('disabled', false);
          $(".knowledge_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end knowlege of job

      // start Knowledge of Software

      $(".software_checkSelect1").attr('disabled', true);
      $(".software_checkSelect2").attr('disabled', true);
      $(".software_checkSelect3").attr('disabled', true);
      $(".software_checkSelect4").attr('disabled', true);
      $(".software_checkSelect5").attr('disabled', true);

      $(".checkSelect_software").change(function() {

        if ($(this).val() == "1") {

          $('.software_checkSelect2').prop('checked', false);
          $('.software_checkSelect3').prop('checked', false);
          $('.software_checkSelect4').prop('checked', false);
          $('.software_checkSelect5').prop('checked', false);
          
          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', true);
          $(".software_checkSelect3").attr('disabled', true);
          $(".software_checkSelect4").attr('disabled', true);
          $(".software_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.software_checkSelect3').prop('checked', false);
          $('.software_checkSelect4').prop('checked', false);
          $('.software_checkSelect5').prop('checked', false);

          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', false);
          $(".software_checkSelect3").attr('disabled', true);
          $(".software_checkSelect4").attr('disabled', true);
          $(".software_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.software_checkSelect4').prop('checked', false);
          $('.software_checkSelect5').prop('checked', false);

          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', false);
          $(".software_checkSelect3").attr('disabled', false);
          $(".software_checkSelect4").attr('disabled', true);
          $(".software_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.software_checkSelect5').prop('checked', false);

          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', false);
          $(".software_checkSelect3").attr('disabled', false);
          $(".software_checkSelect4").attr('disabled', false);
          $(".software_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', false);
          $(".software_checkSelect3").attr('disabled', false);
          $(".software_checkSelect4").attr('disabled', false);
          $(".software_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end Knowledge of Software

      // start Reliability & Dependability

      $(".reliability_dependability_checkSelect1").attr('disabled', true);
      $(".reliability_dependability_checkSelect2").attr('disabled', true);
      $(".reliability_dependability_checkSelect3").attr('disabled', true);
      $(".reliability_dependability_checkSelect4").attr('disabled', true);
      $(".reliability_dependability_checkSelect5").attr('disabled', true);

      $(".checkSelect_reliability_dependability").change(function() {

        if ($(this).val() == "1") {

          $('.reliability_dependability_checkSelect2').prop('checked', false);
          $('.reliability_dependability_checkSelect3').prop('checked', false);
          $('.reliability_dependability_checkSelect4').prop('checked', false);
          $('.reliability_dependability_checkSelect5').prop('checked', false);
          
          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', true);
          $(".reliability_dependability_checkSelect3").attr('disabled', true);
          $(".reliability_dependability_checkSelect4").attr('disabled', true);
          $(".reliability_dependability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.reliability_dependability_checkSelect3').prop('checked', false);
          $('.reliability_dependability_checkSelect4').prop('checked', false);
          $('.reliability_dependability_checkSelect5').prop('checked', false);

          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', false);
          $(".reliability_dependability_checkSelect3").attr('disabled', true);
          $(".reliability_dependability_checkSelect4").attr('disabled', true);
          $(".reliability_dependability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.reliability_dependability_checkSelect4').prop('checked', false);
          $('.reliability_dependability_checkSelect5').prop('checked', false);

          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', false);
          $(".reliability_dependability_checkSelect3").attr('disabled', false);
          $(".reliability_dependability_checkSelect4").attr('disabled', true);
          $(".reliability_dependability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.reliability_dependability_checkSelect5').prop('checked', false);

          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', false);
          $(".reliability_dependability_checkSelect3").attr('disabled', false);
          $(".reliability_dependability_checkSelect4").attr('disabled', false);
          $(".reliability_dependability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', false);
          $(".reliability_dependability_checkSelect3").attr('disabled', false);
          $(".reliability_dependability_checkSelect4").attr('disabled', false);
          $(".reliability_dependability_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end Reliability & Dependability

      // start Time Management

      $(".time_management_checkSelect1").attr('disabled', true);
      $(".time_management_checkSelect2").attr('disabled', true);
      $(".time_management_checkSelect3").attr('disabled', true);
      $(".time_management_checkSelect4").attr('disabled', true);
      $(".time_management_checkSelect5").attr('disabled', true);

      $(".checkSelect_time_management").change(function() {

        if ($(this).val() == "1") {

          $('.time_management_checkSelect2').prop('checked', false);
          $('.time_management_checkSelect3').prop('checked', false);
          $('.time_management_checkSelect4').prop('checked', false);
          $('.time_management_checkSelect5').prop('checked', false);
          
          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', true);
          $(".time_management_checkSelect3").attr('disabled', true);
          $(".time_management_checkSelect4").attr('disabled', true);
          $(".time_management_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.time_management_checkSelect3').prop('checked', false);
          $('.time_management_checkSelect4').prop('checked', false);
          $('.time_management_checkSelect5').prop('checked', false);

          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', false);
          $(".time_management_checkSelect3").attr('disabled', true);
          $(".time_management_checkSelect4").attr('disabled', true);
          $(".time_management_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.time_management_checkSelect4').prop('checked', false);
          $('.time_management_checkSelect5').prop('checked', false);

          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', false);
          $(".time_management_checkSelect3").attr('disabled', false);
          $(".time_management_checkSelect4").attr('disabled', true);
          $(".time_management_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.time_management_checkSelect5').prop('checked', false);

          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', false);
          $(".time_management_checkSelect3").attr('disabled', false);
          $(".time_management_checkSelect4").attr('disabled', false);
          $(".time_management_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', false);
          $(".time_management_checkSelect3").attr('disabled', false);
          $(".time_management_checkSelect4").attr('disabled', false);
          $(".time_management_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end Time Management

      // start Adaptability

      
      $(".adaptability_checkSelect1").attr('disabled', true);
      $(".adaptability_checkSelect2").attr('disabled', true);
      $(".adaptability_checkSelect3").attr('disabled', true);
      $(".adaptability_checkSelect4").attr('disabled', true);
      $(".adaptability_checkSelect5").attr('disabled', true);

      $(".checkSelect_adaptability").change(function() {

        if ($(this).val() == "1") {

          $('.adaptability_checkSelect2').prop('checked', false);
          $('.adaptability_checkSelect3').prop('checked', false);
          $('.adaptability_checkSelect4').prop('checked', false);
          $('.adaptability_checkSelect5').prop('checked', false);
          
          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', true);
          $(".adaptability_checkSelect3").attr('disabled', true);
          $(".adaptability_checkSelect4").attr('disabled', true);
          $(".adaptability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.adaptability_checkSelect3').prop('checked', false);
          $('.adaptability_checkSelect4').prop('checked', false);
          $('.adaptability_checkSelect5').prop('checked', false);

          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', false);
          $(".adaptability_checkSelect3").attr('disabled', true);
          $(".adaptability_checkSelect4").attr('disabled', true);
          $(".adaptability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.adaptability_checkSelect4').prop('checked', false);
          $('.adaptability_checkSelect5').prop('checked', false);

          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', false);
          $(".adaptability_checkSelect3").attr('disabled', false);
          $(".adaptability_checkSelect4").attr('disabled', true);
          $(".adaptability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.adaptability_checkSelect5').prop('checked', false);

          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', false);
          $(".adaptability_checkSelect3").attr('disabled', false);
          $(".adaptability_checkSelect4").attr('disabled', false);
          $(".adaptability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', false);
          $(".adaptability_checkSelect3").attr('disabled', false);
          $(".adaptability_checkSelect4").attr('disabled', false);
          $(".adaptability_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

    // end Adaptability

    // start Initiative & Proactive

      $(".initiative_proactive_checkSelect1").attr('disabled', true);
      $(".initiative_proactive_checkSelect2").attr('disabled', true);
      $(".initiative_proactive_checkSelect3").attr('disabled', true);
      $(".initiative_proactive_checkSelect4").attr('disabled', true);
      $(".initiative_proactive_checkSelect5").attr('disabled', true);

      $(".checkSelect_initiative_proactive").change(function() {

        if ($(this).val() == "1") {

          $('.initiative_proactive_checkSelect2').prop('checked', false);
          $('.initiative_proactive_checkSelect3').prop('checked', false);
          $('.initiative_proactive_checkSelect4').prop('checked', false);
          $('.initiative_proactive_checkSelect5').prop('checked', false);
          
          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', true);
          $(".initiative_proactive_checkSelect3").attr('disabled', true);
          $(".initiative_proactive_checkSelect4").attr('disabled', true);
          $(".initiative_proactive_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.initiative_proactive_checkSelect3').prop('checked', false);
          $('.initiative_proactive_checkSelect4').prop('checked', false);
          $('.initiative_proactive_checkSelect5').prop('checked', false);

          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', false);
          $(".initiative_proactive_checkSelect3").attr('disabled', true);
          $(".initiative_proactive_checkSelect4").attr('disabled', true);
          $(".initiative_proactive_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.initiative_proactive_checkSelect4').prop('checked', false);
          $('.initiative_proactive_checkSelect5').prop('checked', false);

          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', false);
          $(".initiative_proactive_checkSelect3").attr('disabled', false);
          $(".initiative_proactive_checkSelect4").attr('disabled', true);
          $(".initiative_proactive_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.initiative_proactive_checkSelect5').prop('checked', false);

          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', false);
          $(".initiative_proactive_checkSelect3").attr('disabled', false);
          $(".initiative_proactive_checkSelect4").attr('disabled', false);
          $(".initiative_proactive_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', false);
          $(".initiative_proactive_checkSelect3").attr('disabled', false);
          $(".initiative_proactive_checkSelect4").attr('disabled', false);
          $(".initiative_proactive_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end Initiative & Proactive

      // start Creativity & Problem Solving

      $(".creativity_problem_solving_checkSelect1").attr('disabled', true);
      $(".creativity_problem_solving_checkSelect2").attr('disabled', true);
      $(".creativity_problem_solving_checkSelect3").attr('disabled', true);
      $(".creativity_problem_solving_checkSelect4").attr('disabled', true);
      $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

      $(".checkSelect_creativity_problem_solving").change(function() {

        if ($(this).val() == "1") {

          $('.creativity_problem_solving_checkSelect2').prop('checked', false);
          $('.creativity_problem_solving_checkSelect3').prop('checked', false);
          $('.creativity_problem_solving_checkSelect4').prop('checked', false);
          $('.creativity_problem_solving_checkSelect5').prop('checked', false);
          
          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.creativity_problem_solving_checkSelect3').prop('checked', false);
          $('.creativity_problem_solving_checkSelect4').prop('checked', false);
          $('.creativity_problem_solving_checkSelect5').prop('checked', false);

          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.creativity_problem_solving_checkSelect4').prop('checked', false);
          $('.creativity_problem_solving_checkSelect5').prop('checked', false);

          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.creativity_problem_solving_checkSelect5').prop('checked', false);

          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

    });
  </script>
</body>
</html>