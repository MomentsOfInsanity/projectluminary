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

			
		</ul>
	</nav>
</header>
<div id="wrapper">

<ul id="tbar_sticky">
	<li>
		<a href="#lbar" class="navheader" id="tbar_lbar_open"><img src="/hidden/2019-04/burger.svg"></a>
	</li>
	<li>
		<form id="searchbox_018410473690156091934:6gahkiyodbi" action="/search.shtml" style="margin:0px;">
			<input type="hidden" name="cx" value="018410473690156091934:6gahkiyodbi">
			<input type="hidden" name="cof" value="FORID:11">
			<input name="q" type="search" placeholder="Search Serebii.net...">
		</form>
	</li>
	<li>
		<a href="#rbar" class="navheader" id="tbar_rbar_open" style="padding-right:20px"><img src="/hidden/2019-04/burger.svg"></a>
	</li>
</ul>
<div id="tbar_backdrop"></div>

<nav id="lbar">
	<ul id="lbar_ul">
		<li>
			<a href="/" class="navheader">Databases</a>
			<ul>
				<li><a href="/index2.shtml">News</a>
				</li><li><a href="/archive.shtml">Archived news</a></li>
				<li><a href="/pokemon/"><b>Pokédex</b></a></li>
				<li><a href="/pokedex/">-Red/Blue Pokédex</a></li>
				<li><a href="/pokedex-gs/">-Gold/Silver Pokédex</a></li>
				<li><a href="/pokedex-rs/">-Ruby/Sapphire Pokédex</a></li>
				<li><a href="/pokedex-dp/">-Diamond/Pearl Pokédex</a></li>
				<li><a href="/pokedex-bw/">-Black/White Pokédex</a></li>
				<li><a href="/pokedex-xy/">-X &amp; Y Pokédex</a></li>
				<li><a href="/pokedex-sm/">-Sun &amp; Moon Pokédex</a></li>
				<li><a href="/pokedex-sm/">-Let's Go Pokédex</a></li>
				<li><a href="/pokedex-swsh/">-Sword &amp; Shield Pokédex</a></li>
				<li><a href="/pokedex-swsh/">-BDSP Pokédex</a></li>
				<li><a href="/pokedex-swsh/">-Legends Pokédex</a></li>
				<li><a href="/pokemongo/pokemon/">-GO Pokédex</a></li>
				<li><a href="/pokedex-sv/">-Scarlet &amp; Violet Pokédex</a></li>

				<li><strong>Attackdex</strong></li>
				<li><a href="/attackdex-rby/">-Gen 1 Attackdex</a></li>
				<li><a href="/attackdex-gs/">-Gen 2 Attackdex</a></li>
				<li><a href="/attackdex/">-Gen 3 Attackdex</a></li>
				<li><a href="/attackdex-dp/">-Gen 4 Attackdex</a></li>
				<li><a href="/attackdex-bw/">-Gen 5 Attackdex</a></li>
				<li><a href="/attackdex-xy/">-Gen 6 Attackdex</a></li>
				<li><a href="/attackdex-sm/">-Gen 7 Attackdex</a></li>
				<li><a href="/attackdex-swsh/">-Gen 8 Attackdex</a></li>
				<li><a href="/attackdex-sv/">-Gen 9 Attackdex</a></li>
				<li><a href="/itemdex/">ItemDex</a></li>
				<li><a href="/pokearth/">Pokéarth</a></li>
				<li><a href="/abilitydex/">Abilitydex</a></li>
				<li><a href="/spindex/">Spin-Off Pokédex</a></li>
				<li><a href="/spindex-dp/">Spin-Off Pokédex DP</a></li>
				<li><a href="/spindex-bw/">Spin-Off Pokédex BW</a></li>
				<li><a href="/card/dex/">Cardex</a></li>
				<li><a href="/movies/dex/">Cinematic Pokédex</a></li>
				<li><a href="/games/mechanics.shtml">Game Mechanics</a></li>
				<li><a href="/games/iv-calcsv.shtml">-Scarlet/Violet IV Calc.</a></li>
				<li><a href="/potw-sv">Pokémon of the Week</a></li>
				<li><a href="/potw-sv/">-9th Gen</a></li>
				<li><a href="/potw-swsh/">-8th Gen</a></li>
				<li><a href="/potw-sm/">-7th Gen</a></li>
				<li><a href="/pokemon/timeline.shtml">Pokémon Timeline</a></li>
				<li><a href="/pokemoncenter/">Pokémon Centers</a></li>
				<li><a href="/playpokemon">Pokémon Championship Series</a></li>
				<li><a href="/music/projectvoltage">Hatsune Miku Project Voltage</a></li>
				<li><a href="/pokemon/vangoghmuseum">Pokémon x Van Gogh</a></li>
				<li><a href="/pokemonday/">Pokémon Day</a></li>
				<li><a href="/presentations">Pokémon Presentations</a></li>
				<li><a href="/pokemonshirts/">Pokémon Shirts</a></li>
				<li><a href="/themeparks/">Theme Parks</a></li>
				<li><a href="https://forums.serebii.net" target="blank">Forums</a></li>
				<li><a href="http://advent.serebii.net" target="blank">Advent Calendar</a></li>

				<li><a href="/discord.shtml">Discord Chat</a></li>
				<li><a href="/games/currentevents.shtml">Current &amp; Upcoming Events</a></li>
				<li><a href="/events">Event Database</a></li>
				<li><a href="/scarletviolet/pokemon.shtml">9th Generation Pokémon</a></li>
				<li><a href="/scarletviolet/dlc-pokemon.shtml">-New Pokémon in DLC</a></li>
				<li><a href="/scarletviolet/paldeanforms.shtml">-Paldean Form Pokémon</a></li>

			</ul>
		</li>


		<li>
			<a href="/anime/" class="navheader">Anime &amp; TV</a>
			<ul>
				<li><a href="/anime/epiguide/">Episode Listings &amp; Pictures</a></li>
				<li><a href="/anime/dex/">AniméDex</a></li>
				<li><a href="/anime/characters/">Character Bios</a></li>
				<li><a href="/anime/epiguide/indigo/">The Indigo League</a></li>
				<li><a href="/anime/epiguide/orange/">The Orange League</a></li>
				<li><a href="/anime/epiguide/johto/">The Johto Saga</a></li>
				<li><a href="/anime/epiguide/houen/">The Saga in Hoenn!</a></li>
				<li><a href="/anime/epiguide/kanto/">Kanto Battle Frontier Saga!</a></li>
				<li><a href="/anime/epiguide/shinou/">The Sinnoh Saga!</a></li>
				<li><a href="/anime/epiguide/bestwishes/">Best Wishes - Unova Saga</a></li>
				<li><a href="/anime/epiguide/xy/">XY - Kalos Saga</a></li>
				<li><a href="/anime/epiguide/sunmoon/">Sun &amp; Moon - Alola Saga</a></li>
				<li><a href="/anime/epiguide/pokemon/">Pokémon Journeys - Galar Saga</a></li>
				<li><a href="/anime/epiguide/pokemonmaster/">Pokémon Aim To Be A Pokémon Master</a></li>
				<li><a href="/anime/epiguide/pokemon2023/">Pokémon Horizons - Paldea Saga</a></li>
				<li><a href="/anime/epiguide/chronicles/">Pokémon Chronicles</a></li>	
				<li><a href="/anime/epiguide/specials/">The Special Episodes</a></li>
				<li><a href="/anime/banned.shtml">The Banned Episodes</a></li>
				<li><a href="/anime/shiny/">Shiny Pokémon</a></li>
<li><b>Other Web Series</b></li>
				<li><a href="/anime/epiguide/generations/">Pokémon Generations</a></li>
				<li><a href="/anime/epiguide/twilightwings/">Pokémon Twilight Wings</a></li>
				<li><a href="/anime/epiguide/evolutions/">Pokémon Evolutions</a></li>
				<li><a href="/anime/hisuiansnow/">Pokémon: Hisuian Snow</a></li>
				<li><a href="/anime/paldeanwinds/">Pokémon: Paldean Winds</a></li>
				<li><a href="/anime/poketoon/">PokéToon</a></li>
				<li><a href="/anime/other/pathtothepeak/">Path to the Peak</a></li>
				<li><a href="/anime/other/">Other Animations</a></li>
				<li><b>Other Series</b></li>
				<li><a href="/pokemonconcierge/">Pokémon Concierge</a></li>

				<li><b>Live Action</b></li>
				<li><a href="/poketsume/">PokéTsume</a></li>


			</ul>
		</li>

		<li>
			<a href="/games/" class="navheader">Video Games</a>
			<ul>
				<li><a href="/pokemon/generation9.shtml"><b>Gen IX</b></a></li>
				<li><a href="/scarletviolet/">Scarlet &amp; Violet</a></li>
				<li><a href="/pokemongo/">Pokémon GO</a></li>
				<li><a href="/cafemix/">Pokémon Café ReMix</a></li>
				<li><a href="/pokemonmasters/">Pokémon Masters EX</a></li>
				<li><a href="/pokemonunite/">Pokémon UNITE</a></li>
				<li><a href="/pokemonsleep/">Pokémon Sleep</a></li>
				<li><a href="/detectivepikachureturns/">Detective Pikachu Returns</a></li>

				<li><a href="/pokemon/generation8.shtml"><b>Gen VIII</b></a></li>
				<li><a href="/swordshield/">Sword &amp; Shield</a></li>
				<li><a href="/brilliantdiamondshiningpearl/">Brilliant Diamond &amp; Shining Pearl</a></li>
				<li><a href="/legendsarceus/">Pokémon Legends: Arceus</a></li>
				<li><a href="/pokemonhome/">Pokémon HOME</a></li>
				<li><a href="/pokemongo/">Pokémon GO</a></li>
				<li><a href="/pokemonmasters/">Pokémon Masters EX</a></li>
				<li><a href="/dungeonrescueteamdx/">Pokémon Mystery Dungeon Rescue Team DX</a></li>
				<li><a href="/pokemonsmile/">Pokémon Smile</a></li>
				<li><a href="/cafemix/">Pokémon Café ReMix</a></li>
				<li><a href="/newpokemonsnap/">New Pokémon Snap</a></li>
				<li><a href="/pokemonunite/">Pokémon UNITE</a></li>
				<li><a href="/tcglive/">Pokémon TCG Live</a></li>

				<li><a href="/pokemon/generation7.shtml"><b>Gen VII</b></a></li>
				<li><a href="/sunmoon/">Sun &amp; Moon</a></li>
				<li><a href="/ultrasunultramoon/">Ultra Sun &amp; Ultra Moon</a></li>
				<li><a href="/letsgopikachueevee/">Let's Go, Pikachu! &amp; Let's Go, Eevee!</a></li>
				<li><a href="/pokemongo/">Pokémon GO</a></li>
				<li><a href="/magikarpjump/">Pokémon: Magikarp Jump</a></li>
				<li><a href="/rumblerush/">Pokémon Rumble Rush</a></li>
				<li><a href="/pokkendx/">Pokkén Tournament DX</a></li>
				<li><a href="/detective/">Detective Pikachu</a></li>
				<li><a href="/quest/">Pokémon Quest</a></li>
				<li><a href="/smashbrosultimate/">Super Smash Bros. Ultimate</a></li>
				<li><a href="/pokemon/generation6.shtml"><b>Gen VI</b></a></li>
				<li><a href="/xy/">X &amp; Y</a></li>
				<li><a href="/omegarubyalphasapphire/">Omega Ruby &amp; Alpha Sapphire</a></li>
				<li><a href="/bank/">Pokémon Bank</a></li>
				<li><a href="/battletrozei/">Pokémon Battle TrozeiPokémon Link: Battle</a></li>
				<li><a href="/artacademy/">Pokémon Art Academy</a></li>
				<li><a href="/bandofthieves/">The Band of Thieves &amp; 1000 Pokémon</a></li>
				<li><a href="/shuffle/">Pokémon Shuffle</a></li>
				<li><a href="/rumbleworld/">Pokémon Rumble World</a></li>
				<li><a href="/supermysterydungeon/">Pokémon Super Mystery Dungeon</a></li>
				<li><a href="/picross/">Pokémon Picross</a></li>
				<li><a href="/detective/">Detective Pikachu</a></li>
				<li><a href="/pokken/">Pokkén Tournament</a></li>
				<li><a href="/duel/">Pokémon Duel</a></li>
				<li><a href="/smashbros3dswiiu/">Smash Bros for 3DS/Wii U</a></li>
				<li><a href="/games/badge/">Nintendo Badge Arcade</a></li>
				<li><a href="/pokemon/generation5.shtml"><b>Gen V</b></a></li>
				<li><a href="/blackwhite/">Black &amp; White</a></li>
				<li><a href="/black2white2/">Black 2 &amp; White 2</a></li>
				<li><a href="/dreamradar/">Pokémon Dream Radar</a></li>
				<li><a href="/trettalab/">Pokémon Tretta Lab</a></li>
				<li><a href="/rumbleu/">Pokémon Rumble U</a></li>
				<li><a href="/dungeoninfinity/">Mystery Dungeon: Gates to Infinity</a></li>
				<li><a href="/conquest/">Pokémon Conquest</a></li>
				<li><a href="/pokepark2/">PokéPark 2: Wonders Beyond</a></li>
				<li><a href="/rumble2/">Pokémon Rumble Blast</a></li>
				<li><a href="/pokedex3d/">Pokédex 3D</a></li>
				<li><a href="/pokedex3dpro/">Pokédex 3D Pro</a></li>
				<li><a href="/typingds/">Learn With Pokémon: Typing Adventure</a></li>
				<li><a href="/card/howtoplayds/">TCG How to Play DS</a></li>
				<li><a href="/pokedexios/">Pokédex for iOS</a></li>
				<li><a href="/pokemon/generation4.shtml"><b>Gen IV</b></a></li>
				<li><a href="/diamondpearl/">Diamond &amp; Pearl</a></li>
				<li><a href="/platinum/">Platinum</a></li>
				<li><a href="/heartgoldsoulsilver/">Heart Gold &amp; Soul Silver</a></li>
				<li><a href="/ranger3/">Pokémon Ranger: Guardian Signs</a></li>
				<li><a href="/melee/">Pokémon Rumble</a></li>
				<li><a href="/dungeon3/">Mystery Dungeon: Blazing, Stormy &amp; Light Adventure Squad</a></li>
				<li><a href="/pokepark/">PokéPark Wii - Pikachu's  Adventure</a></li>
				<li><a href="/battle/">Pokémon Battle Revolution</a></li>
				<li><a href="/dungeonsky/">Mystery Dungeon - Explorers of Sky</a></li>
				<li><a href="/ranger2/">Pokémon Ranger: Shadows of Almia</a></li>
				<li><a href="/dungeon2/">Mystery Dungeon - Explorers of Time &amp; Darkness</a></li>
				<li><a href="/ranch/">My Pokémon Ranch</a></li>
				<li><a href="/battrio/">Pokémon Battrio</a></li>
				<li><a href="/ssbb/">Smash Bros Brawl</a></li>
				<li><a href="/pokemon/generation3.shtml"><b>Gen III</b></a></li>
				<li><a href="/rubysapphire/">Ruby &amp; Sapphire</a></li>
				<li><a href="/fireredleafgreen/">Fire Red &amp; Leaf Green</a></li>
				<li><a href="/emerald/">Emerald</a></li>
				<li><a href="/colosseum/">Pokémon Colosseum</a></li>
				<li><a href="/xd/">Pokémon XD: Gale of Darkness</a></li>
				<li><a href="/dash/">Pokémon Dash</a></li>
				<li><a href="/pokemon_channel/">Pokémon Channel</a></li>
				<li><a href="/pokemon_box/">Pokémon Box: RS</a></li>
				<li><a href="/pinball_rs/">Pokémon Pinball RS</a></li>
				<li><a href="/ranger/">Pokémon Ranger</a></li>
				<li><a href="/mysteriousdungeon/">Mystery Dungeon Red &amp; Blue</a></li>
				<li><a href="/torouze/">PokémonTrozei</a></li>
				<li><a href="/pikachu/">Pikachu DS Tech Demo</a></li>
				<li><a href="/pokeparkfish/">PokéPark Fishing Rally</a></li>
				<li><a href="/e-reader/">The E-Reader</a></li>
				<li><a href="/pokemate/">PokéMate</a></li>
				<li><a href="/pokemon/generation2.shtml"><b>Gen II</b></a></li>
				<li><a href="/gs/">Gold/Silver</a></li>
				<li><a href="/crystal/">Crystal</a></li>
				<li><a href="/stadium2/">Pokémon Stadium 2</a></li>
				<li><a href="/puzzlechallenge/">Pokémon Puzzle Challenge</a></li>
				<li><a href="/mini/">Pokémon Mini</a></li>
				<li><a href="/smash_bros_2/">Super Smash Bros. Melee</a></li>
				<li><a href="/pokemon/generation1.shtml"><b>Gen I</b></a></li>
				<li><a href="/rb/">Red, Blue &amp; Green</a></li>
				<li><a href="/yellow/">Yellow</a></li>
				<li><a href="/puzzleleague/">Pokémon Puzzle League</a></li>
				<li><a href="/snap/">Pokémon Snap</a></li>
				<li><a href="/pinball/">Pokémon Pinball</a></li>
				<li><a href="/stadiumjp/">Pokémon Stadium (Japanese)</a></li>
				<li><a href="/stadium/">Pokémon Stadium</a></li>
				<li><a href="/tradingcardgamegb/">Pokémon Trading Card Game GB</a></li>
				<li><a href="/smash_bros/">Super Smash Bros.</a></li>

				<li><strong>Miscellaneous</strong></li>
				<li><a href="/games/mechanics.shtml">Game Mechanics</a></li>
				<li><a href="/playpokemon">Pokémon Championship Series</a></li>
				<li><a href="/games/others.shtml">In Other Games</a></li>
				<li><a href="/games/virtualconsole.shtml">Virtual Console</a></li>
				<li><a href="/games/consoles.shtml">Special Edition Consoles</a></li>
				<li><a href="/games/themes.shtml">Pokémon 3DS Themes</a></li>
				<li><a href="/apps">Smartphone &amp; Tablet Apps</a></li>
				<li><a href="/virtualpet">Virtual Pets</a></li>
				<li><a href="/amiibo">amiibo</a></li>
			</ul>
		</li>

		<li>
			<a href="/manga/" class="navheader">Manga</a>
			<ul>
				<li><a href="/manga/">General Information</a>
				</li><li><a href="/manga/dex">MangaDex</a></li>
				<li><a href="/manga/characters">Character BIOs</a></li>
				<li><a href="/manga/characters-new">Detailed BIOs</a></li>
				<li><a href="/manga/chapter.shtml">Chapter Guides</a></li>
				<li><a href="/manga/volume.shtml">Volume Guides</a></li>
				<li><a href="/manga/rby/">RBG Series</a></li>
				<li><a href="/manga/yellow/">Yellow Series</a></li>
				<li><a href="/manga/gsc/">GSC Series</a></li>
				<li><a href="/manga/rs/">RS Series</a></li>
				<li><a href="/manga/frlg/">FRLG Series</a></li>
				<li><a href="/manga/bf/">Emerald Series</a></li>
				<li><a href="/manga/dp/">DP Series</a></li>
				<li><a href="/manga/pt/">Platinum Series</a></li>
				<li><a href="/manga/hgss/">HGSS Series</a></li>
				<li><a href="/manga/bw/">BW Series</a></li>
				<li><a href="/manga/b2w2/">B2W2 Series</a></li>
				<li><a href="/manga/xy/">XY Series</a></li>
				<li><a href="/manga/oras/">ORAS Series</a></li>
				<li><a href="/manga/sunmoon/">SM Series</a></li>
			</ul>
		</li>

		<li>
			<a href="/movies/" class="navheader">Movies</a>
			<ul>
				<li><strong>Anime</strong></li>
				<li><a href="/movies/mewtwo/origin/">The Origin of Mewtwo</a></li>
				<li><a href="/movies/mewtwo/">Mewtwo Strikes Back</a></li>
				<li><a href="/movies/lugia/">The Power of One</a></li>
				<li><a href="/movies/entei/">Spell Of The Unown</a></li>
				<li><a href="/anime/epiguide/specials/002.shtml">Mewtwo Returns</a></li>
				<li><a href="/movies/serebii/">Celebi: Voice of the Forest</a></li>
				<li><a href="/movies/latias_latios/">Pokémon Heroes</a></li>
				<li><a href="/movies/jirachi/">Jirachi - Wish Maker</a></li>
				<li><a href="/movies/deoxys/">Destiny Deoxys!</a></li>
				<li><a href="/movies/mew/">Lucario and the Mystery of Mew!</a></li>
				<li><a href="/movies/kyogre/">Pokémon Ranger &amp; The Temple of the Sea!</a></li>
				<li><a href="/movies/dp/">The Rise of Darkrai!</a></li>
				<li><a href="/movies/giratina/">Giratina &amp; The Sky Warrior!</a></li>
				<li><a href="/movies/arceus/">Arceus and the Jewel of Life</a></li>
				<li><a href="/movies/celebi/">Zoroark - Master of Illusions</a></li>
				<li><a href="/movies/victini/">Black: Victini &amp; ReshiramWhite: Victini &amp; Zekrom</a></li>
				<li><a href="/movies/kyurem/">Kyurem VS The Sword of Justice</a></li>
				<li><a href="/movies/meloetta/">-Meloetta's Midnight Serenade</a></li>
				<li><a href="/movies/genesect/">Genesect and the Legend Awakened</a></li>
				<li><a href="/movies/xy/">Diancie &amp; The Cocoon of Destruction</a></li>
				<li><a href="/movies/hoopa/">Hoopa &amp; The Clash of Ages</a></li>
				<li><a href="/movies/volcanion/">Volcanion and the Mechanical Marvel</a></li>
				<li><a href="/movies/pokemon20/">Pokémon I Choose You!</a></li>
				<li><a href="/movies/thepowerofus/">Pokémon The Power of Us</a></li>
				<li><a href="/movies/mewtwoevolution/">Mewtwo Strikes Back Evolution</a></li>
				<li><a href="/movies/secretsofthejungle/">Secrets of the Jungle</a></li>
				<li><strong>Live Action</strong></li>
				<li><a href="/movies/detectivepikachu/">Pokémon Detective Pikachu</a></li>
			</ul>
		</li>

		<li>
			<a href="/movies/" class="navheader">Pikachu Shorts</a>
			<ul>
				<li><a href="/movies/pikachu1/">Pikachu's Summer Vacation</a></li>
				<li><a href="/movies/pikachureturns/">Pikachu's Rescue Adventure</a></li>
				<li><a href="/movies/pikachu3/">Pikachu And Pichu</a></li>
				<li><a href="/movies/pikachu4/">Pikachu's PikaBoo</a></li>
				<li><a href="/movies/pikachu5/">Camp Pikachu!</a></li>
				<li><a href="/movies/pikachu6/">Gotta Dance!!</a></li>
				<li><a href="/movies/pikachu7/">Pikachu's Summer Festival!</a></li>
				<li><a href="/movies/pikachu8/">Pikachu's Ghost Festival!</a></li>
				<li><a href="/movies/pikachu9/">Pikachu's Island Adventure!</a></li>
				<li><a href="/movies/pikachu10/">Pikachu's Exploration Club</a></li>
				<li><a href="/movies/pikachu11/">Pikachu's Great Ice Adventure</a></li>
				<li><a href="/movies/pikachu12/">Pikachu's Sparkling Search</a></li>
				<li><a href="/movies/pikachu13/">Pikachu's Really Mysterious Adventure</a></li>
				<li><a href="/movies/eevee/">Eevee &amp; Friends</a></li>
				<li><a href="/movies/klefki/">Pikachu, What's This Key?</a></li>
				<li><a href="/movies/pikachumusic/">Pikachu &amp; The Pokémon Music Squad</a></li>
			</ul>
		</li>

		<li>
			<a href="/card/" class="navheader">Trading Cards</a>
			<ul>
				<li><a href="/tcglive/">Pokémon TCG Live</a></li>
				<li><a href="/card/dex/">Cardex</a></li>
				<li><a href="/card/dex/extra">-Extra Pokémon Types</a></li>
				<li><a href="/card/dex/trainers">Trainer Cards</a></li>
				<li><a href="/card/dex/energy">Energy Cards</a></li>
				<li><a href="/card/dex/extra/altart.shtml">Alternate Art Cards</a></li>
				<li><a href="/card/raidbattles">Raid Battles</a></li>
				<li><a href="/card/classic/">Pokémon TCG Classic</a></li>
				<li><a href="/card/english.shtml"><b>English Sets</b></a></li>
				<li><a href="/card/paldeanfates/">-Paldean Fates</a></li>
				<li><a href="/card/paradoxrift/">-Paradox Rift</a></li>
				<li><a href="/card/151/">-151</a></li>
				<li><a href="/card/obsidianflames/">-Obsidian Flames</a></li>
				<li><a href="/card/paldeaevolved/">-Paldea Evolved</a></li>
				<li><a href="/card/scarletviolet/">-Scarlet Violet</a></li>
				<li><a href="/card/crownzenith/">-Crown Zenith</a></li>
				<li><a href="/card/silvertempest/">-Silver Tempest</a></li>
				<li><a href="/card/lostorigin/">-Lost Origin</a></li>
				<li><a href="/card/pokemongo">-Pokémon GO x Pokémon TCG</a></li>
				<li><a href="/card/astralradiance">-Astral Radiance</a></li>
				<li><a href="/card/brilliantstars">-Brilliant Stars</a></li>
				<li><a href="/card/sm.shtml">-SM Series</a></li>
				<li><a href="/card/xy.shtml">-XY Series</a></li>
				<li><a href="/card/bw.shtml">-BW Series</a></li>
				<li><a href="/card/dpt.shtml">-DPtHS Series</a></li>
				<li><a href="/card/ex.shtml">-EX Series</a></li>
				<li><a href="/card/neo.shtml">-Neo/eSeries</a></li>
				<li><a href="/card/first.shtml">-First Gen Series</a></li>
				<li><a href="/card/engpromo.shtml"><b>English Promos</b></a></li>
				<li><a href="/card/svpromos">-SV Promos</a></li>
				<li><a href="/card/swshpromos">-SWSH Promos</a></li>
				<li><a href="/card/smpromos">-SM Promos</a></li>
				<li><a href="/card/xypromos">-XY Promos</a></li>
				<li><a href="/card/popseries.shtml">-POP Series</a></li>
				<li><a href="/card/japanese.shtml"><b>Japanese Sets</b></a></li>
				<li><a href="/card/shinytreasureex/">-Shiny Treasure ex</a></li>
				<li><a href="/card/futureflash/">-Future Flash</a></li>
				<li><a href="/card/ancientroar/">-Ancient Roar</a></li>
				<li><a href="/card/ragingsurf/">-Raging Surf</a></li>
				<li><a href="/card/pokemoncard151/">-Pokémon Card 151</a></li>
				<li><a href="/card/snowhazard/">-Snow Hazard</a></li>
				<li><a href="/card/clayburst/">-Clay Burst</a></li>
				<li><a href="/card/tripletbeat/">-Triplet Beat</a></li>
				<li><a href="/card/scarletex/">-Scarlet ex</a></li>
				<li><a href="/card/violetex/">-Violet ex</a></li>
				<li><a href="/card/vstaruniverse/">-VSTAR Universe</a></li>
				<li><a href="/card/paradigmtrigger/">-Paradigm Trigger</a></li>
				<li><a href="/card/incandescentarcana/">-Incandescent Arcana</a></li>
				<li><a href="/card/lostabyss">-Lost Abyss</a></li>
				<li><a href="/card/darkphantasma">-Dark Phantasma</a></li>
				<li><a href="/card/spacejuggler">-Space Juggler</a></li>
				<li><a href="/card/timegazer">-Time Gazer</a></li>
				<li><a href="/card/sword">-Sword</a></li>
				<li><a href="/card/shield">-Shield</a></li>
				<li><a href="/card/tagallstars">-Tag All Stars</a></li>
				<li><a href="/card/vs">-Pokémon VS</a></li>
				<li><a href="/card/jppromo.shtml"><b>Japanese Promos</b></a></li>
				<li><a href="/card/svpromo">-SV Promos</a></li>
				<li><a href="/card/spromo">-S Promos</a></li>
				<li><a href="/card/smpromo">-SM Promos</a></li>

			</ul>
		</li>
	</ul>
</nav>


<script type="text/javascript">

function loadMobileLbar(){
	var tbar_lbar_open=document.getElementById('tbar_lbar_open'),
		tbar_backdrop=document.getElementById('tbar_backdrop'),
		lbar=document.getElementById('lbar'),
		lbarLIs=document.querySelectorAll("#lbar_ul>li .navheader"),
		lbarLIULs=document.querySelectorAll("#lbar_ul>li>ul");

	/* lbar display/hide */
	tbar_lbar_open.onclick=function() {
		if (lbar.className.indexOf("show") > -1){//hide
			lbar.className = lbar.className.replace("show","");
			bodyRemoveClass("nav_modal");
		} else{//show
			lbar.classList.add("show");
			bodyAddClass("nav_modal");
		}

		return false;
	}


	/* background clicked when bar shown */
	tbar_backdrop.onclick=function() {// if the backdrop is clicked, hide menus
		lbar.className = lbar.className.replace("show","");
		rbar.className = rbar.className.replace("show","");
		bodyRemoveClass("nav_modal");
		return false;
	}

	/* handle expand/collapse sub-menus in lbar by attaching click events */
	for(i=0; i<lbarLIs.length; i++){
		lbarLIs[i].onclick=function(i) {
			var elem=this.parentNode.getElementsByTagName("UL")[0];
			var elemDisp=(elem.className.indexOf("show") === -1)

			// hide all ul, then open one if clicked
			for(i2=0; i2<lbarLIULs.length; i2++){
				lbarLIULs[i2].className = lbarLIULs[i2].className.replace("show","");
			}

			if(elemDisp){
				elem.classList.add("show");
			}

			return false;
		}
	}
}
function loadMobileRbar(){
	var tbar_rbar_open=document.getElementById('tbar_rbar_open'),
		rbar=document.getElementById('rbar');

	/* rbar display/hide */
	tbar_rbar_open.onclick=function() {
		if (rbar.className.indexOf("show") > -1){//hide
			rbar.className = rbar.className.replace("show","");
			bodyRemoveClass("nav_modal");
		} else{//show
			rbar.classList.add("show");
			bodyAddClass("nav_modal");
		}

		return false;
	}
}

loadMobileLbar();

/* attach listener to for rbar events AFTER page loads (because #rbar hasn't loaded at this point in page ) */
if(window.addEventListener){
	window.addEventListener('load', loadMobileRbar)
} else{
	window.attachEvent('onload', loadMobileRbar)
}
</script>



<div id="content">
		<div class="center" style="margin-top:16px;height:100px"><div id="nn_lb1"></div><div id="nn_mobile_lb1"></div></div>
<main>


<div class="post">
<h2><a href="/news/2023/28-December-2023.shtml" id="28-December-2023">Thursday: Pokémon Concierge - Release</a></h2><p class="info"><span class="date">28-12-2023 08:00 GMT / 03:00 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 09:01 GMT</p>

<div class="pics"><a href="/pokemonconcierge/"><img src="/pokemonconcierge/title2.jpg" width="300" alt="Pokémon Concierge" loading="lazy"></a></div>
<div class="subcat"><h3>In The TV Department</h3>
<p class="title">Pokémon Concierge</p>
<p>The new TV show, Pokémon Concierge, is now live to watch on Netflix across the world. This series is a stop motion animated series following the exploits fo Haru as she goes to work at a Pokémon Resort and befriends many of the Pokémon she finds there. There are four episodes within the series ranging from 14 to 20 minutes each.<br>
We're currently working through and cataloguing all details of all four episodes in our <a href="/pokemonconcierge">Pokémon Concierge</a> section so be sure to keep checking back for full details<br>
Edit @ 09:01: We have updated the Pokémon Concierge section with details for every episode as well as what characters and Pokémon appear within
</p></div>




</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/27-December-2023.shtml" id="27-December-2023">Wednesday: Pokémon Masters EX - A Jolly Trio</a></h2><p class="info"><span class="date">27-12-2023 06:00 GMT / 01:00 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 06:00 GMT</p>

<div class="pics"><a href="/pokemonmasters/events/ajollytrio.shtml"><img src="/pokemonmasters/events/ajollytrio.jpg" alt="Pokémon Masters - A Jolly Trio " width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Masters EX - Egg  Event</p>
<p>The A Jolly Trio event has begun in Pokémon Masters EX. This event is focused around getting eggs based around the Galar Starters. This allows for you to create Sync Pairs of <a href="/pokemonmasters/syncpairs/maincharacter.shtml">Main Character &amp; Grookey, Scorbunny and Sobble</a> with their shiny variants being available. The event runs until January 11th<br>
We're currently compiling all details in our <a href="/pokemonmasters/events/ajollytrio.shtml">A Jolly Trio</a> event section<br>
</p></div>



</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/26-December-2023.shtml" id="26-December-2023">Tuesday: Pokémon Scarlet &amp; Violet - Item Distributions + Pokémon Sleep - Good Sleep Day Event + Pokémon UNITE - Metagross Release + Pokémon Café ReMix - Slowpoke's Bistro</a></h2><p class="info"><span class="date">26-12-2023 00:00 GMT / 19:00 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 07:00 GMT<br>Edit @ 06:00: Pokémon Café ReMix | Edit @ 06:39: Pokémon Masters EX | Edit @ 07:00: Pokémon UNITE | Edit @ 07:39: Item Distributions</p>
 
<div class="pics"><a href="/scarletviolet/serialcode.shtml"><img src="/scarletviolet/gift2.jpg" alt="Pokémon Sword &amp; Shield" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>A pair of new distributions have begun. This distribution was given within a weekly newsletter from Nintendo in Japan and gives players an item based on the one received<br>
The first gives an Expert Belt. It is obtained with the code <b>SUPEREFFECT1VE</b>.<br>
The second gives 30 Quick Balls and is obtained with the code <b>G0TCHAP0KEM0N</b><br>
Both run until February 28th 2025<br>
Our <a href="/events">Event Database</a> has been updated with full details of the event</p></div>


 
<div class="pics"><a href="/scarletviolet/internetevents.shtml"><img src="/scarletviolet/gift.jpg" alt="Pokémon Sword &amp; Shield" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>The special distribution of 10 TM223 (Metal Sound) has begun in Pokémon Scarlet &amp; Violet. This distribution gives these TMs after i was discovered that you need a Violet exclusive Pokémon, Shieldon, to craft the TM. The gift is available until the patch altering the crafting requirements goes live in mid January<br>
Our <a href="/events">Event Database</a> has been updated with full details of the event</p></div>




<div class="pics"><a href="/pokemonsleep/goodsleepday/december2023.shtml"><img src="/pokemonsleep/goodsleepday1223.jpg" alt="Pokémon Sleep" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Sleep</p>
<p>The third Pokémon Sleep Good Sleep Day event is starting to roll out. This event runs from 04:00 local time today until 03:59 local time on December 29th  and features bonus Drowsy Power and Pokémon Experience for every Sleep Research that begins during this time period. This will give *1.5 Drowsy Power on December 26th and 28th and *2.5 Drowsy Power on December 27th <br>
We have all details to our <a href="/pokemonsleep/goodsleepday/december2023.shtml">Good Sleep Day Event Page</a></p></div>

 <div class="pics"><a href="/pokemonunite/pokemon/metagross.shtml"><img src="/pokemonunite/metagross.jpg" alt="Metagross Released in Pokémon UNITE" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon UNITE</p>
<p>Pokémon UNITE has received a small update which adds a variety of things to the game.<br>
First, the Pokémon <a href="/pokemonunite/pokemon/metagross.shtml">Metagross</a> is now available  to earn through event missions, and its Phantom Thief Holowear is now available to purchase in the shop for 1,050 Gems with animation for Movement. We're currently compiling full details for Meowscarada in our Pokémon section for the game. </p></div>

<div class="pics"><a href="/pokemonmasters/events.shtml"><img src="/pokemonmasters/exlink.jpg" alt="Pokémon Masters EX" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Masters EX</p>
<p>Pokémon Masters EX has pushed the new update which covers the events and data for the next month. As such, we have begun adding data to our section for <a href="/pokemonmasters/syncpairs/clair.shtml">Clair</a>, <a href="/pokemonmasters/syncpairs/wallace.shtml">Wallace</a>, <a href="/pokemonmasters/syncpairs/katherine.shtml">Katherine</a>, <a href="/pokemonmasters/syncpairs/iono.shtml">Iono</a> &amp; <a href="/pokemonmasters/syncpairs/grusha.shtml">Grusha</a></p></div>

<div class="pics"><a href="/cafemix/events/slowpoke'sbistro.shtml"><img src="/cafemix/slowpoke'sbistro.jpg" alt="Pokémon Café ReMix" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Café ReMix</p>
<p>The next Pokémon Café ReMix Hospitality Event is now live. This event gives players a chance to get <a href="/cafemix/pokemon/slowpoke.shtml">Slowpoke (Chef)</a> by earning points to exchange for the outfit<br>
In addition to that, the new outfit <a href="/cafemix/pokemon/snom.shtml">Snom</a> is now live in the Delivery Feature<br>
Finally, a paid pass is now live to allow you to earn Stars to get a choice of Tatsugiri</p></div>


</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/25-December-2023.shtml" id="25-December-2023">Monday: Pokémon Scarlet &amp; Violet - Walking Wake &amp; Iron Leaves Raids &amp; New Years Outbreaks + Pokémon GO - Winter Holiday Part 2</a></h2><p class="info"><span class="date">25-12-2023 00:00 GMT / 19:00 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 00:09 GMT</p>
 

<div class="pics"><a href="/scarletviolet/teraraidbattles/event-walkingwakeandironleavesspotlight.shtml"><img src="/scarletviolet/walkingwakeandironleavesspotlight.jpg" alt="Pokémon Scarlet &amp; Violet - Walking Wake &amp; Iron Leaves Raids" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>The Walking Wake &amp; Iron Leaves Tera Raid Battle event has begun its latest run in Pokémon Scarlet &amp; Violet. If you caught them successfully during the previous runs, you will be unable to capture them again.<br>
This event runs until January 7th 2024 at 23:59 UTC<br>
We have full details of this event in our <a href="/scarletviolet/teraraidbattles/event-walkingwakeandironleavesspotlight.shtml">Walking Wake &amp; Iron Leaves Spotlight Event Section</a>
 </p></div>


<div class="pics"><a href="/scarletviolet/massoutbreakevent/newyearoutbreaks.shtml"><img src="/scarletviolet/newyearoutbreak.jpg" alt="Pokémon Scarlet &amp; Violet - New Year Mass Outbreak" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>The latest Pokémon Scarlet &amp; Violet Mass Outbreak event has begun. This event causes Mass Outbreaks of Dratini in Paldea, Jangmo-o in Kitakami and Duraludon in the Terarium. This runs until January 3rd 2024  at 23:59 UTC. This event features increased chances of getting the Joyful Mark on each of the Pokémon.<br>
We're currently compiling all details of this event so be sure to keep checking back<br><br>
Edit @ 00:09: We have begun adding all the details to our <a href="/scarletviolet/massoutbreakevent/newyearoutbreaks.shtml">Mass Outbreak Event Page</a>.

</p></div>

 <div class="pics"><a href="/scarletviolet/onlinecompetitions/blueberryprologue.shtml"><img src="/scarletviolet/onlinecompetitions/blueberryprologue.jpg" alt="Pokémon Scarlet &amp; Violet - Online Competition" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>The next Pokémon Scarlet &amp; Violet Online Competition has been announced. This competition is the Blueberry Prologue and features Double Battles using only Pokémon that are in the Blueberry Pokédex <br>
Registration is open from 00:00 UTC on January 4th - 14th at 23:59 UTC while battles run from 00:00 UTC on January 12th - 14th. <br>
This competition also gives 10,000 League Points to all players who complete 3 or more battles

</p></div>


<div class="pics"><a href="/scarletviolet/rankedbattle/regulationf.shtml"><img src="/scarletviolet/rankedbattle/regulationf.jpg" alt="Pokémon Scarlet &amp; Violet - Ranked Battle" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet - Ranked Battle</p>
<p>Following its reveal at the start of the month, now that The Indigo Disk is out, we have full details on the legality list for Pokémon in Regulation F. As expected, Pokemon in the Blueberry Pokédex are added into the fold as well as all other returning Pokémon excluding Restricted Legendary and Mythical being added. The new Paradox Pokémon are also allowed.<br>
This Regulation will run from January 4th 2024 through April 30th 2024 in live events and on Ranked Battle<br>
We have added full lists into our <a href="/scarletviolet/rankedbattle/regulationf.shtml">Regulation F</a> section</p></div>



<div class="pics"><a href="/pokemonmasters/events/atouchingsepia-tonedsong.shtml"><img src="/pokemonmasters/events/atouchingsepia-tonedsong.jpg" alt="Pokémon Masters - A Touching Sepia-Toned Song" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Masters EX - Neo Champion Event</p>
<p>The "A Touching Sepia-Toned Song"  Neo Champion  Event has begun a run in Pokémon Masters EX. This event has you follow the story of Rosa being recommended to join the Neo Champions by Cheren. It runs until January 14th<br>
To tie in with that, a new Master Fair Scout is available to get the Sync Pair of <a href="/pokemonmasters/syncpairs/rosa.shtml">Rosa &amp; Meloetta</a><br>
We're currently compiling all details in our <a href="/pokemonmasters/events/atouchingsepia-tonedsong.shtml">A Touching Sepia-Toned Song</a> event section<br>
Alongside this, the <a href="/pokemonmasters/events/showyourheartsasone.shtml">Show Your Hearts as One</a> Extreme Battle Event has begun, and a special challenge <a href="/pokemonmasters/events/takeonaseriousrosa.shtml">Take on a Serious Rosa</a> event has begun featuring a battle against Rosa &amp; Meloetta. Both run until January 14th 2024
</p></div>

<div class="pics"><a href="/pokemonmasters/events/pokemonmastersdaydecember2023.shtml"><img src="/pokemonmasters/events/pokemonmastersdaydecember2023.jpg" alt="Pokémon Masters EX - Pokémon Masters Day" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Masters EX</p>
<p>A special event has begun. For one day only each month on the 25th, the Pokémon Masters Day event will be held. This event will give you a variety of rewards for completion. Alongside this, a special 25 Gem for 11 Sync Pair scout is now live. This also unlocks Lorelei &amp; Lapras 6 Star EX and the Sync Grids for Kukui &amp; Lycanroc. We've updated our  <a href="/pokemonmasters/events/pokemonmastersdaydecember2023.shtml">Pokémon Masters Day page</a> with the details of this month's event</p></div>


   <div class="pics"><a href="/pokemongo/events/winterholiday2023part2.shtml"><img src="/pokemongo/winterholiday20232.jpg" width="300" alt="Pokémon GO - Winter Holiday 2023 Part 1" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO</p>
<p>The next Pokémon GO event is starting to roll out globally. This event is the second part of the annual Winter Holiday event and introduces shiny Vanillite into the game, alongside wider access of the new Psyduck outfit.<br>
We have full details in our <a href="/pokemongo/events/winterholiday2023part2.shtml">Winter Holiday 2023 Part 2</a> event section<br>
</p></div>

<div class="pics"><a href="/cafemix/events.shtml"><img src="/cafemix/snom.jpg" alt="Pokémon Café ReMix" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Café ReMix</p>
<p>The next Pokémon Café ReMix Delivery focus has been announced. Snom will be available within the feature from December 26th 2023, adding it into the game. It is said to be very useful in the upcoming Slowpoke event</p></div>


</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/24-December-2023.shtml" id="24-December-2023">Sunday: Pokémon TCG - Wild Force &amp; Cyber Judge + Pokémon Café ReMix - Marshtomp Event + Pokémon of the Week</a></h2><p class="info"><span class="date">24-12-2023 06:03 GMT / 01:03 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 20:00 GMT<br>Edit @ 06:29: Pokémon TCG | Edit @ 13:00: Pokémon of the Week | Edit @ 20:00: Pokémon GO</p>


<div class="pics"><a href="/card/wildforce"><img src="/card/sv5.jpg" alt="Pokémon TCG" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The TCG Department</h3>
<p class="title">Pokémon Trading Card Game</p>
<p>Following the set reveal yesterday, the first cards for the new Pokémon TCG sets Wild Force &amp; Cyber Judge have been released including the first cards for all the new Paradox Pokémon. We have begun adding the cards to our new pages, with thanks to ToineLay for assistance in translation:<br>
<a href="/card/wildforce">SV5 Wild Force</a><br>
<a href="/card/cyberjudge">SV5 Cyber Judge</a><br>
Edit: In addition to that, two Starter Decks were revealed for Japan focusing on an Ancient Koraidon ex and a Future Miraidon ex. We're adding details of that to our TCG section as well<br>
<a href="/card/starterdeckancientkoraidonex">Starter Deck - Ancient Koraidon ex</a><br>
<a href="/card/starterdeckfuturemiraidonex">Starter Deck - Future Miraidon ex</a><br>

</p></div>

   <div class="pics"><a href="/pokemongo/events/winterholiday2023part2.shtml"><img src="/pokemongo/winterholiday20232.jpg" width="300" alt="Pokémon GO - Winter Holiday 2023 Part 1" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO</p>
<p>The next Pokémon GO event is starting to roll out in Asia Pacific regions. This event is the second part of the annual holiday event and adds Shiny Vanillite into the game. It runs from 10:00 local time on December 25th to 20:00 local time on December 31st<br>
We are currently compiling details of this event, including the Timed Research &amp; Special Research, in our <a href="/pokemongo/events/winterholiday2023part2.shtml">Winter Holiday 2023 Part 2</a> event section<br>
</p></div>


<div class="pics"><a href="/cafemix/events.shtml"><img src="/cafemix/slowpokechef.jpg" alt="Pokémon Café ReMix" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Café ReMix</p>
<p>The next Pokémon Café ReMix event has been announced. This event adds the outfit of Sushi Chef for Marshtomp obtained through a Bingo mission. It runs from December 26th 2023 at 06:00 UTC. We'll provide full details as they come<br>
Alongside this, it has been confirmed that Slowpoke (Chef) will come as a one minute cooking event starting December 26th 2023</p></div>

<div class="pics"><a href="/pokemonunite/events.shtml"><img src="/pokemonunite/meowscaradaemblem.jpg" alt="Pokémon UNITE" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon UNITE</p>
<p>To celebrate the Holidays, Pokémon UNITE has put out a special code that lets you receivea special Meowscarada Platinum Boost Emblem. This is obtained with the code <b>MERRYXMAS</b> which can be input into the Gift Exchange in the main missions. It runs until January 21st 2024</p></div>



   <div class="pics"><a href="/potw-sv/998.shtml"><img src="/potw-sv/998-i.jpg" alt="Pokémon of the Week - Baxcalibur" loading="lazy"></a></div>
<div class="subcat"><h3>In The Pokémon of the Week Department</h3>
<p class="title">Who's That Pokémon</p>
<p>Today marks the fifty-sixth entry into the Generation IX competitive field with a Paldea  Pokémon. These entries are created by the visitors for the visitors and then compiled by our writers Psynergy, Jellal, Mestorn, Aminith &amp; Mcdanger. To get involved, <a href="https://forums.serebii.net/forums/potw-collaboration.210/" target="blank"><u><b>Click here for the discussion forum</b></u></a> <br>Today, we are covering a Pokémon introduced in the ninth generation. This Pokémon blasts cryogenic air out from its mouth. This air can instantly freeze even liquid-hot lava. It launches itself into battle by flipping upside down and spewing frigid air from its mouth. It finishes opponents off with its dorsal blade.  So, here it is, the fifty-sixth Pokémon, Baxcalibur</p></div>


</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/23-December-2023.shtml" id="23-December-2023">Saturday: Pokémon TCG - Cyber Judge &amp; Wild Force + Pokémon Masters EX - Rosa &amp; Meloetta + Pokémon GO - Wyrdeer Raid Day &amp; Winter Wonderland</a></h2><p class="info"><span class="date">23-12-2023 00:00 GMT / 19:00 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 04:00 GMT<br>Edit @ 04:00: Pokémon Masters EX | Edit @ 09:05: Pokémon TCG</p>
 

<div class="pics"><a href="/card/wildforce"><img src="/card/sv5.jpg" alt="Pokémon TCG" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The TCG Department</h3>
<p class="title">Pokémon Trading Card Game</p>
<p>The Pokémon Company have revealed the next Japanese Pokémon TCG set. This set comes in two parts, <a href="/card/wildforce">Wild Force</a> and <a href="/card/cyberjudge">Cyber Judge</a> and conitunes the focus around Paradox Pokémon. This set is due for release in Japan on January 26th 2024. It features the return of ACE SPEC cards. Wild Force focuses on Walking Wake, Raging Bolt and Gouging Fire while Cyber Judge focuses on Iron Leaves, Iron Crown and Iron Boulder<br>
Edit @ 09:19: We have added today's revealed details to our new pages, with thanks to ToineLay for assistance in translation:<br>
<a href="/card/wildforce">SV5 Wild Force</a><br>
<a href="/card/cyberjudge">SV5 Cyber Judge</a><br>
</p></div>


<div class="pics"><a href="/pokemonmasters/events.shtml"><img src="/pokemonmasters/exlink.jpg" alt="Pokémon Masters EX" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Masters EX</p>
<p>Pokémon Masters EX has announced the next event. This event is the A Touching Sepia-Toned Song event and introduces the Sync Pair of <a href="/pokemonmasters/syncpairs/rosa.shtml">Rosa (Champion) &amp; Meloetta</a>

 into the game. It runs from December 25th 2023
</p><table align="center" class="dextab">
<tbody><tr> <td class="fooevo" colspan="2">Footage</td></tr>
<tr><td class="cen" colspan="2"><iframe width="590" height="344" loading="lazy" src="https://www.youtube.com/embed/CVsGHdVentk" frameborder="0" allowfullscreen=""></iframe></td></tr>
</tbody></table><p></p></div>


<div class="pics"><a href="/pokemongo/raidday/wyrdeerday.shtml"><img src="/pokemongo/wyrdeerraidday.jpg" width="300" alt="Pokémon GO" loading="lazy"></a></div>
 <div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO - Raid Day</p>
<p>The Pokémon GO Raid Day is rolling out globally. For three hours in each region, Wyrdeer will appear in Raids on each Gym in the area, adding Wyrdeer into the game. With this, you will get up to 5 extra Raid Passes from Gyms and can participate in up to 20 Remote Raid a day. All Raid Battles will have an increased chance of giving a shiny Wyrdeer<br>
This runs at these times:<br>
It runs from 2pm to 5pm in your local time.<br>
We have full details on our <a href="/pokemongo/raidday/wyrdeerday.shtml">Wyrdeer Raid Day</a> page</p></div>

   <div class="pics"><a href="/pokemongo/events/winterwonderland2023.shtml"><img src="/pokemongo/winterholiday2023.jpg" width="300" alt="Pokémon GO - Winter Holiday 2023 Part 1" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO</p>
<p>The next Pokémon GO event is starting to roll out globally. This event is the first part of the annual Winter Wonderland event which features Collection Challenges giving Wyrdeer. It runs from 10:00 local time until December 24th 20:00 local time.<br>
We have full details in our <a href="/pokemongo/events/winterwonderland2023.shtml">Winter Wonderland</a> event section<br>
</p></div>

</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/22-December-2023.shtml" id="22-December-2023">Friday: Pokémon Scarlet &amp; Violet - Iron Bundle Raids &amp; Delibird Outbreaks + Pokémon Sleep - New Years Event + Project Voltage</a></h2><p class="info"><span class="date">22-12-2023 00:00 GMT / 19:00 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 21:29 GMT<br>Edit @ 05:03: Pokémon Sleep New Years | Edit @ 05:46: Nintendo Switch Online | Edit @ 09:30: Project Voltage | Edit @ 10:21: Terastal Cap Distribution | Edit @ 10;40: Episode Details | Edit @ 21:29: Pokémon GO</p>
 
<div class="pics"><a href="/scarletviolet/serialcode.shtml"><img src="/scarletviolet/gift.jpg" alt="Pokémon Sword &amp; Shield" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>A new distribution has begun. This distribution was given during today's Pokémon Horizons episode in Japan and gives players a special cap for their character, the Terastal Cap. It is obtained with the code <b>WEARTERASTALCAP</b>.
It runs until Novmber 30th 2024<br>
Our <a href="/events">Event Database</a> has been updated with full details of the event</p></div>



<div class="pics"><a href="/scarletviolet/teraraidbattles/event-mightyironbundle.shtml"><img src="/scarletviolet/ironbundleraids.jpg" alt="Pokémon Scarlet &amp; Violet - Hisuian Decidueye Raids" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>The latest Tera Raid Battle event is now live in Pokémon Scarlet &amp; Violet. This is the Mighty Iron Bundle event. This event has Iron Bundle appearing in 7 Star Raids with the Ice Tera Type. As with all past 7 Star Raid events, players can only catch one Iron Bundle from raids per save file. Alongside Iron Bundle, Blissey is appearing in 5 Star Tera Raid Battles with boosted Tera Shard and Candy rewards<br>
This event runs until December 24th 2023 at 23:59 UTC<br>
We're currently compiling all details of the event so be sure to keep checking back  <br>

Edit @ 00:09: We have updated our section with full details of this <a href="/scarletviolet/teraraidbattles/event-mightyironbundle.shtml">Tera Raid Battle Event</a>

 </p></div>


<div class="pics"><a href="/scarletviolet/massoutbreakevent/delibirdoutbreaks.shtml"><img src="/scarletviolet/delibirdoutbreak.jpg" alt="Pokémon Scarlet &amp; Violet - Delibird Mass Outbreak" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>The latest Pokémon Scarlet &amp; Violet Mass Outbreak event has begun. This event causes Mass Outbreaks of Delibird throughout Paldea, Kitakami and the Terarium. This runs until December 24th 2023 at 23:59 UTC. This event features increased chances of getting Shiny Delibird.<br>
We're currently compiling all details of this event so be sure to keep checking back<br><br>

Edit @ 00:09: We have begun adding all the details to our <a href="/scarletviolet/massoutbreakevent/delibirdoutbreaks.shtml">Mass Outbreak Event Page</a>.

</p></div>

 <div class="pics"><a href="/scarletviolet/"><img src="/nso12233.jpg" alt="Pokémon Scarlet &amp; Violet - Nintendo Switch Online Icons" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet - Nintendo Switch Online Icons</p>
<p>A new wave of the Pokémon Scarlet &amp; Violet Hidden Treasure of Area Zero icons is now live for Nintendo Switch Online Subscribers. This allows for players to purchase icons and borders to use as their icons. Wave 3 includes multiple new icon parts including Okidogi, Fezandipiti, Munkidori as well as Juliana &amp; Florian in their Festival Jinbei, among returning elements. These are available for one week until December 29th 2023</p></div>

   <div class="pics"><a href="/pokemongo/events/winterwonderland2023.shtml"><img src="/pokemongo/wyrdeerraidday.jpg" width="300" alt="Pokémon GO - Winter Holiday 2023 Part 1" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO</p>
<p>The next Pokémon GO event is starting to roll out in Asia Pacific regions. This event is theannual Winter Wonderland event which features several Collection Challenges. It runs from 10:00 local time on December 23rd to 20:00 local time on December 24th<br>
We have compiled all details in our <a href="/pokemongo/events/winterwonderland2023.shtml">Winter Wonderland</a> event section<br>
</p></div>


<div class="pics"><a href="/pokemonsleep/events.shtml"><img src="/pokemonsleep/newyears2024.jpg" alt="Pokémon Sleep" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Sleep</p>
<p>The next Pokémon Sleep event has been confirmed. This event is the New Year 2024 event and runs from January 1st through January 8th. It features increased spawns of Starter Pokémon in each island as well as *1.5 Sleep Experience and 200 Bonus Sleep Points each day, as well as Pokémon of different sleep styles appearing<br>
Greengrass Isle: Bulbasaur, Charmander, Squirtle, Pikachu<br>
Cyan Beach: Squirtle, Pikachu<br>
Taupe Hollow: Charmander<br>
Snowdrop Tundra: Snover, Abomasnow</p></div>


&nbsp;<div class="pics"><a href="/anime/epiguide/pokemon2023/034.shtml"><img src="/1270.jpg" alt="Respective Departures" loading="lazy"></a></div>
<div class="subcat"><h3>In The Anime Department</h3>
<p class="title">Pokémon Horizons</p>
<p>The latest episode has aired in Japan today. This episode features the the group preparing a farewell party for Liko's grandmother as she decides to leave the Brave Olivine. The <a href="/anime/dex"><u>AniméDex</u></a> has been updated with the contents of this <a href="/anime/epiguide/pokemon2023/034.shtml"><u>episode</u></a>. Click the picture to go to the section but be warned however as it contains spoilers.</p></div>

<div class="pics"><a href="/music/projectvoltage/juvenile.shtml"><img src="/music/projectvoltage/juvenile.jpg" alt="Pokémon feat. Hatsune Miku Project Voltage 18 Types 18 Songs" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Music Department</h3>
<p class="title"> Pokémon feat. Hatsune Miku Project Voltage 18 Types 18 Songs - Juvenile </p>
<p>The laters of the Pokémon feat. Hatsune Miku Project Voltage songs has been released. This is Juvenile by Jin with a special music video with various visuals showing a story featuring a variety of Pokémon.<br>
We have added details to our <a href="/music/projectvoltage/">Project Voltage</a> section including a special page on this song, <a href="/music/projectvoltage/juvenile.shtml">Juvenile</a>, including an embed. </p></div>



<div class="pics"><a href="/pokemonunite/events.shtml"><img src="/pokemonunite/holidaycode.jpg" alt="Pokémon Sleep" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon UNITE</p>
<p>To celebrate the Holidays, Pokémon UNITE has put out a special code that lets you receive 1 of 20 different Pokémon. This is obtained with the code <b>SURPRISE23</b> which can be input into the Gift Exchange in the main missions. It runs until December 31st 2023</p></div>



</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/21-December-2023.shtml" id="21-December-2023">Thursday: Pokémon Scarlet &amp; Violet - Indigo Disk Coverage + Pokémon Masters EX - Special Champion Stadium + Pokémon UNITE - Holowear</a></h2><p class="info"><span class="date">21-12-2023 06:00 GMT / 01:00 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 18:01 GMT<br>Edit @ 15:59: PokéTsume | Edit @ 18:01: Pokémon GO</p>
 

<div class="pics"><a href="/scarletviolet/thehiddentreasureofareazero/theindigodisk.shtml"><img src="/scarletviolet/areazerounderdepths.jpg" alt="Pokémon: Scarlet &amp; Violet Coverage 1" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet Coverage Day 7</p>
<p>The Pokémon Scarlet &amp; Violet The Indigo Disk is live and our coverage of the game and content is coming to its conclusion. <b>If you want to remain unspoiled, do not click the spoiler tag, nor visit the Scarlet &amp; Violet section until you have your game</b>. Don't worry as blatant spoilers will NOT be on the home page. <br>
 Our <a href="/pokedex-sv/"><u>Scarlet &amp; Violet Pokédex</u></a>, <a href="/attackdex-sv/"><u>Scarlet &amp; Violet Attackdex</u></a>, <a href="/abilitydex/"><u>Abilitydex</u></a>, are now updated with all the new details. The <a href="/scarletviolet/pokemon.shtml">New Pokémon</a> and <a href="/scarletviolet/blueberrypokedex.shtml">Blueberry Pokédex</a>, <a href="/pokearth/terarium/">Pokéarth - Terarium and Interactive Map</a> and <a href="/scarletviolet/teraraidbattles.shtml">Tera Raid Battles</a> pages are also up to date with all the latest data<br>
Edit @ 09:39: Updated various sections throughout the site with fixes, most notably Pokémon in each biome in the map filter

</p></div>


<div class="pics"><a href="/pokemongo/events.shtml"><img src="/pokemongo/newyears2024.jpg" width="300" alt="Pokémon GO" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO</p>
<p>Niantic have announced the next Pokémon GO event. This event is the New Years 2023 event and runs from January 1st 10:00 through January 3rd 20:00 local time, adding a Ribbon Jigglypuff and Wigglytuff into the game<br>
Jigglypuff, New Years Hoothoot, Bronzor and Darumaka will be in the wild<br>
There will be 50% Egg Hatch Distance and 25% Egg Hatch Distance for the first 3 eggs using the widget<br>
There is paid Timed Research<br>
Bulbasaur, Charmander and Squirtle in Party Hats will be in 1 Star Raids alongside New Years Hoothoot and Party Hat Wurmple<br>
Raticane, Nidorino, Gengar and Wobbuffet in Party Hats will be in 3 Star Raids<br>
Pichu in a party hat, Cleffa, Igglybuff, Togepi, Tyrogue, Smoochum, Elekid, Magby, Azurill and Wynaut will be in Eggs during the event

</p></div>

<div class="pics"><a href="/pokemongo/"><img src="/pokemongo/timelesstravels.jpg" width="300" alt="Pokémon GO" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO</p>
<p>Niantic have announced the next Pokémon GO events for January 2024.<br>
The Lustrous Odyssey event will run on January 6th through 10th<br>
A Raid Day on January 14th for Hisuian Typhlosion<br>
The Dazzling Dream event runs from January 13th through January 16th<br>
The Raging Battles event will run from January 19th through 24th<br>
The Taken Treasures event will run from January 27th through February 1st<br>
A Ho-Oh Shadow Raid Event will run January 27th through 28th

Buzzwole will be in 5 Star Raids from January 1st through 10th in Americas, Xurkitree in Asia Pacific and Pheromosa in Europe, Middle East, Africa and India,<br>
Tornadus Therian Forme will be in 5 Star Raids from Jan 10th through 17th. It will know Bleakwind Storm<br>
Thundurus Therian Forme will be in 5 Star Raids from Jan 17th through 24th. It will know Wildbolt Storm<br>
Landorus Therian Forme will be in 5 Star raids from January 24th through 31st. It will know Sandsear Storm</p></div>


&nbsp;<div class="pics"><a href="/poketsume/010.shtml"><img src="/poketsume/010.jpg" alt="Cram Adventure in A Pocket - PokéTsume" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The TV Department</h3>
<p class="title">Cram Adventure In Your Pocket</p>
<p>The latest episode of the TV Drama, PokéTsume, has aired in Japan. This episode features Madoka return home in order to regain her focus. We have updated our section with the contents of this <a href="/poketsume/010.shtml"><u>episode</u></a> including Pokémon appearing in the episode. Click the picture to go to the section but be warned however as it contains spoilers.</p></div>


<div class="pics"><a href="/pokemonmasters/events/pasiospecialstadiumchampionleaf.shtml"><img src="/pokemonmasters/events/pasiospecialstadiumchampionleaf.jpg" alt="Pokémon Masters EX - Pasio Special Stadium Champion Leaf" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Masters EX - Special Event</p>
<p>The fifth Pasio Special Stadium event is now live in Pokémon Masters EX. This event acts like the Champion Stadium but with a mix of Elite Four members and Champions, with this battle being against Champion Leaf, with the ability to battle again to earn Points and Rewards if you add more challenging restrictions to the matches<br>We've compiled all the details of this event in our <a href="/pokemonmasters/events/pasiospecialstadiumchampionleaf.shtml">Pasio Special Stadium Champion Leaf</a> event section</p></div>


<div class="pics"><a href="/pokemonunite/holowear.shtml"><img src="/pokemonunite/fashionablezeraora.jpg" alt="Pokémon UNITE" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon UNITE</p>
<p>Two new pieces of <a href="/pokemonunite/holowear.shtml">Holowear</a> has been released for Pokémon UNITE. This is the Fashionable outfit for <a href="/pokemonunite/pokemon/zeraora.shtml">Zeraora</a> which cost 1050 Gems with special animations for Movement. The second is a recolour of the Starry Cloak Style (Light Blue) for <a href="/pokemonunite/pokemon/decidueye.shtml">Decidueye</a>. It is available for 400 Gems</p></div>



</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/20-December-2023.shtml" id="20-December-2023">Wednesday: Pokémon Scarlet &amp; Violet - Indigo Disk Coverage Day 7 + Pokémon Café ReMix - Farfetch'd Team Event</a></h2><p class="info"><span class="date">20-12-2023 06:00 GMT / 01:00 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 14:00 GMT<br>Edit @ 14:00: Pokémon Scarlet &amp; Violet: The Hidden Treasure of Area Zero Epilogue</p>
 
<div class="pics"><a href="/scarletviolet/"><img src="/scarletviolet/titledlc.jpg" alt="Pokémon Scarlet &amp; Violet" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>The latest news for Pokémon Scarlet &amp; Violet: The Hidden Treasure of Area Zero DLC  has been released. With this, an Epilogue has been confirmed to release on January 11th at 14:00 UTC. This Epilogue features the story of Penny, Nemona and Arven joining you in Kitakami and focuses on a mysterious item visible in the store in Mossui Town<br>
You need to have completed the main story, as well as the stories in The Hidden Treasure of Area Zero to access this Epilogue and it is available for free for players who have The Hidden Treasure of Area Zero
</p><table align="center" class="dextab">
<tbody><tr> <td class="fooevo" colspan="2">Footage</td></tr>
<tr><td class="cen" colspan="2"><iframe width="590" height="344" loading="lazy" src="https://www.youtube.com/embed/B_T9u6T9eOg" frameborder="0" allowfullscreen=""></iframe></td></tr>
</tbody></table>
<p></p></div>

<div class="pics"><a href="/scarletviolet/thehiddentreasureofareazero/theindigodisk.shtml"><img src="/scarletviolet/stellartype.jpg" alt="Pokémon: Scarlet &amp; Violet Coverage 1" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet Coverage Day 5</p>
<p>The Pokémon Scarlet &amp; Violet The Indigo Disk is live and our coverage of the game and content is in full swing <b>If you want to remain unspoiled, do not click the spoiler tag, nor visit the Scarlet &amp; Violet section until you have your game</b>. Don't worry as blatant spoilers will NOT be on the home page. <br>
 Our <a href="/pokedex-sv/"><u>Scarlet &amp; Violet Pokédex</u></a>, <a href="/attackdex-sv/"><u>Scarlet &amp; Violet Attackdex</u></a>, <a href="/abilitydex/"><u>Abilitydex</u></a>, are now updated with all the new details. The <a href="/scarletviolet/pokemon.shtml">New Pokémon</a> and <a href="/scarletviolet/blueberrypokedex.shtml">Blueberry Pokédex</a>, <a href="/pokearth/terarium/">Pokéarth - Terarium and Interactive Map</a> and <a href="/scarletviolet/teraraidbattles.shtml">Tera Raid Battles</a> pages are also up to date with all the latest data<br>
Edit @ 08:32: Updated the <a href="/scarletviolet/profile.shtml">Profile</a> page<br>
Edit @ 11:29: Updated the <a href="/scarletviolet/size.shtml">Size Variance</a> page with details on what size ranges causes the icon to appear when using the lock on upgrade<br>

</p></div>

<div class="pics"><a href="/scarletviolet/internetevents.shtml"><img src="/scarletviolet/gift.jpg" alt="Pokémon Scarlet &amp; Violet" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>A new distribution has been announced for Pokémon Scarlet &amp; Violet. As an apology for TM223 requiring materials only available in one version of the game, 10 TM223 (Metal Sound) will be distributed from December 26th 2023 through Mystery Gift -&gt; Receive Via Internet. It will be available until Version 3.0.1 releases which will resolve the oversight</p></div> 

<div class="pics"><a href="/scarletviolet/patch.shtml"><img src="/scarletviolet/title.jpg" alt="Pokémon: Scarlet &amp; Violet Coverage 1" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet Version 3.0.0</p>
<p>Some new bugs and oversights have been acknowleged in Pokémon Scarlet &amp; Violet. First, if you level up Inkay using Candy under Level 30 the game will stop receiving input. In addition to that, TM223 is requiring Shieldon parts despite Shieldon not being available in Pokémon Scarlet. As such, this will be adjusted. This will be fixed in a patch due out in late January</p></div>

<div class="pics"><a href="/cafemix/events/farfetch'd'syear-endparty.shtml"><img src="/cafemix/farfetch'd'syear-endparty.jpg" alt="Pokémon Café ReMix" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Café ReMix</p>
<p>The next Pokémon Café ReMix Team Event, Winter Prep with Farfetch'd is now live. This event gives players another chance to get <a href="/cafemix/pokemon/farfetch'd.shtml">Farfetch'd</a> by working together in teams to earn points<br>
In addition to that, the new outfit <a href="/cafemix/pokemon/spheal.shtml">Spheal (Holiday)</a> is now live in the Delivery Feature</p></div>

</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/19-December-2023.shtml" id="19-December-2023">Tuesday: Pokémon Scarlet &amp; Violet - Indigo Disk Coverage Day 6 + Pokémon Masters EX - Shining A Gentle Light</a></h2><p class="info"><span class="date">19-12-2023 06:00 GMT / 01:00 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 19:58 GMT</p>
 
<div class="pics"><a href="/scarletviolet/thehiddentreasureofareazero/theindigodisk.shtml"><img src="/scarletviolet/flyingtimetrial.jpg" alt="Pokémon: Scarlet &amp; Violet Coverage 1" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet Coverage Day 5</p>
<p>The Pokémon Scarlet &amp; Violet The Indigo Disk is live and our coverage of the game and content is in full swing <b>If you want to remain unspoiled, do not click the spoiler tag, nor visit the Scarlet &amp; Violet section until you have your game</b>. Don't worry as blatant spoilers will NOT be on the home page. <br>
 Our <a href="/pokedex-sv/"><u>Scarlet &amp; Violet Pokédex</u></a>, <a href="/attackdex-sv/"><u>Scarlet &amp; Violet Attackdex</u></a>, <a href="/abilitydex/"><u>Abilitydex</u></a>, are now updated with all the new details. The <a href="/scarletviolet/pokemon.shtml">New Pokémon</a> and <a href="/scarletviolet/blueberrypokedex.shtml">Blueberry Pokédex</a>, <a href="/pokearth/terarium/">Pokéarth - Terarium and Interactive Map</a> and <a href="/scarletviolet/teraraidbattles.shtml">Tera Raid Battles</a> pages are also up to date with all the latest data<br>
Ediy @ 06:22: Done a few fixes of pages throughout the site<br>

Edit @ 08:08: Updated the <a href="/games/stats.shtml">Stats</a> game mechanic page<br>
Edit @ 08:39: Updated the <a href="/games/status.shtml">Status Condition</a> game mechanic page<br>
Edit @ 11:15: Updated the <a href="/games/criticalhits.shtml">Critical Hits</a> game mechanic page<br>
Edit @ 16:00: Updated the <a href="/scarletviolet/itemprinter.shtml">Item Printer</a> page to include details on the final efficiency of the Materials<br>
Edit @ 16:36: Updated the <a href="/abilitydex">Ability Database</a> to now properly display whether certain moves or abilities affect it in each respective Ability page<br>
Edit @ 17:24: Updated the <a href="/scarletviolet/marks.shtml">Marks listing</a> to include the Mark Charm rates<br>
Edit @ 18:31: Updated the <a href="/games/speedpriority.shtml">Speed Priority</a> game mechanic page<br>
Edit @ 19;58: Updated the <a href="/games/iv-calcsv.shtml">IV Calculator</a> with the new Pokémon<br>
Edit @ 21:28: Fixed some issues with the <a href="/scarletviolet/leagueclubtrades.shtml">League Club Trades</a> output to display the unique Tera Types

</p></div>



<div class="pics"><a href="/pokemonmasters/events/shineagentlelightdecember2023.shtml"><img src="/pokemonmasters/events/shineagentlelightdecember2023.jpg" alt="Pokémon Masters - Shine a Gentle Light" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Masters EX - Story Event</p>
<p>The "Shine a Gentle Light"  Story  Event has begun in Pokémon Masters EX. This event is a repeat of last year's Holiday event and is focused around Jasmine hosting a party to cheer up Ampharos<br>
To tie in with that, a new Seasonal Scout is available to get all previous holiday sync pairs<br>
We're currently compiling all details in our <a href="/pokemonmasters/events/shineagentlelightdecember2023.shtml">Shine a Gentle Light</a> event section
</p></div>


</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/18-December-2023.shtml" id="18-December-2023">Monday: Pokémon Scarlet &amp; Violet - Indigo Disk Coverage Day 5 + Tera Raid Battle Events + Outbreak Events + Pokémon Sleep - Holiday Event</a></h2><p class="info"><span class="date">18-12-2023 00:00 GMT / 19:00 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 21:17 GMT<br>Edit @ 06:18: Surprise Kecleon Event | Edit @ 18:15: Community Day</p>
 
<div class="pics"><a href="/scarletviolet/thehiddentreasureofareazero/theindigodisk.shtml"><img src="/scarletviolet/throwingstyles/8.jpg" alt="Pokémon: Scarlet &amp; Violet Coverage 1" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet Coverage Day 5</p>
<p>The Pokémon Scarlet &amp; Violet The Indigo Disk is live and our coverage of the game and content is in full swing <b>If you want to remain unspoiled, do not click the spoiler tag, nor visit the Scarlet &amp; Violet section until you have your game</b>. Don't worry as blatant spoilers will NOT be on the home page. <br>
 Our <a href="/pokedex-sv/"><u>Scarlet &amp; Violet Pokédex</u></a>, <a href="/attackdex-sv/"><u>Scarlet &amp; Violet Attackdex</u></a>, <a href="/abilitydex/"><u>Abilitydex</u></a>, are now updated with all the new details. The <a href="/scarletviolet/pokemon.shtml">New Pokémon</a> and <a href="/scarletviolet/blueberrypokedex.shtml">Blueberry Pokédex</a>, <a href="/pokearth/terarium/">Pokéarth - Terarium and Interactive Map</a> and <a href="/scarletviolet/teraraidbattles.shtml">Tera Raid Battles</a> pages are also up to date with all the latest data<br>
Edit @ 06:21: Updated the <a href="/scarletviolet/itemprinter.shtml">Item Printer</a> page with further details on the rates for the Item Drop and Poké Ball Drop Bonuses<br>
Edit @ 08:41: Updated our <a href="/games/pokeball.shtml">Poké Ball Legality List</a> with all the new and returning Pokémon, as well as adjustments for others<br>
Edit @ 10:56; Done a few minor fixes that caused a couple of issues on some pages<br>
Edit @ 12:31: Added all native Shiny Imagery for available Pokémon to the <a href="/pokedex-sv/">Scarlet &amp; Violet Pokédex</a><br>
Edit @ 13:39: Updated the <a href="/games/stats.shtml">Stats</a> game mechanic page<br>
Edit @ 15:04: Created a page on the <a href="/scarletviolet/flyingtimetrial.shtml">Flying Time Trial</a><br>
Edit @ 15:42: Updated the <a href="/scarletviolet/menucustomisation.shtml">Menu Customisation</a> page<br>
Edit @ 16:02: Updated the <a href="/scarletviolet/picnic.shtml">Picnic Customisation</a><br>
Edit @ 16:38: Updated all the League Club pages, including the <a href="/scarletviolet/leagueclubcoaches.shtml">League Club Coaches</a> page to give details for rwards for battling the Blueberry Elite Four and winning subsequent battles<br>
Edit @ 18;30: Updated the <a href="/scarletviolet/emotes.shtml">Emotes page</a> with an emote we missed<br>
Edit @ 20:45: Updated the <a href="/scarletviolet/leagueclubcoaches.shtml">League Coaches</a> page with the full unlock methods<br>
Edit @ 21:17: Updated the <a href="/scarletviolet/formchange.shtml">Form Changes</a> page to give some details on Minior as clarification in response to questions as to locations of each of its forms


</p></div>


<div class="pics"><a href="/scarletviolet/teraraidbattleevents.shtml"><img src="/scarletviolet/ironbundleraids.jpg" alt="Pokémon Scarlet &amp; Violet" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>The next 7 Star Tera Raid Battle event has been announced for Pokémon Scarlet &amp; Violet. This event will feature a battle against an Iron Bundle with the Ice Tera Type and the Mightiest Mark. It can only be caught once per save file. <br>
Alongside this, Blissey will be in 5 Star Raids offering high Tera Shard rewards.<br>
This event will run from 00:00 UTC on December  22nd through 23:59 UTC on December 24th</p></div>


<div class="pics"><a href="/scarletviolet/teraraidbattleevents.shtml"><img src="/scarletviolet/walkingwakeandironleavesspotlight.jpg" alt="Pokémon Scarlet &amp; Violet" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>The next Tera Raid Battle event has been announced for Pokémon Scarlet &amp; Violet This event will feature the return of Walking Wake and Iron leaves to 5 Star Raid Battles. If you caught them previously, you cannot catch them again<br>
This event will run from 00:00 UTC on December 25th through 23:59 UTC on January 7th 2024
</p></div>


<div class="pics"><a href="/scarletviolet/massoutbreakevents.shtml"><img src="/scarletviolet/delibirdoutbreak.jpg" alt="Pokémon Scarlet &amp; Violet" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>The next Mass Outbreak event has been announced for Pokémon Scarlet &amp; Violet. This event will feature a focus on the Pokémon Delibird and will feature outbreaks in Paldea, Kitakami and the Terarium featuring it, with an increased Shiny Chance<br>
This event will run from 00:00 UTC on December 22nd through 23:59 UTC on December 25th 2023
</p></div>

<div class="pics"><a href="/scarletviolet/massoutbreakevents.shtml"><img src="/scarletviolet/newyearoutbreak.jpg" alt="Pokémon Scarlet &amp; Violet" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>The next Mass Outbreak event has been announced for Pokémon Scarlet &amp; Violet. This event will feature a focus on the Pokémon Dratini in Paldea, Jangmo-o in Kitakami and Duraludon in the Terarium with a chance at the Joyful Mark<br>
This event will run from 00:00 UTC on December 25th through 23:59 UTC on January 3rd 2024
</p></div>


<div class="pics"><a href="/pokemongo/communityday.shtml"><img src="/pokemongo/community0124.jpg" width="300" alt="Pokémon GO" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO</p>
<p>Niantic have announced the next Pokémon GO Community Day on January 6th will focus on Rowlet, introducing Shiny Rowlet into the game. This event will 3* Catch Stardust, 2* Catch Experience and double the chance to get XL Candy as well as 3 hours Incense and Lure Modules.<br>

It will also give out the movs Frenzy Plant to Decidueye, as well as adding Spirit Shackle to its movepool.  You will be able to purchase a ticket to receive Special Research . <br>
The Community Day runs at 2pm to 5pm in each local time zone</p></div>

<div class="pics"><a href="/pokemonsleep/events/holiday2023.shtml"><img src="/pokemonsleep/holiday2023.jpg" alt="Pokémon Sleep" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Sleep</p>
<p>The third major Pokémon Sleep event, the Holiday event is starting to roll out. This event runs from 04:00 local time today until 03:59 local time on December 25th 2023. This event features boosted spawns of Delibird, Snover, Glaceon, Spheal and Holiday Hat Pikachu into the game. <br>

We have all details to our <a href="/pokemonsleep/events/holiday2023.shtml">Holiday 2023 Event Page</a></p></div>


   <div class="pics"><a href="/pokemongo/events.shtml"><img src="/pokemongo/hiddensurprise.jpg" width="300" alt="Pokémon GO - Winter Holiday 2023 Part 1" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO</p>
<p>An event is happening from 17:00 to 20:00 local time today in Pokémon GO. Having been reported for Australia &amp; New Zealand, this event features increased spawns of Kecleon at Poké Stops and features Kecleon added to showcases. It has now been confirmed as a global event</p></div>

   <div class="pics"><a href="/pokemongo/events/winterholiday2023part1.shtml"><img src="/pokemongo/winterholiday2023.jpg" width="300" alt="Pokémon GO - Winter Holiday 2023 Part 1" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO</p>
<p>The next Pokémon GO event is starting to roll out globally. This event is the first part of the annual Winter Holiday event and introduces a variety of costume Pokémon, as well as Cetoddle into the game.<br>
We have full details in our <a href="/pokemongo/events/winterholiday2023part1.shtml">Winter Holiday 2023 Part 1</a> event section<br>
</p></div>




</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/17-December-2023.shtml" id="17-December-2023">Sunday: Pokémon Scarlet &amp; Violet - Indigo Disk Coverage Day 4</a></h2><p class="info"><span class="date">17-12-2023 06:15 GMT / 00:15 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 21:51 GMT<br>Edit @ 13:00: Pokémon of the Week | Edit @ 23:10: Outbreak and Raid News</p>
 
<div class="pics"><a href="/scarletviolet/thehiddentreasureofareazero/theindigodisk.shtml"><img src="/pokearth/maps/terarium/3.jpg" alt="Pokémon: Scarlet &amp; Violet Coverage 1" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet Coverage Day 3</p>
<p>The Pokémon Scarlet &amp; Violet The Indigo Disk is live and our coverage of the game and content is in full swing <b>If you want to remain unspoiled, do not click the spoiler tag, nor visit the Scarlet &amp; Violet section until you have your game</b>. Don't worry as blatant spoilers will NOT be on the home page. <br>
 Our <a href="/pokedex-sv/"><u>Scarlet &amp; Violet Pokédex</u></a>, <a href="/attackdex-sv/"><u>Scarlet &amp; Violet Attackdex</u></a>, <a href="/abilitydex/"><u>Abilitydex</u></a>, are now updated with all the new details. The <a href="/scarletviolet/pokemon.shtml">New Pokémon</a> and <a href="/scarletviolet/blueberrypokedex.shtml">Blueberry Pokédex</a>, <a href="/pokearth/terarium/">Pokéarth - Terarium and Interactive Map</a> and <a href="/scarletviolet/teraraidbattles.shtml">Tera Raid Battles</a> pages are also up to date with all the latest data<br>
Edit @ 06:15: Updated the <a href="/scarletviolet/terastal.shtml">Terastallisation</a> page with some new inelligible moves<br>
Edit @ 07:02: Created a page on the <a href="/scarletviolet/stellartype.shtml">Stellar Type</a> mechanics<br>
Edit @ 09:09: Updated the <a href="/scarletviolet/swim.shtml">Swimming Mechanics</a> with all the new Pokémon<br>
<br>
Edit @ 11:09: Added over 150 more Item Locations to <a href="/pokearth/terarium/">Pokéarth - Terarium</a>, the <a href="/itemdex">Item Database</a> and the <a href="/scarletviolet/items.shtml">Items Listing</a> which finishes up all the items findable in the DLC<br>
Edit @ 12:35: Updated the <a href="/scarletviolet/musiccustomisation.shtml">Music Customisation</a> section<br>
Edit @ 13:06: Updated the <a href="/scarletviolet/synchromachine.shtml">Synchro Machine</a> section<br>
Edit @ 13:34: Created a page on <a href="/scarletviolet/throwingstyles.shtml">Throwing Styles</a><br>
Edit @ 14:20: Updated the <a href="/scarletviolet/daynightcycle.shtml">Day/Night</a> Cycle page with listings of the time frames for each time of day in the Terarium<br>
Edit @ 15:37: As requested, updated the page on <a href="/scarletviolet/emotes.shtml">Photos and Emotes</a>, including where to get the new emotes<br>
Edit @ 15:50: Made a page on <a href="/scarletviolet/pokemonnotindex.shtml">Available Pokémon not in a Pokédex</a><br>
Edit @ 16:22: Updated the  <a href="/scarletviolet/shinypokemon.shtml">Shiny Pokémon</a> page listing with details on Meal Power Level 1<br>
Edit @ 16:30: As requested, updated the <a href="/scarletviolet/snacksworthlegendary.shtml">Snacksworth's Legendary Pokémon</a> page with a chart showing the Solo Quest game exclusives<br>
Edit @ 17:00:  Updated the above page again with a clarification with some Group Quest exclusive Pokémon<br>
Edit @ 17:29: Created a page on the <a href="/scarletviolet/areazerounderdepths.shtml">Area Zero Underdepths</a> story.<br>
Edit @ 18:30: Done a variety of minor fixes across all parts of the site for things not showing up such as biome data for Alolan Forms in the Pokédex<br>
Edit @ 21:51: Updated the <a href="/scarletviolet/blueberryquests.shtml">Blueberry Quests</a> page to include all available tasks<br>

</p></div>

   <div class="pics"><a href="/pokemongo/events/winterholiday2023part1.shtml"><img src="/pokemongo/winterholiday2023.jpg" width="300" alt="Pokémon GO - Winter Holiday 2023 Part 1" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO</p>
<p>The next Pokémon GO event is starting to roll out in Asia Pacific regions. This event is the first part of the annual holiday event and features the introduction of Cetoddle int o the game. It runs from 10:00 local time on December 25th to 10:00 local time on December 15th<br>
We are currently compiling details of this event, including the Timed Research &amp; Special Research, in our <a href="/pokemongo/events/winterholiday2023part1.shtml">Winter Holiday 2023 Part 1</a> event section<br>
</p></div>



<div class="pics"><a href="/playpokemon/2024.shtml"><img src="/regionals.jpg" alt="Pokémon Championships" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Pokémon Championship Series Department</h3>
<p class="title">Pokémon Regional Championships</p>
<p>Today is Day 1 of the <a href="/playpokemon/2024/sanantonioregionalchampionships.shtml">Pokémon San Antonio Regional Championships</a>. Today features battles for three of the games in the current Play! Pokémon Circuit: TCG, GO and Pokémon Scarlet &amp; Violet.  All three games will be streamed in individual streams<br>
The Pokémon VG Stream begins at  16:00 (BST) / 11:00 (EDT) / 08:00 (PDT)<br>
The Pokémon TCG Stream begins at 17:30 (BST) / 12:30 (EDT) / 09:30  (PDT)<br>
The Pokémon GO Stream begins at 16:00 (BST) / 11:00 (EDT) / 08:00 (PDT)<br>
We have all the streams in our <a href="/playpokemon/stream/stream.shtml">Play! Pokémon Stream Hub</a> which allows for tabbing between all streams or loading all together</p></div>



   <div class="pics"><a href="/potw-sv/038.shtml"><img src="/potw-sv/038-i.jpg" alt="Pokémon of the Week - Ninetales" loading="lazy"></a></div>
<div class="subcat"><h3>In The Pokémon of the Week Department</h3>
<p class="title">Who's That Pokémon</p>
<p>Today marks the fifty-fifth entry into the Generation IX competitive field with a Kanto &amp; Alola Pokémon. These entries are created by the visitors for the visitors and then compiled by our writers Psynergy, Jellal, Mestorn, Aminith &amp; Mcdanger. To get involved, <a href="https://forums.serebii.net/forums/potw-collaboration.210/" target="blank"><u><b>Click here for the discussion forum</b></u></a> <br>Today, we are covering a Pokémon introduced in the first generation. Legend has it that this mystical Pokémon was formed when nine saints coalesced into one. It is vindictive and relentless by nature. Those who cross it even once will be cursed for a thousand years, along with their descendants.Said to live for a thousand years, this Pokémon uses its supernatural abilities to manipulate fire. It can burn its prey to a crisp as it pleases.  So, here it is, the fifty-fifth Pokémon, Ninetales</p></div>





</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/16-December-2023.shtml" id="16-December-2023">Saturday: Pokémon Scarlet &amp; Violet - Indigo Disk Coverage Day 3 + Pokémon GO Community Day + Pokémon Masters EX</a></h2><p class="info"><span class="date">16-12-2023 06:15 GMT / 00:15 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 20:02 GMT</p>
 
<div class="pics"><a href="/scarletviolet/thehiddentreasureofareazero/theindigodisk.shtml"><img src="/scarletviolet/leagueclub1.jpg" alt="Pokémon: Scarlet &amp; Violet Coverage 1" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet Coverage Day 3</p>
<p>The Pokémon Scarlet &amp; Violet The Indigo Disk is live and our coverage of the game and content is in full swing <b>If you want to remain unspoiled, do not click the spoiler tag, nor visit the Scarlet &amp; Violet section until you have your game</b>. Don't worry as blatant spoilers will NOT be on the home page. <br>
 Our <a href="/pokedex-sv/"><u>Scarlet &amp; Violet Pokédex</u></a>, <a href="/attackdex-sv/"><u>Scarlet &amp; Violet Attackdex</u></a>, <a href="/abilitydex/"><u>Abilitydex</u></a>, are now updated with all the new details. The <a href="/scarletviolet/pokemon.shtml">New Pokémon</a> and <a href="/scarletviolet/blueberrypokedex.shtml">Blueberry Pokédex</a>, <a href="/pokearth/terarium/">Pokéarth - Terarium and Interactive Map</a> and <a href="/scarletviolet/teraraidbattles.shtml">Tera Raid Battles</a> pages are also up to date with all the latest data<br>
Edit @ 06:35: Updated the <a href="/itemdex">Item Database</a> and the <a href="/scarletviolet/items.shtml">Items Listing</a> with more locations and listings<br>
Edit @ 07:06: Updated the page on <a href="/scarletviolet/formchange.shtml">Changing Forms</a><br>
Edit @ 08:05: Created a page on <a href="/scarletviolet/wildstellartypepokemon.shtml">Wild Stellar Tera Type Pokémon</a><br>
Edit @ 08:29: Updated the <a href="/scarletviolet/legendary.shtml">Legendary Pokémon</a> page with  a Mythical Pokémon that is obtainable. Its location has also been added to our Terarium Map<br>
Edit @ 10:40: Added native imagery for all the Pokémon added back in the DLC and the new Pokémon. We hope to do Shiny Pokémon before the end of the weekend<br>
Edit @ 11:32: Updated the <a href="/scarletviolet/blueberryquests.shtml">Blueberry Quests</a> page to include some task lists. We'll add more as we unlock them<br>
Edit @ 12:48: Updated the <a href="/pokedex-sv/">Pokédex</a> to include detailed locations for each Pokémon, linking to maps for all three regions where possible in the Details tab. Also added Static and Wild Tera locations to the locations bar<br>
Edit @ 13:55: Updated the <a href="/scarletviolet/ribbons.shtml">Ribbons page</a>
Edit @ 15:44: Updated the <a href="/scarletviolet/restaurantmeals.shtml">Restaurants &amp; Meals</a> section with new options<br>
Edit @ 17:05: Updated the <a href="/scarletviolet/academyacetournament.shtml">Academy Ace Tournament</a> with some new details added with the DLC<br>
Edit @ 17:59: Added spawn materials/details to the Pokédex and Interactive Map for The Indigo Disk<br>
Edit @ 18:56: As requested, created a page detailing how to unlock the <a href="/scarletviolet/leagueclubcoaches.shtml">League Club Coaches</a><br>
Edit @ 19:34: Updated the <a href="/itemdex">Item Database</a> and the <a href="/scarletviolet/items.shtml">Items Listing</a> with more locations and listings<br>
Edit @ 20:02: Added some new items to the <a href="/scarletviolet/customisation.shtml">Trainer Customisation</a> section<br>
Edit @ 22:25: Updated the <a href="/scarletviolet/updatedattacks.shtml">Updated Moves</a> page with some more updated moves
</p></div>

<div class="pics"><a href="/pokemongo/communityday/december2023.shtml"><img src="/pokemongo/community1223.jpg" width="300" alt="Pokémon GO" loading="lazy"></a></div>
 <div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO - Community Day</p>
<p>The Pokémon GO Community Day December 2023 is rolling out globally. Tis event runs from 09:00 local time to 21:00 local time both Saturday and Sunday, with increased spawns with better shiny chance and special bonuses from 14:00 to 17:00 local time. It features all Pokémon from 2023 and 2022 in spawns, eggs and raids<br>
We have full details on our <a href="/pokemongo/communityday/december2023.shtml">December 2023 Community Day</a> page</p></div>
 
<div class="pics"><a href="/pokemonmasters/events/bug-typegearevent.shtml"><img src="/pokemonmasters/events/bug-typegearevent.jpg" alt="Pokémon Masters - Anabel's Flickering Flames!" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Masters EX - Story  Event</p>
<p>A new Gear Event has begun in Pokémon Masters EX, the <a href="/pokemonmasters/events/bug-typegearevent.shtml">Bug-type Gear Event</a> which has you complete various stages to earn vouchers to exchange for Bug-type Gear. It runs until December 30th 2023

</p></div>


<div class="pics"><a href="/playpokemon/2024.shtml"><img src="/regionals.jpg" alt="Pokémon Championships" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Pokémon Championship Series Department</h3>
<p class="title">Pokémon Regional Championships</p>
<p>Today is Day 1 of the <a href="/playpokemon/2024/stuttgartregionalchampionships.shtml">Pokémon San Antonio Regional Championships</a>. Today features battles for three of the games in the current Play! Pokémon Circuit: TCG, GO and Pokémon Scarlet &amp; Violet.  All three games will be streamed in individual streams<br>
The Pokémon VG Stream begins at  17:00 (BST) / 12:00 (EDT) / 09:00 (PDT)<br>
The Pokémon TCG Stream begins at 17:00 (BST) / 12:00 (EDT) / 09:00 (PDT)<br>
The Pokémon GO Stream begins at 16:00 (BST) / 11:00 (EDT) / 08:00 (PDT)<br>
We have all the streams in our <a href="/playpokemon/stream/stream.shtml">Play! Pokémon Stream Hub</a> which allows for tabbing between all streams or loading all together</p></div>





</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/15-December-2023.shtml" id="15-December-2023">Friday: Pokémon Scarlet &amp; Violet - Indigo Disk Coverage Day 2 &amp; Nintendo Switch Online</a></h2><p class="info"><span class="date">15-12-2023 05:06 GMT / 00:06 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 21:17 GMT<br>Edit @ 09:30: Project Voltage | Edit @ 10:39: Episode Details | Edit @ 10;44: Distribution</p>
 
<div class="pics"><a href="/scarletviolet/thehiddentreasureofareazero/theindigodisk.shtml"><img src="/pokearth/maps/terarium/2.jpg" alt="Pokémon: Scarlet &amp; Violet Coverage 1" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet Coverage Day 1</p>
<p>The Pokémon Scarlet &amp; Violet The Indigo Disk is live and our coverage of the game and content is in full swing <b>If you want to remain unspoiled, do not click the spoiler tag, nor visit the Scarlet &amp; Violet section until you have your game</b>. Don't worry as blatant spoilers will NOT be on the home page. <br>
 Our <a href="/pokedex-sv/"><u>Scarlet &amp; Violet Pokédex</u></a>, <a href="/attackdex-sv/"><u>Scarlet &amp; Violet Attackdex</u></a>, <a href="/abilitydex/"><u>Abilitydex</u></a>, are now updated with all the new details. The <a href="/scarletviolet/pokemon.shtml">New Pokémon</a> and <a href="/scarletviolet/blueberrypokedex.shtml">Blueberry Pokédex</a>, <a href="/pokearth/terarium/">Pokéarth - Terarium and Interactive Map</a> and <a href="/scarletviolet/teraraidbattles.shtml">Tera Raid Battles</a> pages are also up to date with all the latest data<br>
Edit @ 06:00: Maintenance for Pokémon HOME is now over and the connectivity is live<br>
Edit @ 06:11: Added all the Legendary Locations to <a href="/pokearth/paldea/">Pokéarth - Paldea</a><br><br>
Edit @ 07:18: It's confirmed that if your Duraludon has the Gigantamax Mark, it can't be deposited in Scarlet &amp; Violet<br>
Edit @ 07;35: Added Trainer Locations and Wild Stellar Tera to the <a href="/pokearth/terarium/">Pokéarth Location Database - Terarium</a> Interactive Map. This is being done manually one biome at a time so will be added more and more as the day progresses so be sure to keep checking back<br>
Edit @ 08:20: Added over 150 more Item Locations to <a href="/pokearth/terarium/">Pokéarth - Terarium</a>, the <a href="/itemdex">Item Database</a> and the <a href="/scarletviolet/items.shtml">Items Listing</a><br>
Edit @ 08:52: Updated the <a href="/scarletviolet/auctions.shtml">Auctions</a> page with new items and a new auction<br>
Edit @ 09:19: Added shop locations to <a href="/pokearth/terarium/">Pokéarth - Terarium</a>, the <a href="/itemdex">Item Database</a> and the <a href="/scarletviolet/items.shtml">Items Listing</a><br>
Edit @ 10:07: Created a page on the <a href="/scarletviolet/itemprinter.shtml">Item Printer</a><br>
Edit @ 10:16: Added Item Printer details for the <a href="/itemdex">Item Database</a> and the <a href="/scarletviolet/items.shtml">Items Listing</a><br>
Edit @ 11;52: Added Trainer Locations and Wild Stellar Tera to the <a href="/pokearth/terarium/">Pokéarth Location Database - Terarium</a> Interactive Map for the Coastal Biome<br>
Edit @ 12:00: Updated the <a href="/scarletviolet/wildholditems.shtml">Wild Hold Items</a> page<br>
Edit @ 12:20: Updated the <a href="/pokemonhome/challenges.shtml">Challenges in Pokémon HOME</a> page<br>
Edit @ 13:24: Added over 150 more Item Locations to <a href="/pokearth/terarium/">Pokéarth - Terarium</a>, the <a href="/itemdex">Item Database</a> and the <a href="/scarletviolet/items.shtml">Items Listing</a><br>
Edit @ 14:50: Added Trainer Locations and Wild Stellar Tera to the <a href="/pokearth/terarium/">Pokéarth Location Database - Terarium</a> Interactive Map for the Canyon Biome<br>
Edit @ 15:55: Added Trainer Locations and Wild Stellar Tera to the <a href="/pokearth/terarium/">Pokéarth Location Database - Terarium</a> Interactive Map for the Polar Biome, making it complete<br>
Edit @ 16:02: Updated the <a href="/scarletviolet/wildteratypepokemon.shtml">Wild Tera Type Pokémon</a> page<br>
Edit @ 17:41; Updated the <a href="/scarletviolet/customisation.shtml">Trainer Customisation</a> page with all the new items added<br>
Edit @ 18:03: Updated the above with hair options<br>
Edit @ 18:54: Created a preliminary page on the <a href="/scarletviolet/leagueclub.shtml">League Club Room</a><br>
Edit @ 19:41: Created a preliminary page on <a href="/scarletviolet/leagueclubbattles.shtml">League Club Battles</a><br>
Done some fixes of a couple of problems where some item IDs got misaligned causing unintended behaviour on pages<br>
Edit @ 21:05: Added over 150 more Item Locations to <a href="/pokearth/terarium/">Pokéarth - Terarium</a>, the <a href="/itemdex">Item Database</a> and the <a href="/scarletviolet/items.shtml">Items Listing</a><br>
Edit @ 21:17: Updated the <a href="/scarletviolet/unusableattacks.shtml">Unused Attacks</a> section<br>
Edit @ 21:52: As requested, updated the <a href="/scarletviolet/snacksworthlegendary.shtml">Snacksworth's Legendary Pokémon</a> page with details and some preliminary pictures, as well as a link to the map for more precise locations

</p></div>

<div class="pics"><a href="/scarletviolet/serialcode.shtml"><img src="/scarletviolet/gift.jpg" alt="Pokémon Scarlet &amp; Violet" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>A new distribution has been announced for Pokémon Scarlet &amp; Violet. During next week's episode of the anime, a serial code will be released that will give players a special outfit item in the game. At present we don't know the outfit so be sure to check back next week for details<br>
Edit @ 11:24: It has been confirmed that this will be a distribution of a cap with the Terastal mark</p></div> 

<div class="pics"><a href="/scarletviolet/serialcode.shtml"><img src="/scarletviolet/paradoxgift.jpg" alt="Pokémon Scarlet &amp; Violet" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>A new distribution has been announced for Pokémon Scarlet &amp; Violet in Japan. In next month's issue of CoroCoro, due out on January 15th, you will get given a pair of serial codes for one of three random sets of Paradox Pokémon:  Flutter Mane &amp; Iron Jugulis, Scream Tail &amp; Iron Hands and Brute Bonnet &amp; Iron Thorns. Currently no further details on the distribution are known but we'll provide full details as it comes</p></div> 

 <div class="pics"><a href="/scarletviolet/"><img src="/nso12232.jpg" alt="Pokémon Scarlet &amp; Violet - Nintendo Switch Online Icons" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet - Nintendo Switch Online Icons</p>
<p>A new wave of the Pokémon Scarlet &amp; Violet Hidden Treasure of Area Zero icons is now live for Nintendo Switch Online Subscribers. This allows for players to purchase icons and borders to use as their icons. Wave 2 includes many returning ones and new ones featuring Archaludon and Juliana &amp; Florian in the Blueberry Academy Outfit. These are available for one week until December 22nd 2023</p></div>

   <div class="pics"><a href="/pokemongo/communityday/december2023.shtml"><img src="/pokemongo/community1223.jpg" width="300" alt="Pokémon GO - Adamant Time" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO</p>
<p>The next Pokémon GO event is starting to roll out in Asia Pacific regions. This event is the 2023 Community Day Finale. It runs from 09:00 to 21:00 on Saturday and Sunday It features spawns of all Community Day Pokémon throughout the day with increased spawns from 2pm to 5pm local time<br>
We are currently compiling details of this event, including the Timed Research &amp; Special Research, in our <a href="/pokemongo/communityday/december2023.shtml">Community Day December 2023</a> event section<br>
</p></div>



 <div class="pics"><a href="/playpokemon/2024.shtml"><img src="/playpokemon/2023/unite.jpg" alt="Pokémon Scarlet &amp; Violet - Nintendo Switch Online Icons" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon UNITE Championship Series</p>
<p>The Pokémon UNITE Championship Series has  been announced for the 2024 season to allow qualifying teams to get their World Championships invite.<br>The circuit is different in that the competitions build up Championship Points and Qualifications for various competitions on the way to the World Championships in August<br>
Aeos Cup – Play-Ins - February 10, 2024 - Championship Points, cash prizes, participation prizes<br>March Cup – Open Qualifier - March 9, 2024 - Top 8 qualifies for March Cup Finals<br>March Cup – Finals - March 16, 2024 - Championship Points, cash prizes, participation prizes<br>Aeos Cup - April 5-6, 2024 - Cash prizes, participation prizes, WCS invitations<br>April Cup – Open Qualifier - April 13, 2024 - Top 8 qualifies for April Cup Finals<br>April Cup – Finals - April 20, 2024 - Championship Points, cash prizes, participation prizes<br>Regional Championship – Open Qualifier - May 11, 2024 - Top 16 qualifies for Regional Championship Finals<br>Regional Championship – Finals - May 18-19, 2024 - Championship Points, cash prizes, participation prizes, WCS invitations<br>North America Regional Finals - June 7-8, 2024 - Championship Points, cash prizes, participation prizes, WCS invitations<br>Open Bracket 'The Final Stretch' - June 7-8, 2024 - Participation prizes, WCS invitation<br>2024 Pokémon World Championships - To Be Announced - Cash prizes, WCS title<br></p></div>

<div class="pics"><a href="/music/projectvoltage/gotchu.shtml"><img src="/music/projectvoltage/gotchu.jpg" alt="Pokémon feat. Hatsune Miku Project Voltage 18 Types 18 Songs" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Music Department</h3>
<p class="title"> Pokémon feat. Hatsune Miku Project Voltage 18 Types 18 Songs - Gotchu</p>
<p>The laters of the Pokémon feat. Hatsune Miku Project Voltage songs has been released. This is Gotchu by Giga with a special music video with various visuals showing a story featuring a variety of Pokémon.<br>
We have added details to our <a href="/music/projectvoltage/">Project Voltage</a> section including a special page on this song, <a href="/music/projectvoltage/gotchu.shtml">Gotchu</a>, including an embed. </p></div>

&nbsp;<div class="pics"><a href="/anime/epiguide/pokemon2023/033.shtml"><img src="/1269.jpg" alt="The Roaring Black Rayquaza" loading="lazy"></a></div>
<div class="subcat"><h3>In The Anime Department</h3>
<p class="title">Pokémon Horizons</p>
<p>The latest episode has aired in Japan today. This episode features the the Black Rayquaza appearing before the Rising Volt Tacklers. The <a href="/anime/dex"><u>AniméDex</u></a> has been updated with the contents of this <a href="/anime/epiguide/pokemon2023/033.shtml"><u>episode</u></a>. Click the picture to go to the section but be warned however as it contains spoilers.</p></div>


<div class="pics"><a href="/cafemix/events.shtml"><img src="/cafemix/calyrex'sthreesupremedishes.jpg" alt="Pokémon Café ReMix" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Café ReMix</p>
<p>The next Pokémon Café ReMix Slow Cooking event has begun. This event adds Calyrex into the game through a Slow Cooking event where you earn points to collect Calyrex<br>
The Alolan Ninetales (Holiday) outfit is also live in Delivery</p></div>

</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>
<div class="post">
<h2><a href="/news/2023/14-December-2023.shtml" id="14-December-2023">Thursday: Pokémon Scarlet &amp; Violet - Indigo Disk Coverage Day 1 &amp; Patch Notes + Pokémon UNITE - Holowear</a></h2><p class="info"><span class="date">14-12-2023 00:00 GMT / 19:00 EST</span> by <span class="user"><a href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
<p>This update will be amended throughout the day so be sure to check back. If you have any ideas for the site, be sure to send them in.<br>
<b>Last Update:</b> 21:44 GMT<br>Edit @ 00:13: Patch Notes | Edit @ 01:00: Indigo Disk Coverage | Edit @ 16;11: Pokétsume</p>
 
<div class="pics"><a href="/scarletviolet/thehiddentreasureofareazero/theindigodisk.shtml"><img src="/scarletviolet/titleid.jpg" alt="Pokémon: Scarlet &amp; Violet Coverage 1" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet Coverage Day 1</p>
<p>The Pokémon Scarlet &amp; Violet The Indigo Disk patch is now live and our copy is downloading. As such, our usual discoveries shall begin. As usual, I'll be posting the main focal points here, while more in-depth details go on the <a href="https://forums.serebii.net/threads/serebiis-pok%C3%A9mon-scarlet-violet-discovery-thread.741469/" target="blank"><u>discovery thread</u></a> on the forums <b>If you want to remain unspoiled, do not click the spoiler tag, nor visit the Scarlet &amp; Violet section until you have your game</b>. Don't worry as blatant spoilers will NOT be on the home page. <br>
Edit @ 02:07: Updated the <a href="/scarletviolet/attacks.shtml">New Attacks</a> page<br>
Edit @ 02:09: Updated the <a href="/scarletviolet/abilities.shtml">New Abilities</a> page<br>
Edit @ 02:22: Updated the <a href="/scarletviolet/thehiddentreasureofareazero/theindigodisk.shtml">The Indigo Disk</a> page with a list of all returning Pokémon<br>
Edit @ 02:58: The <a href="/pokedex-sv/">Serebii.net Scarlet &amp; Violet Pokédex</a> has been updated &amp; updated the <a href="/scarletviolet/pokemon.shtml">New Pokémon</a> page with the Pokémon added.<br>
Edit @ 03:06: Created a <a href="/scarletviolet/blueberrypokedex.shtml">Blueberry Pokédex</a> listing<br>
Edit @ 04:11: We have added all the data for <a href="/scarletviolet/teraraidbattles.shtml">Tera Raid Battles</a> introduced in The Teal Mask, separated from the Paldea ones to avoid confusion
<br>
Edit @ 04:50: Updated the <a href="/scarletviolet/exclusives.shtml">Version Exclusives</a> page<br>
Edit @ 05:14: Updated the <a href="/scarletviolet/newitems.shtml">New Items</a> page with new items<br>
Edit @ 05:40: Updated the <a href="/scarletviolet/terastal.shtml">Terastal</a> page with details on the Stellar Tera Type<br>
Edit @ 07:20: There is an Item Machine like the Cram-o-Matic that you can get in the League Club. We're working on details<br>
Edit @ 08:01: The <a href="/pokedex-sv/">Serebii.net Scarlet &amp; Violet Pokédex</a> has been updated with preliminary locations for all Pokémon. At present this doesn't include Fixed Encounters or Wild Tera Pokémon, as well as Legendary locations<br>
Edit @ 08:39: Updated the <a href="/games/shiny.shtml">Shiny Pokémon</a> page with shiny locks<br>
Edit @ 10:27: Updated the page on <a href="/scarletviolet/hordes.shtml">Pokémon Hordes</a><br>
Edit @ 10:34: Updated the page on <a href="/scarletviolet/massoutbreaks.shtml">Mass Outbreaks</a><br>
Edit @ 11:27: Updated the <a href="/scarletviolet/legendary.shtml">Legendary Pokémon</a> page<br>
Edit @ 12:21: Created a page on <a href="/scarletviolet/snacksworthlegendary.shtml">Legendary Pokémon from Snacksworth</a><br>
Edit @ 13:33: Created the <a href="/pokearth/terarium/">Terarium - Pokéarth</a> section containing the first spawn data of the game for all standard spawns as well as Fixed Encounters and the standard Wild Tera Pokémon. We'll be adding more to this map over the next few days<br>
Edit @ 13:56: Updated the <a href="/scarletviolet/unobtainable.shtml">Unobtainable Pokémon</a> listing<br>
Edit @ 15:06: Created a page on <a href="/scarletviolet/terariumstarters.shtml">Starter Pokémon in the Terarium</a><br>
Edit @ 16:00: Updated the <a href="/scarletviolet/transferonly.shtml">Transfer Only Pokémon page</a><br>
Edit @ 17:21: Started adding Item Locations to the <a href="/itemdex">Item Database</a> and <a href="/scarletviolet/items.shtml">Items Page</a>. Gradually adding more areas over the next couple of days with core items being listed such as Evolutionary items<br>
Edit @ 17:41: Updated the <a href="/scarletviolet/tm.shtml">TM</a> page with crafting materials<br>
Edit @ 18:35: Updated <a href="/pokearth/terarium/">Pokéarth Location Database - Terarium</a> to have trainer details on their respective page. Map details to come soon<br>
Edit @ 19:52: Created a page on the <a href="/scarletviolet/blueberryelitefour.shtml">Blueberry Elite Four</a><br>
Edit @ 20;10: Added Items and Tera Raid locations to the <a href="/pokearth/terarium/">Pokéarth Location Database - Terarium</a> Interactive Map<br>
Edit @ 20:58: Created a page on <a href="/scarletviolet/paradoxperrin.shtml">Perrin's New Task</a><br>
Edit @ 21:10: Updated the <a href="/scarletviolet/pokedexcompletion.shtml">Pokédex Completion Milestones</a><br>
Edit @ 21:33: Created a page on the <a href="/scarletviolet/leagueclubtrades.shtml">League Club Trades</a><br>
Edit @ 21:44: Updated the <a href="/scarletviolet/evolution.shtml">Evolution Method</a> page

</p></div>

<div class="pics"><a href="/scarletviolet/patch.shtml"><img src="/scarletviolet/title.jpg" alt="Pokémon: Scarlet &amp; Violet Coverage 1" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet Version 3.0.0</p>
<p>Ahead of its release shortly, we have details on the Pokémon Scarlet &amp; Violet 3.0.0 patch notes containing the details of what they have changed<br>
First returning Pokémon are added for all players to use<br>
The difficulty for Ogre Oustin' will be adjusted<br>
The move Hospitality has a bug fix where it causes unintended behaviour in some circumstances<br>
Protosynthesis and Quark Drive will no longer activate when in play with Neutralising Gas<br>
Other Bug Fixes will also run. This patch is required for online play

</p></div>

<div class="pics"><a href="/scarletviolet/internetevents.shtml"><img src="/scarletviolet/masterballgift.jpg" alt="Pokémon Scarlet &amp; Violet - Master Ball Distribution" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>A new distribution has begun in Pokémon Scarlet &amp; Violet. From now until January 3rd at 23:59 UTC, you will be able to receive a Master Ball through the Mystery Gift -&gt; Receive via Internet feature. </p></div>

 
<div class="pics"><a href="/scarletviolet/massoutbreakevent/festiveoutbreaks.shtml"><img src="/scarletviolet/decemberoutbreaks.jpg" alt="Pokémon Scarlet &amp; Violet - December Mass Outbreak" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Scarlet &amp; Violet</p>
<p>Coinciding with the release of The Indigo Disk, the currently running Mass Outbreak Event has received an update. This adds special event outbreaks for Milcery to the Terarium in the Blueberry Academy. The event runs until 23:59 UTC on December 21st 2023<br>
We have full details in our <a href="/scarletviolet/massoutbreakevent/festiveoutbreaks.shtml">Mass Outbreak Event Page</a>.
</p></div>

 
<div class="pics"><a href="/pokemongo/events.shtml"><img src="/pokemongo/winterholiday20232.jpg" width="300" alt="Pokémon GO" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon GO</p>
<p>Niantic have announced the next Pokémon GO event. This event is the Winter Holiday Part 2 event and is due to run from December 25th at 10:00 to December 31st at 20:00 local time and adds Shiny Vanilliteinto the game<br>
Pikachu, Alolan Vulpix, Psyduck, Seel, Eevee, Swinub, Delibird, Snorunt, Spheal, Galarian Darumaka, Vanillite, Cubchoo, Cryogonal, Cetoddle, Sneasel, Piloswine and Amaura will be in the wild<br>
Pikachu, Alolan Vulpix, Crabrawler, Cetoddle will be in 1 Star Raids<br>
Dewgong, Lapras, Delibird and Glaceon will be in 3 star raids<br>
Psyduck, Eevee, Smoochum, Galarian Darumaka and Amaura will be in 2km Eggs with Eevee and Psyduck having boosted shiny rates


</p></div>


&nbsp;<div class="pics"><a href="/poketsume/009.shtml"><img src="/poketsume/009.jpg" alt="A Rival's Existence" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The TV Department</h3>
<p class="title">Cram Adventure In Your Pocket</p>
<p>The latest episode of the TV Drama, PokéTsume, has aired in Japan. This episode features the ADventure team finding their clients are leaving for another company, with Madoka finding that her rival Midori is responsible. We have updated our section with the contents of this <a href="/poketsume/009.shtml"><u>episode</u></a> including Pokémon appearing in the episode. Click the picture to go to the section but be warned however as it contains spoilers.</p></div>



<div class="pics"><a href="/pokemonmasters/events/focusontheshiningshot.shtml"><img src="/pokemonmasters/events/focusontheshiningshot.jpg" alt="Pokémon Masters - Focus on the Shining Shot" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Masters EX - Story Event</p>
<p>As part of the "Focus on the Shining Shot"  Story Event in Pokémon Masters EX, a new Seasonal Scout is available to get the Sync Pair of <a href="/pokemonmasters/syncpairs/professorsycamore.shtml">Sycamore (Holidays 2023) &amp; Gogoat</a><br>
</p></div>


<div class="pics"><a href="/cafemix/events.shtml"><img src="/cafemix/alolanninetalesholiday.jpg" alt="Pokémon Café ReMix - Latios" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon Café ReMix</p>
<p>The next Pokémon Café ReMix  Delivery focus has been announced for Pokémon Café ReMix. This will feature the introduction of Alolan Ninetales' Holiday outfit to the game. It runs from December 15th 2023</p></div>


<div class="pics"><a href="/pokemonunite/holowear.shtml"><img src="/pokemonunite/holidaygoodra.jpg" alt="Pokémon UNITE" width="300" loading="lazy"></a></div>
<div class="subcat"><h3>In The Games Department</h3>
<p class="title">Pokémon UNITE</p>
<p>One new piece of <a href="/pokemonunite/holowear.shtml">Holowear</a> has been released for Pokémon UNITE. This is the Holiday outfit for <a href="/pokemonunite/pokemon/goodra.shtml">Goodra</a> which cost 2199 Gems with special animations for Scoring, Movement, Returning and KOs. It is <a href="/pokemonunite/premiumholowear.shtml">Premium Holowear</a></p></div>


</div>

<!-- end_news --><div align="left">
<p>Until Next Time, See Ya</p>
<p></p>
<div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
<p></p>
</div>


		<div style="text-align:right;margin:1em;"><a href="/archive.shtml">Archived News</a></div>

</main></div><!-- END #content -->

<aside id="rbar">
	<a href="/potw-sv/" class="navheader">Pokémon of the Week</a>
	<div align="center">
		<a href="/potw-sv/998.shtml"><img src="/potw-sv/998.jpg" alt="Pokémon of the Week" class="tbarpic"></a>
	</div>
	<div class="navheader">Next In Japan</div>
	<div>
		<div align="center"><img src="/anime/NextOn/1271.jpg" class="tbarpic"></div>
		Episode 35<br>
		<b>A Duo in the Wilderness: Friede and Cap</b><br>
		<div align="center"><img src="/anime/NextOn/1271-i.jpg" class="tbarpic"></div>
			Airdate: 12/01/2024
	</div>
	<div class="navheader">Recently In USA</div>
	<div>
		<div align="center"><a href="/anime/epiguide/pokemon/sp1.shtml"><img src="/thedistantbluesky.jpg" class="tbarpic"></a></div><a href="/anime/epiguide/pokemon/sp1.shtml">
		Special<br>
		<b>Distant Blue Sky</b><br>
		<img src="/anime/synopsis.gif">Synopsis</a><br>
		<a href="/anime/pictures/pokemon/sp.shtml"><img src="/anime/pictures.gif">Pictures</a><br>
	</div>
	<div class="navheader">Next In USA</div>
	<div>
		<div align="center"><a href="/anime/epiguide/pokemon2023/001.shtml"><img src="/1237.jpg" class="tbarpic"></a></div><a href="/anime/epiguide/pokemon2023/001.shtml">
		Episode 1<br>
		<b>The Pendant That Starts It All: Part One</b><br>
		Airdate: 23/02/24</a><br>
		<a href="/anime/epiguide/pokemon2023/001.shtml"><img src="/anime/synopsis.gif">Synopsis</a><br>
		<a href="/anime/pictures/pokemon2023/001.shtml"><img src="/anime/pictures.gif">Pictures</a><br>
	</div>
	<div class="navheader">Social Media</div>
	<div class="center">
		<a href="http://www.facebook.com/SerebiiNetPage" target="blank"><img src="/Toolbar/headers/Facebook.png" width="30" alt="Facebook"></a>
		<a href="http://www.twitter.com/SerebiiNet" target="blank"><img src="/Toolbar/headers/Twitter.png" width="30" alt="Twitter"></a>
		<a href="https://mastodon.social/@serebiinet" target="blank" rel="me"><img src="/Toolbar/headers/mastodon.png" width="30" alt="Mastodon"></a>
		<a href="http://www.youtube.com/serebiispp" target="blank"><img src="/Toolbar/headers/youtube.png" width="30" alt="YouTube"></a>
		<a href="http://www.instagram.com/serebii" target="blank" rel="nofollow"><img src="/Toolbar/headers/instagram.png" width="30" alt="Instagram"></a>
		<a href="http://www.threads.net/@serebii" target="blank" rel="nofollow"><img src="/Toolbar/headers/threads.png" width="30" alt="Threads"></a>
	</div>
	<div class="navheader">In Association With</div>
	<div class="center">
		<a href="http://www.pocketmonsters.net/" target="blank" rel="nofollow"><img src="/Toolbar/pm.png" alt="#PM"></a><br>
		<a href="http://www.legendarypokemon.net/" target="blank" rel="nofollow"><img src="/Toolbar/lpoke.png" alt="Legendary Pokémon"></a>
	</div>
</aside>
</div>
<footer id="footer">
	<div class="copyright">
		<a href="#top" alt="Top of Page" title="Top of Page" class="totop"></a>

		All Content is © Copyright of Serebii.net 1999-2023. |
		<a href="/privacy.shtml">Privacy Policy</a> |
		<a class="nn-cmp-show" href="#">Manage Cookie Settings</a><br>
		Pokémon and All Respective Names are Trademark &amp; © of Nintendo 1996-2023
	</div>

	<div style="height:102px">
		<div id="nn_lb2"></div><div id="nn_mobile_lb2"></div>
<div id="celtra-reveal-wrapper" style="position:fixed; height: auto; width: 100%">
<div id="nn_1by1"></div>
</div>
	</div>
</footer>
    
</body>
</html>