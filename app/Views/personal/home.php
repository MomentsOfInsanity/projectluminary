<div id="content">
    <!-- <div class="center" style="margin-top:16px;height:100px">
                <div id="nn_lb1"></div>
                <div id="nn_mobile_lb1"></div>
            </div> -->
    <main>

        <div class="post">
            <h2><a href="/news/2023/28-December-2023.shtml" id="28-December-2023">Pinned: Building in Progress</a></h2>
            <p class="info"><span class="date">01-22-2025</span> by <span class="user"><a
                        href="mailto:embersmoi@gmail.com">Asura</a></span>.</p>
            <p>This is a site for me to experiment and build on. Here is a weather API connected to my github. It will
                update automatically.<br>
                <b>Last Update:</b> 09:00 PM EST</p>

            <div class="subcat">
                <h3>WEATHER and DAY UPDATE</h3>
                <p class="title">Chatting with Raj</p>
                <p><a href="https://github.com/MomentsOfInsanity" target="_blank"><img
                            src="https://raw.githubusercontent.com/MomentsOfInsanity/MomentsOfInsanity/main/chat.svg"
                            width="500" alt="Weather chat" loading="lazy"></a>
                </p>
            </div>

        </div>

        




















        <div style="text-align:right;margin:1em;"><a href="/home/archive_2024">Archived News</a></div>

    </main>
</div><!-- END #content -->
<script>
    let slideIndex = 1;
    let slideIndexb = 1;
    showSlides(slideIndex);
    showSlides2(slideIndexb);

    // Next/previous controls
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function plusSlides2(n) {
    showSlides2(slideIndexb += n);
    }

    function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    }

    function showSlides2(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides2");
    if (n > slides.length) {slideIndexb = 1}
    if (n < 1) {slideIndexb = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndexb-1].style.display = "block";
    }
</script>