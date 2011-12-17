<HTML>
<HEAD>
<LINK href="fftstyl.css" rel="stylesheet" type="text/css">


<title>Reetesh's FF+Twitter LIVE page</title>

<script src="jquery-1.3.2.js" type="text/javascript" ></script>

<script type="text/javascript">
$(document).ready(function() {
var refreshId = setInterval(function()
{
     $(".res").fadeOut("slow").load("fftwa.php").slideDown("slow");
     
}, 10000);

});

</script>

<script language="JavaScript">

var top=10;
var right=0;

function cloudie()
{
	window.setInterval( "movcloud()", 50 );
	window.setInterval( "refr()",75000 );
}

function refr()
{
	right = -200;
	top = Math.floor(Math.random()*500);
	cloud.style.top=top;
}
function movcloud()
{
		right++;		
		cloud.style.right=right;
}

</script>




</HEAD>
<body onload="cloudie()">

<div class="mbody">
      <div class="main"> Live from Twitter, FF iShtyle </div>
      <div class="res"></div>
</div>

<div ID="cloud" class="scloud"> </div>

<div style="z-index:1">Compare to my <a href="http://friendfeed.com/reetesh" target="_blank">FF</a></div>
<div style="text-align:center; height:100px; z-index:1"> By Y.V.Reetesh<sub>(at gmail)</sub> 
<a href="http://twitter.com/Reetesh/status/3627930691">in 2.5 Hours</a>
<sub>(<?php include("first.php"); ?>)</sub>

</div>
<div class="grass">


</div>
</body>
</html>