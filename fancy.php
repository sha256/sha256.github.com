<?php
if(isset($_GET['loop']) && $_GET['loop'] == 'false') $loop = 0; else $loop = 1;
if(isset($_GET['speed'])) $speed = $_GET['speed']; else $speed = 120;
if(isset($_GET['titleoff']) && $_GET['titleoff']== 'true') $titleoff = 1;

Header("content-type : application/x-javascript");
?>
/*
http://hasnath.net
*/

function the_fancifier(a,b,e,c,d,g,f,h,i,j){"id"==a?now=document.getElementById(b):"class"==a?now=document.getElementsByClassName(b)[e]:"tag"==a&&(now=document.getElementsByTagName(b)[e]);h&&(g="title"==a?document.title:now.innerHTML,f=g.length);h=d==f&&!1==i;"title"==a?document.title=g.substring(c,d)+(!1==h?" | ":""):now.innerHTML=g.substring(0,d)+(!1==h?" | ":"");d==f?new_speed=7*j:new_speed=j;d==f&&!1==i||(d!=f?d++:d=0,"title"==a&&35<d?c++:c=0,setTimeout(function(){the_fancifier(a,b,e,c,d,g,f,
0,i,j)},new_speed))}function fancyIt(a,b,e,c){return the_fancifier(a,b,0,0,0,"",0,1,e,c)}function fancyClass(a,b,e,c){return the_fancifier("class",a,b,0,0,"",0,1,e,c)}function fancyTag(a,b,e,c){return the_fancifier("tag",a,b,0,0,"",0,1,e,c)}function fancyTitle(a,b){return fancyIt("title","",a,b)};

<?php if($titleoff != 1 )echo "fancyTitle(".$loop.", ".$speed."); "; ?>
