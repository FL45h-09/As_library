<!doctype html>
<!--[if lte IE 9]>
<html lang="en" class="oldie">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="MP/Vqb+CCbRO+MywvDuPejyrNgNk+IPYIE9kM2ykGwyJK5Ad/aNiKiP7yBMZSL7DELvTBkQE5ElVQ20Zc3qdCA==" />

<title>CodePen - Card Expiry Date Format</title>
<link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/fullpage/fullpage-4de243a40619a967c0bf13b95e1ac6f8de89d943b7fc8710de33f681fe287604.css" />
<link rel="stylesheet" media="all" href="https://cpwebassets.codepen.io/assets/global/global-031b289c73bf4e4d154ba7eb2675a0ae1333ced942cdba9a66c6f032629b8038.css" />
<link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/packs/css/everypage-64e59467.css" />
<link rel="stylesheet" media="all" href="https://cpwebassets.codepen.io/assets/page/page-82cbd7c40975e0e43df2f9af16db7458273213cd3670aa281682fb1f22b7e3de.css" />
<link rel="stylesheet" media="all" href="https://cpwebassets.codepen.io/assets/editor/editor-015c75898c7ab367a1025f035c8f22de78df17f226256a039c29d4e66da97e2e.css" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&display=swap" rel="stylesheet" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@CodePen">
<meta name="twitter:title" content="Card Expiry Date Format">
<meta name="twitter:description" content="...">
<meta name="twitter:image" content="https://assets.codepen.io/775955/internal/screenshots/pens/baNRdV.default.png?fit=cover&amp;format=auto&amp;ha=false&amp;height=540&amp;quality=75&amp;v=2&amp;version=1513176271&amp;width=960">
<meta property="og:image" content="https://assets.codepen.io/775955/internal/screenshots/pens/baNRdV.default.png?fit=cover&amp;format=auto&amp;ha=false&amp;height=540&amp;quality=75&amp;v=2&amp;version=1513176271&amp;width=960" itemprop="thumbnailUrl">
<meta property="og:title" content="Card Expiry Date Format">
<meta property="og:url" content="https://codepen.io/squegg/details/baNRdV">
<meta property="og:site_name" content="CodePen">
<meta property="og:description" content="...">
<link rel="alternate" type="application/json+oembed" href="https://codepen.io/api/oembed?url=https%3A%2F%2Fcodepen.io%2Fsquegg%2Fpen%2FbaNRdV&format=json" title="Card Expiry Date Format" />
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<script nonce="riOfibv/7aM=">
  /* Firefox needs this to prevent FOUT */
</script>
</head>
<body class="fullpage logged-in sidebar-false">
<div class="oldie-header">
<a href="https://codepen.io/squegg/pen/baNRdV">Edit Pen</a>
</div>
<div id="result-iframe-wrap" role="main">
<iframe id="result" src="https://cdpn.io/squegg/fullpage/baNRdV" sandbox="allow-downloads allow-forms allow-modals allow-pointer-lock allow-popups allow-presentation allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="camera; geolocation; microphone" allowTransparency="true" allowpaymentrequest="true" allowfullscreen="true" class="result-iframe"></iframe>
</div>

<div id="popup-overlay" class="overlay popup-overlay"></div>
<div id="modal-overlay" class="overlay modal-overlay"></div>

<script src="https://cpwebassets.codepen.io/assets/common/analytics_and_notifications-afa6925cbcff840929f2b7c543587d5f9d7a461af81ee7ca80631c8e37ac42f2.js"></script>
<script nonce="riOfibv/7aM=">
LUX=(function(){var a=("undefined"!==typeof(LUX)&&"undefined"!==typeof(LUX.gaMarks)?LUX.gaMarks:[]);var d=("undefined"!==typeof(LUX)&&"undefined"!==typeof(LUX.gaMeasures)?LUX.gaMeasures:[]);var j="LUX_start";var k=window.performance;var l=("undefined"!==typeof(LUX)&&LUX.ns?LUX.ns:(Date.now?Date.now():+(new Date())));if(k&&k.timing&&k.timing.navigationStart){l=k.timing.navigationStart}function f(){if(k&&k.now){return k.now()}var o=Date.now?Date.now():+(new Date());return o-l}function b(n){if(k){if(k.mark){return k.mark(n)}else{if(k.webkitMark){return k.webkitMark(n)}}}a.push({name:n,entryType:"mark",startTime:f(),duration:0});return}function m(p,t,n){if("undefined"===typeof(t)&&h(j)){t=j}if(k){if(k.measure){if(t){if(n){return k.measure(p,t,n)}else{return k.measure(p,t)}}else{return k.measure(p)}}else{if(k.webkitMeasure){return k.webkitMeasure(p,t,n)}}}var r=0,o=f();if(t){var s=h(t);if(s){r=s.startTime}else{if(k&&k.timing&&k.timing[t]){r=k.timing[t]-k.timing.navigationStart}else{return}}}if(n){var q=h(n);if(q){o=q.startTime}else{if(k&&k.timing&&k.timing[n]){o=k.timing[n]-k.timing.navigationStart}else{return}}}d.push({name:p,entryType:"measure",startTime:r,duration:(o-r)});return}function h(n){return c(n,g())}function c(p,o){for(i=o.length-1;i>=0;i--){var n=o[i];if(p===n.name){return n}}return undefined}function g(){if(k){if(k.getEntriesByType){return k.getEntriesByType("mark")}else{if(k.webkitGetEntriesByType){return k.webkitGetEntriesByType("mark")}}}return a}return{mark:b,measure:m,gaMarks:a,gaMeasures:d}})();LUX.ns=(Date.now?Date.now():+(new Date()));LUX.ac=[];LUX.cmd=function(a){LUX.ac.push(a)};LUX.init=function(){LUX.cmd(["init"])};LUX.send=function(){LUX.cmd(["send"])};LUX.addData=function(a,b){LUX.cmd(["addData",a,b])};LUX_ae=[];window.addEventListener("error",function(a){LUX_ae.push(a)});LUX_al=[];if("function"===typeof(PerformanceObserver)&&"function"===typeof(PerformanceLongTaskTiming)){var LongTaskObserver=new PerformanceObserver(function(c){var b=c.getEntries();for(var a=0;a<b.length;a++){var d=b[a];LUX_al.push(d)}});try{LongTaskObserver.observe({type:["longtask"]})}catch(e){}};
</script>
</body>
</html>