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
			var imageArray = ["/assets/gf24/pic/pic1.png", "/assets/gf24/pic/pic2.png", "/assets/gf24/pic/pic3.png", "/assets/gf24/pic/pic4.png", "/assets/gf24/pic/pic5.png", "/assets/gf24/pic/pic6.png", 
			"/assets/gf24/pic/pic7.png", "/assets/gf24/pic/pic8.png", "/assets/gf24/pic/pic9.png", "pic/pic10.png", "/assets/gf24/pic/pic11.png", "/assets/gf24/pic/pic12.png", "/assets/gf24/pic/pic13.png",
			"/assets/gf24/pic/pic14.png", "/assets/gf24/pic/pic15.png", "/assets/gf24/pic/pic16.png"];
			var imageIndex = 0;
			var txtArray = ["你好哇，小可爱~", "我们第一次见面的时候，女票认真的小眼神，嘻嘻", "当时我也有在比心哦~(｡･ω･｡)ﾉ♡",
			 "第一次去重庆见女票, 小仙女出现啦", "江边，今夜月色真美", "牵爪爪散步，开心~o(≧v≦)o", "咳咳，老大不小了还写情书，真是让人害羞(/ω＼)",
			 "超级喜欢女票送的兔兔和胡萝卜!!!", "举手手，我是最可爱的(･∀･)", "同款举手手（好吧，还是女票可爱）", "哇哇哇，这么可爱犯规啦", 
			 "下次去旅游可以叫上我一起吗~", "说，我叠的星星好不好看٩(๑òωó๑)۶", "洪崖洞买的邱邱~", "女票女票，我爱你~", "哒哒哒，逃~"];
			 var len = imageArray.length;
			var t = 0;
		</script>
		
		<script type="text/javascript" src="/assets/gf24/js/stars.js"></script>
		<script type="text/javascript" src="/assets/gf24/js/typeWriter.js"></script>
		<script type="text/javascript" src="/assets/gf24/js/date.js"></script>
		<script type="text/javascript" src="/assets/gf24/js/playImg.js"></script>