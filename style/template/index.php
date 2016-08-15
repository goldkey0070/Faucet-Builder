<!DOCTYPE html>
<html>
<head>
  <title><?php echo $settings["title"]?></title>
  <link rel="stylesheet" href="style/css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" href="style/css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="style/css/myCssClass.css" media="screen">
  <style>
  .color-title{
    color:<?php echo $settings["title_color"];?>;
  }
  .color-subtitle{
    color:<?php echo $settings["subtitle_color"];?>;
  }
  .color-background-body{
    <?php if($settings["background_image_selected"]=="true") {?>
      background-image: url(<?php echo $settings["background_image"];?>);
      <?php } else{ ?>
    background-color:<?php echo $settings["background_color"];
    }?>;
  }
  </style>
  <script type="text/javascript">
if ( window.self !== window.top ) {
    window.top.location.href=window.location.href;
}
</script>
<noscript>&lt;center id=b6b2&gt;&lt;p&gt;Please enable JavaScript!&lt;br&gt;Bitte aktiviere JavaScript!&lt;br&gt;S'il vous pla&amp;icirc;t activer JavaScript!&lt;br&gt;Por favor,activa el JavaScript!&lt;br&gt;&lt;a href="http://antiblock.org/"&gt;antiblock.org&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;</noscript>
<script language="JavaScript">

//////////F12 disable code////////////////////////
    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
           //alert('No F-12');
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
/////////////////////end///////////////////////


//Disable right click script 

var message="Sorry, right-click has been disabled. Use CTR V to paste into address box."; 
/////////////////////////////////// 
function clickIE() {if (document.all) {(message);return false;}} 
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) { 
if (e.which==2||e.which==3) {(message);return false;}}} 
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;} 
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;} 
document.oncontextmenu=new Function("return false") 
// 
function disableCtrlKeyCombination(e)
{
//list all CTRL + key combinations you want to disable
var forbiddenKeys = new Array('u', 'i', 'c', 'x', 'k', 'j' , 'w');
var key;
var isCtrl;
if(window.event)
{
key = window.event.keyCode;     //IE
if(window.event.ctrlKey)
isCtrl = true;
else
isCtrl = false;
}
else
{
key = e.which;     //firefox
if(e.ctrlKey)
isCtrl = true;
else
isCtrl = false;
}
//if ctrl is pressed check if other key is in forbidenKeys array
if(isCtrl)
{
for(i=0; i<forbiddenKeys.length; i++)
{
//case-insensitive comparation
if(forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase())
{
alert('Key combination CTRL + '+String.fromCharCode(key) +' has been disabled.');
return false;
}
}
}
return true;
}

</script>
<script type='text/javascript'>
var isCtrl = false;
document.onkeyup=function(e)
{
if(e.which == 17)
isCtrl=false;
}
document.onkeydown=function(e)
{
if(e.which == 17)
isCtrl=true;
if((e.which == 85) || (e.which == 67) &amp;&amp; isCtrl == true)
{
// alert(&#8216;Keyboard shortcuts are cool!&#8217;);
return false;
}
}
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
return false;
}
function mousehandler(e){
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>
<script language="JavaScript">
        function disableCtrlKeyCombination(e)
        {
                //list all CTRL + key combinations you want to disable
                var forbiddenKeys = new Array("u", "i", "c", "x", "k", "j", "w");
                var key;
                var isCtrl;

                if(window.event)
                {
                        key = window.event.keyCode;     //IE
                        if(window.event.ctrlKey)
                                isCtrl = true;
                        else
                                isCtrl = false;
                }
                else
                {
                        key = e.which;     //firefox
                        if(e.ctrlKey)
                                isCtrl = true;
                        else
                                isCtrl = false;
                }

                //if ctrl is pressed check if other key is in forbidenKeys array
                if(isCtrl)
                {
                    for (i = 0; i < forbiddenKeys.length; i++)
                        {
                                //case-insensitive comparation
                            if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase())
                                {
//                                    alert("Key combination CTRL + "
//                                                + String.fromCharCode(key)
//                                                + " has been disabled.");                                    
                                        return false;
                                }
                        }
                }
                return true;
        }
    </script>
// --> 
<noscript>&lt;center id=b6b2&gt;&lt;p&gt;Please enable JavaScript!&lt;br&gt;Bitte aktiviere JavaScript!&lt;br&gt;S'il vous pla&amp;icirc;t activer JavaScript!&lt;br&gt;Por favor,activa el JavaScript!&lt;br&gt;&lt;a href="http://antiblock.org/"&gt;antiblock.org&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;</noscript>
</script>
<script>(function(w,u){var d=w.document,z=typeof u;function b6b2(){function c(c,i){var e=d.createElement('b'),b=d.body,s=b.style,l=b.childNodes.length;if(typeof i!=z){e.setAttribute('id',i);s.margin=s.padding=0;s.height='100%';l=Math.floor(Math.random()*l)+1}e.innerHTML=c;b.insertBefore(e,b.childNodes[l-1])}function g(i,t){return !t?d.getElementById(i):d.getElementsByTagName(t)};function f(v){if(!g('b6b2')){c('<p>Please disable your ad blocker to claim! (AdBlock, Adlock Plus, uBlock etc.)<br>Bitte deaktiviere Deinen Werbeblocker!<br>Veuillez d&eacute;sactiver votre bloqueur de publicit&eacute;!<br>Por favor, desactive el bloqueador de anuncios!<br><br>Our faucet provides the service of giving small fractions of Bitcoin visitors.<br>This service can provide through advertising on the site. <br>Please disable ad blocker! and help to give more Bitcoin free for all!<br><a href="http://www.taurusfaucet.com/">I disable ad blocker and want to refresh the page!</a></p>','b6b2')}};(function(){var a=['AdBar1','ad_468_60','adsbox-left','adspot-295x60','headeradvertholder','kaufDA-widget','sidebar_ad','ad','ads','adsense'],l=a.length,i,s='',e;for(i=0;i<l;i++){if(!g(a[i])){s+='<a id="'+a[i]+'"></a>'}}c(s);l=a.length;setTimeout(function(){for(i=0;i<l;i++){e=g(a[i]);if(e.offsetParent==null||(w.getComputedStyle?d.defaultView.getComputedStyle(e,null).getPropertyValue('display'):e.currentStyle.display)=='none'){return f('#'+a[i])}}},250)}());(function(){var t=g(0,'img'),a=['.org/gads/','/adhandler.','/adleaderboardtop.','/ads/300.','/adv/ads/ad','/advertising.','/advertorial_','/no_ads.','/twgetad3.','.480x60.'],i;if(typeof t[0]!=z&&typeof t[0].src!=z){i=new Image();i.onload=function(){this.onload=z;this.onerror=function(){f(this.src)};this.src=t[0].src+'#'+a.join('')};i.src=t[0].src}}());(function(){var o={'http://pagead2.googlesyndication.com/pagead/show_ads.js':'google_ad_client','http://js.adscale.de/getads.js':'adscale_slot_id','http://get.mirando.de/mirando.js':'adPlaceId'},S=g(0,'script'),l=S.length-1,n,r,i,v,s;d.write=null;for(i=l;i>=0;--i){s=S[i];if(typeof o[s.src]!=z){n=d.createElement('script');n.type='text/javascript';n.src=s.src;v=o[s.src];w[v]=u;r=S[0];n.onload=n.onreadystatechange=function(){if(typeof w[v]==z&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){n.onload=n.onreadystatechange=null;r.parentNode.removeChild(n);w[v]=null}};r.parentNode.insertBefore(n,r);setTimeout(function(){if(w[v]===u){f(n.src)}},2000);break}}}())}if(d.addEventListener){w.addEventListener('load',b6b2,false)}else{w.attachEvent('onload',b6b2)}})(window);</script>

</head>

<body onkeypress="return disableCtrlKeyCombination(event);" onkeydown="return disableCtrlKeyCombination(event);" >
<body class="color-background-body">
  <div class ="container-fluid">
    <h1 class="text-center color-title"><?php echo $settings["title"];?></h1>
    <h3 class="text-center color-subtitle"><?php echo $settings["subtitle"];?></h3>
    <div class="row">
      <div class="col-sm-3 col-md-2 hidden-xs">
        <!-- Insert your left vertical google ad Code below this comment-->
        <?php echo $settings["left_vertical_ad"];?>
  </div>
    <div class="col-sm-6 col-md-8 text-center">
      <div class="top-banner">
        <!-- Insert your top horizontal google ad Code below this comment (Recommended size 728x90)-->
        <?php echo $settings["top_horizontal_ad"];?>
    </div>


      <div><strong><p class="alert alert-info">Your possible rewards <?php echo $rewards["reward_list_html"]; ?></p></strong></div>
      <div>
        <strong><p>Earning bitcoins is simple:</p></strong>
      </div>
      <?php echo $view['main']['result_html']; ?>
      <?php echo $view['main']['ref_link']; ?>
      <!-- Insert your second horizontal google ad Code below this comment (Recommended size 320x100)-->
      <?php echo $settings["middle_horizontal_ad"]; ?>
      <form method="Post">
        <div >
          <div><label>Insert your email or BTC address:</label>
            <input name="username" id="username" class="form-control text-center" type="text" placeholder="Enter your email or BTC address"></div>
          </div><br>
          <div>
            <div class="form-group"><label>Solve the captcha:</label>

              <center class="captcha"><script type="text/javascript" src="http://api.solvemedia.com/papi/challenge.script?k=<?php echo $settings['solvemedia_challenge_key']?>"></script></center></div>
              </div>
            <div>
              <div>
                <button class="btn btn-<?php echo $settings["button_background"]; ?>" type="submit"><?php echo $settings["submit_button_text"]; ?></button>
              </div>
            </div>
          </form>
          <br>
          <!-- Insert your rectangle google ad Code below this comment (Recommended size 300x250)-->
          <?php echo $settings["bottom_horizontal_ad"];?>
          <div id="description">
            <strong><p><?php echo $settings["main_content"];?></p></strong>
          </div>
      </div>
      <div class="col-sm-3 col-md-2 hidden-xs zeta">
        <!-- Insert your right vertical google ad Code below this comment-->
        <?php echo $settings["right_vertical_ad"];?>
    </div>
  </div>
  <footer><strong><p class="text-center">Copyright &#169; 2015 <?php echo $settings["title"];?> <a href=<?php echo $settings["contact_mail"];?>>Contact us</a></p></strong></footer>
</div>
</body>
</html>
