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
            <img src="https://www.serebii.net/BannerBg.jpg" alt="Serebii.net Header" style="height:139px">
        </div>

        <nav class="quicklinks">
            <ul>
                <li><b>Quick Links </b></li>
                <li><a href="/">- Home</a></li>
                <li><a href="https://github.com/MomentsOfInsanity" target="_blank"> - GitHub</a></li>
                <li><a href="https://youaremyeverything.net/" target="_blank"> - Cortex</a></li>
                <li><a href="https://www.financeofthings.net/" target="_blank"> - Finance of Things</a></li>
                <li><a href="https://www.youtube.com/@projectembers" target="_blank"> - ProjectEmbers(YT)</a></li>
                <li><a href="https://www.youtube.com/@momentsofinsanity" target="_blank"> - Moments of Insanity(YT)</a></li>


            </ul>
        </nav>
    </header>
    <div id="wrapper">

        <ul id="tbar_sticky">
            <li>
                <a href="#lbar" class="navheader" id="tbar_lbar_open"><img src="/hidden/2019-04/burger.svg"></a>
            </li>
            <li>
            </li>
            <li>
                <a href="#rbar" class="navheader" id="tbar_rbar_open" style="padding-right:20px"><img
                        src="/hidden/2019-04/burger.svg"></a>
            </li>
        </ul>
        <div id="tbar_backdrop"></div>

        <nav id="lbar">
            <ul id="lbar_ul">
                <li>
                    <a href="/" class="navheader">Databases</a>
                    <ul>
                        <li><a href="/index2.shtml">News</a>
                        </li>
                        <li><a href="/archive.shtml">Archived news</a></li>
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
                        <li><a href="/pokepark/">PokéPark Wii - Pikachu's Adventure</a></li>
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
                        </li>
                        <li><a href="/manga/dex">MangaDex</a></li>
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
            function loadMobileLbar() {
                var tbar_lbar_open = document.getElementById('tbar_lbar_open'),
                    tbar_backdrop = document.getElementById('tbar_backdrop'),
                    lbar = document.getElementById('lbar'),
                    lbarLIs = document.querySelectorAll("#lbar_ul>li .navheader"),
                    lbarLIULs = document.querySelectorAll("#lbar_ul>li>ul");

                /* lbar display/hide */
                tbar_lbar_open.onclick = function () {
                    if (lbar.className.indexOf("show") > -1) { //hide
                        lbar.className = lbar.className.replace("show", "");
                        bodyRemoveClass("nav_modal");
                    } else { //show
                        lbar.classList.add("show");
                        bodyAddClass("nav_modal");
                    }

                    return false;
                }


                /* background clicked when bar shown */
                tbar_backdrop.onclick = function () { // if the backdrop is clicked, hide menus
                    lbar.className = lbar.className.replace("show", "");
                    rbar.className = rbar.className.replace("show", "");
                    bodyRemoveClass("nav_modal");
                    return false;
                }

                /* handle expand/collapse sub-menus in lbar by attaching click events */
                for (i = 0; i < lbarLIs.length; i++) {
                    lbarLIs[i].onclick = function (i) {
                        var elem = this.parentNode.getElementsByTagName("UL")[0];
                        var elemDisp = (elem.className.indexOf("show") === -1)

                        // hide all ul, then open one if clicked
                        for (i2 = 0; i2 < lbarLIULs.length; i2++) {
                            lbarLIULs[i2].className = lbarLIULs[i2].className.replace("show", "");
                        }

                        if (elemDisp) {
                            elem.classList.add("show");
                        }

                        return false;
                    }
                }
            }

            function loadMobileRbar() {
                var tbar_rbar_open = document.getElementById('tbar_rbar_open'),
                    rbar = document.getElementById('rbar');

                /* rbar display/hide */
                tbar_rbar_open.onclick = function () {
                    if (rbar.className.indexOf("show") > -1) { //hide
                        rbar.className = rbar.className.replace("show", "");
                        bodyRemoveClass("nav_modal");
                    } else { //show
                        rbar.classList.add("show");
                        bodyAddClass("nav_modal");
                    }

                    return false;
                }
            }

            loadMobileLbar();

            /* attach listener to for rbar events AFTER page loads (because #rbar hasn't loaded at this point in page ) */
            if (window.addEventListener) {
                window.addEventListener('load', loadMobileRbar)
            } else {
                window.attachEvent('onload', loadMobileRbar)
            }
        </script>



        <div id="content">
            <!-- <div class="center" style="margin-top:16px;height:100px">
                <div id="nn_lb1"></div>
                <div id="nn_mobile_lb1"></div>
            </div> -->
            <main>

                <div class="post">
                    <h2><a href="/news/2023/28-December-2023.shtml" id="28-December-2023">Pinned: Building in Progress</a></h2>
                    <p class="info"><span class="date">12-28-2023 09:00 PM EST</span> by <span class="user"><a
                                href="mailto:raj.j.bedi@gmail.com">Asura</a></span>.</p>
                    <p>This is a site for me to experiment and build on. Here is a weather API connected to my github. It will update automatically.<br>
                        <b>Last Update:</b> 09:00 PM EST</p>

                    <div class="subcat">
                        <h3>WEATHER and DAY UPDATE</h3>
                        <p class="title">Chatting with Raj</p>
                        <p><a href="https://github.com/MomentsOfInsanity" target="_blank"><img src="https://raw.githubusercontent.com/MomentsOfInsanity/MomentsOfInsanity/main/chat.svg" width="300"
                                alt="Weather chat" loading="lazy"></a>
                        </p>
                    </div>




                </div>


                <div class="post">
                    <h2><a href="/news/2023/28-December-2023.shtml" id="28-December-2023">Thursday: Pokémon Concierge -
                            Release</a></h2>
                    <p class="info"><span class="date">28-12-2023 08:00 GMT / 03:00 EST</span> by <span class="user"><a
                                href="mailto:webmaster@serebii.net">Serebii</a></span>.</p>
                    <p>This update will be amended throughout the day so be sure to check back. If you have any ideas
                        for the site, be sure to send them in.<br>
                        <b>Last Update:</b> 09:01 GMT</p>

                    <div class="pics"><a href="/pokemonconcierge/"><img src="/pokemonconcierge/title2.jpg" width="300"
                                alt="Pokémon Concierge" loading="lazy"></a></div>
                    <div class="subcat">
                        <h3>In The TV Department</h3>
                        <p class="title">Pokémon Concierge</p>
                        <p>The new TV show, Pokémon Concierge, is now live to watch on Netflix across the world. This
                            series is a stop motion animated series following the exploits fo Haru as she goes to work
                            at a Pokémon Resort and befriends many of the Pokémon she finds there. There are four
                            episodes within the series ranging from 14 to 20 minutes each.<br>
                            We're currently working through and cataloguing all details of all four episodes in our <a
                                href="/pokemonconcierge">Pokémon Concierge</a> section so be sure to keep checking back
                            for full details<br>
                            Edit @ 09:01: We have updated the Pokémon Concierge section with details for every episode
                            as well as what characters and Pokémon appear within
                        </p>
                    </div>




                </div>

                <!-- end_news -->
                <div align="left">
                    <p>Until Next Time, See Ya</p>
                    <p></p>
                    <div align="center"><img src="/anime/pokemon/251.gif" width="131" height="165" border="0"></div>
                    <p></p>
                </div>
                

                

                
                
                
                
                
                
                
                
                
                
                
                
                
                


                <div style="text-align:right;margin:1em;"><a href="/archive.shtml">Archived News</a></div>

            </main>
        </div><!-- END #content -->

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
                <div align="center"><a href="/anime/epiguide/pokemon/sp1.shtml"><img src="/thedistantbluesky.jpg"
                            class="tbarpic"></a></div><a href="/anime/epiguide/pokemon/sp1.shtml">
                    Special<br>
                    <b>Distant Blue Sky</b><br>
                    <img src="/anime/synopsis.gif">Synopsis</a><br>
                <a href="/anime/pictures/pokemon/sp.shtml"><img src="/anime/pictures.gif">Pictures</a><br>
            </div>
            <div class="navheader">Next In USA</div>
            <div>
                <div align="center"><a href="/anime/epiguide/pokemon2023/001.shtml"><img src="/1237.jpg"
                            class="tbarpic"></a></div><a href="/anime/epiguide/pokemon2023/001.shtml">
                    Episode 1<br>
                    <b>The Pendant That Starts It All: Part One</b><br>
                    Airdate: 23/02/24</a><br>
                <a href="/anime/epiguide/pokemon2023/001.shtml"><img src="/anime/synopsis.gif">Synopsis</a><br>
                <a href="/anime/pictures/pokemon2023/001.shtml"><img src="/anime/pictures.gif">Pictures</a><br>
            </div>
            <div class="navheader">Social Media</div>
            <div class="center">
                <a href="http://www.facebook.com/SerebiiNetPage" target="blank"><img src="/Toolbar/headers/Facebook.png"
                        width="30" alt="Facebook"></a>
                <a href="http://www.twitter.com/SerebiiNet" target="blank"><img src="/Toolbar/headers/Twitter.png"
                        width="30" alt="Twitter"></a>
                <a href="https://mastodon.social/@serebiinet" target="blank" rel="me"><img
                        src="/Toolbar/headers/mastodon.png" width="30" alt="Mastodon"></a>
                <a href="http://www.youtube.com/serebiispp" target="blank"><img src="/Toolbar/headers/youtube.png"
                        width="30" alt="YouTube"></a>
                <a href="http://www.instagram.com/serebii" target="blank" rel="nofollow"><img
                        src="/Toolbar/headers/instagram.png" width="30" alt="Instagram"></a>
                <a href="http://www.threads.net/@serebii" target="blank" rel="nofollow"><img
                        src="/Toolbar/headers/threads.png" width="30" alt="Threads"></a>
            </div>
            <div class="navheader">In Association With</div>
            <div class="center">
                <a href="http://www.pocketmonsters.net/" target="blank" rel="nofollow"><img src="/Toolbar/pm.png"
                        alt="#PM"></a><br>
                <a href="http://www.legendarypokemon.net/" target="blank" rel="nofollow"><img src="/Toolbar/lpoke.png"
                        alt="Legendary Pokémon"></a>
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
            <div id="nn_lb2"></div>
            <div id="nn_mobile_lb2"></div>
            <div id="celtra-reveal-wrapper" style="position:fixed; height: auto; width: 100%">
                <div id="nn_1by1"></div>
            </div>
        </div>
    </footer>

</body>

</html>