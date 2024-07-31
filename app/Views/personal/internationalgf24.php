<link rel="stylesheet" type="text/css" href="/assets/gf24/css/format.css">
<audio autoplay loop>
			<source src="/assets/gf24/music/music.mp3" type="audio/mpeg">
			Your browser does not support the audio.
		</audio>
		<canvas></canvas>
		<div id="imgTxt">
			<span id="Txt"></span> <br />
			<span id="tmp"></span>
			<img id="img" src="">
		</div>
		<div id="heartTxt">
			<span id="clickMe">Click!</span>
			<div id="heart">
				<button id="button" onclick="play()"></button>
			</div>
		</div>
		<div id="content">
			<h2 id="together">We have been together</h2>
			<div id="timer">
				<b id="d"></b> Days 
				<b id="h"></b> Hours
				<b id="m"></b> Minutes
				<b id="s"></b> Seconds
			</div>
		</div>

    	<div id = "typeDiv">
        	<span id="txt1"></span> <br />
        	<span id="txt2"></span>
    	</div>		

		<script >
			var ok = 0;
			var flag = 1;
			var myImage = document.getElementById("img");
			var myTxt = document.getElementById("Txt");
			var imageArray = ["/assets/gf24/pic/pic1.JPEG", "/assets/gf24/pic/pic2.png", "/assets/gf24/pic/pic3.png", "/assets/gf24/pic/pic4.png", "/assets/gf24/pic/pic5.png", "/assets/gf24/pic/pic6.png", 
			"/assets/gf24/pic/pic7.png", "/assets/gf24/pic/pic8.png", "/assets/gf24/pic/pic9.png"];
			var imageIndex = 0;
			var txtArray = ["My god you look smoking hot in this picture!", "Best Mexican evaaaaaa! Eat that Corn", "What can I say? Prettier then flowers", "Love is an Explosion!!!", "You take me to all the sweet places", "Damn gurlll didnt know you had that kind of flexibility!", "Tokyo is Incredible. So luckyyyy", "Epic Samurai Movie HYAAAAA", "strong af boiii"];
			 var len = imageArray.length;
			var t = 0;
		</script>
		
		<script type="text/javascript" src="/assets/gf24/js/stars.js"></script>
		<script type="text/javascript" src="/assets/gf24/js/typeWriter.js"></script>
		<script type="text/javascript" src="/assets/gf24/js/date.js"></script>
		<script type="text/javascript" src="/assets/gf24/js/playImg.js"></script>