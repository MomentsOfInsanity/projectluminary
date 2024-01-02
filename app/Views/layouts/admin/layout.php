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
                <li><a href="/">Home</a></li>
                <li><a href="https://github.com/MomentsOfInsanity" target="_blank">GitHub</a></li>
                <li><a href="https://youaremyeverything.net/" target="_blank">Cortex</a></li>
                <li><a href="https://www.financeofthings.net/" target="_blank">Finance of Things</a></li>
                <li><a href="https://www.youtube.com/@projectembers" target="_blank">ProjectEmbers(YT)</a></li>
                <li><a href="https://www.youtube.com/@momentsofinsanity" target="_blank">Moments of Insanity(YT)</a></li>


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
                    <a href="/card/" class="navheader">Quotes</a>
                    <ul>
                        <li><a href="/home/qotw">-Quote of the week</a></li>
                        

                    </ul>
                </li>
                <li>
                    <a href="/card/" class="navheader">Collections</a>
                    <ul>
                        <li><a href="/card/ry">-RY Series</a></li>
                        

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



<?php echo $content_for_layout; ?>   

        <aside id="rbar">
            <a href="/potw-sv/" class="navheader">Quote of the Week</a>
            <div align="center">
            “A year from now you may wish you had started today.” — Karen Lamb
            </div>
            
            
            
            <div class="navheader">Social Media</div>
            <div class="center">
                <!-- <a href="http://www.facebook.com/SerebiiNetPage" target="blank"><img src="/Toolbar/headers/Facebook.png"
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
                        src="/Toolbar/headers/threads.png" width="30" alt="Threads"></a> -->
            </div>
            <div class="navheader">In Association With</div>
            <div class="center">
                
            </div>
        </aside>
    </div>
    <footer id="footer">
        <div class="copyright">
            <a href="#top" alt="Top of Page" title="Top of Page" class="totop"></a>

            All Content is © Copyright of projectluminary.net 2023. |
            <a href="#">Privacy Policy</a> |
            <a class="nn-cmp-show" href="#">Manage Cookie Settings</a><br>
           Parts of site resembling Serebii.net used as reference © of 1999-2023.
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