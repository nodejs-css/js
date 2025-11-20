<?php
$n = !empty($_GET["n"]) ? $_GET["n"] : "Tu nombre";
$safeInput = urldecode(htmlspecialchars($n, ENT_QUOTES, 'UTF-8'));
$name = rtrim(preg_replace('/\s+/', ' ', str_replace(["+", "-", "@", "%", "<", ">", "&lt;", "&gt;", "&#039;", "&quot;", "&amp;", "#"], " ", $safeInput)));
$yname = str_replace(["+", "-", " "], "-", $name);
$emojiBgRemove = '<span class="emoji-free">' . preg_replace_callback('/[\x{1F600}-\x{1F64F}\x{1F300}-\x{1F5FF}\x{1F680}-\x{1F6FF}\x{1F700}-\x{1F77F}\x{1F780}-\x{1F7FF}\x{1F800}-\x{1F8FF}\x{1F900}-\x{1F9FF}\x{1FA00}-\x{1FA6F}\x{1FA70}-\x{1FAFF}\x{2600}-\x{26FF}\x{2700}-\x{27BF}\x{2300}-\x{23FF}\x{2B50}\x{1F004}-\x{1F0CF}\x{1F200}-\x{1F251}\x{1F004}-\x{1F0CF}\x{1F004}-\x{1F0CF}\x{1F1E6}-\x{1F1FF}\x{1F500}-\x{1F51F}\x{1F700}-\x{1F77F}\x{1F1F2}-\x{1F1F4}\x{1F1F3}-\x{1F1F5}\x{1F1F6}-\x{1F1F7}\x{1F1F8}-\x{1F1F9}\x{1F1FB}-\x{1F1FC}\x{1F200}-\x{1F251}\x{200D}\x{20E3}]/u', fn($matches) => '</span><span class="emoji">' . $matches[0] . '</span><span class="emoji-free">', $name) . '</span>';
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="google" content="notranslate" />
    <title><?php echo $name?> deseándote Feliz Navidad.</title>
    <meta property="og:type" content="mensaje secreto" />
    <meta property="og:title" content="<?php echo $name?> te envió un mensaje sorpresa. Abre esto" />
    <meta property="og:url" content="https://see-you.co/es/?n=<?php echo $yname?>" />
    <meta property="og:description" content="mensaje secreto" >
    <meta property="og:site_name" content="<?php echo $name?> te envió un mensaje sorpresa. Abre esto" />
    <meta property="og:image" content="../pic26/ogmsg.jpg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/22884184265/ca-pub-1553494237872495-tag/see-you1', [320, 50], 'div-gpt-ad-1733794649698-0').addService(googletag.pubads());
    googletag.defineSlot('/22884184265/ca-pub-1553494237872495-tag/see-you2', [320, 50], 'div-gpt-ad-1733794670247-0').addService(googletag.pubads());
    googletag.defineSlot('/22884184265/ca-pub-1553494237872495-tag/see-you3', [300, 250], 'div-gpt-ad-1733794692341-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.pubads().collapseEmptyDivs();
    googletag.enableServices();
  });
</script>
<style>
html, body {
overflow-x: hidden;  /* Prevent horizontal scrolling */
margin: 0;            /* Remove default margins that may cause overflow */
padding: 0;           /* Remove default padding */
}
canvas {
position: absolute;
mix-blend-mode: lighten;
z-index: -2; /* Lower value to allow interaction with elements underneath */
}
.transparent-overlay {
position: absolute;
z-index: -1; /* Lower value to allow interaction with elements underneath */
}
.sname{font-weight:700;font-size:40px;text-transform:uppercase;margin-top:20px;margin-bottom:5px;animation:swing 4s infinite;overflow-wrap:break-word}.sname1{font-weight:700;font-size:25px;text-transform:uppercase;margin-top:20px;margin-bottom:5px;animation:swing 4s infinite;overflow-wrap:break-word}.emoji-free{background:url("../pic26/sname.gif");-webkit-background-clip:text;-webkit-text-fill-color:transparent;color:transparent}.emoji{color:black;background:none}main{max-width:450px;min-height:200px;margin:0 auto;text-align:center;padding-bottom:60px}.GodMessage{color:#fff;font-size:25px;font-weight:bold;margin-top:20px;text-shadow:0 0 10px #afafaf}.GodMessage p{margin:0}.go{border-radius:10px;padding:5px;background-color:#3CBFFC;color:#fff;border:1px solid #4267d9;position:fixed;right:2px;bottom:0;height:50px;width:23%;display:inline-block}.footer{position:fixed;left:0;bottom:0;width:100%;background-color:transparent;text-align:center}.footer input[type="submit"]{width:30%;height:60px;cursor:pointer;animation:nudge 2s linear infinite alternate;background:#0a7cb8;border:2px solid #000000;border-radius:10px;color:#fff;font-size:22px}.footer input[type="text"]{float:left;width:100%;max-width:70%;height:60px;background-color:#ad0ab8;border-radius:10px;border:2px solid #000000;padding:15px;color:#fff;font-size:18px}.footer input::placeholder{color:white;text-align:center}@keyframes float{0%,100%{transform:none}33%{transform:translateY(-1px) rotate(-2deg)}66%{transform:translateY(1px) rotate(2deg)}}@keyframes nudge{0%,100%{transform:scale(1)}50%{transform:scale(0.8)}80%{transform:scale(1)}}@keyframes shake-right{0%,100%{transform:rotate(0deg);}10%,90%{transform:rotate(8deg);}20%,80%{transform:rotate(-10deg);}30%,70%{transform:rotate(10deg);}40%,60%{transform:rotate(-10deg);}50%{transform:rotate(10deg);}}@keyframes pulse{0%,to{transform:scaleX(1)}50%{transform:scale3d(1.05,1.05,1.05)}}@keyframes shake{0%,to{transform:translateZ(0)}10%,30%,50%,70%,90%{transform:translate3d(-10px,0,0)}20%,40%,60%,80%{transform:translate3d(10px,0,0)}}@keyframes jello{from,11.1%,to{transform:none}22.2%{transform:skewX(-12.5deg) skewY(-12.5deg)}33.3%{transform:skewX(6.25deg) skewY(6.25deg)}44.4%{transform:skewX(-3.125deg) skewY(-3.125deg)}55.5%{transform:skewX(1.5625deg) skewY(1.5625deg)}66.6%{transform:skewX(-0.78125deg) skewY(-0.78125deg)}77.7%{transform:skewX(0.390625deg) skewY(0.390625deg)}88.8%{transform:skewX(-0.1953125deg) skewY(-0.1953125deg)}}@keyframes shake-rotate{0%,10%,20%,30%,40%,50%,60%,70%,80%,90%,100%{transform:rotate(10deg)}5%,15%,25%,35%,45%,55%,65%,75%,85%,95%{transform:rotate(-10deg)}}.m1,.m2{position:fixed;width:auto;height:100%;top:1%;color:#000;z-index:-1}.m1{left:1%}.m2{right:1%}.test{padding:0!important;width:100%!important;text-align:center;margin-top:0!important;margin-bottom:0!important}.test .name{margin:auto!important;padding:0!important;text-align:center;font-size:13px;text-transform:uppercase;font-weight:bold}.test .name span{min-width:10px;display:inline-block;font-size:3.5em;user-select:none}.name span{display:inline-block;animation:shake-rotate 5s ease-in-out infinite}.name span:nth-child(8n){color:hsl(50,75%,55%);text-shadow:1px 1px hsl(50,75%,45%),2px 2px hsl(50,45%,45%),3px 3px hsl(50,45%,45%),4px 4px hsl(50,75%,45%)}.name span:nth-child(8n-1){color:hsl(135,35%,55%);text-shadow:1px 1px hsl(135,35%,45%),2px 2px hsl(135,35%,45%),3px 3px hsl(135,35%,45%),4px 4px hsl(135,35%,45%)}.name span:nth-child(8n-2){color:hsl(155,35%,60%);text-shadow:1px 1px hsl(155,25%,50%),2px 2px hsl(155,25%,50%),3px 3px hsl(155,25%,50%),4px 4px hsl(140,25%,50%)}.name span:nth-child(8n-3){color:hsl(30,65%,60%);text-shadow:1px 1px hsl(30,45%,50%),2px 2px hsl(30,45%,50%),3px 3px hsl(30,45%,50%),4px 4px hsl(30,45%,50%)}.name span:nth-child(8n-4){color:hsl(323,100%,50%,1);text-shadow:1px 1px hsl(323,75%,50%,1),2px 2px hsl(323,75%,35%,1),3px 3px hsl(323,75%,35%,1),4px 4px hsl(323,75%,35%,1)}.name span:nth-child(8n-5){color:hsl(245,40%,50%,1);text-shadow:1px 1px hsl(245,40%,35%,1),2px 2px hsl(245,40%,35%,1),3px 3px hsl(245,40%,35%,1),4px 4px hsl(245,40%,35%,1)}.name span:nth-child(8n-6){color:hsl(0,82%,33%,1);text-shadow:1px 1px hsl(0,82%,13%,1),2px 2px hsl(0,82%,13%,1),3px 3px hsl(0,82%,13%,1),4px 4px hsl(0,82%,13%,1)}.name span:nth-child(8n-7){color:hsl(355,91%,63%);text-shadow:1px 1px hsl(355,91%,43%),2px 2px hsl(355,91%,43%),3px 3px hsl(355,91%,43%),4px 4px hsl(355,91%,43%)}.name span:nth-child(2){animation-delay:.1s}.name span:nth-child(3){animation-delay:.2s}.name span:nth-child(4){animation-delay:.3s}.name span:nth-child(5){animation-delay:.4s}.name span:nth-child(6){animation-delay:.5s}.name span:nth-child(7){animation-delay:.6s}.name span:nth-child(8){animation-delay:.7s}.name span:nth-child(9){animation-delay:.8s}.name span:nth-child(10){animation-delay:.9s}.name span:nth-child(11){animation-delay:1s}.name span:nth-child(12){animation-delay:1.1s}.name span:nth-child(13){animation-delay:1.2s}.name span:nth-child(14){animation-delay:1.3s}.name span:nth-child(15){animation-delay:1.4s}.name span:nth-child(16){animation-delay:1.5s}.name span:nth-child(17){animation-delay:1.6s}.name span:nth-child(18){animation-delay:1.7s}.name span:nth-child(19){animation-delay:1.8s}.name span:nth-child(20){animation-delay:1.9s}.name span:nth-child(21){animation-delay:2s}a{text-decoration:none;color:inherit}.fireworks-container{position:fixed;left:0;top:0;width:100%;height:100%;z-index:-999}.leftcurtain,.rightcurtain{width:50%;height:100%;position:absolute;top:0}.leftcurtain{left:0;z-index:2}.rightcurtain{right:0;z-index:3}.leftcurtain img,.rightcurtain img{width:100%;height:100%}.logo{margin:150px auto 0}.rope{position:absolute;top:5px;left:30%;z-index:4}.centered{position:absolute;top:75%;left:50%;transform:translate(-50%,-50%)}a.rope{text-decoration:none}.shareBtn,.shareShow{position:fixed;bottom:5px;height:60px;line-height:60px;text-align:center;letter-spacing:1px;overflow:hidden;cursor:pointer;transition:all 0.3s cubic-bezier(0.67,0.13,0.1,0.81),transform 0.15s cubic-bezier(0.67,0.13,0.1,0.81)}.shareBtn{right:calc(50% - 145px);width:300px;background-color:#007f00;border-radius:100px;color:white;animation:footer infinite linear 1s}.shareShow{right:calc(50% - 45px);width:100px;background-color:brown;border-radius:100px;color:white;animation:footer infinite linear 1s}.platforms{position:fixed;right:calc(50% - 145px);width:300px;height:100px;bottom:65px;border-radius:5px;display:none;transform:scale(1);transition:transform 0.3s ease-in-out,opacity 0.3s ease-in-out}.platforms a{position:absolute;width:90px;height:90px;border-radius:5px;color:#3f8efc;text-transform:uppercase;background-color:#1a5276}.platforms a:nth-child(1){left:60px}.platforms a:nth-child(2){left:155px}.platforms a:hover{background:#000;box-shadow:0 0 0 1px #a5cfff}.platforms a:before{content:attr(data-os);position:absolute;color:white;bottom:5px;left:0;width:100%;font-size:12px;text-align:center}.shareShow,.platforms{display:none}.shareBtn{display:inline-block}.span1{display:inline-block;animation:shake-right 2s infinite ease-in-out;font-size:24px;}
@keyframes shaketop {
0%,
100% {
transform: rotate(0deg);
transform-origin: 50% 0;
}
10% {
transform: rotate(2deg);
}
20%,
40%,
60% {
transform: rotate(-4deg);
}
30%,
50%,
70% {
transform: rotate(4deg);
}
80% {
transform: rotate(-2deg);
}
90% {
transform: rotate(2deg);
}
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../pic26/slide.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() { $curtainopen = false; $(".rope").click(function(){ $(this).blur(); if ($curtainopen == false){ $(this).stop().animate({top: '-171%' }, {queue:false, duration:350, easing:'easeOutBounce'}); $(".leftcurtain").stop().animate({width:'0px'}, 2000 ); $(".rightcurtain").stop().animate({width:'0px'},2000 ); $curtainopen = true; }else{ $(this).stop().animate({top: '-40px' }, {queue:false, duration:350, easing:'easeOutBounce'}); document.write(''); $(".leftcurtain").stop().animate({width:'50%'}, 2000 ); $(".rightcurtain").stop().animate({width:'51%'}, 2000 ); $curtainopen = false; } return false; }); });
</script>
</head>
<audio id="audiocracker" src="../pic26/all/xmas/sp/spain3.mp3" autostart="false"></audio>
<script>
    function PlaySound() {
          var sound = document.getElementById("audiocracker");
          sound.play()
      }
</script>
<body>
<div class="leftcurtain"><img src="../pic26/25chz2.webp" /></div>
<div class="rightcurtain"><img src="../pic26/25chz1.webp" /></div>
<a class="rope" onclick="PlaySound()">
<center>
<div style="font-size: 25px;text-shadow: 1px 1px 3px red, 1px 1px 3px red, -1px -1px 3px red, -1px -1px 3px red;color: white;font-weight: bold;"><br><br>Toca esto<br>
<img src="../pic26/arrow.gif" width="30px" height="100px"></div>
<img src="../pic26/all/xmas/jinglebell.png" height="130px" width="130px" style="animation: tada 4s infinite"><br></a>
</center>
<marquee class="m1" behavior="scroll" direction="up" scrolldelay="0">
<img src="../pic26/all/xmas/s1.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s2.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s3.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s4.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s5.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s6.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s7.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s8.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s9.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s10.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s1.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s2.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s3.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s4.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s5.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s6.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s7.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s8.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s9.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s10.png" height="30px" width="30px"/><br><br>
</marquee>
<marquee class="m2" behavior="scroll" direction="down" scrolldelay="0">
<img src="../pic26/all/xmas/s1.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s2.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s3.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s4.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s5.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s6.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s7.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s8.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s9.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s10.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s1.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s2.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s3.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s4.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s5.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s6.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s7.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s8.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s9.png" height="30px" width="30px"/><br><br>
<img src="../pic26/all/xmas/s10.png" height="30px" width="30px"/><br><br>
</marquee>
<main>
<center>
<!-- /22884184265/ca-pub-1553494237872495-tag/see-you1 -->
<div id='div-gpt-ad-1733794649698-0' style='min-width: 320px; min-height: 50px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1733794649698-0'); });
  </script>
</div>
</center>

<br>
<?php
$div1 = '<div class="test"><div class="name">';
$div2 = '</div></div>';
function wrapCharactersInTags($text) {
global $div1, $div2, $emojiBgRemove;
$text = mb_convert_encoding($text, 'UTF-8', 'auto');
$pattern = '/^[a-zA-Z0-9 ~`!$^*()_\\-+=\/?.,;:\[\]{}|éèêëàâäîïôöùûüçœæÿÉÈÊËÀÂÄÎÏÔÖÙÛÜÇŒÆáíóúÁÍÓÚñÑ¿¡°ªºçÇàèìòùâêîôûãõ€£¥₩₪¢π∑∞√∫≈<>=≤≥±÷©®™°•§\p{So}]+$/u';
if (preg_match($pattern, $text)) {
$wrappedText = '';
$length = mb_strlen($text, 'UTF-8');
for ($i = 0; $i < $length; $i++) {
$char = mb_substr($text, $i, 1, 'UTF-8');
$wrappedText .= "<span>$char</span>";
}
return $div1 . $wrappedText . $div2;
} else {
return '<div class="sname">' . $emojiBgRemove . '</div>';
}
}
// Test with hardcoded input
$inputText = $name; // Example input text that matches the pattern
echo wrapCharactersInTags($inputText);
?>
<br>

<img src="../pic26/all/xmas/sp/wish3.png" width="50%" height="25px" style="animation: pulse 2.5s infinite" />


<div style="font-size: 18px; font-weight: 800; color:green;">
<p id="demo"></p>
</div>

<img src="../pic26/all/xmas/sp/main1.png" width="80%" height="30%" style="animation: tada 4s infinite" />

<img src="../pic26/all/xmas/stunder1.gif" width="45%" height="210px" />
<img src="../pic26/all/xmas/stunder2.gif" width="45%" height="210px" />


<center>
<div class="GodMessage" style="text-shadow: 1px 1px 3px yellow, 1px 1px 3px orange, -1px -1px 3px silver, -1px -1px 3px black;">
<img src="../pic26/all/xmas/pic1.png" width="70%" height="3%" />
<p style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:#ff9933">Que esta Navidad</p>
<p style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:#D8A7D2">traiga calidez a tu corazón,</p>
<p style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:#ADD8E6">alegría a tu hogar y</p>
<p style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:#D8A7D2">éxito en el año que comienza.</p>
<p style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:#FA069A"><b>¡Feliz Navidad!</b></p>
<img src="../pic26/all/xmas/pic1.png" width="70%" height="3%" />
</div></center><br>

<center>
<!-- /22884184265/ca-pub-1553494237872495-tag/see-you2 -->
<div id='div-gpt-ad-1733794670247-0' style='min-width: 320px; min-height: 50px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1733794670247-0'); });
  </script>
</div>
</center>

<div class="sname1"><?php echo $emojiBgRemove; ?></div>

<div class="footer">
<form method="post" action="https://see-you.co/es/wish.php">
<input name="n" type="text" placeholder="👉 Escribe tu nombre aquí.." required>
<input class="submit" type="submit" value="👉 Ver">
</form>
</div>
</main>

<script>
var countDownDate = new Date("December 25, 2025 00:00:00").getTime();
var x = setInterval(function() {
var distance = countDownDate - new Date().getTime();
if (distance < 0) { clearInterval(x); document.getElementById("demo").innerHTML = ""; }
else {
var d = Math.floor(distance / (1000 * 60 * 60 * 24)), h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)), m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)), s = Math.floor((distance % (1000 * 60)) / 1000);
document.getElementById("demo").innerHTML = `${d}<font color='#FA069A'> día,</font> ${h}<font color='#11680B'> h,</font> ${m}<font color='#9B274C'> min,<br></font> ${s}<font color='#F47810'> seg antes </font> `;
}
}, 1000);
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RR021DP09C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RR021DP09C');
</script>
</body>
</html>