<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" id="viewport-meta">
    <title>Hello World!</title>
    <meta http-equiv="imagetoolbar" content="no">
    <link href="/assets/css/personal/layout.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/css/personal/spp-news.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/assets/css/personal/tablenew.css" type="text/css" media="screen">
</head>
<style>
    body {
        --cmpBgColor: #507C36;
        --cmpTextColor: #000000;
        --cmpLinkColor: #FFFFFF;
        --cmpPurposesColor: #000000;
        --cmpBrandColor: #000000;
        --cmpLogo: url('https://www.serebii.net/extralogo.png');
    }
</style>
<body>
<!-- <script type="text/javascript">
	var viewport_meta = document.getElementById('viewport-meta');
	var viewport_timer;

	// these body*Class are reused in the lbar mobile menu
	function bodyAddClass(className){
		if(document.body) document.body.classList.add(className);
	}
	function bodyRemoveClass(className){
		if(document.body) document.body.className = document.body.className.replace(className,"");
	}

	function viewport_set() {
		// Define our viewport meta values
		var viewports = {
			default: viewport_meta.getAttribute('content'),
			mobileL: 'width=device-width,initial-scale=0.75',
			mobileM: 'width=device-width,initial-scale=0.5',
			mobileS: 'width=device-width,initial-scale=0.4'
		};

		// Change the viewport value based on screen.width
		if(screen.width < 370){
			viewport_meta.setAttribute('content', viewports.mobileS);
			bodyAddClass("nav_mobileS");
			bodyRemoveClass("nav_mobileM");
			bodyRemoveClass("nav_mobileL");
		} else if(screen.width < 505){
			viewport_meta.setAttribute('content', viewports.mobileM);
			bodyRemoveClass("nav_mobileS");
			bodyAddClass("nav_mobileM");
			bodyRemoveClass("nav_mobileL");
		} else if (screen.width < 760){
			viewport_meta.setAttribute('content', viewports.mobileL);
			bodyRemoveClass("nav_mobileS");
			bodyRemoveClass("nav_mobileM");
			bodyAddClass("nav_mobileL");
		} else{
			viewport_meta.setAttribute('content', viewports.default);
			bodyRemoveClass("nav_mobileS");
			bodyRemoveClass("nav_mobileM");
			bodyRemoveClass("nav_mobileL");
		}
	}

	// Set the correct viewport value on page load
	viewport_set();

	/* attach listener to (delay) set the correct viewport after device orientation change or resize. also onload so the nav_mobile* class gets added to body AFTER <body> has loaded */
	if(window.addEventListener){
		window.addEventListener('load', viewport_set);
		window.addEventListener('resize', function(){
			clearTimeout(viewport_timer);
			viewport_timer = setTimeout(viewport_set, 100);
		})
	} else{
		window.attachEvent('onload', viewport_set)
		window.attachEvent('onresize', function(){
			clearTimeout(viewport_timer);
			viewport_timer = setTimeout(viewport_set, 100);
		})
	}

</script> -->
<header id="header">
	<div class="banner">
		<!-- <a href="/"><img src="https://www.serebii.net/Banner.jpg" alt="Serebii.net Header" style="height:139px"></a> -->
	</div>

	<nav class="quicklinks">
		<ul>
			<li><b>Quick Links</b></li>
			<li><a href="/">Home</a></li>
			<li><a href="https://forums.serebii.net/" target="blank">Forums</a></li>
			<li><a href="mailto:webmaster@serebii.net">Contact</a></li>
			<li><a href="/discord.shtml">Discord</a></li>
			<li><a href="/pokemon">Pokédex Hub</a></li>
			<li><a href="/pokemongo/pokemon">GO Pokédex</a></li>
			<li><a href="/pokedex-sv">Scarlet &amp; Violet Pokédex</a></li>
			<li><a href="/pokearth">Pokéarth</a></li>

			
		</ul>
	</nav>
</header>
    
</body>
</html>